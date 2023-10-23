<?php
require('../db.inc.php');
if (isset($_SESSION['NAME']) == false) {
     header('location:../Log/in');
     die();
}
?>
<html>

<head>
    <title>KOGO - Start translating today!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../images/KOGO Title Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/discussstyles-new.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div>
            <img src="../../images/icon_removebg.png" alt="logo" class="logo" a onClick="location.href='../../'">
            <nav>
                    <ul style="background:#181A20;">
                    <li><a style="cursor: pointer;" onClick="location.href='../../'">HOME</a></li>
                    <li><a style="cursor: pointer;" onClick="location.href='./features.php'">FEATURES</a></li>
                    <li><a style="cursor: pointer;" onClick="location.href='./aboutus.php'">ABOUT US</a></li>
                    <?php 
                    if($_SESSION['logged_in'] == 1){ ?>
                        <li style='color:#2B7FE0;'><?php echo $_SESSION['NAME']; ?></li>
                        <li><button class="login" onClick="location.href='../Log/out'">LOGOUT</a></button></li>
                    <?php }else{?>
                        <li><button class="login" onClick="location.href='../Log/in'">LOGIN</button></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </header>

    <div class="box1">
    	<?php
        $sql="SELECT * FROM `new_words` WHERE `sno`='".$_SESSION['sno']."' ";
        $result = $con2->query($sql) or die($con2->error);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            	echo "<br>";
            	echo "<div class='center'><table>";
            	echo "<tr><td style='color:#2363DC;' id='user'>".$row['username']."</td></tr>";
                echo "<tr><td id='engkon'>".$row['eng']." - ".$row['kon']."</td></tr>";
                echo "<tr><td id='comment'>".$row['comment1']."</td></tr>";
                echo "</table></div>";
            	}
            }
        $sql="SELECT * FROM `comments` WHERE `sno`='".$_SESSION['sno']."' ";
        $result = $con2->query($sql) or die($con2->error);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            	echo "<br>";
            	echo "<table class='size'>";
            	echo "<tr><td style='color:#2363DC;'>".$row['user']."</td></tr>";
                echo "<tr><td>".$row['comment2']."</td></tr>";
                echo "</table>";
            }
        }?>
            
	</div>
    <form method="post">
            	<p class="title2">Add your comments (if any)</p>
				<textarea class="textbox3"  name="comment2" required></textarea>
				<button class="buttonstyle1" type="submit" name="submit">Comment</button>
            </form>

            <?php 
            if (isset($_POST['comment2'])) {
         	$comment=mysqli_real_escape_string($con2,$_POST['comment2']);
			$res=mysqli_query($con2,"INSERT INTO `comments`(`sno`, `user`, `comment2`) VALUES ('".$_SESSION['sno']."','".$_SESSION['NAME']."','$comment')");
				header('location:./displaycomments.php');
				die();
        	}
            ?>

<section class="footer">
    <div style="text-align: center;" class="lastpara">
        <p style="color:#ECECEC">
            <span style="color:#2363DC; font-weight: 650;">KOGO</span> is optimized for learning, testing and
            training. Examples might
            be<br>simplified to improve reading
            and
            basic understanding. References and<br>examples are constantly reviewed to avoid errors, but we
            cannot
            warrant full<br>correctness of all content. While using this site, you agree to have read
            and<br>accepted our
            terms of use, cookie and privacy policy.
        </p>
        <p style="color:#2363DC; margin:0"><br>© Copyright 2021-2022 by AAC<br>
            All Rights Reserved.
        </p>
    </div>
</section>
<section class="footer">
        <div style="text-align: center;" class="lastpara">
            <p style="color:#ECECEC">
                <span style="color:#2363DC; font-weight: 650;">KOGO</span> is optimized for learning, testing and
                training. Examples might
                be<br>simplified to improve reading
                and
                basic understanding. References and<br>examples are constantly reviewed to avoid errors, but we
                cannot
                warrant full<br>correctness of all content. While using this site, you agree to have read
                and<br>accepted our
                terms of use, cookie and privacy policy.
            </p>
            <p style="color:#2363DC; margin:0"><br>© Copyright 2021-2022 by AAC<br>
                All Rights Reserved.
            </p>
        </div>
    </section>
</body>
</html>