<?php
session_start();
include 'config.php';
if (isset($_SESSION['user_id'])) {
    header('Location: dash.php');
    exit();
} else {
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QDAsset</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="ar.css">
    <meta property="og:title" content="QDAsset">
    <meta property="og:description" content="QDAsset. Inventory made simple.">
    <?php $pageURL = SITEURL . ltrim($_SERVER['REQUEST_URI'], '/');?>
    <meta property="og:url" content="<?php echo htmlspecialchars($pageURL, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:type" content="website">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
</head>
<body>
    <section id="head">
        <h1>QD<special>Asset</special> - Inventory made simple.</h1>
    </section>
    <section id="messages">
        <h1>What is QD<special>Asset</special> ?</h1>
        <hr>
        <p>QD<special>Asset</special> is a lightweight asset management system designed to be easy to use for both new and experienced users.</p>
    </section>
    <br> 
    <section id="messages">
        <a href="login.php"><p>Login/Register as staff</p></a>
    </section>
    <br><br>
    <div id="creditbar">
        <p>QD<special>Asset</special> was created by Adam Gillion</p>
    </div>
</body>
