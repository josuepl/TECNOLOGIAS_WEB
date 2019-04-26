import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { Pag2Component } from './pag2.component';

describe('Pag2Component', () => {
  let component: Pag2Component;
  let fixture: ComponentFixture<Pag2Component>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ Pag2Component ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(Pag2Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
