<?php
// if (isset($_GET['id'])) {
//     $subject = find('survey_subject', $_GET['id']);
//     $options = all('survey_options', ['subject_id' => $_GET['id']]);
// } else {
//     to("./admin_center.php?do=survey&error=請指定項目編輯");
// }
?>
<style>
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
        width: 18rem;
        height: 12rem;
        text-align: center;
        /* border: 2px solid orange; */
        box-shadow: 1px 1px 5px #33333380;
        margin: auto;
        margin-bottom: 5px;
        border-radius: 40px;
        overflow: hidden;
    }
    .img div{
        width: 100%;
        height: 100%;
    }
    .img img {
        width: 100%;

    }
</style>
<h3>新增選項 <button id="optionAdd" class="btn btn-outline-success btn-sm add" data-toggle="tooltip" data-placement="top" title="增加選項">+</button></h3>

<div class="img">
    <div>
        <?php
        if (!empty($_GET['imgId'])) {
            $img = $subject->find(['id' => $_GET['imgId']]);
            // dd($img);
            if (is_image($img['type'])) {
        ?>
                <img src="./upload/<?= $img['img'] ?>" alt="">
            <?php } else {
                $icon = dummy_icon($img['type']);
            ?>
                <img src="./material/<?= $icon ?>" style="width:144px" alt="">
        <?php }
        } ?>
    </div>
</div>

<form action="./api/survey_add.php" method="post" class="col-5 mx-auto  flex-wrap justify-content-center">
    <div class="input-group mb-3">
        <label class=" input-group-text ">&nbsp; 主 題 : &nbsp; </label>
        <input type="text" name="subject" class="form-control ">
    </div>
    <div>
        <!-- 選項區 -->
        <div class="input-group mb-3 col-8" id="options">
            <label class=" input-group-text ">選項 :&nbsp;<span>1</span></label>
            <!-- 將選項內容裝入array->opt[] -->
            <input type="text" name="opt[]" value="" class="form-control">
            <a href="#" class="btn btn-primary" role="button" style='border-radius:4px;width:33.14px;'></a>
            <!-- 將survey_options id 內容裝入array->opt_id[] -->
            
        </div>

    </div>
    <div class="text-center mt-3">
        <?php
        if (!empty($_GET['imgId'])) {
        ?>
            <input class="btn btn-success mx-1" onclick="op('#cover','#cvr','./modal/add.php?imgId=<?= $img['id']; ?>')" value="更改主題圖片">
            <input type="hidden" name=subject_id   value="<?= $img['id']; ?>">
        <?php } else { ?>
            <input class="btn btn-success mx-1" onclick="op('#cover','#cvr','./modal/add.php')" value="新增主題圖片">
        <?php } ?>
        <input class="btn btn-warning mx-1" type="reset" value="重置">

        <input class="btn btn-primary mx-1" type="submit" value="新增">
    </div>
</form>
<script>
    //  $('[data-toggle="tooltip"]').tooltip();

    $(function() {
        const optionAdd = $('#optionAdd'); //button
        optionAdd.on('click', function() {
            const options = $('#options'); //div optionsArea
            const addDiv = $('.addDiv'); //count options number
            const num = $('label').length;
            console.log(num);
            const div = `<div class='input-group mb-3 col-10 addDiv'>
                            <label class='input-group-text'>選項 :&nbsp;<span>${num}</span></label>
                            <input type='text' name='opt[]' class='form-control '>
                            <div class='remove btn btn-outline-warning' role='button'>-</div>
                         </div>`; //addDiv Html
            options.parent().append(div);
            $('.remove').on('click', function() {
                $(this).parent().remove();
                $('span').each(function(e) {
                    $('span').eq(e).text(e + 1);
                })
                // console.log($('span').eq(0));
            })
        })

    })
</script>