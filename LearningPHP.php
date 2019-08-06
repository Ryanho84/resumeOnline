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
    
    <div id="div1">
        PHP数组
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
        $car = array("Volve", "BMW", "Toyota");
        echo "the length of array is :" .count($car);
        echo "<br>";

        $arraylength = count($car);
        for($x = 0; $x < $arraylength; $x++)
        {
            echo $car[$x];
            echo "<br>";
        }

        $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43"); 

        foreach($age as $x=>$x_value) 
        { 
            //每一次循环，都会讲当前元素的值赋予x_value， 而健值赋予$x.为啥？因为关联数组中，前面的就是健值，后面的是值
            echo "Key=" . $x . ", Value=" . $x_value; 
            echo "<br>"; 
        } 

        foreach($age as $x)
        {
            //对于关联数组，仍然是输出数组值。因为每一次循环，都是将当前数组值赋予$x，无论这个变量取名什么。
            echo "看看我是谁？ ：".$x;
            echo "<br>";
        }
        
        sort($car);
        print_r($car);
        echo "<br>";

        $numbers = array(32,65,87,9,100,37,54);
        print_r($numbers);
        echo "<br>";
        
        sort($numbers);
        print_r($numbers);
        echo "<br>";

        rsort($numbers);
        print_r($numbers);
        echo "<br>";
        
        $a = array('a',3=>'b', 1=>'c','d');
        echo $a[4];
    ?>
    <div id="div1">
        PHP表单
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
    欢迎
    <?php
        #PHP中的$_GET和$_POST变量用于检索表单中的信息，比如用户的输入
        echo $_POST["fname"];
        //echo '<br>';
    ?>
    <br>
    你的年龄是
    <?php
        echo $_POST["fage"];
        echo '<br>';
    ?>

    <?php
        $q = isset($_POST['q'])? htmlspecialchars($_POST['q']):'';
        if($q){
            if($q =='RUNOOB'){
                echo '菜鸟教程<br>http://www.runoob.com';
                echo '<br>';
            }
            else if($q =='GOOGLE'){
                echo 'Google 搜索: http://www.google.com';
                echo '<br>';
            }
            else if($q =='TAOBAO'){
                echo '淘宝<br> http://www.taobao.com';
                echo '<br>';
            }
        }
    ?>

    <?php
        $p = isset($_POST['p'])? $_POST['p'] : '';
        if(is_array($p)){
            $sites = array(
                'RUNOOB' => 'http://www.runoob.com',
                'GOOGLE' => 'http://www.google.com',
                'TAOBAO' => 'http://www.taobao.com',
            );
            foreach($p as $val){
                //PHP_EOL为常量，用于换行
                echo $sites[$val];
                echo '<br>';
            }
        }
    ?>

    <?php
        //$s = isset($_POST['s'])? htmlspecialchars($_POST['s']):'';
        $s = isset($_POST['s'])? $_POST['s']:'';
        echo '<br>';
        //echo $_POST['s'];
        echo '<br>';
        if($s){
            if($s == 'RUNOOB'){
                echo 'http://www.runoob.com';
            }
            else if($s =='GOOGLE'){
                echo 'http://www.google.com';
            }
            else if($s == 'TAOBAO'){
                echo 'http://www.taobao.com';
            }
        }
        else{
            echo '未作任何选择，请三选一';
            echo '<br>';
        }
    ?>
    <?php
        $r = isset($_POST['r'])? $_POST['r']:'';
        if(is_array($r)){
            $sites = array(
                'RUNOOB' => 'http://www.runoob.com',
                'GOOGLE' => 'http://www.google.com',
                'TAOBAO' => 'http://www.taobao.com',
            );
            foreach($r as $val)
            {
                echo $sites[$val];
                echo '<br>';
            }
        }
    ?>
</body>
</html>


