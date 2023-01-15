<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.16.0/d3.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.7.18/c3.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.7.20/c3.min.css">
<?php
$sub = $subject->find(['id' => $_GET['id']]);
$opts = $options->all(["subject_id" => $_GET['id']]);
foreach ($opts as $opt) {
    $tmp[] = $opt['vote'];
}
$max = max($tmp);
$recoup = ($sub['vote'] / $max);



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


    .tool-chart {
        position: relative;
        width: 100%;
        left: 0px;
    }

    .bar {
        margin-top: 5px;
        margin-bottom: 5px;
        height: 20px;
        background: #eee;
        border-radius: 10px;


        overflow: hidden;
    }

    .tag {
        position: absolute;
        bottom: calc(100% + 7px);
        border-radius: 3px;
        background: var(--blue);
        padding: 5px;
        font-size: 15px;
        color: #fff;
        transform: translateX(-50%);
        left: 0%;
    }

    .tag::after {
        content: '';
        display: block;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 7px solid var(--blue);
        position: absolute;
        left: 50%;
        top: 100%;
        transform: translateX(-50%);
    }

    .bar span {
        display: inline-block;
        height: 150%;
        background: var(--lightBlue);
        width: 0%;
    }

    .li_sh {
        box-shadow: 1px 1px 5px var(--blue);
    }
</style>
<h3 class="text-primary text-center my-2"><?= $sub['subject']; ?></h3>
<div id="chart"></div>
<?php
$level = ($sub['level'] == 1) ? "人投票" : "次投票";
$type = ($sub['level'] == 1) ? "人" : "次";
?>
<div class="total">目前共 <?= $sub['vote'] ?> <?= $level ?></div>

<ul class="list-group col-10 mx-auto" style="width:60%;">
    <?php
    foreach ($opts as $opt) {
        $division = ($sub['vote'] == 0) ? 1 : $sub['vote']; //預防分母為0
        $width = round(($opt['vote'] / $division) * 100, 1);
    ?>
        <li class="d-flex list-group-item list-group-item-light list-group-item-action my-4 li_sh" style="height:40px;">

            <div class="col-4 voted-result" data-vote="<?= $opt['vote'] ?>"><?= $opt['opt']; ?></div>
            <div class="col-2"><?= $opt['vote']; ?> <?= $type ?></div>
            <div class="col-5 d-flex align-items-center">
                <div class="tool-chart col-5  rounded" data-progress="<?= $width; ?>" data-title="degree">
                    <div class="tag"></div>
                    <div class="bar">
                        <span></span>
                    </div>
                </div>
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
        color: #f00;
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script>
    $(".tool-chart").each(function() {
        var progress = $(this).attr("data-progress");
        $(this).children(".tag").text(progress + "%")
            .animate({
                left: progress * <?= $recoup; ?> + "%",
            }, 2500, "easeOutBounce");
        $(this).children(".bar").children("span").animate({
            width: progress * <?= $recoup; ?> + "%",
        }, 1000)
    })


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