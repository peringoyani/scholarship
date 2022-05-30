<?php

require("./connect/connect.php");

$showSuccess = false;
$showError = false;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if ($_COOKIE['loggedin'] == 'true') {
    $uname = $_REQUEST['uname'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];
    $insert = "INSERT INTO `contact` (`username`, `email`, `message`, `date`) VALUES ('$uname', '$email', '$message', current_timestamp())";
    $result = mysqli_query($conn, $insert);
    
    if ($result) {
          $showSuccess = true;
    } else {
          $showError = true;
    }
  }
  else {
    $showError = true;
  }
}

?>



<div  id="web3forms__widget" x-data="{ open: true }"  x-init="() => setTimeout(() => open = false, 2000)"> 
    <!-- x-init is only for demo purpose. you may remove it.  -->
      <div
        id="w3f__widget--content"
        x-show="open"
        x-transition:enter-start="opacity-0 translate-y-5"
        x-transition:enter="transition duration-200 transform ease"
        x-transition:leave="transition duration-200 transform ease"
        x-transition:leave-end="opacity-0 translate-y-5"
        @click.away="open = false"
        class="fixed flex flex-col z-50 bottom-[100px] top-0 right-0 h-auto left-0 sm:top-auto sm:right-5 sm:left-auto h-[calc(100%-95px)] w-full sm:w-[350px] overflow-auto min-h-[250px] sm:h-[600px] bg-white shadow-2xl rounded-md"
      >
      <div class="flex p-5 flex-col justify-center items-center h-32 bg-blue-700">
        <h3 class="text-lg text-white">How can we help?</h3>
        <p class="text-white opacity-50">We usually respond in a few hours</p>
      </div>
       <div class="bg-gray-50 flex-grow p-6"> 
         
          <form
          action=""
          method="POST"
          id="form"
          class="needs-validation"
          novalidate
        >
          <input type="hidden" name="apikey" value="YOUR_ACCESS_KEY_HERE" />
          <input
            type="hidden"
            name="subject"
            value="New Submission from Web3Forms"
          />
          <input
            type="checkbox"
            name="botcheck"
            id=""
            style="display: none;"
          />

            <div class="mb-4">
              <?php
                if ($showSuccess) {
                  echo '<div class="bg-green-200 mx-auto mt-6 p-2">
                  <div class="flex space-x-2">
                    <svg class="w-6 h-6 stroke-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <p class="text-green-900 font-semibold">We will contact you soon.</p>
                  </div>
                </div>';
              }

              if ($showError) {
                echo '<div class="bg-red-200 mx-auto mt-6 p-2">
                            <div class="flex space-x-2">
                              <svg class="w-6 h-6 stroke-red-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                              <p class="text-red-900 font-semibold">You must logged in to contact.</p>
                            </div>
                          </div>';
            } 
              ?>
                
            </div>           
            <div class="mb-4">
              <label
                for="full_name"
                class="block mb-2 text-sm text-gray-600 dark:text-gray-400"
                >Full Name</label
              >
              <input
                type="text"
                name="uname"
                id="full_name"
                placeholder="John Doe"
                required
                class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
              />
              <div
                class="empty-feedback invalid-feedback text-red-400 text-sm mt-1"
              >
                Please provide your full name.
              </div>
            </div>
            
          

        
            <div class="mb-4">
              <label
                for="email"
                class="block mb-2 text-sm text-gray-600 dark:text-gray-400"
                >Email Address</label
              >
              <input
                type="email"
                name="email"
                id="email"
                placeholder="you@company.com"
                required
                class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
              />
              <div class="empty-feedback text-red-400 text-sm mt-1">
                Please provide your email address.
              </div>
              <div class="invalid-feedback text-red-400 text-sm mt-1">
                Please provide a valid email address.
              </div>
            </div>
 
           
          <div class="mb-4">
            <label
              for="message"
              class="block mb-2 text-sm text-gray-600 dark:text-gray-400"
              >Your Message</label
            >

            <textarea
              rows="4"
              name="message"
              id="message"
              placeholder="Your Message"
              class="w-full h-28 px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
              required
            ></textarea>
            <div
              class="empty-feedback invalid-feedback text-red-400 text-sm mt-1"
            >
              Please enter your message.
            </div>
          </div>
          <div class="mb-3">
            <button
              type="submit"
              class="w-full px-3 py-4 text-white bg-blue-700 rounded-md focus:bg-blue-800 focus:outline-none"
            >
              Send Message
            </button>
          </div>
          <p class="text-xs text-center text-gray-400" id="result">
            <span>Powered by <a href="https://Web3Forms.com" class="text-gray-600" target="_blank" rel="noopener noreferrer">Errors Scholarship</a></span>
          </p>
        </form>


       </div>
      </div>
      <button
        id="w3f__widget--btn"
        @click="open = !open"
        class="fixed z-40 right-5 bottom-5 shadow-lg flex justify-center items-center w-14 h-14 bg-blue-700 rounded-full focus:outline-none hover:bg-blue-800 focus:bg-blue-700 transition duration-300 ease"
      >
        <svg
          class="w-6 h-6 text-white absolute"
          x-show="!open"
          x-transition:enter-start="opacity-0 -rotate-45 scale-75"
          x-transition:enter="transition duration-200 transform ease"
          x-transition:leave="transition duration-100 transform ease"
          x-transition:leave-end="opacity-0 -rotate-45"
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        >
          <path
            d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"
          ></path>
        </svg>

        <svg
          class="w-6 h-6 text-white absolute"
          x-show="open"
          x-transition:enter-start="opacity-0 rotate-45 scale-75"
          x-transition:enter="transition duration-200 transform ease"
          x-transition:leave="transition duration-100 transform ease"
          x-transition:leave-end="opacity-0 rotate-45"
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        >
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>
  </div>