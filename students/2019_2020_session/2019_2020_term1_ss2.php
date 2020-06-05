<!-- modal -->

 <!--  <div class="jumbotron text-center" style="background-color: pink;">
  <h1>MESH HIGH SCHOOL</h1>
  <p>5, Old NigerCat Road, Upper Sakponba Road</p>
  <p>Benin City</p>
 </div>-->
 
    <button class="btn btn-outline-primary" type="button" onclick="printDiv()">Print</button>

<div class="jumbotron pt-4" id="printR"  style="padding: 0">
    <img src="images/mesh.jpg" style="width: 100%;">
  <h3 class="text-center">2019/2020 SESSION</h3>
  <table class="table" style="width: 100%;">
        <thead>
            <tr>
                <th>Full name</th>
                <th>Term</th>
                 <th>Class</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $rows['full_name']; ?></td>
                <td><?php echo $rows['term']; ?></td>
                 <td><?php echo $rows['class']; ?></td>
            </tr>
            </tbody>
        </table>
  
        <br>
      
        <table class="table" style="width: 100%;">
        <tr>
            <th>subject</th>
            <th>test-1</th>
            <th>test-2</th>
            <th>projects</th>
            <th>exam</th>
            <th>total</th>
            <th>grade</th>
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

            <tr>
            <td>Further Maths</td>
            <td><?php echo $rows['fMaths1']; ?></td>
            <td><?php echo $rows['fMaths2']; ?></td>
            <td><?php echo $rows['fMathsCa']; ?></td>
            <td><?php echo $rows['fMathsE']; ?></td>
            <td><?php echo $rows['fMathsT']; ?></td>
            <td><?php echo $rows['fMathsG']; ?></td>
            </tr>
            <tr>
            <td>Holiday Projects</td>
            <td></td>
            <td></td>
             <td></td>
            <td><?php echo $rows['holA']; ?></td>
            <td><?php echo $rows['holTo']; ?></td>
            <td><?php echo $rows['holG']; ?></td>
         
            </tr>
        </table>
      
     
         <table class="table " style="width: 100%;">
                  <br>
        
        <tr>
            <th>Class</th>
            <th>Total </th>
            <th>Expected</th>
            <th>Average</th>
            <th>Position</th>
            <th>Attendance</th>
       
        </tr>
      
         <tr>
            <td>35</td>
            <td><?php echo $rows['grand_total']; ?></td>
            <td>1600</td>
            <td><?php echo $rows['average']; ?></td>
            <td><?php echo $rows['position']; ?></td>
            <td><?php echo $rows['attendance'];?></td>
      
           
            </tr>
    
      </table>
    <br>
   
     <table class="table ">
            <th>Class teacher's remark</th>
            <th>Principal's remark</th>
            <th>Principal signature</th>
           
            
    </t>
         <tr>
            <td><?php echo $rows['remark1']; ?></td>
            <td><?php echo $rows['remark2']; ?></td>
            <td><img src="images/signs.png" alt=""></img></td>
        </tr>
    </t>
    </table >
  </div>

