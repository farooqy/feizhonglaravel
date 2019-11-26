export default class Company {
  constructor(){
    this.company_logo = "/atoc_assets/images/upload_logo_icon.jpg";
    this.company_name = null;
    this.company_email=null;
    this.country_code = "+86";
    this.company_phone= null;
    this.company_password = null;
    this.company_password_verification =null;
    this.verification_code = null;
    this.guest_id = null;
    this.guest_token = null;
    this.api_key = null;
    this.company_needs =[];
    this.is_verified = false;

    this.company_address_one = null;
    this.company_address_two = null;
    this.company_province = null;
    this.company_city = null;
    this.company_token = null;
    this.company_id = null;

    this.company_type = null;
    this.company_subtype = null;
    this.company_description = null;
    this.company_hasLicense = null;
    this.company_license = null;
    this.browser = true;
    this.error = {

        "company_logo" : null,
        "company_name" : null,
        "company_phone": null,
        "company_password" : null,
        "verification_code" : null,
        "guest_id" : null,
        "guest_token" : null,
        "api_key" : null,

        "company_address_one" : null,
        "company_province" : null,
        "company_city" : null,
        "company_token" : null,
        "company_id" : null,

        "company_type" : null,
        "company_subtype" : null,
        "company_description" : null,
    };
    this.types = [
      [
        "Civil Aircraft",
        "General Aviation Aircraft",
        "Commercial Heavy Aircraft",
        "Military Aircaft",
        "Helicopters",
        "Unmanned aerial vehicles",
        "Missiles",
        "Space launchers",
        "Spacecraft",
        "Airships",
        "Propulsion",
        "Avionics",
      ],
      [
        "Fishing industry",
        "Timer Industry",
        "Tobacco Industry",
        "Coffee industry"
      ],
      [
        "Face make up",
        "Slim products"
      ],
      [
        "Pharmaceutical Industry",
      ],
      [
        "Software Industry",
      ],
      [
        "Metals",
        "Bricks"
      ],
      [
        "Arms industry",
      ],
      [
        "Books",
        "Pens"
      ],
      [
        "Electrical Power",
        "Petroleum Industry",

      ],
      [
        "Dj Equeipments",
      ],
      [
        "Insurance industry",
      ],
      [
        "Fruit Production",
      ],
      [
        "Hospital facilities",
      ],
      [
        "Motion industry",
      ],
      [
        "Automotive Industry",
        "Electronic Industry",
        "Pulp and paper",
        "Steel Industry",
        "Ship building",
      ],
      [
        "Broadcasting",
        "Film Industry",
        "Music Industry",
        "News Media",
        "Publishing",
        "World Wide Web",
      ],
      [
        "Gold mining",
        "Mineral mining",
      ],
      [
        "Internet",
        "Signal Boosters"
      ],
      [
        "Brigdes",
        "Road staff"
      ],
      [
        "Water bottles",
        "Drinks"
      ],
      [
        "Heavy products"
      ],
      [
        "Other"
      ],
    ];
  }

  getBasicInfo()
  {
    return {
      company_logo: this.company_logo,
      company_name: this.company_name,
      company_email : this.company_email,
      company_phone: this.country_code+this.company_phone,
      verification_code: this.verification_code,
      company_password: this.company_password,
      company_password_verification: this.company_password_verification,
      
    }
  }
  getAddresInfo()
  {
    return {
      company_address_one: this.company_address_one,
      company_address_two: this.company_address_two,
      company_province: this.company_province,
      company_country: this.company_city,
    }
  }
  getTypeInfo()
  {
    return {
      company_type : this.company_type,
      company_subtype : this.company_subtype,
      company_description: this.company_description,
    }
  }
  getLoginInfo()
  {
    return {
      company_email: this.company_email,
      company_password: this.company_password
    }
  }
}
