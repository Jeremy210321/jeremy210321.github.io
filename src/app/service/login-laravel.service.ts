import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { UserLogin } from './UserLogin';

@Injectable({
  providedIn: 'root'
})
export class LoginLaravelService {
  loginUrl: string = "http://localhost:8000/api/login"
  constructor(private httpc: HttpClient) { }
  loginUser(email: string, password: string) {

    let objectLogin: UserLogin = { email, password }
    return this.httpc.post<any>(this.loginUrl, objectLogin);
  }
}
