<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to iDiscuss- Coding Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
    #ques {
        min-height: 300px;
    }
    </style>
</head>

<body>
    <!-- Required PHP starts here -->
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
                <p>Keep it friendly.<br>Be courteous and respectful. Appreciate that others may have an opinion
                    different from yours.<br>Share your knowledge.<br>Refrain from demeaning, discriminatory, or
                    harassing behaviour and speech.</p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
        </div>
    </div>

    <!-- Discussion starts here -->
    <div class="container my-3">
        <h2>Start a Discussion</h2>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Problem Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Keep your problem as short and crisp as possible</div>
            </div>
            <div class="form-group">
                <label for="floatingTextarea2">Ellaborate your Concern</label>
                <textarea class="form-control mb-2"  id="desc " name="desc"
                    style="height: 100px"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

    <!-- Questions starts here -->
    <div class="container " id="ques">
        <h2>Browse Questions</h2>

        <?php
        $id = $_GET['catid'];
        $sql = "SELECT * FROM `threads` WHERE `thread_cat_id` = $id ";
        $result = mysqli_query($conn, $sql);
        $noResult = true;
        while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $tId=$row['thread_id'];
            $title = $row['thread_title'];
            $descrip = $row['thread_description'];

            echo '<div class="d-flex py-3">
            <div class="flex-shrink-0">
                <img src="partials/default.jpg" width="44" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5><a href="threadlist.php?threadid='.$tId.'" class="text-dark">' . $title . '</a></h5>
               ' . $descrip . '
            </div>
        </div>';
        }
        // echo var_dump($noResult);
        if($noResult){
            echo "<h4>No threads found!</h4>
            Start a discussion";
        }
        ?>
    </div>
    
    <?php require 'partials/_footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>