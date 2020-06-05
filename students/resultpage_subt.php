
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="bootstrap.css">
<script src="jquery.js"></script>
<script src="bootstrap.js"></script>
<title></title>
<style type="text/css">
.victory{
    background: #ffffc2;
}
table{
   background: #ffffc2;
}
.card-1 {
    background-image: url(../images/mesh1.png);
    width: 100%;
    background-size: 100%;

    }
    @media (max-width: 992px){
        .card-1{
            width: 100%;
            background-size: 100%;

        } 
    }

@media (max-width: 768px){
    .card-1{
        width: 100%;
        background-size: 100%;
    }
}
@media (max-width: 576px){.card-1{
    width: 100%;
    background-size: 100%;
    
}
}

    table {
    text-align: center;
     border: 3px solid black;
    width: 100%; 
}
th { 
    text-align: center;
  

}
td {
  text-align: center;
 
  size: 15px;
font-size: 15px;
}
</style>
<body class="container">
	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">

 
</nav>

<div class="card-1">
      <div style="color: #ffff; height: 200px;"></div>
</div>
<p style="text-align: center;">THIRD TERM RESULT</p> 
<p style="text-align: center; size:30px;">2018/2019 ACADEMIC SESSION</p>
      

<?php 
if (isset($_POST['submit'])){
include_once'dbh.php';
$reg = mysqli_real_escape_string($conn, $_POST['reg']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

$sql = "SELECT * FROM 3rd_term_kg3 WHERE regnum = '$reg' AND password = '$pwd'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck === 1){
    while ($rows = mysqli_fetch_assoc($result)) {
        ?>

   
            <table cellspacing="0" border="3px">
        <thead>
            <tr>
                <th>Full name</th>
                <th>Reg number</th>
                 <th>Class</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $rows['full_name']; ?></td>
                <td><?php echo $rows['regnum']; ?></td>
                 <td><?php echo $rows['class']; ?></td>
            </tr>
            </tbody>
        </table>
        <br>
    <table  cellspacing="0" border="3px">
        <tr>
            <th colspan="7">student record</th>
        </tr>
        <t>
            <th>subject</th>
            <th>test-1</th>
            <th>test-2</th>
            <th>projects</th>
            <th>exam</th>
            <th>total</th>
            <th>grade</th>
        </t>
         <tr>
            <td>Mathematics</td>
            <td><?php echo $rows['m1_test']; ?></td>
            <td><?php echo $rows['m2_test']; ?></td>
            <td><?php echo $rows['m_project']; ?></td>
            <td><?php echo $rows['m_exam']; ?></td>
            <td><?php echo $rows['m_total']; ?></td>
            <td><?php echo $rows['m_grade']; ?></td>
            </tr>
            <tr>
            <td>English Language</td>
            <td><?php echo $rows['en1_test']; ?></td>
            <td><?php echo $rows['en2_test']; ?></td>
            <td><?php echo $rows['en_project']; ?></td>
            <td><?php echo $rows['en_exam']; ?></td>
            <td><?php echo $rows['en_total']; ?></td>
            <td><?php echo $rows['en_grade']; ?></td>
            </tr>
            <tr>
            <td>Phonics</td>
            <td><?php echo $rows['phonics1_test']; ?></td>
            <td><?php echo $rows['phonics2_test']; ?></td>
            <td><?php echo $rows['phonics_project']; ?></td>
            <td><?php echo $rows['phonics_exam']; ?></td>
            <td><?php echo $rows['phonics_total']; ?></td>
            <td><?php echo $rows['phonics_grade']; ?></td>
            </tr>
            <tr>
            <td>Drawing</td>
            <td><?php echo $rows['draw1_test']; ?></td>
            <td><?php echo $rows['draw2_test']; ?></td>
            <td><?php echo $rows['draw_project']; ?></td>
            <td><?php echo $rows['draw_exam']; ?></td>
            <td><?php echo $rows['draw_total']; ?></td>
            <td><?php echo $rows['draw_grade']; ?></td>
            </tr>
            <tr>
            <td>Elementary Science</td>
            <td><?php echo $rows['elementary1_test']; ?></td>
            <td><?php echo $rows['elementary2_test']; ?></td>
            <td><?php echo $rows['elementary_project']; ?></td>
            <td><?php echo $rows['elementary_exam']; ?></td>
            <td><?php echo $rows['elementary_total']; ?></td>
            <td><?php echo $rows['elementary_grade']; ?></td>
            </tr>
            <tr>
            <td>CCA</td>
            <td><?php echo $rows['cca1_test']; ?></td>
            <td><?php echo $rows['cca2_test']; ?></td>
            <td><?php echo $rows['cca_project']; ?></td>
            <td><?php echo $rows['cca_exam']; ?></td>
            <td><?php echo $rows['cca_total']; ?></td>
            <td><?php echo $rows['cca_grade']; ?></td>
            </tr>
            <tr>
            <td>C.R.S</td>
            <td><?php echo $rows['crs1_test']; ?></td>
            <td><?php echo $rows['crs2_test']; ?></td>
            <td><?php echo $rows['crs_project']; ?></td>
            <td><?php echo $rows['crs_exam']; ?></td>
            <td><?php echo $rows['crs_total']; ?></td>
            <td><?php echo $rows['crs_grade']; ?></td>
            </tr>
           
            
            <tr>
            <td>Social Studies</td>
            <td><?php echo $rows['sos1_test']; ?></td>
            <td><?php echo $rows['sos2_test']; ?></td>
            <td><?php echo $rows['sos_project']; ?></td>
            <td><?php echo $rows['sos_exam']; ?></td>
            <td><?php echo $rows['sos_total']; ?></td>
            <td><?php echo $rows['sos_grade']; ?></td>
            </tr>
           <tr>
            <td>Health Edu.</td>
            <td><?php echo $rows['HealthE1_test']; ?></td>
            <td><?php echo $rows['HealthE2_test']; ?></td>
            <td><?php echo $rows['HealthE_project']; ?></td>
            <td><?php echo $rows['Jehovah']; ?></td>
            <td><?php echo $rows['HealthE_total']; ?></td>
            <td><?php echo $rows['HealthE_grade']; ?></td>
            </tr>
            <tr>
  <tr>
            <td>Writing</td>
            <td><?php echo $rows['writing1_test']; ?></td>
            <td><?php echo $rows['writing2_test']; ?></td>
            <td><?php echo $rows['writing_project']; ?></td>
            <td><?php echo $rows['writing_exam']; ?></td>
            <td><?php echo $rows['writing_total']; ?></td>
            <td><?php echo $rows['writing_grade']; ?></td>
            </tr>
            <tr>
           
            <tr>
            <td>Computer</td>
            <td><?php echo $rows['computer1_test']; ?></td>
            <td><?php echo $rows['computer2_test']; ?></td>
            <td><?php echo $rows['computer_project']; ?></td>
            <td><?php echo $rows['computer_exam']; ?></td>
            <td><?php echo $rows['computer_total']; ?></td>
            <td><?php echo $rows['computer_grade']; ?></td>
            </tr>

            <tr>
            <td>Quantitative Reasoning</td>
            <td><?php echo $rows['quan_1']; ?></td>
            <td><?php echo $rows['quan_2']; ?></td>
            <td><?php echo $rows['quan_project']; ?></td>
            <td><?php echo $rows['quan_exam']; ?></td>
            <td><?php echo $rows['quan_total']; ?></td>
            <td><?php echo $rows['quan_grade']; ?></td>
            </tr>

            <tr>
            <td>Verbal Reasoning</td>
            <td><?php echo $rows['verbal_1']; ?></td>
            <td><?php echo $rows['verbal_2']; ?></td>
            <td><?php echo $rows['veral_project']; ?></td>
            <td><?php echo $rows['verbal_exam']; ?></td>
            <td><?php echo $rows['verbal_total']; ?></td>
            <td><?php echo $rows['verbal_grade']; ?></td>
            </tr>

            

            <tr>
            <td>PVS</td>
            <td><?php echo $rows['pvs_1']; ?></td>
            <td><?php echo $rows['pvs_2']; ?></td>
            <td><?php echo $rows['pvs_project']; ?></td>
            <td><?php echo $rows['pvs_exam']; ?></td>
            <td><?php echo $rows['pvs_total']; ?></td>
            <td><?php echo $rows['pvs_grade']; ?></td>
            </tr>

            


        <tr>
            <td>Spelling</td>
            <td><?php echo $rows['speliing_1']; ?></td>
            <td><?php echo $rows['spelling_2']; ?></td>
            <td><?php echo $rows['speliing_project']; ?></td>
            <td><?php echo $rows['spellin_exam']; ?></td>
            <td><?php echo $rows['spelling_total']; ?></td>
            <td></td>
            </tr>

            <tr>
            <td>Civic</td>
            <td><?php echo $rows['civ1_test']; ?></td>
            <td><?php echo $rows['civ2_test']; ?></td>
            <td><?php echo $rows['civ_project']; ?></td>
            <td><?php echo $rows['civ_exam']; ?></td>
            <td><?php echo $rows['civ_total']; ?></td>
            <td><?php echo $rows['civ_grade']; ?></td>
            </tr>
             <tr>
            <td>Holiday Projects</td>
            <td></td>
            <td></td>
             <td></td>
            <td><?php echo $rows['holiday_project']; ?></td>
            <td><?php echo $rows['holiday_project']; ?></td>
            <td><?php echo $rows['holiday_grade']; ?></td>
            </tr>

           

           

            <table cellspacing="0" border="3px">
                  <br>
        <tr>
            <th colspan="8">sumary of result</th>
        </tr>
        
            <th>Total in class</th>
            <th>Total score</th>
            <th>expected score</th>
            <th>Average score</th>
            <th>Position</th>
            <th>attendance</th>
            <th>resumption date</th>
            
        </t>
         <tr>
            <td>25</td>
            <td><?php echo $rows['grand_total']; ?></td>
            <td>1700</td>
            <td><?php echo $rows['average']; ?></td>
            <td><?php echo $rows['position']; ?></td>
            <td><?php echo $rows['attendance']; ?></td>
            <td>9th Sept, 2019</td>
         
           
            </tr>
      </table>
<br>
    <table cellspacing="0" border="3px">
            <th>Class teacher's remark</th>
            <th>Principal's remark</th>
            <th>Principal signature</th>
           
            
    </t>
         <tr>
            <td><?php echo $rows['remark1']; ?></td>
            <td><?php echo $rows['remark2']; ?></td>
            <td><img src="signs.png" alt=""></img></td>
        </tr>
    </t>
      </table>
      </div>

     

        <?php
    } 
}
if ($resultCheck === 0) {
     $sqlP = "SELECT * FROM 3rd_term_primary1 WHERE regnum = '$reg' AND password = '$pwd'";
    $resultP = mysqli_query($conn, $sqlP);
    $resultCheckP = mysqli_num_rows($resultP);
   
    if ($resultCheckP > 0) {
        while ($rows = mysqli_fetch_assoc($resultP)) {
            ?>
          
     
            <table>
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Reg Number</th>
                 <th>Class</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $rows['full_name']; ?></td>
                <td><?php echo $rows['regnum']; ?></td>
                 <td><?php echo $rows['class']; ?></td>
            </tr>
            </tbody>
        </table>
        <br>
    <table  cellspacing="0" border="3px">
        <tr>
            <th colspan="7">STUDENT'S RECORD</th>
        </tr>
        <t>
            <th>Subject</th>
            <th>Test-1</th>
            <th>Test-2</th>
            <th>Projects</th>
            <th>Exam</th>
            <th>Total</th>
            <th>Grade</th>
        </t>
         <tr>
            <td>Mathematics</td>
            <td><?php echo $rows['m1_test']; ?></td>
            <td><?php echo $rows['m2_test']; ?></td>
            <td><?php echo $rows['m_project']; ?></td>
            <td><?php echo $rows['m_exam']; ?></td>
            <td><?php echo $rows['m_total']; ?></td>
            <td><?php echo $rows['m_grade']; ?></td>
            </tr>
            <tr>
            <td>English Language</td>
            <td><?php echo $rows['en1_test']; ?></td>
            <td><?php echo $rows['en2_test']; ?></td>
            <td><?php echo $rows['en_project']; ?></td>
            <td><?php echo $rows['en_exam']; ?></td>
            <td><?php echo $rows['en_total']; ?></td>
            <td><?php echo $rows['en_grade']; ?></td>
            </tr>
            <tr>
            <td>Phonics</td>
            <td><?php echo $rows['phonics1_test']; ?></td>
            <td><?php echo $rows['phonics2_test']; ?></td>
            <td><?php echo $rows['phonics_project']; ?></td>
            <td><?php echo $rows['phonics_exam']; ?></td>
            <td><?php echo $rows['phonics_total']; ?></td>
            <td><?php echo $rows['phonics_grade']; ?></td>
            </tr>
            <tr>
            <td>Drawing</td>
            <td><?php echo $rows['draw1_test']; ?></td>
            <td><?php echo $rows['draw2_test']; ?></td>
            <td><?php echo $rows['draw_project']; ?></td>
            <td><?php echo $rows['draw_exam']; ?></td>
            <td><?php echo $rows['draw_total']; ?></td>
            <td><?php echo $rows['draw_grade']; ?></td>
            </tr>
            <tr>
            <td>Basic Science</td>
            <td><?php echo $rows['bas1_test']; ?></td>
            <td><?php echo $rows['bas2_test']; ?></td>
            <td><?php echo $rows['bas_project']; ?></td>
            <td><?php echo $rows['bas_exam']; ?></td>
            <td><?php echo $rows['bas_total']; ?></td>
            <td><?php echo $rows['bas_grade']; ?></td>
            </tr>
            <tr>
            <td>CCA</td>
            <td><?php echo $rows['cca1_test']; ?></td>
            <td><?php echo $rows['cca2_test']; ?></td>
            <td><?php echo $rows['cca_project']; ?></td>
            <td><?php echo $rows['cca_exam']; ?></td>
            <td><?php echo $rows['cca_total']; ?></td>
            <td><?php echo $rows['cca_grade']; ?></td>
            </tr>
            <tr>
            <td>C.R.S</td>
            <td><?php echo $rows['crs1_test']; ?></td>
            <td><?php echo $rows['crs2_test']; ?></td>
            <td><?php echo $rows['crs_project']; ?></td>
            <td><?php echo $rows['crs_exam']; ?></td>
            <td><?php echo $rows['crs_total']; ?></td>
            <td><?php echo $rows['crs_grade']; ?></td>
            </tr>
            <tr>
            <td>civic education</td>
            <td><?php echo $rows['civ1_test']; ?></td>
            <td><?php echo $rows['civ2_test']; ?></td>
            <td><?php echo $rows['civ_project']; ?></td>
            <td><?php echo $rows['civ_exam']; ?></td>
            <td><?php echo $rows['civ_total']; ?></td>
            <td><?php echo $rows['civ_grade']; ?></td>
            </tr>
            <tr>
           
            <tr>
            <td>Social Studies</td>
            <td><?php echo $rows['sos1_test']; ?></td>
            <td><?php echo $rows['sos2_test']; ?></td>
            <td><?php echo $rows['sos_project']; ?></td>
            <td><?php echo $rows['sos_exam']; ?></td>
            <td><?php echo $rows['sos_total']; ?></td>
            <td><?php echo $rows['sos_grade']; ?></td>
            </tr>
            <tr>
            <td>Q.R</td>
            <td><?php echo $rows['qr1_test']; ?></td>
            <td><?php echo $rows['qr2_test']; ?></td>
            <td><?php echo $rows['qr_project']; ?></td>
            <td><?php echo $rows['qr_exam']; ?></td>
            <td><?php echo $rows['qr_total']; ?></td>
            <td><?php echo $rows['qr_grade']; ?></td>
            </tr>
            <tr>
            <td>V.R</td>
            <td><?php echo $rows['vr1_test']; ?></td>
            <td><?php echo $rows['vr2_test']; ?></td>
            <td><?php echo $rows['vr_project']; ?></td>
            <td><?php echo $rows['vr_exam']; ?></td>
            <td><?php echo $rows['vr_total']; ?></td>
            <td><?php echo $rows['vr_grade']; ?></td>
            </tr>
            <tr>
            <td>Computer</td>
            <td><?php echo $rows['c1_test']; ?></td>
            <td><?php echo $rows['c2_test']; ?></td>
            <td><?php echo $rows['c_project']; ?></td>
            <td><?php echo $rows['c_exam']; ?></td>
            <td><?php echo $rows['c_total']; ?></td>
            <td><?php echo $rows['c_grade']; ?></td>
            </tr>
            <tr>
            <td>P.V.S</td>
            <td><?php echo $rows['pvs1_test']; ?></td>
            <td><?php echo $rows['pvs2_test']; ?></td>
            <td><?php echo $rows['pvs_project']; ?></td>
            <td><?php echo $rows['pvs_exam']; ?></td>
            <td><?php echo $rows['pvs_total']; ?></td>
            <td><?php echo $rows['pvs_grade']; ?></td>
            </tr>
             <td>Physical Health Education</td>
            <td><?php echo $rows['phe1_test']; ?></td>
            <td><?php echo $rows['phe2_test']; ?></td>
            <td><?php echo $rows['phe_project']; ?></td>
            <td><?php echo $rows['phe_exam']; ?></td>
            <td><?php echo $rows['phe_total']; ?></td>
            <td><?php echo $rows['phe_grade']; ?></td>
            </tr>
            <tr>
            <td>Writing</td>
            <td><?php echo $rows['writing1_test']; ?></td>
            <td><?php echo $rows['writing2_test']; ?></td>
            <td><?php echo $rows['writing_project']; ?></td>
            <td><?php echo $rows['writing_exam']; ?></td>
            <td><?php echo $rows['writing_total']; ?></td>
            <td><?php echo $rows['writing_grade']; ?></td>
            </tr>
            <td>French</td>
            <td><?php echo $rows['french_test1']; ?></td>
            <td><?php echo $rows['french_test1']; ?></td>
            <td><?php echo $rows['french_project']; ?></td>
            <td><?php echo $rows['french_exam']; ?></td>
            <td><?php echo $rows['french_total']; ?></td>
            <td><?php echo $rows['french_grade']; ?></td>
            </tr>
            <td>Holiday Projects</td>
            <td></td>
            <td></td>
             <td></td>
            <td><?php echo $rows['holiday_project']; ?></td>
            <td><?php echo $rows['holiday_project']; ?></td>
            <td><?php echo $rows['holiday_grade']; ?></td>
            </tr>

            <table  cellspacing="0" border="3px">
                  <br>
        <tr>
            <th colspan="7">sumary of result</th>
        </tr>
        
            <th>Total in class</th>
            <th>Total score</th>
            <th>expected score</th>
            <th>Average score</th>
            <th>Position</th>
            <th>% attendance</th>
           
            <th>resumption date</th>
            
        </t>
         <tr>
            <td>25</td>
            <td><?php echo $rows['grand_total']; ?></td>
            <td>1700</td>
            <td><?php echo $rows['average']; ?></td>
            <td><?php echo $rows['position']; ?></td>
            <td><?php echo $rows['attendance']; ?></td>
            <td>9th Sept, 2019</td>
            </tr>
             
      </table>
      <br>
      <table cellspacing="0" border="3px">
            <th>Class teacher's remark</th>
            <th>Principal's remark</th>
            <th>Principal signature</th>
           
            
    </t>
         <tr>
            <td><?php echo $rows['remark']; ?></td>
            <td><?php echo $rows['remark2']; ?></td>
            <td><img src="signs.png" alt=""></img></td>
        </tr>
    </t>
      </table>
      </div>

            <?php
        }
    }
    if ($resultCheckP===0) {
        $sqlJ = "SELECT * FROM 3rd_term_primary4 WHERE regnum ='$reg' AND password = '$pwd'";
        $resultJ = mysqli_query($conn, $sqlJ);
        $resultCheckJ = mysqli_num_rows($resultJ);
        if ($resultCheckJ ===1) {
            while ($rows = mysqli_fetch_assoc($resultJ)) {
                ?>
                 
      
            <table cellspacing="0" border="3px">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Reg Number</th>
                 <th>Class</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $rows['full_name']; ?></td>
                <td><?php echo $rows['regnum']; ?></td>
                 <td><?php echo $rows['class']; ?></td>
            </tr>
            </tbody>
        </table>
        <br>
    <table  cellspacing="0" border="3px">
        <tr>
            <th colspan="7">STUDENT'S RECORD</th>
        </tr>
        <t>
            <th>subject</th>
            <th>test-1</th>
            <th>test-2</th>
            <th>projects</th>
            <th>exam</th>
            <th>total</th>
            <th>grade</th>
        </t>
         <tr>
            <td>Mathematics</td>
            <td><?php echo $rows['m1_test']; ?></td>
            <td><?php echo $rows['m2_test']; ?></td>
            <td><?php echo $rows['m_project']; ?></td>
            <td><?php echo $rows['m_exam']; ?></td>
            <td><?php echo $rows['m_total']; ?></td>
            <td><?php echo $rows['m_grade']; ?></td>
            </tr>
            <tr>
            <td>English Language</td>
            <td><?php echo $rows['en1_test']; ?></td>
            <td><?php echo $rows['en2_test']; ?></td>
            <td><?php echo $rows['en_project']; ?></td>
            <td><?php echo $rows['en_exam']; ?></td>
            <td><?php echo $rows['en_total']; ?></td>
            <td><?php echo $rows['en_grade']; ?></td>
            </tr>
            <tr>
            <td>Phonics</td>
            <td><?php echo $rows['phonics1_test']; ?></td>
            <td><?php echo $rows['phonics2_test']; ?></td>
            <td><?php echo $rows['phonics_project']; ?></td>
            <td><?php echo $rows['phonics_exam']; ?></td>
            <td><?php echo $rows['phonics_total']; ?></td>
            <td><?php echo $rows['phonics_grade']; ?></td>
            </tr>
            <tr>
            <td>Drawing</td>
            <td><?php echo $rows['draw1_test']; ?></td>
            <td><?php echo $rows['draw2_test']; ?></td>
            <td><?php echo $rows['draw_project']; ?></td>
            <td><?php echo $rows['draw_exam']; ?></td>
            <td><?php echo $rows['draw_total']; ?></td>
            <td><?php echo $rows['draw_grade']; ?></td>
            </tr>
            <tr>
            <td>Basic Science</td>
            <td><?php echo $rows['bas1_test']; ?></td>
            <td><?php echo $rows['bas2_test']; ?></td>
            <td><?php echo $rows['bas_project']; ?></td>
            <td><?php echo $rows['bas_exam']; ?></td>
            <td><?php echo $rows['bas_total']; ?></td>
            <td><?php echo $rows['bas_grade']; ?></td>
            </tr>
            <tr>
            <td>CCA</td>
            <td><?php echo $rows['cca1_test']; ?></td>
            <td><?php echo $rows['cca2_test']; ?></td>
            <td><?php echo $rows['cca_project']; ?></td>
            <td><?php echo $rows['cca_exam']; ?></td>
            <td><?php echo $rows['cca_total']; ?></td>
            <td><?php echo $rows['cca_grade']; ?></td>
            </tr>
            <tr>
            <td>C.R.S</td>
            <td><?php echo $rows['crs1_test']; ?></td>
            <td><?php echo $rows['crs2_test']; ?></td>
            <td><?php echo $rows['crs_project']; ?></td>
            <td><?php echo $rows['crs_exam']; ?></td>
            <td><?php echo $rows['crs_total']; ?></td>
            <td><?php echo $rows['crs_grade']; ?></td>
            </tr>
            <tr>
            <td>civic education</td>
            <td><?php echo $rows['civ1_test']; ?></td>
            <td><?php echo $rows['civ2_test']; ?></td>
            <td><?php echo $rows['civ_project']; ?></td>
            <td><?php echo $rows['civ_exam']; ?></td>
            <td><?php echo $rows['civ_total']; ?></td>
            <td><?php echo $rows['civ_grade']; ?></td>
            </tr>
            <tr>
           
            <tr>
            <td>Social Studies</td>
            <td><?php echo $rows['sos1_test']; ?></td>
            <td><?php echo $rows['sos2_test']; ?></td>
            <td><?php echo $rows['sos_project']; ?></td>
            <td><?php echo $rows['sos_exam']; ?></td>
            <td><?php echo $rows['sos_total']; ?></td>
            <td><?php echo $rows['sos_grade']; ?></td>
            </tr>
            <tr>
            <td>Q.R</td>
            <td><?php echo $rows['qr1_test']; ?></td>
            <td><?php echo $rows['qr2_test']; ?></td>
            <td><?php echo $rows['qr_project']; ?></td>
            <td><?php echo $rows['qr_exam']; ?></td>
            <td><?php echo $rows['qr_total']; ?></td>
            <td><?php echo $rows['qr_grade']; ?></td>
            </tr>
            <tr>
            <td>V.R</td>
            <td><?php echo $rows['vr1_test']; ?></td>
            <td><?php echo $rows['vr2_test']; ?></td>
            <td><?php echo $rows['vr_project']; ?></td>
            <td><?php echo $rows['vr_exam']; ?></td>
            <td><?php echo $rows['vr_total']; ?></td>
            <td><?php echo $rows['vr_grade']; ?></td>
            </tr>
            <tr>
            <td>Computer</td>
            <td><?php echo $rows['c1_test']; ?></td>
            <td><?php echo $rows['c2_test']; ?></td>
            <td><?php echo $rows['c_project']; ?></td>
            <td><?php echo $rows['c_exam']; ?></td>
            <td><?php echo $rows['c_total']; ?></td>
            <td><?php echo $rows['c_grade']; ?></td>
            </tr>
            <tr>
            <td>P.V.S</td>
            <td><?php echo $rows['pvs1_test']; ?></td>
            <td><?php echo $rows['pvs2_test']; ?></td>
            <td><?php echo $rows['pvs_project']; ?></td>
            <td><?php echo $rows['pvs_exam']; ?></td>
            <td><?php echo $rows['pvs_total']; ?></td>
            <td><?php echo $rows['pvs_grade']; ?></td>
            </tr>
            <tr>
             <td>Physical Health Education</td>
            <td><?php echo $rows['phe1_test']; ?></td>
            <td><?php echo $rows['phe2_test']; ?></td>
            <td><?php echo $rows['phe_project']; ?></td>
            <td><?php echo $rows['phe_exam']; ?></td>
            <td><?php echo $rows['phe_total']; ?></td>
            <td><?php echo $rows['phe_grade']; ?></td>
            </tr>
            <tr>
            <td>Writing</td>
            <td><?php echo $rows['writing1_test']; ?></td>
            <td><?php echo $rows['writing2_test']; ?></td>
            <td><?php echo $rows['writing_project']; ?></td>
            <td><?php echo $rows['writing_exam']; ?></td>
            <td><?php echo $rows['writing_total']; ?></td>
            <td><?php echo $rows['writing_grade']; ?></td>
            </tr>
            <td>French</td>
            <td><?php echo $rows['french_test1']; ?></td>
            <td><?php echo $rows['french_test1']; ?></td>
            <td><?php echo $rows['french_project']; ?></td>
            <td><?php echo $rows['french_exam']; ?></td>
            <td><?php echo $rows['french_total']; ?></td>
            <td><?php echo $rows['french_grade']; ?></td>
            </tr>
            <td>Holiday Projects</td>
            <td></td>
            <td></td>
             <td></td>
            <td><?php echo $rows['holiday_project']; ?></td>
            <td><?php echo $rows['holiday_project']; ?></td>
            <td><?php echo $rows['holiday_grade']; ?></td>
            </tr>

            <table  cellspacing="0" border="3px">
                  <br>
        <tr>
            <th colspan="7">sumary of result</th>
        </tr>
        
            <th>Total in class</th>
            <th>Total score</th>
            <th>expected score</th>
            <th>Average score</th>
            <th>Position</th>
            <th>% attendance</th>
           
            <th>resumption date</th>
            
        </t>
         <tr>
            <td>25</td>
            <td><?php echo $rows['grand_total']; ?></td>
            <td>1700</td>
            <td><?php echo $rows['average']; ?></td>
            <td><?php echo $rows['position']; ?></td>
            <td></td>
            <td>9th Sept, 2019</td>
            </tr>

           
      </table>
<br>
     <table cellspacing="0" border="3px">
            <th>Class teacher's remark</th>
            <th>Principal's remark</th>
            <th>Principal signature</th>
           
            
    </t>
         <tr>
            <td><?php echo $rows['remark']; ?></td>
            <td><?php echo $rows['remark2']; ?></td>
            <td><img src="signs.png" alt=""></img></td>
        </tr>
    </t>
      </table>
      </div>

                <?php
            }
        }
        if ($resultCheckJ === 0) {
           $sqlN = "SELECT * FROM nursery1 WHERE regnum = '$reg' AND password = '$pwd'";
           $resultN = mysqli_query($conn, $sqlN);
           $resultCheckN = mysqli_num_rows($resultN);
           if ($resultCheckN === 1) {
               while ($rows = mysqli_fetch_assoc($resultN)) {
                   ?>

               
     
            <table cellspacing="0" border="3px">
        <thead>
            <tr>
                <th>Full name</th>
                <th>Reg number</th>
                 <th>Class</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $rows['full_name']; ?></td>
                <td><?php echo $rows['regnum']; ?></td>
                 <td><?php echo $rows['class']; ?></td>
            </tr>
            </tbody>
        </table>
        <br>
    <table  cellspacing="0" border="3px">
        <tr>
            <th colspan="7">student record</th>
        </tr>
        <t>
            <th>subject</th>
            <th>test-1</th>
            <th>test-2</th>
            <th>projects</th>
            <th>exam</th>
            <th>total</th>
            <th>grade</th>
        </t>
         <tr>
            <td>Mathematics</td>
            <td><?php echo $rows['m1_test']; ?></td>
            <td><?php echo $rows['m2_test']; ?></td>
            <td><?php echo $rows['m_project']; ?></td>
            <td><?php echo $rows['m_exam']; ?></td>
            <td><?php echo $rows['m_total']; ?></td>
            <td><?php echo $rows['m_grade']; ?></td>
            </tr>
            <tr>
            <td>English Language</td>
            <td><?php echo $rows['en1_test']; ?></td>
            <td><?php echo $rows['en2_test']; ?></td>
            <td><?php echo $rows['en_project']; ?></td>
            <td><?php echo $rows['en_exam']; ?></td>
            <td><?php echo $rows['en_total']; ?></td>
            <td><?php echo $rows['en_grade']; ?></td>
            </tr>
            <tr>
            <td>Phonics</td>
            <td><?php echo $rows['phonics1_test']; ?></td>
            <td><?php echo $rows['phonics2_test']; ?></td>
            <td><?php echo $rows['phonics_project']; ?></td>
            <td><?php echo $rows['phonics_exam']; ?></td>
            <td><?php echo $rows['phonics_total']; ?></td>
            <td><?php echo $rows['phonics_grade']; ?></td>
            </tr>
            <tr>
            <td>Drawing</td>
            <td><?php echo $rows['draw1_test']; ?></td>
            <td><?php echo $rows['draw2_test']; ?></td>
            <td><?php echo $rows['draw_project']; ?></td>
            <td><?php echo $rows['draw_exam']; ?></td>
            <td><?php echo $rows['draw_total']; ?></td>
            <td><?php echo $rows['draw_grade']; ?></td>
            </tr>
            <tr>
            <td>Elementary Science</td>
            <td><?php echo $rows['elementary1_test']; ?></td>
            <td><?php echo $rows['elementary2_test']; ?></td>
            <td><?php echo $rows['elementary_project']; ?></td>
            <td><?php echo $rows['elementary_exam']; ?></td>
            <td><?php echo $rows['elementary_total']; ?></td>
            <td><?php echo $rows['elementary_grade']; ?></td>
            </tr>
            <tr>
            <td>CCA</td>
            <td><?php echo $rows['cca1_test']; ?></td>
            <td><?php echo $rows['cca2_test']; ?></td>
            <td><?php echo $rows['cca_project']; ?></td>
            <td><?php echo $rows['cca_exam']; ?></td>
            <td><?php echo $rows['cca_total']; ?></td>
            <td><?php echo $rows['cca_grade']; ?></td>
            </tr>
            <tr>
            <td>C.R.S</td>
            <td><?php echo $rows['crs1_test']; ?></td>
            <td><?php echo $rows['crs2_test']; ?></td>
            <td><?php echo $rows['crs_project']; ?></td>
            <td><?php echo $rows['crs_exam']; ?></td>
            <td><?php echo $rows['crs_total']; ?></td>
            <td><?php echo $rows['crs_grade']; ?></td>
            </tr>
           
            
            <tr>
            <td>Social Studies</td>
            <td><?php echo $rows['sos1_test']; ?></td>
            <td><?php echo $rows['sos2_test']; ?></td>
            <td><?php echo $rows['sos_project']; ?></td>
            <td><?php echo $rows['sos_exam']; ?></td>
            <td><?php echo $rows['sos_total']; ?></td>
            <td><?php echo $rows['sos_grade']; ?></td>
            </tr>
            <tr>
            <td>Health Edu.</td>
            <td><?php echo $rows['HealthE1_test']; ?></td>
            <td><?php echo $rows['HealthE2_test']; ?></td>
            <td><?php echo $rows['HealthE_project']; ?></td>
            <td><?php echo $rows['amen']; ?></td>
            <td><?php echo $rows['HealthE_total']; ?></td>
            <td><?php echo $rows['HealthE_grade']; ?></td>
            </tr>
            <tr>
  <tr>
            <td>Writing</td>
            <td><?php echo $rows['writing1_test']; ?></td>
            <td><?php echo $rows['writing2_test']; ?></td>
            <td><?php echo $rows['writing_project']; ?></td>
            <td><?php echo $rows['writing_exam']; ?></td>
            <td><?php echo $rows['writing_total']; ?></td>
            <td><?php echo $rows['writing_grade']; ?></td>
            </tr>
            <tr>
           
            <tr>
            <td>Computer</td>
            <td><?php echo $rows['compter1_test']; ?></td>
            <td><?php echo $rows['computer2_test']; ?></td>
            <td><?php echo $rows['computer_project']; ?></td>
            <td><?php echo $rows['computer_exam']; ?></td>
            <td><?php echo $rows['computer_total']; ?></td>
            <td><?php echo $rows['computer_grade']; ?></td>
            </tr>

            
           

       

          

            <tr>
            <td>Poem</td>
            <td><?php echo $rows['poem-1']; ?></td>
            <td><?php echo $rows['poem-2']; ?></td>
            <td><?php echo $rows['poem_project']; ?></td>
            <td><?php echo $rows['poem_exam']; ?></td>
            <td><?php echo $rows['poem_total']; ?></td>
            <td><?php echo $rows['poem_grade']; ?></td>
            </tr>

            <table cellspacing="0" border="3px">
                  <br>
        <tr>
            <th colspan="7">sumary of result</th>
        </tr>
        
            <th>Total in class</th>
            <th>Total score</th>
            <th>expected score</th>
            <th>Average score</th>
            <th>Position</th>
            <th>% attendance</th>
           
            <th>resumption date</th>
            
        </t>
         <tr>
            <td>25</td>
            <td><?php echo $rows['grand_total']; ?></td>
            <td>1200</td>
            <td><?php echo $rows['average']; ?></td>
            <td><?php echo $rows['position']; ?></td>
            <td></td>

            
            <td>29/4/2019</td>
           
            </tr>
      </table>
<br>
    <table cellspacing="0" border="3px">
            <th>Class teacher's remark</th>
            <th>Principal's remark</th>
            <th>Principal signature</th>
           
            
    </t>
         <tr>
            <td><?php echo $rows['remark']; ?></td>
            <td><?php echo $rows['remark2']; ?></td>
            <td><img src="../images/signs.png" alt=""></img></td>
        </tr>
    </t>
      </table>
      </div>


                   <?php
               }
           }
if($resultCheckN ===0) {
$sqlj2="SELECT * FROM pry5sheet WHERE regnum = '$reg' AND password = '$pwd'";
$resultj2=mysqli_query($conn, $sqlj2);
$resultCheckj2 = mysqli_num_rows($resultj2);
if($resultCheckj2===1){
while ($rows=mysqli_fetch_assoc($resultj2)){
?>

<table cellspacing="0" border="3px">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Reg Number</th>
                 <th>Class</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $rows['full_name']; ?></td>
                <td><?php echo $rows['regnum']; ?></td>
                 <td><?php echo $rows['class']; ?></td>
            </tr>
            </tbody>
        </table>
        <br>
    <table  cellspacing="0" border="3px">
        <tr>
            <th colspan="7">STUDENT'S RECORD</th>
        </tr>
        <t>
            <th>subject</th>
            <th>test-1</th>
            <th>test-2</th>
            <th>projects</th>
            <th>exam</th>
            <th>total</th>
            <th>grade</th>
        </t>
         <tr>
            <td>Mathematics</td>
            <td><?php echo $rows['m1_test']; ?></td>
            <td><?php echo $rows['m2_test']; ?></td>
            <td><?php echo $rows['m_project']; ?></td>
            <td><?php echo $rows['m_exam']; ?></td>
            <td><?php echo $rows['m_total']; ?></td>
            <td><?php echo $rows['m_grade']; ?></td>
            </tr>
            <tr>
            <td>English Language</td>
            <td><?php echo $rows['en1_test']; ?></td>
            <td><?php echo $rows['en2_test']; ?></td>
            <td><?php echo $rows['en_project']; ?></td>
            <td><?php echo $rows['en_exam']; ?></td>
            <td><?php echo $rows['en_total']; ?></td>
            <td><?php echo $rows['en_grade']; ?></td>
            </tr>
            <tr>
            <td>Phonics</td>
            <td><?php echo $rows['phonics1_test']; ?></td>
            <td><?php echo $rows['phonics2_test']; ?></td>
            <td><?php echo $rows['phonics_project']; ?></td>
            <td><?php echo $rows['phonics_exam']; ?></td>
            <td><?php echo $rows['phonics_total']; ?></td>
            <td><?php echo $rows['phonics_grade']; ?></td>
            </tr>
            <tr>
            <td>Drawing</td>
            <td><?php echo $rows['draw1_test']; ?></td>
            <td><?php echo $rows['draw2_test']; ?></td>
            <td><?php echo $rows['draw_project']; ?></td>
            <td><?php echo $rows['draw_exam']; ?></td>
            <td><?php echo $rows['draw_total']; ?></td>
            <td><?php echo $rows['draw_grade']; ?></td>
            </tr>

            <tr>
            <td>PHE</td>
            <td><?php echo $rows['phe1_test']; ?></td>
            <td><?php echo $rows['phe2_test']; ?></td>
            <td><?php echo $rows['phe_project']; ?></td>
            <td><?php echo $rows['phe_exam']; ?></td>
            <td><?php echo $rows['phe_total']; ?></td>
            <td><?php echo $rows['phe_grade']; ?></td>
            </tr>


            <tr>
            <td>Writing</td>
            <td><?php echo $rows['writing1_test']; ?></td>
            <td><?php echo $rows['writing2_test']; ?></td>
            <td><?php echo $rows['writing_project']; ?></td>
            <td><?php echo $rows['writing_exam']; ?></td>
            <td><?php echo $rows['writing_total']; ?></td>
            <td><?php echo $rows['writing_grade']; ?></td>
            </tr>

            <tr>
            <td>Basic Science</td>
            <td><?php echo $rows['bas1_test']; ?></td>
            <td><?php echo $rows['bas2_test']; ?></td>
            <td><?php echo $rows['bas_project']; ?></td>
            <td><?php echo $rows['bas_exam']; ?></td>
            <td><?php echo $rows['bas_total']; ?></td>
            <td><?php echo $rows['bas_grade']; ?></td>
            </tr>
            <tr>
            <td>CCA</td>
            <td><?php echo $rows['cca1_test']; ?></td>
            <td><?php echo $rows['cca2_test']; ?></td>
            <td><?php echo $rows['cca_project']; ?></td>
            <td><?php echo $rows['cca_exam']; ?></td>
            <td><?php echo $rows['cca_total']; ?></td>
            <td><?php echo $rows['cca_grade']; ?></td>
            </tr>
            <tr>
            <td>C.R.S</td>
            <td><?php echo $rows['crs1_test']; ?></td>
            <td><?php echo $rows['crs2_test']; ?></td>
            <td><?php echo $rows['crs_project']; ?></td>
            <td><?php echo $rows['crs_exam']; ?></td>
            <td><?php echo $rows['crs_total']; ?></td>
            <td><?php echo $rows['crs_grade']; ?></td>
            </tr>
            <tr>
            <td>civic education</td>
            <td><?php echo $rows['civ1_test']; ?></td>
            <td><?php echo $rows['civ2_test']; ?></td>
            <td><?php echo $rows['civ_project']; ?></td>
            <td><?php echo $rows['civ_exam']; ?></td>
            <td><?php echo $rows['civ_total']; ?></td>
            <td><?php echo $rows['civ_grade']; ?></td>
            </tr>
            <tr>
           
            <tr>
            <td>Social Studies</td>
            <td><?php echo $rows['sos1_test']; ?></td>
            <td><?php echo $rows['sos2_test']; ?></td>
            <td><?php echo $rows['sos_project']; ?></td>
            <td><?php echo $rows['sos_exam']; ?></td>
            <td><?php echo $rows['sos_total']; ?></td>
            <td><?php echo $rows['sos_grade']; ?></td>
            </tr>
            <tr>
            <td>Q.R</td>
            <td><?php echo $rows['qr1_test']; ?></td>
            <td><?php echo $rows['qr2_test']; ?></td>
            <td><?php echo $rows['qr_project']; ?></td>
            <td><?php echo $rows['qr_exam']; ?></td>
            <td><?php echo $rows['qr_total']; ?></td>
            <td><?php echo $rows['qr_grade']; ?></td>
            </tr>
            <tr>
            <td>V.R</td>
            <td><?php echo $rows['vr1_test']; ?></td>
            <td><?php echo $rows['vr2_test']; ?></td>
            <td><?php echo $rows['vr_project']; ?></td>
            <td><?php echo $rows['vr_exam']; ?></td>
            <td><?php echo $rows['vr_total']; ?></td>
            <td><?php echo $rows['vr_grade']; ?></td>
            </tr>
            <tr>
            <td>Computer</td>
            <td><?php echo $rows['c1_test']; ?></td>
            <td><?php echo $rows['c2_test']; ?></td>
            <td><?php echo $rows['c_project']; ?></td>
            <td><?php echo $rows['c_exam']; ?></td>
            <td><?php echo $rows['c_total']; ?></td>
            <td><?php echo $rows['c_grade']; ?></td>
            </tr>
            <tr>
            <td>P.V.S</td>
            <td><?php echo $rows['pvs1_test']; ?></td>
            <td><?php echo $rows['pvs2_test']; ?></td>
            <td><?php echo $rows['pvs_project']; ?></td>
            <td><?php echo $rows['pvs_exam']; ?></td>
            <td><?php echo $rows['pvs_total']; ?></td>
            <td><?php echo $rows['pvs_grade']; ?></td>
            </tr>
            <table  cellspacing="0" border="3px">
                  <br>
        <tr>
            <th colspan="7">Summary of Result</th>
        </tr>
        
            <th>Total in class</th>
            <th>Total score</th>
            <th>Expected score</th>
            <th>Average score</th>
            <th>Position</th>
            <th>% attendance</th>
           
            <th>resumption date</th>
            
        </t>
         <tr>
            <td></td>
            <td><?php echo $rows['grand_total']; ?></td>
            <td>1100</td>
            <td><?php echo $rows['average'];?></td>
            <td><?php echo $rows['position'];?></td>
            <td></td>

            
            <td>29/4/2019</td>
           
            </tr>
      </table>
<br>
     <table cellspacing="0" border="3px">
            <th>Class teacher's remark</th>
            <th>Principal's remark</th>
            <th>Principal signature</th>
           
            
    </t>
         <tr>
            <td><?php echo $rows['remark']; ?></td>
            <td><?php echo $rows['remark2']; ?></td>
            <td><img src="../images/signs.png" alt=""></img></td>
        </tr>
    </t>
      </table>
      </div>



<?php
}
}
if ($resultCheckj2===0) {
   $sqlprekg="SELECT * FROM 3rd_term_prekg WHERE regnum = '$reg' AND password = '$pwd'";
$resultprekg=mysqli_query($conn, $sqlprekg);
$resultCheckprekg = mysqli_num_rows($resultprekg);
if($resultCheckprekg===1){
    while ( $rows=mysqli_fetch_assoc($resultprekg)) {
       ?>
<table cellspacing="0" border="3px" class="victory">
        <thead>
            <tr>
                <th>full name</th>
                <th>reg number</th>
                 <th>class</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $rows['full_name']; ?></td>
                <td><?php echo $rows['regnum']; ?></td>
                 <td><?php echo $rows['class']; ?></td>
            </tr>
            </tbody>
        </table>
      
    <br>
    <table class="victory">
        <tr>
            <th colspan="7">STUDENT'S RECORD</th>
        </tr>
        <t>
            <th>subject</th>
            <th>test-1</th>
            <th>test-2</th>
            <th>projects</th>
            <th>exam</th>
            <th>total</th>
            <th>grade</th>
        </t>
         <tr>
            <th>Number Work</th>
            <td><?php echo $rows['m1_test']; ?></td>
            <td><?php echo $rows['m2_test']; ?></td>
            <td><?php echo $rows['m_project']; ?></td>
            <td><?php echo $rows['m_exam']; ?></td>
            <td><?php echo $rows['m_total']; ?></td>
            <td><?php echo $rows['m_grade']; ?></td>
            </tr>
            <tr>
            <th>Letter Work</th>
            <td><?php echo $rows['en1_test']; ?></td>
            <td><?php echo $rows['en2_test']; ?></td>
            <td><?php echo $rows['en_project']; ?></td>
            <td><?php echo $rows['en_exam']; ?></td>
            <td><?php echo $rows['en_total']; ?></td>
            <td><?php echo $rows['en_grade']; ?></td>
            </tr>
            <tr>
            <th>Social Sudies</th>
            <td><?php echo $rows['sos1_test']; ?></td>
            <td><?php echo $rows['sos2_test']; ?></td>
            <td><?php echo $rows['sos_project']; ?></td>
            <td><?php echo $rows['sos_exam']; ?></td>
            <td><?php echo $rows['sos_total']; ?></td>
            <td><?php echo $rows['sos_grade']; ?></td>
            </tr>
            <tr>
            <th>Creative Art</th>
            <td><?php echo $rows['cca1_test']; ?></td>
            <td><?php echo $rows['cca2_test']; ?></td>
            <td><?php echo $rows['cca_project']; ?></td>
            <td><?php echo $rows['cca_exam']; ?></td>
            <td><?php echo $rows['cca_total']; ?></td>
            <td><?php echo $rows['cca_grade']; ?></td>
            </tr>
            <tr>
            <th>Health Science</th>
            <td><?php echo $rows['hs2_test']; ?></td>
            <td><?php echo $rows['hs2_test']; ?></td>
            <td><?php echo $rows['hs_project']; ?></td>
            <td><?php echo $rows['hs_exam']; ?></td>
            <td><?php echo $rows['hs_total']; ?></td>
            <td><?php echo $rows['hs_grade']; ?></td>
            </tr>
            <tr>
            <th>CRS</th>
            <td><?php echo $rows['crs1_test']; ?></td>
            <td><?php echo $rows['crs2_test']; ?></td>
            <td><?php echo $rows['crs_project']; ?></td>
            <td><?php echo $rows['crs_exam']; ?></td>
            <td><?php echo $rows['crs_total']; ?></td>
            <td><?php echo $rows['crs_grade']; ?></td>
            </tr>
            <tr>
            <th>Elementary Science</th>
            <td><?php echo $rows['elem1_test']; ?></td>
            <td><?php echo $rows['elem2_test']; ?></td>
            <td><?php echo $rows['elem_project']; ?></td>
            <td><?php echo $rows['elem_exam']; ?></td>
            <td><?php echo $rows['elem_total']; ?></td>
            <td><?php echo $rows['elem_grade']; ?></td>
            </tr>
            <tr>
            <th>Writing</th>
            <td><?php echo $rows['writing1_test']; ?></td>
            <td><?php echo $rows['writing2_test']; ?></td>
            <td><?php echo $rows['writing_project']; ?></td>
            <td><?php echo $rows['writing_exam']; ?></td>
            <td><?php echo $rows['writing_total']; ?></td>
            <td><?php echo $rows['writing_grade']; ?></td>
            </tr>
            <tr>
          
            <tr>
            <th>Poem</th>
            <td><?php echo $rows['poem_1']; ?></td>
            <td><?php echo $rows['poem_2']; ?></td>
            <td><?php echo $rows['poem_project']; ?></td>
            <td><?php echo $rows['poem_exam']; ?></td>
            <td><?php echo $rows['poem_total']; ?></td>
            <td><?php echo $rows['poem_grade']; ?></td>
            </tr>
             <th>Holiday Projects</th>
            <td></td>
            <td></td>
             <td></td>
            <td><?php echo $rows['holiday_project']; ?></td>
            <td><?php echo $rows['holiday_project']; ?></td>
            <td><?php echo $rows['holiday_grade']; ?></td>
            </tr>
        
        
     

        
 </table>
 <br>
  
  
 
            <!---2-column-Cards->Ceo image and login form -->
          

<div class="container-fluid">
     <h2 align="center">Psychomotor and Social skills</h2>
<div class="row padding">


    <div class="col-md-6">
       
          
             <table cellspacing="0" colspan="6" border="1px" class="victory">
               
            
                <t>
            
            <th>Skill</th>
            <th>Score</th>
            <th>Grade</th>
            </t>
               
           <tr>
            
            <th style="text-align: left;">Read along</th>
            <td><?php echo $rows['read_along']; ?></td>
            <td><?php echo $rows['read_along_grade']; ?></td>
          
            </tr>
            

             <tr>
            
             <th style="text-align: left;">Know name</th>
            <td><?php echo $rows['know_name']; ?></td>
            <td><?php echo $rows['know_name_grade']; ?></td>
         
            </tr>
            

           

            <tr>
           
          

        </table>
      
    </div>

<!---login form -->
    <div class="col-md-6">
      

                      
                     <table cellspacing="0" colspan="6" border="1px" class="victory">
               
            
                <t>
            
            <th>Skill</th>
            <th>Score</th>
            <th>Grade</th>
            </t>
                 <tr>
            
            <th style="text-align: left;">Read along</th>
            <td><?php echo $rows['read_along']; ?></td>
            <td><?php echo $rows['read_along_grade']; ?></td>
          
            </tr>
            

            <tr>
            <th style="text-align: left;">Does home work</th>
            <td><?php echo $rows['does_homwk']; ?></td>
            <td><?php echo $rows['does_homwk_grade']; ?></td>
            
            </tr>


           
        </table>
             
           
           
          
    </div>
</div>
</div>
<br>
<table cellspacing="0" border="3px" class="victory">
                 
        <tr>
            <th colspan="7">sumary of result</th>
        </tr>
        
            <th>Total in class</th>
            <th>Total score</th>
            <th>expected score</th>
            <th>Average score</th>
            <th>Position</th>
            <th>Attendance</th>
           <th>resumption date</th>
            
        </t>
         <tr>
            <td>35</td>
            <td><?php echo $rows['grand_total']; ?></td>
            <td>1000</td>
            <td><?php echo $rows['average']; ?></td>
            <td><?php echo $rows['position']; ?></td>
            <td><?php echo $rows['attendance']; ?></td>
            <td>9th Sept, 2019</td>
           
            </tr>
      </table>
<br>
 <table cellspacing="0" border="3px" class="victory">
            <th>Class teacher's remark</th>
            <th>Principal's remark</th>
            <th>Principal signature</th>
           
            
    </t>
         <tr>
            <td><?php echo $rows['remark']; ?></td>
            <td><?php echo $rows['remark2']; ?></td>
            <td><img src="signs.png" alt=""></img></td>
        </tr>
    </t>
      </table >     
       <?php
    }
}
if ($resultCheckprekg===0) {
   $sqlpry2="SELECT * FROM 3rd_term_primary2 WHERE regnum = '$reg' AND password = '$pwd'";
    $resultpry2=mysqli_query($conn, $sqlpry2);
    $resultCheckpry2 = mysqli_num_rows($resultpry2);
    if($resultCheckpry2===1){
        while ($rows=mysqli_fetch_assoc($resultpry2)) {
            ?>

<table cellspacing="0" border="3px">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Reg Number</th>
                 <th>Class</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $rows['full_name']; ?></td>
                <td><?php echo $rows['regnum']; ?></td>
                 <td><?php echo $rows['class']; ?></td>
            </tr>
            </tbody>
        </table>
        <br>
    <table  cellspacing="0" border="3px">
        <tr>
            <th colspan="7">STUDENT'S RECORD</th>
        </tr>
        <t>
            <th>subject</th>
            <th>test-1</th>
            <th>test-2</th>
            <th>projects</th>
            <th>exam</th>
            <th>total</th>
            <th>grade</th>
        </t>
         <tr>
            <td>Mathematics</td>
            <td><?php echo $rows['m1_test']; ?></td>
            <td><?php echo $rows['m2_test']; ?></td>
            <td><?php echo $rows['m_project']; ?></td>
            <td><?php echo $rows['m_exam']; ?></td>
            <td><?php echo $rows['m_total']; ?></td>
            <td><?php echo $rows['m_grade']; ?></td>
            </tr>
            <tr>
            <td>English Language</td>
            <td><?php echo $rows['en1_test']; ?></td>
            <td><?php echo $rows['en2_test']; ?></td>
            <td><?php echo $rows['en_project']; ?></td>
            <td><?php echo $rows['en_exam']; ?></td>
            <td><?php echo $rows['en_total']; ?></td>
            <td><?php echo $rows['en_grade']; ?></td>
            </tr>
            <tr>
            <td>Phonics</td>
            <td><?php echo $rows['phonics1_test']; ?></td>
            <td><?php echo $rows['phonics2_test']; ?></td>
            <td><?php echo $rows['phonics_project']; ?></td>
            <td><?php echo $rows['phonics_exam']; ?></td>
            <td><?php echo $rows['phonics_total']; ?></td>
            <td><?php echo $rows['phonics_grade']; ?></td>
            </tr>
            <tr>
            <td>Drawing</td>
            <td><?php echo $rows['draw1_test']; ?></td>
            <td><?php echo $rows['draw2_test']; ?></td>
            <td><?php echo $rows['draw_project']; ?></td>
            <td><?php echo $rows['draw_exam']; ?></td>
            <td><?php echo $rows['draw_total']; ?></td>
            <td><?php echo $rows['draw_grade']; ?></td>
            </tr>
            <tr>
            <td>Basic Science</td>
            <td><?php echo $rows['bas1_test']; ?></td>
            <td><?php echo $rows['bas2_test']; ?></td>
            <td><?php echo $rows['bas_project']; ?></td>
            <td><?php echo $rows['bas_exam']; ?></td>
            <td><?php echo $rows['bas_total']; ?></td>
            <td><?php echo $rows['bas_grade']; ?></td>
            </tr>
            <tr>
            <td>CCA</td>
            <td><?php echo $rows['cca1_test']; ?></td>
            <td><?php echo $rows['cca2_test']; ?></td>
            <td><?php echo $rows['cca_project']; ?></td>
            <td><?php echo $rows['cca_exam']; ?></td>
            <td><?php echo $rows['cca_total']; ?></td>
            <td><?php echo $rows['cca_grade']; ?></td>
            </tr>
            <tr>
            <td>C.R.S</td>
            <td><?php echo $rows['crs1_test']; ?></td>
            <td><?php echo $rows['crs2_test']; ?></td>
            <td><?php echo $rows['crs_project']; ?></td>
            <td><?php echo $rows['crs_exam']; ?></td>
            <td><?php echo $rows['crs_total']; ?></td>
            <td><?php echo $rows['crs_grade']; ?></td>
            </tr>
            <tr>
            <td>civic education</td>
            <td><?php echo $rows['civ1_test']; ?></td>
            <td><?php echo $rows['civ2_test']; ?></td>
            <td><?php echo $rows['civ_project']; ?></td>
            <td><?php echo $rows['civ_exam']; ?></td>
            <td><?php echo $rows['civ_total']; ?></td>
            <td><?php echo $rows['civ_grade']; ?></td>
            </tr>
            <tr>
           
            <tr>
            <td>Social Studies</td>
            <td><?php echo $rows['sos1_test']; ?></td>
            <td><?php echo $rows['sos2_test']; ?></td>
            <td><?php echo $rows['sos_project']; ?></td>
            <td><?php echo $rows['sos_exam']; ?></td>
            <td><?php echo $rows['sos_total']; ?></td>
            <td><?php echo $rows['sos_grade']; ?></td>
            </tr>
            <tr>
            <td>Q.R</td>
            <td><?php echo $rows['qr1_test']; ?></td>
            <td><?php echo $rows['qr2_test']; ?></td>
            <td><?php echo $rows['qr_project']; ?></td>
            <td><?php echo $rows['qr_exam']; ?></td>
            <td><?php echo $rows['qr_total']; ?></td>
            <td><?php echo $rows['qr_grade']; ?></td>
            </tr>
            <tr>
            <td>V.R</td>
            <td><?php echo $rows['vr1_test']; ?></td>
            <td><?php echo $rows['vr2_test']; ?></td>
            <td><?php echo $rows['vr_project']; ?></td>
            <td><?php echo $rows['vr_exam']; ?></td>
            <td><?php echo $rows['vr_total']; ?></td>
            <td><?php echo $rows['vr_grade']; ?></td>
            </tr>
            <tr>
            <td>Computer</td>
            <td><?php echo $rows['c1_test']; ?></td>
            <td><?php echo $rows['c2_test']; ?></td>
            <td><?php echo $rows['c_project']; ?></td>
            <td><?php echo $rows['c_exam']; ?></td>
            <td><?php echo $rows['c_total']; ?></td>
            <td><?php echo $rows['c_grade']; ?></td>
            </tr>
            <tr>
            <td>P.V.S</td>
            <td><?php echo $rows['pvs1_test']; ?></td>
            <td><?php echo $rows['pvs2_test']; ?></td>
            <td><?php echo $rows['pvs_project']; ?></td>
            <td><?php echo $rows['pvs_exam']; ?></td>
            <td><?php echo $rows['pvs_total']; ?></td>
            <td><?php echo $rows['pvs_grade']; ?></td>
            </tr>
            <tr>
             <td>Physical Health Education</td>
            <td><?php echo $rows['phe1_test']; ?></td>
            <td><?php echo $rows['phe2_test']; ?></td>
            <td><?php echo $rows['phe_project']; ?></td>
            <td><?php echo $rows['phe_exam']; ?></td>
            <td><?php echo $rows['phe_total']; ?></td>
            <td><?php echo $rows['phe_grade']; ?></td>
            </tr>
            <tr>
            <td>Writing</td>
            <td><?php echo $rows['writing1_test']; ?></td>
            <td><?php echo $rows['writing2_test']; ?></td>
            <td><?php echo $rows['writing_project']; ?></td>
            <td><?php echo $rows['writing_exam']; ?></td>
            <td><?php echo $rows['writing_total']; ?></td>
            <td><?php echo $rows['writing_grade']; ?></td>
            </tr>
            <td>French</td>
            <td><?php echo $rows['french_test1']; ?></td>
            <td><?php echo $rows['french_test1']; ?></td>
            <td><?php echo $rows['french_project']; ?></td>
            <td><?php echo $rows['french_exam']; ?></td>
            <td><?php echo $rows['french_total']; ?></td>
            <td><?php echo $rows['french_grade']; ?></td>
            </tr>
            <td>Holiday Projects</td>
            <td></td>
            <td></td>
             <td></td>
            <td><?php echo $rows['holiday_project']; ?></td>
            <td><?php echo $rows['holiday_project']; ?></td>
            <td><?php echo $rows['holiday_grade']; ?></td>
            </tr>
            <table  cellspacing="0" border="3px">
                  <br>
        <tr>
            <th colspan="7">Summary of Result</th>
        </tr>
        
            <th>Total in class</th>
            <th>Total score</th>
            <th>Expected score</th>
            <th>Average score</th>
            <th>Position</th>
            <th>Attendance</th>
           
            <th>resumption date</th>
            
        </t>
         <tr>
            <td>20</td>
            <td><?php echo $rows['grand_total']; ?></td>
            <td>1700</td>
            <td><?php echo $rows['average'];?></td>
            <td><?php echo $rows['position'];?></td>
            <td><?php echo $rows['attendance']; ?></td>

            
            <td>9th Sept, 2019</td>
           
            </tr>
      </table>
<br>
     <table cellspacing="0" border="3px">
            <th>Class teacher's remark</th>
            <th>Principal's remark</th>
            <th>Principal signature</th>
           
            
    </t>
         <tr>
            <td><?php echo $rows['remark']; ?></td>
            <td><?php echo $rows['remark2']; ?></td>
            <td><img src="signs.png" alt=""></img></td>
        </tr>
    </t>
      </table>
            <?php
        }
    }
    if ($resultCheckpry2===0) {
        $sqlnur2="SELECT * FROM 3rd_term_kg2 WHERE regnum = '$reg' AND password = '$pwd'";
    $resultnur2=mysqli_query($conn, $sqlnur2);
    $resultChecknur2 = mysqli_num_rows($resultnur2);
    if($resultChecknur2===1){
        while ($rows=mysqli_fetch_assoc($resultnur2)) {
           ?>

           <table cellspacing="0" border="3px">
        <thead>
            <tr>
                <th>Full name</th>
                <th>Reg number</th>
                 <th>Class</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $rows['full_name']; ?></td>
                <td><?php echo $rows['regnum']; ?></td>
                 <td><?php echo $rows['class']; ?></td>
            </tr>
            </tbody>
        </table>
        <br>
    <table  cellspacing="0" border="3px">
        <tr>
            <th colspan="7">student record</th>
        </tr>
        <t>
            <th>subject</th>
            <th>test-1</th>
            <th>test-2</th>
            <th>projects</th>
            <th>exam</th>
            <th>total</th>
            <th>grade</th>
        </t>
         <tr>
            <td>Mathematics</td>
            <td><?php echo $rows['m1_test']; ?></td>
            <td><?php echo $rows['m2_test']; ?></td>
            <td><?php echo $rows['m_project']; ?></td>
            <td><?php echo $rows['m_exam']; ?></td>
            <td><?php echo $rows['m_total']; ?></td>
            <td><?php echo $rows['m_grade']; ?></td>
            </tr>
            <tr>
            <td>English Language</td>
            <td><?php echo $rows['en1_test']; ?></td>
            <td><?php echo $rows['en2_test']; ?></td>
            <td><?php echo $rows['en_project']; ?></td>
            <td><?php echo $rows['en_exam']; ?></td>
            <td><?php echo $rows['en_total']; ?></td>
            <td><?php echo $rows['en_grade']; ?></td>
            </tr>
            <tr>
            <td>Phonics</td>
            <td><?php echo $rows['phonics1_test']; ?></td>
            <td><?php echo $rows['phonics2_test']; ?></td>
            <td><?php echo $rows['phonics_project']; ?></td>
            <td><?php echo $rows['phonics_exam']; ?></td>
            <td><?php echo $rows['phonics_total']; ?></td>
            <td><?php echo $rows['phonics_grade']; ?></td>
            </tr>
            <tr>
            <td>Drawing</td>
            <td><?php echo $rows['draw1_test']; ?></td>
            <td><?php echo $rows['draw2_test']; ?></td>
            <td><?php echo $rows['draw_project']; ?></td>
            <td><?php echo $rows['draw_exam']; ?></td>
            <td><?php echo $rows['draw_total']; ?></td>
            <td><?php echo $rows['draw_grade']; ?></td>
            </tr>
            <tr>
            <td>Elementary Sciience</td>
            <td><?php echo $rows['elementary1_test']; ?></td>
            <td><?php echo $rows['elementary2_test']; ?></td>
            <td><?php echo $rows['elementary_project']; ?></td>
            <td><?php echo $rows['elementary_exam']; ?></td>
            <td><?php echo $rows['elementary_total']; ?></td>
            <td><?php echo $rows['elementary_grade']; ?></td>
            </tr>
            <tr>
            <td>CCA</td>
            <td><?php echo $rows['cca1_test']; ?></td>
            <td><?php echo $rows['cca2_test']; ?></td>
            <td><?php echo $rows['cca_project']; ?></td>
            <td><?php echo $rows['cca_exam']; ?></td>
            <td><?php echo $rows['cca_total']; ?></td>
            <td><?php echo $rows['cca_grade']; ?></td>
            </tr>
            <tr>
            <td>C.R.S</td>
            <td><?php echo $rows['crs1_test']; ?></td>
            <td><?php echo $rows['crs2_test']; ?></td>
            <td><?php echo $rows['crs_project']; ?></td>
            <td><?php echo $rows['crs_exam']; ?></td>
            <td><?php echo $rows['crs_total']; ?></td>
            <td><?php echo $rows['crs_grade']; ?></td>
            </tr>
           
            
            <tr>
            <td>Social Studies</td>
            <td><?php echo $rows['sos1_test']; ?></td>
            <td><?php echo $rows['sos2_test']; ?></td>
            <td><?php echo $rows['sos_project']; ?></td>
            <td><?php echo $rows['sos_exam']; ?></td>
            <td><?php echo $rows['sos_total']; ?></td>
            <td><?php echo $rows['sos_grade']; ?></td>
            </tr>
            <tr>
            <td>Health Edu.</td>
            <td><?php echo $rows['HealthE1_test']; ?></td>
            <td><?php echo $rows['HealthE2_test']; ?></td>
            <td><?php echo $rows['HealthE_project']; ?></td>
            <td><?php echo $rows['Jehovah']; ?></td>
            <td><?php echo $rows['HealthE_total']; ?></td>
            <td><?php echo $rows['HealthE_grade']; ?></td>
            </tr>
            <tr>
  <tr>
            <td>Writing</td>
            <td><?php echo $rows['writing1_test']; ?></td>
            <td><?php echo $rows['writing2_test']; ?></td>
            <td><?php echo $rows['writing_project']; ?></td>
            <td><?php echo $rows['writing_exam']; ?></td>
            <td><?php echo $rows['writing_total']; ?></td>
            <td><?php echo $rows['writing_grade']; ?></td>
            </tr>
            <tr>
           
            <tr>
            <td>Computer</td>
            <td><?php echo $rows['compter1_test']; ?></td>
            <td><?php echo $rows['computer2_test']; ?></td>
            <td><?php echo $rows['computer_project']; ?></td>
            <td><?php echo $rows['computer_exam']; ?></td>
            <td><?php echo $rows['computer_total']; ?></td>
            <td><?php echo $rows['computer_grade']; ?></td>
            </tr>

            
           

       

          

            <tr>
            <td>Poem</td>
            <td><?php echo $rows['poem_1']; ?></td>
            <td><?php echo $rows['poem_2']; ?></td>
            <td><?php echo $rows['poem_project']; ?></td>
            <td><?php echo $rows['poem_exam']; ?></td>
            <td><?php echo $rows['poem_total']; ?></td>
            <td><?php echo $rows['poem_grade']; ?></td>
            </tr>
             <td>Holiday Projects</td>
            <td></td>
            <td></td>
             <td></td>
            <td><?php echo $rows['holiday_project']; ?></td>
            <td><?php echo $rows['holiday_project']; ?></td>
            <td><?php echo $rows['holiday_grade']; ?></td>
            </tr>

            <table cellspacing="0" border="3px">
                  <br>
        <tr>
            <th colspan="7">sumary of result</th>
        </tr>
        
            <th>Total in class</th>
            <th>Total score</th>
            <th>expected score</th>
            <th>Average score</th>
            <th>Position</th>
            <th>% attendance</th>
           
            <th>resumption date</th>
            
        </t>
         <tr>
            <td>25</td>
            <td><?php echo $rows['grand_total']; ?></td>
            <td>1200</td>
            <td><?php echo $rows['average']; ?></td>
            <td><?php echo $rows['position']; ?></td>
             <td><?php echo $rows['attendance']; ?></td>

            
            <td>9th Sept, 2019</td>
           
            </tr>
      </table>
<br>
    <table cellspacing="0" border="3px">
            <th>Class teacher's remark</th>
            <th>Principal's remark</th>
            <th>Principal signature</th>
           
            
    </t>
         <tr>
            <td><?php echo $rows['remark']; ?></td>
            <td><?php echo $rows['remark2']; ?></td>
            <td><img src="signs.png" alt=""></img></td>
        </tr>
    </t>
      </table>
      </div>
           <?php
        }
    }
    if ($resultChecknur2===0) {
       $sqlpry3="SELECT * FROM 3rd_term_primary3 WHERE regnum = '$reg' AND password = '$pwd'";
    $resultpry3=mysqli_query($conn, $sqlpry3);
    $resultCheckpry3 = mysqli_num_rows($resultpry3);
    if($resultCheckpry3===1){
        while ($rows=mysqli_fetch_assoc($resultpry3)) {
            ?>

            <table cellspacing="0" border="3px">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Reg Number</th>
                 <th>Class</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $rows['full_name']; ?></td>
                <td><?php echo $rows['regnum']; ?></td>
                 <td><?php echo $rows['class']; ?></td>
            </tr>
            </tbody>
        </table>
        <br>
    <table  cellspacing="0" border="3px">
        <tr>
            <th colspan="7">STUDENT'S RECORD</th>
        </tr>
        <t>
            <th>subject</th>
            <th>test-1</th>
            <th>test-2</th>
            <th>projects</th>
            <th>exam</th>
            <th>total</th>
            <th>grade</th>
        </t>
         <tr>
            <td>Mathematics</td>
            <td><?php echo $rows['m1_test']; ?></td>
            <td><?php echo $rows['m2_test']; ?></td>
            <td><?php echo $rows['m_project']; ?></td>
            <td><?php echo $rows['m_exam']; ?></td>
            <td><?php echo $rows['m_total']; ?></td>
            <td><?php echo $rows['m_grade']; ?></td>
            </tr>
            <tr>
            <td>English Language</td>
            <td><?php echo $rows['en1_test']; ?></td>
            <td><?php echo $rows['en2_test']; ?></td>
            <td><?php echo $rows['en_project']; ?></td>
            <td><?php echo $rows['en_exam']; ?></td>
            <td><?php echo $rows['en_total']; ?></td>
            <td><?php echo $rows['en_grade']; ?></td>
            </tr>
            <tr>
            <td>Phonics</td>
            <td><?php echo $rows['phonics1_test']; ?></td>
            <td><?php echo $rows['phonics2_test']; ?></td>
            <td><?php echo $rows['phonics_project']; ?></td>
            <td><?php echo $rows['phonics_exam']; ?></td>
            <td><?php echo $rows['phonics_total']; ?></td>
            <td><?php echo $rows['phonics_grade']; ?></td>
            </tr>
            <tr>
            <td>Drawing</td>
            <td><?php echo $rows['draw1_test']; ?></td>
            <td><?php echo $rows['draw2_test']; ?></td>
            <td><?php echo $rows['draw_project']; ?></td>
            <td><?php echo $rows['draw_exam']; ?></td>
            <td><?php echo $rows['draw_total']; ?></td>
            <td><?php echo $rows['draw_grade']; ?></td>
            </tr>
            <tr>
            <td>Basic Science</td>
            <td><?php echo $rows['bas1_test']; ?></td>
            <td><?php echo $rows['bas2_test']; ?></td>
            <td><?php echo $rows['bas_project']; ?></td>
            <td><?php echo $rows['bas_exam']; ?></td>
            <td><?php echo $rows['bas_total']; ?></td>
            <td><?php echo $rows['bas_grade']; ?></td>
            </tr>
            <tr>
            <td>CCA</td>
            <td><?php echo $rows['cca1_test']; ?></td>
            <td><?php echo $rows['cca2_test']; ?></td>
            <td><?php echo $rows['cca_project']; ?></td>
            <td><?php echo $rows['cca_exam']; ?></td>
            <td><?php echo $rows['cca_total']; ?></td>
            <td><?php echo $rows['cca_grade']; ?></td>
            </tr>
            <tr>
            <td>C.R.S</td>
            <td><?php echo $rows['crs1_test']; ?></td>
            <td><?php echo $rows['crs2_test']; ?></td>
            <td><?php echo $rows['crs_project']; ?></td>
            <td><?php echo $rows['crs_exam']; ?></td>
            <td><?php echo $rows['crs_total']; ?></td>
            <td><?php echo $rows['crs_grade']; ?></td>
            </tr>
            <tr>
            <td>civic education</td>
            <td><?php echo $rows['civ1_test']; ?></td>
            <td><?php echo $rows['civ2_test']; ?></td>
            <td><?php echo $rows['civ_project']; ?></td>
            <td><?php echo $rows['civ_exam']; ?></td>
            <td><?php echo $rows['civ_total']; ?></td>
            <td><?php echo $rows['civ_grade']; ?></td>
            </tr>
            <tr>
           
            <tr>
            <td>Social Studies</td>
            <td><?php echo $rows['sos1_test']; ?></td>
            <td><?php echo $rows['sos2_test']; ?></td>
            <td><?php echo $rows['sos_project']; ?></td>
            <td><?php echo $rows['sos_exam']; ?></td>
            <td><?php echo $rows['sos_total']; ?></td>
            <td><?php echo $rows['sos_grade']; ?></td>
            </tr>
            <tr>
            <td>Q.R</td>
            <td><?php echo $rows['qr1_test']; ?></td>
            <td><?php echo $rows['qr2_test']; ?></td>
            <td><?php echo $rows['qr_project']; ?></td>
            <td><?php echo $rows['qr_exam']; ?></td>
            <td><?php echo $rows['qr_total']; ?></td>
            <td><?php echo $rows['qr_grade']; ?></td>
            </tr>
            <tr>
            <td>V.R</td>
            <td><?php echo $rows['vr1_test']; ?></td>
            <td><?php echo $rows['vr2_test']; ?></td>
            <td><?php echo $rows['vr_project']; ?></td>
            <td><?php echo $rows['vr_exam']; ?></td>
            <td><?php echo $rows['vr_total']; ?></td>
            <td><?php echo $rows['vr_grade']; ?></td>
            </tr>
            <tr>
            <td>Computer</td>
            <td><?php echo $rows['c1_test']; ?></td>
            <td><?php echo $rows['c2_test']; ?></td>
            <td><?php echo $rows['c_project']; ?></td>
            <td><?php echo $rows['c_exam']; ?></td>
            <td><?php echo $rows['c_total']; ?></td>
            <td><?php echo $rows['c_grade']; ?></td>
            </tr>
            <tr>
            <td>P.V.S</td>
            <td><?php echo $rows['pvs1_test']; ?></td>
            <td><?php echo $rows['pvs2_test']; ?></td>
            <td><?php echo $rows['pvs_project']; ?></td>
            <td><?php echo $rows['pvs_exam']; ?></td>
            <td><?php echo $rows['pvs_total']; ?></td>
            <td><?php echo $rows['pvs_grade']; ?></td>
            </tr>
            <tr>
             <td>Physical Health Education</td>
            <td><?php echo $rows['phe1_test']; ?></td>
            <td><?php echo $rows['phe2_test']; ?></td>
            <td><?php echo $rows['phe_project']; ?></td>
            <td><?php echo $rows['phe_exam']; ?></td>
            <td><?php echo $rows['phe_total']; ?></td>
            <td><?php echo $rows['phe_grade']; ?></td>
            </tr>
            <tr>
            <td>Writing</td>
            <td><?php echo $rows['writing1_test']; ?></td>
            <td><?php echo $rows['writing2_test']; ?></td>
            <td><?php echo $rows['writing_project']; ?></td>
            <td><?php echo $rows['writing_exam']; ?></td>
            <td><?php echo $rows['writing_total']; ?></td>
            <td><?php echo $rows['writing_grade']; ?></td>
            </tr>
            <td>French</td>
            <td><?php echo $rows['french_test1']; ?></td>
            <td><?php echo $rows['french_test1']; ?></td>
            <td><?php echo $rows['french_project']; ?></td>
            <td><?php echo $rows['french_exam']; ?></td>
            <td><?php echo $rows['french_total']; ?></td>
            <td><?php echo $rows['french_grade']; ?></td>
            </tr>
            <td>Holiday Projects</td>
            <td></td>
            <td></td>
             <td></td>
            <td><?php echo $rows['holiday_project']; ?></td>
            <td><?php echo $rows['holiday_project']; ?></td>
            <td><?php echo $rows['holiday_grade']; ?></td>
            </tr>
            <table  cellspacing="0" border="3px">
                  <br>
        <tr>
            <th colspan="7">Summary of Result</th>
        </tr>
        
            <th>Total in class</th>
            <th>Total score</th>
            <th>Expected score</th>
            <th>Average score</th>
            <th>Position</th>
            <th>% attendance</th>
           
            <th>resumption date</th>
            
        </t>
         <tr>
            <td>20</td>
            <td><?php echo $rows['grand_total']; ?></td>
            <td>1700</td>
            <td><?php echo $rows['average'];?></td>
            <td><?php echo $rows['position'];?></td>
            <td><?php echo $rows['attendance'];?></td>

            
            <td>9th September 2019</td>
           
            </tr>
      </table>
<br>
     <table cellspacing="0" border="3px">
            <th>Class teacher's remark</th>
            <th>Principal's remark</th>
            <th>Principal signature</th>
           
            
    </t>
         <tr>
            <td><?php echo $rows['remark']; ?></td>
            <td><?php echo $rows['remark2']; ?></td>
            <td><img src="signs.png" alt=""></img></td>
        </tr>
    </t>
      </table>
            <?php
        }
    }
       if ($resultCheckpry3===0) {
        $sqlJ1 = "SELECT * FROM 3rd_term_jss1 WHERE regnum ='$reg' AND password = '$pwd'";
        $resultJ1 = mysqli_query($conn, $sqlJ1);
        $resultCheckJ1 = mysqli_num_rows($resultJ1);
        if ($resultCheckJ1 ===1) {
            while ($rows = mysqli_fetch_assoc($resultJ1)) {
                ?>
                 
      
            <table cellspacing="0" border="3px">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Reg Number</th>
                 <th>Class</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $rows['full_name']; ?></td>
                <td><?php echo $rows['regnum']; ?></td>
                 <td><?php echo $rows['class']; ?></td>
            </tr>
            </tbody>
        </table>
        <br>
    <table  cellspacing="0" border="3px">
        <tr>
            <th colspan="7">STUDENT'S RECORD</th>
        </tr>
        <t>
            <th>subject</th>
            <th>test-1</th>
            <th>test-2</th>
            <th>projects</th>
            <th>exam</th>
            <th>total</th>
            <th>grade</th>
        </t>
         <tr>
            <td>Mathematics</td>
            <td><?php echo $rows['m1_test']; ?></td>
            <td><?php echo $rows['m2_test']; ?></td>
            <td><?php echo $rows['m_project']; ?></td>
            <td><?php echo $rows['m_exam']; ?></td>
            <td><?php echo $rows['m_total']; ?></td>
            <td><?php echo $rows['m_grade']; ?></td>
            </tr>
            <tr>
            <td>English Language</td>
            <td><?php echo $rows['en1_test']; ?></td>
            <td><?php echo $rows['en2_test']; ?></td>
            <td><?php echo $rows['en_project']; ?></td>
            <td><?php echo $rows['en_exam']; ?></td>
            <td><?php echo $rows['en_total']; ?></td>
            <td><?php echo $rows['en_grade']; ?></td>
            </tr>
            <tr>
            <td>Basic Technology</td>
            <td><?php echo $rows['bat1_test']; ?></td>
            <td><?php echo $rows['bat2_test']; ?></td>
            <td><?php echo $rows['bat_project']; ?></td>
            <td><?php echo $rows['bat_exam']; ?></td>
            <td><?php echo $rows['bat_total']; ?></td>
            <td><?php echo $rows['bat_grade']; ?></td>
            </tr>
            <tr>
            <td>Business Studies</td>
            <td><?php echo $rows['bus1_test']; ?></td>
            <td><?php echo $rows['bus2_test']; ?></td>
            <td><?php echo $rows['bus_project']; ?></td>
            <td><?php echo $rows['bus_exam']; ?></td>
            <td><?php echo $rows['bus_total']; ?></td>
            <td><?php echo $rows['bus_grade']; ?></td>
            </tr>
            <tr>
            <td>Basic Science</td>
            <td><?php echo $rows['bas1_test']; ?></td>
            <td><?php echo $rows['bas2_test']; ?></td>
            <td><?php echo $rows['bas_project']; ?></td>
            <td><?php echo $rows['bas_exam']; ?></td>
            <td><?php echo $rows['bas_total']; ?></td>
            <td><?php echo $rows['bas_grade']; ?></td>
            </tr>
        
            <tr>
            <td>C.R.S</td>
            <td><?php echo $rows['crs1_test']; ?></td>
            <td><?php echo $rows['crs2_test']; ?></td>
            <td><?php echo $rows['crs_project']; ?></td>
            <td><?php echo $rows['crs_exam']; ?></td>
            <td><?php echo $rows['crs_total']; ?></td>
            <td><?php echo $rows['crs_grade']; ?></td>
            </tr>
            <tr>
            <td>civic education</td>
            <td><?php echo $rows['civ1_test']; ?></td>
            <td><?php echo $rows['civ2_test']; ?></td>
            <td><?php echo $rows['civ_project']; ?></td>
            <td><?php echo $rows['civ_exam']; ?></td>
            <td><?php echo $rows['civ_total']; ?></td>
            <td><?php echo $rows['civ_grade']; ?></td>
            </tr>
           
            <tr>
            <td>Social Studies</td>
            <td><?php echo $rows['sos1_test']; ?></td>
            <td><?php echo $rows['sos2_test']; ?></td>
            <td><?php echo $rows['sos_project']; ?></td>
            <td><?php echo $rows['sos_exam']; ?></td>
            <td><?php echo $rows['sos_total']; ?></td>
            <td><?php echo $rows['sos_grade']; ?></td>
            </tr>
            <tr>
            <td>Agric. Science</td>
            <td><?php echo $rows['agr1_test']; ?></td>
            <td><?php echo $rows['agr2_test']; ?></td>
            <td><?php echo $rows['agr_project']; ?></td>
            <td><?php echo $rows['agr_exam']; ?></td>
            <td><?php echo $rows['agr_total']; ?></td>
            <td><?php echo $rows['agr_grade']; ?></td>
            </tr>
            <tr>
           
            <tr>
            <td>Computer Science</td>
            <td><?php echo $rows['c1_test']; ?></td>
            <td><?php echo $rows['c2_test']; ?></td>
            <td><?php echo $rows['c_project']; ?></td>
            <td><?php echo $rows['c_exam']; ?></td>
            <td><?php echo $rows['c_total']; ?></td>
            <td><?php echo $rows['c_grade']; ?></td>
            </tr>
            <tr>
            <td>Home Economics</td>
            <td><?php echo $rows['Heco1_test']; ?></td>
            <td><?php echo $rows['Heco2_test']; ?></td>
            <td><?php echo $rows['Heco_project']; ?></td>
            <td><?php echo $rows['Heco_exam']; ?></td>
            <td><?php echo $rows['Heco_total']; ?></td>
            <td><?php echo $rows['Heco_grade']; ?></td>
            </tr>

             <tr>
            <td>Physical Health Education</td>
            <td><?php echo $rows['phe1_test']; ?></td>
            <td><?php echo $rows['phe2_test']; ?></td>
            <td><?php echo $rows['phe_project']; ?></td>
            <td><?php echo $rows['phe_exam']; ?></td>
            <td><?php echo $rows['phe_total']; ?></td>
            <td><?php echo $rows['phe_grade']; ?></td>
            </tr>

            <tr>
            <td>French</td>
            <td><?php echo $rows['french_test1']; ?></td>
            <td><?php echo $rows['french_test2']; ?></td>
            <td><?php echo $rows['french_project']; ?></td>
            <td><?php echo $rows['french_exam']; ?></td>
            <td><?php echo $rows['french_total']; ?></td>
            <td><?php echo $rows['french_grade']; ?></td>
            </tr>
           <td>Holiday Projects</td>
            <td></td>
            <td></td>
             <td></td>
            <td><?php echo $rows['holiday_project']; ?></td>
            <td><?php echo $rows['holiday_project']; ?></td>
            <td><?php echo $rows['holiday_grade']; ?></td>
            </tr>

            <table  cellspacing="0" border="3px">
                  <br>
        <tr>
            <th colspan="7">Summary of Result</th>
        </tr>
        
            <th>Total in class</th>
            <th>Total score</th>
            <th>Expected score</th>
            <th>Average score</th>
            <th>Position</th>
            <th>% attendance</th>
           
            <th>resumption date</th>
            
        </t>
         <tr>
            <td>25</td>
            <td><?php echo $rows['grand_total']; ?></td>
            <td>1200</td>
            <td><?php echo $rows['average'];?></td>
            <td><?php echo $rows['position'];?></td>
            <td><?php echo $rows['attendance']; ?></td>

            
            <td>9th Sept. 2019</td>
           
            </tr>
      </table>
<br>
     <table cellspacing="0" border="3px">
            <th>Class teacher's remark</th>
            <th>Principal's remark</th>
            <th>Principal signature</th>
           
            
    </t>
         <tr>
            <td><?php echo $rows['remark']; ?></td>
            <td><?php echo $rows['remark2']; ?></td>
            <td><img src="../images/signs.png" alt=""></img></td>
        </tr>
    </t>
      </table>
    <?php
    }
}

       if ($resultCheckJ1===0) {
        $sqlJ2 = "SELECT * FROM 3rd_term_jss2 WHERE regnum ='$reg' AND password = '$pwd'";
        $resultJ2 = mysqli_query($conn, $sqlJ2);
        $resultCheckJ2 = mysqli_num_rows($resultJ2);
        if ($resultCheckJ2 ===1) {
            while ($rows = mysqli_fetch_assoc($resultJ2)) {
                ?>
                 
      
            <table cellspacing="0" border="3px">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Reg Number</th>
                 <th>Class</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $rows['full_name']; ?></td>
                <td><?php echo $rows['regnum']; ?></td>
                 <td><?php echo $rows['class']; ?></td>
            </tr>
            </tbody>
        </table>
        <br>
    <table  cellspacing="0" border="3px">
        <tr>
            <th colspan="7">STUDENT'S RECORD</th>
        </tr>
        <t>
            <th>subject</th>
            <th>test-1</th>
            <th>test-2</th>
            <th>projects</th>
            <th>exam</th>
            <th>total</th>
            <th>grade</th>
        </t>
         <tr>
            <td>Mathematics</td>
            <td><?php echo $rows['m1_test']; ?></td>
            <td><?php echo $rows['m2_test']; ?></td>
            <td><?php echo $rows['m_project']; ?></td>
            <td><?php echo $rows['m_exam']; ?></td>
            <td><?php echo $rows['m_total']; ?></td>
            <td><?php echo $rows['m_grade']; ?></td>
            </tr>
            <tr>
            <td>English Language</td>
            <td><?php echo $rows['en1_test']; ?></td>
            <td><?php echo $rows['en2_test']; ?></td>
            <td><?php echo $rows['en_project']; ?></td>
            <td><?php echo $rows['en_exam']; ?></td>
            <td><?php echo $rows['en_total']; ?></td>
            <td><?php echo $rows['en_grade']; ?></td>
            </tr>
            <tr>
            <td>Basic Technology</td>
            <td><?php echo $rows['bat1_test']; ?></td>
            <td><?php echo $rows['bat2_test']; ?></td>
            <td><?php echo $rows['bat_project']; ?></td>
            <td><?php echo $rows['bat_exam']; ?></td>
            <td><?php echo $rows['bat_total']; ?></td>
            <td><?php echo $rows['bat_grade']; ?></td>
            </tr>
            <tr>
            <td>Business Studies</td>
            <td><?php echo $rows['bus1_test']; ?></td>
            <td><?php echo $rows['bus2_test']; ?></td>
            <td><?php echo $rows['bus_project']; ?></td>
            <td><?php echo $rows['bus_exam']; ?></td>
            <td><?php echo $rows['bus_total']; ?></td>
            <td><?php echo $rows['bus_grade']; ?></td>
            </tr>
            <tr>
            <td>Basic Science</td>
            <td><?php echo $rows['bas1_crk']; ?></td>
            <td><?php echo $rows['bas2_test']; ?></td>
            <td><?php echo $rows['bas_project']; ?></td>
            <td><?php echo $rows['bas_exam']; ?></td>
            <td><?php echo $rows['bas_total']; ?></td>
            <td><?php echo $rows['bas_grade']; ?></td>
            </tr>
        
            <tr>
            <td>C.R.S</td>
            <td><?php echo $rows['crs1_test']; ?></td>
            <td><?php echo $rows['crs2_test']; ?></td>
            <td><?php echo $rows['crs_project']; ?></td>
            <td><?php echo $rows['crs_exam']; ?></td>
            <td><?php echo $rows['crs_total']; ?></td>
            <td><?php echo $rows['crs_grade']; ?></td>
            </tr>
            <tr>
            <td>civic education</td>
            <td><?php echo $rows['civ1_test']; ?></td>
            <td><?php echo $rows['civ2_test']; ?></td>
            <td><?php echo $rows['civ_project']; ?></td>
            <td><?php echo $rows['civ_exam']; ?></td>
            <td><?php echo $rows['civ_total']; ?></td>
            <td><?php echo $rows['civ_grade']; ?></td>
            </tr>
           
            <tr>
            <td>Social Studies</td>
            <td><?php echo $rows['sos1_test']; ?></td>
            <td><?php echo $rows['sos2_test']; ?></td>
            <td><?php echo $rows['sos_project']; ?></td>
            <td><?php echo $rows['sos_exam']; ?></td>
            <td><?php echo $rows['sos_total']; ?></td>
            <td><?php echo $rows['sos_grade']; ?></td>
            </tr>
            <tr>
            <td>Agric. Science</td>
            <td><?php echo $rows['agr1_test']; ?></td>
            <td><?php echo $rows['agr2_test']; ?></td>
            <td><?php echo $rows['agr_project']; ?></td>
            <td><?php echo $rows['agr_exam']; ?></td>
            <td><?php echo $rows['agr_total']; ?></td>
            <td><?php echo $rows['agr_grade']; ?></td>
            </tr>
            <tr>
           
            <tr>
            <td>Computer Science</td>
            <td><?php echo $rows['c1_test']; ?></td>
            <td><?php echo $rows['c2_test']; ?></td>
            <td><?php echo $rows['c_project']; ?></td>
            <td><?php echo $rows['c_exam']; ?></td>
            <td><?php echo $rows['c_total']; ?></td>
            <td><?php echo $rows['c_grade']; ?></td>
            </tr>
            <tr>
            <td>Home Economics</td>
            <td><?php echo $rows['Heco1_test']; ?></td>
            <td><?php echo $rows['Heco2_test']; ?></td>
            <td><?php echo $rows['Heco_project']; ?></td>
            <td><?php echo $rows['Heco_exam']; ?></td>
            <td><?php echo $rows['Heco_total']; ?></td>
            <td><?php echo $rows['Heco_grade']; ?></td>
            </tr>
            <tr>
            <td>Physical Health Education</td>
            <td><?php echo $rows['phe1_test']; ?></td>
            <td><?php echo $rows['phe2_test']; ?></td>
            <td><?php echo $rows['phe_project']; ?></td>
            <td><?php echo $rows['phe_exam']; ?></td>
            <td><?php echo $rows['phe_total']; ?></td>
            <td><?php echo $rows['phe_grade']; ?></td>
            </tr>

            <tr>
            <td>French</td>
            <td><?php echo $rows['french_test1']; ?></td>
            <td><?php echo $rows['french_test2']; ?></td>
            <td><?php echo $rows['french_project']; ?></td>
            <td><?php echo $rows['french_exam']; ?></td>
            <td><?php echo $rows['french_total']; ?></td>
            <td><?php echo $rows['french_grade']; ?></td>
            </tr>

            <tr>
            <td>Holiday Project</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><?php echo $rows['holiday_project']; ?></td>
            <td><?php echo $rows['holiday_grade']; ?></td>
            </tr>
          

            <table  cellspacing="0" border="3px">
                  <br>
        <tr>
            <th colspan="7">Summary of Result</th>
        </tr>
        
            <th>Total in class</th>
            <th>Total score</th>
            <th>Expected score</th>
            <th>Average score</th>
            <th>Position</th>
            <th>% attendance</th>
           
            <th>resumption date</th>
            
        </t>
         <tr>
            <td>25</td>
            <td><?php echo $rows['grand_total']; ?></td>
            <td>1100</td>
            <td><?php echo $rows['average'];?></td>
            <td><?php echo $rows['position'];?></td>
            <td></td>

            
            <td>29/4/2019</td>
           
            </tr>
      </table>
<br>
     <table cellspacing="0" border="3px">
            <th>Class teacher's remark</th>
            <th>Principal's remark</th>
            <th>Principal signature</th>
           
            
    </t>
         <tr>
            <td><?php echo $rows['remark']; ?></td>
            <td><?php echo $rows['remark2']; ?></td>
            <td><img src="../images/signs.png" alt=""></img></td>
        </tr>
    </t>
      </table>

      <?php
  }
}
if ($resultCheckJ2===0) {
        $sqlJ3 = "SELECT * FROM jss3live WHERE regnum ='$reg' AND password = '$pwd'";
        $resultJ3 = mysqli_query($conn, $sqlJ3);
        $resultCheckJ3 = mysqli_num_rows($resultJ3);
        if ($resultCheckJ3 ===1) {
            while ($rows = mysqli_fetch_assoc($resultJ3)) {
                ?>
                 
      
            <table cellspacing="0" border="3px">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Reg Number</th>
                 <th>Class</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $rows['full_name']; ?></td>
                <td><?php echo $rows['regnum']; ?></td>
                 <td><?php echo $rows['class']; ?></td>
            </tr>
            </tbody>
        </table>
        <br>
    <table  cellspacing="0" border="3px">
        <tr>
            <th colspan="7">STUDENT'S RECORD</th>
        </tr>
        <t>
            <th>subject</th>
            <th>test-1</th>
            <th>test-2</th>
            <th>projects</th>
            <th>exam</th>
            <th>total</th>
            <th>grade</th>
        </t>
         <tr>
            <td>Mathematics</td>
            <td><?php echo $rows['m1_test']; ?></td>
            <td><?php echo $rows['m2_test']; ?></td>
            <td><?php echo $rows['m_project']; ?></td>
            <td><?php echo $rows['m_exam']; ?></td>
            <td><?php echo $rows['m_total']; ?></td>
            <td><?php echo $rows['m_grade']; ?></td>
            </tr>
            <tr>
            <td>English Language</td>
            <td><?php echo $rows['en1_test']; ?></td>
            <td><?php echo $rows['en2_test']; ?></td>
            <td><?php echo $rows['en_project']; ?></td>
            <td><?php echo $rows['en_exam']; ?></td>
            <td><?php echo $rows['en_total']; ?></td>
            <td><?php echo $rows['en_grade']; ?></td>
            </tr>
            <tr>
            <td>Basic Technology</td>
            <td><?php echo $rows['bat1_test']; ?></td>
            <td><?php echo $rows['bat2_test']; ?></td>
            <td><?php echo $rows['bat_project']; ?></td>
            <td><?php echo $rows['bat_exam']; ?></td>
            <td><?php echo $rows['bat_total']; ?></td>
            <td><?php echo $rows['bat_grade']; ?></td>
            </tr>
            <tr>
            <td>Business Studies</td>
            <td><?php echo $rows['bus1_test']; ?></td>
            <td><?php echo $rows['bus2_test']; ?></td>
            <td><?php echo $rows['bus_project']; ?></td>
            <td><?php echo $rows['bus_exam']; ?></td>
            <td><?php echo $rows['bus_total']; ?></td>
            <td><?php echo $rows['bus_grade']; ?></td>
            </tr>
            <tr>
            <td>Basic Science</td>
            <td><?php echo $rows['bas1_crk']; ?></td>
            <td><?php echo $rows['bas2_test']; ?></td>
            <td><?php echo $rows['bas_project']; ?></td>
            <td><?php echo $rows['bas_exam']; ?></td>
            <td><?php echo $rows['bas_total']; ?></td>
            <td><?php echo $rows['bas_grade']; ?></td>
            </tr>
        
            <tr>
            <td>C.R.S</td>
            <td><?php echo $rows['crs1_test']; ?></td>
            <td><?php echo $rows['crs2_test']; ?></td>
            <td><?php echo $rows['crs_project']; ?></td>
            <td><?php echo $rows['crs_exam']; ?></td>
            <td><?php echo $rows['crs_total']; ?></td>
            <td><?php echo $rows['crs_grade']; ?></td>
            </tr>


            <tr>
            <td>PHE</td>
            <td><?php echo $rows['phe1_test']; ?></td>
            <td><?php echo $rows['phe2_test']; ?></td>
            <td><?php echo $rows['phe_project']; ?></td>
            <td><?php echo $rows['phe_exam']; ?></td>
            <td><?php echo $rows['phe_total']; ?></td>
            <td><?php echo $rows['phe_grade']; ?></td>
            </tr>
            <tr>
            <td>civic education</td>
            <td><?php echo $rows['civ1_test']; ?></td>
            <td><?php echo $rows['civ2_test']; ?></td>
            <td><?php echo $rows['civ_project']; ?></td>
            <td><?php echo $rows['civ_exam']; ?></td>
            <td><?php echo $rows['civ_total']; ?></td>
            <td><?php echo $rows['civ_grade']; ?></td>
            </tr>
           
            <tr>
            <td>Social Studies</td>
            <td><?php echo $rows['sos1_test']; ?></td>
            <td><?php echo $rows['sos2_test']; ?></td>
            <td><?php echo $rows['sos_project']; ?></td>
            <td><?php echo $rows['sos_exam']; ?></td>
            <td><?php echo $rows['sos_total']; ?></td>
            <td><?php echo $rows['sos_grade']; ?></td>
            </tr>
            <tr>
            <td>Agric. Science</td>
            <td><?php echo $rows['agr1_test']; ?></td>
            <td><?php echo $rows['agr2_test']; ?></td>
            <td><?php echo $rows['agr_project']; ?></td>
            <td><?php echo $rows['agr_exam']; ?></td>
            <td><?php echo $rows['agr_total']; ?></td>
            <td><?php echo $rows['agr_grade']; ?></td>
            </tr>
            <tr>
           
            <tr>
            <td>Computer Science</td>
            <td><?php echo $rows['c1_test']; ?></td>
            <td><?php echo $rows['c2_test']; ?></td>
            <td><?php echo $rows['c_project']; ?></td>
            <td><?php echo $rows['c_exam']; ?></td>
            <td><?php echo $rows['c_total']; ?></td>
            <td><?php echo $rows['c_grade']; ?></td>
            </tr>
            <tr>
            <td>Home Economics</td>
            <td><?php echo $rows['Heco1_test']; ?></td>
            <td><?php echo $rows['Heco2_test']; ?></td>
            <td><?php echo $rows['Heco_project']; ?></td>
            <td><?php echo $rows['Heco_exam']; ?></td>
            <td><?php echo $rows['Heco_total']; ?></td>
            <td><?php echo $rows['Heco_grade']; ?></td>
            </tr>
          

            <table  cellspacing="0" border="3px">
                  <br>
        <tr>
            <th colspan="7">Summary of Result</th>
        </tr>
        
            <th>Total in class</th>
            <th>Total score</th>
            <th>Expected score</th>
            <th>Average score</th>
            <th>Position</th>
            <th>% attendance</th>
           
            <th>resumption date</th>
            
        </t>
         <tr>
            <td>25</td>
            <td><?php echo $rows['grand_total']; ?></td>
            <td>1200</td>
            <td><?php echo $rows['average'];?></td>
            <td><?php echo $rows['position'];?></td>
            <td></td>

            
            <td>29/4/2019</td>
           
            </tr>
      </table>
<br>
     <table cellspacing="0" border="3px">
            <th>Class teacher's remark</th>
            <th>Principal's remark</th>
            <th>Principal signature</th>
           
            
    </t>
         <tr>
            <td><?php echo $rows['remark']; ?></td>
            <td><?php echo $rows['remark2']; ?></td>
            <td><img src="../images/signs.png" alt=""></img></td>
        </tr>
    </t>
      </table>
<?php
}
    }
    if ($resultCheckJ3===0) {
        $sql_ss1 = "SELECT * FROM 3rd_term_ss1 WHERE regnum ='$reg' AND password = '$pwd'";
        $result_ss1 = mysqli_query($conn, $sql_ss1);
        $resultCheck_ss1 = mysqli_num_rows($result_ss1);
        if ($resultCheck_ss1 ===1) {
            while ($rows = mysqli_fetch_assoc($result_ss1)) {
                ?>
                 <table cellspacing="0" border="3px" class="victory">
        <thead>
            <tr>
                <th>full name</th>
                <th>reg number</th>
                 <th>class</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $rows['full_name']; ?></td>
                <td><?php echo $rows['regnum']; ?></td>
                 <td><?php echo $rows['class']; ?></td>
            </tr>
            </tbody>
        </table>
        <br>
    <table  border="3px" cellspacing="0" class="victory">
        <tr>
            <th colspan="7">STUDENT'S RECORD</th>
        </tr>
        <t>
            <th>subject</th>
            <th>test-1</th>
            <th>test-2</th>
            <th>projects</th>
            <th>exam</th>
            <th>total</th>
            <th>grade</th>
        </t>
         <tr>
            <td>mathematics</td>
            <td><?php echo $rows['m1_test']; ?></td>
            <td><?php echo $rows['m2_test']; ?></td>
            <td><?php echo $rows['m_project']; ?></td>
            <td><?php echo $rows['m_exam']; ?></td>
            <td><?php echo $rows['m_total']; ?></td>
            <td><?php echo $rows['m_grade']; ?></td>
            </tr>
            <tr>
            <td>English Language</td>
            <td><?php echo $rows['en1_test']; ?></td>
            <td><?php echo $rows['en2_test']; ?></td>
            <td><?php echo $rows['en_project']; ?></td>
            <td><?php echo $rows['en_exam']; ?></td>
            <td><?php echo $rows['en_total']; ?></td>
            <td><?php echo $rows['en_grade']; ?></td>
            </tr>
            <tr>
            <td>Chemistry</td>
            <td><?php echo $rows['chem1_test']; ?></td>
            <td><?php echo $rows['chem2_test']; ?></td>
            <td><?php echo $rows['chem_project']; ?></td>
            <td><?php echo $rows['chem_exam']; ?></td>
            <td><?php echo $rows['chem_total']; ?></td>
            <td><?php echo $rows['chem_grade']; ?></td>
            </tr>
            <tr>
            <td>physics</td>
            <td><?php echo $rows['phy1_test']; ?></td>
            <td><?php echo $rows['phy2_test']; ?></td>
            <td><?php echo $rows['phy_project']; ?></td>
            <td><?php echo $rows['phy_exam']; ?></td>
            <td><?php echo $rows['phy_total']; ?></td>
            <td><?php echo $rows['phy_grade']; ?></td>
            </tr>
            <tr>
            <td>Biology</td>
            <td><?php echo $rows['bio1_test']; ?></td>
            <td><?php echo $rows['bio2_test']; ?></td>
            <td><?php echo $rows['bio_project']; ?></td>
            <td><?php echo $rows['bio_exam']; ?></td>
            <td><?php echo $rows['bio_total']; ?></td>
            <td><?php echo $rows['bio_grade']; ?></td>
            </tr>
            <tr>
            <td>Geography</td>
            <td><?php echo $rows['geo1_test']; ?></td>
            <td><?php echo $rows['geo2_test']; ?></td>
            <td><?php echo $rows['geo_project']; ?></td>
            <td><?php echo $rows['geo_exam']; ?></td>
            <td><?php echo $rows['geo_total']; ?></td>
            <td><?php echo $rows['geo_grade']; ?></td>
            </tr>
            <tr>
            <td>economics</td>
            <td><?php echo $rows['eco1_test']; ?></td>
            <td><?php echo $rows['eco2_test']; ?></td>
            <td><?php echo $rows['eco_project']; ?></td>
            <td><?php echo $rows['eco_exam']; ?></td>
            <td><?php echo $rows['eco_total']; ?></td>
            <td><?php echo $rows['eco_grade']; ?></td>
            </tr>
            <tr>
            <td>Civic Education</td>
            <td><?php echo $rows['civ1_test']; ?></td>
            <td><?php echo $rows['civ2_test']; ?></td>
            <td><?php echo $rows['civ_project']; ?></td>
            <td><?php echo $rows['civ_exam']; ?></td>
            <td><?php echo $rows['civ_total']; ?></td>
            <td><?php echo $rows['civ_grade']; ?></td>
            </tr>
            <tr>
          
            <tr>
            <td>lit-in-english</td>
            <td><?php echo $rows['lit1_test']; ?></td>
            <td><?php echo $rows['lit2_test']; ?></td>
            <td><?php echo $rows['lit_project']; ?></td>
            <td><?php echo $rows['lit_exam']; ?></td>
            <td><?php echo $rows['lit_total']; ?></td>
            <td><?php echo $rows['lit_grade']; ?></td>
            </tr>
            <tr>
            <td>Agric. science</td>
            <td><?php echo $rows['agr1_test']; ?></td>
            <td><?php echo $rows['agr2_test']; ?></td>
            <td><?php echo $rows['agr_project']; ?></td>
            <td><?php echo $rows['agr_exam']; ?></td>
            <td><?php echo $rows['agr_total']; ?></td>
            <td><?php echo $rows['agr_grade']; ?></td>
            </tr>
            <tr>
            <td>Marketing</td>
            <td><?php echo $rows['mkt1_test']; ?></td>
            <td><?php echo $rows['mkt2_test']; ?></td>
            <td><?php echo $rows['mkt_project']; ?></td>
            <td><?php echo $rows['mkt_exam']; ?></td>
            <td><?php echo $rows['mkt_total']; ?></td>
            <td><?php echo $rows['mkt_grade']; ?></td>
            </tr>
            <tr>
            <td>Commerce</td>
            <td><?php echo $rows['com1_test']; ?></td>
            <td><?php echo $rows['com2_test']; ?></td>
            <td><?php echo $rows['com_project']; ?></td>
            <td><?php echo $rows['com_exam']; ?></td>
            <td><?php echo $rows['com_total']; ?></td>
            <td><?php echo $rows['com_grade']; ?></td>
            </tr>
            <tr>
            <td>C.R.K.</td>
            <td><?php echo $rows['crk1_test']; ?></td>
            <td><?php echo $rows['crk2_test']; ?></td>
            <td><?php echo $rows['crk_project']; ?></td>
            <td><?php echo $rows['crk_exam']; ?></td>
            <td><?php echo $rows['crk_total']; ?></td>
            <td><?php echo $rows['crk_grade']; ?></td>
            </tr>
            <tr>
            <td>Government</td>
            <td><?php echo $rows['gov1_test']; ?></td>
            <td><?php echo $rows['gov2_test']; ?></td>
            <td><?php echo $rows['gov_project']; ?></td>
            <td><?php echo $rows['gov_exam']; ?></td>
            <td><?php echo $rows['gov_total']; ?></td>
            <td><?php echo $rows['gov_grade']; ?></td>
            </tr>
            <td>Holiday Projects</td>
            <td></td>
            <td></td>
             <td></td>
            <td><?php echo $rows['holiday_project']; ?></td>
            <td><?php echo $rows['holiday_project']; ?></td>
            <td></td>
            </tr>

            <table cellspacing="0" border="3px" class="victory">
                  <br>
        <tr>
            <th colspan="7">sumary of result</th>
        </tr>
        
            <th>Total in class</th>
            <th>Total score</th>
            <th>expected score</th>
            <th>Average score</th>
            <th>Position</th>
            <th>% attendance</th>
           <th>resumption date</th>
            
        </t>
         <tr>
            <td>35</td>
            <td><?php echo $rows['grand_total']; ?></td>
            <td>1500</td>
            <td><?php echo $rows['average']; ?></td>
            <td><?php echo $rows['position']; ?></td>
            <td><?php echo $rows['attendance'];?></td>
            <td>9th Sept. 2019</td>
           
            </tr>
      </table>
<br>
     <table cellspacing="0" border="3px" class="victory">
            <th>Class teacher's remark</th>
            <th>Principal's remark</th>
            <th>Principal signature</th>
           
            
    </t>
         <tr>
            <td><?php echo $rows['remark']; ?></td>
            <td><?php echo $rows['remark2']; ?></td>
            <td><img src="../images/signs.png" alt=""></img></td>
        </tr>
    </t>
      </table >
      

                <?php
    }
}

    if ($resultCheck_ss1===0) {
        $sql_ss2 = "SELECT * FROM 3rd_term_ss2 WHERE regnum ='$reg' AND password = '$pwd'";
        $result_ss2 = mysqli_query($conn, $sql_ss2);
        $resultCheck_ss2 = mysqli_num_rows($result_ss2);
        if ($resultCheck_ss2 ===1) {
            while ($rows = mysqli_fetch_assoc($result_ss2)) {
                ?>
                 <table cellspacing="0" border="3px" class="victory">
        <thead>
            <tr>
                <th>full name</th>
                <th>reg number</th>
                 <th>class</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $rows['full_name']; ?></td>
                <td><?php echo $rows['regnum']; ?></td>
                 <td><?php echo $rows['class']; ?></td>
            </tr>
            </tbody>
        </table>
        <br>
    <table class="victory">
        <tr>
            <th colspan="7">STUDENT'S RECORD</th>
        </tr>
        <t>
            <th>subject</th>
            <th>test-1</th>
            <th>test-2</th>
            <th>projects</th>
            <th>exam</th>
            <th>total</th>
            <th>grade</th>
        </t>
         <tr>
            <td>mathematics</td>
            <td><?php echo $rows['m1_test']; ?></td>
            <td><?php echo $rows['m2_test']; ?></td>
            <td><?php echo $rows['m_project']; ?></td>
            <td><?php echo $rows['m_exam']; ?></td>
            <td><?php echo $rows['m_total']; ?></td>
            <td><?php echo $rows['m_grade']; ?></td>
            </tr>
            <tr>
            <td>English Language</td>
            <td><?php echo $rows['en1_test']; ?></td>
            <td><?php echo $rows['en2_test']; ?></td>
            <td><?php echo $rows['en_project']; ?></td>
            <td><?php echo $rows['en_exam']; ?></td>
            <td><?php echo $rows['en_total']; ?></td>
            <td><?php echo $rows['en_grade']; ?></td>
            </tr>
            <tr>
            <td>Chemistry</td>
            <td><?php echo $rows['chem1_test']; ?></td>
            <td><?php echo $rows['chem2_test']; ?></td>
            <td><?php echo $rows['chem_project']; ?></td>
            <td><?php echo $rows['chem_exam']; ?></td>
            <td><?php echo $rows['chem_total']; ?></td>
            <td><?php echo $rows['chem_grade']; ?></td>
            </tr>
            <tr>
            <td>physics</td>
            <td><?php echo $rows['phy1_test']; ?></td>
            <td><?php echo $rows['phy2_test']; ?></td>
            <td><?php echo $rows['phy_project']; ?></td>
            <td><?php echo $rows['phy_exam']; ?></td>
            <td><?php echo $rows['phy_total']; ?></td>
            <td><?php echo $rows['phy_grade']; ?></td>
            </tr>
            <tr>
            <td>Biology</td>
            <td><?php echo $rows['bio1_test']; ?></td>
            <td><?php echo $rows['bio2_test']; ?></td>
            <td><?php echo $rows['bio_project']; ?></td>
            <td><?php echo $rows['bio_exam']; ?></td>
            <td><?php echo $rows['bio_total']; ?></td>
            <td><?php echo $rows['bio_grade']; ?></td>
            </tr>
            <tr>
            <td>Geography</td>
            <td><?php echo $rows['geo1_test']; ?></td>
            <td><?php echo $rows['geo2_test']; ?></td>
            <td><?php echo $rows['geo_project']; ?></td>
            <td><?php echo $rows['geo_exam']; ?></td>
            <td><?php echo $rows['geo_total']; ?></td>
            <td><?php echo $rows['geo_grade']; ?></td>
            </tr>
            <tr>
            <td>economics</td>
            <td><?php echo $rows['eco1_test']; ?></td>
            <td><?php echo $rows['eco2_test']; ?></td>
            <td><?php echo $rows['eco_project']; ?></td>
            <td><?php echo $rows['eco_exam']; ?></td>
            <td><?php echo $rows['eco_total']; ?></td>
            <td><?php echo $rows['eco_grade']; ?></td>
            </tr>
            <tr>
            <td>Civic Education</td>
            <td><?php echo $rows['civ1_test']; ?></td>
            <td><?php echo $rows['civ2_test']; ?></td>
            <td><?php echo $rows['civ_project']; ?></td>
            <td><?php echo $rows['civ_exam']; ?></td>
            <td><?php echo $rows['civ_total']; ?></td>
            <td><?php echo $rows['civ_grade']; ?></td>
            </tr>
            <tr>
          
            <tr>
            <td>lit-in-english</td>
            <td><?php echo $rows['lit1_test']; ?></td>
            <td><?php echo $rows['lit2_test']; ?></td>
            <td><?php echo $rows['lit_project']; ?></td>
            <td><?php echo $rows['lit_exam']; ?></td>
            <td><?php echo $rows['lit_total']; ?></td>
            <td><?php echo $rows['lit_grade']; ?></td>
            </tr>
            <tr>
            <td>Agric. science</td>
            <td><?php echo $rows['agr1_test']; ?></td>
            <td><?php echo $rows['agr2_test']; ?></td>
            <td><?php echo $rows['agr_project']; ?></td>
            <td><?php echo $rows['agr_exam']; ?></td>
            <td><?php echo $rows['agr_total']; ?></td>
            <td><?php echo $rows['agr_grade']; ?></td>
            </tr>
            <tr>
            <td>Marketing</td>
            <td><?php echo $rows['mkt1_test']; ?></td>
            <td><?php echo $rows['mkt2_test']; ?></td>
            <td><?php echo $rows['mkt_project']; ?></td>
            <td><?php echo $rows['mkt_exam']; ?></td>
            <td><?php echo $rows['mkt_total']; ?></td>
            <td><?php echo $rows['mkt_grade']; ?></td>
            </tr>
            <tr>
            <td>Commerce</td>
            <td><?php echo $rows['com1_test']; ?></td>
            <td><?php echo $rows['com2_test']; ?></td>
            <td><?php echo $rows['com_project']; ?></td>
            <td><?php echo $rows['com_exam']; ?></td>
            <td><?php echo $rows['com_total']; ?></td>
            <td><?php echo $rows['com_grade']; ?></td>
            </tr>
            <tr>
            <td>C.R.K.</td>
            <td><?php echo $rows['crk1_test']; ?></td>
            <td><?php echo $rows['crk2_test']; ?></td>
            <td><?php echo $rows['crk_project']; ?></td>
            <td><?php echo $rows['crk_exam']; ?></td>
            <td><?php echo $rows['crk_total']; ?></td>
            <td><?php echo $rows['crk_grade']; ?></td>
            </tr>
            <tr>
            <td>Government</td>
            <td><?php echo $rows['gov1_test']; ?></td>
            <td><?php echo $rows['gov2_test']; ?></td>
            <td><?php echo $rows['gov_project']; ?></td>
            <td><?php echo $rows['gov_exam']; ?></td>
            <td><?php echo $rows['gov_total']; ?></td>
            <td><?php echo $rows['gov_grade']; ?></td>
            </tr>
            <td>Holiday Projects</td>
            <td></td>
            <td></td>
             <td></td>
            <td><?php echo $rows['holiday_project']; ?></td>
            <td><?php echo $rows['holiday_project']; ?></td>
            <td><?php echo $rows['holiday_grade']; ?></td>
            </tr>

            <table cellspacing="0" border="3px" class="victory">
                  <br>
        <tr>
            <th colspan="7">sumary of result</th>
        </tr>
        
            <th>Total in class</th>
            <th>Total score</th>
            <th>expected score</th>
            <th>Average score</th>
            <th>Position</th>
            <th>% attendance</th>
           <th>resumption date</th>
            
        </t>
         <tr>
            <td>25</td>
            <td><?php echo $rows['grand_total']; ?></td>
            <td>900</td>
            <td><?php echo $rows['average']; ?></td>
            <td><?php echo $rows['position']; ?></td>
            <td><?php echo $rows['attendance'] ?></td>
            <td>9th Sept. 2019</td>
           
            </tr>
      </table>
<br>
     <table cellspacing="0" border="3px" class="victory">
            <th>Class teacher's remark</th>
            <th>Principal's remark</th>
            <th>Principal signature</th>
           
            
    </t>
         <tr>
            <td><?php echo $rows['remark']; ?></td>
            <td><?php echo $rows['remark2']; ?></td>
            <td><img src="../images/signs.png" alt=""></img></td>
        </tr>
    </t>
      </table >
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
}


?>
 </table>
  <div><p align="center">Mesh Schools... nesting hospitality with qualitative education  </p></div>
  </body>
  <a title="print screen" alt="print screen" onclick="window.print();" target="_blank" style="cursor: pointer;"><button>click to print</button></a>
 </html>
 