<?php include 'header.php';?>
   <head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

   </head>

    <main class="content-wrapper"> 
    	<div class="mdc-layout-grid">
          <div class="mdc-layout-grid__inner">
           
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-card table-responsive">
                <div class="table-heading px-2 px-1 border-bottom">
                  <h1 class="mdc-card__title mdc-card__title--large">Posp Details</h1>

                </div>
                <table class="table">
                <thead>
                      <form  method="post" enctype="multipart/form-data" autocomplete="off">
                     <tr>
                         <th colspan="3">
                             <select required="" name="query" class="form-control">
                             <option value="">Choose Option</option>
                             <option value="1">How many PoSP Registered</option>
                             <option value="2">How many PoSP Complete Training</option>
                             <option value="3">How many PoSP Complete Exam</option>
                             <option value="4">How many PoSP Pass In The Exam</option>
                             <option value="5">How many PoSP Fail In The Exam</option>
                             <option value="6">How many PoSP Certificate Issue</option>
                             <option value="7">How many PoSP not attempted training and exam</option>

                             </select>
                         </th>
                         <th colspan="3">
                             
    <i class="fa fa-calendar"></i>&nbsp;
    <span></span> <i class="fa fa-caret-down"></i> 
    <input type="text" class="form-control" id="reportrange" required="" name="reportrange" placeholder="date">
                         </th>
                          <th colspan="3">
                             <input type="submit" class="btn btn-primary w-100" name="submit" value="Download"> 
                         </th>
                     </tr>
                     </form>
                     <?php

if (isset($_POST['submit'])) {
  # code...
  $drange=$_POST['reportrange'];
  $dquery=$_POST['query'];
 echo "<script language='javascript' type='text/javascript'>alert('Upload successfull')
  location.href='xls.php?query=$dquery&date=$drange' </script>";
  header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");
}
 ?>
                  </thead>
                  </table>

                   <table class="table">
                  <thead>
                    <tr>
                      <th class="text-left">SL No</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>City</th>
                      <th>Email</th>
                      <th>Mobile Number</th>
                      <th>Registration Id</th>
                      <th>Identification No</th>
                       <th>Active or Deactive</th>
                      <!-- <th>Actions</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     
                      <?php
                     

$result = mysql_query("select * from agent_details");
while($row = mysql_fetch_assoc($result)){

            ?>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['address']; ?></td>
                      <td><?php echo $row['city']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['mobile_no']; ?></td>
                      <?php 
                      if($row['reg_id']=="0"){
                          
                       
                         echo "<td>"."Posp Not Yet Active"."</td>";
                      }else{
                          
                         echo "<td>".$row['reg_id']."</td>";
                      }
                      
                      ?>
                      
                      <!--<td><?php echo $row['id_no']; ?></td>-->
                      <?php 
                      if($row['id_no']=="0"){
                          
                           echo "<td>" . "<a href='add_id_no.php?id=" . $row['id'] . "'>Add Id no</a>"."</td>";
                      }else{
                          
                         echo "<td>" . "<a href='add_id_no.php?id=" . $row['id'] . "'>"."<p style='color:black'>".$row['id_no']."</p>"."</a>"."</td>";
                      }
                      
                      ?>
                     
                      <?php
                        if ($row['status']==0) {
                          # code...
                          ?>
                          <td><div class="mdc-switch">
                            <form method="post">
                      <input type="checkbox" id="checkboxtest" name="ck1" value="<?php echo $row['id']; ?>" class="mdc-switch__native-control"  />

                      <div class="mdc-switch__background">

                        <div class="mdc-switch__knob"></div>
                      </div>
                      
                    </div></td>
                       <?php }
                        else{
                          ?>
                          <td><div class="mdc-switch">
                           
               <input type="checkbox" id="checkboxtest" name="ck1" value="<?php echo $row['id']; ?>" class="mdc-switch__native-control"  checked=""/>
                      <div class="mdc-switch__background">
                        <div class="mdc-switch__knob"></div>
                      </div>
                      </form>
                    </div></td>
                  <?php }
                   
                      ?>
                      
                      
                      <!-- <td><div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-heart text-blue"></i></div><div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-forum text-yellow"></i></div><div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-delete text-red"></i></div></td> -->
                    </tr>
                    
                  <?php }?>
                    </tbody>
                  </table>

              </div>
            </div>
          </div>
        </div>
       
      </main>
      


<?php include 'footer.php';?>

<script>

$("input:checkbox").on("change", function () {
    var val = $(this).val();
    var checkboxstatus = $(this).is(':checked') ? 1 : 0;
    $.ajax({type: "POST",
        url: "insert.php",
        data: {val: val, checkboxstatus: checkboxstatus}
    });
});
</script>
<script type="text/javascript">
$(function() {

    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }

    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);

    cb(start, end);

});
</script>
  
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
