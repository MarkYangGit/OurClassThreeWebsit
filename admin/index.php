
<!DOCTYPE >
<html>
    <head>
     	<title>钟灵中学九三班</title>
    </head>

    <body>
	<div name="headr">
		<center>
	    <h1>我们的三班</h1>
	    <h2>美好的三班</h2>
		</center>
	    <hr>
	</div>
	<div name="nav">
	    <ul>
		<li><a>首页</a></li>
		<li><a>班史</a></li>
		<li><a>动态</a></li>
		<li><a>留言</a></li>
		<li><a>关于</a></li>
	    </ul>
	</div>
	
	<div name="main_body">
	    <div name="center">
		    
		

  	    </div>	   
	     <div name="Log">
		<center>
		<h2>留言板</h2>
		
		<table width=800px border=2px height=200px margin-top=20px>
		    <tr>
			<th width="100px">留言者</th>
			<th>留言内容</th>
			<th>留言时间</th>
		    </tr>
		<?php
		    //1.读取mg.lg文件中的留言内容
		    $info = rtrim(file_get_contents("style/mg.lg"),"@");
		    //2.以@@符拆分每一条留言内容
		    $list = explode("@@",$info);
		    //3.判断并遍历输出
		    if(!empty($list) && count($list) > 0){
			foreach($list as $k => $v){
			    //4.使用##符拆分每条留言字段并输出
			    $ly = explode("##",$v);
			    echo "<tr>";
			    echo "<td>{$ly[0]}</td>";
			    echo "<td>{$ly[1]}</td>";
			    echo "<td>{$ly[2]}</td>";
			    echo "</tr>";
			}
		    }
	
		?>
	    	</table>
		<a href="addLog.php" >我要留言</a>
		</center>	
    	    </div>
	</div>
	
	<div name="font">
	
	</div>    

    </body>
</html>
