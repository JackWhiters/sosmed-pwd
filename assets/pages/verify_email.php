<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/icons/bootstrap-icons.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="login">
        <div class="col-4 bg-white border rounded p-4 shadow-sm">
            <form>
                <div class="d-flex justify-content-center">


                </div>
                <h1 class="h5 mb-3 fw-normal">Verify Your Email Id</h1>


                <p>Enter 6 Digit Code Sended to You</p>
                <div class="form-floating mt-1">

                    <input type="password" class="form-control rounded-0" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">######</label>
                </div>
                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <button class="btn btn-primary" type="submit">Resend Code</button>
                    <button class="btn btn-primary" type="submit">Verify Email</button>





                </div>
                <br>
                <a href="?login" class="text-decoration-none mt-5"><i class="bi bi-arrow-left-circle-fill"></i>
                    Logout</a>
            </form>
        </div>
    </div>


    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>