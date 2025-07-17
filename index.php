<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InsureEasy - Home & Vehicle Insurance</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <style>
        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            background-color: white;
            padding: 2rem;
            border-radius: 0.5rem;
            width: 90%;
            max-width: 500px;
            position: relative;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .modal-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            font-size: 1.5rem;
            cursor: pointer;
            color: #4b5563;
        }
        .modal-close:hover {
            color: #b91c1c;
        }
        /* Custom scrollbar styling */
    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-thumb {
      background: #2563eb;
      border-radius: 10px;
    }
    ::-webkit-scrollbar-track {
      background: #f3f4f6;
    }
    /* Accordion transition */
    .accordion-content {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease, padding 0.3s ease;
    }
    .accordion-content.open {
      max-height: 500px;
      padding-bottom: 1.5rem;
    }
    /* Timeline styles */
    .timeline::before {
      content: "";
      position: absolute;
      top: 2rem;
      left: 1.25rem;
      width: 2px;
      height: calc(100% - 4rem);
      background: #9ca3af;
      border-style: dotted;
      border-width: 0 0 0 2px;
    }
    .arrow-icon {
      transition: transform 0.3s ease;
    }
    .accordion-content.open + .arrow-icon {
      transform: rotate(180deg);
    }
    </style>
</head>
<body class="bg-gray-100 font-sans">
    <!-- Top Navbar -->
    <div class="bg-blue-900 text-white py-2">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="flex items-center space-x-6">
                <!-- Email -->
                <div class="flex items-center space-x-2">
                    <i class="fas fa-envelope w-5 h-5 text-yellow-300"></i>
                    <a href="mailto:abc@gmail.com" class="text-lg hover:text-yellow-300">abc@gmail.com</a>
                </div>
                <!-- Phone -->
                <div class="flex items-center space-x-2">
                    <i class="fas fa-phone w-5 h-5 text-red-600"></i>
                    <a href="tel:+919999999999" class="text-lg hover:text-yellow-300 transition-colors duration-300">+91 9999999999</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
   <nav class="sticky top-0 z-50 text-white bg-gradient-to-br from-slate-50 to-blue-300" id="navbar">
  <div class="container mx-auto px-3 flex items-center justify-between py-4">
    <!-- Logo -->
    <div class="flex items-center">
      <img src="img/logo.png" alt="InsureEasy Logo" class="w-26 h-16 shadow-xl rounded-md"> <!-- added shadow & rounded -->
    </div>

    <!-- Menu Links -->
    <div class="flex items-center text-black space-x-10">
      <a href="#home" class="relative text-lg font-medium hover:text-red-700 after:content-[''] after:absolute after:w-0 after:h-[2px] after:bottom-[-2px] after:left-0 after:bg-yellow-100 after:transition-all after:duration-300 after:ease-in-out hover:after:w-full">Home</a>
      <a href="#vehicle-insurance" class="relative text-lg font-medium hover:text-red-700 after:content-[''] after:absolute after:w-0 after:h-[2px] after:bottom-[-2px] after:left-0 after:bg-yellow-100 after:transition-all after:duration-300 after:ease-in-out hover:after:w-full">Vehicle Insurance</a>
      <a href="#home-insurance" class="relative text-lg font-medium hover:text-red-700 after:content-[''] after:absolute after:w-0 after:h-[2px] after:bottom-[-2px] after:left-0 after:bg-yellow-100 after:transition-all after:duration-300 after:ease-in-out hover:after:w-full">Home Insurance</a>
      <a href="#support" class="relative text-lg font-medium hover:text-red-700 after:content-[''] after:absolute after:w-0 after:h-[2px] after:bottom-[-2px] after:left-0 after:bg-yellow-100 after:transition-all after:duration-300 after:ease-in-out hover:after:w-full">Health Insurance</a>

      <!-- Talk to Expert Button -->
      <a href="#talk-to-expert" class="bg-green-500 text-white py-2 px-6 rounded-full drop-shadow-[0_4px_12px_rgba(0,0,0,0.4)] shadow-md hover:bg-green-600 transition-colors duration-300 transform hover:scale-105">
        Talk to Expert
      </a>

      <!-- Send Inquiry Button -->
      <button id="send-inquiry-btn"
  class="bg-red-700 text-white py-2 px-6 rounded-full drop-shadow-[0_4px_12px_rgba(0,0,0,0.4)] hover:bg-yellow-600 transition-colors duration-300 transform hover:scale-105">
  Send an Inquiry
</button>

    </div>
  </div>
