<footer class="mt-32 w-full bg-main xl:px-56 md:px-24 xs:px-16 px-10 xl:py-32 py-20">
  <div class="flex xs:flex-row flex-col w-full xs:items-start items-center xs:space-y-0 space-y-7">
    <div class="xs:w-2/6 lg:space-y-6 space-y-3 flex flex-col xs:items-start items-center">
      <h1 class="lg:text-4xl text-2xl text-white leading-relaxed xs:text-left text-center">
        L'ile Croix International Hospitality
      </h1>
      <p class="lg:text-base text-[0.7rem] xs:text-left text-center text-white">
        ©2025 All Rights Reserved. Published by www.eda.co.id
      </p>
      <div class="flex items-center space-x-2">
        <img src="{{ asset("/assets/icons/linkedin.svg") }}" alt="" class="lg:h-10 h-6 w-auto" />
        <img src="{{ asset("/assets/icons/email.svg") }}" alt="" class="lg:h-10 h-6 w-auto" />
        <img src="{{ asset("/assets/icons/instagram.svg") }}" alt="" class="lg:h-10 h-6 w-auto" />
      </div>
    </div>
    <div class="flex xs:w-4/6 justify-end text-white">
      <div class="grid xs:grid-cols-3 grid-cols-1 lg:gap-x-14 xs:space-y-0 space-y-7">
        <div class="flex justify-center">
          <ul class="xs:text-left text-center space-y-3 lg:text-base text-[0.8rem]">
            <li class="font-semibold sm:text-left"><a href="{{ url("") }}">Links</a></li>
            <li class=""><a href="{{ url("") }}">Home</a></li>
            <li class=""><a href="{{ url("profile") }}">About Us</a></li>
            <li class=""><a href="{{ url("service") }}">Our Services</a></li>
            <li class=""><a href="{{ url("projects") }}">Our Projects</a></li>
            <li class=""><a href="{{ url("collaboration") }}">Collaboration</a></li>
          </ul>
        </div>
        <div class="flex justify-center">
          <ul class="xs:text-left text-center space-y-3 lg:text-base text-[0.8rem]">
            <li class="font-semibold"><a href="{{ url("") }}">Address</a></li>
            <li class="lg:max-w-52 max-w-40">
              <a href="{{ url("") }}">4305 Ammons Street Wheat Ridge, CO 83003</a>
            </li>
          </ul>
        </div>
        <div class="flex justify-center">
          <ul class="xs:text-left text-center space-y-3 lg:text-base text-[0.8rem]">
            <li class="font-semibold"><a href="{{ url("") }}">Contact Us</a></li>
            <li class="max-w-52">
              <a href="{{ url("") }}"
                >For further information, please contact us via the
                following</a
              >
            </li>
            <li>
              <div class="flex items-center space-x-2 xs:justify-start justify-center">
                <img
                  src="{{ asset("/assets/icons/phone.svg") }}"
                  alt=""
                  class="h-6 w-auto"
                />
                <p class="text-[0.8rem]">+1(515)240-3086</p>
              </div>
            </li>
            <li>
              <div class="flex items-center space-x-2 xs:justify-start justify-center">
                <img
                  src="{{ asset("/assets/icons/whatsapp.svg") }}"
                  alt=""
                  class="h-6 w-auto"
                />
                <p class="text-[0.8rem]">+1(515)240-3086</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>