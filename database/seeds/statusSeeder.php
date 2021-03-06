<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
class statusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo "[*] Generating status token for random company \n";

        $num_files = rand(2,5);
        echo "[*] Selected $num_files files to generate for the status /product \n";
        $tokenGenerator = factory(App\models\tokenStatusGeneratorModel::class)->create();
        $generated_token = $tokenGenerator->generated_token;
        $comp_id = $tokenGenerator->generated_for_id;
        $comp_token = $tokenGenerator->generated_for_token;
        $files = $this->generate_files($num_files, $comp_id, $comp_token, 'business');
        if(count($files) !== $num_files)
        {
            echo "[-] Failed the number files take is not the same as fetched files \n";
            echo "[-] Feched files ".count($files)." , expected files $num_files";
            return;
        }
        for($i=0; $i < count($files); $i++)
        {
            $uploaded_files = factory(App\models\uploadedFilesModel::class)->create([
              'file_url' => $files[$i],
              'file_uploaded_by_id' => $comp_id,
              'file_uploaded_by_who' => $comp_token,
              'file_generated_token' => $generated_token
            ]);
            echo "[*] Saved status file with url: ".$files[$i]."\n";
        }

        echo "[+] Status file generation and saving completed \n";

        echo "[*] Saving the status data ...\n";
        $status_content = factory(App\models\compStatusModel::class)->create([
          'comp_id' => $comp_id,
          'comp_token' => $comp_token,
          'status_generated_token' => $generated_token
        ]);

        echo "[*] Completed saving the status \n";

        $num_files = rand(2,5);
        $product_files = $this->generate_files($num_files, $comp_id, $comp_token, "technics");
        for($j=0; $j < count($product_files); $j++)
        {
            $uploaded_files = factory(App\models\products\productFilesModel::class)->create([
              'file_url' => $product_files[$j],
              'file_uploaded_by_id' => $comp_id,
              'product_gen_token' => $generated_token
            ]);
            echo "[*] Saved product file with url: ".$files[$j]."\n";
        }
        echo "[*] Adding product for the same company \n";


        echo "[*] Saving the product data ...\n";
        $product_content = factory(App\models\products\productModel::class)->create([
            "product_gen_token" => $generated_token,
            "product_for_id" => $comp_id,
        ]);

        echo "[++] Completed saving the generated status and product \n";


    }
    public function generate_files($num_files, $comp_id, $comp_token, $type)
    {
        $faker = Faker::create();
        $dir = 'uploads/comp/'.$comp_token.'/status';
        if(env("APP_ENV") ==="local")
          $path = public_path($dir);
        else
          $path = env("APP_ROOT").$dir;
        if(!is_dir($path))
          mkdir($path, 765, true);
        $files = [];
        for($i=0; $i < $num_files; $i++)
        {

          $image_url = env('APP_URL').'/'.$dir.'/'.$faker->image($path, 640, 480, $type, false);
          $files[$i] = $image_url;
        }
        return $files;
    }
}