</nav>


    <!-- Inquiry Modal -->
    <div id="inquiry-modal" class="modal">
        <div class="modal-content">
            <span class="modal-close">&times;</span>
            <h2 class="text-2xl font-semibold text-blue-800 mb-4 text-center">Send an Inquiry</h2>
            <form id="inquiry-form" class="space-y-4" novalidate>
                <div>
                    <label for="inquiry-name" class="block text-gray-700 mb-1">Full Name</label>
                    <input type="text" id="inquiry-name" placeholder="Full Name" required class="w-full p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600 transition-all duration-300 focus:-translate-y-0.5 focus:shadow-md">
                </div>
                <div>
                    <label for="inquiry-email" class="block text-gray-700 mb-1">Email Address</label>
                    <input type="email" id="inquiry-email" placeholder="Email Address" required pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$" class="w-full p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600 transition-all duration-300 focus:-translate-y-0.5 focus:shadow-md">
                </div>
                <div>
                    <label for="inquiry-phone" class="block text-gray-700 mb-1">Phone Number</label>
                    <input type="tel" id="inquiry-phone" placeholder="Phone Number" pattern="^\+?\d{7,15}$" class="w-full p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600 transition-all duration-300 focus:-translate-y-0.5 focus:shadow-md">
                </div>
                <div>
                    <label for="inquiry-insurance-type" class="block text-gray-700 mb-1">Insurance Type</label>
                    <select id="inquiry-insurance-type" required class="w-full p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600 transition-all duration-300 focus:-translate-y-0.5 focus:shadow-md">
                        <option value="" disabled selected>Select Insurance Type</option>
                        <option value="home">Home Insurance</option>
                        <option value="health">Health Insurance</option>
                        <option value="vehicle">Vehicle Insurance</option>
                    </select>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition-colors duration-300">Submit Inquiry</button>
            </form>
            <p id="inquiry-form-message" class="mt-4 text-green-600 hidden text-center">Thank you! Your inquiry has been submitted.</p>
        </div>
    </div>

    <!-- Hero Section with Image Slider -->
    <section class="relative h-[360px] md:h-[650px] w-full overflow-hidden">
        <div class="absolute inset-0" id="slider">
            <img src="https://static.investindia.gov.in/s3fs-public/2019-05/Insurance1.jpg" alt="Modern building exterior with glass and concrete in warm morning light, urban architectural background" class="w-full h-full object-cover slider-image active">
            <img src="https://av.sc.com/in/content/images/5-reasons-sp_iStock-471709896_1600x490.jpg" alt="Illustration of a blue sedan car parked under a large red umbrella" class="w-full h-full object-cover slider-image hidden">
             <img src="https://www.canarahsbclife.com/content/dam/chli/life-insurance/whole-life-insurance-sp-desktop.webp" alt="Illustration of a blue sedan car parked under a large red umbrella" class="w-full h-full object-cover slider-image hidden">
        </div>
        <div class="relative h-full flex items-center justify-center">
           
        </div>
        <button aria-label="Previous" class="absolute left-4 top-1/2 -translate-y-1/2 text-white text-3xl opacity-60 hover:opacity-90 transition-all duration-300" id="prev-slide">←</button>
        <button aria-label="Next" class="absolute right-4 top-1/2 -translate-y-1/2 text-white text-3xl opacity-60 hover:opacity-90 transition-all duration-300" id="next-slide">→</button>
    </section>

    <!-- Insurance Types Horizontal Scroll -->
    <section class="bg-white py-10 border-b border-gray-200">
        <h2 class="sr-only">Insurance Types</h2>
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex space-x-8 overflow-x-auto no-scrollbar px-2">
                <div class="shrink-0 w-28 bg-white rounded-lg shadow-md p-4 flex flex-col items-center cursor-pointer hover:shadow-lg transition">
                    <svg class="w-8 h-8 text-gray-700 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    <span class="text-xs text-center font-semibold text-gray-800 leading-tight">Building Insurance</span>
                </div>
                <div class="shrink-0 w-28 bg-white rounded-lg shadow-md p-4 flex flex-col items-center cursor-pointer hover:shadow-lg transition">
                    <svg class="w-8 h-8 text-gray-700 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <path d="M12 3v6"></path>
                        <path d="M12 9l-4-4m0 0l4-4m-4 4h8"></path>
                    </svg>
                    <span class="text-xs text-center font-semibold text-gray-800 leading-tight">Stock Insurance</span>
                </div>
                <div class="shrink-0 w-28 bg-white rounded-lg shadow-md p-4 flex flex-col items-center cursor-pointer hover:shadow-lg transition">
                    <svg class="w-8 h-8 text-gray-700 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                    <span class="text-xs text-center font-semibold text-gray-800 leading-tight">Health Insurance</span>
                </div>
                <div class="shrink-0 w-28 bg-white rounded-lg shadow-md p-4 flex flex-col items-center cursor-pointer hover:shadow-lg transition">
                    <svg class="w-8 h-8 text-gray-700 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                    </svg>
                    <span class="text-xs text-center font-semibold text-gray-800 leading-tight">Life Insurance</span>
                </div>
                <div class="shrink-0 w-28 bg-white rounded-lg shadow-md p-4 flex flex-col items-center cursor-pointer hover:shadow-lg transition">
                    <svg class="w-8 h-8 text-gray-700 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4zM3 6h18m-2 12H5m7-7v7m-4-3h8"/>
                    </svg>
                    <span class="text-xs text-center font-semibold text-gray-800 leading-tight">Two wheeler Insurance</span>
                </div>
                <div class="shrink-0 w-28 bg-white rounded-lg shadow-md p-4 flex flex-col items-center cursor-pointer hover:shadow-lg transition">
                    <svg class="w-8 h-8 text-gray-700 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/>
                        <path d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10m10-1H3m13-1h-2m4 0h2"/>
                    </svg>
                    <span class="text-xs text-center font-semibold text-gray-800 leading-tight">Three wheeler Insurance</span>
                </div>
                <div class="shrink-0 w-28 bg-white rounded-lg shadow-md p-4 flex flex-col items-center cursor-pointer hover:shadow-lg transition">
                    <svg class="w-8 h-8 text-gray-700 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/>
                        <path d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10m10-1H3m13-1h-2m4 0h2"/>
                    </svg>
                    <span class="text-xs text-center font-semibold text-gray-800 leading-tight">Four wheeler Insurance</span>
                </div>
                <div class="shrink-0 w-28 bg-white rounded-lg shadow-md p-4 flex flex-col items-center cursor-pointer hover:shadow-lg transition">
                    <svg class="w-8 h-8 text-gray-700 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M8 17a2 2 0 11-4 0 2 2 0 014 0zm10 0a2 2 0 11-4 0 2 2 0 014 0z"/>
                        <path d="M20 6l2 2H4l2-2h14zm-2 10H6m12 0h-2m-8 0H6"/>
                    </svg>
                    <span class="text-xs text-center font-semibold text-gray-800 leading-tight">Pickup Insurance</span>
                </div>
                <div class="shrink-0 w-28 bg-white rounded-lg shadow-md p-4 flex flex-col items-center cursor-pointer hover:shadow-lg transition">
                    <svg class="w-8 h-8 text-gray-700 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M6 17a2 2 0 11-4 0 2 2 0 014 0zm10 0a2 2 0 11-4 0 2 2 0 014 0z"/>
                        <path d="M20 8H4v2h16V8zm0 2H4l2 2h12l2-2z"/>
                    </svg>
                    <span class="text-xs text-center font-semibold text-gray-800 leading-tight">Tractor Insurance</span>
                </div>
                <div class="shrink-0 w-28 bg-white rounded-lg shadow-md p-4 flex flex-col items-center cursor-pointer hover:shadow-lg transition">
                    <svg class="w-8 h-8 text-gray-700 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M8 17a2 2 0 11-4 0 2 2 0 014 0zm10 0a2 2 0 11-4 0 2 2 0 014 0z"/>
                        <path d="M20 6l2 2H4l2-2h14zm-2 10H6m12 0h-2m-8 0H6"/>
                    </svg>
                    <span class="text-xs text-center font-semibold text-gray-800 leading-tight">Truck Insurance</span>
                </div>
            </div>
        </div>
    </section>
    <main class="max-w-4xl mx-auto  mt-4 mb-14 space-y-6">
        <h2 class="text-blue-700 text-4xl"> Insurance Claim Process</h2>
    <p class="text-slate-700 text-center text-base md:text-lg leading-relaxed ">
      We hope it never comes to this, but if there’s an accident or something happens to your car, you will have to file a claim. The easiest way to file a car insurance claim is online. Here’s a step-by-step break down of TATA AIG’s 
      <a href="https://www.tataaig.com/motor-insurance-car-claims" target="_blank" rel="noopener noreferrer" class="text-blue-600 underline hover:text-blue-800 transition">insurance claims process</a>:
    </p>

    <section class="timeline relative space-y-8 mb-8 mt-8 pl-8 md:pl-12">
      <!-- Step 1 -->
      <article class="flex items-start relative">
        <div class="absolute left-0 top-2.5 w-10 h-10 rounded-full border-2 border-dashed border-gray-500 bg-white text-gray-700 font-semibold flex items-center justify-center shadow-md">1</div>
        <div class="flex-1 ml-14">
          <div class="accordion bg-white rounded-xl shadow-xl border border-gray-200">
            <button aria-expanded="false" class="accordion-header w-full flex justify-between items-center px-6 py-4 text-blue-900 font-medium text-lg focus:outline-none">
              Register Your Claim
              <svg class="arrow-icon w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="accordion-content px-6 text-slate-700 text-base leading-relaxed ">
              <p>After making sure that you and your co-passengers are safe, it is advisable to inform your insurance provider of the incident at the earliest and get your claim registered.</p>
                <p>To register your claim online, you need to log in to your Tata AIG online and click on 'Claim'. </p>
                <ul class="list-disc pl-6">
  <li>Once you are redirected to the online claim form, you will need to furnish the following information: </li>
  <li>Your car insurance policy number </li>
  <li>A few personal details, including your name, number and address License details, or the license details of the driver </li>
  <li>A few details regarding the incident </li>
  <li>A copy of the FIR if there was an accident</li>
