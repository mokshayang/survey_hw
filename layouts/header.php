<style>
    .i {
        font-size: 28px;
        margin-top: 20px;
        vertical-align: middle;
        color: var(--darkBlue);
    }
    .tc{
        color:#eee;
        font-size: 16px;
    }
</style>
<header class="shadow" style="margin-bottom:56px;">

    <nav class="navbar fixed-top justify-content-between" style="background-color:var(--lightBlue); ">
        <?php
        $file_str = explode("/", $_SERVER['PHP_SELF']);
        $local = str_replace('.php', '', array_pop($file_str));
        switch ($local) {
            case "index":
        ?>
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item mx-3">
                        <a class="nav-link active" data-bs-toggle="tab" type="button">logo</a>
                    </li>
                </ul>

                <ul class="nav nav-pills mr-2 " role="tablist">

                    <?php
                    if (isset($_SESSION['login'])) {

                    ?>
                        <li class="nav-item mx-2">
                            <i class="bi bi-person-vcard-fill i" style="color:blue;"></i>
                        </li>
                        <li class="nav-item mx-2">
                            <a href="index.php?do=user&id=<?= $_SESSION['login']['id'] ?>" class="nav-link tc" type="button">會員中心</a>
                        </li>
                        <li class="nav-item mx-2">
                            <i class="bi bi-door-open-fill i" style="color:blue;"></i>
                        </li>
                        <li class="nav-item mx-2">
                            <a href="./logout.php" class="nav-link tc" type="button">會員登出</a>
                        </li>

                    <?php  } else { ?>
                        <li class="nav-item mx-2">
                            <i class="bi bi-person-plus py-4 i"></i>
                        </li>
                        <li class="nav-item mx-2">
                            <a href="index.php?do=reg" class="nav-link tc" type="button">會員註冊</a>
                        </li>
                        <li class="nav-item mx-2">
                            <i class="bi bi-person-workspace i"></i>
                        </li>
                        <li class="nav-item mx-2">
                            <a href="index.php?do=login" class="nav-link tc" type="button">會員登入</a>
                        </li>
                    <?php } ?>
                </ul>

            <?php break;
            case "admin_center": ?>


                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item mx-3">
                        <a class="nav-link active" data-bs-toggle="tab" type="button">logo</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active" data-bs-toggle="tab" type="button">網站名稱</a>
                    </li>
                </ul>
                <ul class="nav nav-pills " role="tablist">
                    <li class="nav-item mx-2">
                        <a href="?do=sruvey.php" class="nav-link" data-bs-toggle="tab" type="button">選項主題管理</a>
                    </li>

                    <li class="nav-item mx-2">
                        <a href="index.php?do=login" class="nav-link" type="button">會員管理</a>
                    </li>
                </ul>
                <ul class="nav nav-pills mr-2 " role="tablist">

                    <li class="nav-item mx-2">
                        <a class="nav-link" data-bs-toggle="tab" type="button">管理者列表</a>
                    </li>

                    <li class="nav-item mx-2">
                        <a href="index.php?do=reg" class="nav-link" type="button">登出</a>
                    </li>
                </ul>




        <?php break;
        }  ?>
    </nav>

</header>