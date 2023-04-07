<?php
$timestamp = strtotime($row ->reg_date);
$read_date = date('l jS \of F Y h:i:s A ', $timestamp);

$cr_sql = 'SELECT * FROM crypto ';
    $cr_stmt = $pdo->prepare($cr_sql);
    $cr_stmt->execute(['id' => $user_id]);
    $cr_rows = $cr_stmt->fetchAll();

    
?>
<div class="dash-head">
    <div style="background: #1e1e50;" class="container">
        <h1><a href="index.php" class="logo avatar"><img src="<?php echo $path?>" alt=""></a></h1>
        <h2>Winders Coin Dashboard </h2>
        <h3>Hi, <span style="text-transform: capitalize;"><?php echo $row -> first_name; ?></span></h3>
        <p> <span>EMAIL</span>: <?php echo $row -> email; ?> <span>JOIN DATE</span> : <?php echo $read_date; ?>
        </p>
        <p> Referrals - <?php echo $r_count; ?></p>
    </div>