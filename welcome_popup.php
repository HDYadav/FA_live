<!DOCTYPE html>
<html>
<head>
  <title>First Advisor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style type="text/css">
  	 modal{
  	 	background:#ffffff;
  	 	border:none;
  	 	
  	 }
  	 .modal-header{
  	 	border:none;
  	 }
  	 .modal-txt h2{
  	 	color:#ffffff;
  	 	font-family:Comic Sans MS;
  	 }
  </style>
</head>

<body>
<!-- Trigger the modal with a button if you want button click -->
<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style=" background:#ffffff;">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content shadow" style=" background:#3bc1c5; border-radius: 10px;">
      <!-- <div class="modal-header">
      
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body text-center">
          <div class="logo-header col-md-5 m-auto">
           <img src="images/shadow_logo.png" class="d-block w-100">
           </div>
            <div class="modal-txt text-center mt-3">
              <h2>Welcome to  First Advisor Insurance </h2> 
               <h4>POSP Name : Demo Name</h4>   
           </div>
      </div>
     
    </div>
  </div>
</div>


<script type="text/javascript">
    $(window).on('load',function(){
        $('#exampleModal').modal('show');
    });
</script>
</body>
</html>