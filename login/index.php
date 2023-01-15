<link rel="stylesheet" href="../css/front.css">
<?php include_once "../layouts/link_css.php" ?>
<style>
    .for{
        font-size: 24px;
        text-align: center;
        color:red ;
        font-size: 24px;
        font-weight: bold;
        text-shadow: 1px 1px 1px #330033;
    }
</style>
<h1>管 理 者 登 入</h1>
<div class="container">
    <div class="row">
        <form action="../api/admin_login.php" method="POST" autocomplete="off" class="col col-lg-6 col-md-8 my-5">
            <div class="content">
                <div class="input-group mb-3 col-8">
                    <label class="input-group-text" >帳號 :</label>
                    <input type="text" class="form-control" name="acc" onclick="cle()">
                </div>
                <div class="input-group mb-3 col-8">
                    <label class="input-group-text">密碼 :</label>
                    <input type="password" class="form-control" name="pw">
                </div>
                <!-- <input type="hidden" name="url" valur=""> 傳遞前一頁，暫時先不做-->
            </div>
            <div class="text-center col-12 my-4">
                <input class="btn btn-warning shadow mx-1" type="reset" value="重置">
                <input class="btn btn-primary shadow mx-1" type="submit" value="登入">
            </div>
        </form>
    </div>
</div>
<?php
if(isset($_GET['error'])){
   
    echo "<div class='for'>帳號密碼錯誤 ，請重新登入 !!</div>";
    
}
?>
<script>
    function cle(){
       $('.for').text("");
    }
</script>