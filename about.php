<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to iDiscuss- Coding Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <style>
            #aboutpage{
                min-height: 529px;
            }
        </style>
</head>

<body>
    <?php  require "partials/_header.php";?>

    <div class="container my-4" id="aboutpage">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">About the Project</h4>
            <p>Main motive of this project is to successfully make a landing page, which is already created using PHP.
                Styling of this project is done using Bootstrap and few help is taken from Internet. Now, I'm working on
                a major project in which I will use JavaScript and PHP to make that more dynamic. </p>
            <hr>
            <p class="mb-0">Thankyou So much for visiting this page.</p>
        </div>
    </div>
    <?php  require "partials/_dbconnect.php";?>

    <?php  require "partials/_footer.php";?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>