</ul>

                    <p>In the car insurance claim form, you will also need to specify if a third-party was harmed or if third-party property was damaged.</p>
                    <p>Once you’ve finished entering all the details, you simply need to click ‘Submit’.</p>
            </div>
          </div>
        </div>
      </article>

      <!-- Step 2 -->
      <article class="flex items-start relative">
        <div class="absolute left-0 top-2.5 w-10 h-10 rounded-full border-2 border-dashed border-gray-500 bg-white text-gray-700 font-semibold flex items-center justify-center shadow-md">2</div>
        <div class="flex-1 ml-14">
          <div class="accordion bg-white rounded-xl shadow-xl border border-gray-200">
            <button aria-expanded="false" class="accordion-header w-full flex justify-between items-center px-6 py-4 text-blue-900 font-medium text-lg focus:outline-none">
              Get the Claim Intimation Number
              <svg class="arrow-icon w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="accordion-content px-6 text-slate-700 text-base leading-relaxed ">
              <p>After your claim is registered with us, we will provide you with a Claim Registration Number. State this number in all your communication concerning the claim status and settlement."</p>
            </div>
          </div>
        </div>
      </article>

      <!-- Step 3 -->
      <article class="flex items-start relative">
        <div class="absolute left-0 top-2.5 w-10 h-10 rounded-full border-2 border-dashed border-gray-500 bg-white text-gray-700 font-semibold flex items-center justify-center shadow-md">3</div>
        <div class="flex-1 ml-14">
          <div class="accordion bg-white rounded-xl shadow-xl border border-gray-200">
            <button aria-expanded="false" class="accordion-header w-full flex justify-between items-center px-6 py-4 text-blue-900 font-medium text-lg focus:outline-none">
              Inspection of the damages sustained
              <svg class="arrow-icon w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="accordion-content px-6 text-slate-700 text-base leading-relaxed ">
              <p>An authorized surveyor will inspect your car to assess the extent of the damage and estimate repair costs.</p>
            </div>
          </div>
        </div>
      </article>

      <!-- Step 4 -->
      <article class="flex items-start relative">
        <div class="absolute left-0 top-2.5 w-10 h-10 rounded-full border-2 border-dashed border-gray-500 bg-white text-gray-700 font-semibold flex items-center justify-center shadow-md">4</div>
        <div class="flex-1 ml-14">
          <div class="accordion bg-white rounded-xl shadow-xl border border-gray-200">
            <button aria-expanded="false" class="accordion-header w-full flex justify-between items-center px-6 py-4 text-blue-900 font-medium text-lg focus:outline-none">
              Take the car to the garage
              <svg class="arrow-icon w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="accordion-content px-6 text-slate-700 text-base leading-relaxed ">
              <p>Bring your car to the authorized garage for repairs after the inspection is complete and approved.</p>
            </div>
          </div>
        </div>
      </article>

      <!-- Step 5 -->
      <article class="flex items-start relative">
        <div class="absolute left-0 top-2.5 w-10 h-10 rounded-full border-2 border-dashed border-gray-500 bg-white text-gray-700 font-semibold flex items-center justify-center shadow-md">5</div>
        <div class="flex-1 ml-14">
          <div class="accordion bg-white rounded-xl shadow-xl border border-gray-200">
            <button aria-expanded="false" class="accordion-header w-full flex justify-between items-center px-6 py-4 text-blue-900 font-medium text-lg focus:outline-none">
              Get your car repaired
              <svg class="arrow-icon w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="accordion-content px-6 text-slate-700 text-base leading-relaxed ">
              <p>The garage will carry out the repairs as per the survey report and insurance terms.</p>
            </div>
          </div>
        </div>
      </article>

      <!-- Step 6 -->
      <article class="flex items-start relative">
        <div class="absolute left-0 top-2.5 w-10 h-10 rounded-full border-2 border-dashed border-gray-500 bg-white text-gray-700 font-semibold flex items-center justify-center shadow-md">6</div>
        <div class="flex-1 ml-14">
          <div class="accordion bg-white rounded-xl shadow-xl border border-gray-200">
            <button aria-expanded="false" class="accordion-header w-full flex justify-between items-center px-6 py-4 text-blue-900 font-medium text-lg focus:outline-none">
              We will settle the claim
              <svg class="arrow-icon w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="accordion-content px-6 text-slate-700 text-base leading-relaxed ">
              <p>Once repair is completed satisfactorily, the claim amount will be settled by TATA AIG as per your policy.</p>
            </div>
          </div>
        </div>
      </article>
    </section>
  </main>
  
 <section class="mt-12 mb-14">
    <div class="flex justify-center space-x-2">
      <button id="coveredBtn" class="px-6 py-2 rounded-l-md border text-xl border-gray-300 font-semibold bg-blue-600 text-white">What’s Covered</button>
      <button id="notCoveredBtn" class="px-6 py-2 rounded-r-md border text-xl border-gray-300 font-semibold bg-white text-gray-700">What’s Not Covered</button>
    </div>

    <!-- Covered Content with Slider -->
    <div id="coveredContent" class="mt-10 mb-4">
      <div class="overflow-hidden relative">
        <div id="coveredSlider" class="flex transition-transform duration-500 ease-in-out">
          <!-- Slide 1 -->
          <div class="min-w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 px-2">
            <div class="border border-gray-100 p-6 rounded-md shadow hover:shadow-xl transition">
              <div class="flex justify-center mb-4">
                <img src="https://static.vecteezy.com/system/resources/previews/029/163/302/non_2x/car-protection-emblem-solid-icon-car-insurance-business-service-shield-protection-logo-of-transportation-vehicle-care-symbol-illustration-design-on-white-background-eps-10-vector.jpg" alt="Collision" class="w-12 h-12" />
              </div>
              <h3 class="text-center text-gray-900 font-bold text-xl mb-2">Third-Party Liabilities</h3>
              <p class="text-center text-gray-600 text-lg">Covers financial liabilities arising from 3rd party liability claims, including damage to third-party property, injuries to individuals and death</p>
            </div>
            <div class="border border-gray-100 p-6 rounded-md shadow hover:shadow-xl transition">
              <div class="flex justify-center mb-4">
                <img src="https://static.vecteezy.com/system/resources/previews/029/163/302/non_2x/car-protection-emblem-solid-icon-car-insurance-business-service-shield-protection-logo-of-transportation-vehicle-care-symbol-illustration-design-on-white-background-eps-10-vector.jpg" alt="Theft" class="w-12 h-12" />
              </div>
              <h3 class="text-center text-gray-900 font-bold text-xl mb-2">Accident and Collision Coverage</h3>
              <p class="text-center text-gray-600 text-lg">Reimbursement of repair or replacement costs resulting from collisions or road accidents of the insured vehicle.</p>
            </div>
            <div class="border border-gray-100 p-6 rounded-md shadow hover:shadow-xl transition">
              <div class="flex justify-center mb-4">
                <img src="https://static.vecteezy.com/system/resources/previews/029/163/302/non_2x/car-protection-emblem-solid-icon-car-insurance-business-service-shield-protection-logo-of-transportation-vehicle-care-symbol-illustration-design-on-white-background-eps-10-vector.jpg" alt="Theft" class="w-12 h-12" />
              </div>
              <h3 class="text-center text-gray-900 font-bold text-xl mb-2">Theft of Insured Car</h3>
              <p class="text-center text-gray-600 text-lg">Coverage for damages caused by theft of car or car parts based on the insured Declared Value (IDV) of the vehicle.</p>
            </div>
            <div class="border border-gray-100 p-6 rounded-md shadow hover:shadow-xl transition">
              <div class="flex justify-center mb-4">
                <img src="https://static.vecteezy.com/system/resources/previews/029/163/302/non_2x/car-protection-emblem-solid-icon-car-insurance-business-service-shield-protection-logo-of-transportation-vehicle-care-symbol-illustration-design-on-white-background-eps-10-vector.jpg" alt="Theft" class="w-12 h-12" />
              </div>
              <h3 class="text-center text-gray-900 font-bold text-xl mb-2">Natural Calamities</h3>
              <p class="text-center text-gray-600 text-lg">Natural calamities covered by car Insurance include floods, earthquakes, hurricanes, and heavy rainfall</p>
            </div>
          </div>
          <!-- Slide 2 -->
          <div class="min-w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 px-2">
            <div class="border border-gray-100 p-6 rounded-md shadow hover:shadow-xl transition">
              <div class="flex justify-center mb-4">
                <img src="https://static.vecteezy.com/system/resources/previews/029/163/302/non_2x/car-protection-emblem-solid-icon-car-insurance-business-service-shield-protection-logo-of-transportation-vehicle-care-symbol-illustration-design-on-white-background-eps-10-vector.jpg" alt="Theft" class="w-12 h-12" />
              </div>
              <h3 class="text-center text-gray-900 font-bold text-xl mb-2">Man-made Calamities</h3>
              <p class="text-center text-gray-600 text-lg">Coverage for damages due to man-made events like riots, vandalism, strikes, terrorism and malicious acts.</p>
            </div>
            <div class="border border-gray-100 p-6 rounded-md shadow hover:shadow-xl transition">
              <div class="flex justify-center mb-4">
                <img src="https://static.vecteezy.com/system/resources/previews/029/163/302/non_2x/car-protection-emblem-solid-icon-car-insurance-business-service-shield-protection-logo-of-transportation-vehicle-care-symbol-illustration-design-on-white-background-eps-10-vector.jpg" alt="Theft" class="w-12 h-12" />
              </div>
              <h3 class="text-center text-gray-900 font-bold text-xl mb-2">Fire and Explosion</h3>
              <p class="text-center text-gray-600 text-lg">Coverage for damages due to fire outbreaks or explosions, including incidents while parked or in motion.</p>
            </div>
            <div class="border border-gray-100 p-6 rounded-md shadow hover:shadow-xl transition">
              <div class="flex justify-center mb-4">
                <img src="https://static.vecteezy.com/system/resources/previews/029/163/302/non_2x/car-protection-emblem-solid-icon-car-insurance-business-service-shield-protection-logo-of-transportation-vehicle-care-symbol-illustration-design-on-white-background-eps-10-vector.jpg" alt="Natural Calamity" class="w-12 h-12" />
              </div>
              <h3 class="text-center text-gray-900 font-bold text-xl mb-2">Animal Attack/Rat Bites</h3>
              <p class="text-center text-gray-600 text-lg">Coverage for animal attacks or rat bites in car insurance includes protection against such threats in the insured vehicle.</p>
            </div>
            <div class="border border-gray-100 p-6 rounded-md shadow hover:shadow-xl transition">
              <div class="flex justify-center mb-4">
                <img src="https://static.vecteezy.com/system/resources/previews/029/163/302/non_2x/car-protection-emblem-solid-icon-car-insurance-business-service-shield-protection-logo-of-transportation-vehicle-care-symbol-illustration-design-on-white-background-eps-10-vector.jpg" alt="Riot" class="w-12 h-12" />
              </div>
              <h3 class="text-center text-gray-900 font-bold text-xl mb-2">In-Transit Damage</h3>
              <p class="text-center text-gray-600 text-lg">Protection against damages while the car is being transported from one place to another, It covers roads, rail, inland waterways, air, and lifts.</p>
            </div>
          </div>
          <!-- Slide 3 -->
          <div class="min-w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 px-2">
            <div class="border border-gray-100 p-6 rounded-md shadow hover:shadow-xl transition">
              <div class="flex justify-center mb-4">
                <img src="https://static.vecteezy.com/system/resources/previews/029/163/302/non_2x/car-protection-emblem-solid-icon-car-insurance-business-service-shield-protection-logo-of-transportation-vehicle-care-symbol-illustration-design-on-white-background-eps-10-vector.jpg" alt="Collision" class="w-12 h-12" />
              </div>
              <h3 class="text-center text-gray-900 font-bold text-xl mb-2">Personal Accident Cover</h3>
              <p class="text-center text-gray-600 text-lg">Compensation up to 15 lakhs for the owner-driver. It covers accidental death or permanent total disability arising from a car accident.</p>
            </div>
            <div class="border border-gray-100 p-6 rounded-md shadow hover:shadow-xl transition">
              <div class="flex justify-center mb-4">
                <img src="https://static.vecteezy.com/system/resources/previews/029/163/302/non_2x/car-protection-emblem-solid-icon-car-insurance-business-service-shield-protection-logo-of-transportation-vehicle-care-symbol-illustration-design-on-white-background-eps-10-vector.jpg" alt="Collision" class="w-12 h-12" />
              </div>
              <h3 class="text-center text-gray-900 font-bold text-xl mb-2">Third-Party Liabilities</h3>
              <p class="text-center text-gray-600 text-lg">Covers financial liabilities arising from 3rd party liability claims, including damage to third-party property, injuries to individuals and death</p>
            </div>
            <div class="border border-gray-100 p-6 rounded-md shadow hover:shadow-xl transition">
              <div class="flex justify-center mb-4">
                <img src="https://static.vecteezy.com/system/resources/previews/029/163/302/non_2x/car-protection-emblem-solid-icon-car-insurance-business-service-shield-protection-logo-of-transportation-vehicle-care-symbol-illustration-design-on-white-background-eps-10-vector.jpg" alt="Collision" class="w-12 h-12" />
              </div>
              <h3 class="text-center text-gray-900 font-bold text-xl mb-2">Accident and Collision Coverage</h3>
              <p class="text-center text-gray-600 text-lg">Reimbursement of repair or replacement costs resulting from collisions or road accidents of the insured vehicle</p>
            </div>
            <div class="border border-gray-100 p-6 rounded-md shadow hover:shadow-xl transition">
              <div class="flex justify-center mb-4">
                <img src="https://static.vecteezy.com/system/resources/previews/029/163/302/non_2x/car-protection-emblem-solid-icon-car-insurance-business-service-shield-protection-logo-of-transportation-vehicle-care-symbol-illustration-design-on-white-background-eps-10-vector.jpg" alt="Collision" class="w-12 h-12" />
              </div>
              <h3 class="text-center text-gray-900 font-bold text-xl mb-2">Theft of Insured Car</h3>
              <p class="text-center text-gray-600 text-">Clgoverage for damages caused by theft of car or car parts based on the insured Declared Value (IDV) of the vehicle</p>
            </div>
          </div>
        </div>

        <!-- Slider Controls for Covered -->
        <div class="flex justify-center gap-2 mb-8 mt-4" id="coveredDots"></div>
      </div>
    </div>

    <!-- Not Covered Content with Slider -->
    <div id="notCoveredContent" class="mt-10 hidden">
      <div class="overflow-hidden relative">
        <div id="notCoveredSlider" class="flex transition-transform duration-500 ease-in-out">
           <!-- Slide 1 -->
          <div class="min-w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 px-2">
            <div class="border border-gray-100 p-6 rounded-md shadow hover:shadow-xl transition">
              <div class="flex justify-center mb-4">
                <img src="https://toppng.com/uploads/preview/car-crash-transparent-11563330771pry5xkab8p.png" alt="Collision" class="w-12 h-12" />
              </div>
              <h3 class="text-center text-gray-900 font-bold text-xl mb-2">Depreciation</h3>
              <p class="text-center text-gray-600 text-lg">The decrease in the value of the car or cor ports due to wear and tear is not covered For this coverage, you need to opt for nil depreciation or return-to-invoice add-ons</p>
            </div>
            <div class="border border-gray-100 p-6 rounded-md shadow hover:shadow-xl transition">
              <div class="flex justify-center mb-4">
                <img src="https://toppng.com/uploads/preview/car-crash-transparent-11563330771pry5xkab8p.png" alt="Theft" class="w-12 h-12" />
              </div>
              <h3 class="text-center text-gray-900 font-bold text-xl mb-2">Mechanical Breakdown/Failure</h3>
              <p class="text-center text-gray-600 text-lg">Our Insurance plan does not cover damages resulting from a mechanical breakdown, electrical breakdown or vehicle's mechanical failures.</p>
            </div>
            <div class="border border-gray-100 p-6 rounded-md shadow hover:shadow-xl transition">
              <div class="flex justify-center mb-4">
                <img src="https://toppng.com/uploads/preview/car-crash-transparent-11563330771pry5xkab8p.png" alt="Theft" class="w-12 h-12" />
              </div>
              <h3 class="text-center text-gray-900 font-bold text-xl mb-2">Illegal Driving</h3>
              <p class="text-center text-gray-600 text-lg">Reliance car insurance does not cover any damage caused while driving illegally. This includes using the car for illegal races or in restricted areas.</p>
            </div>
            <div class="border border-gray-100 p-6 rounded-md shadow hover:shadow-xl transition">
              <div class="flex justify-center mb-4">
                <img src="https://toppng.com/uploads/preview/car-crash-transparent-11563330771pry5xkab8p.png" alt="Theft" class="w-12 h-12" />
              </div>
              <h3 class="text-center text-gray-900 font-bold text-xl mb-2">Driver Negligence</h3>
              <p class="text-center text-gray-600 text-lg">Reliance four-wheeler insurance does not cover accidents caused by reckless driving or failure to follow the traffic rules.</p>
            </div>
          </div>
          <!-- Slide 2 -->
          <div class="min-w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 px-2">
            <div class="border border-gray-100 p-6 rounded-md shadow hover:shadow-xl transition">
              <div class="flex justify-center mb-4">
                <img src="https://toppng.com/uploads/preview/car-crash-transparent-11563330771pry5xkab8p.png" alt="Theft" class="w-12 h-12" />
              </div>
              <h3 class="text-center text-gray-900 font-bold text-xl mb-2">Driving Without Valid Documents</h3>
              <p class="text-center text-gray-600 text-lg">Accidents/damages occurring when driving without a valid driving licence or necessary documents are not included.</p>
            </div>
            <div class="border border-gray-100 p-6 rounded-md shadow hover:shadow-xl transition">
              <div class="flex justify-center mb-4">
                <img src="https://toppng.com/uploads/preview/car-crash-transparent-11563330771pry5xkab8p.png" alt="Theft" class="w-12 h-12" />
              </div>
              <h3 class="text-center text-gray-900 font-bold text-xl mb-2">Drunk Driving</h3>
              <p class="text-center text-gray-600 text-lg">Our policy does not cover accidents occurring while the driver is under the influence of alcohol or drugs..</p>
            </div>
            <div class="border border-gray-100 p-6 rounded-md shadow hover:shadow-xl transition">
              <div class="flex justify-center mb-4">
                <img src="https://toppng.com/uploads/preview/car-crash-transparent-11563330771pry5xkab8p.png" alt="Natural Calamity" class="w-12 h-12" />
              </div>
              <h3 class="text-center text-gray-900 font-bold text-xl mb-2">Driving Outside Geographical Limits</h3>
              <p class="text-center text-gray-600 text-lg">Rellance four-wheeler Insurance does not cover Damages or accidents occurring outside the geographical boundaries specified in your policy.</p>
            </div>
            <div class="border border-gray-100 p-6 rounded-md shadow hover:shadow-xl transition">
              <div class="flex justify-center mb-4">
                <img src="https://toppng.com/uploads/preview/car-crash-transparent-11563330771pry5xkab8p.png" alt="Riot" class="w-12 h-12" />
              </div>
              <h3 class="text-center text-gray-900 font-bold text-xl mb-2">Pre-Existing Damage</h3>
              <p class="text-center text-gray-600 text-lg">The car insurance policy does not cover any damage that existed before the policy came into effect.</p>
            </div>
          </div>
          <!-- Slide 3 -->
          <div class="min-w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 px-2">
            <div class="border border-gray-100 p-6 rounded-md shadow hover:shadow-xl transition">
              <div class="flex justify-center mb-4">
                <img src="https://toppng.com/uploads/preview/car-crash-transparent-11563330771pry5xkab8p.png" alt="Collision" class="w-12 h-12" />
              </div>
              <h3 class="text-center text-gray-900 font-bold text-xl mb-2">War</h3>
              <p class="text-center text-gray-600 text-lg">Our policy does not cover damages caused by war, invasion, acts of foreign enemies, or other such events.</p>
            </div>
            <div class="border border-gray-100 p-6 rounded-md shadow hover:shadow-xl transition">
              <div class="flex justify-center mb-4">
                <img src="https://toppng.com/uploads/preview/car-crash-transparent-11563330771pry5xkab8p.png" alt="Collision" class="w-12 h-12" />
              </div>
              <h3 class="text-center text-gray-900 font-bold text-xl mb-2">Normal Wear and Tear</h3>
              <p class="text-center text-gray-600 text-lg">Our insurance plan does not cover the usual degradation of the vehicle over time. This includes minor scratches, dents not caused by a covered event, and ageing of parts.</p>
            </div>
            <div class="border border-gray-100 p-6 rounded-md shadow hover:shadow-xl transition">
              <div class="flex justify-center mb-4">
                <img src="https://toppng.com/uploads/preview/car-crash-transparent-11563330771pry5xkab8p.png" alt="Collision" class="w-12 h-12" />
              </div>
              <h3 class="text-center text-gray-900 font-bold text-xl mb-2">Electrical Damage</h3>
              <p class="text-center text-gray-600 text-lg">You do not get coverage for damages to electrical components not caused by a covered peril.</p>
            </div>
            <div class="border border-gray-100 p-6 rounded-md shadow hover:shadow-xl transition">
              <div class="flex justify-center mb-4">
                <img src="https://toppng.com/uploads/preview/car-crash-transparent-11563330771pry5xkab8p.png" alt="Collision" class="w-12 h-12" />
              </div>
              <h3 class="text-center text-gray-900 font-bold text-xl mb-2">Depreciation</h3>
              <p class="text-center text-gray-600 text-lg">The decrease in the value of the car or car parts due to wear and tear is not covered. For this coverage, you need to opt for nil depreciation or return-to-invoice add-ons.</p>
            </div>
