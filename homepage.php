<?php
 
	session_start();
	if(!isset($_SESSION['name']))
	{
	echo"<script>location.href='login.html';</script>";
	}
	
	else{
	
	
	
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>小小书店</title>
<link href="homepage.css" type="text/css" rel="stylesheet" />
<!--JavaScript-->
<script type="text/javascript">
            n=1;
            function display()
            {  n++;
               if (n==8)
               n=1;
                document.getElementById("pic").innerHTML="<img  src='image/poster"+n+".jpg'  height='380'>";
                setTimeout("display()",5000)
                }
</script>
</head>

<body>
    <div id="container">
        <div id="head"><h1>小 小 书 店</h1><p style="margin-left:20px;text-align:right;font:楷体;font-size:25px;color:rgba(128,64,0,1);"><a href="manager.php">管理员</a></p></div>
        
        <div id="mun">
        <div id="menu">
            <ul>
                <li><a href="#" id="current">首页</a></li>
                <li><a href="#">客服</a></li>
                <li><a href="#">收藏</a></li>
                <li><a href="#">设置</a></li>
                
            </ul>
          </div>  
        </div>
        <!--<hr />-->
<br />
        <div id="conten">

        	<div id="leftside">
            	<div id="sider">
                <h2>图书分类</h2>
                
                	<div class="line">&nbsp;</div>
                    <div class="item"><a href="#小说">小说</a></div>
                    <div class="line">&nbsp;</div>
                    <div class="item"><a href="#文学">文学</a></div>
                    <div class="line">&nbsp;</div>
                    <div class="item"><a href="#教材">教材</a></div>
                    <div class="line">&nbsp;</div>
                    <div class="item"><a href="#考试资料">考试资料</a></div>
                </div>
            	
            </div>
        	<div id="middle">
               <div id="poster">
                <ul>
                    <li style="text-align:center;">
                    <div id="pic">
                    <img src="image/poster1.jpg" id="pic1" /> </div>
                    
                    </li>
                 </ul><br />
                    <script type="text/javascript">display();</script>
</div>
                <hr />
             <div id="update">
             	
               		<h3>最新上架</h3>
                    <br />
                     <div id="block1"> 
                                    
                    <ul>
                    	<li>
                        	<img src="image/活着.jpg" width="200" height="200" /><h4>活着</h4>
                        </li>
                        <li><img src="image/平凡的世界.jpg" width="120" height="200" />
                        	<h4>平凡的世界</h4>
                        </li>
                        <li><img src="image/六级考试1.jpg" width="200" height="200" />
                        	<h4>星火英语六级</h4>
                        </li>
                        <li><img src="image/傲慢与偏见.jpg" width="200" height="200" />
                        	<h4>傲慢与偏见</h4>
                        </li>
                       
                    </ul>
                    
					</div>
			
                	<br />
                  
              		<a name="小说">
                  	<h3>小说</h3>
                    <br />
                    
                    <div id="block2">
                    <ul>
                        <li><img src="image/活着.jpg" width="200" height="200" />
                        </li>
                    	<li><img src="image/傲慢与偏见.jpg" width="200" height="200" />
                        </li>
                        <li><img src="image/百年孤独.jpg" width="200" height="200" />
                        </li>
                        <li><img src="image/红与黑.jpg" width="180" height="180" />
                        </li>
                       </ul> 
                    </div>
                 <br />
               <a name="文学">
               	 <h3>文学</h3>
                 <br />
                 
                 <div id="block3">
                 <ul>
                   	 <li><img src="image/不欠你.jpg" width="210" height="220" />
                     </li>
                     <li><img src="image/长长的路.jpg" width="210" height="220" />
                     </li>
                     <li><img src="image/平凡的世界.jpg" width="150" height="220" />
                     </li>
                     <li><img src="image/阁楼里的女孩.jpg" width="210" height="220" />
                     </li>
                 </ul>
			     </div>
                 <br />
                 
                   <a name="教材">
                  <h3>教材</h3>
                  <br />
                 
                  <div id="block4">
                  	<ul>
                    	<li><img src="image/高等数学.jpg" width="200" height="200" />
                        </li>
                        <li><img src="image/概率论与数理统计.jpg" width="180" height="200" />  
                        </li>
                        <li><img src="image/数据库系统.jpg" width="200" height="200" /> 
                        </li>
                        <li><img src="image/线性代数.jpg" width="200" height="200" /> 
                        </li>       
                    </ul>
                  </div>
                  <br />
                  <a name="考试资料">
                  <h3>考试资料</h3>
                  <br />
                  
                  <div id="block5">
                  	<ul>
                    	<li><img src="image/初级会计.jpg" width="150" height="200" />
                        </li>
                        <li><img src="image/英语四级资料.jpg" width="170" height="180" />
                        </li>
                        <li><img src="image/考研英语词汇.jpg" width="150" height="180" />
                        </li>
                        <li><img src="image/申论.jpg" width="140" height="200" />
                        </li>
                        <li><img src="image/六级考试1.jpg" width="170" height="200" />
                        </li>
                    </ul>
                    
                  </div>
            	</div>
            </div>
            <div id="rightside">
            	
   	         <img src="image/用户.png" width="200" height="200" /> 
            <div id="sideby">
        	 <div class="line">&nbsp;</div>
             <div class="item">用户名&nbsp;&nbsp;<? echo $_SESSION['name'];?></div>
             <div class="line">&nbsp;</div>
             <div class="item"><a href="sh_car.php">购物车</a></div>
             <div class="line">&nbsp;</div>
             <div class="item"><a href="userorder.php">订单</a></div>
             <div class="line">&nbsp;</div>
             <div class="item"><a href="loginout.php">退出</a></div>
             <div class="line">&nbsp;</div>
             
             </div>
         	</div>
        </div>
        <br class="clearfloat" />
    </div>
</body>
</html>
<?php
	}
?>