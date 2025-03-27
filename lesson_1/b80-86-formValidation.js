//Doi tuong `Validator`
function Validator(options) {
    function validate(inputElement,) {

    }
    var formElement = document.querySelector(options.form);
    if (formElement) {
        console.log(formElement);
    }
}

// Dinh nghia rules
Validator.isRequired = function (selector) {
    return {
        selector: selector,
        test: function () {

        }
    };
}
Validator.isEmail = function (selector) {
    return {
        selector: selector,
        test: function (value) {
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value) ? undefined : 'Vui long nhap email';
        }
    };
}