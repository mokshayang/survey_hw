<link rel="stylesheet" href="./css/table.css">
<script src="./js/js.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<style>
    .sub_p {
        width: 100%;
        /* height: 900px; */
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
    <div style="text-align:center; margin:40px;font-size:40px;" class="in_show">
        <img src="./photo/vote.png" alt="photo" class="img_show">
        <img src="./photo/vote.png" alt="photo" class="img_show">
        <img src="./photo/vote.png" alt="photo" class="img_show">
        <img src="./photo/vote.png" alt="photo" class="img_show">
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

        .in_show {
            transform: translateX(-80%);
            transition: all 2s ease-in-out;
            opacity: 0;
        }
    </style>
    <!--↓↓↓↓↓↓↓↓↓↓ 一般會員　↓↓↓↓↓↓↓↓↓↓-->
    <div id="cover" style="display:none;min-width:380px ">
        <div id="coverr" style="min-width:380px">
            <div id="cvr" class="sh" style="position:absolute; width:40%; min-width:380px; min-height:560px; margin:auto; transform:translate(-50%,-10%); left:56%; background-color:#fff;  border-radius: 20px;  background-color:#fff;box-shadow: 1px 1px 3px 1px #33333390;">
            </div>
            <a style="position:absolute; color:#00f; transform:translate(-50%,-20%);  left:74%;  cursor:pointer; z-index: 100;" onclick="cl('#cover')">X</a>
        </div>
    </div>
    <style>
        .sub {
            top: 60px;
            position: relative;
            font-style: italic;

        }
    </style>
    <h3 class="block in_show sub_vote" style="font-size :40px;color:#00e;text-shadow:1px 1px 3px 
    #00e;">To experience
        <div style=" border-bottom:3px solid #00e; width:280px; margin: 10px auto;"></div>
    </h3>
    <div class="table_list block in_show">
        <div class="table_head sub" style="font-size:24px;">
            <div>theme</div>
            <div>participant</div>
            <div>vote</div>
        </div>
    </div>
    <div class="front_table block in_show">
        <?php
        $surveys = $subject->all(['acive' => 1, 'level' => 0]); //啟動
        foreach ($surveys as $key => $survey) {
        ?>
            <div class="front_items block in_show" style="line-height:48px;">
                <div><?= $survey['subject'] ?></div>
                <div><?= $survey['vote'] ?></div>
                <div>
                    <a class="btn btn-sm btn-success mx-1" onclick="op('#cover','#cvr','./front/survey_item.php?id=<?= $survey['id']; ?>')">投票</a>
                    <a href="index.php?do=survey_result&id=<?= $survey['id']; ?>" class="btn btn-sm btn-outline-success mx-1">結果</a>

                </div>
            </div>
        <?php } ?>
    </div>
</div><!-- bootstrap conainer --->
<link rel="stylesheet" href="./css/slider.css">
<link rel="stylesheet" href="./css/mobile_silder.css">
<style>
    .sub_publicity {
        width: 60%;
        margin: auto;
        background-color: var(--lightBlue);
    }

    .publicity {
        padding: 10px;
        overflow: hidden;
        font-size: 40px;
        background-color: var(--darkenBlue);
        color: #fff;
    }

    .more {
        height: 38rem;
        background-color: var(--lightBlue);
        color: #fff;
        margin: 240px auto 120px;
        color: #fff;

    }

    .slider {
        text-align: center;
        font-size: 30px;
        margin: 30px auto;

    }
</style>
<div class="more in_show">
    <h3 class="block in_show sub_vote" style="font-size :40px;text-shadow:1px 1px 3px #00e;padding-top:10px;">More subject
        <div style=" border-bottom:1px solid #fff; width: 280px; margin: 10px auto;"></div>
    </h3>




    <?php $sub_imgs = $subject->all(['acive' => 1, 'level' => 1], " ORDER by id limit 5"); ?>
    <?php include_once "./slider/slider.php" ?>
</div>
<!-- 紙牌區 -->


<style>
    .th {
        text-shadow: 1px 1px 5px var(--blue);
        font-weight: bold;
        margin: 240px auto 60px;
        font-style: italic;
    }
</style>
<?php
if (isset($_SESSION['login'])) {
?>
    <div class="user in_show th" style="color:var(--fadeBlue); ">Member Voting Area :</div>
<?php } else { ?>
    <div class="user in_show th" style="color:var(--blue);  ">Member Voting Area : Please become a member</div>
<?php } ?>

<div id="cover_user" style="display:none;min-width:380px ">
    <div id="coverr_user" style="min-width:480px">
        <div id="cvr_user" class="sh" style="position:absolute; width:50%; min-width:320px; min-height:560px; margin:auto; transform:translate(-50%,6%); left:50%; background-color:#fff;  border-radius: 20px;  background-color:#fff;box-shadow: 1px 1px 3px 1px #33333390;">
        </div>
        <a style="position:absolute; color:#00f; transform:translate(-50%,10%);  right:5%; top:8%;  cursor:pointer; z-index: 100;" onclick="cl('#cover_user')">X</a>
    </div>
</div>

<div class="container text-center" style="margin-bottom:200px;">

    <div class="row">
        <?php if (isset($_SESSION['login'])) {
        ?>
            <div class="asb ">

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

                        <div class="col-12 col-sm-6 col-lg-4 my-3 c in_show in_show_card justify-content-center">

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
                                        <a href="index.php?do=survey_result&id=<?= $survey['id']; ?>" class="btn btn-sm btn-outline-warning mx-1">結果</a>
                                    </div>
                                </div>
                                <div style="padding-top:10px;">
                                <img src="./photo/voted.png " style=" background-repeat:no-repeat;" alt="votefor" width="80%" >
                                </div>
                            </div>
                        </div>




                    <?php } else {
                    ?>

                        <div class="col-12 col-sm-6 col-lg-4 my-3 c in_show in_show_card justify-content-center">
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
                                        <p class="card-text "><?= $survey['subject'] ?></p>
                                        <div class="choose">
                                            <a class="btn btn-sm btn-primary mx-1" onclick="op('#cover_user','#cvr_user','./front/survey_item.php?id=<?= $survey['id']; ?>')">投票</a>
                                            <a href="index.php?do=survey_result&id=<?= $survey['id']; ?>" class="btn btn-sm btn-outline-primary mx-1">結果</a>
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
    .tt {
        text-align: center;
        font-size: 40px;
        margin: 40px auto 0 auto;
        height: 320px;
        line-height: 320px;
        background-color: var(--fadeBlue);
        color: #eee;
    }

    footer {
        background-color: var(--darkenBlue);
        height: 48px;
        font-size: 20px;
        line-height: 48px;
        text-align: center;
        color: #fff;
    }
</style>
<div class="tt">
    footer information
</div>
<footer>
    &copy; 練習作品 & 翻印 必不究 !
</footer>


<script>
    $('.block').addClass('in_show');




    $(window).on('scroll', function() {
        // var windowHeight = $(window).height();
        let windowHeight = window.innerHeight;

        $('.in_show').each(function() {
            let card = $('.in_show_card');
            let hiddenBlock = $(this);
            let hiddenBlockTop = hiddenBlock.offset().top;
            if (hiddenBlockTop <= ($(window).scrollTop() + windowHeight - 80)) {
                hiddenBlock.css({
                    'transform': 'translateX(0%)',
                    'opacity': '0.9'
                }, function() {});
                card.fadeIn(1800);
            }

            // console.log('to_TOP_H',$(window).scrollTop());
            // console.log('window_H',windowHeight);
            // console.log('Obj_H',hiddenBlockTop);
        });
    });
</script>