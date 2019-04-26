import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { Pag0Component } from './pag0.component';

describe('Pag0Component', () => {
  let component: Pag0Component;
  let fixture: ComponentFixture<Pag0Component>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ Pag0Component ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(Pag0Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
