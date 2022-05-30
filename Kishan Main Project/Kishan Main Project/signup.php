<?php

require("./connect/connect.php");

?>

<?php
$showError = false;
$showSuccess = false;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $uname = $_REQUEST['userName'];
    $pass = $_REQUEST['password'];
    $cpass = $_REQUEST['Cpassword'];
    $email = $_REQUEST['email'];


    if ($pass == $cpass) {
        $securePass = password_hash($pass, PASSWORD_DEFAULT);

        $insert = "INSERT INTO `users` (`username`, `email`, `password`, `date`) VALUES ('$uname', '$email', '$securePass', current_timestamp())";
        $result = mysqli_query($conn, $insert);
        if ($result) {
            $showSuccess = true;
        } else {
            $showError = true;
        }
    } else {
        $showError = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Errors Scholarship</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Anton&family=Kaushan+Script&family=Lora&family=Merriweather+Sans:wght@300;800&family=Playfair+Display+SC&family=Sansita+Swashed:wght@300;400&display=swap');
</style>
<script src="https://cdn.tailwindcss.com"></script>
<body>

    
    <main class="mx-auto flex min-h-screen w-full items-center justify-center bg-gray-900 text-white">
        <!-- component -->
        
        <form method="POST" class="flex w-[30rem] flex-col space-y-10">
        <div class="my-4">
            <?php 
            if ($showError) {
                echo '<div class="w-screen max-w-lg bg-red-200 mx-auto mt-6 p-2">
                            <div class="flex space-x-2">
                              <svg class="w-6 h-6 stroke-red-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                              <p class="text-red-900 font-semibold">You Entered Passwords Must be Same.</p>
                            </div>
                          </div>';
            } 

            if ($showSuccess) {
                echo '<div class="w-screen max-w-lg bg-green-200 mx-auto mt-6 p-2">
                <div class="flex space-x-2">
                  <svg class="w-6 h-6 stroke-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                  <p class="text-green-900 font-semibold">Your Accound Created Successfully.</p>
                </div>
                <p class="ml-8 text-green-800">Now You can Login.</p>
              </div>';
            }
            ?>
    </div>
            <div class="text-center text-4xl font-medium">Sign Up</div>
            <div class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
                <input type="text" name="userName" id="userName" placeholder="Username" class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none" />
            </div>
            <div class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
                <input type="email" name="email" id="email" placeholder="Email" class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none" />
            </div>

            <div class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
                <input type="password" name="password" id="password" placeholder="Password" class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none" />
            </div>
            <div class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
                <input type="password" name="Cpassword" id="Cpassword" placeholder="Confirm Password" class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none" />
            </div>

            <button class="transform rounded-sm bg-indigo-600 py-2 font-bold duration-300 hover:bg-indigo-400">
                SIGN UP
            </button>

            <!-- <a href="#" class="transform text-center font-semibold text-gray-500 duration-300 hover:text-gray-300">FORGOT PASSWORD?</a> -->

            <p class="text-center text-lg">
                Already have an account ?
                <a href="login.php" class="font-medium text-indigo-500 underline-offset-4 hover:underline">LOG IN</a>
            </p>
        </form>
    </main>
</body>

</html>