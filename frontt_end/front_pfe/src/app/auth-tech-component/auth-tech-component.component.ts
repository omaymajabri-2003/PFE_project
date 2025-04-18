import { Component } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-auth-tech-component',
  imports: [],
  templateUrl: './auth-tech-component.component.html',
  styleUrl: './auth-tech-component.component.css'
})
export class AuthTechComponentComponent {
  // Add any properties or methods needed for the component here
  constructor(private router: Router) { }
  goToEspaceTechnicien() {
    this.router.navigate(['/authentification-technicien']);
  }
}
