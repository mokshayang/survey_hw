<header class="shadow">

    <nav class=" nav nav-pills py-2 justify-content-between" style="background-color:var(--lightBlue);">
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
                <ul class="nav nav-pills " role="tablist">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" data-bs-toggle="tab" type="button">會員管理</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" data-bs-toggle="tab" type="button">意見管理</a>
                    </li>

                </ul>
                <ul class="nav nav-pills mr-2 " role="tablist">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" data-bs-toggle="tab" type="button">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" data-bs-toggle="tab" type="button">Profile</a>
                    </li>

                    <li class="nav-item mx-2">
                        <a href="index.php?do=reg" class="nav-link" type="button">會員註冊</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="index.php?do=login" class="nav-link" type="button">會員登入</a>
                    </li>
                </ul>

            <?php break;
            case "admin_center": ?>


                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item mx-3">
                        <a class="nav-link active" data-bs-toggle="tab" type="button">logo</a>
                    </li>
                </ul>
                <ul class="nav nav-pills " role="tablist">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" data-bs-toggle="tab" type="button">會員管理</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" data-bs-toggle="tab" type="button">意見管理</a>
                    </li>

                </ul>
                <ul class="nav nav-pills mr-2 " role="tablist">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" data-bs-toggle="tab" type="button">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" data-bs-toggle="tab" type="button">Profile</a>
                    </li>

                    <li class="nav-item mx-2">
                        <a href="index.php?do=reg" class="nav-link" type="button">會員註冊</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="index.php?do=login" class="nav-link" type="button">會員登入</a>
                    </li>
                </ul>




        <?php break;
        }  ?>
    </nav>

</header>