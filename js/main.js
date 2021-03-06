document.addEventListener("DOMContentLoaded", (event) => {
    //Om tekst te schrijven(typen)
    function typen(obj, woord, i, cb) {
        if (i != woord.length) {
            setTimeout(function() {
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
            setTimeout(function() {
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
        typen(obj, woord, 0, function() {
            setTimeout(function() {
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



    const nextEl = document.getElementById("next");
    const previousEl = document.getElementById("previous");
    const sliderEl = document.getElementById("slider");
    //const imgWidth = sliderEl.offsetWidth;
    nextEl.addEventListener("click", onNextClick);
    previousEl.addEventListener("click", onPreviousClick);

    function onNextClick() {
        const imgWidth = sliderEl.offsetWidth;
        sliderEl.scrollLeft += imgWidth;
    }

    function onPreviousClick() {
        const imgWidth = sliderEl.offsetWidth;
        sliderEl.scrollLeft -= imgWidth;
    }

});