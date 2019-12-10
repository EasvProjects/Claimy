function myAjax() {
    $.ajax({
        type: "POST",
        url: '../../core/ajax.php',
        data: {
            action: 'userLogin',
            "email": $('#email-field').val(),
            "password": $('#password-field').val()
        },
        datatype: 'json',
        success: function (data) {
            window.location.href = data;
        }
    });
}

