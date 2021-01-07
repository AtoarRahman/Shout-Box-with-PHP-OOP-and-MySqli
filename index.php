<?php
    include_once "classes/Shout.php";
    $shout = new Shout();
?>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $shoutdata = $shout->insertData($_POST);
    }
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Shout Box with PHP OOP & MySqli</title>
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>
	<div class="wrapper clr">
		<header class="headsection clr">
			<h3>Shout Box with PHP OOP & MySqli</h3>
		</header>
		<section class="content clr">
			<div class="box">
				<ul>

                    <?php
                        $getData = $shout->getAllData();
                        if($getData){
                            while ($data = $getData->fetch_assoc()){
                    ?>
					<li><span><?php echo $data['time'];?></span> - <b><?php echo $data['name'];?></b> <?php echo $data['body'];?></li>
                    <?php } } ?>

				</ul>
			</div>
			<div class="shoutform clr">
                <form action="" method="post">
					<table>
						<tr>
							<td>Name</td>
							<td>:</td>
							<td><input type="text" name="name" placeholder="Please Enter Your Name" required /></td>
						</tr>
						<tr>
							<td>Body</td>
							<td>:</td>
							<td><input type="text" name="body" placeholder="Please Enter Your Text" required /></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><input type="submit" value="Shout It" /></td>
						</tr>
					</table>
				</form>
			</div>
		</section>
		<footer class="footersection clr">
			<h4>&copy M. Atoar Rahman</h4>
		</footer>
	</div>
</body>
</html>