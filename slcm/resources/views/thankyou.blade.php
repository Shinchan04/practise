<?php
$statusMsg = '';
$msgClass = '';
if(isset($_POST['Submit'])){
    // Get the submitted form data
    $name = $_POST['name'];
	$phone = $_POST['phone'];
    $business = $_POST['business'];
	$state = $_POST['state'];
    $city = $_POST['city'];
    
    
    // Check whether submitted data is not empty
    if(!empty($name) && !empty($email)){
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
            $msgClass = 'errordiv';
        }else{
            // Recipient email
            $toEmail = 'info@themarketingninjas.com';
			//$toEmail = '';
            $emailSubject = 'SLCM Loan Request by '.$name;
            $htmlContent = '<h2>Booking Request Form </h2><table cellspacing="0" style="border: 2px dashed #FB4314; width: 500px; height: 200px;">
            <tr>
                <th width="150">Full Name :</th><td>'.$name.'</td>		
            </tr>
			<tr>
               <th>Phone :</th><td>'.$phone.'</td>
            </tr>
			<tr>
               <th>Existing Business :</th><td>'.$business.'</td>		
            </tr>
			<tr>
               <th>State :</th><td>'.$state.'</td>		
            </tr>            
             <tr>
               <th>City :</th><td>'.$city.'</td>
            </tr>
			
			</table>';
            
            // Set content-type header for sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
            // Additional headers
            //$headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";
            $headers .= 'From: '.$name.'<digital@themarketingninjas.com>'. "\r\n";
            
            // Send email
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                $statusMsg = 'We value your interest in Loan. If your inquiry is urgent, please use the telephone numbers listed above to talk to one of our experts right away. Otherwise, we will get in touch with you as soon as possible.';
                $msgClass = 'succdiv';
            }else{
                $statusMsg = 'Your contact request submission failed, please try again.';
                $msgClass = 'errordiv';
            }
        }
    }else{
        $statusMsg = 'Please fill all the fields.';
        $msgClass = 'errordiv';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SLCM</title>


<style>
body{ background:#edf7f3;}
p.statusMsg{font-size:20px; font-family:'Oswald', sans-serif;}
p.succdiv{color: #0c5fa0; text-align:center; font-family:'Oswald', sans-serif;}
p.errordiv{color:#E80000; font-family:'Oswald', sans-serif;}
.pagetitle{
color: #4cb189;
text-align: center;
font-size: 100px;
font-family:'Oswald', sans-serif;
margin: 200px 0px 50px 0px;
}
.goto-home{ text-align:center;}
.goto-home a{ text-transform:uppercase; background:#0c5fa0; padding:10px; color:#fff;}
</style>



<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1082005955840649');
fbq('track', 'PageView');
fbq('track', 'Lead');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1082005955840649&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->



<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11024628300"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11024628300');
</script>

<!-- Event snippet for Sohan Lal conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-11024628300/8KZqCIyni4IYEMz0-Ygp'});
</script>


  
</head>

    <body>
    


           
        
    <section>
        <div class="container-fluid top-pad bottom-pad">
            <div class="container tc">
                <div class="pagetitle">Thank You</div>
				
				<!------dynamic call ------>
				
                <?php /*?><?php if(!empty($statusMsg)){ ?>
                    <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo "Hello".$statusMsg; ?></p>
                        <?php } ?><?php */?>
	   
	                <!------End of dynamic call ------>
	   
                    <!------static call ------>
                    <p class="statusMsg succdiv"> <?php echo "We value your interest in Loan. If your inquiry is urgent, please use the telephone numbers listed below to talk to one of our counselors right away. Otherwise, we will get in touch with you as soon as possible."; ?></p>
                    <p class="goto-home"><a href= "https://sohanlal.in/">Go to Homepage</a></p>
                    <!------End of static call ------>
                    <br>
            </div>
        </div>
    </section>    
       
       
    </body>
</html>     