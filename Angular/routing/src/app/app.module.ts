import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';


import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { Pag0Component } from './pag0/pag0.component';
import { Pag1Component } from './pag1/pag1.component';
import { Pag2Component } from './pag2/pag2.component';
import { Pag3Component } from './pag3/pag3.component';

import { Routes, RouterModule, Router } from '@angular/router';


const routes: Routes = [
  {path: '', component: Pag0Component },
  {path: 'Pag1', component: Pag1Component },
  {path: 'Pag2', component: Pag2Component },
  {path: 'Pag3', component: Pag3Component },
  {path: '**', component: Pag0Component },
];

@NgModule({
  declarations: [
    AppComponent,
    Pag1Component,
    Pag2Component,
    Pag3Component,
    Pag0Component
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    RouterModule.forRoot(routes) // se indican las rutas que estaran disponibles
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
