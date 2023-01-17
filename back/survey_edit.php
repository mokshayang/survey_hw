<?php
if (isset($_GET['id'])) {
    $img = $subject->find(['id' => $_GET['id']]);
    $opts = $options->all(['subject_id' => $_GET['id']]);
} else {
    to("./admin_center.php?do=survey&error=請指定項目編輯");
}

?>
<style>
    * {
        padding: 0;
        margin: 0;
    }

    .add {
        font-size: 18px;
        margin-bottom: 4px;
    }

    form {
        width: 68%;
        margin: auto;
        background-color: #fff;
        box-shadow: none;
    }

    .img {
        width: 25rem;
        height: 15rem;
        text-align: center;
        box-shadow: 1px 1px 5px var(--blue);
        margin: auto;
        border-radius: 20px;
        margin: 0.5rem auto;
        /* overflow: hidden; */
    }

    .ii {
        width: 120px;
        padding-bottom: 10px;
        padding-top: 10px;
    }

    .img div {
        width: 100%;
        height: 100%;
        border-radius: 20px;
        overflow: hidden;
    }

    .img div img {
        width: 100%;
        transform: scale(1, 1);
        transition: all 0.3s ease-out;
    }

    .img div img:hover {
        transform: scale(1.02, 1.02);
    }
</style>
<h3>編輯調查 <button id="optionAdd" class="btn btn-outline-success btn-sm add" data-toggle="tooltip" data-placement="top" title="增加選項">+</button></h3>

<div class="img">
    <div>
        <?php
        if (!empty($_GET['id'])) {
            if (is_image($img['type'])) {
        ?>
                <img src="./upload/<?= $img['img'] ?>" alt="">
            <?php } else {
                $icon = dummy_icon($img['type']);
            ?>
                <img src="./material/<?= $icon ?>" class="ii" style="width: 144px;" alt="">
        <?php }
        } ?>
    </div>
</div>
<form action="./api/survey_edit.php" method="post" class="col-5 mx-auto  flex-wrap justify-content-center">
    <div class="input-group mb-3">
        <label class=" input-group-text ">&nbsp; 主 題 : &nbsp; </label>
        <input type="text" name="subject" value="<?= $img['subject'] ?>" class="form-control ">
        <input type="hidden" name="subject_id" value="<?= $img['id'] ?>">
    </div>
    <div>
        <!-- 選項區 -->
        <?php
        foreach ($opts as $idx => $opt) {
        ?>
            <div class="input-group mb-3 col-8" id="opts">
                <label class=" input-group-text ">選項 :&nbsp;<span><?= $idx + 1; ?></span></label>
                <!-- 將選項內容裝入array->opt[] -->
                <input type="text" name="opt[]" value="<?= $opt['opt'] ?>" class="form-control">
                <?php
                if ($idx == 0) {
                ?>
                    <a href="#" class="btn btn-primary" role="button" style='border-radius:4px;width:33.14px;'></a>
                <?php } else { ?>
                    <a href="./api/survey_opt_del.php?id=<?= $opt['id'] ?>" class="btn btn-outline-secondary" role="button" style='border-radius:4px;'>-</a>
                <?php } ?>
                <!-- 將survey_opts id 內容裝入array->opt_id[] -->
                <input type="hidden" name="opt_id[]" value="<?= $opt['id'] ?>">
            </div>
        <?php } ?>
    </div>
    <div class="text-center col-12 mt-3">
        <input class="btn btn-success mx-1" onclick="op('#cover','#cvr','./modal/renew.php?imgId=<?= $img['id']; ?>')" value="變更主題圖片">
        <input class="btn btn-outline-ss mx-1" type="reset" value="重置">
        <input class="btn btn-ss mx-1" type="submit" value="修改">
    </div>
</form>



<script>
    //  $('[data-toggle="tooltip"]').tooltip();
    $(function() {

        const optionAdd = $('#optionAdd'); //button
        optionAdd.on('click', function() {
            const opts = $('#opts'); //div optsArea
            const addDiv = $('.addDiv'); //count opts number
            const num = $('label').length;
            console.log(num);
            const div = `<div class='input-group mb-3 col-10 addDiv'>
                            <label class='input-group-text'>
                                選項 :&nbsp;<span>${num}</span>
                            </label>
                            <input type='text' name='optn[]' class='form-control'>
                            <div class='remove btn btn-outline-ss' role='button'>-</div>
                        </div>`; //addDiv Html

            opts.parent().append(div);
            $('.remove').on('click', function() {
                $(this).parent().remove();
                $('span').each(function(e) {
                    $('span').eq(e).text(e + 1);
                });

            });
        });


        $('input').keypress(function(e) {
            code = e.keyCode ? e.keyCode : e.which; // in case of browser compatibility
            if (code == 13) {
                e.preventDefault();

            }
        });

    })
</script>