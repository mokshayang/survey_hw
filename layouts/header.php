<style>
    .i {
        color: var(--blue);
        position: relative;
        padding-right: 0.5rem;
        font-size: 2rem;
        vertical-align: middle;
    }

    .tc {
        color: royalblue;
        font-size: 1.2rem;
       
    }

    .main {
        display: block;
        position: relative;
        margin: auto;
        font-size: 2.3rem;
        text-shadow: 1px 1px 3px var(--lightBlue);
        color: white;
        font-style: italic;
        font-weight: bold;
    }

    .second {
        z-index: 10;
        position: sticky;
        top: 0;
        background-color: white;
        box-shadow: 0 2px 10px #333;
    }
    i,a{
        display: inline-block;
    }
</style>
<header>
    <nav class="navbar justify-content-center" style="background-color:royalblue;height: 6rem; ">
        <ul class="nav nav-pills" role="tablist">
            <li class="nav-item ">
                <a href="./index.php" class="nav-link main" type="button">Polling station</a>
            </li>
        </ul>
    </nav>
</header>

<div class="  second" style="min-height: 3rem; ">
    <?php
    $file_str = explode("/", $_SERVER['PHP_SELF']);
    $local = str_replace('.php', '', array_pop($file_str));
    switch ($local) {
        case "index":
    ?>
            <ul class="nav nav-pills nav-item  justify-content-center  " role="tablist">
                <!-- 上傳公用伺服器專用 -->

                <!-- <li class="nav-item tc"  style=" padding-right:0.6rem;">
                    <a href="../" class=" nav-link tc" type="button" ><i class="bi bi-house-up-fill i"></i>作品首頁</a>
                </li> -->

                <?php

                if (isset($_SESSION['admin']) || (isset($_SESSION['admin']) && isset($_SESSION['login']))) {
                ?>
                    <li class="nav-item  tc">
                        <a href="admin_center.php" class=" nav-link tc" type="button">
                        <i class="bi bi-person-lines-fill i"></i>back manage</a>
                    </li>


                <?php } else if (isset($_SESSION['login'])) {  ?>
                   
                    <li class=" nav-item tc" style=" padding-right:0.6rem;">
                            <a href="?do=user_edit&id=<?= $_SESSION['login']['id'] ?>" class="nav-link tc" type="button"> <i class="bi bi-person-vcard-fill i" "></i>Member Center</a>
                    </li>
                    <li class=" nav-item tc" style=" padding-right:0.6rem;">
                    <a href="./logout.php" class="nav-link tc" type="button"> <i class="bi bi-door-open-fill i" ></i>Sign Out</a>
                    </li>

                <?php  } else { ?>
                    <li class="nav-item tc"  style=" padding-right:0.6rem;">
                        <a href="?do=reg" class="nav-link tc " type="button"><i class="bi bi-person-plus i"></i>Sign Up</a>
                    </li>
                  
                    <li class="nav-item  tc"  style=" padding-right:0.6rem;">
                        <a href="?do=login" class="nav-link tc"type="button"><i class="bi bi-person-workspace i"></i>Login</a>
                    </li>
                    
                <?php }
                ?>

            </ul>

        <?php break;
        case "admin_center": ?>


            <!-- <ul class="nav nav-pills" role="tablist">
                <li class="nav-item mx-1">
                    <a class=" nav-link tc " href="index.php"><i class="bi bi-file-earmark-music music"></i></a>
                </li>
                <li class="nav-item " style="padding-right:20px;">
                    <a href="index.php" class="nav-link " type="button" style="top:100px;">藍色音符網</a>
                </li>
            </ul> -->
            <ul class="nav nav-pills nav-item justify-content-center " role="tablist">

                <li class="nav-item">
                    <a href="?do=survey" class="nav-link tc btn btn-lineout-ss" type="button">選項主題管理</a>
                </li>

                <li class="nav-item">
                    <a href="?do=users&p=1" class="nav-link tc btn btn-lineout-ss" type="button">會員管理</a>
                </li>


                <li class="nav-item">
                    <a href="?do=admin" class="nav-link tc btn btn-lineout-ss" type="button">管理者列表</a>
                </li>

                <li class="nav-item" >
                    <a href="./logout.php" class="nav-link tc btn btn-lineout-ss" type="button">登出</a>
                </li>
            </ul>

    <?php break;
    }  ?>
</div>