<?php

if($_POST['action']=='call_this') {

    $email = ($_POST['email']);
    $password = $_POST['password'];

    $temp_email = '';
    $temp_password = '';

    //TODO
    // 1 Lookup db to see if user exists.
    //$sql = "SELECT * FROM tbl_User WHERE fldEmail = '".$email."'";
    //$result = mysqli_query($sql);
    if ($email === $temp_email) {
        if ($password === $temp_password) {
            echo '../controllers/dashboard-controller.php';
        }
    } else {
        echo '../controllers/signin-controller.php';
    }
}

    // false If zero, user is unknown - give error
    // true if excist, continue
    // 2 Take encrypted password associated with the user from the DB.
    // 3 Decrypt the db-password and match it with the inputted.
    // If doesnt match, give error.
    // If a match, go to new page


/*
    if (!is_null($email)) {

        //echo $password . "-" . $email;
        echo '../controllers/dashboard-controller.php';
    } else {
        echo '../controllers/signin-controller.php';
    }
/*

}
