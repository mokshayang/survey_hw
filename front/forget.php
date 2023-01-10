<style>
    #result,#count {
        text-align: center;
        color:var(--blue) ;
        font-size: 24px;
        font-weight: bold;
        /* text-shadow: 1px 1px 1px var(--blue); */
    }
    #count {
        text-align: center;
        color:red ;
        font-size: 24px;
        font-weight: bold;
        /* text-shadow: 1px 1px 1px var(--blue); */
    }
</style>
<h1>忘 記 密 碼</h1>
<div class="container">
    <div class="row" style="width:60%; margin: 80px auto; ">

        <div class="content">

            <div class="input-group mb-3 col-8">
                <label class="input-group-text">請輸入您的Email信箱 :</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>

        </div>
        <div class="text-center col-12 my-4">

            <button class="btn btn-warning shadow mx-1" onclick="forget()">查詢</button>

        </div>

    </div>
    <div id="result"></div>
    <br>
    <div id="count"></div>
    <script>
        let count = 10;

        function countDown() {
            document.getElementById("count").innerHTML = count+"..秒後，轉入登入畫面 !!";
            count -= 1;
            if (count == -1) {
                location.href = "?do=login";
            }
            setTimeout("countDown()", 1000);
        }

        function forget() {
            $.post("./api/forget.php", {
                email: $('#email').val()
            }, (res) => {
                $('#result').html(res);
                if(res != "查無此資料" ){
                    countDown();
                }
            })
        }
    </script>