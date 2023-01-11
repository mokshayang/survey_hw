<link rel="stylesheet" href="./css/table.css">
<script src="./js/js.js"></script>

<style>
    .selected {
        color: #ccc;
    }

    .items:hover {
        background-color: #dddddd90;
    }
</style>
<!--↓↓↓↓↓↓↓↓↓↓ photo　↓↓↓↓↓↓↓↓↓↓-->
<div>
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
            <div id="cvr" class="sh" style="position:absolute; width:40%; min-width:380px; min-height:560px; margin:auto; transform:translate(-50%,-10%); left:56%; background-color:#fff;  border-radius: 20px;  background-color:#fff;box-shadow: 1px 1px 3px 1px #33333390;"></div>
            <a style="position:absolute; color:#00f; transform:translate(-50%,-20%);  left:74%;  cursor:pointer; z-index: 100;" onclick="cl('#cover')">X</a>

        </div>
    </div>
    <h3>調查列表</h3>
    <div class="table_list">
        <div class="table_head">
            <div>主題</div>
            <div>參與數</div>
            <div>操作</div>
        </div>
        <?php
        $surveys = $subject->all(['acive' => 1, 'level' => 0]); //啟動
        foreach ($surveys as $key => $survey) {
        ?>
            <div class="items">
                <div><?= $survey['subject'] ?></div>
                <div><?= $survey['vote'] ?></div>
                <div>

                    <a class="btn btn-sm btn-success mx-1" onclick="op('#cover','#cvr','./front/survey_item.php?id=<?= $survey['id']; ?>')">投票</a>

                    <a href="index.php?do=survey_result&id=<?= $survey['id']; ?>" class="btn btn-sm btn-outline-success mx-1">結果</a>

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
        .slider{
            text-align: center;
            font-size: 30px;
            margin: 30px auto;
        }
</style>
<div class="slider">照片撈資料庫的主題照片，上方宣傳語言</div>
<?php include_once "./slider/slider.php" ?> <!-- 尚未製作  -->
<!-- 紙牌區 -->


<style>
    .c {
        width: 200px;
        height: 300px;
        background-color: transparent;
        cursor: pointer;
    }

    .card {
        width: 200px;
        height: 300px;
        border-radius: 10px;
        overflow: hidden;
        transition: 1.6s all ease;
        backface-visibility: hidden;
        box-shadow: 3px 3px 10px #333;
    }

    .cardfront {
        background: url("./photo/vote.jpg");
        background-size: 100%;
        position: relative;
        transform: rotateY(0deg);
    }

    .cardback {
        /* background: url("01D08.jpg"); */
        top: -300px;
        position: relative;
        transform: rotateY(180deg);
    }

    .c:hover .cardfront {
        transform: rotateY(180deg);
    }

    .c:hover .cardback {
        transform: rotateY(0deg);
    }

    .asb {
        margin-top: 40px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        justify-items: center;
        grid-gap: 20px;
    }
    @media screen and (max-width:760px) {
        .asb {
            grid-template-columns: repeat(2, 1fr);
    }
}
</style>
<style>
    .user{
        text-align: center;
        font-size: 40px;
        line-height: 40px;
        margin: 40px auto;
    }
</style>
<div class="user">會員投票區:</div>
<div class="container text-center">

    <div class="row">

        <div class="asb">

            <div class="col-12 col-sm-6 col-lg-4 my-3 c justify-content-center">
                <div class="card cardfront">
                    front
                </div>

                <div class="card cardback">
                    <a href="#">
                        <img src="./photo/vote.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-3 c justify-content-center">
                <div class="card cardfront">
                    front
                </div>

                <div class="card cardback">
                    <a href="#">
                        <img src="./photo/vote.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-3 c justify-content-center">
                <div class="card cardfront">
                    front
                </div>

                <div class="card cardback">
                    <a href="#">
                        <img src="./photo/vote.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-3 c justify-content-center">
                <div class="card cardfront">
                    front
                </div>

                <div class="card cardback">
                    <a href="#">
                        <img src="./photo/vote.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-3 c justify-content-center">
                <div class="card cardfront">
                    front
                </div>

                <div class="card cardback">
                    <a href="#">
                        <img src="./photo/vote.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-3 c justify-content-center">
                <div class="card cardfront">
                    front
                </div>

                <div class="card cardback">
                    <a href="#">
                        <img src="./photo/vote.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-3 c justify-content-center">
                <div class="card cardfront">
                    front
                </div>

                <div class="card cardback">
                    <a href="#">
                        <img src="./photo/vote.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-3 c justify-content-center">
                <div class="card cardfront">
                    front
                </div>

                <div class="card cardback">
                    <a href="#">
                        <img src="./photo/vote.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-3 c justify-content-center">
                <div class="card cardfront">
                    front
                </div>

                <div class="card cardback">
                    <a href="#">
                        <img src="./photo/vote.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 my-3 c justify-content-center">
                <div class="card cardfront">
                    front
                </div>

                <div class="card cardback">
                    <a href="#">
                        <img src="./photo/vote.jpg" alt="">
                    </a>
                </div>
            </div>






        </div>
    </div>
</div>
<style>
#go-top{
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: linear-gradient(blue, #fff);
    box-shadow: 1px 1px 5px var(--fadeBlue);
    position: fixed;
    right: 40px;
    bottom: 60px;
    display:hidden;
    cursor: pointer;
}
#go-top .bi{
    font-size: 60px;
    color: #fff;
    position: absolute;
    top: -15px;
}
</style>

<div id="go-top">
<i class="bi bi-arrow-up-short"></i>
</div>

<style>
    .tt{
        text-align: center;
        font-size: 40px;
        margin: 40px  auto;
        height: 280px;
        line-height: 280px;
        background-color: var(--darkBlue);
        color: #eee;
    }
</style>
<script src="./js/goTop.js"></script>
<footer>
    <div class="tt">
   footer information
    </div>
</footer>