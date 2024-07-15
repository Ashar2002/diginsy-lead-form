// document.addEventListener('DOMContentLoaded', function() {
//     const form = document.querySelector('form');
//     const submitButton = document.querySelector('.primary-btn');

//     submitButton.addEventListener('click', function(event) {
//         event.preventDefault(); // Prevent the form from submitting
//         validateForm();
//     });

//     function validateForm() {
//         const requiredFields = document.querySelectorAll('.field-wrap .label-field .star'); // Labels with star
//         let isValid = true;

//         // Clear previous error messages
//         document.querySelectorAll('.error-message').forEach(el => el.remove());

//         requiredFields.forEach(label => {
//             const fieldWrap = label.closest('.field-wrap');
//             const input = fieldWrap.querySelector('.input-field, .form-check-input');

//             // Remove previous error class
//             input.classList.remove('error-input');

//             if (input.type === 'radio') {
//                 const radioGroup = fieldWrap.querySelectorAll('.form-check-input');
//                 const isChecked = Array.from(radioGroup).some(radio => radio.checked);
//                 if (!isChecked) {
//                     radioGroup.forEach(radio => radio.classList.add('error-input'));
//                     displayErrorMessage(fieldWrap, "Please select at least one option.");
//                     isValid = false;
//                 }
//             } else if (input.type === 'checkbox') {
//                 const checkboxGroup = fieldWrap.querySelectorAll('.form-check-input');
//                 const isChecked = Array.from(checkboxGroup).some(checkbox => checkbox.checked);
//                 if (!isChecked) {
//                     checkboxGroup.forEach(checkbox => checkbox.classList.add('error-input'));
//                     displayErrorMessage(fieldWrap, "Please select at least one box.");
//                     isValid = false;
//                 }
//             } else if (input.value.trim() === '') {
//                 input.classList.add('error-input');
//                 displayErrorMessage(fieldWrap, "This field is required.");
//                 isValid = false;
//             }

//             // Remove error when user starts typing
//             input.addEventListener('input', () => {
//                 input.classList.remove('error-input');
//                 const errorMessage = fieldWrap.querySelector('.error-message');
//                 if (errorMessage) {
//                     errorMessage.remove();
//                 }
//             });

//             // Remove error when user selects a checkbox/radio
//             const checkboxes = fieldWrap.querySelectorAll('.form-check-input');
//             checkboxes.forEach(checkbox => {
//                 checkbox.addEventListener('change', () => {
//                     checkboxes.forEach(box => box.classList.remove('error-input'));
//                     const errorMessage = fieldWrap.querySelector('.error-message');
//                     if (errorMessage) {
//                         errorMessage.remove();
//                     }
//                 });
//             });
//         });

//         // Check the text areas
//         const textareas = document.querySelectorAll('textarea');
//         textareas.forEach(textarea => {
//             textarea.classList.remove('error-input');
//             if (textarea.value.trim() === '') {
//                 textarea.classList.add('error-input');
//                 displayErrorMessage(textarea.closest('.field-wrap'), "This field is required.");
//                 isValid = false;
//             }

//             // Remove error when user starts typing
//             textarea.addEventListener('input', () => {
//                 textarea.classList.remove('error-input');
//                 const errorMessage = textarea.closest('.field-wrap').querySelector('.error-message');
//                 if (errorMessage) {
//                     errorMessage.remove();
//                 }
//             });
//         });

//         // If the form is valid, you can submit it or perform other actions
//         if (isValid) {
//             form.submit(); // or any other action
//         }
//     }

//     function displayErrorMessage(container, message) {
//         // Check if an error message already exists to avoid duplicates
//         if (!container.querySelector('.error-message')) {
//             const errorMessage = document.createElement('span');
//             errorMessage.classList.add('error-message');
//             errorMessage.textContent = message;
//             container.appendChild(errorMessage);
//         }
//     }
// });

// $(document).ready(function () {
//   const initialForm = $("#initial-step form");
//   const initialStep = $("#initial-step");
//   const logoStep = $("#Logo-step");
//   const webStep = $("#Web-step");
//   const logoWebStep = $("#LogoWeb-step");
//   const thankYouSection = $(".thankyou");

//   const steps = [];
//   let currentStepIndex = 0;

//   initialForm.on("submit", function (e) {
//     e.preventDefault();
//     steps.length = 0;

//     const isLogoChecked = $("#LogoCheck").prop("checked");
//     const isWebChecked = $("#WebCheck").prop("checked");

//     if (isLogoChecked && isWebChecked) {
//       steps.push(logoWebStep);
//     } else {
//       if (isLogoChecked) {
//         steps.push(logoStep);
//       }
//       if (isWebChecked) {
//         steps.push(webStep);
//       }
//     }

//     if (steps.length > 0) {
//       initialStep.addClass("d-none");
//       showStep(0);
//     }
//   });

//   function showStep(index) {
//     if (index < steps.length) {
//       steps[index].removeClass("d-none");
//       const form = steps[index].find("form");
//       form.on("submit", function (e) {
//         e.preventDefault();
//         if (validateForm(form)) {
//           steps[index].addClass("d-none");
//           showStep(index + 1);
//         }
//       });
//     } else {
//       thankYouSection.removeClass("d-none");
//       // Uncomment the next line to redirect to a thank you page instead of showing the thank you section
//       // window.location.href = 'thankyou.html';
//     }
//   }

//   function validateForm(form) {
//     let isValid = true;
//     form.find(".field-wrap .label-field .star").each(function () {
//       const fieldWrap = $(this).closest(".field-wrap");
//       const input = fieldWrap.find(".input-field, .form-check-input");

//       input.removeClass("error-input");
//       if (input.is(":radio")) {
//         const isChecked =
//           fieldWrap.find(".form-check-input:checked").length > 0;
//         if (!isChecked) {
//           fieldWrap.find(".form-check-input").addClass("error-input");
//           displayErrorMessage(fieldWrap, "Please select at least one option.");
//           isValid = false;
//         }
//       } else if (input.is(":checkbox")) {
//         const isChecked = input.prop("checked");
//         if (!isChecked) {
//           input.addClass("error-input");
//           displayErrorMessage(fieldWrap, "Please select at least one box.");
//           isValid = false;
//         }
//       } else if (input.val().trim() === "") {
//         input.addClass("error-input");
//         displayErrorMessage(fieldWrap, "This field is required.");
//         isValid = false;
//       }

//       input.on("input", function () {
//         $(this).removeClass("error-input");
//         fieldWrap.find(".error-message").remove();
//       });
//     });

//     form.find("textarea").each(function () {
//       const textarea = $(this);
//       textarea.removeClass("error-input");
//       if (textarea.val().trim() === "") {
//         textarea.addClass("error-input");
//         displayErrorMessage(
//           textarea.closest(".field-wrap"),
//           "This field is required."
//         );
//         isValid = false;
//       }

//       textarea.on("input", function () {
//         textarea.removeClass("error-input");
//         textarea.closest(".field-wrap").find(".error-message").remove();
//       });
//     });

//     return isValid;
//   }

//   function displayErrorMessage(container, message) {
//     if (!container.find(".error-message").length) {
//       const errorMessage = $('<span class="error-message"></span>').text(
//         message
//       );
//       container.append(errorMessage);
//     }
//   }
// });
