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
phoneInputs.forEach(function(input) {
  cleaveBlocks = new Cleave(input, {
    delimiters: ["(", ") ", "-"],
    blocks: [0, 3, 3, 4],
    numericOnly: true
  });
});
