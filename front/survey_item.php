<?php include_once "../db/base.php"; ?>
<?php
if (isset($_GET['id'])) {
    $survey = $subject->find($_GET['id']); //取得主題
    $options = $options->all(['subject_id' => $_GET['id']]); //取的選項資料
    //  dd($options);
} else {
    $error = "請回到問卷首頁選擇正確的題目來進行";
}
// echo $_GET['ip'];
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<link rel="stylesheet" href="./css/table.css">
<style>
    form {
        width: 88%;
        margin: 0 auto;
        background-color: #fff;
        box-shadow: none;
        padding-top: 5px;
    }

    .items {
        margin: 0px auto 5px;
        display: grid;
        grid-auto-rows: 36px;
        grid-template-columns: 1fr 1fr 20fr;
        justify-items: end;
        grid-gap: 5px;
    }

    .radio {
        width: 38px;
        height: 38px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #fff;
        text-align: center;
        line-height: 38px;
        /* margin: auto; */
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

    .img_sub div {
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

    .img_opt,
    .ii {
        width: 100%;
        margin: auto;
        transform: scale(1, 1);
        transition: all 0.3s ease-out;
    }

    .img_opt:hover,
    .ii:hover {
        transform: scale(1.02, 1.02);
    }

    .select {

        margin: 10px auto 0;
        text-align: center;
        font-size: 20px;

    }
</style>
<h3 style="padding:5px;margin:0 auto;"><?= $survey['subject'] ?></h3>
<div class="img_sub">
    <div>
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
<style>
    #all_show {
        position: absolute;
        width: 180px;
        min-height: 180px;
        background-color: #eef;
        /* top: 0px;*/
        left: 160px;
        z-index: 100;
        display: none;
        padding: 5px;
        border-radius: 10px;
        border: 3px double #f90;
        background-position: initial initial;
        background-repeat: initial initial;
        overflow: auto;
    }

 .option_select:hover{
    cursor: pointer;
    background-color: #ccccee90;
 }
</style>
<div class="select">請選擇您的意見</div>
<form action="./api/survey_vote.php" method="post">
    <div class="items my-3">
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
                <div class="form-control option_select" style='position:relative;'>
                    <?= mb_substr($option['opt'], 0, 15) . "..."; ?>
                    <span class="all" style="display:none;"><?= $option['opt'] ?></span>
                    <div id="all_show"></div>
                </div>

        <?php
            }
        }
        ?>
    </div>
    <?php if (!isset($error)) {; ?>
        <div class="text-center col-12 mt-3">
            <input class="btn btn-ss my-2 login" type="submit" value="投票">
        </div>
    <?php } ?>
</form>


<script>
    $(".option_select").hover(
        function() {
            let div = `
                    ${
                    $(this).children(".all").html() 
                    }`;
            $("#all_show").html(div);
            //對齊選項

            let position = $(this).position();
            $("#all_show").css({
                top: position.top + $(this).height()-328,
                left: position.left+100
            });

            $("#all_show").show();
        }
    )
    $(".option_select").mouseout(
        function() {
            $('#all_show').hide();
        }
    )
</script>