<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Examination System in PHP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.1/dist/parsley.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.jas"></script>
    <link rel="stylesheet" href="../style/style.css"/>
    <title>Document</title>
</head>
<body>
    <div class="jumbotron text-center" style=" margin-bottom:0; padding: 1rem 1rem;">
        <img src=-"logo.png" class="image-fluid" width="300" alt="Online Examinination System in PHP"/>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
</div>

<div>
    <div class="col-mdd-6" style="margin-top:20px;">
        <span id="messege"></span>
        <div class="card">
            <div class="card-header">Admin Registration</div>
            <div class="card-body">
                <form method="post" id="admin_register_form">
                    <div class="form-group">
                        <lable>Enter Your Email Address</lable>
                        <input type="text" name="admin_email_address" id="admin_email_address" class="form-control" data-parsley-checkemail data-persley-checkemail-messege='Email already Exists'/> 
</div>
                    <div class="form-group">
                        <lable>Enter Your Password</lable>
                        <input type="password" name="admin_password" id="admin_password" class="form-control"/>
</div>
<div class="form-group">
                        <lable>Enter Your Confirm Password</lable>
                        <input type="password" name="confirm_admin_password" id="confirm_admin_password" class="form-control"/>
</div>
<div class="form-group">
    <input type="hidden" name="page" value="register"/>
    <input type="hidden" name="action" value="register"/>
    <input type="submit" name="admin_register" class="btn btn-info" value="Register"/>
</div>
</form>
<div align="center">
    <a href="login.php">Login</a>
</div>
</div>
</div>
</div>
<div class="col-md-3">
</div>
</div>
</div>


    
</body> 
</html>

<script>

    $(document).ready(function(){
        window.ParsleyValidator.addValidator('checkemail',{
            validateString: function(value)
            {
                return $.ajax({
                    url: "ajax_action.php",
                    method: "POST",
                    data:{page:'register', action: 'check-email', email:value},
                    dataType:"json",
                    success: function(data)
                    {
                        return true;
                    }
                });
            }
        });

        $('#admin_register_form').parsley();
    });
    </script>