function myAjax() {
    $.ajax({
        type: "POST",
        url: '../../core/ajax.php',
        data: {action: 'call_this',
        "email": $('#email-field').val(),
        "password": $('#password-field').val()},
        datatype: 'json',
        success: function(response){
            window.location.href = response;
        }
    });


    /*$(document).ready(function () {
        $('.btn').click(function () {
            alert("this button was clicked");
            var clickBtnValue = $(this).val();
            var ajaxurl = '../../core/function.php',
                data = {'action': clickBtnValue};
            $.post(ajaxurl, data, function (response) {
                // Response div goes here.
                alert("action performed successfully");
            });
        });
    });*/
}