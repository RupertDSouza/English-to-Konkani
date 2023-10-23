<?php
require 'db.inc.php';
if (isset($_SESSION['NAME']) == false) {
     header('location:login.php');
     die();
}
if (isset($_POST['eng']) && isset($_POST['kon']) && isset($_POST['comment1'])) {
    if(isset($_POST['submit'])){
    $eng=mysqli_real_escape_string($con2,$_POST['eng']);
    $kon=mysqli_real_escape_string($con2,$_POST['kon']);
    $comment1=mysqli_real_escape_string($con2,$_POST['comment1']);

    if (($eng==" " || $kon==" ")==true) {
        echo '<script type="text/javascript">
        function myFunc1() {
        msg="Kindly submit if u have entered words only";
        alert(msg);
        }
        myFunc1()
        </script>';
    }else{
        $res=mysqli_query($con2,
        "INSERT INTO `new_words`(`username`, `eng`, `kon`,`comment1`) VALUES ('{$_SESSION['NAME']}','$eng','$kon','$comment1')");
        header('location:discusskogo.php');
        die();
    } 
    }
}
?>
<html>

<head>
    <title>KOGO - Start translating today!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="KOGO Title Logo.png" type="image/x-icon">
    <link rel="stylesheet" href=" styles.css">
    <link rel="stylesheet" href="discussstyles.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <div>
            <img src="icon_removebg.png" alt="logo" class="logo" a onClick="location.href='index.php'">
            <nav>
                <ul>
                    <ul>
                    <li><a style="cursor: pointer;" onClick="location.href='index.php'">HOME</a></li>
                    <li><a style="cursor: pointer;" onClick="location.href='features.php'">FEATURES</a></li>
                    <li><a style="cursor: pointer;" onClick="location.href='aboutus.php'">ABOUT US</a></li>
                    <?php 
                    if($_SESSION['logged_in'] == 1){ ?>
                        <li style='color:#2B7FE0;'><?php echo $_SESSION['NAME']; ?></li>
                        <li><button class="login" onClick="location.href='logout.php'">LOGOUT</a></button></li>
                    <?php }else{ $_SESSION['NAME'] = "";?>
                        <li><button class="login" onClick="location.href='login.php'">LOGIN</button></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </header>
    <div class="box1">
    <form action="" method="POST">
<p class="title1">Add your new word here</p>
<textarea class="textbox1" name="eng" placeholder=" Enter your English Text here" required></textarea>
<textarea class="textbox2" name="kon" placeholder=" Enter your Konkani Text here" required></textarea>
<p class="title2">Add your comments (if any)</p>
<textarea class="textbox3"  name="comment1"></textarea>
<button class="buttonstyle1" type="submit" name="submit">Add Word</button>
</form>
    </div>
    <p class="title4">Recent Comments</p>
    <div class='box2'>
                <?php
        $sql="SELECT * FROM `new_words` ORDER BY `sno` DESC LIMIT 3";
        $result = $con2->query($sql) or die($con2->error);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        echo "<form method='post'>";
        echo "<button class='rc1' name='newcomment' value='".$row['sno']."' type='submit'>";
        echo "<div class='rccontent1'><p class='rcpara'>".$row['username']."</p></div>";
        echo "<div class='rcinside1'>Konkani - <span style='color:#ECECEC;'>".$row['kon']."</span><br>";
        echo "English - <span style='color:#ECECEC;'>".$row['eng']."</span></div>";
        echo "</button>";
        echo "</form>";
        }
            }
if(isset($_POST['newcomment'])) {
$_SESSION['sno']= $_POST['newcomment'];
// echo $_SESSION['sno'];}
header('location:displaycomments.php');
die();}
    ?>
    <form method="post">
    <div><button class="buttonstyle2" name="view">View All</button></div>
    </form>
        <?php
        if(isset($_POST['view'])){
            header('location:viewall.php');
            die();
        }?>
    </div>
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