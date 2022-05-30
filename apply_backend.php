<?php

require("./connect/connect.php");

$showSuccess = false;
$showError = false;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_COOKIE['loggedin'] == 'true') {
    $AFront = $_REQUEST['AFront'];
    $ABack = $_REQUEST['ABack'];
    $fname = $_REQUEST['fname'];
    $email = $_REQUEST['email'];
    $passportPhoto = $_REQUEST['passportPhoto'];
    $addmissionLetter = $_REQUEST['addmissionLetter'];
    $feesReciepts = $_REQUEST['feesReciepts'];
    $incomeCertificate = $_REQUEST['incomeCertificate'];
    $passbookFirstPage = $_REQUEST['passbookFirstPage'];
    $itr = $_REQUEST['itr'];
    $collegeLetterPad = $_REQUEST['collegeLetterPad'];
    $hostelAndRent = $_REQUEST['hostelAndRent'];
    $rentAgreement = $_REQUEST['rentAgreement'];

    $sql = "INSERT INTO `documents` (`adhar_front`, `adhar_back`, `uname`, `email`, `photo`, `admission_letter`, `fees_reciepts`, `income_certificate`, `passbook`, `itr`, `letter_pad`, `hostel_reciepts`, `rent_agreement`, `date`) VALUES ('$AFront', '$ABack', '$fname', '$email', '$passportPhoto', '$addmissionLetter', '$feesReciepts', '$incomeCertificate', '$passbookFirstPage', '$itr', '$collegeLetterPad', '$hostelAndRent', '$rentAgreement', current_timestamp())";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $showSuccess = true;
    }
    else {
        $showError = true;
    }
    }
else {
    $showError = true;
}
}

?>