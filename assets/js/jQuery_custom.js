function clientLoginAjax() {
    $.ajax({
        type: "POST",
        url: '../../core/ajax.php',
        data: {
            action: 'clientLogin',
            "email": $('#email-field').val(),
            "password": $('#password-field').val()
        },
        datatype: 'json',
        success: function (data) {
            window.location.href = data;
        }
    });
}

// TODO maybe add an if/else statement to check if return data corresponds to success address, else alert message to user.
function empLoginAjax() {
    $.ajax({
        type: "POST",
        url: '../../core/ajax.php',
        data: {
            action: 'empLogin',
            "email": $('#email-field').val(),
            "password": $('#password-field').val()
        },
        datatype: 'json',
        success: function (data) {
            alert(data);
            //window.location.href = data;
        }
    });
}

function clientSignUp(){
    $.ajax({
        type: "POST",
        url: '../../core/ajax.php',
        data: {
            action: 'clientSignUp',
            "name": $('#name-field').val(),
            "country": $('#country-field').val(),
            "address": $('#address-field').val(),
            "phone": $('#phone-field').val(),
            "email": $('#email-field').val(),
            "firstPassword": $('#1st-password-field').val(),
            "secondPassword": $('#2nd-password-field').val()
        },
        datatype: 'json',
        success: function (data) {
                 window.location.href = data;
        }

    });
}

function sendContactFormEmail() {
    $.ajax({
        type: "POST",
        url: '../../site/controllers/contact-controller.php',
        data: {
            action: 'activateContactForm',
            "name": $('#name-field').val(),
            "email": $('#email-field').val(),
            "phone": $('#phone-field').val(),
            "message": $('#message-field').val()
        },
        datatype: 'json',
        success: function (data) {
            alert = data;
        }
    });
}
