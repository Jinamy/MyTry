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
<title>�ޱ����ĵ�</title>
<link href="back.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<div id="panel">
		<div id="head"><h1> ����Ա����</h1></div>
        <div id="menu">
        	<ul>
            	<li><a href="homepage.php">��ҳ</a></li>
            	<li><a href="user.php">�ͻ���Ϣ</a></li>
                <li><a href="#current">ͼ�����</a></li>
                <li><a href="orders.php">��������</a></li>
                <li><a href="shopping_car.php">���ﳵ</a>  </li>
            </ul>
        </div>
    
    <hr />
    
    
     <h2>ͼ�����</h2>
     <div style="margin-left:50px; text-align:left;">
     	<form action="" method="POST">
             <label><a href="addbook.html">���ͼ��</a></label>&nbsp;  
             <select name="searchitem">
                <option value="book_name">����������</option>
                <option value="book_id">����ż���</option>
                <option value="sort">��������</option>
                <option value="author">�����߼���</option>
             </select>  &nbsp; <label>�ؼ��֣�</label> 
             <input  type="text" name="searchvalue" placeholder="������ؼ���" /> &nbsp;<input name="submit" type="submit" value="��ѯ" style="background:rgba(255,108,38,1);"/>
             
    	</form>
        </div>
        <br />
      <table width="1000" border="0">
          <tr>
            <th width="103"  scope="col">ͼ����</th>
            <th width="99"  scope="col">����</th>
            <th width="83"  scope="col">����</th>
            <th width="106"  scope="col">������</th>
            <th width="126"  scope="col">��������</th>
            <th width="86"  scope="col">����</th>
            <th width="124"  scope="col">�������</th>
            <th width="125"  scope="col">�������</th>
            <th width="106"  colspan='2'>����</th>
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
			
            	$result_b = mysql_query($query_b) or die ("<br> ���ʧ��");
				$num=mysql_num_rows($result_b);
				if($num!=0)
				{
				while ($re = mysql_fetch_array($result_b))           //��mysql_fetch_array()�Ѳ�ѯ������浽����$re�У�ÿ��ȡһ����¼
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
					
					echo "\n<td> ", "<a href='update.php?id=",$re['book_id'],"'>�޸�</a>|<a href='delete.php?id=",$re['book_id'],"'>ɾ��</a>", "</td>";
					echo "\n</tr>";
				}
				
				}
				else
				{
					echo "���ݿ������޼�¼!";
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