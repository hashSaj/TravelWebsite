<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Status</title>

    <!-- For including css file -->
    <?php include 'style.php';  ?>

    <!-- Swiper js cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font-awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- local css file link -->
    <!-- <link rel="stylesheeet" href="./style.css" type="text/css"> -->

    
</head>


<body>


<!-- header section starts -->
 <section class="header">
    <a href="home.php" class="logo">travel</a>
    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="book.php">Book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
 </section>
 <!-- header section ends -->

 <section class="booking-status">

<h1 class="heading-title">
<?php

 require 'phpspreadsheet/vendor/autoload.php';


use PhpOffice\PhpSpreadsheet\Spreadsheet;

use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// $spreadsheet = new Spreadsheet();
// $activeWorksheet = $spreadsheet->getActiveSheet();
// $activeWorksheet->setCellValue('A1', 'Hello World !');

// $writer = new Xlsx($spreadsheet);
// $writer->save('hello world.xlsx');


if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];
// ... other variables for other fields ...

// 2. Create Excel file
$filename = 'C:\Users\shriv\VS Code Files\Travel & Tour Website\bookings.xlsx';
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Name');
$sheet->setCellValue('B1', 'Email');
$sheet->setCellValue('C1', 'Phone');
$sheet->setCellValue('D1', 'Address');
$sheet->setCellValue('E1', 'Location');
$sheet->setCellValue('F1', 'Guests');
$sheet->setCellValue('G1', 'Arrivals');
$sheet->setCellValue('H1', 'Leaving');
// ... other column headers ...

// Check if file exists, append or create new
if (file_exists($filename)) {
    $reader = new PhpOffice\PhpSpreadsheet\Reader\Xlsx($spreadsheet);
    $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
    $spreadsheet = $reader->load($filename);
    $sheet = $spreadsheet->getActiveSheet();
    $highestRow = $sheet->getHighestRow();
    $nextRow = $highestRow + 1;
} else {
    $nextRow = 2;
}

$sheet->setCellValue('A' . $nextRow, $name);
$sheet->setCellValue('B' . $nextRow, $email);
$sheet->setCellValue('C' . $nextRow, $phone);
$sheet->setCellValue('D' . $nextRow, $address);
$sheet->setCellValue('E' . $nextRow, $location);
$sheet->setCellValue('F' . $nextRow, $guests);
$sheet->setCellValue('G' . $nextRow, $arrivals);
$sheet->setCellValue('H' . $nextRow, $leaving);
// ... other cell values ...

$writer = new Xlsx($spreadsheet);
$writer->save($filename);

// 3. Send email notification
$to = $email;
$subject = 'Booking Confirmation';
$message = 'Your booking is under process. You will receive an update soon.';
$headers = 'From: your_email@example.com';
mail($to, $subject, $message, $headers);

// 4. Display confirmation message
echo 'Booking under process. You will receive update within few minutes via email. Stay Tuned...';

} 


// $connection = mysqli_connect('localhost','root','','book_db');

// if(isset($_POST['send'])){
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $phone = $_POST['phone'];
//     $address = $_POST['address'];
//     $location = $_POST['location'];
//     $guests = $_POST['guests'];
//     $arrivals = $_POST['arrivals'];
//     $leaving = $POST['leaving'];


//     $request = "insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values
//     ('$name' , '$email' , '$phone' , '$address' , '$location' , '$guests' , '$arrivals' , '$leaving')";

//     mysqli_query($connection , $request);

//     header('location:book.php');
// } else {
//     echo 'something went wrong try again';
// }
?>

</h1>

<div class="load-more"><span class="btn"><a href="home.php">Back</a></span></div>

</section>


<!-- Swiper script link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>  

<!-- local script link -->
<script src="./script.js"></script>
</body>
</html>

    













