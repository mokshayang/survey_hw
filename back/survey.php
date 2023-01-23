<style>
    img {
        width: 100%;
        height: 100%;
        margin: auto;
        transform: scale(1, 1);
        transition: all 0.3s ease-out;
    }

    .ii {
        width: 120px;
        /* height: 242px; */
        padding-bottom: 10px;
        padding-top: 10px;
    }

    img:hover {
        transform: scale(1.02, 1.02);
    }

    .sub {
        font-size: 24px;
        font-weight: bold;
        text-shadow: 1px 1px 1px #33333395;
    }

    .bh {
        box-shadow: 1px 1px 10px #33333390;
    }
    .mm{
        width:320px;
        height: 192px;
        overflow: hidden;
    }
    .radio{
        border-radius: 20px ;
    }
    .cardshadow{
        box-shadow: 1px 1px 10px var(--lightBlue);
    }
</style>
<h3>調查列表</h3>
<div class=add_head>
    <a href="admin_center.php?do=survey_add" class="btn btn-ss">新增調查主題</a>
</div>
<div class="container text-center" style="margin:20px auto 100px;">
    <div class="row mt-5 ">
        <?php
        $surveys = $subject->all();
        foreach ($surveys as $survey) {
            $active = ($survey['acive'] == 1) ? "btn-primary" : "btn-secondary";
            $activeText = ($survey['acive'] == 1) ? "啟用" : "關閉";
            $level = ($survey['level'] == 1) ? "btn-ss" : "btn-outline-secondary";
            $levelText = ($survey['level'] == 1) ? "會員" : "一般";

        ?>
            <div class="col-12 col-sm-6 col-lg-4  my-3 d-flex  justify-content-center ">
                <div class="card radio cardshadow" style="width: 320px; overflow:hidden;">
                <div class="mm ">
                    <?php
                    if (is_image($survey['type'])) {
                    ?>
                        <img src="./upload/<?= $survey['img'] ?>" >
                    <?php } else {
                        $icon = dummy_icon($survey['type']);
                    ?>
                        <img src="./material/<?= $icon ?>" class="ii" alt="">
                    <?php } ?>
                </div>
                    <div class="card-body ">
                        <p class="card-text sub"><?= $survey['subject'] ?></p>
                        <a href="./api/acive.php?id=<?= $survey['id'] ?>" class="btn btn-sm mx-1 bh <?= $active ?>"> <?= $activeText ?> </a>
                        <a href="./api/level.php?id=<?= $survey['id'] ?>" class="btn btn-sm mx-1 bh <?= $level ?>"><?= $levelText ?></a>
                        <a href="./admin_center.php?do=survey_edit&id=<?= $survey['id'] ?>" class="btn btn-sm btn-outline-ss mx-1 bh ">編輯</a>
                        <a href="./api/del.php?id=<?= $survey['id'] ?>" class="btn btn-sm btn-warning mx-1 bh" onclick="
                        return confirm('確定刪除主題 : <?=$survey['subject']?>  ?')">刪除</a>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</div>
