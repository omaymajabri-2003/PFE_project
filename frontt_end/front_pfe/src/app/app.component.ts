// filepath: c:\Users\lenovo\Desktop\PFE\CODE\PFE_project\frontt_end\front_pfe\src\app\app.component.ts
import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { RouterModule } from '@angular/router';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [RouterModule], // Ajoutez RouterModule ici
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'front_pfe';

  constructor(private router: Router) {}

  goToEspaceResponsable() {
    this.router.navigate(['/authentification-responsable']);
  }

  goToEspaceTechnicien() {
    this.router.navigate(['/authentification-technicien']);
  }
}
