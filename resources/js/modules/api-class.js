import axios from 'axios'

export default class ApiClass {
  constructor () {
    this.axiosInstance = axios.create({
      baseURL: `${location.origin}`
    });
  }

  get(uri) {
    return this.axiosInstance.get(uri);
  }

  post(uri, data) {
    return this.axiosInstance.post(uri, data);
  }
}