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
    "a Freelancer. ",
    "a Photographer. ",
    "a Developer. ",
    "a Web Designer. ",
  ];

  //Functie om te blijven (loopen)herhalen 
  var loopcounter = 0;
  function loop() {
    var woord = woorden[loopcounter % woorden.length];
    schrijfenverwijder(typewritereffect, woord, 1800, loop);
    loopcounter++;
  }
  loop();

  
  const sliderContainer = document.querySelector(".slider-container");
  const slideRight = document.querySelector(".right-slide");
  const slideLeft = document.querySelector(".left-slide");
  const upButton = document.querySelector(".up-button");
  const downButton = document.querySelector(".down-button");
  const slidesLength = slideRight.querySelectorAll("div").length;

  let activeSlideIndex = 0;

  slideLeft.style.top = `-${(slidesLength - 1) * 100}vh`;

  upButton.addEventListener("click", () => changeSlide("up"));
  downButton.addEventListener("click", () => changeSlide("down"));

  const changeSlide = (direction) => {
    const sliderHeight = sliderContainer.clientHeight;
    if (direction === "up") {
      activeSlideIndex++;
      if (activeSlideIndex > slidesLength - 1) {
        activeSlideIndex = 0;
      }
    } else if (direction === "down") {
      activeSlideIndex--;
      if (activeSlideIndex < 0) {
        activeSlideIndex = slidesLength - 1;
      }
    }

    slideRight.style.transform = `translateY(-${
      activeSlideIndex * sliderHeight
    }px)`;
    slideLeft.style.transform = `translateY(${
      activeSlideIndex * sliderHeight
    }px)`;
  };
  
});
