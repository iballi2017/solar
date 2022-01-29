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

const OutOfStock = () => {
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

function Init() {
  OutOfStock();
}
Init();


/* Calendar */
const date = new Date();
let month;
const months = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
];

// const weekDays = [
//   "Sunday",
//   "Monday",
//   "Tuesday",
//   "Wednesday",
//   "Thursday",
//   "Friday",
//   "Saturday"
// ]

const renderCalendar = () => {
  date.setDate(1);

  const monthDays = document.querySelector(".days");

  const lastDay = new Date(
    date.getFullYear(),
    date.getMonth() + 1,
    0
  ).getDate();

  const prevLastDay = new Date(
    date.getFullYear(),
    date.getMonth(),
    0
  ).getDate();

  const firstDayIndex = date.getDay();
  console.log("firstDayIndex: ", firstDayIndex)

  const lastDayIndex = new Date(
    date.getFullYear(),
    date.getMonth() + 1,
    0
  ).getDay();

  const nextDays = 7 - lastDayIndex - 1;

  console.log("lastDayIndex: ", lastDayIndex + 1);
  console.log("nextDays: ", nextDays);
  console.log("nextDays + lastDayIndex: ", nextDays + lastDayIndex + 1);

  if (document.querySelector(".date h5")) {
    document.querySelector(".date h5").innerHTML = months[date.getMonth()];
    month = months[date.getMonth()]
    console.log(month);
  }

  if (document.querySelector(".date p")) {
    document.querySelector(".date p").innerHTML = new Date().toDateString();
  }


  // let _month = months.indexOf(month) + 1;
  let _year = date.getFullYear();
  if (document.querySelector(".date h6")) {
    // document.querySelector(".date h6").innerHTML =  `${date.toLocaleDateString('en-us', { _month: 'long' })} ${_year}`;
    document.querySelector(".date h6").innerHTML = `${_year}`;
  }


  let days = "";

  for (let x = firstDayIndex; x > 0; x--) {
    console.log("padding days: ", firstDayIndex);
    days += `<div class="prev-date">${prevLastDay - x + 1}</div>`;
  }

  for (let i = 1; i <= lastDay; i++) {
    // console.log("Number of days: ", lastDay);
    if (
      i === new Date().getDate() &&
      date.getMonth() === new Date().getMonth()
    ) {
      days += `<div class="today">${i}</div>`;
    } else {
      // days += `<div class="fully-booked"><a href="#" class="date-link">${i}</a></div>`; //for testing fully booked days
      // days += `<div class="partly-booked"><a href="#" class="date-link">${i}</a></div>`; //for testing partially booked days     
      days += `<div><a href="#" class="date-link">${i}</a></div>`;

    }
  }

  for (let j = 1; j <= nextDays; j++) {
    console.log("nextDays: ", nextDays)
    days += `<div class="next-date">${j}</div>`;
    if (monthDays) {
      monthDays.innerHTML = days;
    }
  }



};


if (document.querySelector(".prev")) {
  document.querySelector(".prev").addEventListener("click", () => {
    date.setMonth(date.getMonth() - 1);
    renderCalendar();
    test();
  });
}

if (document.querySelector(".next")) {
  document.querySelector(".next").addEventListener("click", () => {
    date.setMonth(date.getMonth() + 1);
    renderCalendar();
    test();
  });
}
renderCalendar();

function test() {
  // var dateLinks = document.querySelectorAll(".date-link");
  var dateLinks = document.querySelectorAll(".days div a");
  for (let i = 0; i < dateLinks.length; i++) {
    // console.log(dateLinks[i]);
    dateLinks[i].addEventListener("click", (e) => {
      e.preventDefault();
      console.log(e.target.parentElement)
      // e.target.parentElement.classList.add("fully-booked");
      e.target.parentElement.classList.add("partly-booked");
      console.log(e.target.innerHTML);//actual day
      console.log(month);//actual month
      console.log(months.indexOf(month) + 1)//actual month index
      console.log(date.getFullYear());//actual year (current year thought);
      let _day = e.target.innerHTML;
      let _month = months.indexOf(month) + 1;
      let _year = date.getFullYear();
      let fullDate = `date : ${_day}/${_month}/${_year}`;
      console.log(fullDate);
      if (document.querySelector(".date h6")) {
        document.querySelector(".date h6").innerHTML = `${date.toLocaleDateString('en-us', {_month: 'long'})} ${_year}`;;
      }
    })
  }
}
test();

/* Calenar tooltips */
const partlyBooked = document.querySelectorAll(".partly-booked");
const fullyBooked = document.querySelectorAll(".fully-booked");
const available = document.querySelectorAll(".available");
const dayOff = document.querySelectorAll(".day-off");

function setCalendarTooltip(items, msg) {
  if (items) {
    for (let i = 0; i < items.length; i++) {
      items[i].setAttribute("title", msg);;
    }
  }
}
setCalendarTooltip(partlyBooked, "Partly booked");
setCalendarTooltip(fullyBooked, "Fully booked");
setCalendarTooltip(available, "Available");
setCalendarTooltip(dayOff, "Day off");


/* PAYMENT OPTIONS */
const bankTransferRadio = document.querySelector("#bankTransfer");
const paystackRadio = document.querySelector("#paystack");

if (bankTransferRadio && paystackRadio) {
  bankTransferRadio.addEventListener("click", () => {
    if (bankTransferRadio.checked) {
      console.log("checked!!!");
      let x = document.querySelector("#bank-account-details");
      if (x) {
        if (x.classList.contains("d-none")) {
          x.classList.remove("d-none");
        }
      }
    }
  });

  paystackRadio.addEventListener("click", () => {
    if (paystackRadio.checked) {
      console.log("checked!!!");
      let x = document.querySelector("#bank-account-details");
      if (x) {
        if (!x.classList.contains("d-none")) {
          x.classList.add("d-none");
        }
      }
    }
  });
}