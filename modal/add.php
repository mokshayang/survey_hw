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
        if (!empty($_GET['id'])) {
        ?>
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <?php } ?>
        <input type="hidden" name="table" value="survey_add">
        <input class="btn btn-sm btn-ss login" type="submit" value="確定">
      
    </div>
</form>