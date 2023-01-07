<style>


</style>
<h3>新增主題圖片</h3>
<hr>
<form action="./api/photo.php" method="post" enctype="multipart/form-data">
    <div class="form-group " style="text-align:center;">
        <label> 選擇圖片 :
            <input type="file" class="form-control-file" name="img">
        </label>
    </div>
    <div style="text-align:center; padding: 20px;">
        <?php
        if (!empty($_GET['imgId'])) {
        ?>
        <input type="hidden" name="id" value="<?= $_GET['imgId'] ?>">
        <?php } ?>
        <input type="hidden" name="table" value="survey_add">
        <input class="btn btn-sm btn-primary mx-2" type="submit" value="確定">
        <input class="btn btn-sm btn-success mx-2" type="reset" value="重置">
    </div>
</form>