var display = document.getElementById("display");
var button = document.querySelectorAll('button');
var screenValue = ' ';

for(item of button){
    item.addEventListener("click", (e)=>{
        buttonText = e.target.innerText;

        if(buttonText == '='){
            display.value = eval(screenValue);
            screenValue = display.value;
        }
        else if(buttonText == 'X'){
            buttonText = '*';
            screenValue += buttonText;
            display.value = screenValue;
        }
        else if(buttonText == 'C'){
            display.value = ' ';
            screenValue = " ";
        }
        else{
            screenValue += buttonText;
            display.value = screenValue;
        }
        

    })
}