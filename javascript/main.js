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