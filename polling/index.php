<!-- 首頁 -->
<?php include_once "./api/db.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>問卷</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <style>

    </style>
</head>

<body>

    <div class="jumbotron p-0" style="overflow:hidden;height:250px">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" style="top:-250px">
                <div class="carousel-item active">
                    <img src="./image/dessert-01.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./image/dessert-02.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./image/dessert-03.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>


    <?php //?do=target 自動套用bootstrap & JS
    $do = (isset($_GET['do'])) ? $_GET['do'] : 'show_vote_list'; //php7.0 有isset 短寫法
    $file = "./frontend/" . $do . "php"; //對前台檔案作用
    if (file_exists($file)) {
        include $file;
    } else {
        include './frontend/show_vote_list.php';
    }
    ?>
    <div class="p-3 text-center text-light bg-success fixed-bottom">copy right</div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>