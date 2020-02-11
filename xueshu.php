<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>学术搜索</title>
    </head>
    <body style=" background-color:white;">
        <header></header>
        <main>
            
            <div id="left" style="border:1px solid #F00;float: right;width: 14%;height: 100%;line-height:30px;" >
                <ul style="list-style-type:none;">
                <?php 
                $filename="xueshu.txt";
$result=file($filename);
		$islast=true;
                $a=0;
                echo "<li>";
		foreach($result as $row){
                
                 $a=$a+1;
				$item=explode("|",$row);
				echo "<a href=\"$item[0]\" target=\"web\" >$item[1]</a>";
		if($a%2==0){
                     echo "</li><li>";
                     
                 }else if($a==$result){
                 echo "</li>";
                }else{
                    echo "|";
                }
                }
		?>
                </ul>
            </div>
            <div id="right" style="float: left;width: 85%;height: 1000px;">
                <iframe src="http://bbs.chongbuluo.com/bingscholar.html" name="web" width=100% height=100%></iframe>
            </div>
        </main>
        <footer></footer>
    </body>
</html>