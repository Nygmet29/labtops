function soundMashina(){
  var audio = new Audio();
  audio.src = 'assets/clicks.mp3';
  audio.autoplay = true;
}
var audio = new Audio("soundfile.wav");

document.onclick = function() {
  audio.play();
}
