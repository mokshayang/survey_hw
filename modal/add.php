<style>
.sh{
    box-shadow: 0px 0px 5px var(--lightBlue);
    padding: 10px auto;
}
</style>
<h3>新增主題圖片</h3>
<hr>
<br>
<h5 style="text-align: center;color:var(--fadeBlue);">規格 : &nbsp;&nbsp; 寬 比 高 為 5 : 3</h5>
<br>
<form action="./api/photo.php" method="post" enctype="multipart/form-data" class="sh">
    <div class="form-group " style="text-align:center;">
        <label> 選擇圖片 :
            <input type="file" class="form-control-file" name="img">
        </label>
    </div>
    <div style="text-align:center; padding: 30px;">
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