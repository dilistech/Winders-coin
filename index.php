<?php
require_once 'inc/database.php';

$crypto_sql = 'SELECT * FROM `packages` ';
        $crypto_stmt = $pdo->prepare($crypto_sql);
        $crypto_stmt->execute();
        $crypto_rows = $crypto_stmt->fetchAll();

        



require_once 'inc/header.php';

?>
<div>
    <div id="google_translate_element">
        <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
        </script>
    </div>
</div>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active intro">
            <div class="hero" style="background-image: url('assets/imgs/banner-1.jpg');"></div>
            <div class="intro-content">
                <h3>smooth investments with</h3>
                <h1>Winders Coin</h1>
                <p>
                    Winders Coinstart from R300 with the maximum of R100000 with option to choose between 3 plans
                </p>
                <a class="btn btn-primary" href="sign-up.php">Become a member</a>
            </div>
        </div>
        <div class="carousel-item intro">
            <div class="hero" style="background-image: url('assets/imgs/banner-2.jpg');"></div>
            <div class="intro-content">
                <h3>raise unlimited bonuses with</h3>
                <h1>Winders Coin</h1>
                <p>
                    Get 10% bonus of your downliners first paid investments when you share your link and recruit others
                </p>
                <a class="btn btn-primary" href="sign-up.php">Become a member</a>
            </div>
        </div>
        <div class="carousel-item intro">
            <div class="hero" style="background-image: url('assets/imgs/banner-3.jpg');"></div>
            <div class="intro-content">
                <h3>Get Full Premium <br>Investment Access</h3>
                <h1>Winders Coin</h1>
                <p>
                    Tap into the power of cryptocurrency, and jumpstart your earnings! <br> we provide safe and easy
                    platform to invest and recieve crypto earnings
                </p>
                <a class="btn btn-primary" href="sign-up.php">Become a member</a>
            </div>
        </div>

    </div>
</div>
<section>
    <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinMarquee.js"></script>
    <div id="coinmarketcap-widget-marquee" coins="1,1027,825,4687,3408,52,1958,4195,5805,74,3890,1831,2010,6892,4030"
        currency="USD" theme="dark" transparent="false" show-symbol-logo="true"></div>
</section>
<div class="about-us">
    <div class="container">
        <h2 style="color: white;">ABOUT US</h2>

        <div class="row">
            <div class="col-sm-6">
                <img class="img-fluid" src="assets/imgs/finance.jpg" alt="">
            </div>
            <div class="col-sm-6">
                <p class="about-p">Winders Coin team has a unique mixture of technology and operating expertise in the
                    distributed ledger systems as well as financial and capital markets experience – this unique skill
                    set allows for sophisticated technical and valuation analysis within the portfolio construction
                    process. With team located all around the world, Winders Coin has 24-hour coverage of the
                    constantly trading digital assets.

                    With years of successful experience Winders Coin has built the the safest, most efficient and
                    convenient online investing platform centered on online assets trading. We offer superb business
                    solutions to each of our clients under transparent and completely clear conditions. We give
                    opportunities and implement them based on our investment program, which takes your income to a
                    completely new level.

                </p>
                <p>
                    Winders Coin is the first registered digital asset investment company that provides services
                    with a secure and fast transaction infrastructure developed by world standards, in governence of the
                    expert team and experienced advisory board.
                </p>
                <p>
                    <a class="btn btn-primary" href="about.php">Read More</a>
                </p>
            </div>

        </div>
    </div>

</div>


<div class="container">


    <!-- <script src="https://cdn.jsdelivr.net/gh/coinponent/coinponent@1.2.6/dist/coinponent.js"></script>

    <coin-ponent dark-mode></coin-ponent> -->
    <div id="investments" class="wrapper">
        <div class="investments">
            <h2>WINDERS COIN INVESTMENT PLANS</h2>
            <div class="investment">
                <?php foreach ($crypto_rows as $row): ?>
                <div class="pricing-plans">
                    <div class="plans">
                        <ul>
                            <li style="font-size: 3em;color: #9b9bb1;" class="items">
                                <?php echo $row -> interest_rate  ?>% </li>
                            <li class="items">After 24 Hours
                                <!-- <?php echo $row -> interest_rate_duration  ?> Day(s)</li> -->
                            <li style="font-size: 1.2em;">Minimum Deposit: <span
                                    style="font-weight:bold;color: #c9c8c0;">$<?php echo number_format($row -> min,2)  ?></span>
                            </li>
                            <li style="font-size: 1.2em;">Maximum Deposit: <span
                                    style="font-weight:bold;color: #c9c8c0;">$<?php echo number_format($row -> max,2)  ?></span>
                            </li>
                            <li>Weekends included</li>
                            <li>Automated Payout</li>
                            <li>*Capitals are Withdrawable</li>
                            <li class="items items-1"><?php echo $row -> name  ?></li>
                            <li class="anchor-list">
                                <a href="/sign-up.php">Choose Plan</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>


    </div>

    <div style="padding:0 10px; margin: 10px 0" class="seen">
        <div class="row">
            <div class="col-sm-12 ">
                <span class="seen-span">AS SEEN ON</span>
            </div>
            <div class="seen"><img src="assets/imgs/bloomberg.png" alt=""></div>
            <div class="seen"><img src="assets/imgs/reuters.png" alt=""></div>
            <div class="seen"><img src="assets/imgs/theguardian.png" alt=""></div>
            <div class="seen"><img src="assets/imgs/cnbc.png" alt=""></div>
            <div class="seen "><img src="assets/imgs/cctv.png" alt=""></div>
        </div>


    </div>

