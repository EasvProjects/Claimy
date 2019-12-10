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
            /*if(data != null && data == "true"){ //redirect...
                window.location.href = "/controllers/index-controller.php";
            } else { //report failure...
                $("#idspancheckuser").append(data);
                alert(data);
            }*/
            alert(data);


            /*function(response){
            window.location.href = response;
        }*/
        },
    });
}

