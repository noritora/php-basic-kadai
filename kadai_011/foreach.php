<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf8">
    <title>kadai011</title>
</head>
<body>
    <div style="border: 1px;">
        <p>
            <?php
            $vesi = [
                'name' => '玉ねぎ',
                'price' => 200,
                'place' => '北海道'
            ];
            foreach ($vesi as $key => $value) {
                echo "{$key}：{$value}<br>";
            }
            ?>
        </p>
    </div>
</body>
</html>