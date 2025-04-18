import { Component } from '@angular/core';
import { Router } from '@angular/router';
@Component({
  selector: 'app-auth-resp-component',
  imports: [],
  templateUrl: './auth-resp-component.component.html',
  styleUrl: './auth-resp-component.component.css'
})
export class AuthRespComponentComponent {
  constructor(private router: Router) { }
  goToEspaceResponsable() {
    this.router.navigate(['/authentification-responsable']);
  }

}
