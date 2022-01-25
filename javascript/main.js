// document.addEventListener('DOMContentLoaded', function() {

// }, false);

let windowSize = window;

const handleSectionWrapper = () => {
  let autoWrapper = document.querySelectorAll(".auto-wrapper");
  // swap container classes
  for (let i = 0; i < autoWrapper.length; i++) {
    if (windowSize.innerWidth < 1100) {
      if (
        autoWrapper[i].classList.contains("container") &&
        !autoWrapper[i].classList.contains("container-fluid")
      ) {
        autoWrapper[i].classList.remove("container");
        autoWrapper[i].classList.add("container-fluid");
      }
    }
    if (windowSize.innerWidth > 1100) {
      if (
        !autoWrapper[i].classList.contains("container") &&
        autoWrapper[i].classList.contains("container-fluid")
      ) {
        autoWrapper[i].classList.add("container");
        autoWrapper[i].classList.remove("container-fluid");
      }
    }
  }
};
handleSectionWrapper();
document.addEventListener("readystatechange", () => {
  window.addEventListener("resize", () => {
    // console.log('resize!')
    handleSectionWrapper();
  });
});

/* print page */
function printPage() {
  const footerTopWidget = document.querySelector("#top-footer-widget");
  footerTopWidget.style.display = "none";
  window.print();
}

/* go back */
function goBack() {
  window.history.back();
}

/* open item preview */
const itemPreview = document.querySelector("#preview-widget");
const overlay = document.querySelector("#overlay");

function openPreview() {
  overlay.classList.add("open");
  itemPreview.classList.add("open");
}

/* close item preview */
const closePreviewWidgetBtn = document.querySelector(
  "#close-preview-widget-btn"
);
if (closePreviewWidgetBtn) {
  closePreviewWidgetBtn.addEventListener("click", () => {
    overlay.classList.remove("open");
    itemPreview.classList.remove("open");
  });
}

/* LOAD/SYSTEM QUESTIONAIRE form widget */
const slidePage = document.querySelector(".slidePage");
const firstNextBtn = document.querySelector(".firstNextBtn");
const firstPrevBtn = document.querySelector(".firstPrevBtn");
const size = 100;

if (firstNextBtn) {
  firstNextBtn.addEventListener("click", () => {
    slidePage.style.marginLeft = -100 / 2 + "%";
    var bulbs = document.querySelectorAll(".bulb");
    for (let i = 0; i < bulbs.length; i++) {
      if (!bulbs[i].classList.contains("active-full")) {
        bulbs[i].classList.add("active");
        bulbs[i].classList.add("active-full");
      }
    }
  });
}
/* PREVIOUS BUTTONS */
if (firstPrevBtn) {
  firstPrevBtn.addEventListener("click", () => {
    slidePage.style.marginLeft = "0%";
    pregressWidth = 100 / 3;
    var bulbs = document.querySelectorAll(".bulb");
    for (let i = 0; i < bulbs.length; i++) {
      if (bulbs[i].classList.contains("active-full")) {
        bulbs[i].parentElement.lastElementChild.classList.remove("active-full");
        if (
          bulbs[i].classList.contains("second") &&
          bulbs[i].classList.contains("active")
        ) {
          bulbs[i].classList.remove("active");
        }
      }
    }
  });
}

// star ratings
const stars = document.querySelectorAll(".review_star");
var ratingValue = document.querySelector("#rating_value");
var index;
for (let i = 0; i < stars.length; i++) {
  stars[i].addEventListener("mouseover", function () {
    for (let j = 0; j < stars.length; j++) {
      stars[j].classList.remove("fas");
      stars[j].classList.add("far");
    }
    for (let j = 0; j <= i; j++) {
      stars[j].classList.remove("far");
      stars[j].classList.add("fas");
    }
  });

  stars[i].addEventListener("click", function () {
    ratingValue.value = i + 1;
    index = i;

    // the value of rating stars
    // console.log(`rating is ${ratingValue.value}`)
  });
  stars[i].addEventListener("mouseout", function () {
    for (let j = 0; j < stars.length; j++) {
      stars[j].classList.remove("fas");
      stars[j].classList.add("far");
    }
    for (let j = 0; j <= index; j++) {
      stars[j].classList.remove("far");
      stars[j].classList.add("fas");
    }
  });
}

/* Out of stock product card */

const OutOfStock = () =>{
    const productCards = document.querySelectorAll(".out-of-stock");
    const controlBtn = document.querySelectorAll(".out-of-stock .btn");
    
    for (let i = 0; i < productCards.length; i++) {
      const para = document.createElement("div");
      para.className = "linen";
      document.body.appendChild(para);
      productCards[i].appendChild(para);
    }    
    
    controlBtn.forEach((btn) => {
      btn.setAttribute("disabled", true);
      btn.classList.add("disabled");
    });
}

function Init(){
    OutOfStock();
}
Init();