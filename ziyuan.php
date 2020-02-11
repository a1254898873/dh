<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>资源搜索</title>
    </head>
    <body style=" background-color:white;">
        <header></header>
        <main>
            <div id="left" style="border:1px solid #F00;float:right;width: 10%;height: 100%;line-height:30px;" >
                <ul style="list-style-type:none;">
                <?php 
                $filename="ziyuan.txt";
		$result=file($filename);
		$islast=true;
		foreach($result as $row){


				$item=explode("|",$row);
				echo "<li><a href=\"$item[0]\" target=\"web\" >$item[1]</a></li>";
				
                }
		
		?>
                </ul>
            </div>
            <div id="right" style="float: left;width: 89%;height: 1000px;">
                <iframe src="http://bbs.chongbuluo.com/pan.html" name="web" width=100% height=100%></iframe>
            </div>
        </main>
        <footer></footer>
    </body>
</html>