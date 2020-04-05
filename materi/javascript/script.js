(function () {
"use strict";
var my_function = function (event){
    alert("halo mahasiswa primakara");
    event.preventdefault();

};

var form = document.getElementById("cart-hplus");

form.addEventListener("submit", my_function, true);

}) ();