
<!doctype html>
<html>
<head>
    <meta charset="windows-874">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>login employee</title>
    <link rel="stylesheet" href="css/assets/css/normalize.css">
    <link rel="stylesheet" href="css/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/assets/css/themify-icons.css">
    <link rel="stylesheet" href="css/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="css/assets/css/cs-skin-elastic.css">    
    <link rel="stylesheet" href="css/assets/scss/style.css">
</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.php">
                       LOGIN EMPLOYEE
                    </a>
                </div>
                <div class="login-form">
                    <form name="form1" method="post" action="login_code.php">
                        <div class="form-group">
                            <label>รหัสพนักงาน</label>
                            <input type="text" name="txtUsername" id="txtUsername" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="txtPassword" id="txtPassword" class="form-control" ^>
                        </div>                     
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>                                             
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="css/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="css/assets/js/popper.min.js"></script>
    <script src="css/assets/js/plugins.js"></script>
    <script src="css/assets/js/main.js"></script>


</body>
</html>
