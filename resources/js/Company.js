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

    this.company_address_one = null;
    this.company_address_two = null;
    this.company_province = null;
    this.company_city = null;
    this.company_token = null;
    this.company_id = null;

    this.company_type = null;
    this.company_subtype = null;
    this.company_description = null;
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
        "Other"
      ],
      [
        "Fishing industry",
        "Timer Industry",
        "Tobacco Industry",
        "Other"
      ],
      [
        "Pharmaceutical Industry",
        "Other"
      ],
      [
        "Software Industry",
        "Other"
      ],
      [
        "Other"
      ],
      [
        "Arms industry",
        "Other"
      ],
      [
        "Other"
      ],
      [
        "Electrical Power",
        "Petroleum Industry",
        "Other"
      ],
      [
        "Other"
      ],
      [
        "Insurance industry",
        "Other"
      ],
      [
        "Fruit Production",
        "Other"
      ],
      [
        "Hospital facilities",
        "Other"
      ],
      [
        "Motion industry",
        "Other",
      ],
      [
        "Automotive Industry",
        "Electronic Industry",
        "Pulp and paper",
        "Steel Industry",
        "Ship building",
        "Other"
      ],
      [
        "Broadcasting",
        "Film Industry",
        "Music Industry",
        "News Media",
        "Publishing",
        "World Wide Web",
        "Other"
      ],
      [
        "Gold mining",
        "Mineral mining",
        "Other",
      ],
      [
        "Internet",
        "Other"
      ],
      [
        "Other"
      ],
      [
        "Other"
      ],
      [
        "Other"
      ],
      [
        "Other"
      ],
    ];
  }
}
