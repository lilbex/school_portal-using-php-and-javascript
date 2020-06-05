<!-- modal -->
<div class="modal about-modal w3-agileits fade" id="myprekg" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
            </div> 
            <div class="modal-body">
                <img src="images/mesh.jpg" alt="" width="580px;">
               <h5> 2019/2020 Academic Session </h5>
<table class=" table table-striped table-bordered">
        <thead>
            <tr>
                <th>full name</th>
                <th>Term</th>
                 <th>class</th>
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
    <table class=" table table-striped table-bordered">
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
            <td></td>
            <td></td>
            <td></td>
            </tr>
        
        
     

        
 </table>
 <br>
  
  
 
            <!---2-column-Cards->Ceo image and login form -->
          

<div class="container-fluid">
     <h2 align="center">Psychomotor and Social skills</h2>
<div class="row padding">


    <div class="col-md-6">
       
          
             <table class=" table table-striped table-bordered">
               
            
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
      

                      
                     <table class=" table table-striped table-bordered">
               
            
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
<table class=" table table-striped table-bordered">
                 
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
            <td>35</td>
            <td><?php echo $rows['grand_total']; ?></td>
            <td>1000</td>
            <td><?php echo $rows['average']; ?></td>
            <td><?php echo $rows['position']; ?></td>
            <td><?php echo $rows['attendance']; ?></td>
           
           
            </tr>
      </table>
<br>
 <table class=" table table-striped table-bordered">
            <th>Class teacher's remark</th>
            <th>Principal's remark</th>
            <th>Principal signature</th>
           
            
    </t>
         <tr>
            <td><?php echo $rows['remark']; ?></td>
            <td><?php echo $rows['remark2']; ?></td>
            <td><img src="images/signs.png" alt=""></img></td>
        </tr>
    </t>
      </table > 
       <a title="print screen" alt="print screen" onclick="window.print();" target="_blank" style="cursor: pointer;"><button>click to print</button></a>
            </div> 
        </div>
    </div>
</div>
<!-- //modal --> 