import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AppComponent } from './app.component';
import { LoginComponent } from './prision/login/login.component';
import { WardComponent } from './prision/ward/ward.component';
import { LoginInterfazeComponent } from './login-interfaze/login-interfaze.component';
import { DashboardComponent } from './dashboard/dashboard.component';
import { MainPageComponent } from './main-page/main-page.component';


const routes: Routes = [

  //{ path: '', redirectTo:'login',pathMatch:'full' },
  { path: '',component: MainPageComponent },
  { path: 'dashboard/wards', component: WardComponent },
  { path: 'login', component: LoginInterfazeComponent },

  //{ path: '/', component: LoginInterfazeComponent },
 { path: '**', redirectTo: '/', pathMatch: 'prefix'}
];


@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
