<?php
	session_start();
    include"../dbcon.php";
   /// $getid=$_GET['idk'];
    $rup=$_GET['bk'];
    $sql = "SELECT *  FROM `tbl_plans` WHERE `id` = $rup";
    $rlts=dbset($sql,4);
    $_SESSION['planid']=$rup;
?>


<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Payment </title>
                                <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
                                <style>* {
    margin: 0;
    padding: 0
}

html {
    height: 100%
}

body {
    background-color: #000000
}

.card0 {
    margin: 40px 12px 15px 12px;
    border: 0
}

.card1 {
    margin: 0;
    padding: 15px;
    padding-top: 25px;
    padding-bottom: 0px;
    background: #263238;
    height: 100%
}

.bill-head {
    color: #ffffff;
    font-weight: bold;
    margin-bottom: 0px;
    margin-top: 0px;
    font-size: 30px
}

.line {
    border-right: 1px grey solid
}

.bill-date {
    color: #BDBDBD
}

.red-bg {
    margin-top: 25px;
    margin-left: 0px;
    margin-right: 0px;
    background-color: #F44336;
    padding-left: 20px !important;
    padding: 25px 10px 25px 15px
}

#total {
    margin-top: 0px;
    padding-left: 7px
}

#total-label {
    margin-bottom: 0px;
    color: #ffffff;
    padding-left: 7px
}

#heading1 {
    color: #ffffff;
    font-size: 20px;
    padding-left: 10px
}

#heading2 {
    font-size: 27px;
    color: #D50000
}

.placeicon {
    font-family: fontawesome !important
}

.card2 {
    padding: 25px;
    margin: 0;
    height: 100%
}

.form-card .pay {
    font-weight: bold
}

.form-card input,
.form-card textarea {
    padding: 10px 8px 10px 8px;
    border: none;
    border: 1px solid lightgrey;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 14px;
    letter-spacing: 1px
}

.form-card input:focus,
.form-card textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: none;
    font-weight: bold;
    border: 1px solid gray;
    outline-width: 0
}

.btn-info {
    color: #ffffff !important
}

.radio-group {
    position: relative;
    margin-bottom: 25px
}

.radio {
    display: inline-block;
    width: 204;
    height: 64;
    border-radius: 0;
    background: lightblue;
    box-sizing: border-box;
    border: 2px solid lightgrey;
    cursor: pointer;
    margin: 8px 25px 8px 0px
}

.radio:hover {
    box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.2)
}

.radio.selected {
    box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.4)
}

.fit-image {
    width: 100%;
    object-fit: cover
}</style>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript'>$(document).ready(function(){

//For Card Number formatted input
var cardNum = document.getElementById('cr_no');
cardNum.onkeyup = function (e) {
if (this.value == this.lastValue) return;
var caretPosition = this.selectionStart;
var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
var parts = [];

for (var i = 0, len = sanitizedValue.length; i < len; i +=4) { parts.push(sanitizedValue.substring(i, i + 4)); } for (var i=caretPosition - 1; i>= 0; i--) {
    var c = this.value[i];
    if (c < '0' || c> '9') {
        caretPosition--;
        }
        }
        caretPosition += Math.floor(caretPosition / 4);

        this.value = this.lastValue = parts.join('-');
        this.selectionStart = this.selectionEnd = caretPosition;
        }

        //For Date formatted input
        var expDate = document.getElementById('exp');
        expDate.onkeyup = function (e) {
        if (this.value == this.lastValue) return;
        var caretPosition = this.selectionStart;
        var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
        var parts = [];

        for (var i = 0, len = sanitizedValue.length; i < len; i +=2) { parts.push(sanitizedValue.substring(i, i + 2)); } for (var i=caretPosition - 1; i>= 0; i--) {
            var c = this.value[i];
            if (c < '0' || c> '9') {
                caretPosition--;
                }
                }
                caretPosition += Math.floor(caretPosition / 2);

                this.value = this.lastValue = parts.join('/');
                this.selectionStart = this.selectionEnd = caretPosition;
                }

                // Radio button
                $('.radio-group .radio').click(function(){
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
                });

                })</script>
                            </head>
                            <body oncontextmenu='return false' class='snippet-body'>
                            <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-11">
            <div class="card card0 rounded-0">
                <div class="row">
                    <div class="col-md-5 d-md-block d-none p-0 box">
                        <div class="card rounded-0 border-0 card1" id="bill">
                            
                            <div class="row">
                                <div class="col-md-12 red-bg">
                                    <p class="bill-date" id="total-label">Total Amount</p>
                                    <h2 class="bill-head" id="total">&#8377; <?php
	echo $rlts['amount'];
?></h2> <small class="bill-date" id="total-label">Price includes all taxes</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-7 col-sm-12 p-0 box">
                    <form method="post" action="progrees.php">


                        <div class="card rounded-0 border-0 card2" id="paypage">
                            <div class="form-card">
                                <h2 id="heading2" class="text-danger">Payment Method</h2>
                                <div class="radio-group">
                                    <div class='radio' data-value="credit"><img src="https://i.imgur.com/28akQFX.jpg" width="200px" height="60px"></div>
                                    
                                </div> <label class="pay">Name on Card</label> 
                                <input required="" type="text" name="holdername" placeholder="">
                                <div class="row">
                                    <div class="col-8 col-md-6"> <label class="pay">Card Number</label>
                                     <input required="" type="text" name="cardno" id="cr_no" placeholder="0000-0000-0000-0000" minlength="19" maxlength="19"> </div>
                                    <div class="col-4 col-md-6"> <label class="pay">CVV</label> 
                                    <input required="" type="password" name="cvcpwd" placeholder="&#9679;&#9679;&#9679;" class="placeicon" minlength="3" maxlength="3"> </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12"> <label class="pay">Expiration Date</label> </div>
                                    <div class="col-md-12"> <input required="" type="text" name="exp" id="exp" placeholder="MM/YY" minlength="5" maxlength="5"> </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6"> <input type="submit" value="MAKE A PAYMENT &nbsp; &#xf178;" class="btn btn-info placeicon"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
                            </body>
                        </html>