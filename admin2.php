<?php
require('db.inc.php');
if (!isset($_SESSION['NAME']) == true) {
    header('location:login.php');
}
    if(isset($_POST['table']) && isset($_POST['add_eng']) && isset($_POST['add_kon']) && isset($_POST['gram_type'])){
    $table=mysqli_real_escape_string($con1,$_POST['table']);
    $add_eng=mysqli_real_escape_string($con1,$_POST['add_kon']);
    $add_kon=mysqli_real_escape_string($con1,$_POST['add_eng']);
    $gram_type=mysqli_real_escape_string($con1,$_POST['gram_type']);
    if($add_eng="" && $add_kon="" && $gram_type=""){
            echo '<script type="text/javascript">
                function myFunc1() {
                msg="Please do not leave the field blank !!";
                alert(msg);
                }
                myFunc1()
                </script>'; }else{
$res=mysqli_query($con1,"INSERT INTO `$table`(`Eng`, `Kon`, `gramtyp`)VALUES ('".strtolower($add_eng)."','".strtolower($add_kon)."','".strtolower($gram_type)."')");
          header('location:admin_3.php');
          die();}
        }
?>
<html>
    <head>
        <title>KOGO Admin</title>
        <link rel="icon" href="KOGO Title Logo.png" type="image/x-icon">        
         <link rel="stylesheet" href="admin.css?v=<?php echo time(); ?>">        
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
              <img src="kogoadminlogo.png" class="logo">
                <span class="ion-person"></span>
              </a>
            </li>
            <li>
                <button class="logout" onClick="location.href='logout.php'">LOGOUT</button>
            </li>
          </ul>
        </nav>
    </header>
  </div>


  <nav class="application-nav">
    <div class="container">
      <ul>
        <li class=""><a href="viewall.php"><span class="ion-document-text"></span><span class="text">Suggested Words</span></a>
        </li>
        <li class=""><a href="admin_3.php"><span class="ion-android-share-alt"></span><span class="text">View Words</span></a></li>
        <li class=""><a href="admin2.php"><span class="ion-person-stalker"></span><span class="text">Add Words</span></a></li>
        <li class=""><a href="testaudioadmin.php"><span class="ion-gear-b"></span><span class="text">Test Audio</span></a></li>
      </ul>
    </div>
  </nav>

  <section id="main-content">
    <form id="margin0" method="POST">
    <div class="container">
      <div class="span-12">
        <nav class="breadcrumb-nav">
          <a href="#">Admin</a> &raquo;
          Add words
        </nav>
      </div>
      <div class="span-6">
        <div class="panel">
          <label class="panel-header" for="page-title">
            Letter
            <span class="hint">Enter the letter of the word you wish to add.</span>
          </label>
          <div class="panel-body">
                <select name="table" class="formdesign" id="table" required>
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
        </div>
      </div>
      <div class="span-12">
        <div class="panel">
          <label class="panel-header" for="page-main-content">
            English Word
            <span class="hint">Add the new English Word.</span>
          </label>
          <div class="panel-body">
            <textarea id="add_eng" name="add_eng" required></textarea>
          </div>
        </div>
      </div>

      <div class="span-12">
        <div class="panel">
          <label class="panel-header" for="page-mission-statement">
            Konkani Word
            <span class="hint">Add the new Konkani Word.</span>
          </label>
          <div class="panel-body">
            <textarea id="add_kon" name="add_kon" required></textarea>
          </div>
        </div>
      </div>

      <div class="span-12">
        <div class="panel">
          <label class="panel-header" for="page-mission-statement">
            Grammer
            <span class="hint">Add the part of speech of the word.</span>
          </label>
          <div class="panel-body">
            <textarea id="gram_type" name="gram_type" required></textarea>
          </div>
        </div>
      </div>

      <button class="buttonstyle1" type="submit">Add Word</button>
    </div>
    </form>
  </section>
</body>
</html>