   
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