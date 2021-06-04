// document.addEventListener('DOMContentLoaded', function() {

// }, false);



let windowSize = window;

const handleSectionWrapper = () => {
    let autoWrapper = document.querySelectorAll(".auto-wrapper");
    // swap container classes
    for (let i = 0; i < autoWrapper.length; i++) {
        if (windowSize.innerWidth < 1100) {
            if (autoWrapper[i].classList.contains('container') && !autoWrapper[i].classList.contains('container-fluid')) {
                autoWrapper[i].classList.remove('container');
                autoWrapper[i].classList.add('container-fluid');
            }
        }
        if (windowSize.innerWidth > 1100) {
            if (!autoWrapper[i].classList.contains('container') && autoWrapper[i].classList.contains('container-fluid')) {
                autoWrapper[i].classList.add('container');
                autoWrapper[i].classList.remove('container-fluid');
            }
        }

    }
}
handleSectionWrapper();
document.addEventListener('readystatechange', () => {
    window.addEventListener('resize', () => {
        // console.log('resize!')
        handleSectionWrapper();
    });
});



/* print page */
function printPage() {
    const footerTopWidget = document.querySelector("#top-footer-widget");
    footerTopWidget.style.display = 'none';
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
const closePreviewWidgetBtn = document.querySelector("#close-preview-widget-btn");
if (closePreviewWidgetBtn) {
    closePreviewWidgetBtn.addEventListener('click', () => {
        overlay.classList.remove("open");
        itemPreview.classList.remove("open");
    })
}


/* LOAD/SYSTEM QUESTIONAIRE form widget */
const slidePage = document.querySelector(".slidePage");
const firstNextBtn = document.querySelector(".firstNextBtn");
const firstPrevBtn = document.querySelector(".firstPrevBtn");
const size = 100;

if (firstNextBtn) {
    firstNextBtn.addEventListener("click", () => {
        slidePage.style.marginLeft = -100 / 2 + "%";
    });
}
/* PREVIOUS BUTTONS */
if (firstPrevBtn) {
    firstPrevBtn.addEventListener("click", () => {
        slidePage.style.marginLeft = "0%";
        pregressWidth = (100 / 3)
        progressStyle()
    });
}




// star ratings
const stars = document.querySelectorAll(".review_star")
var ratingValue = document.querySelector("#rating_value")
var index;
for (let i = 0; i < stars.length; i++) {
    stars[i].addEventListener("mouseover", function() {

        for (let j = 0; j < stars.length; j++) {
            stars[j].classList.remove("fas")
            stars[j].classList.add("far")
        }
        for (let j = 0; j <= i; j++) {
            stars[j].classList.remove("far")
            stars[j].classList.add("fas")

        }
    })

    stars[i].addEventListener("click", function() {
        ratingValue.value = i + 1
        index = i;

        // the value of rating stars
        // console.log(`rating is ${ratingValue.value}`)
    })
    stars[i].addEventListener("mouseout", function() {

        for (let j = 0; j < stars.length; j++) {
            stars[j].classList.remove("fas")
            stars[j].classList.add("far")
        }
        for (let j = 0; j <= index; j++) {
            stars[j].classList.remove("far")
            stars[j].classList.add("fas")


        }
    });

}