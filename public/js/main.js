$( document ).ready(function() {
var buttons = document.getElementsByClassName('tab__link');
var contents = document.getElementsByClassName('tab__content');

function showContent(id) {
  for (var i = 0; i < contents.length; i++) {
    contents[i].style.display = 'none';
  }
  var content = document.getElementById(id);
  content.style.display = 'inline-flex';
}
for (var i = 0; i < buttons.length; i++) {
  buttons[i].addEventListener("click", function() {
    var id = this.textContent;
    for (var i = 0; i < buttons.length; i++) {
      buttons[i].classList.remove("active");
    }
    this.className += " active";
    showContent(id);
  });
}
showContent('Hotels');

$('#lightSlider').lightSlider({
  gallery: true,
  item: 1,
  loop: true,
  slideMargin: 0,
  thumbItem: 5
});

});

function zoom(e) {
  var zoomer = e.currentTarget;
  e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
  e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
  x = (offsetX / zoomer.offsetWidth) * 100
  y = (offsetY / zoomer.offsetHeight) * 100
  zoomer.style.backgroundPosition = x + "% " + y + "%";
}


function change_style()
{
var style = document.getElementById("box-user").style.display;
if(style == "none"){
 document.getElementById("box-user").style.display = 'block';
}else{
  document.getElementById("box-user").style.display = 'none';
}


}


