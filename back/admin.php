<h1>會 員 管 理 系 統</h1>
<style>
    .admin_sh {
        width: 90%;
        margin: 20px auto 0px;
        color: var(--blue);
        font-size: 18px;
    }
    .admin_er{
        width: 72%;
        margin: auto;
        display: grid;
        grid-template-columns: 1fr 5fr 1fr;
    }
    .admin_er a  {
        display: block;
        width: 120px;
        height: 40px;
        align-self: center;
    }
</style>
<div class="admin_er">
    <div></div>
    <div class="admin"><?= $_SESSION['admin'] ?> 您好 !!</div>
    <a href="?do=admin_add" class="btn btn-outline-primary ">新增管理者</a>
</div>
<div class="container">
    <div class="admin_sh"">
        <table id="adminTable" class="display">
        <thead>
            <tr>
                <th>管理者帳號</th>
                <th>管理者密碼</th>
                <th>管 理</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $rows = $admin->all(" order by id ");
            // dd($rows);
            foreach ($rows as $key => $row) {

            ?>
                <tr>
                    <td><?= $row['acc'] ?></td>
                    <td><?= $row['pw'] ?></td>
                    <?php
                    if ($row['acc'] == "admin") {
                    ?>
                        <td style="text-align:center;">
                            <button type="button" class="btn btn-outline-primary">最高權限</button>
                        </td>
                    <?php  } elseif ($row['acc'] == $_SESSION['admin']) {  ?>
                        <td style="text-align:center;">
                            <a href="?do=admin_edit&id=<?= $row['id'] ?>" class="btn btn-primary">編輯</a>
                        </td>
                    <?php } else { ?>
                        <td style="text-align:center;">
                            <a href="?do=admin_edit&id=<?= $row['id'] ?>" class="btn btn-primary">編輯</a>
                            <a href="./api/admin_del.php?id=<?= $row['id'] ?>" class="btn btn-warning" onclick="
                                return confirm('確定刪除會員帳號 : <?= $row['acc'] ?>  ?')">刪除</a>
                        </td>
                    <?php } ?>
                </tr>
            <?php   } ?>

        </tbody>
        </table>

    </div>

</div>

<script>
    $(function() {
        $('#adminTable').DataTable()

    })
</script>