import os
import json
import hashlib
def deunicodify_hook(pairs):
    new_pairs = []
    for key, value in pairs:
        if isinstance(value, unicode):
            value = value.encode('utf-8')
        if isinstance(key, unicode):
            key = key.encode('utf-8')
        new_pairs.append((key, value))
    return dict(new_pairs)

if(os.path.isfile('hash_file.json') is False):
    print("[-] The hash file has not been found")
    create_now = raw_input("Do you want to create now? (Y/N): ")
    if(create_now is "Y"):
        hash_file = open('hash_file.json', 'w')
        if(hash_file is False):
            print("[-] Failed to create the hash file")
        else:
            print("[+] Successfully created the hash file")
            # close(hash_file)

    else:
        print("[-] Exiting tracker ")
        exit(0)
hash_file = open('hash_file.json','r')
filedata = hash_file.read()
if(filedata is ""):
    filedata = "{}"
data = json.loads(filedata, object_pairs_hook=deunicodify_hook)
# print(data)
directory = raw_input("Specific directory?:  ")
copy_dir = raw_input("Copy to which directory?: ")

if(directory is ""):
    directory = "."
elif(os.path.exists(directory) is False):
    print("[+] The directory ",directory," Does not exist")
    exit(0)
elif(os.path.exists(copy_dir) is False):
    print("[+] The copy directory ",copy_dir," Does not exist")
    exit(0)
applied_changes = False

print("")
print("")
exception_files_dir = [
"index.php",".htaccess"
]
for root, dirs, files in os.walk(directory):

    for filename in files:
        skip  = False
        for dir in exception_files_dir:
            if(dir in root or dir == filename):
                skip = True
        if(skip):
            print("[**] Exception file or directory. Skipping ....")
            continue
        # print('Filname: ',filename)
        # _go_on = raw_input("Continue? (Y/N): ")
        # if(_go_on is "N"):
        #     continue
        # else:
        if(filename in exception_files_dir):
            print("[**] Found exceptional file. Skipping ...")
            continue
        file_content = open(root+"/"+filename, 'rb')
        if(file_content is False):
            print("[-] The file ", filename, " failed to open, possible permission error")
            continue
        index = root+filename
        hash_object = hashlib.md5(file_content.read())
        digest = hash_object.hexdigest()
        # print("[+] ",filename, " ---> ",digest)
        # write_json = raw_input("Write to json file? (y/n) : ")
        # if(write_json is "Y"):
        source = root+"/"
        if directory in source:
            sub_dir = source.split(directory)[1]
        else:
            sub_dir = ""
        target_dr = copy_dir+sub_dir
        if(os.path.exists(target_dr) is False):
            os.system("mkdir -p "+target_dr)
        if(index in data and data[index] == digest):
            # print("[+] files are equal digest ",index)
            continue
        elif index in data:
            print("[*] file change detected at ",index, ' new digest ',digest, ' ---> ',data[index])
            print("[*] Tracking changes .... ")
            data[index] = digest
            applied_changes = True

        else:
            print("[*] New file has been discovered at ",filename," setting digest ---> ",digest)
            # track = raw_input(" Track new file? (y/n): ")
            # if(track is "y"):
            data[index] = digest


            os.system("cp "+root+"/"+filename+" "+target_dr+filename)
            applied_changes = True
            # elif track is "x":
            #     hash_file = open('hash_file.json', 'w')
            #     json.dump(data, hash_file)
            #     exit(0)
    hash_file = open('hash_file.json', 'w')
    json.dump(data, hash_file)
    # exit(0)
if(applied_changes):
    print("")
    print("")
    print("[***] Completed changes Successfully")
else:
    print("")
    print("")
    print("[****] No changes detected. Process completed")
