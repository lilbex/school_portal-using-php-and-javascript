<?php   


$st_id=$student_name_display['st_id'];


$conn = mysqli_connect('localhost','root','','2019_2020_session'); 

$sql = "SELECT * FROM 2019_2020_term1_kg3 WHERE  st_id='$st_id'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck === 1){
    while ($rows = mysqli_fetch_assoc($result)) {

        ?>
        <p>Welcome to Result Area</p>
      <table>
          <tr>
            <td> <href="#" data-toggle="modal" data-target="#mykg3" class="btn btn-secondary px-4 py-3">View</a></td>
              
              <td> <href="#" data-toggle="modal" data-target="#mykg3" class="btn btn-secondary px-4 py-3">Print</a></td>
          </tr>
          <button class="btn btn-secondary px-4 py-3" onclick="printJS('printJS-form', 'html')"> PDF </button>
      </table>
      
  
       

     

        <?php
    } 
}
if ($resultCheck === 0) {
     $sqlP = "SELECT * FROM 2019_2020_term1_basic1 WHERE st_id= '$st_id'";
    $resultP = mysqli_query($conn, $sqlP);
    $resultCheckP = mysqli_num_rows($resultP);
   
    if ($resultCheckP > 0) {
        while ($rows = mysqli_fetch_assoc($resultP)) {
            ?>
            <p>Welcome to Result Area</p>
           <table>
          <tr>
              <td> <href="#" data-toggle="modal" data-target="#mybasic1" class="btn btn-secondary px-4 py-3">view</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mybasic1" class="btn btn-secondary px-4 py-3">PDF</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mybasic1" class="btn btn-secondary px-4 py-3">Print</a></td>
          </tr>
      </table>
     
           

            <?php
        }
    }
    if ($resultCheckP===0) {
        $sqlJ = "SELECT * FROM 2019_2020_term1_basic4 WHERE st_id= '$st_id'";
        $resultJ = mysqli_query($conn, $sqlJ);
        $resultCheckJ = mysqli_num_rows($resultJ);
        if ($resultCheckJ ===1) {
            while ($rows = mysqli_fetch_assoc($resultJ)) {
                ?>
                <p>Welcome to Result Area</p>
                  <table>
          <tr>
             <td> <href="#" data-toggle="modal" data-target="#mybasic4" class="btn btn-secondary px-4 py-3">View</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mybasic4" class="btn btn-secondary px-4 py-3">PDF</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mybasic4" class="btn btn-secondary px-4 py-3">Print</a></td>
          </tr>
      </table>
     

                <?php
            }
        }
        if ($resultCheckJ === 0) {
           $sqlN = "SELECT * FROM 2019_2020_term1_kg1 WHERE st_id= '$st_id'";
           $resultN = mysqli_query($conn, $sqlN);
           $resultCheckN = mysqli_num_rows($resultN);
           if ($resultCheckN === 1) {
               while ($rows = mysqli_fetch_assoc($resultN)) {
                   ?>

             <p>Welcome to Result Area</p>  
      <table>
          <tr>
            <td> <href="#" data-toggle="modal" data-target="#mykg1" class="btn btn-secondary px-4 py-3">View Result</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mykg1" class="btn btn-secondary px-4 py-3">PDF</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mykg1" class="btn btn-secondary px-4 py-3">Print</a></td>
          </tr>
      </table>
           


                   <?php
               }
           }
if($resultCheckN ===0) {
$sqlj2="SELECT * FROM 2019_2020_term1_basic5 WHERE st_id= '$st_id'";
$resultj2=mysqli_query($conn, $sqlj2);
$resultCheckj2 = mysqli_num_rows($resultj2);
if($resultCheckj2===1){
while ($rows=mysqli_fetch_assoc($resultj2)){
?>
<p>Welcome to Result Area</p>
 <table>
          <tr>

             <td> <href="#" data-toggle="modal" data-target="#mybasic5" class="btn btn-secondary px-4 py-3">View</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mybasic5" class="btn btn-secondary px-4 py-3">PDF</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mybasic5" class="btn btn-secondary px-4 py-3">Print</a></td>
          </tr>
      </table>



<?php
}
}
if ($resultCheckj2===0) {
   $sqlprekg="SELECT * FROM 2019_2020_term1_prekg WHERE st_id= '$st_id'";
$resultprekg=mysqli_query($conn, $sqlprekg);
$resultCheckprekg = mysqli_num_rows($resultprekg);
if($resultCheckprekg===1){
    while ( $rows=mysqli_fetch_assoc($resultprekg)) {
       ?>
       <p>Welcome to Result Area</p>
        <table>
          <tr>
             <td> <href="#" data-toggle="modal" data-target="#myprekg" class="btn btn-secondary px-4 py-3">View</a></td>
              <td> <href="#" data-toggle="modal" data-target="#myprekg" class="btn btn-secondary px-4 py-3">PDF</a></td>
              <td> <href="#" data-toggle="modal" data-target="#myprekg" class="btn btn-secondary px-4 py-3">Print</a></td>
          </tr>
      </table>

      
       <?php
    }
}
if ($resultCheckprekg===0) {
   $sqlpry2="SELECT * FROM 2019_2020_term1_basic2 WHERE st_id= '$st_id'";
    $resultpry2=mysqli_query($conn, $sqlpry2);
    $resultCheckpry2 = mysqli_num_rows($resultpry2);
    if($resultCheckpry2===1){
        while ($rows=mysqli_fetch_assoc($resultpry2)) {
            ?>
            <p>Welcome to Result Area</p>
             <table>
          <tr>
             <td> <href="#" data-toggle="modal" data-target="#mybasic2" class="btn btn-secondary px-4 py-3">View</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mybasic2" class="btn btn-secondary px-4 py-3">PDF</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mybasic2" class="btn btn-secondary px-4 py-3">Print</a></td>
          </tr>
      </table>


            <?php
        }
    }
    if ($resultCheckpry2===0) {
        $sqlnur2="SELECT * FROM 2019_2020_term1_kg2 WHERE st_id= '$st_id'";
    $resultnur2=mysqli_query($conn, $sqlnur2);
    $resultChecknur2 = mysqli_num_rows($resultnur2);
    if($resultChecknur2===1){
        while ($rows=mysqli_fetch_assoc($resultnur2)) {
           ?>
      <p>Welcome to Result Area</p>
            <br>
      <table>
          <tr>
             <td> <href="#" data-toggle="modal" data-target="#mykg2" class="btn btn-secondary px-4 py-3">View</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mykg2" class="btn btn-secondary px-4 py-3">PDF</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mykg2" class="btn btn-secondary px-4 py-3">Print</a></td>
          </tr>
     
           <?php
        }
    }
    if ($resultChecknur2===0) {
       $sqlpry3="SELECT * FROM 2019_2020_term1_basic3 WHERE st_id= '$st_id'";
    $resultpry3=mysqli_query($conn, $sqlpry3);
    $resultCheckpry3 = mysqli_num_rows($resultpry3);
    if($resultCheckpry3===1){
        while ($rows=mysqli_fetch_assoc($resultpry3)) {
            ?>
            <p>Welcome to Result Area</p>
             <table>
          <tr>
              <td> <href="#" data-toggle="modal" data-target="#mybasic3" class="btn btn-secondary px-4 py-3">View</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mybasic3" class="btn btn-secondary px-4 py-3">PDF</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mybasic3" class="btn btn-secondary px-4 py-3">Print</a></td>
          </tr>
      </table>

            
            <?php
        }
    }
       if ($resultCheckpry3===0) {
        $sqlJ1 = "SELECT * FROM 2019_2020_term1_jss1 WHERE st_id= '$st_id'";
        $resultJ1 = mysqli_query($conn, $sqlJ1);
        $resultCheckJ1 = mysqli_num_rows($resultJ1);
        if ($resultCheckJ1 ===1) {
            while ($rows = mysqli_fetch_assoc($resultJ1)) {
                ?>
                <p>Welcome to Result Area</p>
                <table>
          <tr>
            <td> <href="#" data-toggle="modal" data-target="#myjss1" class="btn btn-secondary px-4 py-3">View</a></td>
              <td> <href="#" data-toggle="modal" data-target="#myjss1" class="btn btn-secondary px-4 py-3">PDF</a></td>
              <td> <href="#" data-toggle="modal" data-target="#myjss1" class="btn btn-secondary px-4 py-3">Print</a></td>
          </tr>
      </table>  
      
    <?php
    }
}

       if ($resultCheckJ1===0) {
        $sqlJ2 = "SELECT * FROM 2019_2020_term1_jss2 WHERE st_id= '$st_id'";
        $resultJ2 = mysqli_query($conn, $sqlJ2);
        $resultCheckJ2 = mysqli_num_rows($resultJ2);
        if ($resultCheckJ2 ===1) {
            while ($rows = mysqli_fetch_assoc($resultJ2)) {
                ?>
                 <p>Welcome to Result Area</p>
       <table>
          <tr>
            <td> <href="#" data-toggle="modal" data-target="#myjss2" class="btn btn-secondary px-4 py-3">View</a></td>
              <td> <href="#" data-toggle="modal" data-target="#myjss2" class="btn btn-secondary px-4 py-3">PDF</a></td>
              <td> <href="#" data-toggle="modal" data-target="#myjss2" class="btn btn-secondary px-4 py-3">Print</a></td>
          </tr>
      </table>
         

      <?php
  }
}
if ($resultCheckJ2===0) {
        $sqlJ3 = "SELECT * FROM 2019_2020_term1_jss3 WHERE st_id= '$st_id'";
        $resultJ3 = mysqli_query($conn, $sqlJ3);
        $resultCheckJ3 = mysqli_num_rows($resultJ3);
        if ($resultCheckJ3 ===1) {
            while ($rows = mysqli_fetch_assoc($resultJ3)) {
                ?>
                 <p>Welcome to Result Area</p>
       <table>
          <tr>
               <td> <href="#" data-toggle="modal" data-target="#myjss3" class="btn btn-secondary px-4 py-3">View</a></td>
              <td> <href="#" data-toggle="modal" data-target="#myjss3" class="btn btn-secondary px-4 py-3">PDF</a></td>
              <td> <href="#" data-toggle="modal" data-target="#myjss3" class="btn btn-secondary px-4 py-3">Print</a></td>
          </tr>
      </table>
          
<?php
}
    }
    if ($resultCheckJ3===0) {
        $sql_ss1 = "SELECT * FROM 2019_2020_term1_ss1 WHERE st_id= '$st_id'";
        $result_ss1 = mysqli_query($conn, $sql_ss1);
        $resultCheck_ss1 = mysqli_num_rows($result_ss1);
        if ($resultCheck_ss1 >0) {
            while ($rows = mysqli_fetch_assoc($result_ss1)) {
                ?>
      <br>

      <p>   Welcome to Result Area</p>
      <table>
          <tr>
              <td> <href="#" data-toggle="modal" data-target="#myss1" class="btn btn-secondary px-4 py-3">View </a></td>
             
              <td> <href="#" data-toggle="modal" data-target="#myss1" class="btn btn-secondary px-4 py-3">Print Result</a></td>
          </tr>
          
      </table>


                <?php
    }
}

    if ($resultCheck_ss1===0) {
        $sql_ss2 = "SELECT * FROM 2019_2020_term1_ss2 WHERE st_id= '$st_id'";
        $result_ss2 = mysqli_query($conn, $sql_ss2);
        $resultCheck_ss2 = mysqli_num_rows($result_ss2);
        if ($resultCheck_ss2 ===1) {
            while ($rows = mysqli_fetch_assoc($result_ss2)) {
                ?>
                <p>Welcome to Result Area</p>
                 <table>
          <tr>
            <td> <href="#" data-toggle="modal" data-target="#myss2" class="btn  btn-secondary px-4 py-3">View</a></td>
              <td> <href="#" data-toggle="modal" data-target="#myss2" class="btn btn-secondary px-4 py-3">PDF</a></td>
              <td> <href="#" data-toggle="modal" data-target="#myss2" class="btn btn-secondary px-4 py-3">Print</a></td>
          </tr>
      </table>
               

      <?php
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}


?>
					




<!--modal view-->
<!--each class detail included from separate files-->

 
<?php

 

$sql = "SELECT * FROM 2019_2020_term1_kg3 WHERE  st_id= '$st_id'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck === 1){
    while ($rows = mysqli_fetch_assoc($result)) {
        ?>
<?php include_once'2019_2020_session/2019_2020_term1_kg3.php'; ?>
     

        <?php
    } 
}
if ($resultCheck === 0) {
     $sqlP = "SELECT * FROM 2019_2020_term1_basic1 WHERE st_id= '$st_id'";
    $resultP = mysqli_query($conn, $sqlP);
    $resultCheckP = mysqli_num_rows($resultP);
   
    if ($resultCheckP > 0) {
        while ($rows = mysqli_fetch_assoc($resultP)) {
            ?>
<?php include_once'2019_2020_session/2019_2020_term1_basic1.php' ?>

            <?php
        }
    }
    if ($resultCheckP===0) {
        $sqlJ = "SELECT * FROM 2019_2020_term1_basic4 WHERE st_id= '$st_id'";
        $resultJ = mysqli_query($conn, $sqlJ);
        $resultCheckJ = mysqli_num_rows($resultJ);
        if ($resultCheckJ ===1) {
            while ($rows = mysqli_fetch_assoc($resultJ)) {
                ?>
                 
      
      <?php include_once'2019_2020_session/2019_2020_term1_basic4.php' ?>

                <?php
            }
        }
        if ($resultCheckJ === 0) {
           $sqlN = "SELECT * FROM 2019_2020_term1_kg1 WHERE st_id= '$st_id'";
           $resultN = mysqli_query($conn, $sqlN);
           $resultCheckN = mysqli_num_rows($resultN);
           if ($resultCheckN === 1) {
               while ($rows = mysqli_fetch_assoc($resultN)) {
                   ?>

               
  <?php include_once'2019_2020_session/2019_2020_term1_kg1.php' ?>


                   <?php
               }
           }
if($resultCheckN ===0) {
$sqlj2="SELECT * FROM 2019_2020_term1_basic5 WHERE st_id= '$st_id'";
$resultj2=mysqli_query($conn, $sqlj2);
$resultCheckj2 = mysqli_num_rows($resultj2);
if($resultCheckj2===1){
while ($rows=mysqli_fetch_assoc($resultj2)){
?>
<?php include_once'2019_2020_session/2019_2020_term1_kg1.php' ?>



<?php
}
}
if ($resultCheckj2===0) {
   $sqlprekg="SELECT * FROM 2019_2020_term1_prekg WHERE st_id= '$st_id'";
$resultprekg=mysqli_query($conn, $sqlprekg);
$resultCheckprekg = mysqli_num_rows($resultprekg);
if($resultCheckprekg===1){
    while ( $rows=mysqli_fetch_assoc($resultprekg)) {
       ?>
<?php include_once'2019_2020_session/2019_2020_term1_prekg.php' ?>    
       <?php
    }
}
if ($resultCheckprekg===0) {
   $sqlpry2="SELECT * FROM 2019_2020_term1_basic2 WHERE st_id= '$st_id'";
    $resultpry2=mysqli_query($conn, $sqlpry2);
    $resultCheckpry2 = mysqli_num_rows($resultpry2);
    if($resultCheckpry2===1){
        while ($rows=mysqli_fetch_assoc($resultpry2)) {
            ?>

<?php include_once'2019_2020_session/2019_2020_term1_basic2.php' ?>
            <?php
        }
    }
    if ($resultCheckpry2===0) {
        $sqlnur2="SELECT * FROM 2019_2020_term1_kg2 WHERE st_id= '$st_id'";
    $resultnur2=mysqli_query($conn, $sqlnur2);
    $resultChecknur2 = mysqli_num_rows($resultnur2);
    if($resultChecknur2===1){
        while ($rows=mysqli_fetch_assoc($resultnur2)) {
           ?>
<?php include_once'2019_2020_session/2019_2020_term1_kg2.php' ?>
           <?php
        }
    }
    if ($resultChecknur2===0) {
       $sqlpry3="SELECT * FROM 2019_2020_term1_basic3 WHERE st_id= '$st_id'";
    $resultpry3=mysqli_query($conn, $sqlpry3);
    $resultCheckpry3 = mysqli_num_rows($resultpry3);
    if($resultCheckpry3===1){
        while ($rows=mysqli_fetch_assoc($resultpry3)) {
            ?>
<?php include_once'2019_2020_session/2019_2020_term1_basic3.php' ?>
        
            <?php
        }
    }
       if ($resultCheckpry3===0) {
        $sqlJ1 = "SELECT * FROM 2019_2020_term1_jss1 WHERE st_id= '$st_id'";
        $resultJ1 = mysqli_query($conn, $sqlJ1);
        $resultCheckJ1 = mysqli_num_rows($resultJ1);
        if ($resultCheckJ1 ===1) {
            while ($rows = mysqli_fetch_assoc($resultJ1)) {
                ?>
                 
      
<?php include_once'2019_2020_session/2019_2020_term1_jss1.php' ?>
    <?php
    }
}

       if ($resultCheckJ1===0) {
        $sqlJ2 = "SELECT * FROM 2019_2020_term1_jss2 WHERE st_id= '$st_id'";
        $resultJ2 = mysqli_query($conn, $sqlJ2);
        $resultCheckJ2 = mysqli_num_rows($resultJ2);
        if ($resultCheckJ2 ===1) {
            while ($rows = mysqli_fetch_assoc($resultJ2)) {
                ?>
                 
   <?php include_once'2019_2020_session/2019_2020_term1_jss2.php' ?>

      <?php
  }
}
if ($resultCheckJ2===0) {
        $sqlJ3 = "SELECT * FROM 2019_2020_term1_jss3 WHERE st_id= '$st_id'";
        $resultJ3 = mysqli_query($conn, $sqlJ3);
        $resultCheckJ3 = mysqli_num_rows($resultJ3);
        if ($resultCheckJ3 ===1) {
            while ($rows = mysqli_fetch_assoc($resultJ3)) {
                ?>
<?php include_once'2019_2020_session/2019_2020_term1_jss3.php' ?>
<?php
}
    }
    if ($resultCheckJ3===0) {
        $sql_ss1 = "SELECT * FROM 2019_2020_term1_ss1 WHERE st_id= '$st_id'";
        $result_ss1 = mysqli_query($conn, $sql_ss1);
        $resultCheck_ss1 = mysqli_num_rows($result_ss1);
        if ($resultCheck_ss1 >0) {
            while ($rows = mysqli_fetch_assoc($result_ss1)) {
                ?>
      <?php include_once'2019_2020_session/2019_2020_term1_ss1.php'; ?>

                <?php
    }
}

    if ($resultCheck_ss1===0) {
        $sql_ss2 = "SELECT * FROM 2019_2020_term1_ss2 WHERE st_id= '$st_id'";
        $result_ss2 = mysqli_query($conn, $sql_ss2);
        $resultCheck_ss2 = mysqli_num_rows($result_ss2);
        if ($resultCheck_ss2 ===1) {
            while ($rows = mysqli_fetch_assoc($result_ss2)) {
                ?>
                 <?php include_once'2019_2020_session/2019_2020_term1_ss2.php' ?>
      </div>

      <?php
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}


?>
                    


