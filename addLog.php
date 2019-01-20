<!DOCTYPE html>
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
	    <div name="Log">
		<center>
		    <h2>留言板</h2>
			<br>
			<a href="index.php">回到首页</a>
			<hr>
			
				<form action="actionLog.php?a=insert" method="post">					
				    <table width="340" border="0">
					<tr>
					    <td>留言者：</td>
					    <td><input typr="text" name="author"/></td>
					</tr>
					<tr>
					    <td>留言内容：</td>
			       		    <td><textarea rows="6" cols="30" name="content"></textarea></td>
					</tr>
					<tr>
					    <td>&nbsp;</td>		
					    <td>
						<input type="submit" value="留言"/>
						<input type="reset" value="重置" />
				            </td>
					</tr>
		                    </table>
				</form>
		</center>	
    	    </div>
	</div>
	
	<div name="font">
	
	</div>    

    </body>
</html>
