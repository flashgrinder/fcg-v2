function setBubble(range, bubble) {
    let val           = range.value;
    let min           = range.min ? range.min : 0;
    let max           = range.max ? range.max : 100;
    let newVal        = Number(((val - min) * 100) / (max - min));
    bubble.innerHTML  = val;
    bubble.style.left =  "calc(" +   newVal +    "% + (" +   (8 - newVal * 0.15) +  "px))";
}

function initializeRangeSliders(){
  const customRangeSliders = document.querySelectorAll(".custom-range__container");

  for (let i = 0; i < customRangeSliders.length; i++){
    (function(i){
      let rangeSlider = customRangeSliders[i];
      let range       = rangeSlider.querySelector(".custom-range__slide");
      let bubble      = rangeSlider.querySelector(".custom-range__bubble");
      range.addEventListener("input", function(){ setBubble(range, bubble); });
      range.addEventListener("change", function(){ setBubble(range, bubble); });

      setBubble(range, bubble);
    })(i);
  }
}


function init(){
  initializeRangeSliders();
}

export default {init}