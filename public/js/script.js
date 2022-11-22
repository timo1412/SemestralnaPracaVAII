window.onload = function () {
    let first_name = document.getElementById("firstNameInput");
    let last_name = document.getElementById("lastNameInput");
    let login = document.getElementById("loginInput");
    let password = document.getElementById("passwordInput");
    let form = document.getElementById("reg_form");
    let button = document.getElementById("reg_submit");
    let x = false;
    let y = false;
    let passed = 0;
    let passwordError = "";
    button.style.visibility = "hidden";
    form.addEventListener("input",formCheck )
/*    let passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
    let lastName = /^(?=.*[a-z])(?=.*[A-Z]).{3,10}$/;*/

    function formCheck(e){
        passed = 0;
        x = false;
        y = false;
        passwordError = "";
        let passwordValue = password.value;
        if (first_name.validity.tooShort) {
            first_name.setCustomValidity("Meno musi mat aspon 5 znakov");
            first_name.reportValidity();
            x = false;
        }else {
            x = true;
            first_name.setCustomValidity("");
        }

        if (password.validity.tooShort) {
            passwordError = passwordError.concat("too short");
            y=false;
        } else {
            password.setCustomValidity("heslo je prilis kratke");
        }
        if (passwordCheck(passwordValue) < 4){
            passwordError = passwordError.concat("heslo je priliz jednoduche")
        } else {
            y = true;
        }

        if (document.activeElement == password) {
            password.setCustomValidity(passwordError);
            password.reportValidity();
        }

        if(x == true && y == true){
            button.style.visibility = "visible";
        } else {
            button.style.visibility = "hidden";
        }
    }
    function passwordCheck(passwordValue){
        if ((new RegExp("[A-Z]").test(passwordValue))) {
            passed++;
        }

        if ((new RegExp("[a-z]").test(passwordValue))) {
            passed++;
        }

        if ((new RegExp("[0-9]").test(passwordValue))) {
            passed++;
        }

        if ((new RegExp("[@$&~*£]").test(passwordValue))) {
            passed++;
        }
        return passed;
    }
}