<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="div1">
        PHP数据类型
    </div>
    <style>
    #div1{
        padding:10px;
        border: 1px dashed #000000;
        width: 900px;
        margin-top:10px;
        margin-bottom: 10px;
        font-size:20px;
        }
    </style>
    <?php

    //这是一行注释

    echo "程序员有三种美德：懒惰、急躁和傲慢";    //句号后面还可以有注释
    echo "<br>";

    # PHP 的注释在解释器中会被去掉，因此多行注释不会影响性能

    /*

        这是多行注释，多行注释不能嵌套

    */

    ?>

    <?php
    //字符串型数据
    $x= "hello world";
    var_dump($x);
    echo $x;
    echo "<br>";
    $x = "hello world";
    echo $x;
    echo "<br>";

    ?>

    <?php
    //浮点型数据
    $x = 2.4e3;
    var_dump($x);
    echo "<br>";
    $x = 8E-5;
    var_dump($x);
    echo "<br>";
    //整型数据
    $x = 788;
    var_dump($x);
    echo "<br>";
    //浮点型数据
    $x = true;
    var_dump($x);
    echo "<br>";

    $y = false;
    var_dump($y);
    echo "<br>";

    //空数据
    $x = NULL;
    var_dump($x);
    echo "<br>";
    

    //数组数据
    $car = array("volvo", "BMW","Toyota");
    var_dump($car);
    echo "<br>";
    ?>


    <?php
    //类数据
    class car{
        var $color;
        function __construct($color = "green"){
            $this->color = $color;
        }

        function what_color(){
            echo $this->color;
            echo "<br>";
            return $this->color;
        }
    }

    function print_vars($obj){
        foreach (get_object_vars($obj) as $prop => $val) {
            echo "\t$prop = $val\n";
        }
    }

    //实例化一个对象
    $herbie = new Car("white");

    //显示herbie的属性
    echo "\t herbie: Properties\n";
    print_vars($herbie);
    echo "<br>";
    echo "\t callback function show car color =\n";
    $herbie->what_color();
    ?>

    <div id="div1">
        PHP逻辑与运算
    </div>
    <style>
    #div1{
        padding:10px;
        border: 1px dashed #000000;
        width: 900px;
        margin-top:10px;
        margin-bottom: 10px;
        font-size:20px;
        }
    </style>
    <?php
        echo "没啥讲的，挺简单";
    ?>
    
</body>
</html>


