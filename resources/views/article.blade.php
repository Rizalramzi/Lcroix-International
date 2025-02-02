<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Article | Lcroix International</title>
    <link rel="stylesheet" href="{{ asset("/css/style.css") }}" />
    <link rel="stylesheet" href="{{ asset("/css/font.css") }}" />
    <script src="{{ asset("/js/navbar.js") }}"></script>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar />
    <section id="article" class="relative text-white">
        <div class="flex flex-col items-center justify-center h-full space-y-2">
            <h1 class="lg:text-[3rem] md:text-[2rem] text-[1.5rem]">Article</h1>
            <div class="flex items-center space-x-2">
                <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="w-6 h-auto fill-white">
                  <path d="M31.6667 5C32.5507 5 33.3986 5.35119 34.0237 5.97631C34.6488 6.60143 35 7.44928 35 8.33333V31.6667C35 32.5507 34.6488 33.3986 34.0237 34.0237C33.3986 34.6488 32.5507 35 31.6667 35H8.33333C7.44928 35 6.60143 34.6488 5.97631 34.0237C5.35119 33.3986 5 32.5507 5 31.6667V8.33333C5 7.44928 5.35119 6.60143 5.97631 5.97631C6.60143 5.35119 7.44928 5 8.33333 5H31.6667ZM30.8333 30.8333V22C30.8333 20.559 30.2609 19.177 29.2419 18.1581C28.223 17.1391 26.841 16.5667 25.4 16.5667C23.9833 16.5667 22.3333 17.4333 21.5333 18.7333V16.8833H16.8833V30.8333H21.5333V22.6167C21.5333 21.3333 22.5667 20.2833 23.85 20.2833C24.4688 20.2833 25.0623 20.5292 25.4999 20.9668C25.9375 21.4043 26.1833 21.9978 26.1833 22.6167V30.8333H30.8333ZM11.4667 14.2667C12.2093 14.2667 12.9215 13.9717 13.4466 13.4466C13.9717 12.9215 14.2667 12.2093 14.2667 11.4667C14.2667 9.91667 13.0167 8.65 11.4667 8.65C10.7196 8.65 10.0032 8.94675 9.47498 9.47498C8.94675 10.0032 8.65 10.7196 8.65 11.4667C8.65 13.0167 9.91667 14.2667 11.4667 14.2667ZM13.7833 30.8333V16.8833H9.16667V30.8333H13.7833Z"/>
                  </svg>
      
                  <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="w-6 h-auto fill-white">
                    <path d="M33.3333 6.66602H6.66668C4.83334 6.66602 3.35001 8.16602 3.35001 9.99935L3.33334 29.9993C3.33334 31.8327 4.83334 33.3327 6.66668 33.3327H33.3333C35.1667 33.3327 36.6667 31.8327 36.6667 29.9993V9.99935C36.6667 8.16602 35.1667 6.66602 33.3333 6.66602ZM33.3333 13.3327L20 21.666L6.66668 13.3327V9.99935L20 18.3327L33.3333 9.99935V13.3327Z" />
                    </svg>
                    
                <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="w-6 h-auto fill-white">
                  <path d="M21.7133 3.33398C23.5883 3.33898 24.54 3.34898 25.3617 3.37232L25.685 3.38398C26.0583 3.39732 26.4267 3.41398 26.8717 3.43398C28.645 3.51732 29.855 3.79732 30.9167 4.20898C32.0167 4.63232 32.9433 5.20565 33.87 6.13065C34.7178 6.96354 35.3736 7.97144 35.7917 9.08398C36.2033 10.1457 36.4833 11.3556 36.5667 13.1307C36.5867 13.574 36.6033 13.9423 36.6167 14.3173L36.6267 14.6407C36.6517 15.4607 36.6617 16.4123 36.665 18.2873L36.6667 19.5307V21.714C36.6707 22.9297 36.6579 24.1453 36.6283 25.3606L36.6183 25.684C36.605 26.059 36.5883 26.4273 36.5683 26.8706C36.485 28.6457 36.2017 29.854 35.7917 30.9173C35.3736 32.0299 34.7178 33.0378 33.87 33.8707C33.0371 34.7185 32.0292 35.3743 30.9167 35.7923C29.855 36.204 28.645 36.484 26.8717 36.5673L25.685 36.6173L25.3617 36.6273C24.54 36.6507 23.5883 36.6623 21.7133 36.6656L20.47 36.6673H18.2883C17.0721 36.6716 15.8559 36.6588 14.64 36.629L14.3167 36.619C13.921 36.604 13.5255 36.5868 13.13 36.5673C11.3567 36.484 10.1467 36.204 9.08333 35.7923C7.97138 35.3741 6.96407 34.7183 6.13166 33.8707C5.28324 33.0379 4.62684 32.03 4.20833 30.9173C3.79666 29.8556 3.51666 28.6457 3.43333 26.8706L3.38333 25.684L3.375 25.3606C3.34427 24.1453 3.33038 22.9297 3.33333 21.714V18.2873C3.32872 17.0717 3.34094 15.856 3.37 14.6407L3.38166 14.3173C3.395 13.9423 3.41166 13.574 3.43166 13.1307C3.515 11.3556 3.795 10.1473 4.20666 9.08398C4.62615 7.97098 5.2837 6.96304 6.13333 6.13065C6.96525 5.28323 7.97198 4.62744 9.08333 4.20898C10.1467 3.79732 11.355 3.51732 13.13 3.43398C13.5733 3.41398 13.9433 3.39732 14.3167 3.38398L14.64 3.37398C15.8553 3.34437 17.071 3.33159 18.2867 3.33565L21.7133 3.33398ZM20 11.6673C17.7899 11.6673 15.6702 12.5453 14.1074 14.1081C12.5446 15.6709 11.6667 17.7905 11.6667 20.0007C11.6667 22.2108 12.5446 24.3304 14.1074 25.8932C15.6702 27.456 17.7899 28.334 20 28.334C22.2101 28.334 24.3297 27.456 25.8926 25.8932C27.4554 24.3304 28.3333 22.2108 28.3333 20.0007C28.3333 17.7905 27.4554 15.6709 25.8926 14.1081C24.3297 12.5453 22.2101 11.6673 20 11.6673ZM20 15.0007C20.6566 15.0005 21.3068 15.1298 21.9135 15.3809C22.5201 15.6321 23.0714 16.0003 23.5358 16.4645C24.0001 16.9287 24.3685 17.4799 24.6199 18.0865C24.8713 18.6931 25.0007 19.3432 25.0008 19.9998C25.0009 20.6564 24.8717 21.3066 24.6205 21.9133C24.3694 22.52 24.0012 23.0712 23.537 23.5356C23.0727 24 22.5216 24.3684 21.915 24.6197C21.3084 24.8711 20.6583 25.0005 20.0017 25.0007C18.6756 25.0007 17.4038 24.4739 16.4661 23.5362C15.5284 22.5985 15.0017 21.3267 15.0017 20.0007C15.0017 18.6746 15.5284 17.4028 16.4661 16.4651C17.4038 15.5274 18.6756 15.0007 20.0017 15.0007M28.7517 9.16732C28.1991 9.16732 27.6692 9.38681 27.2785 9.77751C26.8878 10.1682 26.6683 10.6981 26.6683 11.2507C26.6683 11.8032 26.8878 12.3331 27.2785 12.7238C27.6692 13.1145 28.1991 13.334 28.7517 13.334C29.3042 13.334 29.8341 13.1145 30.2248 12.7238C30.6155 12.3331 30.835 11.8032 30.835 11.2507C30.835 10.6981 30.6155 10.1682 30.2248 9.77751C29.8341 9.38681 29.3042 9.16732 28.7517 9.16732Z"/>
                  </svg>
                  
              </div>
        </div>
    </section>
    <main class="mt-24 flex w-full flex-col justify-center sm:px-24 px-10">
        <div class="container mx-auto max-w-[90rem]">
            <section>
                <div class="w-full flex flex-col sm:flex-row sm:gap-x-6 text-main sm:px-16">
                    <div class="sm:w-4/6 w-full space-y-6">
                        <h1 class="sm:text-3xl text-xl  max-w-[30rem] leading-normal">Crafting Exceptional Hotel Experiences Together</h1>
                        <div class="flex items-center space-x-3">
                            <img src="{{ asset("assets/profile-picture/default.png")}}" alt="" class="w-12 h-12">
                            <div class="text-dark">
                                <h6 class="text-sm font-semibold">Wojciech Szczesny</h6>
                                <p class="text-xs">November 13, 2023</p>
                            </div>
                        </div>
                        <div>
                            <img src="{{ asset("assets/post/post1.png")}}" alt="" class="w-full sm:h-96 h-52 object-cover">
                            <div class="text-dark text-xs mt-6 space-y-6">
                                <div class="space-y-2">
                                    <h6 class="text-md font-semibold">Crafting Exceptional Hotel Experiences Together</h6>
                                    <p>In the ever-evolving landscape of the hospitality industry, the creation of exceptional hotel experiences remains a paramount goal. As a collaborative endeavor between hoteliers, industry experts, and visionary leaders, the art of crafting these experiences goes beyond mere accommodation—it embodies a holistic approach to guest satisfaction, innovation, and sustainable practices.</p>
                                </div>
                                
                                <div class="space-y-2">
                                    <h6 class="text-md font-semibold">A Shared Vision: Partnership in Hospitality Excellence</h6>
                                    <p>Crafting exceptional hotel experiences necessitates a shared vision. Collaborations between hotel management entities, sustainability experts, and innovative minds forge the foundation for elevating guest satisfaction to new heights. At the heart of this synergy lies a commitment to excellence, where each contributor plays a pivotal role in sculpting unforgettable guest journeys.</p>
                                </div>

                                <div class="space-y-2">
                                    <h6 class="text-md font-semibold">Designing Uniqueness: The Essence of Guest-Centricity</h6>
                                    <p>Central to crafting exceptional experiences is a meticulous focus on guest-centric design. From architectural intricacies to personalized services, every element aims to resonate with the guest’s desires and preferences. The fusion of cutting-edge design concepts with a deep understanding of guest needs results in spaces that not only meet expectations but exceed them.</p>
                                </div>

                                <div class="space-y-2">
                                    <h6 class="text-md font-semibold">Innovations in Service: Redefining Hospitality Standards</h6>
                                    <p>In an era of constant innovation, hotels strive to redefine service standards. Technological advancements and personalized experiences merge to create a seamless and memorable stay. From digital concierge services to sustainable practices, hotels are integrating innovations that cater to both modern convenience and environmental consciousness.</p>
                                </div>
                                
                                <div class="space-y-2">
                                    <h6 class="text-md font-semibold">Sustainability: Shaping Tomorrow’s Experiences Today</h6>
                                    <div class="space-y-4">
                                        <p>Crafting exceptional hotel experiences extends beyond luxurious amenities; it encompasses a commitment to sustainability. Forward-thinking practices—such as energy efficiency, waste reduction, and community engagement—form the cornerstone of responsible hospitality. Collaborative efforts between industry leaders and sustainable development experts drive the evolution towards eco-conscious experiences.</p>
                                        <p>
                                            In the pursuit of crafting exceptional hotel experiences, collaboration becomes the cornerstone. It’s the amalgamation of innovative ideas, sustainable practices, and a commitment to guest satisfaction that shapes the future of hospitality. Together, we embark on a journey to redefine and elevate the very essence of hotel experiences, setting new benchmarks for excellence in the industry.
                                        </p>
                                        <p>Crafting exceptional hotel experiences is not just a goal; it’s a commitment—an alliance between visionaries and pioneers working harmoniously towards hospitality’s future. Through collective efforts, we transform stays into stories, making each guest experience a masterpiece of its own.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6 flex items-center justify-between">
                                <a href="" class="text-sm font-medium"><< Previous Post</a>
                                <a href="" class="text-sm font-medium">Next Post >></a>
                            </div>
                            <div class="mt-12 grid md:grid-cols-3 grid-cols-1 xs:grid-cols-2 gap-3">
                                <div class="w-full min-h-80 p-4 bg-gray flex flex-col items-center  space-y-4">
                                    <img src="{{ asset("assets/post/post2.png")}}" alt="" class="w-full h-32 object-cover">
                                    <h6 class="font-medium text-sm text-center min-h-16">Strategic Hospitality Solutions for Business Growth</h6>
                                    <button class="border-2 border-dark px-12 py-3 text-sm font-medium text-dark">
                                        Read Here
                                    </button>
                                </div>
                                <div class="w-full min-h-80 p-4 bg-gray flex flex-col items-center  space-y-4">
                                    <img src="{{ asset("assets/post/post2.png")}}" alt="" class="w-full h-32 object-cover">
                                    <h6 class="font-medium text-sm text-center min-h-16">Connecting People Through Sustainable Hospitality</h6>
                                    <button class="border-2 border-dark px-12 py-3 text-sm font-medium text-dark">
                                        Read Here
                                    </button>
                                </div>
                                <div class="w-full min-h-80 p-4 bg-gray flex flex-col items-center  space-y-4">
                                    <img src="{{ asset("assets/post/post2.png")}}" alt="" class="w-full h-32 object-cover">
                                    <h6 class="font-medium text-sm text-center min-h-16">Transforming Ideas into Exceptional Hotels</h6>
                                    <button class="border-2 border-dark px-12 py-3 text-sm font-medium text-dark">
                                        Read Here
                                    </button>
                                </div>
                            </div>
                            <div class="mt-12">
                                <div class="space-y-2">
                                    <h1 class="text-main text-xl">Leave a Reply</h1>
                                    <p class="text-xs text-dark">Your email address will not be published. Required fields are marked *</p>
                                </div>
                                <form action="" class="grid sm:grid-cols-2 grid-cols-1 gap-8 mt-6">
                                    <div>
                                        <input type="text" class="w-full h-14 border-b-2 border-dark border-opacity-50 focus:outline-none text-sm placeholder:text-sm" placeholder="Name">
                                    </div>
                                    <div>
                                        <input type="email" class="w-full h-14 border-b-2 border-dark border-opacity-50 focus:outline-none text-sm placeholder:text-sm" placeholder="Email">
                                    </div>
                                    <div class="sm:col-span-2">
                                        <textarea type="text" class="w-full h-32 border-b-2 border-dark border-opacity-50 focus:outline-none text-sm placeholder:text-sm" placeholder="Message"></textarea>
                                    </div>
                                    <div class="flex items-center space-x-3 sm:col-span-2">
                                        <input type="checkbox" class="sm:w-6 sm:h-6 w-10 h-10">
                                        <p class="text-xs max-w-96">Save my name, email, and website in this browser for the next time I comment.</p>
                                    </div>
                                    <div>
                                        <button class="bg-main px-10 py-4 lg:text-base text-[0.8rem] text-white">
                                            Send Message
                                          </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="w-2/6 hidden sm:inline-block">
                        <div class="flex">
                            <input type="text" name="" id="" class="bg-gray w-10/12 h-12 p-3 text-xs focus:outline-none text-dark placeholder:text-xs" placeholder="Find Articles">
                            <div class="w-2/12 h-12 bg-main flex items-center justify-center">
                                <img src="{{ asset("assets/icons/search.svg")}}" alt="" class="w-4 h-auto">
                            </div>
                        </div>
                        <div class="mt-12">
                            <h1 class="text-xl text-main">Recent Post</h1>
                            <div class="flex flex-col w-full mt-6 space-y-4">
                                <div class="p-4 bg-gray flex items-center text-dark space-x-4">
                                    <img src="{{ asset("assets/post/post1.png")}}" alt="" class="w-24 h-16 object-cover">
                                    <div class="text-xs space-y-2">
                                        <h6 class="font-medium">Crafting Exceptional Hotel Experiences Together</h6>
                                        <p>November 13, 2023</p>
                                    </div>
                                </div>
                                <div class="p-4 bg-gray flex items-center text-dark space-x-4">
                                    <img src="{{ asset("assets/post/post2.png")}}" alt="" class="w-24 h-16 object-cover">
                                    <div class="text-xs space-y-2">
                                        <h6 class="font-medium">Strategic Hospitality Solutions for Business Growth</h6>
                                        <p>November 13, 2023</p>
                                    </div>
                                </div>
                                <div class="p-4 bg-gray flex items-center text-dark space-x-4">
                                    <img src="{{ asset("assets/post/post3.png")}}" alt="" class="w-24 h-16 object-cover">
                                    <div class="text-xs space-y-2">
                                        <h6 class="font-medium">Connecting People Through Sustainable Hospitality</h6>
                                        <p>November 13, 2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <x-footer />
</body>
</html>