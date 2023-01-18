<link rel="stylesheet" href="./css/slider.css">
<link rel="stylesheet" href="./css/mobile_silder.css">
<style>
    #slider img {
        transform: scale(1, 1);
        transition: all 0.2s ease-out;
    }

    #slider img:hover {
        transform: scale(1.01, 1.01);
    }
</style>
<div id="turn" class=" in_show" >
    <div style="width:100%; z-index:999;">
        <div class="imgs">
            <div id="slider">

                <?php
                $num = $subject->count(['acive' => 1, 'level' => 1]);
                // $num_point =$subject->count(['acive' => 1, 'level' => 1], " limit 5");
                $moth = ($num>5)?5:$num;
                if ($num > 1) {
                    foreach ($sub_imgs as $key => $img) {
                        if (is_image($img['type']) == ("image/gif" || "image/jpeg" || "image/png")) {
                            echo "<img src='./upload/{$img['img']}' alt='photo'>";
                        } else {
                            $icon = dummy_icon($img['type']);
                            echo "<div style='width:40%; margin:36px auto; text-align:center;'>";
                            echo "<img src='./material/$icon'  alt='photo'>";
                            echo "</div>";
                        }
                    }
                } else {
                    echo "<img src=''>"; //都沒有主題時，要放的照片
                }
                $first_img =  $subject->find(['id' => $sub_imgs[0]['id']]); //腦經打結，第一章一定要放圖檔
                if (is_image($first_img['type']) == ("image/gif" || "image/jpeg" || "image/png")) {
                    echo "<img src='./upload/{$first_img['img']}' alt='photo'>";
                } else {
                    $icon = dummy_icon($first_img['type']);
                    echo "<div style='width:40%; margin:36px auto; text-align:center;'>";
                    echo "<img src='./material/$icon'  alt='photo'>";
                    echo "</div>";
                }
                ?>

            </div>
            <button class="prev">＜</button>
            <button class="next">＞</button>
        </div>
        <div class="tag">
            <!-- php 撈顯示的數量 -->
            <?php

            if ($num > 1 ) {
            ?>
                <div class="rad">
                    <div class="point"></div>
                </div>
                <?php
                for ($i = 1; $i <= ($moth-1) ; $i++) {
                ?>
                    <div class="rad">
                        <div></div>
                    </div>
            <?php }
            } else {
                echo "";
            } ?>
        </div>
    </div>
</div>


<script>
    //----------------------------自動輪轉-------------------------------//
    let x = 0; //手動用作標
    const k = <?= $moth ?>; //N張圖片可用PHP去撈張數
    let interval; //間隔時間，自動用
    let banner = $('#slider'); //簡化;
    let that = $('.tag .rad'); //簡化;
</script>
<script src="./js/slider.js"></script>