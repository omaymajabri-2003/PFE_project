import { bootstrapApplication } from '@angular/platform-browser';
import { provideRouter } from '@angular/router';
import { AppComponent } from './app/app.component';
import { AuthRespComponentComponent } from './app/auth-resp-component/auth-resp-component.component';
import { AuthTechComponentComponent } from './app/auth-tech-component/auth-tech-component.component';

import { Routes } from '@angular/router';

const routes: Routes = [
  { path: 'authentification-responsable', component: AuthRespComponentComponent },
  { path: 'authentification-technicien', component: AuthTechComponentComponent },
  { path: '', redirectTo: '/authentification-responsable', pathMatch: 'full' } // Route par défaut
];

bootstrapApplication(AppComponent, {
  providers: [provideRouter(routes)]
}).catch(err => console.error(err));
