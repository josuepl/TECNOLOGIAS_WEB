import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { Pag3Component } from './pag3.component';

describe('Pag3Component', () => {
  let component: Pag3Component;
  let fixture: ComponentFixture<Pag3Component>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ Pag3Component ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(Pag3Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
