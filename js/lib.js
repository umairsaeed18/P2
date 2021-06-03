const button = document.getElementById("runaway-btn");

const animateMove = (element, prop, pixels) =>
  anime({
    targets: element,
    [prop]: `${pixels}px`,
    easing: "easeOutCirc"
  });

["mouseover", "click"].forEach(function (el) {
  button.addEventListener(el, function (event) {
    const top = getRandomNumber(window.innerHeight - this.offsetHeight);
    const left = getRandomNumber(window.innerWidth - this.offsetWidth);

    animateMove(this, "left", left).play();
    animateMove(this, "top", top).play();
  });
});

const getRandomNumber = (num) => {
  return Math.floor(Math.random() * (num + 1));
};

// 

document.addEventListener("DOMContentLoaded", (event) => {
    //Om tekst te schrijven(typen)
      function typen(obj, woord, i, cb) {
        if (i != woord.length) {
          setTimeout(function () {
            i++;
            console.log("in timeout", i);
            obj.innerHTML =
              woord.substr(0, i + 1) + ' <em aria-hidden="true"></em>';
            typen(obj, woord, i, cb);
          }, 50);
        } else {
          console.log(i);
          cb();
        }
      }
    
      //Om tekst te verwijderen
      function verwijderen(obj, cb, i) {
        var woord = obj.innerText;
        if (woord.length != 0) {
          setTimeout(function () {
            woord = woord.substr(0, woord.length - 1);
            console.log("in timeout", i);
            obj.innerText = woord;
            verwijderen(obj, cb);
          }, 18 / (i * (i / 10000000)));
        } else {
          obj.innerText = " ";
          cb();
        }
      }
    //Data selecteren
      var typewritereffect = document.querySelector("#typewritereffect");
      function schrijfenverwijder(obj, woord, time, cb) {
        typen(obj, woord, 0, function () {
          setTimeout(function () {
            verwijderen(obj, cb);
          }, time);
        });
      }
      //Array met woorden 
      var woorden = [
        "Simple. ",
        "Fast. ",
        "Tiny.",
      ];
    
      //Functie om te blijven (loopen)herhalen 
      var loopcounter = 0;
      function loop() {
        var woord = woorden[loopcounter % woorden.length];
        schrijfenverwijder(typewritereffect, woord, 1800, loop);
        loopcounter++;
      }
      loop();
      
    });

    
    