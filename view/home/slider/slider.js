class SliderClass {
  constructor() {

container_img.style.left = "0";
this.mouse = false;
let currentIndex = 0;
const totalSlides = 5; // Número de imágenes
const slideWidth = 100; // Porcentaje

const updateSlider = () => {
  container_img.style.transform = `translateX(-${currentIndex * slideWidth}vw)`;

};


right_slider.addEventListener("click", () => {
  currentIndex = (currentIndex + 1) % totalSlides;
  updateSlider();
});

left_slider.addEventListener("click", () => {
  currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
  updateSlider();
  sliderClass.animateTextSlider(currentIndex);
});

  //animation time
  setInterval(() => {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateSlider();
  }, 8000); // Cada 8 segundos

  //hold animation slider
  for (let i = 0; i < data_slider.length; i++) {
    data_slider[i].addEventListener("mouseenter", function (e) {
      //alert("ENTRÓ al contenedor", e.currentTarget);
    });

    data_slider[i].addEventListener("mouseleave", function (e) {
      //alert("SALIMOS del contenedor", e.currentTarget);
    });
  }
  }
  //animacion dispositiva DOM

}
const restartAnimation = (element, animationString) => {
    element.style.animation = 'none'; // Limpia la animación
    void element.offsetWidth;         // Fuerza reflujo (hack)
    element.style.animation = animationString; // Aplica nueva animación

};

 const data_slider = document.querySelectorAll(".data_slider");

 const h3_slider = document.querySelectorAll(".h3_slider");
 const h1_slider  = document.querySelectorAll(".h1_slider");
 const p_slider  = document.querySelectorAll(".p_slider");
 const line_slider  = document.querySelectorAll(".line_slider");
 const button_slider  = document.querySelectorAll(".button_slider");



 const container_img  = document.getElementById("container_img");
 const left_slider  = document.getElementById("left_slider");
 const right_slider  = document.getElementById("right_slider");
 const sliderClass = new SliderClass();
