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
    }
</style>
<h3>新增選項 <button id="optionAdd" class="btn btn-outline-success btn-sm add" data-toggle="tooltip" data-placement="top" title="增加選項">+</button></h3>