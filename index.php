<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- font awesome link -->
    <script src="https://kit.fontawesome.com/78d167673c.js" crossorigin="anonymous"></script>

    <!-- google fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="/style/animation/2.6 animate.css.css">

    <link rel="stylesheet" href="./style/index.css">

</head>

<body>

    <div id="hero">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="hero-content text-left">
                            <h1>Claim Reward<br>Bonus/Airdrop</h1>
                            <!-- <a href="./barcode.html"></a> -->
                        </div>
                        <div class="hero-btn">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal72">Connect Wallet</button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal72" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <!-- <form> -->
                                        <div class="modal-header">
                                            <h5 class="modal-title modal_title" id="exampleModalLabel">Enter Wallet Address</h5>
                                            <h5><a href="./index"><i style="font-size: 14px; text-decoration: none; color: #fff !important;" class="fa fa-times" aria-hidden="true"></i></a></h5>
                                        </div>
                                        <div class="modal-body">
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                            <input required class="wallet-address" placeholder="0x00000000000000000000" type="text" name="address" id="">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <!-- <small>powered by wallet connect</small> -->
                                            <!-- <a href="./walletpage.html"><button type="button" class="btn btn_close">Close</button></a> -->
                                            <a href="./formpage"><button type="submit" class="btn btn_proceed">Proceed</button></a>
                                        </div>
                                        <!-- </form> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="card-section">
        <div class="content-box-md">
            <div class="container">

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="heading-text">
                            <h1>Please Select Issue Category</h1>
                            <small style="color: #fff">which of this is related to your issue?</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <button data-bs-toggle="modal" data-bs-target="#exampleModal72" class="service-card">
                            <img src="./assets/stake.png" alt="">
                            <h1>Staking/Unstaking</h1>
                            <small>To stake and unstake your tokens <br> Click here</small>
                        </button>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <button data-bs-toggle="modal" data-bs-target="#exampleModal72" class="service-card error-1">
                            <img src="./assets/dashboardicon.png" alt="">
                            <h1>Swap/Exchange</h1>
                            <small>Issues related to swapping and exchange of tokens <br> Click here</small>
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <button data-bs-toggle="modal" data-bs-target="#exampleModal72" class="service-card">
                            <img src="./assets/icons8-neutral-trading-80.png" alt="">
                            <h1>Migrate</h1>
                            <small>Need help migrating? <br> Click here</small>
                        </button>
                    </div>
                    <div class="col-md-6">
                        <button data-bs-toggle="modal" data-bs-target="#exampleModal72" class="service-card">
                            <img src="./assets/trilored.png" alt="">
                            <h1>Missing Funds</h1>
                            <small>Lost access to tokens and funds? <br> Click here</small>
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <button data-bs-toggle="modal" data-bs-target="#exampleModal72" class="service-card error-2">
                            <img src="./assets/icons8-warning-64.png" alt="">
                            <h1>Recover</h1>
                            <small>Need help gainig full access to lost tokens? <br> Click here</small>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="extras">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="extras-content text-center">
                            <small>Ready to start?</small>
                            <h1>We are here to provide help in any related issue you are having with your wallet account</h1>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal72">Get Started <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <Footer>
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-content">
                            <div class="footer-icons text-center">
                                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="footer-text text-center">
                            <h1><a href="">Terms &#38; Condition</a> | <a href="">Privacy Policy</a></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Footer>


    <script src="/script/jquery3.6.0.min.js"></script>

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="/script/waypoints/jquery.waypoints.min.js"></script>

    <script src="/script/counter/jquery.counterup.min.js"></script>

    <script src="/script/wow/wow.min.js"></script>
</body>

</html>