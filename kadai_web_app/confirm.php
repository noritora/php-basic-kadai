<?php
$employee_name = $_POST['employee_name'];
$employee_age = $_POST['employee_age'];
$department = $_POST['department'];
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>確認</title>
</head>
<body>
    <h2>入力内容をご確認ください。</h2>
    <!-- <br> -->
    <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>
    <table border="1">
        <tr>
            <th>項目</th>
            <th>入力内容</th>
        </tr>
        <tr>
            <td>社員名</td>
            <td> <?php echo $employee_name;  ?> </td>
        </tr>
            <td>年齢</td>
            <td> <?php echo $employee_age; ?> </td>
        </tr>
            <td>所属部署</td>
            <td> <?php echo $department; ?> </td>
        </tr>
    </table>
    <br>
    <button onclick="location.href='complete.php';">確定</button>
    <button onclick="history.back();">キャンセル</button>

</body>
</html>