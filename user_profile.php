<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fund Account</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="fund_account.css">
    <link rel="stylesheet" href="popup.css">

    <link rel="icon" href="assets/img/favicon.html" type="image/x-icon">

    <!-- FONTAWESOME STYLES-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <link rel="stylesheet" href="assets/icofont/icofont.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <?php include_once('navigation.php'); ?>


        <?php include_once('wallet_links.php'); ?>



        <?php include_once('board.php'); ?>


        <section class="formal">
            <ul>
                <li>
                    <h5 class="card">About Me </h5> <span> Referral Link: <a href="registration.html" class="success"
                            target="_blank">https://forexcoinoptions.com/registration.html/?ref=
                    </span></a>
                </li>
            </ul>
            <p class="pay">
                <i class="fa fa-edit" title="Edit Profile" id="open-popup-btn"></i>
            <div class="popup center">
                <!-- <div class="icon">
            <i class="fa fa-check"></i>
        </div> -->
                <div class="updated">
                    <form action="" method="post">
                        <div class="edit">
                            <label for="">Name:</label>
                            <input type="text" name="name" placeholder="Edit User" value="" class="stack">
                        </div>
                        <div class="edit" id="edit">
                            <label for="">Phone:</label>
                            <input type="phone" name="phone" placeholder="Edit Number" value="" class="stack">
                        </div>
                        <div class="edit">
                            <button type="submit" class="btns">Edited</button>
                        </div>
                    </form>
                </div>
                <!-- <div class="description">
            
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis modi porro corrupti perspiciatis quidem!!!
        </div> -->
                <div class="dismiss-btn">
                    <button id="dismiss-popup-btn">
                        Dismiss
                    </button>
                </div>
            </div>
            <!-- <div class="center">
        <button id="open-popup-btn">
            Open Popup
        </button>
    </div> -->
            </p>
        </section>

        <table class="table">
            <tbody>
                <tr>
                    <th scope="row">Full Name</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Email</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Trade Currency</th>
                    <td>$f1232 </td>
                </tr>
                <tr>
                    <th scope="row">Account Status</th>
                    <td><span class='label label-success'>Verified</span></td>
                </tr>
                <tr>
                    <th scope="row">Balance</th>
                    <td>0</td>
                </tr>

                <tr>
                    <th scope="row">Country</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Mobile Number</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Edit Profile</th>
                    <td>Click the ICON above to edit Profile</td>
                </tr>
            </tbody>
        </table>
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

    <script>
    document.getElementById("open-popup-btn").addEventListener("click", function() {
        document.getElementsByClassName("popup")[0].classList.add("active");
    });

    document.getElementById("dismiss-popup-btn").addEventListener("click", function() {
        document.getElementsByClassName("popup")[0].classList.remove("active");
    });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>