   <div class="col-md-6 col-lg-6  col-lg-offset-1 col-sm-12 col-xs-12 smt-40">
                        <div class="reguest__quote">
                            <div class="section__title text-left">
                                <h2 class="title__line">REQUEST A <span class="text--theme">QUERY</span></h2>
                                <p>Get Royal homes at affordable prices. Enquire now!</p>
                            </div>
                            <form  action="" method="POST">
                                    <?php
$rand1=substr(rand(),0,4);

?>
                                <div class="clint__comment__form">
                                    <div class="single__cl__form">
                                        <input name="name" type="text" placeholder="Name" required>
                                        <input name="email" type="email" placeholder="Email" required>
                                      
                                    </div>
                                    <div class="single__cl__form">
                                          <input name="mobile" type="number" placeholder="Phone" required>
                                            
                                                  <input type="text" name="code1" class="form-control"   placeholder="Enter Captcha" required>
                                                     <input type="text" value="<?=$rand1?>" id="ran1" readonly="readonly" class="form-control">
                                  
                                    </div>
                                    <div class="single__cl__message">
                                        <textarea name="message" placeholder="Message" required></textarea>
                                        <input type="hidden" name="chk1" value="<?=$rand1?>">
                                    </div>
                                    <div class="clint__submit__btn">
                                        <button class="submit htc__btn" type="submit" name="submit">
                                            SEND MESSAGE 
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
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
                        $to = "info@radhahomes.com, enquiries@gaconsulting.in";
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

<td>$message</td>





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