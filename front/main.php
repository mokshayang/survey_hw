<link rel="stylesheet" href="./css/table.css">
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

    <!--↓↓↓↓↓↓↓↓↓↓ 一般會員　↓↓↓↓↓↓↓↓↓↓-->
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
                    <a href="./index.php?do=survey_item&id=<?= $survey['id'] ?>" class="btn btn-sm btn-success mx-1 ">投票</a>
                    <a href="index.php?do=survey_result&id=<?= $survey['id']; ?>" class="btn btn-sm btn-outline-success mx-1">結果</a>

                </div>
            </div>
        <?php } ?>
    </div>
</div>