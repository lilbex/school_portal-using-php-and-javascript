<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../bootstrap.css">
<script src="../jquery.js"></script>
<script src="../bootstrap.js"></script>
<title></title>
<style type="text/css">
   table {
    text-align: center; border: 3px; width: 100%; padding: 5px;
    margin-bottom: 1rem;
   }
</style>
</head>
<body class="container">
   
<div class="card-1">
      <div style="color: #ffff; height: 300px;">
            
      </div>

<?php 
if (isset($_POST['submit'])){
include_once'dbh.php';
$reg = mysqli_real_escape_string($conn, $_POST['reg']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
if (empty($reg) || empty($pwd)){
	header("Location: ../students_page.html");
	exit();
} 

$sql = "SELECT * FROM ss WHERE regnum = '$reg' AND password = '$pwd'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck === 1){
	while ($rows = mysqli_fetch_assoc($result)) {
		?>

    <p style="text-align: center;">2018/2019 ACADEMIC SESSION. FIRST TERM RESULT</p>
    <table cellspacing="0" border="3px" class="">
        <thead>
            <tr>
                <th>full name</th>
                <th>reg number</th>
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
    <table cellspacing="0" border="3px">
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
            <td>mathematics</td>
            <td><?php echo $rows['m1_test']; ?></td>
            <td><?php echo $rows['m2_test']; ?></td>
            <td><?php echo $rows['m_project']; ?></td>
            <td><?php echo $rows['m_exam']; ?></td>
            <td><?php echo $rows['m_total']; ?></td>
            <td><?php echo $rows['m_grade']; ?></td>
            </tr>
            <tr>
            <td>english</td>
            <td><?php echo $rows['en1_test']; ?></td>
            <td><?php echo $rows['en2_test']; ?></td>
            <td><?php echo $rows['en_project']; ?></td>
            <td><?php echo $rows['en_exam']; ?></td>
            <td><?php echo $rows['en_total']; ?></td>
            <td><?php echo $rows['en_grade']; ?></td>
            </tr>
            <tr>
            <td>chemistry</td>
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
            <td>bioology</td>
            <td><?php echo $rows['bio1_test']; ?></td>
            <td><?php echo $rows['bio2_test']; ?></td>
            <td><?php echo $rows['bio_project']; ?></td>
            <td><?php echo $rows['bio_exam']; ?></td>
            <td><?php echo $rows['bio_total']; ?></td>
            <td><?php echo $rows['bio_grade']; ?></td>
            </tr>
            <tr>
            <td>geography</td>
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
            <td>civic education</td>
            <td><?php echo $rows['civ1_test']; ?></td>
            <td><?php echo $rows['civ2_test']; ?></td>
            <td><?php echo $rows['civ_project']; ?></td>
            <td><?php echo $rows['civ_exam']; ?></td>
            <td><?php echo $rows['civ_total']; ?></td>
            <td><?php echo $rows['civ_grade']; ?></td>
            </tr>
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
            <td>lit-in-english</td>
            <td><?php echo $rows['lit1_test']; ?></td>
            <td><?php echo $rows['lit2_test']; ?></td>
            <td><?php echo $rows['lit_project']; ?></td>
            <td><?php echo $rows['lit_exam']; ?></td>
            <td><?php echo $rows['lit_total']; ?></td>
            <td><?php echo $rows['lit_grade']; ?></td>
            </tr>
            <tr>
            <td>agric. science</td>
            <td><?php echo $rows['agr1_test']; ?></td>
            <td><?php echo $rows['agr2_test']; ?></td>
            <td><?php echo $rows['agr_project']; ?></td>
            <td><?php echo $rows['agr_exam']; ?></td>
            <td><?php echo $rows['agr_total']; ?></td>
            <td><?php echo $rows['agr_grade']; ?></td>
            </tr>
            <tr>
            <td>marketing</td>
            <td><?php echo $rows['mkt1_test']; ?></td>
            <td><?php echo $rows['mkt2_test']; ?></td>
            <td><?php echo $rows['mkt_project']; ?></td>
            <td><?php echo $rows['mkt_exam']; ?></td>
            <td><?php echo $rows['mkt_total']; ?></td>
            <td><?php echo $rows['mkt_grade']; ?></td>
            </tr>
            <tr>
            <td>commerce</td>
            <td><?php echo $rows['com1_test']; ?></td>
            <td><?php echo $rows['com2_test']; ?></td>
            <td><?php echo $rows['com_project']; ?></td>
            <td><?php echo $rows['com_exam']; ?></td>
            <td><?php echo $rows['com_total']; ?></td>
            <td><?php echo $rows['com_grade']; ?></td>
            </tr>
            <tr>
            <td>C.R.K.</td>
            <td><?php echo $rows['c1_test']; ?></td>
            <td><?php echo $rows['c2_test']; ?></td>
            <td><?php echo $rows['c_project']; ?></td>
            <td><?php echo $rows['c_exam']; ?></td>
            <td><?php echo $rows['c_total']; ?></td>
            <td><?php echo $rows['c_grade']; ?></td>
            </tr>
            <tr>
            <td>government</td>
            <td><?php echo $rows['gov1_test']; ?></td>
            <td><?php echo $rows['gov2_test']; ?></td>
            <td><?php echo $rows['gov_project']; ?></td>
            <td><?php echo $rows['gov_exam']; ?></td>
            <td><?php echo $rows['gov_total']; ?></td>
            <td><?php echo $rows['gov_grade']; ?></td>
            </tr>
        </table>
        <br>

            <table cellspacing="0" border="3px">
    
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
            <td>1500</td>
            <td><?php echo $rows['average']; ?></td>
            <td>1st</td>
            <td>95%</td>

            
            <td>3/1/2019</td>
        </tr>
    </t>
      </table>
<br>
       <table cellspacing="0" border="3px">
            <th>Class teacher's remark</th>
            <th>Principal's remark</th>
            <th>Principal signature</th>
           
            
    </t>
         <tr>
            <td><?php echo $rows['remark']; ?></td>
            <td><?php echo $rows['remark']; ?></td>
            <td><?php echo $rows['remark']; ?></td>
        </tr>
    </t>
      </table>
      
      </table>
      </div>
<div>
    <p align="center">Mesh Schools... meeting qualitative education with hospitality</p>
</div>
  <a title="print screen" alt="print screen" onclick="window.print();" target="_blank" style="cursor: pointer;"><button>click to print</button></a>
 </body>
 </html>

     

		<?php
	} 
}

}
?>
 
