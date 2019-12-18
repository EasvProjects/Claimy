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
            if(data === 'success'){
                console.log(data);
                window.location.href = '../../site/controllers/myaccount-controller.php';
            }else if(data === 'errorUserNotFound'){
                console.log(data);
                alert('We don\'t have any user registered with that email.');
                window.location.href = '../../site/controllers/signin-controller.php';
            }else if(data === 'errorPasswordNotMatch'){
                console.log(data);
                alert('The password you\'ve entered doesn\'t match the user. Try again.');
                window.location.href = '../../site/controllers/signin-controller.php';
            }else if(data === 'errorNotClintAccount'){
                console.log(data);
                alert('You\'re trying to login with an employee account. This login form is for users only.');
                window.location.href = '../../site/controllers/signin-controller.php';
            }
        }
    });
}

function empLoginAjax() {
    $.ajax({
        type: "POST",
        url: '../../site/controllers/maintenance-controller.php',
        data: {
            action: 'empLogin',
            "email": $('#email-field').val(),
            "password": $('#password-field').val()
        },
        datatype: 'json',
        success: function (data) {
            alert(data);
        },
        error: function(data){
            console.log(data);
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
            alert(data);
                 //window.location.href = data;
        },
        error: function(data){
            console.log(data);
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
            alert(data);
        },
        error: function(data){
            console.log(data);
        }
    });
}
