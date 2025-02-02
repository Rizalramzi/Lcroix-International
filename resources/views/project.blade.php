<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Project | Lcroix International</title>
    <link rel="stylesheet" href="{{ asset("/css/style.css") }}" />
    <link rel="stylesheet" href="{{ asset("/css/font.css") }}" />
    <script src="{{ asset("/js/navbar.js") }}"></script>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar />
    <section id="project" class="relative text-white">
        <div class="flex flex-col items-center justify-center h-full space-y-2">
            <h1 class="lg:text-[3rem] md:text-[2rem] text-[1.5rem]">Projects</h1>
            <p class="lg:text-md md:text-xs text-[0.8rem] text-center">Let’s Talk About Your Next Project</p>
        </div>
    </section>
    <main class="mt-32 flex w-full flex-col justify-center">
        <div class="container mx-auto max-w-[90rem]">
            <section class="sm:px-24 px-10">
                <div class="text-main flex flex-col items-center text-center space-y-4 ">
                    <h4 class="text-md tracking-wider">L'ile Croix Convention Hotel and Resort</h4>
                    <h1 class="sm:text-4xl text-2xl max-w-[35rem] tracking-wider leading-normal">Our Hospitality Project in St. Croix</h1>
                    <p class="text-xsm">The first Sustainable Green MICE Hotel & Resort in St. Croix</p>
                </div>
                <div class="grid sm:grid-cols-3 md:grid-cols-4 grid-cols-2 gap-3 sm:px-16 mt-16">
                    <div class="flex items-center justify-center">
                        <img src="{{ asset("/assets/projects/projects-1.png")}}" alt="" class="w-full h-full object-cover">
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ asset("/assets/projects/projects-2.png")}}" alt="" class="w-full h-full object-cover">
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ asset("/assets/projects/projects-3.png")}}" alt="" class="w-full h-full object-cover">
                    </div>
                    <div class="md:flex hidden items-center justify-center">
                        <div class="w-full h-full bg-main rounded-tr-3xl"></div>
                    </div>
                    <div class="md:flex hidden items-center justify-center">
                        <div class="w-full h-full bg-main rounded-bl-3xl"></div>
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ asset("/assets/projects/projects-4.png")}}" alt="" class="w-full h-full object-cover">
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ asset("/assets/projects/projects-5.png")}}" alt="" class="w-full h-full object-cover">
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ asset("/assets/projects/projects-6.png")}}" alt="" class="w-full h-full object-cover">
                    </div>
                </div>
            </section>
            <section class="mt-24 sm:px-24 px-10">
                <div class="space-y-6 sm:px-16">
                    <h1 class="text-main text-2xl ">Why a MICE Hotel ?</h1>
                    <img src="{{ asset("assets/logos/seacosystems.png")}}" alt="" class="w-80 h-auto">
                    <div class="text-xsm space-y-6 text-dark leading-relaxed">
                        <p>Visitors to St. Croix typically are tourists who come to the island for leisure. They come to enjoy the nature and typically stay hotels/villas for a few days without much interactions with the local people.</p>
                        <p>A MICE hotel will provide opportunities for visitors from business, government, universities to come to St. Croix for holding meetings, conferences, and exhibitions. These activities will give the hotel opportunities to have higher revenues, not only from guest rooms, but also from meeting rooms and food services.</p>
                        <div>
                            <p class="font-semibold">Characteristics of MICE hotel:</p>
                            <ul class="list-disc ps-6">
                                <li>Primary target for marketing are Corporate, Government, and other organizations, not only individuals.</li>
                                <li>Marketing will be done through Sales Calls to Corporate and Government.</li>
                                <li>Unlike conventional hotels, the occupancy levels will be high during workdays (M-F)</li>
                                <li>Significant contribution of revenue from Food and Beverage Services, not only from guest room revenues.</li>
                            </ul>
                        </div>
                        <p>
                            The presence of MICE hotels, potentially will transform St. Croix as a destination not only for leisure, but also for business, conferences, and meetings from non-traditional visitors.</p>
                    </div>
                </div>
            </section>

            <section class="mt-24">
                <div class="w-full flex flex-col-reverse md:flex-row relative items-center">
                    <div class="bg-main md:w-7/12 w-full h-[35rem] flex flex-col justify-center items-center md:items-start text-center md:text-start text-white md:ps-20">
                        <div class="space-y-6 max-w-[28rem] px-12">
                            <h1 class="tracking-wider md:text-3xl text-xl">L'ile Croix Green Convention Hotel & Resort</h1>
                            <div class="space-y-4 text-xs leading-relaxed">
                                <p>L’ile Croix Green Convention Hotel & Resort (LCGH) ) will be the  first and largest MICE Eco Hospitality Center built in Frederiksted region with  Crucian’s rich history and culture in mind. </p>
                                <p>Capacity: 150 rooms (and bungalows), 10 meeting rooms and a 5,000 sqft. ballroom</p>
                                <p>Hotel is designed and operated to reflect sustainability and circularity
                                    A place for convention, meeting, relaxing, and learning.</p>
                                <p>A place to learn the Crucian arts & culture</p>
                                <p>A place for learning and demonstrating technologies in integrating ocean, agriculture and renewable energy to support sustainable living.</p>
                            </div>
                        </div>
                    </div> 
                    <div class="flex items-center justify-center md:hidden p-6 bg-gray w-full">
                        <img src="{{ asset("assets/projects/conventionhotel.png")}}" alt="" class="w-96 h-96 object-cover">
                    </div> 
                    <div class="absolute hidden right-0 bg-gray md:flex items-center py-6 ps-6 w-[40rem] h-fit">
                        <img src="{{ asset("assets/projects/conventionhotel.png")}}" alt="" class="w-96 h-96">
                    </div>
                </div>
            </section>
            
            <section class="mt-24 sm:px-40 px-10">
                <div class="flex justify-center sm:flex-row flex-col sm:space-x-24 space-y-6 sm:space-y-0 items-center ">
                    <div class="bg-gray p-6 w-72 h-28 flex items-center justify-center">
                        <h1 class="text-md tracking-wider text-main text-center">L'ile Croix Green Convention Hotel & Resort</h1>
                    </div>
                    <div>
                        <img src="{{ asset("assets/icons/switch.svg")}}" alt="" class="ms-4 w-6 h-auto rotate-180">
                        <img src="{{ asset("assets/icons/switch.svg")}}" alt="" class="me-4 w-6 h-auto ">
                    </div>
                    <div class="bg-gray p-6 w-72 h-28 flex items-center justify-center">
                        <h1 class="text-md tracking-wider text-main text-center">St. Croix Sustainable Green Living Center</h1>
                    </div>
                </div>
                <p class="mt-12 text-xsm text-center">
                    L’ile Croix Convention Hotel and Resort will serve as a new anchor which facilitate the establishment of St. Croix Sustainable Green Living Center. The center will serve as catalyst for various programs to support the development of St. Croix community.
                </p>
            </section>

            <section class="mt-24 md:px-40 px-10">
                <div class="flex flex-col-reverse md:flex-row w-full ">
                    <div class="md:w-1/2 w-full mt-10 md:mt-0">
                        <img src="{{ asset("assets/projects/livingcenter.png")}}" alt="" class="md:w-[28rem] w-full h-56 object-cover">
                        <div class="flex items-center justify-center bg-gray p-6 md:hidden mt-10">
                            <ul class="text-xs leading-relaxed list-disc">
                                <li>Through partnerships with community organizations and USVI government, St. Croix Living Center will be established, as an extension of L’ile Croix Hospitality, which will provide spaces for St. Croix community to gather and meet.</li>
                                <li>St. Croix community organizations may use the spaces for community members to learn and display the history and culture of St. Croix from the beginning until now.</li>
                                <li>FLC will facilitate the establishments of educational and training programs for St. Croix youths in learning about STEAM (Science, Technologies, Engineering, Arts, and Mathematics). FLC will facilitate the training centers for future agricultural leaders.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full relative">
                        <div class="text-main space-y-4 mt-6 text-center md:text-start">
                            <h1 class="md:text-3xl text-xl tracking-wider">St. Croix Sustainable Green Living Center</h1>
                            <h1 class="md:text-xl text-sm tracking-wider">Celebrating the Heritage of the Twin City</h1>
                        </div>
                        <div class="bg-gray w-[35rem] h-[15rem] absolute left-[-5rem] bottom-[-8rem] md:flex items-center justify-center px-10 hidden">
                            <ul class="text-xs leading-relaxed list-disc">
                                <li>Through partnerships with community organizations and USVI government, St. Croix Living Center will be established, as an extension of L’ile Croix Hospitality, which will provide spaces for St. Croix community to gather and meet.</li>
                                <li>St. Croix community organizations may use the spaces for community members to learn and display the history and culture of St. Croix from the beginning until now.</li>
                                <li>FLC will facilitate the establishments of educational and training programs for St. Croix youths in learning about STEAM (Science, Technologies, Engineering, Arts, and Mathematics). FLC will facilitate the training centers for future agricultural leaders.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mt-48 md:px-40 px-10">
                <div class="flex flex-col md:flex-row w-full">
                    <div class="md:w-1/2 w-full relative">
                        <div class="text-main space-y-4 mt-6 text-center md:text-start">
                            <h1 class="md:text-3xl text-xl tracking-wider">St. Croix Sustainable Green Living Center</h1>
                            <h1 class="md:text-xl text-sm tracking-wider">Celebrating the Heritage of the Twin City</h1>
                        </div>
                        <div class="bg-gray w-[35rem] h-[15rem] absolute right-[-5rem] bottom-[-8rem] md:flex items-center justify-center px-10 hidden">
                            <ul class="text-xs leading-relaxed list-disc">
                                <li>Through partnerships with community organizations and USVI government, St. Croix Living Center will be established, as an extension of L’ile Croix Hospitality, which will provide spaces for St. Croix community to gather and meet.</li>
                                <li>St. Croix community organizations may use the spaces for community members to learn and display the history and culture of St. Croix from the beginning until now.</li>
                                <li>FLC will facilitate the establishments of educational and training programs for St. Croix youths in learning about STEAM (Science, Technologies, Engineering, Arts, and Mathematics). FLC will facilitate the training centers for future agricultural leaders.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full md:mt-0  mt-10">
                        <img src="{{ asset("assets/projects/greenlivingcenter.png")}}" alt="" class="md:w-[28rem] md:h-80 w-full h-56 object-cover">
                        <div class="flex items-center justify-center bg-gray p-6 md:hidden mt-10">
                            <ul class="text-xs leading-relaxed list-disc">
                                <li>Through partnerships with community organizations and USVI government, St. Croix Living Center will be established, as an extension of L’ile Croix Hospitality, which will provide spaces for St. Croix community to gather and meet.</li>
                                <li>St. Croix community organizations may use the spaces for community members to learn and display the history and culture of St. Croix from the beginning until now.</li>
                                <li>FLC will facilitate the establishments of educational and training programs for St. Croix youths in learning about STEAM (Science, Technologies, Engineering, Arts, and Mathematics). FLC will facilitate the training centers for future agricultural leaders.</li>
                            </ul>
                        </div>
                    </div>   
                </div>
            </section>

            <section class="mt-64 sm:px-40 px-10 bg-gray w-full py-12">
                <div class="text-center">
                    <h1 class="text-2xl tracking-wider">St. Croix Sustainable Green Living Center</h1>
                    <h1 class="text-md tracking-wider">Potential Program Partners</h1>
                </div>
                <div>
                    <ul class="text-xsm list-disc leading-relaxed mt-12">
                        <li>
                            <p class="">St. Croix Foundation <a href="https://www.stxfoundation.org/" target="_blank" class="font-semibold">https://www.stxfoundation.org/</a></p>
                        </li>
                        <li>
                            <p>CHANT – St. Croix Heritage Nature Tourism <a href="https://chantvi.org/" target="_blank" class="font-semibold">https://chantvi.org/</a></p>
                        </li>
                        <li>
                            <p>US Virgin Islands Hotel & Tourism Association <a href="https://usvihta.com/" target="_blank" class="font-semibold">https://usvihta.com/</a></p>
                        </li>
                        <li class="">
                            <p class="">The University of Virgin Islands – Hospitality and Tourism Management  Program <a href="https://omni.uvi.edu/academics/school-business/programs/professional-studies/hotel-tourism-mgmt/" target="_blank" class="font-semibold"> https://omni.uvi.edu/academics/</a></p>
                        </li>
                        <li>
                            <p>The University of Virgin Islands – Research and Technology Park <a href="https://uvirtpark.net/" target="_blank" class="font-semibold">https://uvirtpark.net/</a></p>
                        </li>
                        <li>
                            <p>USDA US Virgin Islands <a href="usda.gov" target="_blank" class="font-semibold">Virgin Islands Office (usda.gov)</a></p>
                        </li>
                        <li>
                            <p>Bogor Hospitality Institute  – Indonesia</p>
                        </li>
                        <li>
                            <p>Seacosystem – Renewable Energy & Agriculture Divisions <a href="Seacosystems.com" target="_blank" class="font-semibold">Home – Seacosystems.com Green Energy for the Blue Economy Seacosystems.com</a></p>
                        </li>
                    </ul>
                </div>
                <div class="grid sm:grid-cols-7 xs:grid-cols-3 grid-cols-2 sm:gap-2 gap-4 mt-12">
                    <div class="flex items-center justify-center">
                        <img src="{{ asset("assets/logos/croixfoundation.png")}}" alt="" class="w-40 h-28 object-cover rounded-lg">
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ asset("assets/logos/chant.png")}}" alt="" class="w-40 h-28 object-cover rounded-lg ">
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ asset("assets/logos/rtpark.png")}}" alt="" class="w-40 h-28 object-cover rounded-lg ">
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ asset("assets/logos/virginislanduniversity.png")}}" alt="" class="w-40 h-28 object-cover rounded-lg ">
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ asset("assets/logos/virginisland.png")}}" alt="" class="w-40 h-28 object-cover rounded-lg ">
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ asset("assets/logos/sekolahtinggipwstbogor.png")}}" alt="" class="w-40 h-28 object-cover rounded-lg ">
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ asset("assets/logos/bg-white-seacosystems.png")}}" alt="" class="w-40 h-28 object-cover rounded-lg ">
                    </div>
                </div>
            </section>
        </div>
    </main>
    <x-footer />
</body>
</html>