<?php
/*<?php 
if (isset($_POST['submit'])){
include_once'dbh.php';
$reg = mysqli_real_escape_string($conn, $_POST['reg']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
if (empty($reg) || empty($pwd)){
    header("Location: ../students_page.html");
    exit();
} 

$sql = "SELECT * FROM ss WHERE regnum = '$reg' AND password = '$pwd'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck === 1){
    while ($rows = mysqli_fetch_assoc($result)) {
        ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./bootstrap.css">
<script src="./jquery.js"></script>
<script src="./bootstrap.js"></script>
<title>First term result 2018/2019 session</title>
<style type="text/css">
    td {
        text-align: center;
    }
</style>
</head>
<body style="background-color: #333366;">
      <div style="background-color: #ffffcc; width: 800px; height: 800px; margin-left: 100px">
     
      
    <table class="" align="center" border="3" width="100%" cellspacing="0" style="line-height: 30px; background-color: #ffffffff;">
        <thead>
            <tr>
                <th>full name</th>
                <th>reg number</th>
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
    <table  cellspacing="0" align="center" border="1px" style="width:100%; height: 500 line-height: 40px; background-color: #ffffffff;">
        <tr>
            <th colspan="7">student's record</th>
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
            <td>english</td>
            <td><?php echo $rows['en1_test']; ?></td>
            <td><?php echo $rows['en2_test']; ?></td>
            <td><?php echo $rows['en_project']; ?></td>
            <td><?php echo $rows['en_exam']; ?></td>
            <td><?php echo $rows['en_total']; ?></td>
            <td><?php echo $rows['en_grade']; ?></td>
            </tr>
            <tr>
            <td>chemistry</td>
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
            <td>bioology</td>
            <td><?php echo $rows['bio1_test']; ?></td>
            <td><?php echo $rows['bio2_test']; ?></td>
            <td><?php echo $rows['bio_project']; ?></td>
            <td><?php echo $rows['bio_exam']; ?></td>
            <td><?php echo $rows['bio_total']; ?></td>
            <td><?php echo $rows['bio_grade']; ?></td>
            </tr>
            <tr>
            <td>geography</td>
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
            <td>civic education</td>
            <td><?php echo $rows['civ1_test']; ?></td>
            <td><?php echo $rows['civ2_test']; ?></td>
            <td><?php echo $rows['civ_project']; ?></td>
            <td><?php echo $rows['civ_exam']; ?></td>
            <td><?php echo $rows['civ_total']; ?></td>
            <td><?php echo $rows['civ_grade']; ?></td>
            </tr>
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
            <td>lit-in-english</td>
            <td><?php echo $rows['lit1_test']; ?></td>
            <td><?php echo $rows['lit2_test']; ?></td>
            <td><?php echo $rows['lit_project']; ?></td>
            <td><?php echo $rows['lit_exam']; ?></td>
            <td><?php echo $rows['lit_total']; ?></td>
            <td><?php echo $rows['lit_grade']; ?></td>
            </tr>
            <tr>
            <td>agric. science</td>
            <td><?php echo $rows['agr1_test']; ?></td>
            <td><?php echo $rows['agr2_test']; ?></td>
            <td><?php echo $rows['agr_project']; ?></td>
            <td><?php echo $rows['agr_exam']; ?></td>
            <td><?php echo $rows['agr_total']; ?></td>
            <td><?php echo $rows['agr_grade']; ?></td>
            </tr>
            <tr>
            <td>marketing</td>
            <td><?php echo $rows['mkt1_test']; ?></td>
            <td><?php echo $rows['mkt2_test']; ?></td>
            <td><?php echo $rows['mkt_project']; ?></td>
            <td><?php echo $rows['mkt_exam']; ?></td>
            <td><?php echo $rows['mkt_total']; ?></td>
            <td><?php echo $rows['mkt_grade']; ?></td>
            </tr>
            <tr>
            <td>commerce</td>
            <td><?php echo $rows['com1_test']; ?></td>
            <td><?php echo $rows['com2_test']; ?></td>
            <td><?php echo $rows['com_project']; ?></td>
            <td><?php echo $rows['com_exam']; ?></td>
            <td><?php echo $rows['com_total']; ?></td>
            <td><?php echo $rows['com_grade']; ?></td>
            </tr>
            <tr>
            <td>C.R.K.</td>
            <td><?php echo $rows['c1_test']; ?></td>
            <td><?php echo $rows['c2_test']; ?></td>
            <td><?php echo $rows['c_project']; ?></td>
            <td><?php echo $rows['c_exam']; ?></td>
            <td><?php echo $rows['c_total']; ?></td>
            <td><?php echo $rows['c_grade']; ?></td>
            </tr>
            <tr>
            <td>government</td>
            <td><?php echo $rows['gov1_test']; ?></td>
            <td><?php echo $rows['gov2_test']; ?></td>
            <td><?php echo $rows['gov_project']; ?></td>
            <td><?php echo $rows['gov_exam']; ?></td>
            <td><?php echo $rows['gov_total']; ?></td>
            <td><?php echo $rows['gov_grade']; ?></td>
            </tr>

            <table  cellspacing="0" align="center" border="1px" style="width:100%; line-height: 20px; background-color: #ffffffff;">
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
            <td><?php echo $rows['g_total']; ?></td>
            <td>1500</td>
            <td><?php echo $rows['average']; ?></td>
            <td>1st</td>
            <td>95%</td>

            
            <td>3/1/2019</td>
           
            </tr>
      </table>

      <table  cellspacing="0" align="center" border="1px" style="width:100%; height: 500 line-height: 40px; background-color: #ffffffff;">
            <br>
        <tr>
            <th colspan="4">Remark</th>
        </tr>
        
      <tr>
           
          <td><?php echo $rows['remark']; ?></td>
      </tr>
      </div>

     

        <?php
    } 
}
if ($resultCheck === 0) {
    $sqlP = "SELECT * FROM pry WHERE regnum = '$reg' AND password = '$pwd'";
    $resultP = mysqli_query($conn, $sqlP);
    $resultCheckP = mysqli_num_rows($resultP);
    if ($resultCheckP === 1) {
        while ($rows = mysqli_fetch_assoc($resultP)) {
            ?>
            <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./bootstrap.css">
<script src="./jquery.js"></script>
<script src="./bootstrap.js"></script>
<title>here is your result</title>
<style type="text/css">
    td {
        text-align: center;
    }
</style>
</head>
<body style="background-color: #333366;">
      <div style="background-color: #ffffcc; width: 800px; height: 800px; margin-left: 100px">
     
            <table class="" align="center" border="3" width="100%" cellspacing="0" style="line-height: 30px; background-color: #ffffffff;">
        <thead>
            <tr>
                <th>full name</th>
                <th>reg number</th>
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
    <table  cellspacing="0" align="center" border="1px" style="width:100%; height: 500 line-height: 40px; background-color: #ffffffff;">
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
            <td>mathematics</td>
            <td><?php echo $rows['m1_test']; ?></td>
            <td><?php echo $rows['m2_test']; ?></td>
            <td><?php echo $rows['m_project']; ?></td>
            <td><?php echo $rows['m_exam']; ?></td>
            <td><?php echo $rows['m_total']; ?></td>
            <td><?php echo $rows['m_grade']; ?></td>
            </tr>
            <tr>
            <td>english</td>
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
            <td>mathematics</td>
            <td><?php echo $rows['m1_test']; ?></td>
            <td><?php echo $rows['m2_test']; ?></td>
            <td><?php echo $rows['m_project']; ?></td>
            <td><?php echo $rows['m_exam']; ?></td>
            <td><?php echo $rows['m_total']; ?></td>
            <td><?php echo $rows['m_grade']; ?></td>
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

            <table  cellspacing="0" align="center" border="1px" style="width:100%; line-height: 20px; background-color: #ffffffff;">
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
            <td>1500</td>
            <td><?php echo $rows['average']; ?></td>
            <td>1st</td>
            <td>95%</td>

            
            <td>3/1/2019</td>
           
            </tr>
      </table>

      <table  cellspacing="0" align="center" border="1px" style="width:100%; height: 500 line-height: 40px; background-color: #ffffffff;">
            <br>
        <tr>
            <th colspan="4">Remark</th>
        </tr>
        
      <tr>
           
          <td><?php echo $rows['remark']; ?></td>
      </tr>
      </div>

            <?php
        }
    }
    if ($resultCheckP===0) {
        $sqlJ = "SELECT * FROM jss WHERE regnum ='$reg' AND password = '$pwd'";
        $resultJ = mysqli_query($conn, $sqlJ);
        $resultCheckJ = mysqli_num_rows($resultJ);
        if ($resultJ ===1) {
            while ($row = mysqli_fetch_assoc($resultJ)) {
                ?>
                 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./bootstrap.css">
<script src="./jquery.js"></script>
<script src="./bootstrap.js"></script>
<title>here is your result</title>
<style type="text/css">
    td {
        text-align: center;
    }
</style>
</head>
<body style="background-color: #333366;">
      <div style="background-color: #ffffcc; width: 800px; height: 800px; margin-left: 100px">
      
            <table class="" align="center" border="3" width="100%" cellspacing="0" style="line-height: 30px; background-color: #ffffffff;">
        <thead>
            <tr>
                <th>full name</th>
                <th>reg number</th>
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
    <table  cellspacing="0" align="center" border="1px" style="width:100%; height: 500 line-height: 40px; background-color: #ffffffff;">
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
            <td>mathematics</td>
            <td><?php echo $rows['m1_test']; ?></td>
            <td><?php echo $rows['m2_test']; ?></td>
            <td><?php echo $rows['m_project']; ?></td>
            <td><?php echo $rows['m_exam']; ?></td>
            <td><?php echo $rows['m_total']; ?></td>
            <td><?php echo $rows['m_grade']; ?></td>
            </tr>
            <tr>
            <td>english</td>
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
            <td>mathematics</td>
            <td><?php echo $rows['m1_test']; ?></td>
            <td><?php echo $rows['m2_test']; ?></td>
            <td><?php echo $rows['m_project']; ?></td>
            <td><?php echo $rows['m_exam']; ?></td>
            <td><?php echo $rows['m_total']; ?></td>
            <td><?php echo $rows['m_grade']; ?></td>
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

            <table  cellspacing="0" align="center" border="1px" style="width:100%; line-height: 20px; background-color: #ffffffff;">
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
            <td>1500</td>
            <td><?php echo $rows['average']; ?></td>
            <td>1st</td>
            <td>95%</td>

            
            <td>3/1/2019</td>
           
            </tr>
      </table>

      <table  cellspacing="0" align="center" border="1px" style="width:100%; height: 500 line-height: 40px; background-color: #ffffffff;">
            <br>
        <tr>
            <th colspan="4">Remark</th>
        </tr>
        
      <tr>
           
          <td><?php echo $rows['remark']; ?></td>
      </tr>
      </div>

                <?php
            }
        }
        if ($resultCheckJ === 0) {
           $sqlN = "SELECT * FROM nursery WHERE regnum = '$reg' AND password = '$pwd'";
           $resultN = mysqli_query($conn, $sqlN);
           $resultCheckN = mysqli_num_rows($resultN);
           if ($resultCheckN === 1) {
               while ($row = mysqli_fetch_assoc($resultN)) {
                   ?>

                <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./bootstrap.css">
<script src="./jquery.js"></script>
<script src="./bootstrap.js"></script>
<title>here is your result</title>
<style type="text/css">
    td {
        text-align: center;
    }
</style>
</head>
<body style="background-color: #333366;">
      <div style="background-color: #ffffcc; width: 800px; height: 800px; margin-left: 100px">
     
            <table class="" align="center" border="3" width="100%" cellspacing="0" style="line-height: 30px; background-color: #ffffffff;">
        <thead>
            <tr>
                <th>full name</th>
                <th>reg number</th>
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
    <table  cellspacing="0" align="center" border="1px" style="width:100%; height: 500 line-height: 40px; background-color: #ffffffff;">
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
            <td>mathematics</td>
            <td><?php echo $rows['m1_test']; ?></td>
            <td><?php echo $rows['m2_test']; ?></td>
            <td><?php echo $rows['m_project']; ?></td>
            <td><?php echo $rows['m_exam']; ?></td>
            <td><?php echo $rows['m_total']; ?></td>
            <td><?php echo $rows['m_grade']; ?></td>
            </tr>
            <tr>
            <td>english</td>
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
            <td>mathematics</td>
            <td><?php echo $rows['m1_test']; ?></td>
            <td><?php echo $rows['m2_test']; ?></td>
            <td><?php echo $rows['m_project']; ?></td>
            <td><?php echo $rows['m_exam']; ?></td>
            <td><?php echo $rows['m_total']; ?></td>
            <td><?php echo $rows['m_grade']; ?></td>
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

            <table  cellspacing="0" align="center" border="1px" style="width:100%; line-height: 20px; background-color: #ffffffff;">
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
            <td>1500</td>
            <td><?php echo $rows['average']; ?></td>
            <td>1st</td>
            <td>95%</td>

            
            <td>3/1/2019</td>
           
            </tr>
      </table>

      <table  cellspacing="0" align="center" border="1px" style="width:100%; height: 500 line-height: 40px; background-color: #ffffffff;">
            <br>
        <tr>
            <th colspan="4">Remark</th>
        </tr>
        
      <tr>
           
          <td><?php echo $rows['remark']; ?></td>
      </tr>
      </div>


                   <?php
               }
           }
        }
    }
}

}

?>
 </table>
  <div><p align="center">Mesh Schools... meeting qualitative education with hospitality</p></div>
  <a title="print screen" alt="print screen" onclick="window.print();" target="_blank" style="cursor: pointer;"><button>click to print</button></a>
 </body>
 </html>

  ?>

 