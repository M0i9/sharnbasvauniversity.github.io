<?php
session_start();
if (!isset($_SESSION["loggedin"])) {
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>SUK E-VOTING 2021</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/webpage.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title"><i>SUK E-VOTING 2021</i></h2>
                    <form method="POST" action="save_vote.php">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"><B>FIRST NAME</B></label>
                                    <input class="input--style-4" type="text" name="first_name" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"><B>LAST NAME</B></label>
                                    <input class="input--style-4" type="text" name="last_name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"><B>DATE OF BIRTH</B></label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="dob" required>
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"><B>GENDER</B></label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45"><B>Male</B>
                                            <input type="radio" name="gender" value="male" required>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container"><B>Female</B>
                                            <input type="radio" name="gender" value="female">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"><B>EMAIL</B></label>
                                    <input class="input--style-4" type="email" name="email" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"><B>PHONE NUMBER</B></label>
                                    <input class="input--style-4" type="text" name="phone" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"><B>ROLL NO.</B></label>
                                    <input class="input--style-4" type="number" name="roll_no" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"><B>USN NO.</B></label>
                                    <input class="input--style-4" type="text" name="usn_no" required>
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <label class="label"><B>SEMESTER<B></label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="semester" required>
                                    <option value="" disabled="disabled" selected="selected"><B>Select The SEMESTER!</B></option>
                                    <option value="1st SEMESTER">1st SEMESTER</option>
                                    <option value="2nd SEMESTER">2nd SEMESTER</option>
                                    <option value="3rd SEMESTER">3rd SEMESTER</option>
                                    <option value="4th SEMESTER">4th SEMESTER</option>
                                    <option value="5th SEMESTER">5th SEMESTER</option>
                                    <option value="6th SEMESTER">6th SEMESTER</option>
                                    <option value="7th SEMESTER">7th SEMESTER</option>
                                    <option value="8th SEMESTER">8th SEMESTER</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label"><B>DEPARTMENT<B></label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="dept" required>
                                    <option value="" disabled="disabled" selected="selected"><B>Select Branch!</B></option>
                                    <option value="COMPUTER SCIENCE ENGINEERING">COMPUTER SCIENCE ENGINEERING</option>
                                    <option value="ELECTRICAL AND COMMUNICATION ENGINEERING">ELECTRICAL AND COMMUNICATION ENGINEERING</option>
                                    <option value="ELECTRONICS AND ELECTRICAL ENGINEERING">ELECTRONICS AND ELECTRICAL ENGINEERING</option>
                                    <option value="CIVIL ENGINERING">CIVIL ENGINERING</option>
                                    <option value="MECHANICAL ENGINEERING">MECHANICAL ENGINEERING</option>
                                    <option value="AERONAUTICAL ENGINEERING">AERONAUTICAL ENGINEERING</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label"><B>PARTY<B></label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="party" required>
                                    <option value="" disabled="disabled" selected="selected">Choose option</option>
                                    <option value="FUTURE CODERS">FUTURE CODERS</option>
                                    <option value="ROYAL MECHANICAL">ROYAL MECHANICAL</option>
                                    <option value="ELECTRICAL WORMS">ELECTRICAL WORMS</option>
                                    <option value="ELEC@COMMS KNIGHTS">ELEC@COMMS KNIGHTS</option>
                                    <option value="CIVIL BUILDERS">CIVIL BUILDERS</option>
                                    <option value="FUTURE FLYERS">FUTURE FLYERS</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>