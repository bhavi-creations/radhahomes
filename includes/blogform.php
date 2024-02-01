   <style>
       .blogform{
           width:100% !important;
           }
   </style>

                        <div class="reguest__quote">
                            <div class="section__title text-left" style="margin-bottom:24px">
                                <h2 class="title__line" style="font-size:22px !important">REQUEST A QUOTE</h2>
                                
                            </div>
                            <form  action="" method="POST">
                                    <?php
$rand1=substr(rand(),0,4);

?>
                             <div class="row">
                                 <div class="col-md-12">
                                           <div class="single__cl__form blogform">
                                       <input name="name" type="text" placeholder="Name" class="blogform" required>
                                       </div>
                                 </div>
                                 <div class="col-md-12">
                                        <div class="single__cl__form blogform">
                                      <input name="email" type="email" placeholder="Email" class="blogform" required>
                                        </div>
                                 </div>
                                 <div class="col-md-12">
                                        <div class="single__cl__form blogform">
                                     
                                          <input name="mobile" type="number" placeholder="Phone" class="blogform" required>
                                            </div>
                                 </div>
                                 <div class="col-md-12">
                                        <div class="single__cl__form blogform">
                                     <input type="text" name="code1"  placeholder="Enter Captcha" required class="blogform">

                                        </div>
                                 </div>
                                    <div class="col-md-12">
                                        <div class="single__cl__form blogform">
                                     <input type="text" value="<?=$rand1?>" id="ran1" readonly="readonly" class="blogform">
                                        </div>
                                           <input type="hidden" name="chk1" value="<?=$rand1?>">
                                 </div>
                             </div>
                                      
                                       
                                       
                                    
                                    <div class="clint__submit__btn">
                                        <button class="submit htc__btn" type="submit" name="submit">
                                            SEND MESSAGE 
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <!--<p class="form-messege"></p>-->
                        </div>
              
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                     
        <?php
                            if(isset($_POST['submit'])){
                                 $one=$_POST['code1'];
$two=$_POST['chk1'];


if($one==$two)
{

$y=yes;
                        extract($_POST);
                        //print_r($_POST);exit;
                        $to = "enquiries@gaconsulting.in, info@radhahomes.com";
                        $from="Radha Homes Enquiry Form";
$subject = "contact form for Radha Homes";

$message = "
<html>
<head>
<title>contact form for Radha Homes</title>
</head>
<body>

<table border='1'>
<tr>
<th>Name</th>
<th>Mobile</th>
<th>Email</th>

<th>Message</th>


</tr>
<tr>
    <td>$name</td>
<td>$mobile</td>
<td>$email</td>





</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: Radha Homes Form submission' . "\r\n";


mail($to,$subject,$message,$headers);
    echo '<script type="text/javascript">';

echo 'window.location = "thank-you.php";';
echo '</script>';
 header('Location:thank-you.php');
}
    else
{
    echo '<script type="text/javascript">';
    
echo 'alert("Enter correct captcha");';
//echo 'window.location = "index.php";';
echo '</script>';


}
                    }
                       
                        ?>