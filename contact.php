<?php
require_once 'inc/header.php';
?>
<style>
body {

    background: #0f0f45;
}

main {
    margin: 70px 0;
}
</style>
<main class="contact">
    <div class="address">
        <span>United States: 3536 Badger Pond Lane, saint Petersburg, Florida 33711</span>
        <span>+(48)732-100-377</span>
    </div>




    <div class="contact-form">


        <div class="form-container">
            <div class="form-header">
                <h2>Contact support</h2>
                <h4>It's quick and easy</h4>
                <p></p>
            </div>
            <form action="inc/email-script.php" method="post">
                <div class="row-1">
                    <input type="text" name="name" placeholder=" Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="row-1">
                    <input style="width:100%" name="subject" type="text" placeholder="Subject" required>
                </div>
                <textarea name="message" id="" cols="30" rows="10" placeholder="Message" required></textarea>

                <div class="submit-container">
                    <input id="submit" name="sendMessage" type="submit" value="Send Message">

                </div>
            </form>
        </div>
    </div>
</main>
<?php
require_once 'inc/footer.php';
?>