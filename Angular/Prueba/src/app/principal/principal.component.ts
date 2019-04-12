import { Component, OnInit, Input } from '@angular/core';
import { FormsModule,ReactiveFormsModule } from '@angular/forms';

@Component({
  selector: 'app-principal',
  templateUrl: './principal.component.html',
  styleUrls: ['./principal.component.css']
})
export class PrincipalComponent implements OnInit {
  constructor() { }
  titulo:any = 'EJERCICIO VAR TS';
// tslint:disable-next-line: no-input-rename
  datos: any = {nombre: "Ejemplo" , apellido: "", edad: "", id:""};

  ngOnInit() {
  }

  clickbtn(){
    console.log("Click en el bton");
  }
}
