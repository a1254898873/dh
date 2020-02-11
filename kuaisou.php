<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>快速搜索</title>

    </head>
    <body style=" background-color:white;">
        <header>

        </header>
        <main>
            <div id="left" style="border:1px solid #F00;float:right;width: 19%;height: 100%;line-height:30px;" >
                <ul style="list-style-type:none;">
                <?php 
                $filename="sousuo.txt";
		$result=file($filename);
		$islast=true;
                $a=0;
                echo "<li>";
		foreach($result as $row){
                
                 $a=$a+1;
				$item=explode("|",$row);
				echo "<a href=\"$item[0]\" target=\"web\" >$item[1]</a>";
		if($a%3==0){
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
           
            <div id="right" style="float: left;width: 80%;height:1000px">
                <iframe src="https://www.baidu.com/" name="web" width=100% height=100%></iframe>
            </div>
           
        </main>
        <footer></footer>
      

    </body>
</html>