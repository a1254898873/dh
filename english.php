<?php
//大标题采用分号分隔，分别是标题指引关键字，标题内容，标题快速定位英文名
//url采用|分隔，分别是url，标题
$filename="english.txt";
?>

<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8" />
<title>英语学习导航</title>
<link rel="stylesheet" href="css/reset-grids-comm.css" />
<link rel="stylesheet" href="css/2eb07974.css" />
<base target="_blank"/>
<script>
window.onscroll = function () {
	//alert(document.documentElement.scrollTop);
  //alert(document.body.scrollTop);
  if (document.documentElement.scrollTop + document.body.scrollTop > 200) {
      document.getElementById("scrollto").style.display = "block";
  }
  else {
      document.getElementById("scrollto").style.display = "none";
  }
}	
</script>
</head>
<body class="p-index">
<div id="scrollto" style="display:none;position:fixed;top:380px;margin-left:155px; width:35px;height:35px;line-height:35px;text-align:center;border:dashed 1px #000;">
	<a style="width:35px;height:35px;" href="#top" target="_self">top</a>
</div>
<div id="bd" class="container25">
	<!--导航模块 -->
	<a name="top">&nbsp;</a>
        <div id="nav" style="height: 200px;">
            <img src="./pic/header4.jpg"/>
        </div>
        <div id="nav" class="span25 gmodule" style="height: 45px;">
		
		<div class="nav-bd">
			快速定位：
			<?php
			//$filename="SEO.txt";
			$result=file($filename);
			//print_r($result);
			foreach($result as $row){
				if(strpos($row,"标题字段")!==false){
					//echo "exist";
					$rowhead=@explode(",",$row);
					//echo "<h1>$rowhead[1]</h1>";
					//echo "<a href=".." target="."_self"."></a>";
					$mmm=trim($rowhead[2]);
					echo "<a href=\"#$mmm\" target=\"_self\">$rowhead[1]</a>"." | ";
				}
				
			}
			?>
			
		</div>
	</div>
		
	<!-- Custom Content Begin -->
    <!--网址模块 -->
	<div id="sites" class="span25 gmodule">
		<?php
		$result=file($filename);
		$isecho=true;
		$islast=true;
		foreach($result as $row){
			if(strpos($row,"标题字段")!==false){
				//echo "exist";
				$row=trim($row);
				$rowhead=explode(",",$row);
				//echo "<h1>$rowhead[1]</h1>";
				//echo "<a href=".." target="."_self"."></a>";
				//echo "<a href=\"#$rowhead[2]\" target=\"_self\">$rowhead[1]</a>"." | ";
				
				if($islast){
						//echo "<div id=\"sites\" class=\"span25 gmodule\">";
						echo "<div class=\"site-nav\">";
						$islast=false;
				}else{
						echo "</ul>";
						echo "</div>";
						$isecho=true;	
				}
				echo "<div class=\"site-nav\">";
				echo "<h2 class=\"site-header\"><a name=\"$rowhead[2]\">$rowhead[1]</a></h2>";
			
			}else{
				if($isecho){
						echo "<ul>";
						$isecho=false;
				}
				$item=explode("|",$row);
				echo "<li><a href=\"$item[0]\" >$item[1]</a></li>";
				
			}
		}
		?>
		
	</div>
		
	</div>
	<!-- Custom Content End -->	
</div>
<div id="ft">
	<!-- 实用工具模块 -->
	<div id="footer" class="gmodule g-box">
		<div class="footer-hd g-box-hd">
			<h2 class="title">实用工具</h2>
		</div>
		<div class="footer-bd g-box-bd">
	
			
		</div>
	</div>		
	<!-- 版权免责模块 -->
	    <!--工具链接-->
        <!-- 版权免责模块 -->
	<div id="copyright" class="gmodule g-box">
		<div class="copyright-bd">
                    仅为个人方便而生！by 逆风 &nbsp;&nbsp;
                    <a href="http://www.nifengi.com/">点击访问逆风の博客</a>
		</div>
	</div>	
	
</div>
 
</body>

</html>