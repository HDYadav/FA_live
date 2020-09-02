<?php
if(isset($_POST['submit'])){

    //collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];

   

    //if no errors carry on
    if(!isset($error)){

        //create html of the data
        ob_start();
        ?>

        <h1>Data from form</h1>
        <p>Name: <?php echo $name;?></p>
        

        <?php 
        $body = ob_get_clean();

        $body = iconv("UTF-8","UTF-8//IGNORE",$body);

        include("mpdf/mpdf.php");
        $mpdf=new \mPDF('c','A4','','' , 0, 0, 0, 0, 0, 0); 

        //write html to PDF
        $mpdf->WriteHTML($body);
 
        //output pdf
        $mpdf->Output('cirtificate.pdf','D');

        //save to server
        //$mpdf->Output("mydata.pdf",'F');



    }
}

//if their are errors display them
if(isset($error)){
    foreach($error as $error){
        echo "<p style='color:#ff0000'>$error</p>";
    }
}
?> 

<form action='' method='post'>

<p><input type='submit' name='submit' value='Submit'></p> 
</form>