<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/add_article.css">
</head class="text-center">

<body class="text-center">

<main class="form-addArticle">
    <form>
        <a href="/">
            <img class="mb-4" src="../img/icon.ico" alt="" width="72" height="57">
        </a>
        <h1 class="h3 mb-3 fw-normal">Please fill up new article form</h1>
        <div class="form-floating mb-3 ">
            <input name="title" type="title" class="form-control" id="title">
            <label for="title">title</label>
        </div>


        <div class="form-floating mb-3 ">
            <input name="preview" type="text" class="form-control" id="intro">
            <label for="intro">article intro</label>
        </div>
        <div class="form-floating mb-3 ">
            <textarea name="text" type="text" class="form-control" id="text" placeholder="text"></textarea>

        </div>

        <!--            <form method="post" enctype="multipart/form-data">-->
<!--        <div class="mb-3 ">upload img</div>-->
<!--            <div class="form-floating mb-3 ">-->
<!--                <input type="file" name="file" id="file">-->
<!--            </div>-->

            <!--            </form>-->
<!--        </div>-->

        <div class="alert alert-danger mb-2 mt-2" id ='error_block' style="display: none"></div>

        <button class="w-100 btn btn-lg btn-primary" id="add_article">ADD</button>
        <p class="mt-5 mb-3 text-muted">© 2022</p>
    </form>
</main>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $('#add_article').click(function (event) {
        event.preventDefault();
        var title = $('#title').val();
        var intro = $('#intro').val();
        var text = $('#text').val();
        // var file= $('#file').val();
        // alert(text)

        $.ajax({
            url: "reg/add_article_action.php",
            type: 'POST',
            cache: false,
            data: {
                'title': title,
                'intro': intro,
                'text': text,
            },
            dataType: 'html',
            success: function (data) {
                if (data == 'Done!') {
                    $('#add_article').text('OK!')
                    $('#title').val('');
                    $('#intro').val('');
                    $('#text').val('');
                    $('#error_block').hide();

                }
                else {
                    $('#error_block').show();
                    $('#error_block').text(data);
                    $('#add_article').text('ERROR!')

                }


            }
        })
    })



</script>


</html>

