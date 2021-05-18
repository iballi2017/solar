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


let dropdown = document.querySelector(".dropdown-wrapper .dropdown").children;
// let sortRadio = document.querySelectorAll(".sort-radio");
console.log(dropdown);
for (let sibling of dropdown) {
    console.log(sibling);
}