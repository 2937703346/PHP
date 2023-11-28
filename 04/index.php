<?php
//定义数组数据
$data = array(
    array('id'=>1,'title'=>'西班牙留学面签常见问答11 ') ,
    array('id'=>2,'title'=>'法国综合性大学怎么样'),
    array('id'=>3,'title'=>'香港研究生留学申请时间表'),
    array('id'=>4,'title'=>'英国留学找工作：职位获得途径有哪些？'),
    array('id'=>5,'title'=>'加拿大国际教育委员会（CBIE）发布最新加拿大国际教育数据报告'),
    array('id'=>6,'title'=>'日本留学名校申请需要满足哪些条件'),
    array('id'=>7,'title'=>'韩国留学签证类型及其周期时间'),
    array('id'=>8,'title'=>'西班牙留学不同阶段的费用'),
    array('id'=>9,'title'=>'法国留学住宿、饮食、交通、保险费用明细'),
    array('id'=>10,'title'=>'香港优才计划详解 				') ,
    array('id'=>11,'title'=>'去德国留学语言障碍大吗？'),
    array('id'=>12,'title'=>'美术类高中生如何选择意大利美院'),
    array('id'=>13,'title'=>'2016英国旅游签证新政策'),
    array('id'=>14,'title'=>'性价比皇冠大学－西门菲莎大学2016/2017年度风采依旧 '),
    array('id'=>15,'title'=>'转学到美国什么时间最合适？'),
    array('id'=>16,'title'=>'申请季，加拿大留学专业解析之【工程学科篇】 ') ,
    array('id'=>17,'title'=>'日本高中留学的八大优势 ') ,
    array('id'=>18,'title'=>'韩国留学申请如何做好准备工作 ') ,
    array('id'=>19,'title'=>'法国留学拒签原因全面分析 ') ,
    array('id'=>20,'title'=>'澳洲留学生打工攻略') ,
    array('id'=>21,'title'=>'2016美国留学生打工攻略')
);

$totalItems = count($data);//获取总数
$itemsPerPage = 5;//每页显示条数
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;//获取当前页码
$urlPattern  = 'index.php?page=(:num)';//拼接url
include("Paginator.php");//引入分页类
$paginator = new Paginator($totalItems, $itemsPerPage, $currentPage, $urlPattern); //实例化分页类
$getData = array_splice($data,($currentPage-1)*$itemsPerPage,$itemsPerPage); //使用array_splice函数查找元素位置
?>

<html>
<head>
    <!-- 引入bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container bg-info">
    <h3>
        留学新闻列表
    </h3>
    <ul>
        <!--foreach遍历数组-->
        <?php foreach($getData as $vo){ ?>
            <li>
                <?php  echo $vo['title'] ?>
            </li>
        <?php } ?>
    </ul>
    <?php
    //输出分页
    echo $paginator;
    ?>
</div>
</body>
</html>