</div>

<div class="service">
    <div class="container">
        <h2>WHAT WE SERVICE</h2>
        <h4>GLOBAL PEER-TO-PEER TEAM CROWDFUNDING PROGRAM.</h4>
        <div class="row">
            <div class="col-sm-5 service-content">
                <h3><span class="fa fa-check"></span>
                    EASY TO USE</h3>
                <p>The platform designed terms out unnecessary complications and thus it is easy to use for all.</p>
            </div>
            <div class="col-sm-5 service-content">
                <h3><span class="fa fa-flash"></span> SUPERFAST TRANSACTIONS</h3>
                <p>There is no lag in the system making it more convienient for users. The system is tested in
                    multiple
                    ways
                    to rule out any & every possible error.</p>
            </div>
            <div class="col-sm-5 service-content">
                <h3><span class="fa fa-refresh"></span> AUTOMATED SYSTEM</h3>
                <p>The platform odds out human interference in the system making it completely automatic, thus there
                    is
                    no
                    way to stop the platform.</p>
            </div>
            <div class="col-sm-5 service-content">
                <h3><span class="fa fa-hourglass"></span> EQUAL OPPORTUNITY</h3>
                <p>The platform provides a fair chance to earn 128 BTC to each of it's user by completing a
                    simple
                    binary
                    matrix, while one also continue to get global referrals income from the upline & the
                    downline.
                </p>
            </div>
            <div class="col-sm-5 service-content">
                <h3><span class="fa fa-btc"></span> INSTANT EARNINGS/INSTANT WITHDRAWLS</h3>
                <p>The profit routes from other members directly to your account in the real-time. Thus, simplifying
                    the
                    withdrawl processes.</p>
            </div>
            <div class="col-sm-5 service-content">
                <h3><span class="fa fa-lock"></span> SECURED PLATFORM</h3>
                <p>We have spent countless time developing our secure platform in order to provide high level
                    security
                    platform that keep our users safe from today's online threats.</p>
            </div>
        </div>
    </div>
</div>
<div class="how-it-works">
    <div class="container">

        <h2>How to earn</h2>


        <div class="flex">
            <div class="font "><i class="fa fa-user-plus"></i></div>
            <div class="detail ">
                <h3>Register</h3>
                <p>Create your free account and follow our easy process to set up your profile</p>
            </div>
        </div>
        <div class="flex">
            <div class="font"><i class="fa fa-trophy"></i></div>
            <div class="detail ">
                <h3>Select Plan</h3>
                <p>Select your prefered investment package from our list of smart investment plans to get started.
                </p>
            </div>

        </div>
        <div class="flex">
            <div class="font"><i class="fa fa-money"></i></div>
            <div class="detail ">
                <h3>Invest and Earn</h3>
                <p>Fund your investment plan to kick start your investment portfolio.</p>
            </div>

        </div>
        <div class="flex">
            <div class="font"><i style="color:goldenrod" class="fa fa-money"></i></div>
            <div class="detail ">
                <h3>Payment</h3>
                <p>Withdrawn Amount will be sent to your wallet address within 48hrs of request.</p>
            </div>

        </div>
    </div>


