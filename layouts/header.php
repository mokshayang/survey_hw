<style>
    .i {
        font-size: 28px;
        margin-top: 20px;
        vertical-align: baseline;
        color: var(--blue);
        position: relative;
        top: -18px;
        font-size: 32px;


    }

    .tc {
        color: var(--blue);
        font-size: 20px;
        position: relative;
        top: -18px;
    }

    .music {
        color: var(--blue);
        font-size: 40px;
        position: relative;
        top: 0px;
        text-shadow: 1px 1px 3px var(--lightBlue);
        padding-left: 20px;
    }
    .main{
        display: block;
        position: relative;
        top: -4px;
        font-size: 24px;
        text-shadow: 1px 1px 3px var(--lightBlue);
        color: var(--blue);
        font-style: italic;
        font-weight: bold;
    }
</style>
<header class="shadow" style="margin-bottom:56px;">

    <nav class="navbar fixed-top justify-content-between" style="background-color:var(--lightBlue);height: 56px; ">
        <?php
        $file_str = explode("/", $_SERVER['PHP_SELF']);
        $local = str_replace('.php', '', array_pop($file_str));
        switch ($local) {
            case "index":
        ?>

                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item ">
                        <a class=" nav-link tc " href="index.php"><i class="bi bi-file-earmark-music music"></i></a>
                    </li>
                    <li class="nav-item "  style="padding-right:20px;">
                            <a href="#" class="nav-link main" type="button">藍色音符網</a>
                    </li>
                    <!-- 下方為220專用 -->
                    <!-- <li class="nav-item mx-3">
                        <a class=" nav-link tc " style="top:0px;" href="../">回作品集首頁</a>
                    </li> -->
                </ul>

                <ul class="nav nav-pills" role="tablist">
                   
                    <li class="nav-item "  style="padding-right:20px;">
                            <a href="" class="nav-link main" type="button" style="top: -16px; font-size:28px;">Polling station</a>
                    </li>
               
                </ul>

                <ul class="nav nav-pills mr-2 " role="tablist">

                    <?php

                    if (isset($_SESSION['admin']) || (isset($_SESSION['admin']) && isset($_SESSION['login']))) {
                    ?>
                        <li class="nav-item mx-2">
                            <i class="bi bi-person-lines-fill i"></i>
                        </li>
                        <li class="nav-item mx-2"  style="padding-right:20px;">
                            <a href="admin_center.php" class="nav-link tc" type="button">back manage</a>
                        </li>


                    <?php } else if (isset($_SESSION['login'])) {  ?>
                        <li class="nav-item ">
                            <i class="bi bi-person-vcard-fill i" style="color:blue;"></i>
                        </li>
                        <li class="nav-item mx-2" style="padding-right:28px;">
                            <a href="?do=user_edit&id=<?= $_SESSION['login']['id'] ?>" class="nav-link tc" type="button">Member Center</a>
                        </li>
                        <li class="nav-item mx-2">
                            <i class="bi bi-door-open-fill i" style="color:blue;"></i>
                        </li>
                        <li class="nav-item mx-2"  style="padding-right:20px;">
                            <a href="./logout.php" class="nav-link tc" type="button">Sign Out</a>
                        </li>

                    <?php  } else { ?>
                        <li class="nav-item ">
                            <i class="bi bi-person-plus py-4 i"></i>
                        </li>
                        <li class="nav-item mx-2" style="padding-right:28px;">
                            <a href="?do=reg" class="nav-link tc" type="button">Sign Up</a>
                        </li>
                        <li class="nav-item mx-2">
                            <i class="bi bi-person-workspace i"></i>
                        </li>
                        <li class="nav-item mx-2" style="padding-right:20px;">
                            <a href="?do=login" class="nav-link tc" type="button">Login</a>
                        </li>
                    <?php }
                    ?>

                </ul>

            <?php break;
            case "admin_center": ?>


                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item mx-3">
                        <a class=" nav-link tc " href="index.php"><i class="bi bi-file-earmark-music music"></i></a>
                    </li>
                    <li class="nav-item "  style="padding-right:20px;">
                            <a href="index.php" class="nav-link main" type="button">藍色音符網</a>
                    </li>
                </ul>
                <ul class="nav nav-pills " role="tablist">
                    <li class="nav-item mx-2">
                        <a href="?do=survey" class="nav-link tc" type="button">選項主題管理</a>
                    </li>

                    <li class="nav-item mx-2">
                        <a href="?do=users&p=1" class="nav-link tc" type="button">會員管理</a>
                    </li>
                </ul>
                <ul class="nav nav-pills mr-2 " role="tablist">

                    <li class="nav-item mx-2">
                        <a href="?do=admin" class="nav-link tc" type="button">管理者列表</a>
                    </li>

                    <li class="nav-item mx-2" style="padding-right:20px;">
                        <a href="./logout.php" class="nav-link tc" type="button">登出</a>
                    </li>
                </ul>




        <?php break;
        }  ?>
    </nav>

</header>