<div class="modal  fade" id="myModal" tabindex="-1" role="dialog">
  
        <table class="table table-hover table-dark table-striped" >
           <thead >
                <tr >
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
