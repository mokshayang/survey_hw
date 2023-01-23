<link rel="stylesheet" href="./css/table.css">
<script src="./js/js.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<style>
    .sub_p {
        width: 100%;
        /* height: 900px; */
        overflow: hidden;
        position: relative;
        z-index: -1;
    }

    .sub_p div {
        position: absolute;
        font-size: 8rem;
        font-weight: bold;
        color: white;
        /* text-shadow: 1px 1px 5px white; */
        left: 12%;
        top: 32%;
    }
</style>
<!--↓↓↓↓↓↓↓↓↓↓ photo　↓↓↓↓↓↓↓↓↓↓-->
<div class="sub_p">
    <div>熱門投票</div>
    <img src="./photo/c10.jpg" alt="" width="100%">

</div>

<!-- 給予固定高度 -->
<!--↓↓↓↓↓↓↓↓↓↓ bootstrap　↓↓↓↓↓↓↓↓↓↓-->
<div class="container">

    <!--↓↓↓↓↓↓↓↓↓↓ 廣告曲　↓↓↓↓↓↓↓↓↓↓-->
    <div style="text-align:center; margin:40px;font-size:40px;" class="in_show">
       
    </div>
    <style>
        .sh {
            /* position: absolute; */
            /* position: relative; */
            min-width: 450px;
            min-height: 560px;
            transform: translate(-50%, -10%);
            left: 50%;
            top: 100px;
            background-color: #ffffff95;
            z-index: 100;
            padding-bottom: 20px;
            box-shadow: 1px 1px 10px #999;
            
        }

        .in_show,
        .in_card {
            /* transform: translateX(-100%); */
            transition: all 1.5s ease-in-out;
            opacity: 0;
        }
     
    </style>
    <!--↓↓↓↓↓↓↓↓↓↓ 一般會員　↓↓↓↓↓↓↓↓↓↓-->
    <div id="cover" style="display:none;min-width:380px ">
        <div id="coverr" style="padding:5px;">
            <div id="cvr" class="sh" style="position:absolute; width:60%; min-width:380px; min-height:560px; margin:auto; margin-bottom:20px; transform:translate(-50%,-10%);  background-color:#fff;  border-radius: 20px; ">
            </div>
           
            <a style="position:sticky; color:#00f;left:95%; top:5%; cursor:pointer; z-index: 100;" onclick="cl('#cover')">X</a>
            
        </div>
    </div>





    <style>
        .sub_vote {
            color: var(--darkBlue);
            font-size: 4.5rem;
        }

        .sub_vote div {
            width: 18rem;
            height: 5px;
            border-bottom: 0.3rem solid var(--darkBlue);
            padding: 0.6rem auto;
            margin: 2rem auto 0;
            font-weight: bold;
        }

        .btn-sub {
            color: #fff;
            background-color: var(--skyblue);
            border-color: var(--skyblue);
        }
    </style>
    <h3 class="block in_show sub_vote">TO &nbsp;EXPERIENCE
        
        <div style="  padding: 10px auto; "></div>
    </h3>
    <div class="table_list block in_show">
        <div class="table_head sub" >
            <div >Theme</div>
            <div >Participant</div>
            <div >Vote</div>
        </div>
    </div>
    <div class=" front_table block in_show">
            <?php
            $surveys = $subject->all(['acive' => 1, 'level' => 0]); //啟動
            foreach ($surveys as $key => $survey) {
            ?>
                <div class="front_items block in_show" style="line-height:48px; color:var(--blue);">
                    <div style="line-height: 20px;padding:10px;"><?= $survey['subject'] ?></div>
                    <div><?= $survey['vote'] ?></div>
                    <div>
                        <a class="btn  btn-lg btn-ss" onclick="op('#cover','#cvr','./front/survey_item.php?id=<?= $survey['id']; ?>')">投票</a>
                        <a href="index.php?do=survey_result&id=<?= $survey['id']; ?>" class="btn btn-lg btn-outline-ss">結果</a>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div><!-- bootstrap conainer --->
</div><!-- bootstrap conainer --->

<style>
    .more {
        height: 42rem;
        /* min-height: 540px; */
        height: 0;
        padding-bottom: 40%;
        background-color:var(--skyblue);
        color: #fff;
        margin: 240px auto 10px;

    }

    .slider {
        text-align: center;
        font-size: 30px;
        margin: 30px auto;
    }
</style>
<div class="more in_show">
    <h3 class="block in_show" style="font-size :40px;">More subject
        <div style=" border-bottom:1px solid #fff; width: 280px;  margin:20px auto  0 ;"></div>
    </h3>




    <?php $sub_imgs = $subject->all(['acive' => 1, 'level' => 1], " ORDER by id limit 5"); ?>
    <!-- 主題照片輪播 -->
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

    .she {
        position: absolute;
        position: relative;
        min-width: 380px;
        min-height: 560px;
        transform: translate(-50%, -10%);
        left: 50%;
        top: 5px;
        background-color: #ffffff95;
        z-index: 100;
        box-shadow: 1px 1px 5px var(--blue);
        padding-bottom: 20px;
        /* position: fixed; */
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
        <div id="cvr_user" class="she" style="position:absolute; width:72%; min-width:320px; min-height:560px; margin:auto; transform:translate(-50%,6%); background-color:#fff;  border-radius: 20px;  background-color:#fff;">
        </div>
        <a style="position:sticky; color:#00f; transform:translate(-50%,10%);left:95%; top:8%;  cursor:pointer; z-index: 100;" onclick="cl('#cover_user')">X</a>
    </div>
</div>
<link rel="stylesheet" href="./css/cords_ajax.css">
<div class="container text-center" style="margin-bottom:200px;">

    <div class="row ">
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

                        <div class="col-12 col-sm-6 col-lg-4 my-3 c in_card in_show_cards justify-content-center">

                            <!-- 卡片背面 -->
                            <div class="card shadow radio" style="width: 216px; height:300px; overflow:hidden;">
                                <div class="mmed ">
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
                                    <p style="width:215px;padding-top:36px;"><?= $survey['subject'] ?></p>
                                    <div class="choose">
                                        <a href="index.php?do=survey_result&id=<?= $survey['id']; ?>" class="btn btn-sm btn-outline-warning mx-1">結果</a>
                                    </div>
                                </div>
                                <div style="padding-top:10px;">
                                    <img src="./photo/voted3.png " style=" background-repeat:no-repeat;" alt="votefor" width="80%">
                                </div>
                            </div>
                        </div>
                    <?php } else {
                    ?>

                        <div class="col-12 col-sm-6 col-lg-4 my-3 c in_card in_show_cards justify-content-center">
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
                                            <a class="btn btn-sm btn-ss mx-1" onclick="op('#cover_user','#cvr_user','./front/survey_item.php?id=<?= $survey['id']; ?>')">投票</a>
                                            <a href="index.php?do=survey_result&id=<?= $survey['id']; ?>" class="btn btn-sm btn-outline-ss mx-1">結果</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>
        <?php } else {
        ?>
            <div class="asb">
                <?php
                $nums = $subject->count(['acive' => 1, 'level' => 1]);
                for ($i = 1; $i <= $nums; $i++) {
                ?>
                    <div class="col-12 col-sm-6 col-lg-4 my-3 in_card in_show_cards c cardsEnd cardfrontEnd justify-content-center" data-bs-toggle="tooltip" data-bs-placement="top" title="本區只對會員開放，請加入會員 !!">
                        <!-- 卡片正面 -->
                        <div class=" cardfront">
                        </div>
                    </div>
            <?php }
            } ?>
            </div><!-- .abs -->

    </div> <!-- .row end -->
</div>


<style>
    .tt {
        text-align: center;
        font-size: 40px;
        margin: 40px auto 0 auto;
        height: 320px;
        line-height: 320px;
        background-color: var(--blue);
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
    &copy; 練習作品 !
</footer>


<script>
    // 進入範圍，transform  // 離開時重製 。
    $('.block').addClass('in_show');

    // $(window).on('scroll', function() {
    //     $('.in_show').each(function() {
    //         let card = $('.in_show_card');
    //         let hiddenBlock = $(this);
    //         let hiddenBlockTop = hiddenBlock.offset().top;
    //         let hiddenBlockHeight = hiddenBlock.outerHeight();
    //         let windowHeight = $(window).height();
    //         let scrollTop = $(window).scrollTop();

    //         if (hiddenBlockTop + hiddenBlockHeight >= scrollTop && hiddenBlockTop <= scrollTop + windowHeight) {
    //             hiddenBlock.css({
    //                 // 'transform': 'translateX(0%)',
    //                 'opacity': '1'
                    
    //             }, function() {});
    //             card.fadeIn(1800);
    //         } else {
    //             hiddenBlock.css({
    //                 // 'transform': 'translateX(-100%)',
    //                 'opacity': '0'
                   
    //             });
    //             card.fadeOut(1800);
    //         }
    //     });
    // });

        //重置一次 上到下
    $(window).on('scroll', function() {
        // var windowHeight = $(window).height();
        let windowHeight = window.innerHeight;

        $('.in_show').each(function() {
            let card = $('.in_show_card');
            let hiddenBlock = $(this);
            let hiddenBlockTop = hiddenBlock.offset().top;
            if (hiddenBlockTop <= ($(window).scrollTop() + windowHeight - 80)) {
                hiddenBlock.css({
                    // 'transform': 'translateX(0%)',
                    'opacity': '1'
                }, function() {});
                card.fadeIn(1800);
            } else {
                hiddenBlock.css({
                    // 'transform': 'translateX(-100%)',
                    'opacity': '0'
                })
            }

            // console.log('to_TOP_H',$(window).scrollTop());
            // console.log('window_H',windowHeight);
            // console.log('Obj_H',hiddenBlockTop);
        });
    });

    $(window).on('scroll', function() {
        // var windowHeight = $(window).height();
        let windowHeight = window.innerHeight;

        $('.in_card').each(function() {
            let card = $('.in_show_cards');
            let hiddenBlock = $(this);
            let hiddenBlockTop = hiddenBlock.offset().top;
            if (hiddenBlockTop <= ($(window).scrollTop() + windowHeight - 80)) {
                hiddenBlock.css({
                    'transform': 'translateX(0%)',
                    'opacity': '1'
                }, function() {});
                card.fadeIn(1800);
            } else {
                hiddenBlock.css({
                    'transform': 'translateX(-100%)',
                    'opacity': '0'
                })
            }

            // console.log('to_TOP_H',$(window).scrollTop());
            // console.log('window_H',windowHeight);
            // console.log('Obj_H',hiddenBlockTop);
        });
    });

//bootstrap 提示
    let tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    let tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>