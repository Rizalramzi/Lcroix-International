<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Leaders | Lcroix International</title>
    <link rel="stylesheet" href="{{ asset("/css/style.css") }}" />
    <link rel="stylesheet" href="{{ asset("/css/font.css") }}" />
    <script src="{{ asset("/js/navbar.js") }}"></script>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar />
    <section id="leader" class="relative text-white">
        <div class="flex flex-col items-center justify-center h-full space-y-2">
            <h1 class="lg:text-[3rem] md:text-[2rem] text-[1.5rem]">Leaders</h1>
            <p class="lg:text-md md:text-xs text-[0.8rem] text-center">Meet Our Visionary Hospitality Leaders</p>
        </div>
    </section>
    <main class="mt-32 flex w-full flex-col justify-center">
        <div class="container mx-auto max-w-[90rem]">
            <section>
                <h1 class="text-2xl text-main text-center">Meet Our Leaders</h1>
                <div class="flex flex-col gap-y-6">
                    {{-- Leader 1 --}}
                    <div class="flex sm:flex-row flex-col px-16 sm:px-32 py-20 w-full space-y-8 sm:space-y-0">
                        <div class="sm:w-4/12 w-full space-y-3 flex flex-col items-center justify-center sm:block sm:items-start sm:justify-start">
                            <div class="text-main text-center sm:text-start">
                                <h4>01 Leader</h4>
                                <h4>Founder & Director</h4>
                            </div>
                            <img src="{{ asset("/assets/profile-picture/first-leader.png") }}" alt="Dr. Ir. Hasan Hambali, MM" class="w-24 h-auto">
                            <div class="text-dark text-center sm:text-start">
                                <h6 class="font-semibold text-sm">Dr. Ir. Hasan Hambali, MM</h6>
                                <p class="text-[0.8rem] max-w-60">President Commissioner & Founder at Salak Hosøitdity</p>
                            </div>
                        </div>
                        <div class="sm:w-8/12 w-full space-y-6 text-[0.8rem] sm:ps-16">
                            <p>Dr.  Hasan Hambali is an oil engineer and an economist; however, in the past 25 years his career has been focused on building his Salak Hospitality company, based in Bogor City, Indonesia to become one of the most profitable privately owned hospitality business in Indonesia.</p>

                            <p>Under his leadership, Salak Hospitality was built in 1996, starting with the establishment of Hotel Salak The Heritage the most prestigious 4-star hotel in Bogor City.  The second 4-star hotel, Salak Tower Hotel (now Swiss-Belhotel Bogor), was built and operated by Salak Hospitality from 2013 to 2018. 
                                Dr. Hambali is also an educator and a philanthropist.  To support his hospitality business operation, he established STP </p>

                            <p>Bogor (Bogor School of Tourism) in 1999 which has produced more than 10,000 alumni working around the world.  STP Bogor is dedicated to help Indonesian high school graduates, who otherwise cannot afford college education.  Through STP Bogor, these young people learn about hospitality business and   gain skills, knowledge and formal degree/certificate  which help them to obtain good employments in various hospitality business sectors.</p>
                        </div>
                    </div>
                    {{-- Leader 1 --}}

                    {{-- Leader 2 --}}
                    <div class="bg-gray flex sm:flex-row flex-col px-16 sm:px-32 py-20 w-full space-y-8 sm:space-y-0">
                        <div class="sm:w-4/12 w-full space-y-3 flex flex-col items-center justify-center sm:block sm:items-start sm:justify-start">
                            <div class="text-main text-center sm:text-start">
                                <h4>02 Leader</h4>
                                <h4>Co-Founder & President Director</h4>
                            </div>
                            <img src="{{ asset("/assets/profile-picture/second-leader.png") }}" alt="Dr. Justinus Satrio, Ph.D." class="w-24 h-auto">
                            <div class="text-dark text-center sm:text-start">
                                <h6 class="font-semibold text-sm">Dr. Justinus Satrio, Ph.D.</h6>
                                <p class="text-[0.8rem] max-w-60">Managing Partner and VP for
                                    Technologies at Seacosysterns LLC</p>
                            </div>
                        </div>
                        <div class="sm:w-8/12 w-full space-y-6 text-[0.8rem] sm:ps-16">
                            <p>Partnering with Dr. Hasan Hambali to form LCI, Dr. Satrio aims to make a new business model, which integrate hospitality and tourism sector with technologies and sustainable development initiatives which will help local communities to grow to become prosperous sustainable communities. Dr. Justinus Satrio is an engineering scientist and a university professor turning into a social and green entrepreneur in the United States</p>

                            <p>Growing up in Indonesia he moved to the United States to pursue advanced education in chemical engineering.  For more than 20 years, his passion in sustainability and circular economy has made Dr. Satrio an international recognized scientist in renewable energy, especially on bioenergy.  He has presented his work in more than 30 papers published in international technical journals and 100 presentations in various conferences and seminars.</p>

                            <p>Until 2023, Dr. Satrio worked as a chemical engineering professor at Villanova University for 13 years. Besides doing research and teaching, he was active in international development efforts, by regularly taking  Villanova engineering students to Indonesia for service learning. Learning from his experience in Indonesia, Dr. Satrio believe that a “tourism with purpose”, especially in developing communities, can and must help the local communities, not only economically, but also to grow in education, skills and knowledge, which make them become more self reliant. A strategic thinker and people connector, Dr. Satrio believes that hospitality and tourism are business for connecting people from different backgrounds.</p>

                            <p>
                                Dr. Satrio also serves as a managing partner and principal leader on technologies and sustainability affairs at Seacosystems LLC (SCS), which will be a partner for LCH in technologies and sustainable development initiatives. <a href="https://seacosystems.com/">https://seacosystems.com/</a>
                            </p>
                        </div>
                    </div>
                    {{-- Leader 2 --}}
                    
                    {{-- Leader 3 --}}
                    <div class="flex sm:flex-row flex-col px-16 sm:px-32 py-20 w-full space-y-8 sm:space-y-0">
                        <div class="sm:w-4/12 w-full space-y-3 flex flex-col items-center justify-center sm:block sm:items-start sm:justify-start">
                            <div class="text-main text-center sm:text-start">
                                <h4>03 Leader</h4>
                                <h4>CEO (Chief Executive Officer)</h4>
                            </div>
                            <img src="{{ asset("/assets/profile-picture/third-leader.png") }}" alt="Juke Sjukriana" class="w-24 h-auto">
                            <div class="text-dark text-center sm:text-start">
                                <h6 class="font-semibold text-sm">Juke Sjukriana</h6>
                            </div>
                        </div>
                        <div class="sm:w-8/12 w-full space-y-6 text-[0.8rem] sm:ps-16">
                            <p>Ms. Juke Sjukriana is currently serving as the Chief Operating Officer (CEO) of Salak Hospitality, a hotel operator and hospitality consultant company based in Bogor City, Indonesia.  She is also the CEO of Hotel Salak The Heritage, a 4-star hotel She has more than 23 years of experience in hotel and  hospitality industry. Her career started in 2001 when in 2001 when she joined Hotel Salak The Heritage Bogor as the Marketing Manager.  Ms. Sjukriana received her Master’s Degree in Industrial Design at the University of Canberra, Australia in 1999. Prior to joining Salak Hospitality, she worked as an Industrial Designer for Metron Medical Australia Pty Ltd, Melbourne, Australia, and then as a Professional Associate of Occupational, Health, and Safety of PT Superintending Company of Indonesia (SUCOFINDO), Indonesia’s first inspection, certification, and consultancy service company.</p>

                            <p>Ms. Sjukriana became the Matron General Manager in 2003, which she held until 2013 before ascending to the position that she holding now.  During her assignment as the General Manager, Hotel Salak The Heritage became the pioneer of Meeting, Incentive, Conference, and Exhibition (MICE) hotel and the top rank occupancy rate in Bogor. She handled many National and International events, and the hotel received some distinguished recognition from the White House during the US President’s visit in 2006, The Ambassador of Finland for humanitarian activities in Indonesia in 2006-2007, the United Nations for Climate Change Conference (UNFCCC) in 2007, US Army-Garuda Shield in 2008, the Imperial Highnesses Prince Akishino and Princess Kiko of Japan’s visit in 2008, and many more.</p>

                            <p>Besides running a business, Ms. Sjukriana is also very active in her professional community through research.  She is conducting research on the technological advancement in event planning, notably event space online booking platforms. She has presented several research papers at the International Design, Occupational, Health, and Safety Conference in Bali, the Ergonomic Society Conference in Rotorua – New Zealand, the ASEAN Food Conference in Jakarta, the International Hospitality Conference in Jeonju – South Korea, and the Asia Pacific Hospitality Panel of Experts in Perth – Australia. Currently, she is taking a doctoral degree in Hospitality and Tourism Management at Universiti Teknologi MARA, Malaysia.</p>
                        </div>
                    </div>
                    {{-- Leader 3 --}}
                    
                    {{-- Leader 4 --}}
                    <div class="flex sm:flex-row flex-col px-16 sm:px-32 py-20 w-full space-y-8 sm:space-y-0">
                        <div class="sm:w-4/12 w-full space-y-3 flex flex-col items-center justify-center sm:block sm:items-start sm:justify-start">
                            <div class="text-main text-center sm:text-start">
                                <h4>04 Leader</h4>
                                <h4>Commisssioner & Co-Founder</h4>
                            </div>
                            <img src="{{ asset("/assets/profile-picture/fourth-leader.png") }}" alt="Agus Prihanto" class="w-24 h-auto">
                            <div class="text-dark text-center sm:text-start">
                                <h6 class="font-semibold text-sm">Agus Prihanto</h6>
                            </div>
                        </div>
                        <div class="sm:w-8/12 w-full space-y-6 text-[0.8rem] sm:ps-16">
                            <p>Agus Prihanto is a highly accomplished professional with a diverse background in both architecture and hospitality. He holds a Magister Management in Business Management from MB IPB, which has equipped him with a deep understanding of business strategy and management principles. Additionally, he earned a degree in architecture from Diponegoro University, which has given him a unique perspective on design and construction.</p>

                            <p>Throughout his career, Agus has held a variety of leadership positions in the hospitality industry. He has served as Hotel Marketing & Business Specialist Director and CEO of Salak Hospitality Groups since 2013, where he has been responsible for overseeing the company’s operations and driving growth. Prior to this, he worked as a Hotel Marketing & Promotion Director and Room Division Manager, where he gained valuable experience in sales, marketing, and customer service.</p>

                            <p>Agus also has extensive experience as an architect and project manager, having worked on a number of high-profile projects throughout his career. He has worked for several consulting and development firms, including PT. Wiratman & Associated, PT. INCA, and PT. Graha Seraya Pratama. Some of his notable projects include the Novotel Hotel Batam, Sheraton Hotel Batam, and the Gili Air Tourism Development Area in Bali. With his diverse background and wealth of experience, he leads Salak Hospitality Group, which operates some business including Hotel Salak The Heritage Bogor and Hotel Operation and Maintenance Service (HOMS).</p>
                        </div>
                    </div>
                    {{-- Leader 4 --}}
                </div>
            </section>
        </div>
    </main>
    <x-footer />
</body>
</html>