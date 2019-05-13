<?php
 
	session_start();
	if(!isset($_SESSION['name']))
	{
	echo"<script>location.href='manager.php';</script>";
	}
	
	else{
	
	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link href="back.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<div id="panel">
		<div id="head"><h1> 管理员界面</h1></div>
        <div id="menu">
        	<ul>
            	<li><a href="homepage.php">首页</a></li>
            	<li><a href="user.php">客户信息</a></li>
                <li><a href="#current">图书管理</a></li>
                <li><a href="orders.php">订单详情</a></li>
                <li><a href="shopping_car.php">购物车</a>  </li>
            </ul>
        </div>
    
    <hr />
    
    
     <h2>图书管理</h2>
     <div style="margin-left:50px; text-align:left;">
     	<form action="" method="POST">
             <label><a href="addbook.html">添加图书</a></label>&nbsp;  
             <select name="searchitem">
                <option value="book_name">按书名检索</option>
                <option value="book_id">按编号检索</option>
                <option value="sort">按类别检索</option>
                <option value="author">按作者检索</option>
             </select>  &nbsp; <label>关键字：</label> 
             <input  type="text" name="searchvalue" placeholder="请输入关键字" /> &nbsp;<input name="submit" type="submit" value="查询" style="background:rgba(255,108,38,1);"/>
             
    	</form>
        </div>
        <br />
      <table width="1000" border="0">
          <tr>
            <th width="103"  scope="col">图书编号</th>
            <th width="99"  scope="col">书名</th>
            <th width="83"  scope="col">作者</th>
            <th width="106"  scope="col">出版社</th>
            <th width="126"  scope="col">出版日期</th>
            <th width="86"  scope="col">单价</th>
            <th width="124"  scope="col">所属类别</th>
            <th width="125"  scope="col">库存数量</th>
            <th width="106"  colspan='2'>操作</th>
          </tr>
			<?php
				require_once"config.inc.php"; 
           		$searchitem=$_POST['searchitem'];				
				$searchvalue=$_POST['searchvalue'];
				if($searchvalue!="")
				{
					if($searchitem=='book_name')
						$query_b="select * from book where book_name='$searchvalue' ";
					else if($searchitem=='book_id')
						$query_b="select * from book where book_id='$searchvalue' ";
					else if($searchitem=='sort')
						$query_b="select * from book where sort='$searchvalue ' ";
					else
						$query_b="select * from book where author='$searchvalue ' ";
				}
				else
				{
					$query_b="select * from book ";
				}
			
            	$result_b = mysql_query($query_b) or die ("<br> 查表失败");
				$num=mysql_num_rows($result_b);
				if($num!=0)
				{
				while ($re = mysql_fetch_array($result_b))           //用mysql_fetch_array()把查询结果保存到数组$re中，每次取一条纪录
				{
					echo "\n<tr>";
					echo "\n<td> ", $re['book_id'], "</td>";
					echo "\n<td> ", $re['book_name'], "</td>";
					echo "\n<td> ", $re['author'], "</td>";
					echo "\n<td> ", $re['publisher'], "</td>";
					echo "\n<td> ", $re['publish_date'], "</td>";
					echo "\n<td> ", $re['price'], "</td>";
					echo "\n<td> ", $re['sort'], "</td>";
					echo "\n<td> ", $re['s_amount'], "</td>";
					
					echo "\n<td> ", "<a href='update.php?id=",$re['book_id'],"'>修改</a>|<a href='delete.php?id=",$re['book_id'],"'>删除</a>", "</td>";
					echo "\n</tr>";
				}
				
				}
				else
				{
					echo "数据库中暂无记录!";
				}
			mysql_close($hd);	
			
		?>
        </table>
     <br />
   </div>
</body>
</html>
<?php
	}
	?>