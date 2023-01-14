<?php
include_once "./db/base.php";
$user_edit = $user->find(['id'=>$_GET['id']]);
// dd($user_edit);
?>
<script>
    	
    function censorpw() { 
        let check = false;
        let pass = document.getElementById("pw").value;
        if (pass.length < 4) {
            document.getElementById("checkpw").innerHTML = "密碼請多於4位 ";
            check = false;
        } else {
            document.getElementById("checkpw").innerHTML = " ";
            check = true;
        };
        return check;
    };
    function rePw() { 
        let check = false;
        let pass = document.getElementById("pw").value;
        let repass = document.getElementById("repw").value;
        if (pass != repass) {
            document.getElementById("check").innerHTML = "確認密碼不一樣";
            check = false;
        } else {
            document.getElementById("check").innerHTML = " ";
            check = true;
        };
        return check;
    };
    function shmail(){
        let check = false;
        let chkmail = $('#shmail');
        if(chkmail.html() === "已有相同信箱，請換一個"){
        check=false;
    }else{
        check=true;
    }
    return check;
}
function checkForm() {
    let check = censorpw() && rePw()  && shmail();
    
        return check;
    };
</script>

<h1>會 員 修 改</h1>
<div class="container">
    <div class="row">
        <form action="api/user_edit.php" method="POST" autocomplete="off" class="col col-lg-6 col-md-8 my-5 mb-3" onSubmit="return checkForm()">
            <div class="content">
                <div class="input-group mb-4 col-8">
                    <div>&nbsp;&nbsp;&nbsp;帳　　號 : </div>
                    <div>&nbsp;&nbsp;&nbsp;<?=$user_edit['acc']?></div>
                </div>
                <div class="input-group mb-4 col-8">
                    <label class="input-group-text">密　　碼 :</label>
                    <input id="pw" name="pw" type="password" class="form-control" required onChange="censorpw()" value="<?=$user_edit['pw']?>">
                    <i id="seepw" class="input-group-text bi bi-eye-slash-fill" style="font-size:24px;"></i>
                </div>
                <div class="input-group mb-4 col-8">
                    <label class="input-group-text">確認密碼 :</label>
                    <input id="repw" type="password" class="form-control" required onchange="rePw()" value="<?=$user_edit['pw']?>">
                    <i id="seerpw" class="input-group-text bi bi-eye-slash-fill" style="font-size:24px;"></i>
                </div>
                <div class="input-group mb-4 col-8">
                    <label class="input-group-text">名　　稱 :</label>
                    <input type="text" class="form-control" name="name" required value="<?=$user_edit['name']?>">
                </div>
                <div class="input-group mb-4 col-8">
                    <label class="input-group-text">信　　箱 :</label>
                    <input type="email" class="form-control" name="email" id="email" required onchange="instmail()" value="<?=$user_edit['email']?>">
                </div>
            </div>
            <div class="text-center col-12 my-4">
                <input type="hidden" name="id" value="<?=$user_edit['id']?>">
                <input class="btn btn-warning shadow mx-1" type="reset" value="復原">
                <input class="btn btn-primary shadow mx-1" type="submit" value="修改">
            </div>
        </form>
        <div class="text-center col-12">
            
            <span id="checkpw" style="color:#f00; font-size:20px;"></span>
            <span id="check" style="color:#f00; font-size:20px;"></span>
        </div>
        <div id="shmail" class="text-center col-12" style="color:#00f; font-size:20px;"></div>
    </div>
</div>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
<script>
    $('#seepw').click(function() {
        let passtype = document.getElementById("pw");
        if (passtype.type == 'password') {
            $('#pw').attr('type', 'text');
            $('#seepw').removeClass().addClass('input-group-text bi bi-eye-fill text-primary shadow');
        } else {
            $('#pw').attr('type', 'password');
            $('#seepw').removeClass().addClass('input-group-text bi bi-eye-slash-fill');
        };
    });
    $('#seerpw').click(function() {
        let passtype = document.getElementById("repw");
        if (passtype.type == 'password') {
            $('#repw').attr('type', 'text');
            $('#seerpw').removeClass().addClass('input-group-text bi bi-eye-fill text-primary shadow');
        } else {
            $('#repw').attr('type', 'password');
            $('#seerpw').removeClass().addClass('input-group-text bi bi-eye-slash-fill');
        };
    });

function instmail(){
    let check = false;
    let mail = {'email' : $('#email').val()};
    let shmail =$('#shmail');
    // console.log(mail.email.trim());
    if(mail.email.trim() != "<?=$user_edit['email']?>"){
    $.post("./api/chk_email.php",mail,(res)=>{
        // console.log(res);
        if(parseInt(res) ===1){
            shmail.html("已有相同信箱，請換一個");
            check = false;
        }else{
            shmail.html("信箱可以使用")
            check = true;
        }
    })
    return check;
}
}


</script>