<!-- modal -->
<button class="btn btn-outline-primary" type="button" onclick="printDiv()">Print</button>

<div class="jumbotron pt-4" id="printR"  style="padding: 0">
    <img src="images/mesh.jpg" style="width: 100%;">
                <h5>2019/2020 Session</h5>
            <table class="table ">
        
            <tr>
                <th>Full name</th>
                <th>Reg number</th>
                 <th>Class</th>
            </tr>
       
   
            <tr>
                <td><?php echo $rows['full_name']; ?></td>
                <td><?php echo $rows['term']; ?></td>
                 <td><?php echo $rows['class']; ?></td>
            </tr>
          
        </table>
        <br>
    <table  class="table ">
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
            <td><?php echo $rows['health123']; ?></td>
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
            <td>Holiday Project</td>
            <td></td>
            <td></td>
            <td><?php echo $rows['holT']; ?></td>
            <td><?php echo $rows['holA']; ?></td>
            <td><?php echo $rows['holTotal']; ?></td>
            <td><?php echo $rows['holGrade']; ?></td>
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

            <table class="table">
                  <br>
        <tr>
            <th colspan="7">sumary of result</th>
        </tr>
        
            <th>Total in class</th>
            <th>Total score</th>
            <th>expected score</th>
            <th>Average score</th>
            <th>Position</th>
            <th>Attendance</th>
         
            
        </t>
         <tr>
            <td>25</td>
            <td><?php echo $rows['grand_total']; ?></td>
            <td>1200</td>
            <td><?php echo $rows['average']; ?></td>
            <td><?php echo $rows['position']; ?></td>
            <td><?php echo $rows['attendance']; ?></td>

            </tr>
      </table>
<br>
    <table class="table ">
            <th>Class teacher's remark</th>
            <th>Principal's remark</th>
            <th>Principal signature</th>
           
            
    </t>
         <tr>
            <td><?php echo $rows['comment1']; ?></td>
            <td><?php echo $rows['comment2']; ?></td>
            <td><img src="images/signs.png" alt=""></img></td>
        </tr>
    </t>
      </table>
    </div> 