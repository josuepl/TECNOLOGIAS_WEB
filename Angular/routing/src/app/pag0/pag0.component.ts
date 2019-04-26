import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-pag0',
  templateUrl: './pag0.component.html',
  styleUrls: ['./pag0.component.css']
})
export class Pag0Component implements OnInit {

  aux: any;
  aux2:any={codigo:0};
// tslint:disable-next-line: whitespace
// tslint:disable-next-line: max-line-length
  temas: any = [ { codigo:0, texto:'Opcion 0' }, { codigo:1, texto:'Opcion 1' },{ codigo:2, texto:'Opcion 2' },{ codigo:3, texto:'Opcion 3' },{ codigo:4, texto:'Opcion 4' }  ];
  publicaciones: any = [ 
    { 
    tema: { codigo: 0 , texto:'Opcion 0'},
    titulo:'Titulo 0', texto:'texto o informacion 0', valoracion:'bueno' , imgn:'https://previews.123rf.com/images/albisoima/albisoima1602/albisoima160200030/52766579-formas-fractales-locos-abstractas-como-fondo-psicod%C3%A9lico.jpg'},
    { 
    tema: { codigo: 1 , texto:'Opcion 1'},
    titulo:'Titulo 1', texto:'texto o informacion 1', valoracion:'malo', imgn:'https://previews.123rf.com/images/albisoima/albisoima1601/albisoima160100124/50920464-niza-formas-fractales-abstractos-locos-como-fondo.jpg'},
    { 
    tema: { codigo: 2 , texto:'Opcion 2'},
    titulo:'Titulo 2', texto:'texto o informacion 2', valoracion:'regular', imgn:'https://previews.123rf.com/images/albisoima/albisoima1507/albisoima150700445/43296203-bonito-papel-tapiz-abstracto-fractal-sobre-fondo-blanco.jpg'},
    { 
    tema: { codigo: 3 , texto:'Opcion 3'},
    titulo:'Titulo 3', texto:'texto o informacion 3', valoracion:'bueno', imgn:'https://previews.123rf.com/images/albisoima/albisoima1505/albisoima150500452/40320937-papel-pintado-abstracto-con-remolino-en-dos-colores.jpg' } 
  ];

  constructor() { }

  ngOnInit() {
  }

}
