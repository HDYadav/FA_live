<?php include 'header.php';?>


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
                    <tr>
                      <th class="text-left">Id</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>City</th>
                      <th>Email</th>
                      <th>Mobile Number</th>
                      <th>Branch Name</th>
                      
                       <th>Active or Deactive</th>
                      <!-- <th>Actions</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     
                      <?php
                      include("coon.php");

$result = mysql_query("select * from agent_details");
while($row = mysql_fetch_assoc($result)){


            ?>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['address']; ?></td>
                      <td><?php echo $row['city']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['mobile_no']; ?></td>
                      <td><?php echo $row['branch_name']; ?></td>
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
