<h1>會 員 管 理 系 統</h1>
<nav>
    <div class="admin"><?= $_SESSION['admin'] ?> 您好 !!</div>
</nav>
<div class="usersList">
    <div class="item">
        <div>帳號</div>
        <div>密碼</div>
        <div>名稱</div>
        <div>email</div>
        <div>操作</div>
    </div>
    <div class="users ">
        <?php
        $tt = $user->count();
        $num = 8;
        $pages = ceil($tt / $num);
        $now = $_GET['p'] ?? 1;
        $start = ($now - 1) * $num;
        $clients = $user->all(" limit $start ,$num");
        // dd($clients);
        foreach ($clients as $client) {
        ?>
            <div class="userData">
                <div><?= $client['acc'] ?></div>
                <div><?= $client['pw'] ?></div>
                <div><?= $client['name'] ?></div>
                <div><?= $client['email'] ?></div>
                <div class="operate">
                    <a href="?do=used_edit&id=<?= $client['id'] ?>" class="btn btn-outline-primary">編輯</a>
                    <a href="./api/user_del.php?id=<?= $client['id'] ?>" class="btn btn-danger" onclick="
                                return confirm('確定刪除會員帳號 : <?= $client['acc'] ?>  ?')">刪除</a>
                </div>
            </div>
        <?php } ?>
    </div>

    <div class="pages">
        <?php
        if ($now == 1) {
            echo "<div class='now'>";
            echo "首頁";
            echo "</div>";
        } else {
            echo "<a href=?do=users&p=1 class='fi'>首頁</a>";
        }
        ?>
        <!-- 中間區 -->
        <div>
            <?php
            if (($now - 1) > 0) {
                echo "<a href=?do=users&p=" . ($now - 1) . " class='fe'> < </a>";
            }

            //中間部分
            if ($pages >= 5) {//display 5 page ， pages 取 (startPage + 4) 
                if ($now >= 3 && $now <= ($pages - 2)) {//$now center
                    $startPage = $now - 2;
                } else if (($now - 2) < 3) {//$now start $now < 3
                    $startPage = 1;
                } else {//$now  > 5
                    $startPage = $pages - 4;
                }
                for ($i = $startPage; $i <= ($startPage + 4); $i++) {
                    $nowPage = ($i == $now) ? "now" : "";
                    echo "<a href='?do=users&p=$i' class='$nowPage'> $i </a>";
                }
            } else {//pages <5 取 $pages
                $startPage = 1;
                for ($i = $startPage; $i <= $pages ; $i++) {
                    $nowPage = ($i == $now) ? "now" : "";
                    echo "<a href='?do=users&p=$i' class='$nowPage'> $i </a>";
                }
            }



            if (($now + 1) <= $pages) {
                echo "<a href=?do=users&p=" . ($now + 1) . " class='fe'> > </a>";
            }


            ?>

        </div>
        <?php
        if ($now == $pages) {
            echo "<div class='now'>";
            echo "末頁";
            echo "</div>";
        } else {
            echo "<a href=?do=users&p=$pages class='fi'>末頁</a>";
        }
        ?>

    </div>






</div>








</div>