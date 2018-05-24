document.addEventListener("DOMContentLoaded", function(event) {
  document.getElementById("divPlus").addEventListener("click", plus_click);
});

function plus_click(){
  var square = document.createElement('article');
  var main = document.getElementById("main");
  square.className = "square";
  square.style.opacity = Math.random();
  main.insertBefore(square,main.childNodes[0]);
}
