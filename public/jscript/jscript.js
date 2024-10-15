((window, document, undefined)=>{
  'use strict'

  //Selectors
  let $selected = 0;
  

  //Methods

  const replaceText = (e) => {
    const char = e.key;
    const displayElement = e.target.parentElement.querySelector("label>div>p.pixel-text");

    if(e.ctrlKey && char.toLowerCase() == 'a'){
      $selected = 1;
    }else{

      if(char == "Backspace"){
        if(displayElement.childElementCount > 0){
          if($selected){
            displayElement.innerHTML = "";
            $selected = 0;
          }else{
            displayElement.removeChild(displayElement.lastElementChild);
          }
        }
      }else if(displayElement.childElementCount <24){
        const charP = document.createElement("i");
        const charCode = char.charCodeAt(0);
        charP.classList.add(`letter`);

        if($selected){
          displayElement.innerHTML = "";
          $selected = 0;
        }

        if(char == "."){
          charP.classList.add(`dot`);
          displayElement.append(charP);

        }else if(char == "@"){
          charP.classList.add(`arond`);
          displayElement.append(charP);

        }else if(e.code == "Space"){
          charP.classList.add(`space`);
          displayElement.append(charP);
        }else if((charCode > 64 && charCode < 91 && char.length < 2) || (charCode > 96 && charCode < 123 && char.length < 2)){

          if(char == char.toUpperCase()){
              charP.classList.add(`cap-${char.toLowerCase()}`);
          }else{
              charP.classList.add(`${char.toLowerCase()}`);
          }
          displayElement.append(charP);
        }else if(/^[0-9]$/.test(char) ){

          charP.classList.add(`n${char}`);

          displayElement.append(charP);

        }
      }
    }
  }

  //Events
  if("/login.php" == window.location.pathname || "/register.php" == window.location.pathname){
    document.getElementById("username").addEventListener("keydown", replaceText);
  }
  if("/register.php" == window.location.pathname){
    document.getElementById("email").addEventListener("keydown", replaceText);
    document.getElementById("nickname").addEventListener("keydown", replaceText);
  }

})(window, document);

