<script>
    	function instCheck() {//ajax
		if(document.getElementById("acc").value !="") {
			const request=new XMLHttpRequest() ;
			const url="./api/acc_check.php";
			let acc=document.getElementById("acc").value;
			let vars="acc="+acc;
			request.open("POST",url,true);
			request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			request.onreadystatechange=function() {
				if(request.readyState==4 && request.status==200) {
					var return_data=request.responseText;
					document.getElementById("msg").innerHTML=return_data;
				};
			};
			request.send(vars);
		};	
	};
    function forbid(){
        const reg = document.getElementById("msg");
        let text =reg.textContent;
        if(text != "" && text == "此帳號可使用"){
            check = true;
        }else{
            alert("請更改您的帳號");
            check =  false;
        }
        return check;
    }
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
            document.getElementById("check").innerHTML = " 確認密碼不一樣";
            check = false;
        } else {
            document.getElementById("check").innerHTML = " ";
            check = true;
        };
        return check;
    };
    function checkForm() {
        let check = censorpw() && rePw() && forbid();
        return check;
    };
</script>

<h1>會 員 註 冊</h1>
<div class="container">
    <div class="row">
        <form action="api/reg_user.php" method="POST" autocomplete="off" class="col col-lg-6 col-md-8 my-5 mb-3" onSubmit="return checkForm()">
            <div class="content">
                <div class="input-group mb-4 col-8">
                    <label class="input-group-text">帳　　號:</label>
                    <input id="acc" name="acc" type="text" class="form-control" required autofocus onblur="instCheck()">
                </div>
                <div class="input-group mb-4 col-8">
                    <label class="input-group-text">密　　碼 :</label>
                    <input id="pw" name="pw" type="password" class="form-control" placeholder="請輸入4字以上" required onChange="censorpw()">
                    <i id="seepw" class="input-group-text bi bi-eye-slash-fill" style="font-size:24px;"></i>
                </div>
                <div class="input-group mb-4 col-8">
                    <label class="input-group-text">確認密碼 :</label>
                    <input id="repw" type="password" class="form-control" required onchange="rePw()">
                    <i id="seerpw" class="input-group-text bi bi-eye-slash-fill" style="font-size:24px;"></i>
                </div>
                <div class="input-group mb-4 col-8">
                    <label class="input-group-text">名　　稱 :</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="input-group mb-4 col-8">
                    <label class="input-group-text">信　　箱 :</label>
                    <input type="email" class="form-control" name="email">
                </div>
            </div>
            <div class="text-center col-12 my-4">
                <input class="btn btn-warning shadow mx-1" type="reset" value="重置">
                <input class="btn btn-primary shadow mx-1" type="submit" value="註冊">
            </div>
        </form>
        <div class="text-center col-12">
            <span id="msg" style="color:#f00; font-size:20px;"></span>
            <span id="checkpw" style="color:#f00; font-size:20px;"></span>
            <span id="check" style="color:#f00; font-size:20px;"></span>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
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
</script>