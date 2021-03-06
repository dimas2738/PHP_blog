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
    <form>
<!--            action="reg/reg_action.php"-->
<!--          method="post"-->

        <a href="/">
            <img class="mb-4" src="../img/icon.ico" alt="" width="72" height="57">
        </a>
        <h1 class="h3 mb-3 fw-normal">Please fill up registration form</h1>
        <div class="form-floating">
            <input name="name" type="name" class="form-control" id="name" placeholder="name">
            <label for="floatingInput">Your name</label>
        </div>

        <div class="form-floating">
            <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input name="password" type="password" class="form-control" id="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="alert alert-danger mb-2 mt-2" id ='error_block' style="display: none"></div>
        <button class="w-100 btn btn-lg btn-primary" id="sign_in" type="button">Sign in</button>
        <p class="mt-5 mb-3 text-muted">© 2022</p>
    </form>
</main>





</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $('#sign_in').click(function (e) {
        e.preventDefault();
        var name= $('#name').val();
        var email= $('#email').val();
        var password= $('#password').val();

        $.ajax({
            url:"reg/reg_action.php",
            type: 'POST',
            cache: false,
            data:{'name':name,'email':email,'password':password},
            dataType: 'html',
            success: function (data) {
                if (data=='Done!'){
                    $('#sign_in').text('OK!')
                    window.location = '/';

                }
                else {
                    $('#error_block').show();
                    $('#error_block').text(data);
                }

            }
        })


    })
</script>


</html>
