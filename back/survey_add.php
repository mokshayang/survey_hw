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
        margin: 32px auto;
        background-color: #fff;
        box-shadow: none;
    }
</style>
<h3>新增選項 <button id="optionAdd" class="btn btn-outline-success btn-sm add" data-toggle="tooltip" data-placement="top" title="增加選項">+</button></h3>

<form action="./api/survey_edit.php" method="post" class="col-5 mx-auto  flex-wrap justify-content-center">
    <div class="input-group mb-3">
        <label class=" input-group-text ">&nbsp; 主 題 : &nbsp; </label>
        <input type="text" name="subject"  class="form-control ">
        <input type="hidden" name="subject_id" >
    </div>
    <div>
        <!-- 選項區 -->
        <?php
       
        ?>
            <div class="input-group mb-3 col-8" id="options">
                <label class=" input-group-text ">選項 :&nbsp;<span></span></label>
                <!-- 將選項內容裝入array->opt[] -->
                <input type="text" name="opt[]" value="" class="form-control">
                <a href="#" class="btn btn-primary" role="button" style='border-radius:4px;width:33.14px;'></a>
                <!-- 將survey_options id 內容裝入array->opt_id[] -->
                <input type="hidden" name="opt_id[]" value="<?= $option['id'] ?>">
            </div>
         
        
        
    </div>
    <div class="text-center mt-3">
    <input class="btn btn-success mx-1" onclick="op('#cover','#cvr','./modal/add.php')" value="圖片">
        <input class="btn btn-warning mx-1" type="reset" value="重置">
        <input class="btn btn-primary mx-1" type="submit" value="新增">
    </div>
</form>
<script>
    //  $('[data-toggle="tooltip"]').tooltip();

    $(function() {
        const optionAdd = $('#optionAdd'); //button
        optionAdd.on('click',function() {
            const options = $('#options'); //div optionsArea
            const addDiv = $('.addDiv'); //count options number
            const num= $('label').length;
            console.log(num);
            const div = "<div class='input-group mb-3 col-10 addDiv'><label class='input-group-text'>選項 :&nbsp;<span>" + (num) + "</span></label><input type='text' name='optn[]' class='form-control '><div class='remove btn btn-outline-warning' role='button'>-</div></div>"; //addDiv Html
            options.parent().append(div);
            $('.remove').on('click',function() {
                $(this).parent().remove();
                $('span').each(function(e) {
                    $('span').eq(e).text(e +1);
                })
                // console.log($('span').eq(0));
            })
        })

    })
</script>