const step1 = document.querySelector("#step-c1");
const step2 = document.querySelector("#step-c2");
const step3 = document.querySelector("#step-c3");
const action1 = document.querySelector("#step-a1");
const action2 = document.querySelector("#step-a2");
const action3 = document.querySelector("#step-a3");
const recurringBox = document.querySelector("#recurring");
const step1Next = document.querySelector("#step-a1-next");
const step1Back = document.querySelector("#step-a1-back");
const step2Next = document.querySelector("#step-a2-next");
const step2Back = document.querySelector("#step-a2-back");
const step3Back = document.querySelector("#step-a3-back");
const priceButtons = document.querySelectorAll(".price-button");
const amountLabels = document.querySelectorAll(".amount");
const frequencyLabel = document.querySelector("#frequency");
const bpcURL = "https://bipartisanpolicy.org/";


let activePriceBtn = 3;
let amount = 100;
let reccuring = false;

//Price Selection
priceButtons.forEach(function(e, i) {

    e.addEventListener("click", function() {
        priceButtons[activePriceBtn].classList.remove("price-selected");
        priceButtons[i].classList.add("price-selected");
        activePriceBtn = i;
    }); 
});

function updateValues() {
    switch(activePriceBtn){
        case 0: amount = 10; break;
        case 1: amount = 25; break;
        case 2: amount = 50; break;
        case 3: amount = 100; break;
        case 4: amount = 250; break;
        case 5: amount = 500; break;
        case 6: amount = 750; break;
        case 7: amount = 1000; break;
        case 8: amount = document.querySelector(".price-custom").value; break;
    }
}


//Navigation
function loadStep(num) {

    switch(num) {
        case 1:
            step1.classList.remove("disabled");
            step2.classList.add("disabled");
            step3.classList.add("disabled");
            action1.classList.remove("disabled");
            action2.classList.add("disabled");
            action3.classList.add("disabled");
        break;

        case 2:
            step1.classList.add("disabled");
            step2.classList.remove("disabled");
            step3.classList.add("disabled");
            action1.classList.add("disabled");
            action2.classList.remove("disabled");
            action3.classList.add("disabled");
        break;

        case 3:
            step1.classList.add("disabled");
            step2.classList.add("disabled");
            step3.classList.remove("disabled");
            action1.classList.add("disabled");
            action2.classList.add("disabled");
            action3.classList.remove("disabled");
        break;
    }
}

step1Next.addEventListener("click", function() {
    updateValues();

    if (recurringBox.checked === true) {
        recurring = true;
        frequency.innerHTML = "monthly";
    } else {
        reccuring = false;
        frequency.innerHTML = "once";
    }

    amountLabels.forEach(function(e, i) {
        e.innerHTML = amount;
    });

    loadStep(2);
});

step2Next.addEventListener("click", function() {
    loadStep(3);
});

step1Back.addEventListener("click", function() {
    window.location.href = bpcURL;
});

step2Back.addEventListener("click", function() {
    loadStep(1);
});

step3Back.addEventListener("click", function() {
    window.location.href = bpcURL;
});

//Start Process
loadStep(1);
