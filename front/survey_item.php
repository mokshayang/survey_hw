<?php
if (isset($_GET['id'])) {
    $survey =$subject->find( $_GET['id']); //取得主題
    $options =$options->all( ['subject_id' => $_GET['id']]); //取的選項資料
    //  dd($options);
} else {
    $error = "請回到問卷首頁選擇正確的題目來進行";
}
// echo $_GET['ip'];
?>
<link rel="stylesheet" href="./css/table.css">
<style>
    form {
        width: 68%;
        margin:auto;
        background-color: #fff;
        box-shadow: none;
    }

    .items {
        margin:10px auto;
        display: grid;
        grid-auto-rows: 48;
        grid-template-columns: 3fr 1fr 6fr 3fr;
        justify-items: end;
    }

    .radio {
        width: 38px;
        height: 38px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #eef;
        text-align: center;
        line-height: 38px;
    }
    .img {
        width: 21rem;
        height: 14rem;
        text-align: center;
        /* border: 2px solid orange; */
        box-shadow: 1px 1px 5px #33333380;
        margin: auto;
        margin-bottom: 5px;
        border-radius: 40px;
        overflow: hidden;
    }
    .ii {
        width: 120px;
        /* height: 242px; */
        padding-bottom: 10px;
        padding-top: 10px;
    }
    .img div{
        width: 100%;
        height: 100%;
    }
    .img img {
        width: 100%;

    }
    @media only screen and (max-width: 780px) {
        form {
            width: 90%;
        }
    }
</style>
<h3 style="padding-top:20px;"><?= $survey['subject'] ?></h3>
<div class="img">
    <div >
        <?php
        if (!empty($_GET['id'])) {
            if (is_image($survey['type'])) {
        ?>
                <img src="./upload/<?= $survey['img'] ?>" alt="">
            <?php } else {
                $icon = dummy_icon($survey['type']);
            ?>
                <img src="./material/<?= $icon ?>" class="ii" style="width: 144px;" alt="">
        <?php }
        } ?>
    </div>
</div>

<form action="./api/survey_vote.php" method="post">
    <div class="items">
        <?php
        if (isset($error)) {
            echo "<span style='color:red'>" . $error . "</span>";
        } else {
            foreach ($options as $key => $option) {
                $checked = ($key == 0) ? "checked" : "";
        ?>
                <!-- 項目列表 -->
  
                <div></div>
                <div class="radio">
                    <input type="radio" name="option" <?= $checked ?> value="<?= $option['id'] ?>">
                </div>
                <div class="form-control">
                    <?= $option['opt']; ?>
                </div>
                <div></div>
        <?php
            }
        }
        ?>
    </div>
    <?php if (!isset($error)) {; ?>
        <div class="text-center col-12 mt-3">
            <a href="index.php?do=main" class="btn btn-warning mx-1">取消返回</a>
            <input class="btn btn-primary mx-1" type="submit" value="投票">
        </div>
    <?php } ?>
</form>