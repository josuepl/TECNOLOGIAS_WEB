function appendText() {
  var txt1 = "<p>Text.</p>";        // Se crea parrafo con HTML
  var txt2 = $("<p></p>").text("Text.");  // Se crea parrafo con jQuery
  var txt3 = document.createElement("p");
  txt3.innerHTML = "Text.";         // Se crea parrafo con DOM
  $("body").append(txt1, txt2, txt3);   // Se añaden los elementos
}