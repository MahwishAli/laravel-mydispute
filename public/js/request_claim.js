// Get references to all the checkboxes and their corresponding content
const feeBasedOnlyCheckbox = document.getElementById("fee_based_only");
const feeAndAwardPercentageCheckbox = document.getElementById(
  "fee_and_award_percentage"
);
const awardPercentageBasedCheckbox = document.getElementById(
  "award_percentage_based"
);

const feeBasedOptions = document.querySelector(".fee-based-options");
const feeAndAwardOptions = document.querySelector(".fee-and-award-options");
const awardPercentageOptions = document.querySelector(
  ".award-percentage-options"
);

// Add event listener to the "Fee Based Only" checkbox
// feeBasedOnlyCheckbox.addEventListener("change", function () {
//   if (this.checked) {
//     // If "Fee Based Only" is checked, display its content and uncheck others
//     feeBasedOptions.style.display = "block";
//     feeAndAwardOptions.style.display = "none";
//     awardPercentageOptions.style.display = "none";
//     feeAndAwardPercentageCheckbox.checked = false;
//     awardPercentageBasedCheckbox.checked = false;
//   } else {
//     feeBasedOptions.style.display = "none";
//   }
// });

// Add event listener to the "Fee and Award Percentage Based" checkbox
// feeAndAwardPercentageCheckbox.addEventListener("change", function () {
//   if (this.checked) {
//     // If "Fee and Award Percentage Based" is checked, display its content and uncheck others
//     feeBasedOptions.style.display = "none";
//     feeAndAwardOptions.style.display = "block";
//     awardPercentageOptions.style.display = "none";
//     feeBasedOnlyCheckbox.checked = false;
//     awardPercentageBasedCheckbox.checked = false;
//   } else {
//     feeAndAwardOptions.style.display = "none";
//   }
// });

// // Add event listener to the "Award Percentage Based Only" checkbox
// awardPercentageBasedCheckbox.addEventListener("change", function () {
//   if (this.checked) {
//     // If "Award Percentage Based Only" is checked, display its content and uncheck others
//     feeBasedOptions.style.display = "none";
//     feeAndAwardOptions.style.display = "none";
//     awardPercentageOptions.style.display = "block";
//     feeBasedOnlyCheckbox.checked = false;
//     feeAndAwardPercentageCheckbox.checked = false;
//   } else {
//     awardPercentageOptions.style.display = "none";
//   }
// });

// second page

// const otherRadio = document.getElementById("other");
// const fidicRadio = document.getElementById("fidic");
// const otherOption = document.querySelector(".other-option");
// const otherOptionInput = document.getElementById("other_option");

// otherRadio.addEventListener("change", function () {
//   if (this.checked) {
//     otherOption.style.display = "block";
//   } else {
//     otherOption.style.display = "none";
//   }
// });
// fidicRadio.addEventListener("change", function () {
//   if (this.checked) {
//     otherOption.style.display = "none";
//     otherOptionInput.value = ""; // Clear the text box
//   }
//   //   else {
//   //     otherOption.style.display = "none";
//   //   }
// });

// submit and pay buttons
function toggleButtons() {
  var paidServiceRadio = document.getElementById("paid_service");
  var submitAndPayBtn = document.getElementById("submitAndPayBtn");
  var submitBtn = document.getElementById("submitBtn");

  if (paidServiceRadio.checked) {
    submitAndPayBtn.style.display = "inline-block";
    submitBtn.style.display = "none";
  } else {
    submitAndPayBtn.style.display = "none";
    submitBtn.style.display = "inline-block";
  }
}

// Disclaimer

// Get the checkbox and button element
var agreeCheckbox = document.getElementById("agreeCheckbox");
var understoodBtn = document.getElementById("understoodBtn");

// Add event listener to checkbox
// agreeCheckbox.addEventListener("change", function () {
//   // Enable the button if the checkbox is checked, disable it otherwise
//   understoodBtn.disabled = !this.checked;
// });
