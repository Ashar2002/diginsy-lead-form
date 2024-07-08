document.addEventListener("DOMContentLoaded", function () {
  const initialStep = document.getElementById("initial-step");
  const initialForm = document.querySelector("#initial-step form");
  const logoStep = document.getElementById("Logo-step");
  const webStep = document.getElementById("Web-step");
  const brandStep = document.getElementById("Brand-step");
  const logoWebStep = document.getElementById("LogoWeb-step");
  const thankYouSection = document.querySelector(".thankyou");

  let steps = [];
  let currentStepIndex = 0;

  initialForm.addEventListener("submit", function (e) {
    e.preventDefault();
    steps = [];
    currentStepIndex = 0;

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
    if (index < steps.length && index >= 0) {
      steps[index].classList.remove("d-none");
      const form = steps[index].querySelector("form");
      form.addEventListener("submit", handleFormSubmit);
      const prevButton = steps[index].querySelector(".prev-step");
      var check = ()=>{}
      if (prevButton) {
        prevButton.addEventListener("click", handlePrevStep);
        console.log(`back to previous step`);
      }
    } else if (index < 0) {
      initialStep.classList.remove("d-none");
    } else {
      thankYouSection.classList.remove("d-none");
      // Uncomment the below line to redirect / remove setTimeOut if you want to redirect without delay 

      // setTimeout(()=>{
      //     window.location.href = '/thank-you';
      // },1000)
    }
  }

  function handleFormSubmit(e) {
    e.preventDefault();
    steps[currentStepIndex].classList.add("d-none");
    currentStepIndex++;
    showStep(currentStepIndex);
  }

  function handlePrevStep() {
    steps[currentStepIndex].classList.add("d-none");
    currentStepIndex--;
    if (currentStepIndex < 0) {
      initialStep.classList.remove("d-none");
    } else {
      showStep(currentStepIndex);
    }
  }
});
