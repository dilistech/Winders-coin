<?php
require_once 'inc/sign-header.php';

include_once 'inc/database.php';

$ref_id = $_GET['ref'];


//Load Composer's autoloader
require 'phpmailer/vendor/autoload.php';
 use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$error = [];
$id = '';
$email = '';
$first_name = '';
$last_name = '';    
$phone = '';
$pass = '';
$confirm_pass = '';
$wallet_address = '';


if (isset($_POST['submit'])) {   
    $email = trim($_POST['email']);
    $id = md5(time().$email);
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];    
    $phone = $_POST['phone'];
    $pass = trim($_POST['pass']);
    $pass_md5= md5($pass);
    $confirm_pass = trim($_POST['comfirm_pass']);
    $wallet_address = $_POST['wallet_address'];
    $otp = rand(10000, 99999);

    $query = 'SELECT COUNT(*) FROM user WHERE email = :email LIMIT 1';
    $stmtCheck = $pdo->prepare($query);
    $stmtCheck->bindParam(':email',$email);
    $stmtCheck->execute();
    $row = $stmtCheck->fetchColumn();    
    if ($row > 0 ) {
        array_push($error,'Email already exist');
    }
    elseif ($pass != $confirm_pass) {
       array_push($error,'Password do not match');
    }
    elseif (empty($email)) {
       array_push($error,'Email fild cannot be empty');
    }
    else{  
        
        $sql = 'INSERT INTO user (id, first_name, last_name, email,phone, pass, wallet_address, otp_code) VALUES (:id,:first_name,:last_name,:email,:phone,:pass,:wallet_address,:otp)';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id,'first_name' => $first_name,'last_name' => $last_name,'email' => $email,'phone' => $phone,'pass' => $pass_md5,'wallet_address' => $wallet_address,'otp'=> $otp]);
        
        if ($ref_id != '') {
        $query = 'SELECT * FROM user WHERE id = :id LIMIT 1';
        $stmtCheck = $pdo->prepare($query);
        $stmtCheck->bindParam(':id',$ref_id);
        $stmtCheck->execute();
        $row = $stmtCheck->fetch();  

        if ($row) {
         $sql = 'INSERT INTO referral ( user_id, ref_id) VALUES (:user_id,:ref_id)';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['user_id' => $id,'ref_id'=> $ref_id]);

        //Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
   $mail->isSMTP();

$mail->Host = 'smtp.gmail.com';

$mail->Port = 587;

$mail->SMTPSecure = 'tls';

$mail->SMTPAuth = true;

$mail->Username = 'elitepay.net@gmail.com';

$mail->Password = 'Letsgoin7';

$mail->setFrom('elitepay.net@gmail.com','Elite-pay');
    $mail->addAddress($row->email, $row->first_name . ' ' . $row->last_name);     //Add a recipient
    
    $body = '<h2>You have referred a new client.</h2>';
    $body .= '<p>User Id:'.$id.'</p>';
    $body .= '<p>Email:'.$email.'</p>';

    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'You have new referral';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send(); 
 
    
} 
catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}       

        }               
         
        
        
        }
       



 $body = 'Thank you for signing up with Elite-pay. Click on the link to activate your account<br/>';
 $body .= '<a href="https://elite-pay.net/verify.php?otp='.$otp.'&id='.$id.'">Activate Account<a>';









//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();

$mail->Host = 'smtp.gmail.com';

$mail->Port = 587;

$mail->SMTPSecure = 'tls';

$mail->SMTPAuth = true;

$mail->Username = 'elitepay.net@gmail.com';

$mail->Password = 'Letsgoin7';

$mail->setFrom('elitepay.net@gmail.com','Elite-pay');
    $mail->addAddress($email, $first_name . ' ' . $last_name);  //Add a recipient
       

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Email Verification';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();  
    session_start();

$_SESSION['email'] = $email;
$_SESSION['id'] = $id;

header('location: thank-you.php'); 
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}       


    
    }


         

  
    
   
    
}
?>
<div style="height:100vh" class="contact-form">


    <div class="form-container">
        <div class="form-header">
            <h2>Sign up form</h2>
            <h4>It's quick and easy

            </h4>
            <p style="font-size:0.8em;color:red">
                <?php 
                if (!empty($error)) {
                    foreach($error as $e){
                        echo $e.'<br/>';
                    }
                }
                
                ?></p>
        </div>
        <form id="sign-up-form" action="" method="post">
            <div class="row-1">
                <input id="first-name" name="first_name" type="text" placeholder="First Name"
                    value="<?php echo $first_name;?>" required>
                <input id="last-name" name="last_name" type="text" placeholder="Last Name"
                    value="<?php echo $last_name ;?>" required>
            </div>
            <div class="row-1">
                <input id="email" name="email" type="email" placeholder="Email" value="<?php echo $email; ?>" required>
                <input id="phone" name="phone" type="tel" placeholder="Phone 124-456-678" value="<?php echo $phone; ?>"
                    required minlength="9" maxlength="16">
            </div>
            <div class="row-1">
                <input id="pass" name="pass" type="password" placeholder="Password" value="<?php echo $pass;?>"
                    required>
                <input id="comfirm-pass" name="comfirm_pass" type="password" placeholder="Comfirm Password"
                    value="<?php echo $confirm_pass; ?>" required>
            </div>
            <div class=" row-1">
                <input id="wallet-address" style="width:100%; margin-right: 0" name="wallet_address" type="text"
                    placeholder="Wallet Address" value="<?php echo $wallet_address;?>" required>

            </div>
            <div class=" row-1">
                <input id="ref-id" style="width:100%; margin-right: 0" name="wallet_address" type="text"
                    placeholder="Referral Link" value="<?php echo $ref_id;?>" disabled>

            </div>

            <div class="submit-container">
                <input id="submit" type="submit" name="submit" value="Register">

            </div>
        </form>
        <p class="form-footer">Already have account?
            <a href="sign-in.php">Sign In here</a>
        </p>
    </div>
</div>


<?php
require_once 'inc/sign-footer.php';

?>