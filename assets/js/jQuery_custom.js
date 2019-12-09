function myAjax() {
    $.ajax({
        type: "POST",
        url: '../../core/ajax.php',
        data: {
            action: 'call_this',
            "email": $('#email-field').val(),
            "password": $('#password-field').val()
        },
        datatype: 'json',
        success: function (data) {
                window.location.href = data;
            //alert(data);
        },
    });
}

