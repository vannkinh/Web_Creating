
//Getting from button press
var drumBtn = document.querySelectorAll(".drum").length;
for (var i = 0; i<drumBtn;i++){
    document.querySelectorAll(".drum")[i].addEventListener("click", function (){
        // object get the innerHTML such as (w,a,s,d,j,k,l)
        var buttonInnerHTML = this.innerHTML;
          makeSound(buttonInnerHTML);
          buttonAnimate(buttonInnerHTML);
    })
};

//Getting from key press
document.addEventListener("keypress",function(event){
     makeSound(event.key);
     buttonAnimate(event.key);
})

function makeSound(key){
     switch (key) {
          case 'w':
              var audio = new Audio('sounds/tom-1.mp3');
                   audio.play();
              break;
              case 'a':
              var audio = new Audio('sounds/tom-2.mp3');
                   audio.play();
              break;
              case 's':
              var audio = new Audio('sounds/tom-3.mp3');
                   audio.play();
              break;
              case 'd':
              var audio = new Audio('sounds/tom-4.mp3');
                   audio.play();
              break;
              case 'j':
              var audio = new Audio('sounds/snare.mp3');
                   audio.play();
              break;
              case 'k':
              var audio = new Audio('sounds/crash.mp3');
                   audio.play();
              break;
              case 'l':
              var audio = new Audio('sounds/kick-bass.mp3');
                   audio.play();
              break;
          default:
              break;
      }
}
function buttonAnimate (currentkey){
    var activeButton = document.querySelector("." + currentkey);
    activeButton.classList.add("pressed");

    setTimeout(function (){
         activeButton.classList.remove("pressed");
    })
}
