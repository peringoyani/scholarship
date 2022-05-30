<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Error Scholarship</title>
	<link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
	<script src="jquery-3.6.0.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<style>
	.invalid-feedback,
	.empty-feedback {
		display: none;
	}

	.was-validated :placeholder-shown:invalid~.empty-feedback {
		display: block;
	}

	.was-validated :not(:placeholder-shown):invalid~.invalid-feedback {
		display: block;
	}

	.is-invalid,
	.was-validated :invalid {
		border-color: #dc3545;
	}

	.is-invalid,
	.was-validated :invalid:focus {
		--tw-ring-color: rgba(220, 53, 69, 0.2);
	}

	@import url('https://fonts.googleapis.com/css2?family=Anton&family=Kaushan+Script&family=Lora&family=Merriweather+Sans:wght@300;800&family=Playfair+Display+SC&family=Sansita+Swashed:wght@300;400&display=swap');
</style>
<script src="js/index.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script type="module" src="https://cdn.skypack.dev/twind/shim"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>

<body>

<div class="fixed w-full shadow-xl z-10">
  <div class="antialiased bg-gray-100 dark-mode:bg-gray-900">
  <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
    <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
      <div class="flex flex-row items-center justify-between p-4">
        <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Errors Scholarship</a>
        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
          <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <?php

        if ($_COOKIE['loggedin'] == 'true') {
            echo '<nav :class="{"flex": open, "hidden": !open}" class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="home.php">Home</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="eligibility.php">Eligibility</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="apply.php">Apply</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="contactUs.php">Contact</a>
            <a class="transition-colors duration-300 transform border rounded hover:bg-indigo-500 px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-white focus:text-gray-900 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="logout.php">Log Out</a>    
          </nav>';
        }
        
        else if($_COOKIE['loggedin'] == 'false'){
            echo '<nav :class="{"flex": open, "hidden": !open}" class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="home.php">Home</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="eligibility.php">Eligibility</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="apply.php">Apply</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="contactUs.php">Contact</a>
            <a class="transition-colors duration-300 transform border rounded hover:bg-indigo-500 px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-white focus:text-gray-900 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="signup.php">Sign Up</a>      
            <a class="transition-colors duration-300 transform border rounded hover:bg-indigo-500 px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-white focus:text-gray-900 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="login_page.php">Log In</a>     
          </nav>';
        }
      ?>
      
    </div>
  </div>
