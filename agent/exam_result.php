
  <?php include 'header.php';
include_once("coon.php");
$main_id=$row['id']; 

$qs_atm = mysql_query("select * from agent_details where id='$main_id'");
$qs_atm_res=mysql_fetch_assoc($qs_atm);
$ra=$qs_atm_res['right_ans'];
$wa=$qs_atm_res['wrong_ans'];
$Everything='50';

 $percentage = ( $ra / $Everything ) * 100;
/*echo $percentage." "."%";*/
date_default_timezone_set('Asia/Kolkata');
$timestamp = date("Y-m-d");
mysql_query("UPDATE `agent_details` SET `marks`='$ra', `exam_date`='$timestamp' WHERE id='$main_id'");



  ?>
       <head>
        
          
       </head>
      <main class="content-wrapper">
         <div class="mdc-layout-grid">
          <div class="mdc-layout-grid__inner">
           
           
           <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-card">
                <section class="mdc-card__primary">
                  <h1 class="mdc-card__title mdc-card__title--large">Result</h1>
                </section>
                <div class="template-demo">
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="text-left">Name</th>
                        <th class="text-left">Gender</th>
                        <th class="text-left">PAN No</th>
                        <th class="text-left">Date of Exam</th>
                        <th class="text-left">Total Scored</th>
                        <th class="text-left">Percentage</th>
                        <th class="text-left">Questions Attempted</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-left"><?php echo $row['name'];  ?></td>
                        <td class="text-left"><?php echo $row['gender'];  ?></td>
                        <td class="text-left"><?php echo $row['pan_no'];  ?></td>
                        <td class="text-left"><?php echo date("d/m/Y");  ?></td>
                        <?php 
                        if ($ra>="25") {
                           # code...
                           ?>
                            <td style="color: green" class="text-left"><?php echo $ra;?> out of 50 (PASS)</td>
                        <?php }else {
                          ?>
                          <td style="color: red" class="text-left"><?php echo $ra;?> out of 50 (Fail)</td>
                       <?php }  ?>
                        
                        <td class="text-left"><?php echo $percentage." "."%";?></td>
                        <td class="text-left">50</td>
                       
                      </tr>
                   
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </main>

  <?php include 'footer.php';?>