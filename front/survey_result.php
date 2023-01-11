<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.16.0/d3.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.7.18/c3.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.7.20/c3.min.css">
<?php
$sub =$subject->find([ 'id'=>$_GET['id']]);
$opts =$options->all(["subject_id" => $_GET['id']]);




?>
<style>
    .total {
        text-align: center;
        font-size: 18px;
        margin-bottom: 10px;
        color: #f20;
        font-weight: bold;
    }

    #chart {
        width: 300px;
        height: 300px;
        margin: auto;
    }
</style>
<h3 class="text-primary text-center"><?= $sub['subject']; ?></h3>
<div id="chart"></div>
<?php
$level=($sub['level']==1)?"人投票":"次投票";
?>
<div class="total">目前共 <?= $sub['vote'] ?> <?=$level?></div>

<ul class="list-group col-10 mx-auto" style="width:60%;">
    <?php
    foreach ($opts as $opt) {
        $division = ($sub['vote'] == 0) ? 1 : $sub['vote']; //預防分母為0
        $width = round(($opt['vote'] / $division) * 100, 1);
    ?>
        <li class="d-flex list-group-item list-group-item-light list-group-item-action">
            <div class="col-4 voted-result" data-vote="<?= $opt['vote'] ?>"><?= $opt['opt']; ?></div>
            <div class="col-2"><?= $opt['vote']; ?> 人</div>
            <div class="col-5 d-flex align-items-center">
                <div class="col-5 bg-primary rounded" style="width:<?= $width; ?>%">&nbsp;</div>
                <div class="col-1">&nbsp;<?= $width; ?>%</div>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<div class="text-center mt-4">

    <a href="index.php?do=survey" class="btn btn-warning mx-1">返回</a>
</div>
<style>
/* c3.donut.totle.fontSize */
.c3-chart-arcs-title {
  font-weight: bold;
  font-size: 18px;
  color:#f00;
  }
</style>
<script>
    //拉JSON資料進來
    // axios.get("./api/survey_result_api.php?id=14")
    // .then(res=>{
    //     //成功的話會到這邊,response會存到res變數,將資料去function渲染畫面
    //     c3Chart(res.data);
    // })
    // .catch(error=>{
    //     //如果執行錯誤會到這
    //     console.log(error);
    // });

    //抓DOM
    const columns = document.querySelectorAll(".voted-result")
    // console.log(columns);
    let voteData = {};
    columns.forEach((item) => {
        voteData[item.textContent] = item.dataset.vote;
    })
    // console.log(voteData);
    //套圖表
    c3Chart(voteData);

    function c3Chart(data) {
        // 這裡開始把資料塞到套件
        let chart = c3.generate({
            //綁定要顯示圖表的DOM,binto後的值為css選取器
            bindto: '#chart',
            data: {

                json: data,
                type: 'donut'
            },
            donut: {
                title: "調查結果",
                width: '65',
                padAngle: '.01'
            },
            gauge: {
                units: '<?= $opt['vote']; ?>'
            }
        })
    }
</script>