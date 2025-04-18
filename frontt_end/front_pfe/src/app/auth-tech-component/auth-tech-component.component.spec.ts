import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AuthTechComponentComponent } from './auth-tech-component.component';

describe('AuthTechComponentComponent', () => {
  let component: AuthTechComponentComponent;
  let fixture: ComponentFixture<AuthTechComponentComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [AuthTechComponentComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(AuthTechComponentComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
