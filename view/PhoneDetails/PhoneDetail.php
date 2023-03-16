<?php

include "../../controller/PhoneDetailByID.controller.php";




if (!empty($jsonDecode)) { 
    foreach ($jsonDecode as $phoneDetail) { ?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhoneDetail</title>
    <link rel="stylesheet" href="./PhoneDetail.css">
</head>
<body>

    <div class="title">
        <h1><?= $phoneDetail['phone_name']?></h1>
    </div>


    <div class="phone-detail">
        <div class="phone-img">
            <img style="width:100%;" src="../../vendor/img/<?=$phoneDetail['phone_image_path'] ?>" alt="">
        </div>
        <div class="phone-des">
            <div class="display">
                <img src="../../vendor/phone-image/icons8-iphone-14-pro-50.png" alt="">
                <h4><?=$phoneDetail['phone_display_title']?></h4>
                <h6><?=$phoneDetail['phone_display_detail']?></h6>
            </div>
            <div class="camera">
                <img src="../../vendor/phone-image/icons8-compact-camera-24.png" alt="">
                <h4><?=$phoneDetail['phone_camera_title']?></h4>
                <h6><?=$phoneDetail['phone_camera_detail']?></h6>
            </div>
            <div class="cpu">
                <img src="../../vendor/phone-image/icons8-cpu-64.png" alt="">
                <h4><?=$phoneDetail['phone_cpu_title']?></h4>
                <h6><?=$phoneDetail['phone_cpu_details']?></h6>
            </div>
            <div class="system">
                <img src="../../vendor/phone-image/icons8-android-os-24.png" alt="">
                <h4><?=$phoneDetail['phone_system_title']?></h4>
                <h6><?=$phoneDetail['phone_system_details']?></h6>
            </div>
            <div class="memory">
                <img src="../../vendor/phone-image/icons8-memory-card-60.png" alt="">
                <h4>Memory</h4>
                <h6><?=$phoneDetail['phone_memory']?></h6>
            </div>
            <div class="battery">
                <img src="../../vendor/phone-image/icons8-full-battery-24.png" alt="">
                <h4>Battery</h4>
                <h6><?=$phoneDetail['phone_battery']?></h6>
            </div>
        </div>
    </div>



</body>
</html>
       
   <?php } 
} else {
    echo "Unable to retrieve phone details";
}
?>


