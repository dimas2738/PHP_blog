<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/registration.css">
</head>

<body class="text-center">

<main class="form-signin">
    <form action="reg/reg_action.php" method="post">
        <img class="mb-4" src="../img/icon.ico" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please fill up registration form</h1>
        <div class="form-floating">
            <input name="name" type="name" class="form-control" id="floatingInput" placeholder="name">
            <label for="floatingInput">Your name</label>
        </div>

        <div class="form-floating">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>


        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">© 2022</p>
    </form>
</main>





</body>





</html>
