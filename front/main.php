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
<div class="container">
</div>
<!-- 給予固定高度 -->
<!--↓↓↓↓↓↓↓↓↓↓ bootstrap　↓↓↓↓↓↓↓↓↓↓-->
<div class="container">

    <!--↓↓↓↓↓↓↓↓↓↓ 廣告曲　↓↓↓↓↓↓↓↓↓↓-->
    <div>

    </div>
<style>
  .sh{
    position: absolute;
    position: relative;
    min-width: 380px;
    min-height: 560px;
    transform:translate(-50%,-10%); 
    left:56%;
    background-color:#ffffff95;
    box-shadow: 1px 1px 3px 1px #33333390;
    z-index: 100;
  }
</style>
    <!--↓↓↓↓↓↓↓↓↓↓ 一般會員　↓↓↓↓↓↓↓↓↓↓-->
    <div id="cover" style="display:none;min-width:380px ">
        <div id="coverr"style="min-width:380px" >
            <div id="cvr" class="sh" style="position:absolute; width:40%; min-width:380px; min-height:560px; margin:auto; transform:translate(-50%,-10%); left:56%; background-color:#fff;  border-radius: 20px;  background-color:#fff;box-shadow: 1px 1px 3px 1px #33333390;"  ></div>
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
        $surveys = $subject->all(['acive' => 1,'level'=>0]); //啟動
        foreach ($surveys as $key => $survey) {
        ?>
            <div class="items">
                <div><?= $survey['subject'] ?></div>
                <div><?= $survey['vote'] ?></div>
                <div>
                  
                    <a  class="btn btn-sm btn-success mx-1" onclick="op('#cover','#cvr','./front/survey_item.php?id=<?= $survey['id']; ?>')" >投票</a>

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
<?php include_once "./slider/slider.php" ?> <!-- 尚未製作  -->
<!-- 紙牌區 -->