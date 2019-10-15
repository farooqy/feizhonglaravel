export default class serverRequest {
  constructor() {
    this.req = null;
    this.error = null;
    this.data =  null;
  }
  setRequest(req)
  {
    console.log('will set request ',req);
    this.req = req;
  }
  serverRequest(url, successCallback, errorCallback)
  {
    axios.post(url, this.req).
    then(response => {
      response = response.data;
      if(response.hasOwnProperty('error_message'))
      {
        console.log('server error ',response.error_message);
        this.error = response.error_message;
        errorCallback(this.error);
        return false;
      }
      else if(response.isSuccess)
      {
        console.log('success request ',response);
        this.data = response.data;
        successCallback(this.data);
        return true;
      }
      else
      {
        console.log('error reposen ',response);
        this.error = response.errorMessage[0];
        errorCallback(this.error);
        return false;
      }
    })
    .catch(error => {
      console.log("server error ",error);
      errorCallback(error);
    })
  }
  getError()
  {
    return this.error;
  }
  getData()
  {
    return this.data;
  }
}
