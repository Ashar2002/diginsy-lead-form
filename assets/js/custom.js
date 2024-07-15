
//Step Form Functionality
document.addEventListener("DOMContentLoaded", function () {
  const initialForm = document.querySelector("#initial-step form");
  const initialStep = document.getElementById("initial-step");
  const logoStep = document.getElementById("Logo-step");
  const webStep = document.getElementById("Web-step");
  const logoWebStep = document.getElementById("LogoWeb-step");
  const thankYouSection = document.querySelector(".thankyou");

  const steps = [];
  let currentStepIndex = 0;

  initialForm.addEventListener("submit", function (e) {
    e.preventDefault();
    steps.length = 0;

    const isLogoChecked = document.getElementById("LogoCheck").checked;
    const isWebChecked = document.getElementById("WebCheck").checked;
    const isBrandChecked = document.getElementById("BrandCheck").checked;

    if (isLogoChecked && isWebChecked) {
      steps.push(logoWebStep);
    } else {
      if (isLogoChecked) {
        steps.push(logoStep);
      }
      if (isWebChecked) {
        steps.push(webStep);
      }
    }

    if (isBrandChecked) {
      steps.push(brandStep);
    }

    if (steps.length > 0) {
      initialStep.classList.add("d-none");
      showStep(0);
    }
  });

  function showStep(index) {
    if (index < steps.length) {
        steps[index].classList.remove("d-none");
        steps[index]
          .querySelector("form")
          .addEventListener("submit", function (e) {
            e.preventDefault();
            steps[index].classList.add("d-none");
            showStep(index + 1);
          });
      } else {
        thankYouSection.classList.remove("d-none");
        // Uncomment the next line to redirect to a thank you page instead of showing the thank you section
        // window.location.href = 'thankyou.html';
      }
    }
  });


// Input Toggle Website 
const websiteInput = document.querySelector(".websiteInput");
const radioButtons = document.querySelectorAll(
  '.input-toggle input[type="radio"]'
);

// Initially set opacity to 0 (hidden) since "New" is checked by default
websiteInput.style.opacity = 0;

radioButtons.forEach((radioButton) => {
  radioButton.addEventListener("change", function () {
    if (this.checked) {
      websiteInput.style.opacity = this.classList.contains("new") ? 0 : 1;
    }
  });
});
const websiteInput2 = document.querySelector(".websiteInput2");
const radioButtons2 = document.querySelectorAll(
  '.input-toggle input[type="radio"]'
);

// Initially set opacity to 0 (hidden) since "New" is checked by default
websiteInput2.style.opacity = 0;

radioButtons2.forEach((radioButton) => {
  radioButton.addEventListener("change", function () {
    if (this.checked) {
      websiteInput2.style.opacity = this.classList.contains("new") ? 0 : 1;
    }
  });
});



// file upload
const fileUpload = (event, imageId, iconId) => {
  const files = event.target.files;
  const filesLength = files.length;
  if (filesLength > 0) {
    const imageSrc = URL.createObjectURL(files[0]);
    const imagePreviewElement = document.querySelector(`#${imageId}`);
    const iconElement = document.querySelector(`#${iconId}`);

    if (imagePreviewElement && iconElement) {
      imagePreviewElement.src = imageSrc;
      imagePreviewElement.style.display = "block";
      iconElement.style.display = "none";
    }
    console.log(files[0].name);
  }
};

// Function to add event listeners if the elements are present
const addFileUploadListeners = () => {
  const uploadInput1 = document.querySelector("#tb-file-upload");
  const uploadInput2 = document.querySelector("#tb-file-upload-2");
  const uploadInput3 = document.querySelector("#tb-file-upload-3");

  if (uploadInput1) {
    uploadInput1.addEventListener("change", (event) =>
      fileUpload(event, "tb-image", "tb-icon")
    );
  }

  if (uploadInput2) {
    uploadInput2.addEventListener("change", (event) =>
      fileUpload(event, "tb-image-2", "tb-icon-2")
    );
  }
  if (uploadInput3) {
    uploadInput3.addEventListener("change", (event) =>
      fileUpload(event, "tb-image-3", "tb-icon-3")
    );
  }
};
addFileUploadListeners();

// validation
var alphaFields = document.getElementsByClassName("only-alpha");
for (var i = 0; i < alphaFields.length; i++) {
  alphaFields[i].addEventListener("input", function (e) {
    var inputValue = e.target.value;
    var regex = /^[a-zA-Z\s]*$/; // Regular expression to allow only alphabets and spaces

    if (!regex.test(inputValue)) {
      e.target.value = inputValue.replace(/[^a-zA-Z\s]/g, ""); // Remove non-alphabetic characters
    } else {
      return false;
    }
  });
}
var cleaveBlocks;
var phoneInputs = document.querySelectorAll(".phone-number");
phoneInputs.forEach(function (input) {
  cleaveBlocks = new Cleave(input, {
    delimiters: ["(", ") ", "-"],
    blocks: [0, 3, 3, 4],
    numericOnly: true,
  });
});
