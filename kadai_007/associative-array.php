<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>kadai007</title>
</head>
<body>
    <p>
        <?php
        $associative_array = ['name' => 'onion', 'price' => 200, 'weight' => 160];
        print_r($associative_array);
        echo '<br>';
        print_r(($associative_array['name']));
        echo '<br>';
        print_r($associative_array['price']);
        echo '<br>';
        print_r($associative_array['weight']);
        ?>
    </p>
</body>
</html>