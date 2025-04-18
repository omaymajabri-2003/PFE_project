import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AuthRespComponentComponent } from './auth-resp-component.component';

describe('AuthRespComponentComponent', () => {
  let component: AuthRespComponentComponent;
  let fixture: ComponentFixture<AuthRespComponentComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [AuthRespComponentComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(AuthRespComponentComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
