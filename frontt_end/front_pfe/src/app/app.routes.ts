import { Routes } from '@angular/router';
import { NgModule } from '@angular/core';
import { RouterModule } from '@angular/router';
import {AuthTechComponentComponent} from './auth-tech-component/auth-tech-component.component';
import {AuthRespComponentComponent}from './auth-resp-component/auth-resp-component.component';



export const routes: Routes = [
  //route for the auth-tech-component
  {path: 'authentification-technicien', component: AuthTechComponentComponent},
  //route for the auth-resp-component
  {path: 'authentification-responsable', component: AuthRespComponentComponent},

];

@NgModule({
  imports: [RouterModule.forRoot(routes), AuthTechComponentComponent, AuthRespComponentComponent],
  exports: [RouterModule]
})
export class AppRoutingModule { }
