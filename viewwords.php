<?php
require('db.inc.php');
?>
<html>
    <head>
        <title>KOGO Admin</title>
        <link rel="icon" href="KOGO Title Logo.png" type="image/x-icon">        
         <link rel="stylesheet" href="admin.css?v=<?php echo time();?>">        
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>

<section id="main-content">
    <form id="margin0" method="POST">
    <div class="container">
          <label class="panel-header" for="page-title">
            Letter
            <span class="hint">Enter the letter of the word you wish to add.</span>
          </label>
          <div class="panel-body">
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
            </div>
      <button class="buttonstyle1" type="submit" name="add">Add Word</button>
    </div>
    </form>
    </section>
        <p class="title4">View All</p>
    <div class="span-12"><?php
        if (isset($_POST['table']) && isset($_POST['add'])) {
          $table=mysqli_real_escape_string($con1,$_POST['table']);
          $_SESSION['table']=$table;
        $sql="SELECT * FROM `$table` ";
        $result = $con1->query($sql) or die($con1->error);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        echo "<form method='post'>";
        echo "<div class='rccontent1'><p class='rcpara'>".$row['Sno']."   ".$row['Eng']."   ".$row['Kon']."  ".$row['gramtyp']."</p></div>";
        echo "<button name='update' value='".$row['Sno']."' type='submit'>Update</button>";
        echo "</form>";
            }
          } 
        } 
  if(isset($_POST['update'])) {
$_SESSION['Sno']= $_POST['update'];
header('location:update.php');
die();
}?>
</div>
</body>
</html>