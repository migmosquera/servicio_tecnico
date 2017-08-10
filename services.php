<?php
require_once './controller/changeLanguaje.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Iphone Repair</title>
        <meta charset="utf-8">
        <meta name = "format-detection" content = "telephone=no" />
        <link rel="stylesheet" href="static/css/grid.css">
        <link rel="stylesheet" href="static/css/style.css">
        <link rel="stylesheet" href="booking/css/booking.css">
        <!--<script src="js/jquery.js"></script>
        <script src="js/jquery-migrate-1.2.1.js"></script>
        <script src="booking/js/booking.js"></script>
        <!--[if (gt IE 9)|!(IE)]><!-->
        <!--<script src="js/wow/wow.js"></script>
        <script>
          $(document).ready(function () {       
            if ($('html').hasClass('desktop')) {
              new WOW().init();
            }   
          });
        </script>-->

    </head>

    <body>

        <?php include './templateGobal/header.php'; ?>
        
        <section class="container_section">        

            <div class="bg-inset-6">
                <div class="container">
                    <div class="row">
                        <div class="grid_7 wow fadeInLeft">
                            <h3>iPHONE<span class="font-color-2 font-weight-light"><br>REPAIR PRICES</span></h3>

                            <div class="info-blok">
                                <div class="info-img">
                                    <img src="images/page3_img1.jpg" alt="">
                                    <h6 class="center-object">iPhone 5</h6>
                                </div>
                                <table class="info-data">
                                    <tr>
                                        <th class="th-1">Unlock</th>
                                        <th class="th-2">$ 64.99</th>
                                        <th class="th-3">GEVEY SIM</th>
                                    </tr>
                                    <tr>
                                        <th class="th-1">LCD</th>
                                        <th class="th-2">$ 59.99</th>
                                        <th class="th-3">5 MINUTE REPAIR!</th>
                                    </tr>
                                    <tr>
                                        <th class="th-1">Digitizer</th>
                                        <th class="th-2">$ 48.99</th>
                                        <th class="th-3">5 MINUTE REPAIR!</th>
                                    </tr>
                                    <tr>
                                        <th class="th-1">LCD/Digitizer</th>
                                        <th class="th-2">$ 89.99</th>
                                        <th class="th-3">5 MINUTE REPAIR!</th>
                                    </tr>
                                    <tr>
                                        <th class="th-1">Power flex</th>
                                        <th class="th-2">$ 34.99</th>
                                        <th class="th-3">SOME DAY REPAIR!</th>
                                    </tr>
                                    <tr>
                                        <th class="th-1">Rear cover</th>
                                        <th class="th-2">$ 44.99</th>
                                        <th class="th-3">SOME DAY REPAIR!</th>
                                    </tr>
                                    <tr>
                                        <th class="th-1">Battery</th>
                                        <th class="th-2">$ 59.99</th>
                                        <th class="th-3">LESS THEN 2 HOURS!</th>
                                    </tr>
                                    <tr>
                                        <th class="th-1">Home button</th>
                                        <th class="th-2">$ 48.99</th>
                                        <th class="th-3">LESS THEN 2 HOURS!</th>
                                    </tr>
                                    <tr>
                                        <th class="th-1">Ear speaker</th>
                                        <th class="th-2">$ 39.99</th>
                                        <th class="th-3">LESS THEN 2 HOURS!</th>
                                    </tr>
                                    <tr>
                                        <th class="th-1">Proximity flex</th>
                                        <th class="th-2">$ 34.99</th>
                                        <th class="th-3">SOME DAY REPAIR!</th>
                                    </tr>
                                </table>
                            </div>

                            <div class="info-blok-2">
                                <div class="info-img">
                                    <img src="images/page3_img2.jpg" alt="">
                                    <h6 class="center-object">iPhone 4s</h6>
                                </div>
                                <table class="info-data">
                                    <tr>
                                        <th class="th-1">Unlock</th>
                                        <th class="th-2">$ 64.99</th>
                                        <th class="th-3">GEVEY SIM</th>
                                    </tr>
                                    <tr>
                                        <th class="th-1">LCD</th>
                                        <th class="th-2">$ 59.99</th>
                                        <th class="th-3">5 MINUTE REPAIR!</th>
                                    </tr>
                                    <tr>
                                        <th class="th-1">Digitizer</th>
                                        <th class="th-2">$ 48.99</th>
                                        <th class="th-3">5 MINUTE REPAIR!</th>
                                    </tr>
                                    <tr>
                                        <th class="th-1">LCD/Digitizer</th>
                                        <th class="th-2">$ 89.99</th>
                                        <th class="th-3">5 MINUTE REPAIR!</th>
                                    </tr>
                                    <tr>
                                        <th class="th-1">Power flex</th>
                                        <th class="th-2">$ 34.99</th>
                                        <th class="th-3">SOME DAY REPAIR!</th>
                                    </tr>
                                    <tr>
                                        <th class="th-1">Rear cover</th>
                                        <th class="th-2">$ 44.99</th>
                                        <th class="th-3">SOME DAY REPAIR!</th>
                                    </tr>
                                    <tr>
                                        <th class="th-1">Battery</th>
                                        <th class="th-2">$ 59.99</th>
                                        <th class="th-3">LESS THEN 2 HOURS!</th>
                                    </tr>
                                    <tr>
                                        <th class="th-1">Home button</th>
                                        <th class="th-2">$ 48.99</th>
                                        <th class="th-3">LESS THEN 2 HOURS!</th>
                                    </tr>
                                    <tr>
                                        <th class="th-1">Ear speaker</th>
                                        <th class="th-2">$ 39.99</th>
                                        <th class="th-3">LESS THEN 2 HOURS!</th>
                                    </tr>
                                    <tr>
                                        <th class="th-1">Proximity flex</th>
                                        <th class="th-2">$ 34.99</th>
                                        <th class="th-3">SOME DAY REPAIR!</th>
                                    </tr>
                                </table>
                            </div>

                            <div class="info-blok-2">
                                <div class="info-img">
                                    <img src="images/page3_img2.jpg" alt="">
                                    <h6 class="center-object">iPhone 4</h6>
                                </div>
                                <table class="info-data">
                                    <tr>
                                        <th class="th-1">Unlock</th>
                                        <th class="th-2">$ 64.99</th>
                                        <th class="th-3">GEVEY SIM</th>
                                    </tr>
                                    <tr>
                                        <th class="th-1">LCD</th>
                                        <th class="th-2">$ 59.99</th>
                                        <th class="th-3">5 MINUTE REPAIR!</th>
                                    </tr>
                                    <tr>
                                        <th class="th-1">Digitizer</th>
                                        <th class="th-2">$ 48.99</th>
                                        <th class="th-3">5 MINUTE REPAIR!</th>
                                    </tr>
                                    <tr>
                                        <th class="th-1">LCD/Digitizer</th>
                                        <th class="th-2">$ 89.99</th>
                                        <th class="th-3">5 MINUTE REPAIR!</th>
                                    </tr>
                                    <tr>
                                        <th class="th-1">Power flex</th>
                                        <th class="th-2">$ 34.99</th>
                                        <th class="th-3">SOME DAY REPAIR!</th>
                                    </tr>
                                    <tr>
                                        <th class="th-1">Rear cover</th>
                                        <th class="th-2">$ 44.99</th>
                                        <th class="th-3">SOME DAY REPAIR!</th>
                                    </tr>
                                    <tr>
                                        <th class="th-1">Battery</th>
                                        <th class="th-2">$ 59.99</th>
                                        <th class="th-3">LESS THEN 2 HOURS!</th>
                                    </tr>
                                    <tr>
                                        <th class="th-1">Home button</th>
                                        <th class="th-2">$ 48.99</th>
                                        <th class="th-3">LESS THEN 2 HOURS!</th>
                                    </tr>
                                    <tr>
                                        <th class="th-1">Ear speaker</th>
                                        <th class="th-2">$ 39.99</th>
                                        <th class="th-3">LESS THEN 2 HOURS!</th>
                                    </tr>
                                    <tr>
                                        <th class="th-1">Proximity flex</th>
                                        <th class="th-2">$ 34.99</th>
                                        <th class="th-3">SOME DAY REPAIR!</th>
                                    </tr>
                                </table>
                            </div>

                        </div>

                        <div class="grid_5 wow fadeInRight">
                            <h3>INSTRUCTIONS FOR<span class="font-color-2 font-weight-light font__ls"><br>NATIONWIDE REPAIR SERVICE</span></h3>
                            <h5>Repairs Services are as easy as 1-2-3!</h5>
                            <p class="p-inset-8">1. Fill out the Repair Request Form below and ship your phone or device to the address below. Or click here to print out a Repair Request Form and fill it in manually</p>
                            <p>2. Include a copy of the Repair Request with your phone and ship to our Nationwide Repair Facility.</p>
                            <p>3. Upon receiving your phone for repair, a Company name associate will contact you with confirmation of receipt and go over the repair services with you. At that time a Credit Card number will be taken to process payment for repair services.</p>

                            <form id="bookingForm">
                                <div class="tmInput">
                                    <input name="Name" placeHolder="Name:" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
                                </div>
                                <div class="tmInput">
                                    <input name="Address" placeHolder="Address:" type="text" data-constraints="@NotEmpty @Required">
                                </div>
                                <div class="tmInput">
                                    <input name="City" placeHolder="City:" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
                                </div>
                                <div class="tmInput">
                                    <input name="State" placeHolder="State:" type="text" data-constraints="@NotEmpty @Required @AlphaSpecial">
                                </div>
                                <div class="tmInput">
                                    <input name="Zip Code" placeHolder="Zip Code:" type="text" data-constraints="@NotEmpty @Required @Phone">
                                </div>
                                <div class="tmInput">
                                    <input name="E-mail Address" placeHolder="E-mail Address:" type="text" data-constraints="@NotEmpty @Required @Email">
                                </div>
                                <div class="tmInput">
                                    <input name="Daytime Contact Number" placeHolder="Daytime Contact Number:" type="text" data-constraints='@NotEmpty @Required'>
                                </div>
                                <div class="small-box-1">
                                    <div class="tmInput ">
                                        <input class="" name="Phone Make" placeHolder="Phone Make:" type="text" data-constraints='@NotEmpty @Required @Phone'>
                                    </div>
                                </div>
                                <div class="small-box-2">
                                    <div class="tmInput">
                                        <input class="" name="Phone Model" placeHolder="Phone Model:" type="text" data-constraints='@NotEmpty @Required @Phone'>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="tmTextarea">
                                    <textarea name="Message" placeHolder="What kind of problem are you having with your phone?" data-constraints='@NotEmpty @Required @Length(min=20,max=999999)'></textarea>
                                </div>
                                <a href="#" class="btn" data-type="submit">Send</a>
                            </form>

                        </div>

                    </div>
                </div>
            </div>

        </section>



        <?php include './templateGobal/footer.php'; ?>

    </body>
</html>

