<?php

//过滤输入,把空格留白、标签之类的东西全部去掉，只留纯文本
$title = trim(strip_tags($_REQUEST['title']));
$content = trim(strip_tags($_REQUEST['content']));

if(strlen($title) < 1 || strlen($content) < 1) die('标题和内容都不能为空');

//将内存中的数据序列化为字符串
$data = compact("title", "content");
//$data_string = serialize($data);     v1.0单份简历

//读取data.php中的数据
//因为所有的简历数据都是存放在data.php文件中，需要不停的append内容到data.php中，因此需要先取出data.php中的内容并非序列化
$data_array = unserialize( file_get_contents('./data.php'));
//然后追加内容
$data_array[] = $data;
//然后再序列化
$data_string = serialize( $data_array );


//保存到文件里面
if(file_put_contents('./data.php', $data_string))
    die('简历已保存，请到<a href="list.php">浏览页面</a>查看');
else
    die('简历保存失败');