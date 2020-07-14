// alert("Welcome To My Website!!");

// Random from 1 - 6
var randomNumber1 = Math.floor(Math.random() * 6)+1;

// dice1.png - dice6.png
var randomImg = "dice" + randomNumber1 + ".png";

// images/dice1.png - dice6.png
var randomImgSources = "images/" + randomImg;

// change random img (has 4 ways)
// var image1 = document.getElementsByTagName("img")[0];
// var image1 = document.getElementsByClassName("img1")[0];
// var image1 = document.getElementById("i1");
var image1 = document.querySelectorAll("img")[0];
image1.setAttribute("src", randomImgSources);

var randomNumber2 = Math.floor(Math.random() * 6)+1;
var randomImgSources2 = "images/"+"dice"+randomNumber2+".png";
var image2 = document.getElementById("i2");
image2.setAttribute("src",randomImgSources2);

if (randomNumber1>randomNumber2){
    document.querySelector("h1").innerHTML="Player 🥇 win this game";
}
else if (randomNumber1<randomNumber2){
    document.querySelector("h1").innerHTML="Player 🥈 win this game";
}
else {
    document.querySelector("h1").innerHTML="Noop 🙊";
}