export default class User {

  constructor()
  {
    this.user_firstName = null;
    this.user_lastName =null;
    this.user_email = null;
    this.user_phone = null;
    this.password = null;
    this.password_confirmation = null;
    this.guest_id= null;
    this.guest_token = null;
    this.api_key = null;
    this.is_browser = true;
    this.user_profile = "/img/logo.png";
    this.error = {
      "user_firstName" : null,
      "user_lastName"  : null,
      "user_email" : null,
      "user_phone" : null,
      "password" : null,
      "guest_id" : null,
      "guest_token" : null,
      "api_key" : null,
    },
    this.address = "Uknown address";
    this.province_state = "Uknown";
    this.city = "Uknown";
    this.country = "Uknown";
    this.postal_code = "0000";
    this.about_me = null;

  }
}
