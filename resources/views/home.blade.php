@extends('theme.default')
@section('content')
<div
        class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75"
      >
        <div
          class="absolute top-0 w-full h-full bg-center bg-cover"
          style="
            background-image: url('assets/img/appliance-repair.jpg');
          "
        >
          <span
            id="blackOverlay"
            class="w-full h-full absolute opacity-75 bg-black"
          ></span>
        </div>
        <div class="container relative mx-auto">
          <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
              <div class="pr-12">
                <h1 class="text-white font-semibold text-5xl">
                  Home Appliance Services
                </h1>
                <p class="mt-4 text-lg text-blueGray-200">
                  With our innovative platform, we're making this a reality. By connecting talented professionals with clients in need, we're creating a new standard of convenience and accessibility, allowing people to receive top-notch services in the comfort of their own homes.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div
          class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
          style="transform: translateZ(0px)"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
            <polygon
              class="text-blueGray-200 fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
      </div>
      <section class="pb-20 bg-blueGray-200 -mt-24">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap">
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white text-center inline-flex  w-12 h-12 mb-5 shadow-lg rounded-full"
                  >
                    <img class="w-full" src="assets/img/washing-machine.png"/>
                  </div>
                  <h6 class="text-xl font-semibold">Washing Machine</h6>
                  <p class="mt-2 mb-4 text-blueGray-500">
                    Regular maintenance is necessary to keep your washing machine running efficiently and to prevent breakdowns. Maintenance services can include cleaning the detergent dispenser, checking the hoses, inspecting the drum ,etc..
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                  <div
                   class="text-white text-center inline-flex  w-12 h-12 mb-5 shadow-lg rounded-full"
                  >
                   <img class="w-full" src="assets/img/refrigerator.png"/>
                  </div>
                  <h6 class="text-xl font-semibold">Refrigerator</h6>
                  <p class="mt-2 mb-4 text-blueGray-500">
                    Refrigerator services refer to the maintenance, repair, and installation services for refrigerators. Regular maintenance is necessary to keep your refrigerator running efficiently and to prevent breakdowns. 
                  </p>
                </div>
              </div>
            </div>
            <div class="pt-6 w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white text-center inline-flex  w-12 h-12 mb-5 shadow-lg rounded-full bg-emerald-400"
                  >
                 <img class="w-full" src="assets/img/microwave.png"/>
                  </div>
                  <h6 class="text-xl font-semibold">Microwave</h6>
                  <p class="mt-2 mb-4 text-blueGray-500">
                     If your microwave oven is not working properly, a repair service can diagnose and fix the problem. Common issues that require repair include a malfunctioning magnetron, a faulty control panel, or a broken turntable.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="flex flex-wrap items-center mt-32">
            <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
              <div
                class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white"
              >
                <i class="fas fa-user-friends text-xl"></i>
              </div>
              <h3 class="text-3xl mb-2 font-semibold leading-normal">
                Working with us is a pleasure
              </h3>
              <p
                class="text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-600"
              >
               Home Service Company is changing the game when it comes to finding reliable and skilled professionals for home services. 
               With our innovative platform, users can easily connect with professionals who are experienced and proficient in their respective fields. 
               </p>
              <p
                class="text-lg font-light leading-relaxed mt-0 mb-4 text-blueGray-600"
              >
                This means that users no longer have to spend hours researching and vetting service providers on their own. 
               Instead, they can simply input their needs and preferences into our platform and let our algorithm do the rest. 
               Join Home Service Company today and experience the ease and convenience of finding skilled professionals for your home services.
              </p>
              <a href="#" class="font-bold text-blueGray-700 mt-8"
                >Book a professional now.</a
              >
            </div>
            <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-500"
              >
                <img
                  alt="..."
                  src="assets/img/service.jpg"
                  class="w-full align-middle rounded-t-lg"
                />
                <blockquote class="relative p-8 mb-4">
                  <svg
                    preserveAspectRatio="none"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 583 95"
                    class="absolute left-0 w-full block h-95-px -top-94-px"
                  >
                    <polygon
                      points="-30,95 583,95 583,65"
                      class="text-pink-500 fill-current"
                    ></polygon>
                  </svg>
                  <h4 class="text-xl font-bold text-white">
                    Anti Discrimination Policy
                  </h4>
                  <p class="text-md font-light mt-2 text-white">
                    Treating a community equally with respect and without judgement or bias is an essential aspect of any home service company's values. A company that values diversity and inclusivity understands that every customer, regardless of their background or identity, deserves to be treated with respect, professionalism, and fairness.
                  </p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="relative py-20">
        <div
          class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20 h-20"
          style="transform: translateZ(0px)"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
            <polygon
              class="text-white fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
        <div class="container mx-auto px-4">
          <div class="items-center flex flex-wrap">
            <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
              <img
                alt="..."
                class="max-w-full rounded-lg shadow-lg"
                src="https://images.unsplash.com/flagged/photo-1572262107271-baad9a8c8709?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=547&q=80"
              />
            </div>
            <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
              <div class="md:pr-12">
                <div
                  class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300"
                >
                  <i class="fas fa-rocket text-xl"></i>
                </div>
                <h3 class="text-3xl font-semibold">Earn yourself and be your own boss</h3>
                <p class="mt-4 text-lg leading-relaxed text-blueGray-500">
                  Now we are hiring appliance repair professional in the Bengaluru, KA IN. Earn Min Rs. 250/- an hour with flexible hours and a stable income paid weekly. Here's why you should Home Service Company!

                </p>
                <ul class="list-none mt-6">
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="fas fa-fingerprint"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-blueGray-500">
                          Amazing work, amazing earnings.
                        </h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="fab fa-html5"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-blueGray-500">Be your own boss</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="far fa-paper-plane"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-blueGray-500">Best support in the industry</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-6 ">
                    <div class="flex items-center ">
                      
                      <button
                        class="bg-pink-200 text-blueGray-700 active:bg-blueGray-50 text-s font-bold px-4 py-4 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150"
                        type="button"
                      >
                        <i class="fas fa-vote-yea"></i> Register as a Professional
                      </button>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pt-20 pb-48">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center text-center mb-24">
            <div class="w-full lg:w-8/12 px-4">
              <h2 class="text-4xl font-semibold">Here are our heroes</h2>
              <p class="text-lg leading-relaxed m-4 text-blueGray-500">
               At Home Service Company, we understand that our success is deeply intertwined with the success of our partners. That's why we have always prioritized a structured approach towards partner development and well-being, centered around 4 key pillars: improved earnings, safety net, training, and wealth creation.
              </p>
            </div>
          </div>
          <div class="flex flex-wrap">
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
              <div class="px-6">
                <img
                  alt="..."
                  src="assets/img/team-1-800x800.jpg"
                  class="shadow-lg rounded-full mx-auto max-w-120-px"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Santhosh</h5>
                  <p
                    class="mt-1 text-sm text-blueGray-400 uppercase font-semibold"
                  >
                    MD & Co-Founder, Home Service Company
                  </p>
                  <div class="mt-6">
                    <button
                      class="bg-lightBlue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-twitter"></i></button
                    ><button
                      class="bg-lightBlue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-facebook-f"></i></button
                    ><button
                      class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-dribbble"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
              <div class="px-6">
                <img
                  alt="..."
                  src="assets/img/team-1-800x800.jpg"
                  class="shadow-lg rounded-full mx-auto max-w-120-px"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Charan</h5>
                  <p
                    class="mt-1 text-sm text-blueGray-400 uppercase font-semibold"
                  >
                   Co-founder & Marketing Specialist
                  </p>
                  <div class="mt-6">
                    <button
                      class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-google"></i></button
                    ><button
                      class="bg-lightBlue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-facebook-f"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
              <div class="px-6">
                <img
                  alt="..."
                  src="assets/img/team-1-800x800.jpg"
                  class="shadow-lg rounded-full mx-auto max-w-120-px"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Madhu</h5>
                  <p
                    class="mt-1 text-sm text-blueGray-400 uppercase font-semibold"
                  >
                    Senior Technical Head
                  </p>
                  <div class="mt-6">
                    <button
                      class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-google"></i></button
                    ><button
                      class="bg-lightBlue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-twitter"></i></button
                    ><button
                      class="bg-blueGray-700 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-instagram"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
              <div class="px-6">
                <img
                  alt="..."
                  src="assets/img/team-1-800x800.jpg"
                  class="shadow-lg rounded-full mx-auto max-w-120-px"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Jayaram</h5>
                  <p
                    class="mt-1 text-sm text-blueGray-400 uppercase font-semibold"
                  >
                    Technical Head
                  </p>
                  <div class="mt-6">
                    <button
                      class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-dribbble"></i></button
                    ><button
                      class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-google"></i></button
                    ><button
                      class="bg-lightBlue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-twitter"></i></button
                    ><button
                      class="bg-blueGray-700 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-instagram"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pb-20 relative block bg-blueGray-800">
        <div
          class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20 h-20"
          style="transform: translateZ(0px)"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
            <polygon
              class="text-blueGray-800 fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
        <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
          <div class="flex flex-wrap text-center justify-center">
            <div class="w-full lg:w-8/12 px-4">
              <h2 class="text-4xl font-semibold text-white">How Home Service Company works</h2>
              <p class="text-lg leading-relaxed mt-4 mb-4 text-blueGray-400">
                Our platform connects you with reliable and professional service providers in your area, so you can get the services you need, when you need them. No more waiting around for appointments or dealing with unreliable service providers. With us, you'll have access to home services on demand, making your life easier and more convenient than ever before.
              </p>
            </div>
          </div>
          <div class="flex flex-wrap mt-12 justify-center">
            <div class="w-full lg:w-3/12 px-4 text-center">
              <div
                class="text-blueGray-800 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
              >
                <i class="fas fa-medal text-xl"></i>
              </div>
              <h6 class="text-xl mt-5 font-semibold text-white">
                When & where you want to work
              </h6>
              <p class="mt-2 mb-4 text-blueGray-400">
                With Our's user-friendly app, it's easier than ever to tell us when and where you want to work. We'll line up jobs for you and you never have to worry about scheduling.
              </p>
            </div>
            <div class="w-full lg:w-3/12 px-4 text-center">
              <div
                class="text-blueGray-800 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
              >
                <i class="fas fa-poll text-xl"></i>
              </div>
              <h5 class="text-xl mt-5 font-semibold text-white">
              We believe that outstanding service is the key to delighting our customers.
              </h5>
              <p class="mt-2 mb-4 text-blueGray-400">
                 That's why we go above and beyond to ensure that every customer receives exceptional service from start to finish.Magic your work in a 1:1 setting with your clients.
              </p>
            </div>
            <div class="w-full lg:w-3/12 px-4 text-center">
              <div
                class="text-blueGray-800 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
              >
                <i class="fas fa-lightbulb text-xl"></i>
              </div>
              <h5 class="text-xl mt-5 font-semibold text-white">Join our platform today and start earning a steady income</h5>
              <p class="mt-2 mb-4 text-blueGray-400">
                With the peace of mind that comes with our guaranteed minimum leads and weekly payouts. We ensure your peace of mind with automated weekly payouts.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="relative block py-24 lg:pt-0 bg-blueGray-800">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
            <div class="w-full lg:w-6/12 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200"
              >
                <div class="flex-auto p-5 lg:p-10">
                  <h4 class="text-2xl font-semibold">Book a professional now.?</h4>
                  <p class="leading-relaxed mt-1 mb-4 text-blueGray-500">
                    Complete this form and we will get back to you in 24 hours.
                  </p>
                  <div class="relative w-full mb-3 mt-8">
                    <label
                      class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                      for="full-name"
                      >Full Name</label
                    ><input
                      type="text"
                      class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      placeholder="Full Name"
                    />
                  </div>
                  <div class="relative w-full mb-3">
                    <label
                      class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                      for="mobile"
                      >Email</label
                    ><input
                      type="number"
                      class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      placeholder="Mobile Number"
                    />
                  </div>
                  <div class="relative w-full mb-3">
                    <label for="Services" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a service.</label>
                    <select id="service" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option selected>Choose a service</option>
                      <option value="WASHING-MACHINE">Washing Machine</option>
                      <option value="REFRIGERATOR">Refrigerator</option>
                      <option value="MICROWAVE">Microwave</option>
                      <option value="OTHER">Other</option>
                    </select>
                  </div>
                  <div class="relative w-full mb-3">
                    <label
                      class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                      for="message"
                      >Message</label
                    ><textarea
                      rows="4"
                      cols="80"
                      class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                      placeholder="Type a message..."
                    ></textarea>
                  </div>
                  <div class="text-center mt-6">
                    <button
                      class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                      type="button"
                    >
                      Book Now
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection