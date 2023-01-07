<style>
    img {
        width: 100%;
       
        margin: auto;
        transform: scale(1, 1);
        transition: all 0.3s ease-out;
    }

    img:hover {
        transform: scale(1.02, 1.02);
    }
</style>
<h3>調查列表</h3>
<div class=add_head>
    <a href="admin_center.php?do=survey_add">新增調查主題</a>
</div>
<div class="container text-center">
    <div class="row mt-5 ">
        <?php
        $surveys = $subject->all();
        foreach ($surveys as $survey) {
            $active = ($survey['acive'] == 1) ? "btn-primary" : "btn-secondary";
            $activeText = ($survey['acive'] == 1) ? "啟用" : "關閉";
        ?>
            <div class="col-12 col-sm-6 col-lg-4  my-3 d-flex justify-content-center ">
                <div class="card shadow " style="width: 20rem; overflow:hidden;">
                    <?php
                    if (is_image($survey['type'])) {
                    ?>
                        <img src="./upload/<?= $survey['img'] ?>" class="rounded-top">
                    <?php } else {
                        $icon = dummy_icon($survey['type']);
                    ?>
                        <img src="./material/<?= $icon ?>" style="width:144px" alt="">
                    <?php } ?>
                    <div class="card-body ">
                        <p class="card-text"><?= $survey['subject'] ?></p>
                        <a href="./api/acive.php?id=<?= $survey['id'] ?>" class="btn btn-sm mx-2 <?= $active ?>"> <?= $activeText ?> </a>
                        <a href="./admin_center.php?do=survey_edit&id=<?= $survey['id'] ?>" class="btn btn-sm btn-success mx-2">編輯</a>
                        <a href="./api/del.php?id=<?= $survey['id'] ?>" class="btn btn-sm btn-info mx-2">刪除</a>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</div>