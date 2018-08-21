// dom variables
var getFldstByTag = document.getElementsByTagName("fieldset");
// declaring the active fieldset & the total fieldset count
var stepsFldstCount = 0;
var fieldset = getFldstByTag[stepsFldstCount];
fieldset.className = "show";
// creates and stores a number of bullets
// removes the first back button & the last next button
document.getElementsByClassName("backBtn")[0].className = "hide";
// Makes the first dot active
var stepsBullets = document.getElementsByClassName("steps_bullet");
stepsBullets[stepsFldstCount].className = "steps_bullet active";
// eslint-disable-next-line
function onStepsButtonNext() {
    var stepsVal = true;
    var stepsFldstActive = document.querySelectorAll("fieldset")[stepsFldstCount];
    var stepsFldstActiveInputCount = stepsFldstActive.querySelectorAll("input").length;
    for (i = 0; i < stepsFldstActiveInputCount; ++i) {
        var stepsFldstActiveInput = stepsFldstActive.querySelectorAll("input")[i];
        if (stepsFldstActiveInput.getAttribute("type") === "button") {
            // nothing happens
        } else {
            if (stepsFldstActiveInput.value === "") {
                stepsFldstActiveInput.style.borderColor = "#fb5f5f";
                stepsVal = false;
            } else if (stepsVal !== false) {
                stepsVal = true;
                stepsFldstActiveInput.style.borderColor = "#71befb";
            }
        }
    }
    if (stepsVal === true) {
        // goes to the next step
        var selection = getFldstByTag[stepsFldstCount];
        selection.className = "hide";
        stepsFldstCount = stepsFldstCount + 1;
        var selectionNext = getFldstByTag[stepsFldstCount];
        selectionNext.className = "show";
    }
}
// goes one step back
function onStepsButtonBack() {
    // eslint-disable-line
    getFldstByTag[stepsFldstCount].className = "hide";
    stepsFldstCount = stepsFldstCount - 1;
    getFldstByTag[stepsFldstCount].className = "show";
}
// Trigger Enter on Input
function triggerEnterOnInputs() {
    var AllInputCount = document.querySelectorAll("input");
    for (let index = 0; index < AllInputCount.length; ++index) {
        var Input = AllInputCount[index];
        Input.onkeydown = function(e) {
            var currentInput = e.target;
            if (e.keyCode === 13) {
                var closestFieldset = currentInput.closest("fieldset");
                var nextBtn = closestFieldset.querySelector("button.nextBtn");
                var backBtn = closestFieldset.querySelector("button.backBtn");
                var btnToClick = nextBtn || backBtn;
                btnToClick.click();
            }
        };
    }
}
var form = document.querySelector("form");
form.addEventListener("submit", function(e) {
    e.preventDefault();
});
triggerEnterOnInputs();
console.log("loaded");