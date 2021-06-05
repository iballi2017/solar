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