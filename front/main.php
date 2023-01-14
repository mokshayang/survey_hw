<link rel="stylesheet" href="./css/table.css">
<script src="./js/js.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<style>
.sub_p {
    width: 100%;
    height: 900px;
    overflow: hidden;
}
</style>
<!--↓↓↓↓↓↓↓↓↓↓ photo　↓↓↓↓↓↓↓↓↓↓-->
<div class="sub_p">
    <img src="./photo/c10.jpg" alt="" width="100%">
</div>

<!-- 給予固定高度 -->
<!--↓↓↓↓↓↓↓↓↓↓ bootstrap　↓↓↓↓↓↓↓↓↓↓-->
<div class="container">

    <!--↓↓↓↓↓↓↓↓↓↓ 廣告曲　↓↓↓↓↓↓↓↓↓↓-->
    <div style="text-align:center; margin:40px;font-size:40px; ">
        我是廣告區 拉入 jq scroll ~ height 要固定
    </div>
    <style>
    .sh {
        position: absolute;
        position: relative;
        min-width: 380px;
        min-height: 560px;
        transform: translate(-50%, -10%);
        left: 56%;
        background-color: #ffffff95;
        box-shadow: 1px 1px 3px 1px #33333390;
        z-index: 100;
    }
    </style>
    <!--↓↓↓↓↓↓↓↓↓↓ 一般會員　↓↓↓↓↓↓↓↓↓↓-->
    <div id="cover" style="display:none;min-width:380px ">
        <div id="coverr" style="min-width:380px">
            <div id="cvr" class="sh"
                style="position:absolute; width:40%; min-width:380px; min-height:560px; margin:auto; transform:translate(-50%,-10%); left:56%; background-color:#fff;  border-radius: 20px;  background-color:#fff;box-shadow: 1px 1px 3px 1px #33333390;">
            </div>
            <a style="position:absolute; color:#00f; transform:translate(-50%,-20%);  left:74%;  cursor:pointer; z-index: 100;"
                onclick="cl('#cover')">X</a>
        </div>
    </div>
    <h3 class="in_show">調查列表</h3>
    <div class="table_list in_show">
        <div class="table_head">
            <div>主題</div>
            <div>參與數</div>
            <div>操作</div>
        </div>
    </div>
    <div class="table_list in_show" >
        <?php
        $surveys = $subject->all(['acive' => 1, 'level' => 0]); //啟動
        foreach ($surveys as $key => $survey) {
        ?>
        <div class="items in_show" style="line-height:48px;">
            <div style="height: 48px;"><?= $survey['subject'] ?></div>
            <div style="height: 48px;"><?= $survey['vote'] ?></div>
            <div style="height: 48px;">
                <a class="btn btn-sm btn-success mx-1"
                    onclick="op('#cover','#cvr','./front/survey_item.php?id=<?= $survey['id']; ?>')">投票</a>
                <a href="index.php?do=survey_result&id=<?= $survey['id']; ?>"
                    class="btn btn-sm btn-outline-success mx-1">結果</a>

            </div>
        </div>
        <?php } ?>
    </div>
    <div style="height:60px;">2</div>
    <div style="height:60px;">2</div>
    <div style="height:60px;">2</div>
    <div style="height:60px;">2</div>
    <div style="height:60px;">2</div>
</div>
<style>
.slider {
    text-align: center;
    font-size: 30px;
    margin: 30px auto;
}
</style>
<div class="slider">照片撈資料庫的主題照片，上方宣傳語言</div>
<?php $sub_imgs = $subject->all(['acive' => 1, 'level' => 1], " ORDER by id limit 5"); ?>
<?php include_once "./slider/slider.php" ?>
<!-- 紙牌區 -->


<style>

</style>
<div class="user">會員投票區:</div>

<div id="cover_user" style="display:none;min-width:380px ">
    <div id="coverr_user" style="min-width:480px">
        <div id="cvr_user" class="sh"
            style="position:absolute; width:50%; min-width:320px; min-height:560px; margin:auto; transform:translate(-50%,6%); left:50%; background-color:#fff;  border-radius: 20px;  background-color:#fff;box-shadow: 1px 1px 3px 1px #33333390;">
        </div>
        <a style="position:absolute; color:#00f; transform:translate(-50%,10%);  right:5%; top:8%;  cursor:pointer; z-index: 100;"
            onclick="cl('#cover_user')">X</a>
    </div>
