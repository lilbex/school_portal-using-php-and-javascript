          
     
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