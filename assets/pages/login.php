<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/bootstrap/icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="login">
        <div class="col-4 bg-white border rounded p-4 shadow-sm">
            <form>
                <div class="d-flex justify-content-center">

                    <img class="mb-4" src="assets/images/pictogram.png" alt="" height="45">
                </div>
                <h1 class="h5 mb-3 fw-normal">Please sign in</h1>

                <div class="form-floating">
                    <input type="email" class="form-control rounded-0" placeholder="username/email">
                    <label for="floatingInput">username/email</label>
                </div>

                <div class="form-floating mt-1">
                    <input type="password" class="form-control rounded-0" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">password</label>
                </div>

                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <button class="btn btn-primary" type="submit">Sign in</button>
                    <a href="#" class="text-decoration-none">Create New Account</a>


                </div>
                <a href="#" class="text-decoration-none">Forgot password ?</a>
            </form>
        </div>
    </div>


    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>