</div>
</div>
        
        <!-- Slider Controls for Not Covered -->
        <div class="flex justify-center gap-2 mt-4 mb-8" id="notCoveredDots"></div>
      </div>
    </div>
  </section>
    <!-- Form Section -->
    <section id="get-quote" class="mb-12 text-center bg-blue-100 py-10 rounded-lg">
        <h2 class="text-2xl font-semibold text-blue-800 mb-4">Get Your Personalized Quote</h2>
        <p class="text-gray-700 mb-6">Fill out the form below to receive a customized insurance quote!</p>
        <form id="quote-form" class="max-w-lg mx-auto space-y-4">
            <div>
                <input type="text" id="name" placeholder="Full Name" class="w-full p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600 transition-all duration-300 focus:-translate-y-0.5 focus:shadow-md">
            </div>
            <div>
                <input type="email" id="email" placeholder="Email Address" class="w-full p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600 transition-all duration-300 focus:-translate-y-0.5 focus:shadow-md">
            </div>
            <div>
                <select id="insurance-type" class="w-full p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600 transition-all duration-300 focus:-translate-y-0.5 focus:shadow-md">
                    <option value="" disabled selected>Select Insurance Type</option>
                    <option value="home">Home Insurance</option>
                    <option value="vehicle">Vehicle Insurance</option>
                </select>
            </div>
            <button type="submit" class="bg-yellow-500 text-white py-3 px-6 rounded-lg hover:bg-yellow-600 transform hover:scale-105 transition-all duration-300">Submit</button>
        </form>
        <p id="form-message" class="mt-4 text-green-600 hidden">Thank you! We'll contact you soon.</p>
    </section>

    <!-- Home Insurance Section -->
    <main class="flex-grow container mx-auto px-2 md:px-6 py-5 text-gray-900">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-800 mb-8">Personal And Commercial Insurance</h2>
        <section class="flex justify-center items-center space-x-12 mb-12 flex-wrap max-w-5xl mx-auto">
            <div role="button" tabindex="0" class="flex flex-col items-center w-20 h-20 rounded-full bg-gray-100 cursor-pointer transition-colors duration-300 active:bg-red-100 active:text-red-600" aria-pressed="true" id="motorIcon">
                <svg class="w-7 h-7 fill-black transition-colors duration-300 active:fill-red-600" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                    <path d="M19.43 12.98c.04-.32.07-.65.07-.98 0-3.31-2.69-6-6-6s-6 2.69-6 6c0 .34.03.67.08.99-1.25.17-2.33.7-3.14 1.48-.52.5-.8 1.18-.8 1.91 0 1.57 1.28 2.85 2.85 2.85s2.85-1.28 2.85-2.85c0-.05 0-.1-.01-.15.45-.04.91-.07 1.39-.07s.94.03 1.39.07c0 .05-.01.1-.01.15 0 1.57 1.28 2.85 2.85 2.85s2.85-1.28 2.85-2.85c0-.73-.32-1.4-.82-1.9-.79-.75-1.9-1.22-3.1-1.37z"/>
                </svg>
                <span class="mt-2 text-xs font-semibold uppercase tracking-wide text-gray-600 active:text-red-600">Motor</span>
            </div>
            <div role="button" tabindex="0" class="flex flex-col items-center w-20 h-20 rounded-full bg-gray-100 cursor-pointer transition-colors duration-300 hover:bg-red-100 hover:text-red-600" id="healthIcon" aria-pressed="false">
                <svg class="w-7 h-7 fill-black transition-colors duration-300 hover:fill-red-600" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                    <path d="M12 2a7 7 0 0 0-7 7v5a7 7 0 0 0 14 0V9a7 7 0 0 0-7-7zm0 19c-1.11 0-2-.89-2-2h4c0 1.11-.89 2-2 2z"/>
                    <path d="M11 10h2v5h-2zM11 7h2v2h-2z"/>
                </svg>
                <span class="mt-2 text-xs font-semibold uppercase tracking-wide text-gray-600 hover:text-red-600">Health</span>
            </div>
            <div role="button" tabindex="0" class="flex flex-col items-center w-20 h-20 rounded-full bg-gray-100 cursor-pointer transition-colors duration-300 hover:bg-red-100 hover:text-red-600" id="lifeIcon" aria-pressed="false">
                <svg class="w-7 h-7 fill-black transition-colors duration-300 hover:fill-red-600" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                    <rect x="5" y="6" width="14" height="12" rx="2" ry="2"/>
                    <circle cx="12" cy="12" r="3"/>
                </svg>
                <span class="mt-2 text-xs font-semibold uppercase tracking-wide text-gray-600 hover:text-red-600">Life</span>
            </div>
            <div role="button" tabindex="0" class="flex flex-col items-center w-20 h-20 rounded-full bg-gray-100 cursor-pointer transition-colors duration-300 hover:bg-red-100 hover:text-red-600" id="homeIcon" aria-pressed="false">
                <svg class="w-7 h-7 fill-black transition-colors duration-300 hover:fill-red-600" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
                </svg>
                <span class="mt-2 text-xs font-semibold uppercase tracking-wide text-gray-600 hover:text-red-600">Home</span>
            </div>
        </section>
        <div class="flex justify-center">
            <hr class="h-[40px] w-[2px] bg-blue-600 ">
        </div>
        <!-- Motor Insurance Section -->
        <section id="insurance-section" class="max-w-6xl mx-auto px-4 py-12">
            <div class="text-center mb-12">
                <p class="text-gray-800 max-w-4xl text-xl mx-auto">
                    Discover our tailored insurance plans designed to protect every aspect of your life. From your vehicle to your health and home, we offer comprehensive coverage with flexible options to give you peace of mind in any situation.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Vehicle Insurance Card -->
                <div class="bg-white rounded-lg shadow-lg drop-shadow-[0_4px_12px_rgba(0,0,0,0.4)] p-6 flex flex-col items-center text-center">
                    <svg class="w-12 h-12 text-red-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3H4v4M20 7V3h-4v4M4 21h16M4 11h16M6 17h12M6 13h12"></path>
                    </svg>
                    <h3 class="text-2xl font-semibold text-gray-700 mb-3">Vehicle Insurance</h3>
                    <p class="text-gray-600 mb-4">
                        Our vehicle insurance offers robust protection for your car, covering accidents, theft, vandalism, and third-party liabilities. Enjoy additional benefits like 24/7 roadside assistance, coverage for natural disasters, and optional add-ons such as zero-depreciation cover and engine protection. Whether you're commuting or traveling, drive with confidence knowing you're fully protected.
                    </p>
                    <a href="#get-quote" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition">Book Now</a>
                </div>
                <!-- Health Insurance Card -->
                <div class="bg-white rounded-lg shadow-lg p-6  drop-shadow-[0_4px_12px_rgba(0,0,0,0.4)] flex flex-col items-center text-center">
                    <svg class="w-12 h-12 text-red-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                    <h3 class="text-2xl font-semibold text-gray-700 mb-3">Health Insurance</h3>
                    <p class="text-gray-600 mb-4">
                        Our health insurance plans provide comprehensive coverage for medical needs, including hospitalization, surgeries, diagnostic tests, and preventive care. Benefit from a wide network of hospitals, cashless treatment options, maternity coverage, and coverage for pre-existing conditions after a short waiting period. Ensure your family's health and well-being with flexible plans tailored to your needs.
                    </p>
                    <a href="#get-quote" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition">Book Now</a>
                </div>
                <!-- Home Insurance Card -->
                <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col drop-shadow-[0_4px_12px_rgba(0,0,0,0.4)] items-center text-center">
                    <svg class="w-12 h-12 text-red-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <h3 class="text-2xl font-semibold text-gray-700 mb-3">Home Insurance</h3>
                    <p class="text-gray-600 mb-4">
                        Safeguard your home and belongings with our home insurance, which covers damages from fire, theft, earthquakes, floods, and other perils. Our plans include protection for personal belongings, temporary living expenses, and liability coverage for accidents on your property. Optional add-ons like coverage for high-value items ensure your home remains a secure sanctuary.
                    </p>
                    <a href="#get-quote" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition">Book Now</a>
                </div>
            </div>
        </section>
    </main>

    <!-- Contact Us Section -->
    <section class="mx-auto my-12 px-4 flex flex-wrap gap-10 justify-center" aria-label="Contact Us section">
        <div class="text-center w-full">
            <h2 class="relative text-5xl font-bold text-blue-600 inline-block pb-2 after:content-[''] after:absolute after:left-1/2 after:-translate-x-1/2 after:bottom-0 after:w-6 after:h-[2px] after:bg-blue-600 after:rounded">Connect With Us</h2>
        </div>
        <div class="flex-1 min-w-[320px] max-w-[600px]">
            <h3 class="text-2xl font-bold text-blue-600 mb-1">Get in Touch</h3>
            <p class="text-gray-600 text-sm max-w-[400px] mb-3">HEAD OFFICE - Office No 703, 7th Floor, Esplanade Mall, Rasulgarh, Bhubaneswar – 751010</p>
            <div class="bg-white border border-gray-300 rounded-lg p-3 mb-4 shadow-sm flex items-center gap-3">
                <svg class="w-5 h-5 stroke-red-700 stroke-[1.5]" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M4 4h16v16H4z" stroke="none"></path>
                    <path d="M4 4L12 13 20 4"></path>
                </svg>
                <div>
                    <div class="text-gray-600 text-xl">E-Mail ID</div>
                    <a href="mailto:maxfininsurance@gmail.com" class="text-blue-700 font-bold text-base">abc@gmail.com</a>
                </div>
            </div>
            <div class="bg-white border border-gray-300 rounded-lg p-3 shadow-sm flex items-center gap-3">
                <svg class="w-5 h-5 stroke-red-700 stroke-[1.5]" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.91 19.91 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.91 19.91 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13 1.21.37 2.39.72 3.52a2 2 0 0 1-.45 2.11L9.91 10a16 16 0 0 0 6 6l1.65-1.65a2 2 0 0 1 2.11-.45c1.13.35 2.31.59 3.52.72a2 2 0 0 1 1.72 2z"></path>
                </svg>
                <div>
                    <div class="text-gray-600 text-xl">Mobile Enquiries</div>
                    <a href="tel:+919439100333" class="text-blue-700 font-bold text-base">+91 9999999999</a>
                </div>
            </div>
            <div class="bg-white border border-gray-300 rounded-lg shadow-sm mb-3 overflow-hidden">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.683806415533!2d85.83763461477265!3d20.34338808636968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1909b9b6b0b7b7%3A0xbec2a4c6f2f2b2b2!2sEsplanade%20One%20Mall!5e0!3m2!1sen!2sin!4v1697654321987!5m2!1sen!2sin&key=YOUR_API_KEY"
                    width="100%"
                    height="100"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Google Map showing Esplanade Mall, Rasulgarh, Bhubaneswar"
                    class="rounded-lg">
                </iframe>
            </div>
        </div>
        <form class="flex-1 min-w-[320px] max-w-[700px] contact-form" aria-label="Contact form" novalidate>
            <div class="flex gap-4 mb-4 max-[820px]:">
                <div class="flex-1">
                    <label for="firstName" class="block text-xl text-gray-700 mb-1">First Name</label>
                    <input type="text" id="firstName" name="firstName" autocomplete="given-name" placeholder="First Name" required class="w-full p-2 border border-gray-300 rounded-md bg-white focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 focus:ring-opacity-50 transition-all duration-300 focus:-translate-y-0.5 focus:shadow-md">
                </div>
                <div class="flex-1">
                    <label for="lastName" class="block text-xl text-gray-700 mb-1">Last Name</label>
                    <input type="text" id="lastName" name="lastName" autocomplete="family-name" placeholder="Last Name" required class="w-full p-2 border border-gray-300 rounded-md bg-white focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 focus:ring-opacity-50 transition-all duration-300 focus:-translate-y-0.5 focus:shadow-md">
                </div>
            </div>
            <div class="flex gap-4 mb-4 max-[720px]:flex-col">
                <div class="flex-1">
                    <label for="mobile" class="block text-xl text-gray-700 mb-1">Mobile</label>
                    <input type="tel" id="mobile" name="mobile" autocomplete="tel" placeholder="Mobile" pattern="^\+?\d{7,15}$" class="w-full p-2 border border-gray-300 rounded-md bg-white focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 focus:ring-opacity-50 transition-all duration-300 focus:-translate-y-0.5 focus:shadow-md">
                </div>
                <div class="flex-1">
                    <label for="email" class="block text-xl text-gray-700 mb-1">E-mail</label>
                    <input type="email" id="email" name="email" autocomplete="email" placeholder="E-mail" required pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$" class="w-full p-2 border border-gray-300 rounded-md bg-white focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 focus:ring-opacity-50 transition-all duration-300 focus:-translate-y-0.5 focus:shadow-md">
                </div>
            </div>
            <div class="mb-4">
                <label for="message" class="block text-xl text-gray-700 mb-1">Message</label>
                <textarea id="message" name="message" placeholder="Message" class="w-full p-2 border border-gray-300 rounded-md bg-white min-h-[80px] resize-y focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 focus:ring-opacity-50 transition-all duration-300 focus:-translate-y-0.5 focus:shadow-md"></textarea>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg hover:bg-blue-700 font-semibold transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2">Submit</button>
        </form>
    </section>

    <!-- Our Partners Section -->
    <section aria-label="Our partners section" class="mb-16 max-w-7xl mx-auto px-4">
        <h2 class="text-6xl font-bold text-blue-700 text-center">Our <span class="text-black">Partners</span></h2>
        <div class="h-[40px] w-[2px] bg-blue-600 mx-auto mt-1"></div>
        <div class="mt-12 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-4 gap-y-12 gap-x-10 place-items-center">
            <img src="https://maxfininsurance.com/images/partners/tata_aig_logo.png" alt="Blue square logo with TATA AIG Insurance white text" class="max-w-full h-16 object-contain" onerror="this.style.display='none'">
            <img src="https://maxfininsurance.com/images/partners/sbi_gic_logo.png" alt="Purple and white rounded rectangle logo with SBI General Insurance text" class="max-w-full h-16 object-contain" onerror="this.style.display='none'">
            <img src="https://maxfininsurance.com/images/partners/magma_logo.png" alt="Logo with text MAGMA HDI General Insurance Company Ltd in red and green colors" class="max-w-full h-16 object-contain" onerror="this.style.display='none'">
            <img src="https://maxfininsurance.com/images/partners/liberty_logo.png" alt="Liberty Insurance logo with navy color text and statue of liberty silhouette" class="max-w-full h-16 object-contain" onerror="this.style.display='none'">
            <img src="https://maxfininsurance.com/images/partners/hdfc_ergo_logo.png" alt="HDFC ERGO General Insurance logo with red background and white text" class="max-w-full h-16 object-contain" onerror="this.style.display='none'">
            <img src="https://maxfininsurance.com/images/partners/reliance_logo.png" alt="Reliance General Insurance logo with dark blue text and red accent" class="max-w-full h-16 object-contain" onerror="this.style.display='none'">
            <img src="https://maxfininsurance.com/images/partners/icici_lumbard_logo.png" alt="ICICI Lombard insurance logo featuring blue and orange colors" class="max-w-full h-16 object-contain" onerror="this.style.display='none'">
            <img src="https://maxfininsurance.com/images/partners/iffco_tokio_logo.png" alt="IFFCO Tokio General Insurance logo with light blue, white, and black text" class="max-w-full h-16 object-contain" onerror="this.style.display='none'">
            <img src="https://maxfininsurance.com/images/partners/acko_logo.png" alt="Acko insurance logo in purple with green dot on O" class="max-w-full h-16 object-contain" onerror="this.style.display='none'">
            <img src="https://maxfininsurance.com/images/partners/digit_logo.png" alt="Digit insurance logo in black text with orange accent" class="max-w-full h-16 object-contain" onerror="this.style.display='none'">
            <img src="https://maxfininsurance.com/images/partners/future_generally_logo.png" alt="Future Generali Total Insurance Solutions logo in red" class="max-w-full h-16 object-contain" onerror="this.style.display='none'">
            <img src="https://maxfininsurance.com/images/partners/shriram_insurance_logo.jpg" alt="Shriram General Insurance logo with yellow banner, black text, and cartoon man" class="max-w-full h-16 object-contain" onerror="this.style.display='none'">
            <img src="https://maxfininsurance.com/images/partners/max_life_logo.png" alt="Max Life Insurance logo with orange and blue colors" class="max-w-full h-16 object-contain" onerror="this.style.display='none'">
            <img src="https://maxfininsurance.com/images/partners/star_health_logo.png" alt="Star Health Insurance logo in blue with star icon and text" class="max-w-full h-16 object-contain" onerror="this.style.display='none'">
            <img src="https://maxfininsurance.com/images/partners/max_bupa_logo.png" alt="Max Bupa Health Insurance logo with blue and green heartbeat line" class="max-w-full h-16 object-contain" onerror="this.style.display='none'">
            <img src="https://maxfininsurance.com/images/partners/lic_logo.png" alt="LIC insurance logo" class="max-w-full h-16 object-contain" onerror="this.style.display='none'">
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-slate-50 to-blue-300 text-white py-6">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between gap-10 md:gap-0">
            <!-- Left logo and description -->
            <div class="md:w-1/3 flex flex-col items-start">
                <div class="mb-4">
                    <img
                        src="img/logo.png"
                        alt="MaxFin Insurance company logo with a bold red and blue theme"
                        class="w-26 h-20 shadow-xl rounded-md"
                        onerror="this.onerror=null;this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/b99b5435-866b-49a9-94bc-bf90088d5688.png';"
                    />
                </div>
                <p class="text-black leading-relaxed mb-6 max-w-sm">
                    Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                </p>
                <div class="flex space-x-4 social-icons text-blue-700 text-lg">
                    <a href="#" aria-label="Twitter" class="hover:text-blue-500 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6" >
                            <path d="M23 3a10.9 10.9 0 01-3.14.86 4.48 4.48 0 001.98-2.48 9.06 9.06 0 01-2.9 1.12A4.52 4.52 0 0016.07 2c-2.54 0-4.6 2.12-4.6 4.73 0 .37.04.74.12 1.08-3.83-.2-7.23-2.07-9.5-4.93-.4.75-.63 1.61-.63 2.53 0 1.72.9 3.25 2.27 4.15A4.44 4.44 0 012 10.6v.05c0 2.44 1.93 4.46 4.43 4.92a4.6 4.6 0 01-1.18.15c-.29 0-.58-.03-.86-.08a4.62 4.62 0 004.3 3.27 9 9 0 01-5.58 1.85c-.36 0-.71-.02-1.06-.07A12.74 12.74 0 008 20c8.4 0 13-7 13-13 0-.2 0-.39-.01-.58A8.8 8.8 0 0023 3z"></path>
                        </svg>
                    </a>
                    <a href="#" aria-label="Facebook" class="hover:text-blue-600 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                            <path d="M22 12a10 10 0 10-11.54 9.86v-6.97h-2.54v-2.89h2.54v-2.2c0-2.51 1.5-3.9 3.79-3.9 1.09 0 2.23.19 2.23.19v2.45h-1.26c-1.24 0-1.64.78-1.64 1.57v1.89h2.8l-.45 2.89h-2.35v6.97A10 10 0 0022 12z"></path>
                        </svg>
                    </a>
                    <a href="#" aria-label="YouTube" class="hover:text-red-600 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                            <path d="M19.8 7.2c-.3-1.2-1.2-2.1-2.4-2.4C14.4 4.4 12 4.4 12 4.4s-2.4 0-5.4.4c-1.2.3-2.1 1.2-2.4 2.4-.4 1.5-.4 4.7-.4 4.7s0 3.2.4 4.7c.3 1.2 1.2 2.1 2.4 2.4 3 .4 5.4.4 5.4.4s2.4 0 5.4-.4c1.2-.3 2.1-1.2 2.4-2.4.4-1.5.4-4.7.4-4.7s0-3.2-.4-4.7zm-11.6 6.5V9.3l5.4 2.2-5.4 2.2z"></path>
                        </svg>
                    </a>
                    <a href="#" aria-label="LinkedIn" class="hover:text-blue-700 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                            <path d="M16 8a6 6 0 016 6v5h-4v-5a2 2 0 00-4 0v5h-4v-9h4v1a3.5 3.5 0 016 0V8zM2 9h4v12H2zM4 3a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Middle Address -->
            <div class="md:w-1/3">
                <h3 class="font-semibold text-black text-lg mb-6">Address</h3>
                <ul class="text-black space-y-4 text-sm max-w-md">
                    <li class="flex items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" class="w-5 h-5 mt-1 text-blue-600 flex-shrink-0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 12.414a5 5 0 10-7.07 7.07l4.243-4.243a5 5 0 017.07-7.07z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        HEAD OFFICE- Office No 703, 7th Floor, Esplanade Mall, Rasulgarh, Bhubaneswar – 751010.
                    </li>
                    <li class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" class="w-5 h-5 text-blue-600 flex-shrink-0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5h2l3 7-4 4v1h3v2H3zM16 3l3 7-4 4v1h3v2h-3l-2-7 2-7z"></path>
                        </svg>
                        <a href="tel:+919439100333" class="hover:text-blue-500 transition-colors duration-300 font-semibold">+91 9999999999</a>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" class="w-5 h-5 text-blue-600 flex-shrink-0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 01-8 0 4 4 0 018 0zM12 14a2 2 0 100-4 2 2 0 000 4z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        <a href="mailto:maxfininsurance@gmail.com" class="hover:text-blue-500 transition-colors duration-300 font-semibold">abc@gmail.com</a>
                    </li>
                </ul>
            </div>

            <!-- Right Quick Links -->
            <div class="md:w-1/3">
                <h3 class="font-semibold text-black text-lg mb-6">Quick Links</h3>
                <ul class="text-black space-y-3 text-sm max-w-xs">
                    <li><a href="#" class="flex items-center gap-2 hover:text-blue-500 transition-colors duration-300"><span>›</span> About Us</a></li>
                    <li><a href="#" class="flex items-center gap-2 hover:text-blue-500 transition-colors duration-300"><span>›</span> Contact Us</a></li>
                    <li><a href="#" class="flex items-center gap-2 hover:text-blue-500 transition-colors duration-300"><span>›</span> Our Services</a></li>
                    <li><a href="#" class="flex items-center gap-2 hover:text-blue-500 transition-colors duration-300"><span>›</span> Terms & Condition</a></li>
                    <li><a href="#" class="flex items-center gap-2 hover:text-blue-500 transition-colors duration-300"><span>›</span> Support</a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom bar -->
        <div class="border-t border-black mt-12 text-black container mx-auto px-4 text-center gap-2">
            <div>
                © <span class="text-black font-semibold">2025 InsureEasy.</span>, All Right Reserved.
                <p class="mt-2 text-black">Contact us: support@insureeasy.com | +1-800-123-4567</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Interactivity -->
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-md', 'bg-gradient-to-br', 'from-slate-50', 'to-blue-300');
            } else {
                navbar.classList.remove('shadow-md', 'bg-gradient-to-br', 'from-slate-50', 'to-blue-300');
                navbar.classList.add('bg-gradient-to-br', 'from-slate-50', 'to-blue-300');
            }
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Image Slider
        const images = document.querySelectorAll('.slider-image');
        const prevButton = document.getElementById('prev-slide');
        const nextButton = document.getElementById('next-slide');
        let currentIndex = 0;

        function showSlide(index) {
            images.forEach((img, i) => {
                img.classList.toggle('hidden', i !== index);
                img.classList.toggle('active', i === index);
            });
        }

        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            showSlide(currentIndex);
        });

        nextButton.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % images.length;
            showSlide(currentIndex);
        });

        setInterval(() => {
            currentIndex = (currentIndex + 1) % images.length;
            showSlide(currentIndex);
        }, 5000);

        // Quote Form validation and submission feedback
        document.getElementById('quote-form').addEventListener('submit', function (e) {
            e.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const insuranceType = document.getElementById('insurance-type').value;

            if (name && email && insuranceType) {
                document.getElementById('form-message').classList.remove('hidden');
                this.reset();
                setTimeout(() => {
                    document.getElementById('form-message').classList.add('hidden');
                }, 3000);
            } else {
                alert('Please fill out all fields.');
            }
        });

        // Inquiry Modal functionality
        const inquiryModal = document.getElementById('inquiry-modal');
        const inquiryBtn = document.getElementById('send-inquiry-btn');
        const closeModal = document.querySelector('.modal-close');
        const inquiryForm = document.getElementById('inquiry-form');
        const inquiryFormMessage = document.getElementById('inquiry-form-message');

        inquiryBtn.addEventListener('click', () => {
            inquiryModal.style.display = 'flex';
        });

        closeModal.addEventListener('click', () => {
            inquiryModal.style.display = 'none';
            inquiryForm.reset();
            inquiryFormMessage.classList.add('hidden');
        });

        // Close modal when clicking outside the modal content
        inquiryModal.addEventListener('click', (e) => {
            if (e.target === inquiryModal) {
                inquiryModal.style.display = 'none';
                inquiryForm.reset();
                inquiryFormMessage.classList.add('hidden');
            }
        });

        // Inquiry Form validation and submission feedback
        inquiryForm.addEventListener('submit', function (e) {
            e.preventDefault();
            if (!this.checkValidity()) {
                this.reportValidity();
                return;
            }
            const name = document.getElementById('inquiry-name').value;
            const email = document.getElementById('inquiry-email').value;
            const phone = document.getElementById('inquiry-phone').value;
            const insuranceType = document.getElementById('inquiry-insurance-type').value;

            if (name && email && insuranceType) {
                inquiryFormMessage.classList.remove('hidden');
                this.reset();
                setTimeout(() => {
                    inquiryFormMessage.classList.add('hidden');
                    inquiryModal.style.display = 'none';
                }, 3000);
            } else {
                alert('Please fill out all required fields.');
            }
        });

        // Contact Form validation and submission feedback
        document.querySelector('.contact-form').addEventListener('submit', function (e) {
            e.preventDefault();
            if (!this.checkValidity()) {
                this.reportValidity();
                return;
            }
            alert('Thank you for contacting MaxFin Insurance. We will get back to you soon.');
            this.reset();
        });

        // Insurance Icons Interaction
        const insuranceIcons = document.querySelectorAll('.icon-circle');
        const sections = {
            'motorIcon': 'motor-section',
            'healthIcon': 'health-section',
            'lifeIcon': 'life-section',
            'homeIcon': 'motor-section', 
            'travelIcon': 'motor-section',
            'marineIcon': 'motor-section'
        };

        insuranceIcons.forEach(icon => {
            icon.addEventListener('click', () => {
                if (icon.classList.contains('active')) return;
                insuranceIcons.forEach(ic => {
                    ic.classList.remove('active', 'bg-red-100', 'text-red-600');
                    ic.querySelector('svg').classList.remove('fill-red-600');
                    ic.querySelector('span').classList.remove('text-red-600');
                    ic.setAttribute('aria-pressed', 'false');
                });
                icon.classList.add('active', 'bg-red-100', 'text-red-600');
                icon.querySelector('svg').classList.add('fill-red-600');
                icon.querySelector('span').classList.add('text-red-600');
                icon.setAttribute('aria-pressed', 'true');

                // Show corresponding section
                const sectionId = sections[icon.id];
                document.querySelectorAll('#motor-section, #health-section, #life-section').forEach(section => {
                    section.classList.add('hidden');
                });
                document.getElementById(sectionId).classList.remove('hidden');
            });
        });
        // Accordion toggle behavior
    document.querySelectorAll('.accordion-header').forEach(button => {
      button.addEventListener('click', () => {
        const accordion = button.closest('.accordion');
        const content = accordion.querySelector('.accordion-content');
        const isOpen = content.classList.contains('open');

        // Close all other accordions
        document.querySelectorAll('.accordion-content').forEach(otherContent => {
          if (otherContent !== content && otherContent.classList.contains('open')) {
            otherContent.classList.remove('open');
            otherContent.closest('.accordion').querySelector('.accordion-header').setAttribute('aria-expanded', 'false');
          }
        });

        // Toggle current accordion
        if (isOpen) {
          content.classList.remove('open');
          button.setAttribute('aria-expanded', 'false');
        } else {
          content.classList.add('open');
          button.setAttribute('aria-expanded', 'true');
        }
      });
    });
    // Tab switching
    const coveredBtn = document.getElementById('coveredBtn');
    const notCoveredBtn = document.getElementById('notCoveredBtn');
    const coveredContent = document.getElementById('coveredContent');
    const notCoveredContent = document.getElementById('notCoveredContent');

    coveredBtn.addEventListener('click', () => {
      coveredContent.classList.remove('hidden');
      notCoveredContent.classList.add('hidden');
      coveredBtn.classList.add('bg-blue-600', 'text-white');
      coveredBtn.classList.remove('bg-white', 'text-gray-700');
      notCoveredBtn.classList.add('bg-white', 'text-gray-700');
      notCoveredBtn.classList.remove('bg-blue-600', 'text-white');
      stopAutoSlide('notCovered');
      startAutoSlide('covered');
    });

    notCoveredBtn.addEventListener('click', () => {
      notCoveredContent.classList.remove('hidden');
      coveredContent.classList.add('hidden');
      notCoveredBtn.classList.add('bg-blue-600', 'text-white');
      notCoveredBtn.classList.remove('bg-white', 'text-gray-700');
      coveredBtn.classList.add('bg-white', 'text-gray-700');
      coveredBtn.classList.remove('bg-blue-600', 'text-white');
      stopAutoSlide('covered');
      startAutoSlide('notCovered');
    });

    // Slider functionality
    let coveredIndex = 0;
    let notCoveredIndex = 0;
    let coveredInterval;
    let notCoveredInterval;

    const coveredSlider = document.getElementById('coveredSlider');
    const notCoveredSlider = document.getElementById('notCoveredSlider');
    const coveredDotsContainer = document.getElementById('coveredDots');
    const notCoveredDotsContainer = document.getElementById('notCoveredDots');

    function createDots(sliderId, container, slideCount) {
      container.innerHTML = ''; // Clear existing dots
      for (let i = 0; i < slideCount; i++) {
        const dot = document.createElement('button');
        dot.className = `w-8 h-2 rounded ${i === 0 ? 'bg-blue-500' : 'bg-gray-300'}`;
        dot.onclick = () => slideTo(sliderId, i);
        container.appendChild(dot);
      }
    }

    function updateDots(sliderId, index) {
      const dots = sliderId === 'covered' ? coveredDotsContainer.children : notCoveredDotsContainer.children;
      for (let i = 0; i < dots.length; i++) {
        dots[i].className = `w-8 h-2 rounded ${i === index ? 'bg-blue-500' : 'bg-gray-300'}`;
      }
    }

    function slideTo(sliderId, index) {
      if (sliderId === 'covered') {
        coveredIndex = index;
        coveredSlider.style.transform = `translateX(-${index * 100}%)`;
        updateDots('covered', coveredIndex);
      } else {
        notCoveredIndex = index;
        notCoveredSlider.style.transform = `translateX(-${index * 100}%)`;
        updateDots('notCovered', notCoveredIndex);
      }
    }

    function startAutoSlide(sliderId) {
      if (sliderId === 'covered') {
        clearInterval(coveredInterval);
        coveredInterval = setInterval(() => {
          coveredIndex = (coveredIndex + 1) % coveredSlider.children.length;
          slideTo('covered', coveredIndex);
        }, 3000);
      } else {
        clearInterval(notCoveredInterval);
        notCoveredInterval = setInterval(() => {
          notCoveredIndex = (notCoveredIndex + 1) % notCoveredSlider.children.length;
          slideTo('notCovered', notCoveredIndex);
        }, 3000);
      }
    }

    function stopAutoSlide(sliderId) {
      if (sliderId === 'covered') {
        clearInterval(coveredInterval);
      } else {
        clearInterval(notCoveredInterval);
      }
    }

    // Initialize sliders
    createDots('covered', coveredDotsContainer, coveredSlider.children.length);
    createDots('notCovered', notCoveredDotsContainer, notCoveredSlider.children.length);
    startAutoSlide('covered');
    </script>
</body>
</html>