<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to iDiscuss- Coding Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <?php require "partials/_header.php"; ?>
    <?php require "partials/_dbconnect.php"; ?>
    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `categories` WHERE `category_id` = $id";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $catName = $row['category_name'];
        $catDesc = $row['category_description'];
    }
    ?>

    <!-- Category Container starts here  -->
    <div class="container my-4">

        <div class="card my-2">
            <div class="card-body">
                <h5 class="card-title">Welcome to <?php echo $catName; ?> forum</h5>
                <p class="card-text"><?php echo $catDesc; ?></p>
                <hr>
                <p>Keep it friendly.<br>Be courteous and respectful. Appreciate that others may have an opinion different from yours.<br>Share your knowledge.<br>Refrain from demeaning, discriminatory, or harassing behaviour and speech.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>

    <div class="container ">
        <h2>Browse Questions</h2>
        <div class="d-flex py-3">
            <div class="flex-shrink-0">
                <img src="partials/default.jpg" width="44" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5>Installation problem</h5>
                This is some content from a media component. You can replace this with any content and adjust it as
                needed.
            </div>
        </div>
        <div class="d-flex py-3">
            <div class="flex-shrink-0">
                <img src="partials/default.jpg" width="44" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5>Installation problem</h5>
                This is some content from a media component. You can replace this with any content and adjust it as
                needed.
            </div>
        </div>
        <div class="d-flex py-3">
            <div class="flex-shrink-0">
                <img src="partials/default.jpg" width="44" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5>Installation problem</h5>
                This is some content from a media component. You can replace this with any content and adjust it as
                needed.
            </div>
        </div>
        <div class="d-flex py-3">
            <div class="flex-shrink-0">
                <img src="partials/default.jpg" width="44" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5>Installation problem</h5>
                This is some content from a media component. You can replace this with any content and adjust it as
                needed.
            </div>
        </div>
        <div class="d-flex py-3">
            <div class="flex-shrink-0">
                <img src="partials/default.jpg" width="44" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5>Installation problem</h5>
                This is some content from a media component. You can replace this with any content and adjust it as
                needed.
            </div>
        </div>
        <div class="d-flex py-3">
            <div class="flex-shrink-0">
                <img src="partials/default.jpg" width="44" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5>Installation problem</h5>
                This is some content from a media component. You can replace this with any content and adjust it as
                needed.
            </div>
        </div>
    </div>

    <?php require "partials/_footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>