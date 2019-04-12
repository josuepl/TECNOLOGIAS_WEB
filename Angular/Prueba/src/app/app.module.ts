import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { PrincipalComponent } from './principal/principal.component';
import { FormsModule } from '@angular/forms';


@NgModule({
  declarations: [
    AppComponent,
    PrincipalComponent
  ],
  imports: [
    BrowserModule, FormsModule
  ],
  providers: [],
  // bootstrap: [AppComponent]
  bootstrap: [PrincipalComponent]
})
export class AppModule { }
