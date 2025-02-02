<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sustainability | Lcroix International</title>
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/font.css" />
    <script src="/js/navbar.js"></script>
    @vite('resources/css/app.css')
</head>
<body class="relative w-full">
  <x-navbar />
    <section id="sustainability" class="relative">
        <div class="flex flex-col items-center justify-center h-full space-y-2">
            <h1 class="lg:text-[3rem] md:text-[2rem] text-[1.5rem] text-white">Sustainability</h1>
            <p class="lg:text-md md:text-xs text-[0.8rem] text-center text-white">Commitment to Sustainability and Global Development</p>
        </div>
    </section>
    <main class="mt-32">
        <section id="" class="mt-32">
            <div class="relative mt-32 flex sm:flex-row flex-col xl:ps-56 md:ps-24 py-[26px] gap-x-3 items-center sm:px-0 xs:px-16 px-10">
              <div class="sm:w-4/12 w-full sm:h-[25rem] flex-grow space-y-3 pt-14">
                <h1 class="lg:text-4xl md:text-2xl leading-relaxed tracking-wider text-white">
                  Sustainability
                </h1>
                <h1 class="lg:text-2xl text-xl leading-relaxed tracking-wider text-white">
                  & Social Responsibilities
                </h1>
                <p class="lg:text-base text-[0.8rem] text-white">
                  © L’ile Croix International Hospitality
                </p>
              </div>
              <div
                class="absolute left-0 z-[-1] sm:h-full sm:w-1/2 h-1/2 w-full bg-main"
              ></div>
              <div class="sm:w-8/12 w-full sm:mt-0 mt-10">
                <div
                  class="flex items-center xs:flex-row flex-col w-full xs:space-x-6 xs:space-y-0 space-y-10 xs:bg-gray xs:p-6"
                >
                  <div class="xs:px-0 px-6 flex-grow">
                      <img
                      src="{{ asset("/assets/sustainability/sustainability1.png") }}"
                      alt=""
                      class="h-full w-full object-cover"
                  />
                  </div>
                  <div class="sm:space-y-6 space-y-10 flex flex-col xs:items-start items-center">
                    <p class="lg:text-base text-[0.8rem] text-dark xl:pe-56 md:pe-24 sm:pe-10 xs:text-left text-center">
                      With a motto “Providing Sustainable Hospitality to Connect
                      People”, as a hospitality provider we aims that the hotels
                      we serve will be good stewards to earth environment by
                      minimizing their carbon footprints and waste through
                      circularity a range of energy, water, and waste measures.
                    </p>
                    <button
                      class="border border-main px-8 py-3 lg:text-base text-[0.8rem] text-main"
                    >
                      Click Here
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="mt-32 xl:px-56 md:px-24 xs:px-16 px-10 lg:py-12 py-6">
            <div class="text-main space-y-3 flex flex-col sm:items-start items-center">
                <h1 class="lg:text-2xl text-md">Please Conserve</h1>
                <h1 class="lg:text-4xl text-2xl sm:text-left text-center">Turn Off Lights and AC When You Leave</h1>
                <div class="flex space-x-2">
                    <img src="{{ asset('assets/logos/save-energy.png') }}" alt="" class="w-auto h-10">
                    <img src="{{ asset('assets/logos/save-water.png') }}" alt="" class="w-auto h-10">
                </div>
            </div>
            <div class="space-y-24 mt-12">
                <div class="relative w-full flex justify-end">
                    <div class="relative sm:w-[68%] w-full">
                        <img src="{{ asset('assets/sustainability/mom-with-kids.png') }}" alt="" class="w-full h-auto">
                        <div class="sm:absolute lg:bottom-0 bottom-[-10%] left-0 lg:ml-[-35%] sm:ml-[-48%] bg-gray lg:w-[30rem] sm:w-[27rem] w-full h-40 flex items-center justify-center p-10 text-dark sm:mt-0 mt-5">
                            <p class="lg:text-lg text-sm">We also believe that each hotel we serve will strive to become a contributing member of the surrounding community where the hotel is located.</p>
                        </div>
                    </div>
                </div>
                <div class="relative w-full flex sm:flex-row flex-col justify-start">
                    <div class="sm:w-[68%]">
                        <img src="{{ asset('assets/sustainability/greenhouse.png') }}" alt="" class="z-0 w-full h-full">
                    </div>
                    <div class="sm:w-[68%] sm:absolute bottom-[-25%] z-30 right-0 bg-gray p-10 text-dark sm:mt-0 mt-5">
                        <p class="lg:text-lg text-sm">To support these efforts, LCH is partnering with Seacosystems LLC who will provide technical expertise and facilitate programs for sustainability and community engagements.</p>
                        <p class="lg:text-lg text-sm mt-5">Seacosystems LLC is a global solutions provider focused on the renewable energy and sustainable development needs of developing communities, especially island and coastal communities. With their extensive expertise in developing and integrating technologies for sustainable water, energy, and food nexus, Seacosystems will be our valuable partner for making LCH a leading sustainable hospitality provider.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <x-footer />
</body>
</html>
