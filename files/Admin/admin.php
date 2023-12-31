<?php
require('../db.inc.php');
if (isset($_SESSION['NAME']) == false) {
     header('location:../Log/in');
     die();
}
?>
<html>

<head>
  <title>KOGO Admin</title>
  <link rel="icon" href="../../images/KOGO Title Logo.png" type="image/x-icon">
  <link rel="stylesheet" href="../../css/admin.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container">
    <header>
      <hgroup class="logo span-6">

      </hgroup>
      <nav class="session-nav span-6">
        <ul>
          <li class="show-menu">
            <a href="">
              <span class="ion-navicon-round"></span>
            </a>
          </li>
          <li>
            <img src="../../images/kogoadminlogo.png" class="logo">
            <span class="ion-person"></span>
            </a>
          </li>
          <li>
            <button class="logout" onClick="location.href='../Log/out'">LOGOUT</button>
          </li>
        </ul>
      </nav>
    </header>
  </div>


  <nav class="application-nav">
    <div class="container">
      <ul>
        <li class=""><a href="../User/viewall.php"><span class="ion-document-text"></span><span class="text">Suggested Words</span></a>
        </li>
        <li class=""><a href="./admin.php"><span class="ion-android-share-alt"></span><span class="text">View Words</span></a></li>
        <li class=""><a href="./"><span class="ion-person-stalker"></span><span class="text">Add Words</span></a></li>
        <li class=""><a href="./testaudioadmin.php"><span class="ion-gear-b"></span><span class="text">Test Audio</span></a></li>
      </ul>
    </div>
  </nav>


  <section id="main-content">
    <div class="container">
      <div class="span-12">
        <nav class="breadcrumb-nav">
          <a href="#">Admin</a> &raquo;
          View Words
        </nav>
      </div>

      <div class="span-6">
        <div class="panel">
          <label class="panel-header" for="page-title">
            Letter
            <span class="hint">Enter the letter of the word you wish to add.</span>
          </label>
          <div class="panel-body">
            <form id="margin0" method="POST">
              <select name="table" class="formdesign" id="table">
                  <option disabled selected>_Select_</option>
                  <option value="table_a">A</option>
                  <option value="table_b">B</option>
                  <option value="table_c">C</option>
                  <option value="table_d">D</option>
                  <option value="table_e">E</option>
                  <option value="table_f">F</option>
                  <option value="table_g">G</option>
                  <option value="table_h">H</option>
                  <option value="table_i">I</option>
                  <option value="table_j">J</option>
                  <option value="table_k">K</option>
                  <option value="table_l">L</option>
                  <option value="table_n">M</option>
                  <option value="table_n">N</option>
                  <option value="table_o">O</option>
                  <option value="table_p">P</option>
                  <option value="table_q">Q</option>
                  <option value="table_r">R</option>
                  <option value="table_s">S</option>
                  <option value="table_t">T</option>
                  <option value="table_u">U</option>
                  <option value="table_v">V</option>
                  <option value="table_w">W</option>
                  <option value="table_x">X</option>
                  <option value="table_y">Y</option>
                  <option value="table_z">Z</option>
                  <option value="all_words">...</option>
              </select>
              <br><br>
              <button class="selectb" type="submit" name="add">Select</button>
            </form>
          </div>
        </div>
      </div>

      <div class="containbg">
      <?php
        if (isset($_POST['table']) && isset($_POST['add'])) {
          $table=mysqli_real_escape_string($con1,$_POST['table']);
          $_SESSION['table']=$table;
        $sql="SELECT * FROM `$table` ";
        $result = $con1->query($sql) or die($con1->error);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        echo "<div class='vwbox'>";
        echo "<form method='post'>"; 
        echo "<span style='font-weight:600;'>   ".$row['Sno']."   </span>".$row['Eng']."   ".$row['Kon']."  ".$row['gramtyp']."<button class='updateb' value='".$row['Sno']."' type='submit' name='update'>Update</button>";
        echo "</form>";
        echo "</div>";
            }
          } 
        } 
  if(isset($_POST['update'])) {
$_SESSION['Sno']= $_POST['update'];
header('location:./update.php');
die();
}?>
</div>
      <div class="line"></div>

    </div>
</body>

</html>