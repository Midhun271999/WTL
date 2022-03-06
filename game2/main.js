var character = document.getElementById("character");
var result = document.getElementById("result");
var game = document.getElementById("game");
var score = document.getElementById("score");
var count = 0;
var sound = document.getElementById("sound")

function jump(){
    character.style.top = "110px";
    setTimeout(function(){
        character.style.top = "170px"
    },500);
    sound.play();
    count++
};

window.addEventListener("keydown", jump);

var block = document.getElementById("block");

setInterval(function gameOver(){
    var blockleft = parseInt(window.getComputedStyle(block).getPropertyValue("left"));
    var characterTop = parseInt(window.getComputedStyle(character).getPropertyValue("top"));
    if((blockleft < 40) && (characterTop > 120)){
        result.style.display = "block";
        game.style.display = "none";
        score.innerHTML = `score : ${count}`;

    }
},10);