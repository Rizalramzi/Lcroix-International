<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile | Lcroix International</title>
    <link rel="stylesheet" href="{{ asset("/css/style.css") }}" />
    <link rel="stylesheet" href="{{ asset("/css/font.css") }}" />
    <script src="{{ asset("/js/navbar.js") }}"></script>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar />
    <section id="profile" class="relative text-white">
        <div class="flex flex-col items-center justify-center h-full space-y-2">
            <h1 class="lg:text-[3rem] md:text-[2rem] text-[1.5rem]">Profile</h1>
            <p class="lg:text-md md:text-xs text-[0.8rem] text-center">Explore Our Company Profile</p>
        </div>
    </section>
    <main class="mt-32 flex w-full flex-col justify-center">
       <!-- About -->
       <section id="about">
        <div class="flex sm:flex-row flex-col sm:items-center justify-between sm:gap-y-0 gap-y-10">
          <div class="xs:w-2/3 w-full xl:ps-56 sm:ps-24 xs:ps-16 ps-9 ">
            <div class="flex items-center space-x-6">
              <h1 class="lg:text-4xl text-2xl text-main">Who We Are ?</h1>
              <div class="h-[0.1rem] w-20 bg-main"></div>
            </div>
            <p class="mt-4 max-w-[53rem] lg:text-base text-[0.8rem] text-dark">
              Welcome to the essence of L’ile Croix International Hospitality.
              Unveil our commitment, expertise, and passion for delivering
              unparalleled hospitality experiences.
            </p>
          </div>
          <div class="flex sm:w-1/3 w-full flex-col items-end justify-center">
            <div class="h-16 w-64 bg-main"></div>
            <div class="h-16 w-48 bg-gray"></div>
          </div>
        </div>
        <div class="relative mt-32 flex items-center justify-between sm:px-48 xs:px-16 px-10">
          <div class="h-[0.2rem] w-20 bg-main sm:static absolute top-12"></div>
          <div class="flex flex-col items-center justify-center space-y-6">
            <img src="{{ asset("/assets/logo-second.png") }}" alt="" class="h-auto lg:w-24 w-16" />
            <h1
              class="max-w-[80%] text-center lg:text-4xl text-2xl tracking-wider text-main"
            >
              L'ile Croix International Hospitality
            </h1>
            <p class="lg:text-base text-[0.8rem] text-dark text-center">
              A Hotel Operation and Management Service Company
            </p>
            <p class="lg:max-w-[50rem] max-w-[30rem] text-center lg:text-base text-[0.8rem] text-dark">
              L’ILE CROIX INTERNATIONAL HOSPITALITY (LCH) is a brand of Hotel
              Operation and Management Service (HOMS) based in the U.S.A.
              under leaderships with extensive experiences in hospitality
              business, education and training, and in technical areas
              involving sustainability, community development and
              international engagements.
            </p>
            <button class="bg-main px-10 py-4 lg:text-base text-[0.8rem] text-white">
              View Our Offer
            </button>
          </div>
          <div class="h-[0.2rem] w-20 bg-main sm:static absolute top-12 right-10"></div>
        </div>
      </section>
      <!-- End About -->
    </main>
    <x-footer />
</body>
</html>