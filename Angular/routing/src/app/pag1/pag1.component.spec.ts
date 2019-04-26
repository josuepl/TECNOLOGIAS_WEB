import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { Pag1Component } from './pag1.component';

describe('Pag1Component', () => {
  let component: Pag1Component;
  let fixture: ComponentFixture<Pag1Component>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ Pag1Component ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(Pag1Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
