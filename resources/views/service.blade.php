<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link rel="stylesheet" href="{{ asset("/css/style.css") }}" />
    <link rel="stylesheet" href="{{ asset("/css/font.css") }}" />
    @vite('resources/css/app.css')
    <script src="{{ asset("/js/navbar.js") }}"></script>
</head>
<body class="relative w-full">
  <x-navbar />
    <section id="service" class="relative ">
        <div class="flex flex-col items-center justify-center h-full space-y-2">
            <h1 class="lg:text-[3rem] md:text-[2rem] text-[1.5rem] text-white">Our Services</h1>
            <p class="lg:text-md md:text-xs text-[0.8rem] text-center text-white">Elevate your hospitality venture with us</p>
        </div>
    </section>
    <main class="mt-32 flex w-full flex-col justify-center">
        <section id="offer" class="relative mt-60">
            <div class="xl:px-56 sm:px-24 xs:px-16 px-9 w-full py-24">
              <span class="bg-main sm:w-3/5 w-4/5 h-full absolute top-0 left-0 z-[-1]"></span>
              <div>
                <div class="flex items-center space-x-6">
                    <h1 class="lg:text-4xl text-2xl text-white">Your Business Starts Here</h1>
                    <div class="h-[0.1rem] w-20 bg-white"></div>
                  </div>
                  <p class="mt-2 w-3/5 lg:text-lg md:text-sm text-[0.8rem] text-white">Embark on your hospitality journey with confidence. Let us be your strategic partner from concept to successful operation.</p>
              </div>
              <div class="mt-8 flex gap-1 text-dark overflow-scroll rm-scroll">
                <div class="flex items-center justify-center min-w-[232px]">
                  <div
                    class="flex h-full flex-grow flex-col items-center bg-white lg:p-10 p-6"
                  >
                    <div class="space-y-3">
                      <img
                        src="{{ asset("/assets/offers/offer1.png") }}"
                        alt=""
                        class="h-auto w-full"
                      />
                      <p class="lg:text-lg text-base font-medium">© Feasibility Study</p>
                      <p class="lg:text-base text-[0.8rem]">
                        Conducting a thorough analysis to assess the viability and
                        potential success of your hospitality venture.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="flex items-center justify-center min-w-[232px]">
                  <div
                    class="flex h-full flex-grow flex-col items-center bg-white lg:p-10 p-6"
                  >
                    <div class="space-y-3">
                      <img
                        src="{{ asset("/assets/offers/offer2.png") }}"
                        alt=""
                        class="h-auto w-full"
                      />
                      <p class="lg:text-lg text-base font-medium">
                        © Hotel Planning & Design
                      </p>
                      <p class="lg:text-base text-[0.8rem]">
                        Crafting a unique and tailored plan for your hotel,
                        encompassing design concepts that align with your brand
                        identity.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="flex items-center justify-center min-w-[232px]">
                  <div
                    class="flex h-full flex-grow flex-col items-center bg-white lg:p-10 p-6"
                  >
                    <div class="space-y-3">
                      <img
                        src="{{ asset("/assets/offers/offer3.png") }}"
                        alt=""
                        class="h-auto w-full"
                      />
                      <p class="lg:text-lg text-base font-medium">© Pre-Opening Services</p>
                      <p class="lg:text-base text-[0.8rem]">
                        We assist in coordinating pre-opening activities, ensuring
                        a smooth transition from planning to operational
                        readiness.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="flex items-center justify-center min-w-[232px]">
                  <div
                    class="flex h-full flex-grow flex-col items-center bg-white lg:p-10 p-6"
                  >
                    <div class="space-y-3">
                      <img
                        src="{{ asset("/assets/offers/offer4.png") }}"
                        alt=""
                        class="h-auto w-full"
                      />
                      <p class="lg:text-lg text-base font-medium">© Hotel Management</p>
                      <p class="lg:text-base text-[0.8rem]">
                        Comprehensive management services, leveraging industry
                        expertise to optimize performance and guest satisfaction.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            {{-- <div
              class="absolute top-[-3rem] z-[-1] h-[30rem] w-[50rem] bg-main"
            ></div> --}}
            <img
              src="{{ asset("/assets/offers/bg-offer.png") }}"
              alt=""
              class="absolute right-0 top-[-3rem] z-[-2] h-full w-3/4 object-cover"
            />
          </section>
    </main>
    <x-footer />
</body>
</html>