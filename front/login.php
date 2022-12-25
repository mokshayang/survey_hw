<h1>會 員 登 入</h1>
<div class="container">
    <div class="row">
        <form action="api/chk_user.php" method="POST" autocomplete="off" class="col col-lg-6 col-md-8 my-5">
            <div class="content">
                <div class="input-group mb-3 col-8">
                    <label class="input-group-text">帳號 :</label>
                    <input type="text" class="form-control" name="acc">
                </div>
                <div class="input-group mb-3 col-8">
                    <label class="input-group-text">密碼 :</label>
                    <input type="text" class="form-control" name="pw">
                </div>
                <!-- <input type="hidden" name="url" valur=""> 傳遞前一頁，暫時先不做-->
            </div>
            <div class="text-center col-12 my-4">
                <a href="#" class="btn btn-danger shadow mx-1">忘記密碼</a>
                <input class="btn btn-warning shadow mx-1" type="reset" value="重置">
                <input class="btn btn-primary shadow mx-1" type="submit" value="登入">
            </div>
        </form>
    </div>
</div>
<?php
if(isset($_GET['error'])){
    echo "<div>帳號密碼錯誤 !!</div>";
}
?>