<?php include_once "../db/base.php"; ?>
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
        margin:0 auto;
        background-color: #fff;
        box-shadow: none;
        padding-top: 5px;
    }

    .items {
        margin:0px auto 10px;
        display: grid;
        grid-auto-rows: 48px;
        grid-template-columns: 1fr 1fr 6fr 1fr;
        justify-items: end;
    }

    .radio {
        width: 38px;
        height: 38px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #fff;
        text-align: center;
        line-height: 38px;
    }
    .img_sub {
        width: 300px;
        height: 180px;
        text-align: center;
        box-shadow: 1px 1px 5px var(--blue);
        margin: auto;
        border-radius: 20px;
        overflow: hidden;
        min-width: 240px;
        min-height: 144px;
    }
    .ii {
        width: 120px;
    }
    .img_sub div{
        width: 100%;
        height: 100%;
    }
    .img_sub .img_opt {
        width: 100%;
    }
    @media only screen and (max-width: 780px) {
        form {
            width: 90%;
        }
    }
    .img_opt , .ii {
        width: 100%;
        margin: auto;
        transform: scale(1, 1);
        transition: all 0.3s ease-out;
    }

    .img_opt:hover , .ii:hover {
        transform: scale(1.02, 1.02);
    }
    .select{

        margin: 10px auto 0;
        text-align: center;
        font-size: 20px;
        
    }
</style>
<h3 style="padding:5px;margin:0 auto;"><?= $survey['subject'] ?></h3>
<div class="img_sub">
    <div >
        <?php
        if (!empty($_GET['id'])) {
            if (is_image($survey['type'])) {
        ?>
                <img src="./upload/<?= $survey['img'] ?>" class="img_opt" alt="photo">
            <?php } else {
                $icon = dummy_icon($survey['type']);
            ?>
                <img src="./material/<?= $icon ?>" class="ii" style="width: 132px; padding-top:2px;" alt="">
        <?php }
        } ?>
    </div>
</div>
<div class="select">請選擇您的意見</div>
<form action="./api/survey_vote.php" method="post" >
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
            <input class="btn btn-primary mx-1" type="submit" value="投票">
        </div>
    <?php } ?>
</form>