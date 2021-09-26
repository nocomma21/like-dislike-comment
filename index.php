<?php

require 'conn.php';


$suka = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM likesvoting WHERE id=1"))['suka'];
$tidak_suka = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM likesvoting WHERE id=1"))['tidak_suka'];



if (isset($_POST['btnLike'])) {
    mysqli_query($conn, "UPDATE likesvoting SET suka = suka + 1 WHERE id=1");
    header("location: index.php");
}

if (isset($_POST['btnDislike'])) {
    mysqli_query($conn, "UPDATE likesvoting SET tidak_suka = tidak_suka + 1 WHERE id=1");
    header("location: index.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Likes Voting</title>
</head>

<body>
    <div class="container mt-5 justify-content-center">
        <div>
            <img class="one" src="mine.jpg" height="180px" width="200px">
        </div>
        <div class="result_suka mt-2">
            <h3><?= $suka ?></h3>
        </div>
        <form action="index.php" method="post">
            <div class="btnLikes mt-3">
                <button type="submit" name="btnLike" id="btnLike"><i class='fa fa-heart' style="color: red"></i></button>
            </div>
        </form>

        <div class="result_dislike">
            <h3><?= $tidak_suka ?></h3>
        </div>
        <form action="index.php" method="post">
            <div class="btnDislike">
                <button type="submit" name="btnDislike" id="btnDislike">Tidak Suka</button>
            </div>
        </form>
    </div>
</body>

</html>