</div>
  </div>

	<!-- ====== Contact Section Start -->
	<section class="bg-white py-20 px-20 lg:py-[120px]">
		<div class="container">
			<div class="flex flex-wrap lg:justify-between -mx-4">
				<div class="w-full lg:w-1/2 xl:w-6/12 px-4">
					<div class="max-w-[570px] mb-12 lg:mb-0">
						<span class="block mb-4 text-base text-primary font-semibold">
							Errors Scholarship
						</span>
						<h2
							class="transition-colors duration-300 transform hover:text-primary text-dark mb-6 uppercase font-bold text-[32px] sm:text-[40px] lg:text-[36px] xl:text-[40px] ">
							CHECK YOUR ELIGIBILITY
						</h2>
						<p class="text-base text-body-color leading-relaxed mb-9">
							The SCHOLARSHIP will be conducted for three levels i.e MYSY, Digital Gujarat, and NSP.
							Different posts, Different levels will differ in the age limit. The minimum age required to
							apply is 18 years and the maximum age is 32 years. The relaxations in age are applicable as
							per the reserved category candidates.
						</p>

					</div>
				</div>
				<div class="w-full lg:w-1/2 xl:w-5/12 px-4">
					<div class="bg-white relative rounded-lg p-8 sm:p-12 shadow-lg">
						<form>
							<div class="mb-6">
								<div class="max-w-lg mx-auto">
									<div class="min-w-0 p-4 text-white bg-blue-700 rounded-lg shadow-xs">
										<h4 class="font-semibold">
											Follow This Steps
										</h4>
									</div>
								</div>
							</div>
							<div class="mb-6">
								<div class="relative inline-flex mr-2">
									<svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none"
										xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
										<path
											d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
											fill="#ffffff" fill-rule="nonzero" />
									</svg>
									<select onchange="mainValidate();"
										class="rounded text-white h-10 pl-5 pr-10 bg-blue-700 hover:bg-blue-800 focus:ring-4 appearance-none">
										<option value="" disabled selected hidden>Category</option>
										<option value="open">Open</option>
										<option value="sc">SC</option>
										<option value="st">ST</option>
										<option value="sebc">SEBC</option>
									</select>
								</div>
							</div>
							<div class="specialDiv" id="specialDiv" style="display: none;">
								<div class="mb-6">

									<div class="relative inline-flex">
										<svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none"
											xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
											<path
												d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
												fill="#ffffff" fill-rule="nonzero" />
										</svg>
										<select onchange="genderValidate();"
											class="rounded text-white h-10 pl-5 pr-10 bg-blue-700 hover:bg-blue-800 focus:ring-4 appearance-none"
											aria-placeholder="Gender">
											<option value="" disabled selected hidden>Gender</option>
											<option value="male">Male</option>
											<option value="female">Female</option>
										</select>
									</div>
								</div>

								<div class="mb-6" style="display: none;" id="income">
									<div class="relative inline-flex">
										<svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none"
											xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
											<path
												d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
												fill="#ffffff" fill-rule="nonzero" />
										</svg>
										<select onchange="selectValidate();"
											class="rounded text-white h-10 pl-5 pr-10 bg-blue-700 hover:bg-blue-800 focus:ring-4 appearance-none"
											aria-placeholder="Gender">
											<option value="" disabled selected hidden>Income</option>
											<option value=">6_lakh">> 6 Lakh</option>
											<option value="<6_lakh">
												< 6 Lakh</option>
										</select>
									</div>
								</div>
								<div class="mb-6" style="display: none;" id="income2">
									<div class="relative inline-flex">
										<svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none"
											xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
											<path
												d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
												fill="#ffffff" fill-rule="nonzero" />
										</svg>
										<select onchange="selectValidate2();"
											class="rounded text-white h-10 pl-5 pr-10 bg-blue-700 hover:bg-blue-800 focus:ring-4 appearance-none"
											aria-placeholder="Gender">
											<option value="" disabled selected hidden>Income</option>
											<option value="<6_lakh">
												< 6 Lakh</option>
											<option value="6_to_8_lakh">6 To 8 Lakh</option>
										</select>
									</div>
								</div>
								<div class="mb-6">
									<div style="display: none;" id="Myalert"
										class="h-24 my-4 bg-gradient-to-r from-indigo-300 to-indigo-800 flex justify-center items-center p-3 rounded-xl border-2 border-slate-100 shadow-lg transition-all transform-all hover:scale-105 cursor-pointer relative">
										<div class="text-slate-200 text-center">
											<div>You are not eligible for any Scholarship</div>
											<div class="font-mono text-xs">Reason : Your Annual Income is High.</div>
										</div>
									</div>
								</div>
								<div class="mb-6" style="display: none;" id="qualification">
									<div class="relative inline-flex">
										<svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none"
											xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
											<path
												d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
												fill="#ffffff" fill-rule="nonzero" />
										</svg>
										<select onchange="scholarshipValidate();"
											class="rounded text-white h-10 pl-5 pr-10 bg-blue-700 hover:bg-blue-800 focus:ring-4 appearance-none"
											aria-placeholder="Gender">
											<option value="" disabled selected hidden>Qualification</option>
											<option value=">80_percentile">> 80 Percentile</option>
											<option value="<80_percentile">
												< 80 Percentile</option>
										</select>
									</div>
								</div>
								<div class="mb-6" style="display: none;" id="Myalert2">
									<div class="max-w-lg mx-auto">

										<div
											class="my-4 bg-gradient-to-r from-indigo-300 to-indigo-800 flex justify-center items-center p-3 rounded-xl border-2 border-slate-100 shadow-lg transition-all transform-all hover:scale-105 cursor-pointer relative">
											<div class="text-slate-200 text-center">
												<div>You are eligible for MYSY Scholarship</div>
												<div class="font-mono text-xs">You can submit your documents to apply
													scholarship pages</div>
												<div class="p-3">
													<button style="width:150px"
														class="p-2 text-center w-30 border-t-8 border-blue-700 rounded-tl-full rounded-br-lg shadow-md hover:shadow-lg focus:outline-none">
														<a href="apply.php" style="width: 150px">
															Apply Now
														</a>
													</button>
												</div>
											</div>
										</div>

									</div>
								</div>
								<div class="mb-6">
									<div class="max-w-lg mx-auto">

										<div style="display: none;" id="Myalert3"
											class="h-24 my-4 bg-gradient-to-r from-indigo-300 to-indigo-800 flex justify-center items-center p-3 rounded-xl border-2 border-slate-100 shadow-lg transition-all transform-all hover:scale-105 cursor-pointer relative">
											<div class="text-slate-200 text-center">
												<div>You are not eligible for any Scholarship</div>
												<div class="font-mono text-xs">Reason : Your Qualification is Low.</div>
											</div>
										</div>

									</div>
								</div>
								<div class="mb-6" style="display:none;" id="Myalert4">
									<div class="max-w-lg mx-auto">

										<div
											class="my-4 bg-gradient-to-r from-indigo-300 to-indigo-800 flex justify-center items-center p-3 rounded-xl border-2 border-slate-100 shadow-lg transition-all transform-all hover:scale-105 cursor-pointer relative">
											<div class="text-slate-200 text-center">
												<div>You are eligible for PRAGATI Scholarship</div>
												<div class="font-mono text-xs">You can submit your documents to apply
													scholarship pages</div>
												<div class="p-3">
													<button style="width:150px"
														class="p-2 text-center w-30 border-t-8 border-blue-700 rounded-tl-full rounded-br-lg shadow-md hover:shadow-lg focus:outline-none">
														<a href="apply.php" style="width: 150px">
															Apply Now
														</a>
													</button>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>

							<!-- This is ST area  -->


							<div class="specialDiv2" id="specialDiv2" style="display: none;">
								<div class="mb-6">

									<div class="relative inline-flex">
										<svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none"
											xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
											<path
												d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
												fill="#ffffff" fill-rule="nonzero" />
										</svg>
										<select onchange="SgenderValidate();"
											class="rounded text-white h-10 pl-5 pr-10 bg-blue-700 hover:bg-blue-800 focus:ring-4 appearance-none"
											aria-placeholder="Gender">
											<option value="" disabled selected hidden>Gender</option>
											<option value="male">Male</option>
											<option value="female">Female</option>
										</select>
									</div>
								</div>

								<div class="mb-6" style="display: none;" id="Sincome">
									<div class="relative inline-flex">
										<svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none"
											xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
											<path
												d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
												fill="#ffffff" fill-rule="nonzero" />
										</svg>
										<select onchange="SselectValidate();"
											class="rounded text-white h-10 pl-5 pr-10 bg-blue-700 hover:bg-blue-800 focus:ring-4 appearance-none"
											aria-placeholder="Gender">
											<option value="" disabled selected hidden>Income</option>
											<option value=">2.5_lakh">> 2.5 Lakh</option>
											<option value="<2.5_lakh">
												< 2.5 Lakh</option>
										</select>
									</div>
								</div>
								<div class="mb-6" style="display: none;" id="Sincome2">
									<div class="relative inline-flex">
										<svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none"
											xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
											<path
												d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
												fill="#ffffff" fill-rule="nonzero" />
										</svg>
										<select onchange="SselectValidate2();"
											class="rounded text-white h-10 pl-5 pr-10 bg-blue-700 hover:bg-blue-800 focus:ring-4 appearance-none"
											aria-placeholder="Gender">
											<option value="" disabled selected hidden>Income</option>
											<option value="<2.5_Lakh">
												< 2.5 Lakh</option>
											<option value=">2.5_Lakh">> 2.5 Lakh</option>
										</select>
									</div>
								</div>
								<div class="mb-6">
									<div style="display: none;" id="SMyalert"
										class="h-24 my-4 bg-gradient-to-r from-indigo-300 to-indigo-800 flex justify-center items-center p-3 rounded-xl border-2 border-slate-100 shadow-lg transition-all transform-all hover:scale-105 cursor-pointer relative">
										<div class="text-slate-200 text-center">
											<div>You are not eligible for any Scholarship</div>
											<div class="font-mono text-xs">Reason : Your Annual Income is High.</div>
										</div>
									</div>
								</div>
								<div class="mb-6" style="display: none;" id="SMyalert2">
									<div class="max-w-lg mx-auto">

										<div
											class="my-4 bg-gradient-to-r from-indigo-300 to-indigo-800 flex justify-center items-center p-3 rounded-xl border-2 border-slate-100 shadow-lg transition-all transform-all hover:scale-105 cursor-pointer relative">
											<div class="text-slate-200 text-center">
												<div>You are eligible for DIGITAL GUJARAT ST Scholarship</div>
												<div class="font-mono text-xs">You can submit your documents to apply
													scholarship pages</div>
												<div class="p-3">
													<button style="width:150px"
														class="p-2 text-center w-30 border-t-8 border-blue-700 rounded-tl-full rounded-br-lg shadow-md hover:shadow-lg focus:outline-none">
														<a href="apply.php" style="width: 150px">
															Apply Now
														</a>
													</button>
												</div>
											</div>
										</div>

									</div>
								</div>
								<div class="mb-6">
									<div class="max-w-lg mx-auto">

										<div style="display: none;" id="SMyalert3"
											class="h-24 my-4 bg-gradient-to-r from-indigo-300 to-indigo-800 flex justify-center items-center p-3 rounded-xl border-2 border-slate-100 shadow-lg transition-all transform-all hover:scale-105 cursor-pointer relative">
											<div class="text-slate-200 text-center">
												<div>You are not eligible for any Scholarship</div>
												<div class="font-mono text-xs">Reason : Your Qualification is Low.</div>
											</div>
										</div>

									</div>
								</div>
								<div class="mb-6" style="display:none;" id="SMyalert4">
									<div class="max-w-lg mx-auto">

										<div
											class="my-4 bg-gradient-to-r from-indigo-300 to-indigo-800 flex justify-center items-center p-3 rounded-xl border-2 border-slate-100 shadow-lg transition-all transform-all hover:scale-105 cursor-pointer relative">
											<div class="text-slate-200 text-center">
												<div>You are eligible for PRAGATI Scholarship</div>
												<div class="font-mono text-xs">You can submit your documents to apply
													scholarship pages</div>
												<div class="p-3">
													<button style="width:150px"
														class="p-2 text-center w-30 border-t-8 border-blue-700 rounded-tl-full rounded-br-lg shadow-md hover:shadow-lg focus:outline-none">
														<a href="apply.php" style="width: 150px">
															Apply Now
														</a>
													</button>
												</div>
											</div>
										</div>

									</div>
								</div>
								

							<!-- End of ST Area  -->
					</div>
					<div class="mb-6" style="display:none;" id="SMyalert5">
									<div
										class="h-24 my-4 bg-gradient-to-r from-indigo-300 to-indigo-800 flex justify-center items-center p-3 rounded-xl border-2 border-slate-100 shadow-lg transition-all transform-all hover:scale-105 cursor-pointer relative">
										<div class="text-slate-200 text-center py-10">
											<div class="pt-5">For SC & SEBC, Please Contact our Expert</div>
											<div class="p-3 mb-2">
												<button onclick="con();" style="width:150px" id="Expertbutton"
													class="p-2 text-center w-30 border-t-8 border-blue-700 rounded-tl-full rounded-br-lg shadow-md hover:shadow-lg focus:outline-none">
													<a href="#" style="width: 150px">
														Contact
													</a>
												</button>
											</div>
										</div>
									</div>
								</div>
							<!-- </div> -->
					</form>
					<?php require('circleDesign.php'); ?>
				</div>
			</div>
		</div>
		</div>
	</section>

	<div>
		<?php
            require('contact.php');
        ?>
	</div>
	<!-- ====== Contact Section End -->
</body>
<script>
	let a = document.getElementById('w3f__widget--btn');
	function con() {
		a.click();
	}
</script>
<script src="js/validation_first.js"></script>
<script src="js/validation_second.js"></script>

</html>