</div>

<div class="container text-center">

    <div class="row">
        <?php if(isset($_SESSION['login'])){
            ?>
        <div class="asb">

            <?php
            $user_id = $log->all(['user_id' => $_SESSION['login']['id']]);
            $temp = [];
            foreach ($user_id as  $u_id) {
                $temp[] = $u_id['subject_id'];
            }
            // dd($temp);
            // dd($user_id);
            $surveys = $subject->all(['acive' => 1, 'level' => 1]);
            foreach ($surveys as $key => $survey) {
                if (in_array($survey['id'], $temp)) {
            ?>

            <div class="col-12 col-sm-6 col-lg-4 my-3 c justify-content-center">

                <!-- 卡片背面 -->
                <div class="card shadow radio" style="width: 216px; height:300px; overflow:hidden;">
                    <div class="mm ">
                        <?php
                                if (is_image($survey['type'])) {
                                ?>
                        <img src="./upload/<?= $survey['img'] ?>" alt="photo">
                        <?php } else {
                                    $icon = dummy_icon($survey['type']);
                                ?>
                        <div style="width:48%; margin:auto; padding-top:4px;">
                            <img src="./material/<?= $icon ?>" class="ii" alt="photo">
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="selected">
                    <div class="see_result">
                        <p style="width:215px;"><?= $survey['subject'] ?></p>
                        <div class="choose">
                            <a href="index.php?do=survey_result&id=<?= $survey['id']; ?>"
                                class="btn btn-sm btn-outline-warning mx-1">結果</a>
                        </div>
                    </div>
                    <img src="./photo/vote.png " style=" background-repeat:no-repeat;" alt="votefor">
                </div>
            </div>




            <?php } else {
                ?>

            <div class="col-12 col-sm-6 col-lg-4 my-3 c justify-content-center">
                <!-- 卡片正面 -->
                <div class="cards cardfront">

                </div>
                <!-- 卡片背面 -->
                <div class="cards cardback">

                    <div class="card shadow radio" style="width: 216px; height:300px; overflow:hidden;">
                        <div class="mm ">
                            <?php
                                    if (is_image($survey['type'])) {
                                    ?>
                            <img src="./upload/<?= $survey['img'] ?>" alt="photo">
                            <?php } else {
                                        $icon = dummy_icon($survey['type']);
                                    ?>
                            <div style="width:48%; margin:auto; padding-top:4px;">
                                <img src="./material/<?= $icon ?>" class="ii" alt="photo">
                            </div>
                            <?php } ?>
                        </div>
                        <div class="card-body">
                            <p class="card-text sub"><?= $survey['subject'] ?></p>
                            <div class="choose">
                                <a class="btn btn-sm btn-primary mx-1"
                                    onclick="op('#cover_user','#cvr_user','./front/survey_item.php?id=<?= $survey['id']; ?>')">投票</a>
                                <a href="index.php?do=survey_result&id=<?= $survey['id']; ?>"
                                    class="btn btn-sm btn-outline-primary mx-1">結果</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }
            } ?>



        </div>
        <?php } ?>


    </div>
</div>
<style>
#go-top {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: linear-gradient(blue, #fff);
    box-shadow: 2px 2px 5px var(--fadeBlue);
    position: fixed;
    right: 40px;
    bottom: 60px;
    display: hidden;
    cursor: pointer;
}

#go-top .bi {
    font-size: 60px;
    color: #fff;
    position: absolute;
    top: -15px;
}
</style>

<div id="go-top">
    <i class="bi bi-arrow-up-short"></i>
</div>

<!-- <script src="./js/goTop.js"></script> -->


<style>
.tt {
    text-align: center;
    font-size: 40px;
    margin: 40px auto;
    height: 280px;
    line-height: 280px;
    background-color: var(--darkBlue);
    color: #eee;
}
</style>
<footer>
    <div class="tt">
        footer information
    </div>
</footer>