</div>
<div class=" assurance">
    <div class="container">
        <h2>Here are some amazing reasons why you should invest with us</h2>
        <div class="flex assure">
            <div>
                <h3><span style="color:green" class="fa fa-globe"></span>Worldwide Access</h3>
                <p>Invest with us no matter where you are located. No restrictions even for users from China or USA.
                </p>
            </div>
            <div>
                <h3><span style="color:brown" class="fa fa-registered"></span>Protected By Insurance</h3>
                <p>All crypto assets on our platform are safe and covered by our premuim insurance policy.</p>
            </div>
            <div>
                <h3><span style="color:purple" class="fa fa-lock"></span>High Security</h3>
                <p>We secure all user data by using 256-bit EV SSL security certificate.</p>
            </div>
            <div>
                <h3><span style="color:goldenrod" class="fa fa-money"></span>Instant Payments</h3>
                <p>Your bitcoins are sent to your wallet address automatically.</p>
            </div>
            <div>
                <h3><span style="color:darkcyan" class="fa fa-support"></span>Online Support</h3>
                <p>Our support will answer your questions in shortest time possible.</p>
            </div>
            <div>
                <h3><span style="color:blue" class="fa fa-diamond"></span>High Profitability</h3>
                <p>We tend to be the cryptocurrency investments with highest ROI</p>
            </div>
        </div>

    </div>


</div>
<div class="show-case-bg">
    <div class="container">

        <div class="show-case">
            <div>
                <p class="customise">
                    <span class="fa fa-flag"></span>
                    <span id="customer-support-counter">53</span>
                    <span class="fa fa-plus"></span>
                </p>
                <p>Countries Support</p>
            </div>
            <div>
                <p class="customise">
                    <span class="fa handshake-o"></span>
                    <span id="happy-customer-counter">91453476</span>
                    <span class="fa fa-plus"></span>

                </p>
                <p>Happy Customers</p>
            </div>
            <div>
                <p class="customise">
                    <span class="fa fa-money"></span>
                    <span id="total-transactions-done-counter">89453424</span>
                    <span class="fa fa-plus"></span>

                </p>
                <p>Total Transactions Done</p>
            </div>
            <div>
                <p class="customise">
                    <span class="fa"></span>
                    <span id="team-members-counter">280</span>
                    <span class="fa fa-plus"></span>

                </p>
                <p>Team Members</p>
            </div>
        </div>
    </div>


</div>

<div class="testimonial container">
    <div class="row">
        <div class="col-sm-6">
            <h3>What our investors are saying about us</h3>
            <p>We use the reviews of our investors as the yard stick to measure how well or otherwise we are doing
                in
                the dispensation of our services to our investors all over the world.
                We are always happy to share the positive reviews of our investors and improve on the areas we have
                been
                found wanting.</p>
        </div>
        <div class="col-sm-6">
            <h3></h3>
            <div>
                <div>
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col sm-2 offset-sm-1">
                                        <img src="assets/imgs/reviewer1.jpg" alt="">
                                    </div>
                                    <div class="col sm-9">
                                        <p>Definetly worth the investment. I was completly blown away.
                                            made I made the capital plus earnings that's amazing.
                                        </p>
                                        <h4>James Bay</h4>
                                        <h5>Florida,USA </h5>

                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col sm-2 offset-sm-1">
                                        <img src="assets/imgs/reviewer2.jpg" alt="">
                                    </div>
                                    <div class="col sm-9">
                                        <p>Surpassed my expectations, thank you for making the process painless
                                            pleasant and most of all hassle free.
                                        </p>
                                        <h4>Miriam ken</h4>
                                        <h5>Prague, Czech Republic</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col sm-2 offset-sm-1">
                                        <img src="assets/imgs/reviewer3.jpg" alt="">
                                    </div>
                                    <div class="col sm-9">
                                        <p>I have made over 5,000 dollars,I am amazed at the quality of service.
                                            Winders Coin is both attractive and highly adaptable.
                                        </p>
                                        <h4>Linda Kim</h4>
                                        <h5>Budapest, Hungary </h5>

                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col sm-2 offset-sm-1">
                                        <img src="assets/imgs/reviewer4.jpg" alt="">
                                    </div>
                                    <div class="col sm-9">
                                        <p>Transparent, profitable, and reliable bitcoin investment company
                                            that will
                                            make you
                                            real money. Thanks to all of you at winderscoin.com for the excellent
                                            service.
                                        </p>
                                        <h4>Ben Klose</h4>
                                        <h5>Capetown, South Africa </h5>

                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col sm-2 offset-sm-1">
                                        <img src="assets/imgs/reviewer5.png" alt="">
                                    </div>
                                    <div class="col sm-9">
                                        <p>I have always been searching for an opportunity to earn on bitcoin and
                                            finally I
                                            found primestrade.net and they have proven to be very reliable since
                                            i've been investing with them.
                                        </p>
                                        <h4>Lilian Ricco</h4>
                                        <h5>Bravaria, Germany </h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once 'inc/footer.php';?>