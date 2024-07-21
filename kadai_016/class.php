<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>クラス</title>
</head>
<body>
    <p>
        <?php
        class Food {
            public $name;
            public $price;
            public function show_price($price){
                echo $this->$price;
            }
        }
        class Animal {
            public $name;
            public $height;
            public $weight;
            public function show_height($height){
                echo $this->$height;
            } 

        }
        $apple = new Food();
        $cat = new Animal();
        $apple->name = 'apple';
        $apple->price = 150;
        print_r($apple);

        echo '<br>';

        $cat->name = 'cat';
        $cat->height = 60;
        $cat->weight = 7;
        print_r($cat);

        echo '<br>';

        $apple->show_price(); //エラー
        $cat->show_height(); //エラー


        ?>
    </p>
</body>
</html>