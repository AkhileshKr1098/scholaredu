// Script.js 
function validate() {
    let name =
        document.getElementById("name").value;
    let phone =
        document.getElementById("phone").value;
    let email =
        document.getElementById("email").value;
    let message =
        document.getElementById("message").value;
    let error_message =
        document.getElementById("error_message");
    error_message.style.padding = "10px";
    let errors = [];

    if (name.length < 5) {
        errors.push("Please Enter a valid Name");
    }

    if (isNaN(phone) || phone.length != 10) {
        errors.push("Please Enter a valid Phone Number");
    }
    if (email.indexOf("@") == -1 || email.length < 6) {
        errors.push(
            "Please Enter a valid Email");
    }
    if (message.length <= 5) {
        errors.push(
            "Please Enter More Than 5 Characters");
    }

    if (errors.length > 0) {
        error_message.innerHTML =
            errors.join("<br>");
        return false;
    }
    else {
        alert(
            "Form Submitted Successfully!");
        return true;
    }
}

function isNumeric(event) {
    var charCode = (event.which) ? event.which : event.keyCode;
    if (charCode >= 48 && charCode <= 57 || charCode == 8 || charCode == 9) {
        return true;
    } else {
        return false;
    }
}