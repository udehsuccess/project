<?php
// session_start();

// if(empty($_SESSION['username']))
// {
//     header('location: ./');
// }
// else
// {
//     include('assets/php/session.php');
//     include("assets/php/database.php");
//     $username = $_SESSION['username'];
//     $sql = "SELECT * FROM users WHERE username = '$username' ";

//     $result = mysqli_query($db, $sql);

//     // Count users
//     $countUser = "SELECT * FROM users";

//     if ($countResult=mysqli_query($db,$countUser))
//     {
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
// 		$fund_code = $row['fund_code'];

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
    <title>Fund Account</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="fund_account.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <?php include_once('navigation.php'); ?>


        <?php include_once('wallet_links.php'); ?>



        <?php include_once('board.php'); ?>

        <section class="formal">
            <ul class="basic-list">
                <li class="">
                    <p>* Copy the wallet address provided below.</p>
                </li>
                <li class="">
                    <p>* Make payment from your Bitcoin wallet. (Send the equivalent bitcoin amount of the amount you
                        wish to invest).</p>
                </li>
                <li class="">
                    <p>* Provide your transaction hash ID. This can be gotten from your wallet after payment.</p>
                </li>
                <li class="">
                    <p>Bitcoin ID:14sD4RTXt7gbyojSCcBgFuKjAqSe9ZEpN5</p>
                </li>
            </ul>
            <p class="pay">
                Your account will be credited once your payment is confirmed. <br>NOTE: If you have problems finding
                your Transaction Hash ID, Use the last 10 digits of your wallet address as the Transaction Hash ID.
                <br>If you encounter any issue while funding your account, please contact payments@CryptoCoin35.com for
                assistance.
            </p>
        </section>

        <div class="fund">
            <div class="title">
                WITHDRAW FUNDS
            </div>
            <form action="" method="POST">
                <input type="hidden" name="user_id" style="height: 40px; font-size: 14px;" />
                <input type="hidden" name="account_type" value="" style="height: 40px; font-size: 14px;" />
                <input type="hidden" name="fund_code" value="" style="height: 40px; font-size: 14px;" />



                <div class="user-box" id="user">

                    <label class="col">Username: </label>
                    <input type="text" class="form-control" name="username" readonly required value="">
                </div>

                <div class="user-box" id="amount">
                    <label class="col">Withdrawal Amount: </label>
                    <input type="number" class="form-control" name="wAmount" min="$50000" placeholder="Enter Amount">
                </div>

                <div class="user-box" id="address">
                    <label class="col-sm-2 col-form-label">Withdrawal Code: </label>
                    <input type="text" class="form-control" readonly name="withdrawcode" required value="">
                </div>

                <div class="user-box plan" id="plans">
                    <label class="col" for="plan_selected">Withdrawal Request: </label>
                    <select class="form-control" name="plan_selected" required>
                        <option value="Bank Transfer">Bank Transfer</option>
                        <option value="Bitcoin">Bitcoin</option>
                        <option value="Others">Others</option>
                    </select>
                </div>

                <div class="user-box" id="description">
                    <label class="col">Description</label>
                    <textarea rows="6" cols="26" name="bitDesc" class="form-controls"
                        placeholder="Enter Description (Optional)"></textarea>
                </div>
                <div class="user-box" id="button">
                    <button name="withdraw" class="submit">Request Withdrawal</button>
                </div>
            </form>
        </div>


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
//}
?>