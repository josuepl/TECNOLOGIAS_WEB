import { Component } from '@angular/core';
import {FormGroup, FormBuilder, Validators} from '@angular/forms';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  formulario: FormGroup;
  title = 'formularios';
 
  constructor(private frmBuilder: FormBuilder){
    this.formulario = this.frmBuilder.group({
      nombre: [ 'nombre por defecto', Validators.required],
      apellido: [ 'apellidos por defecto', Validators.required],
      email: [ 'ejemplo@correo.com', [Validators.required, Validators.pattern('[^ @]*@[^@]*')]],
      password: [ 'nombre por defecto', Validators.required]

    });
  }

  onSubmit(parametro){
    console.log(parametro.value.nombre);
  }
}
