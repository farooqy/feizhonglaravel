export default class UserError {

  constructor(error)
  {
    this.user_firstName = error.user_firstName;
    this.user_lastName =error.user_lastName;
    this.user_email = error.user_email;
    this.user_phone = error.user_phone;
    this.password = error.password;
    this.guest_id= error.guest_id;
    this.guest_token = error.guest_token;
    this.api_key = error.api_key;
  }
}
