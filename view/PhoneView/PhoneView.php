<?php

include "../../controller/PhoneDetail.controller.php";


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./PhoneView.css">
</head>
<body>
    

    <div class="title">
        <div class="header">
            <h2>สเปคมือถือ</h2>
        </div>
        <div class="header-ul">
            <ul>
                <li>ออกใหม่</li>
                <li>ยอดนิยม</li>
                <li>แท็บเล็ต</li>
                <li>มีรีวิว</li>
                <li>วางจำหน่ายล่าสุด</li>
            </ul>
        </div>
    </div>

    <div class="phone-detail">
        <div class="phone-container">


        <?php foreach($jsonDecode as $phoneDetail){ ?>

            <div class="phone" style="cursor:pointer;" onclick="location.href='../PhoneDetails/PhoneDetail.php?id=<?=$phoneDetail['id']?>'">
                <div class="details">
                    <h6><?=$phoneDetail['phone_display_title']?></h6>

                </div>
                <div class="phone-image">
                    <img src="../../vendor/img/<?=$phoneDetail['phone_image_path'] ?>" alt="">
                </div>
                <div class="price">
                    <h3><?=$phoneDetail['phone_name']?></h5>
                    <h6><?=$phoneDetail['phone_price']?> B</h6>
                </div>
            </div>

        <?php } ?>


            
        </div>
    </div>


</body>
</html>