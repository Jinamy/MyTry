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
<title>СС���</title>
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
        <div id="head"><h1>С С �� ��</h1><p style="margin-left:20px;text-align:right;font:����;font-size:25px;color:rgba(128,64,0,1);"><a href="manager.php">����Ա</a></p></div>
        
        <div id="mun">
        <div id="menu">
            <ul>
                <li><a href="#" id="current">��ҳ</a></li>
                <li><a href="#">�ͷ�</a></li>
                <li><a href="#">�ղ�</a></li>
                <li><a href="#">����</a></li>
                
            </ul>
          </div>  
        </div>
        <!--<hr />-->
<br />
        <div id="conten">

        	<div id="leftside">
            	<div id="sider">
                <h2>ͼ�����</h2>
                
                	<div class="line">&nbsp;</div>
                    <div class="item"><a href="#С˵">С˵</a></div>
                    <div class="line">&nbsp;</div>
                    <div class="item"><a href="#��ѧ">��ѧ</a></div>
                    <div class="line">&nbsp;</div>
                    <div class="item"><a href="#�̲�">�̲�</a></div>
                    <div class="line">&nbsp;</div>
                    <div class="item"><a href="#��������">��������</a></div>
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
             	
               		<h3>�����ϼ�</h3>
                    <br />
                     <div id="block1"> 
                                    
                    <ul>
                    	<li>
                        	<img src="image/����.jpg" width="200" height="200" /><h4>����</h4>
                        </li>
                        <li><img src="image/ƽ��������.jpg" width="120" height="200" />
                        	<h4>ƽ��������</h4>
                        </li>
                        <li><img src="image/��������1.jpg" width="200" height="200" />
                        	<h4>�ǻ�Ӣ������</h4>
                        </li>
                        <li><img src="image/������ƫ��.jpg" width="200" height="200" />
                        	<h4>������ƫ��</h4>
                        </li>
                       
                    </ul>
                    
					</div>
			
                	<br />
                  
              		<a name="С˵">
                  	<h3>С˵</h3>
                    <br />
                    
                    <div id="block2">
                    <ul>
                        <li><img src="image/����.jpg" width="200" height="200" />
                        </li>
                    	<li><img src="image/������ƫ��.jpg" width="200" height="200" />
                        </li>
                        <li><img src="image/����¶�.jpg" width="200" height="200" />
                        </li>
                        <li><img src="image/�����.jpg" width="180" height="180" />
                        </li>
                       </ul> 
                    </div>
                 <br />
               <a name="��ѧ">
               	 <h3>��ѧ</h3>
                 <br />
                 
                 <div id="block3">
                 <ul>
                   	 <li><img src="image/��Ƿ��.jpg" width="210" height="220" />
                     </li>
                     <li><img src="image/������·.jpg" width="210" height="220" />
                     </li>
                     <li><img src="image/ƽ��������.jpg" width="150" height="220" />
                     </li>
                     <li><img src="image/��¥���Ů��.jpg" width="210" height="220" />
                     </li>
                 </ul>
			     </div>
                 <br />
                 
                   <a name="�̲�">
                  <h3>�̲�</h3>
                  <br />
                 
                  <div id="block4">
                  	<ul>
                    	<li><img src="image/�ߵ���ѧ.jpg" width="200" height="200" />
                        </li>
                        <li><img src="image/������������ͳ��.jpg" width="180" height="200" />  
                        </li>
                        <li><img src="image/���ݿ�ϵͳ.jpg" width="200" height="200" /> 
                        </li>
                        <li><img src="image/���Դ���.jpg" width="200" height="200" /> 
                        </li>       
                    </ul>
                  </div>
                  <br />
                  <a name="��������">
                  <h3>��������</h3>
                  <br />
                  
                  <div id="block5">
                  	<ul>
                    	<li><img src="image/�������.jpg" width="150" height="200" />
                        </li>
                        <li><img src="image/Ӣ���ļ�����.jpg" width="170" height="180" />
                        </li>
                        <li><img src="image/����Ӣ��ʻ�.jpg" width="150" height="180" />
                        </li>
                        <li><img src="image/����.jpg" width="140" height="200" />
                        </li>
                        <li><img src="image/��������1.jpg" width="170" height="200" />
                        </li>
                    </ul>
                    
                  </div>
            	</div>
            </div>
            <div id="rightside">
            	
   	         <img src="image/�û�.png" width="200" height="200" /> 
            <div id="sideby">
        	 <div class="line">&nbsp;</div>
             <div class="item">�û���&nbsp;&nbsp;<? echo $_SESSION['name'];?></div>
             <div class="line">&nbsp;</div>
             <div class="item"><a href="sh_car.php">���ﳵ</a></div>
             <div class="line">&nbsp;</div>
             <div class="item"><a href="userorder.php">����</a></div>
             <div class="line">&nbsp;</div>
             <div class="item"><a href="loginout.php">�˳�</a></div>
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