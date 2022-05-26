<?php
// session_start();

// if (empty($_SESSION['username'])) {
//     header('location: ./');
// } else {
//     include('assets/php/session.php');
//     include("assets/php/database.php");
//     $username = $_SESSION['username'];
//     $sql = "SELECT * FROM users WHERE username = '$username' ";

//     $result = mysqli_query($db, $sql);

//     // Count users
//     $countUser = "SELECT * FROM users";

//     if ($countResult = mysqli_query($db, $countUser)) {
//         // Return the number of rows in result set
//         $totalNumberOfRows = mysqli_num_rows($countResult);
//     }

//     while ($row = mysqli_fetch_array($result)) {
//         $fname = $row['fname'];
//         $lname = $row['lname'];
//         $accountBal = $row['account_bal'];
//         $country = $row['country'];
//         $currency = $row['currency'];
//         $invested_balance = $row['invested_balance'];
//         $bitcoin_bal = $row['bitcoin_bal'];
//         $lastSeen = $row['last_seen'];

//         $currentTime = date("Y/m/d H:i:s", strtotime("now"));



/*examnple adding time
        $updateAcctBal = "UPDATE users SET updated_account_bal_time = '$proposedTime'  WHERE username = '$username'";*/

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <?php include_once('navigation.php'); ?>


        <?php include_once('wallet_links.php'); ?>



        <?php include_once('board.php'); ?>



        <section class="widget">
            <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script>
            <div class="coinmarketcap-currency-widget" data-currencyid="1" data-base="USD" data-secondary=""
                data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-statsticker="true"
                data-stats="USD"></div>
        </section>

        <section class="compare">
            <script src="https://widgets.coingecko.com/coingecko-coin-market-ticker-list-widget.js"></script>
            <coingecko-coin-market-ticker-list-widget coin-id="bitcoin" currency="usd" locale="en">
            </coingecko-coin-market-ticker-list-widget>
        </section>

    </div>







    <div class="toggle" onclick="toggleMenu()"></div>

    <script type="text/javascript">
    function toggleMenu() {
        let navigation = document.querySelector('.navigation');
        let toggle = document.querySelector('.toggle');
        navigation.classList.toggle('active');
        toggle.classList.toggle('active');
    }
    </script>
</body>

</html>

<?php
//}
// }
?>