import { Injectable } from '@angular/core';
import { Http, Headers } from '@angular/http';
import 'rxjs/add/operator/map';
import { tokenNotExpired } from 'angular2-jwt'

@Injectable()
export class AuthService {
	authToken: any;
	user     : any;

  constructor(private http: Http) { }

  registerUser(user) {
  	let headers = new Headers();
  	headers.append('Content-Type', 'application/json');
  	return this.http.post('https://home.hugocurado.info/asw17/users/register', user, {headers: headers})
      .map(res => res.json());
  }
  authenticateUser(user) {
  	let headers = new Headers();
  	headers.append('Content-Type', 'application/json');
  	return this.http.post('https://home.hugocurado.info/asw17/users/authenticate', user, {headers: headers})
      .map(res => res.json());
  }
  getLoggedInProfile(){
    this.loadUser();
    return this.user;
  }
  getProfile(){
    let headers = new Headers();
    this.loadToken();
    headers.append('Authorization', this.authToken);
    headers.append('Content-Type', 'application/json');
    return this.http.get('https://home.hugocurado.info/asw17/users/profile', {headers: headers})
      .map(res => res.json());
  }

  storeUserData(token, user){
    localStorage.setItem('id_token', token);
    localStorage.setItem('user', JSON.stringify(user));

    this.authToken = token;
    this.user      = user;
  }

  loadUser(){
    const user = JSON.parse(localStorage.getItem('user'));
    this.user = user;
  }

  loadToken(){
    const token = localStorage.getItem('id_token');
    this.authToken = token;
  }

  loggedIn(){
    return tokenNotExpired();
  }

  logout() {
    this.authToken = null;
    this.user      = null;

    localStorage.clear();
  }
}