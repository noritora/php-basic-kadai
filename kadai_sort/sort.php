<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
        $nums = [15, 4, 18, 23, 10];
        // print_r($nums);

        function sort_2way($array, $order) {
            if ($order) {
                echo '昇順にソートします。<br>';
                sort($array);
            } else {
                echo '降順にソートします。<br>';
                rsort($array);
            }
            // echo $array;
            // print_r($array);
            foreach ($array as $value) {
                echo $value;
                echo '<br>';
            } 
        }

        sort_2way($nums, TRUE);
        sort_2way($nums, FALSE);

        ?>
    </p>
</body>

</html>
