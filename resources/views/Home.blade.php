{{-- @extends('Layouts.app')

@section('content')
<body class="bg-blue-400 ">
  

<section class="text-gray-600 bg-white body-font h-screen w-full">
    <div class="container bg-blue-400 rounded-b-3xl w-full">
      <div class="px-5 py-24 mx-auto flex flex-wrap -mb-10 text-center">
        <div class="sm:w-2/3 my-auto px-4">       
            <form class=" ">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative flex">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border-r  border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." />
                    <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border-r  border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." />
                    <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border-r  border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." />

                    <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>

        </div>
        
      </div>
    </div>
  </section>
</body>
  @endsection --}}
  @extends('Layouts.app')

  @section('content')
<body
    class="antialiased text-lg font-primary text-black ">
    {{-- <section
        class="flex items-center bg-center bg-cover lg:h-screen py-24  dizme_tm_header"
        id="home">
        <div class="container">
            <div class="grid lg:grid-cols-2 items-center gap-[25px]">
                <div class="order-2 lg:order-1">
                    <h3
                        class="text-custom text-[21px] text-center lg:text-left lg:text-[25px] xl:text-[45px] leading-[1.3] font-medium font-secondary">
                        Hello, I'm</h3>
                    <h1
                        class="text-[42px] lg:text-[60px] xl:text-[85px] text-center lg:text-left mb-[11px] lg:mb-[18px] leading-[1.3] font-medium font-secondary">
                        James Smith</h1>
                    <p
                        class="lg:mb-9 mb-[15px] text-lg lg:text-[19px] xl:text-[28px] text-center lg:text-left font-medium">
                        A <span class="text-[#1cbe59]">Creative Designer</span> From <span
                            class="text-[#8067f0] dark:text-[#f0c45c]">New York</span>
                    </p>
                    <p
                        class="lg:mb-[42px] text-muted dark:text-white mb-[30px] text-base text-center lg:text-left xl:text-[23px] leading-[1.5] max-w-[640px] mx-auto lg:ml-0">
                        I'm creative designer based in New York, and I'm very passionate and dedicated to my work.
                    </p>
                    <div class="flex items-center justify-center lg:justify-start gap-[25px]">
                        <a href="#about" class="btn-custom relative">About Me</a>
                        <ul class="flex items-center gap-2">
                            <li>
                                <a href="#"><i class="icon-facebook-1"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-twitter-1"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-linkedin-1"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-behance"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="order-1 lg:order-2">
                    <div class="relative">
                        <img src="assets/img/slider/avatar.png"
                            class="mx-auto max-w-[250px] lg:max-w-[400px] xl:max-w-[650px]" alt />
                        <span
                            class="left-24 shadow-[24px_0px_72px_rgb(54,32,152,0.3)] top-5 hidden lg:flex items-center rounded-lg bg-[#390000] w-[75px] h-[75px] absolute anim_moveBottom">
                            <img class="w-10 h-10 mx-auto" src="assets/img/svg/skills/illustrator.svg" alt />
                        </span>
                        <span
                            class="right-[110px] shadow-[24px_0px_72px_rgb(54,32,152,0.3)] top-20 hidden lg:flex items-center rounded-lg bg-[#001631] w-[75px] h-[75px] absolute anim_moveBottom">
                            <img class="w-10 h-10 mx-auto" src="assets/img/svg/skills/photoshop.svg" alt />
                        </span>
                        <span
                            class="left-[100px] shadow-[24px_0px_72px_rgb(54,32,152,0.3)] bottom-20 hidden lg:flex items-center rounded-lg bg-white w-[75px] h-[75px] absolute anim_moveBottom">
                            <img class="w-10 mx-auto h-10" src="assets/img/svg/skills/figma.svg" alt />
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    {{-- <section class="md:pt-[190px] pt-[135px] pb-[70px]" id="process">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[50px]">
                <div class="text-center wow fadeInUp" data-wow-duration="1s">
                    <div>
                        <span class="relative inline-block dark:hidden">
                            <img src="assets/img/brushes/process/1.png" class="md:max-w-[125px] max-w-[90px] mx-auto"
                                alt />
                            <img src="assets/img/svg/process/target.svg"
                                class="top-1/2 -translate-y-1/2 absolute inset-x-0 w-[45px] md:w-[60px] h-[45px] md:h-[60px] mx-auto"
                                alt />
                        </span>
                        <span class="relative hidden dark:block">
                            <img src="assets/img/brushes/process/dark/1.png"
                                class="md:max-w-[125px] max-w-[90px] mx-auto" alt />
                            <img src="assets/img/svg/process/target-2.svg"
                                class="top-1/2 -translate-y-1/2 absolute inset-x-0 w-[45px] md:w-[60px] h-[45px] md:h-[60px] mx-auto"
                                alt />
                        </span>
                    </div>
                    <div class="mt-[30px]">
                        <h3 class="text-2xl">Pixel Perfect</h3>
                        <p class="mx-auto text-muted dark:text-darkmuted mt-5 leading-[30px]">Most common methods for
                            designing websites that work well on desktop is responsive and adaptive design.</p>
                    </div>
                </div>
                <div class="text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div>
                        <span class="relative inline-block dark:hidden">
                            <img src="assets/img/brushes/process/2.png" class="md:max-w-[125px] max-w-[90px] mx-auto"
                                alt />
                            <img src="assets/img/svg/process/brush.svg"
                                class="top-1/2 -translate-y-1/2 absolute inset-x-0 w-[45px] md:w-[60px] h-[45px] md:h-[60px] mx-auto"
                                alt />
                        </span>
                        <span class="relative hidden dark:block">
                            <img src="assets/img/brushes/process/dark/2.png"
                                class="md:max-w-[125px] max-w-[90px] mx-auto" alt />
                            <img src="assets/img/svg/process/brush-2.svg"
                                class="top-1/2 -translate-y-1/2 absolute inset-x-0 w-[45px] md:w-[60px] h-[45px] md:h-[60px] mx-auto"
                                alt />
                        </span>
                    </div>
                    <div class="mt-[30px]">
                        <h3 class="text-2xl">High Quality</h3>
                        <p class="mx-auto text-muted dark:text-darkmuted mt-5 leading-[30px]">Most common methods for
                            designing websites that work well on desktop is responsive and adaptive design.</p>
                    </div>
                </div>
                <div class="text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div>
                        <span class="relative inline-block dark:hidden">
                            <img src="assets/img/brushes/process/3.png" class="md:max-w-[125px] max-w-[90px] mx-auto"
                                alt />
                            <img src="assets/img/svg/process/energy.svg"
                                class="top-1/2 -translate-y-1/2 absolute inset-x-0 w-[45px] md:w-[60px] h-[45px] md:h-[60px] mx-auto"
                                alt />
                        </span>
                        <span class="relative hidden dark:block">
                            <img src="assets/img/brushes/process/dark/3.png"
                                class="md:max-w-[125px] max-w-[90px] mx-auto" alt />
                            <img src="assets/img/svg/process/energy-2.svg"
                                class="top-1/2 -translate-y-1/2 absolute inset-x-0 w-[45px] md:w-[60px] h-[45px] md:h-[60px] mx-auto"
                                alt />
                        </span>
                    </div>
                    <div class="mt-[30px]">
                        <h3 class="text-2xl">Awesome Idea</h3>
                        <p class="mx-auto text-muted dark:text-darkmuted mt-5 leading-[30px]">Most common methods for
                            designing websites that work well on desktop is responsive and adaptive design.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    {{-- <section class="md:pt-[112px] pt-16 relative" id="about">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[90px] items-center">
                <div class="relative space-y-4 md:space-y-0">
                    <div>
                        <img src="assets/img/about/1.jpg" class="mx-auto dark:hidden" alt />
                        <img src="assets/img/about/2.jpg" class="mx-auto hidden dark:block" alt />
                    </div>
                    <div class="top-[120px] -left-20 md:absolute">
                        <div
                            class="flex gap-[17px] items-center pt-[25px] pr-[30px] pb-[21px] pl-[26px] bg-white dark:bg-semilight shadow-[25px_0px_65px_rgba(54,32,152,0.11)] rounded-lg">
                            <h3 class="text-[50px] text-[#1cbe59]"><span class="dizme_tm_counter stop" data-from="0"
                                    data-to="18" data-speed="2000">18</span></h3>
                            <span class="name text-lg font-secondary leading-[1.3] font-medium">
                                Years of<br />
                                Success
                            </span>
                        </div>
                    </div>
                    <div class="bottom-[70px] -right-[30px] md:absolute">
                        <div
                            class="flex gap-[17px] items-center pt-[25px] pr-[30px] pb-[21px] pl-[26px] bg-white dark:bg-semilight shadow-[25px_0px_65px_rgba(54,32,152,0.11)] rounded-lg">
                            <h3 class="text-[50px] text-[#6e50f0] dark:text-[#f0c45c]"><span
                                    class="dizme_tm_counter stop" data-from="0" data-to="9"
                                    data-speed="2000">9</span>K
                            </h3>
                            <span class="name text-lg font-secondary leading-[1.3] font-medium">
                                Total<br />
                                Projects
                            </span>
                        </div>
                    </div>
                </div>
                <div class="text-center md:text-left">
                    <div class="mb-[25px] lg:max-w-[440px]">
                        <p class="text-custom text-xl md:text-2xl font-medium font-secondary wow fadeInUp"
                            data-wow-duration="1s">I'm a Designer</p>
                        <h3 class="md:text-[48px] text-[35px] leading-[1.25] mt-1.5 wow fadeInUp"
                            data-wow-duration="1s">I Can Design Anything You Want</h3>
                    </div>
                    <p class="text-muted dark:text-darkmuted lg:max-w-[485px] leading-[30px] mb-[47px] wow fadeInUp"
                        data-wow-duration="1s">
                        Hello there! I'm a web designer, and I'm very passionate and dedicated to my work. With 20 years
                        experience as a professional web developer, I have acquired the skills and knowledge necessary
                        to make your project
                        a success. I enjoy every step of the design process, from discussion and collaboration.
                    </p>
                    <div class="wow fadeInUp" data-wow-duration="1s">
                        <a href="#contact" class="btn-custom">Hire Me</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="left-10 top-5 absolute hidden lg:block wow fadeInLeft" data-wow-duration="1s"><img
                src="assets/img/brushes/about/1.png" alt /></div>
        <div class="-bottom-[50px] right-0 absolute hidden lg:block wow fadeInRight" data-wow-duration="1s"><img
                src="assets/img/brushes/about/2.png" alt /></div>
    </section> --}}


    {{-- <section class="pt-[113px] md:pt-[185px] pb-[88px] md:pb-[165px] relative" id="portfolio">
        <div class="container relative z-10">
            <div class="grid grid-cols-1">
                <div class="text-center max-w-[680px] mx-auto">
                    <p class="text-custom text-[20px] md:text-2xl font-medium font-secondary">Portfolio</p>
                    <h3 class="md:text-[48px] text-[35px] leading-[1.25] mb-[23px] mt-1.5">My Amazing Works</h3>
                    <p class="text-muted dark:text-darkmuted text-lg leading-[30px]">Most common methods for designing
                        websites that work well on desktop is responsive and adaptive design</p>
                </div>
            </div>
            <div class="grid grid-cols-1">
                <div class="md:pt-[78px] pt-[53px] pb-[46px] md:pb-[56px]">
                    <ul class="flex items-center gap-4 flex-wrap lg:gap-[50px] justify-center" id="menu-filter">
                        <li class="shrink-0">
                            <a href="#" class="hover:text-custom active text-base duration-300"
                                data-filter="*">All</a>
                        </li>
                        <li class="shrink-0">
                            <a href="#" class="hover:text-custom text-base duration-300"
                                data-filter=".youtube">Youtube</a>
                        </li>
                        <li class="shrink-0">
                            <a href="#" class="hover:text-custom text-base duration-300"
                                data-filter=".vimeo">Vimeo</a>
                        </li>
                        <li class="shrink-0">
                            <a href="#" class="hover:text-custom text-base duration-300"
                                data-filter=".soundcloud">Soundcloud</a>
                        </li>
                        <li class="shrink-0">
                            <a href="#" class="hover:text-custom text-base duration-300"
                                data-filter=".popup">Popup</a>
                        </li>
                        <li class="shrink-0">
                            <a href="#" class="hover:text-custom text-base duration-300"
                                data-filter=".detail">Detail</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dizme_tm_portfolio_titles"></div>
            <div class="md:flex work-filter wow fadeInUp" data-wow-duration="1s">
                <div class="lg:w-1/3 md:w-1/3 p-3 youtube">
                    <div class="rounded-xl overflow-hidden group relative">
                        <div class="main-img-box" data-title="Mockup Shape" data-category="Youtube">
                            <a class="img-zoom relative" href="assets/img/portfolio/1.jpg">
                                <div class="main group-hover:scale-110 overflow-hidden">
                                    <img src="assets/img/portfolio/1.jpg" class="object-cover w-full h-full" alt />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 md:w-1/3 p-3 vimeo">
                    <div class="rounded-xl overflow-hidden group relative">
                        <div class="main-img-box" data-title="Ave Bottle" data-category="Vimeo">
                            <a class="img-zoom relative" href="assets/img/portfolio/2.jpg">
                                <div class="main group-hover:scale-110 overflow-hidden">
                                    <img src="assets/img/portfolio/4.jpg" class="object-cover w-full h-full" alt />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 md:w-1/3 p-3 soundcloud">
                    <div class="rounded-xl overflow-hidden group relative">
                        <div class="main-img-box" data-title="Magic Art" data-category="Soundcloud">
                            <a class="img-zoom relative" href="assets/img/portfolio/3.jpg">
                                <div class="main group-hover:scale-110 overflow-hidden">
                                    <img src="assets/img/portfolio/2.jpg" class="object-cover w-full h-full" alt />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 md:w-1/3 p-3 popup">
                    <div class="rounded-xl overflow-hidden group relative">
                        <div class="main-img-box" data-title="Blue Lemon" data-category="Popup">
                            <a class="img-zoom relative" href="assets/img/portfolio/4.jpg">
                                <div class="main group-hover:scale-110 overflow-hidden">
                                    <img src="assets/img/portfolio/5.jpg" class="object-cover w-full h-full" alt />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 md:w-1/3 p-3 detail">
                    <div class="rounded-xl overflow-hidden group relative">
                        <div class="main-img-box" data-title="Art Stone" data-category="Popup">
                            <a class="img-zoom relative" href="assets/img/portfolio/5.jpg">
                                <div class="main group-hover:scale-110 overflow-hidden">
                                    <img src="assets/img/portfolio/3.jpg" class="object-cover w-full h-full" alt />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 md:w-1/3 p-3 youtube">
                    <div class="rounded-xl overflow-hidden group relative">
                        <div class="main-img-box" data-title="Global Evolution" data-category="Detail">
                            <a class="img-zoom relative" href="assets/img/portfolio/6.jpg">
                                <div class="main group-hover:scale-110 overflow-hidden">
                                    <img src="assets/img/portfolio/6.jpg" class="object-cover w-full h-full" alt />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="left-[50px] top-[150px] absolute hidden lg:block wow zoomIn" data-wow-duration="1s"><img
                src="assets/img/brushes/portfolio/1.png" alt /></div>
        <div class="right-[10px] bottom-[51px] absolute hidden lg:block wow fadeInRight" data-wow-duration="1s"><img
                src="assets/img/brushes/portfolio/2.png" alt /></div>
    </section> --}}


    {{-- <section>
        <div class="container relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[200px] items-center">
                <div>
                    <div class="mb-[23px] wow fadeInUp" data-wow-duration="1s">
                        <p class="text-custom text-[20px] md:text-2xl font-medium font-secondary">Design is Life</p>
                        <h3 class="md:text-[48px] text-[35px] leading-[1.25] mt-1.5">I Develop Skills Regularly to Keep
                            Me Update</h3>
                    </div>
                    <p class="text-muted dark:text-darkmuted lg:max-w-[485px] leading-[30px] wow fadeInUp"
                        data-wow-duration="1s">Most common methods for designing websites that work well on desktop is
                        responsive and adaptive design</p>
                    <div class="pt-[30px] space-y-[22px] wow fadeInUp" data-wow-duration="1s">
                        <div class="w-full mb-[22px] relative" data-value="85" data-color="#f75023">
                            <div class="mb-[9px] block"><span
                                    class="text-lg font-medium font-secondary inline-block">Illustrator</span><span
                                    class="absolute right-[15%] text-custom">85%</span></div>
                            <div class="w-full bg-[#e7e5f1] rounded-full h-2">
                                <div class="bg-custom h-2 rounded-full" style="width: 85%;"></div>
                            </div>
                        </div>
                        <div class="w-full mb-[22px] relative" data-value="95" data-color="#f75023">
                            <div class="mb-[9px] block"><span
                                    class="text-lg font-medium font-secondary inline-block">Photoshop</span><span
                                    class="absolute right-[5%] text-custom">95%</span></div>
                            <div class="w-full bg-[#e7e5f1] rounded-full h-2">
                                <div class="bg-[#1cbe59] h-2 rounded-full" style="width: 95%;"></div>
                            </div>
                        </div>
                        <div class="w-full mb-[22px] relative" data-value="75" data-color="#f75023">
                            <div class="mb-[9px] block"><span
                                    class="text-lg font-medium font-secondary inline-block">Figma</span><span
                                    class="absolute right-[25%] text-custom">75%</span></div>
                            <div class="w-full bg-[#e7e5f1] rounded-full h-2">
                                <div class="bg-[#8067f0] h-2 rounded-full" style="width: 75%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div>
                        <img src="assets/img/skills/1.jpg" class="max-h-[800px] mx-auto dark:hidden" alt />
                        <img src="assets/img/skills/2.jpg" class="max-h-[800px] mx-auto hidden dark:block" alt />
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    {{-- <section class="md:pt-[178px] pt-[120px] pb-[98px] md:pb-[160px] relative" id="service">
        <div class="container relative z-10">
            <div class="grid grid-cols-1">
                <div class="text-center max-w-[680px] mx-auto">
                    <p class="text-custom text-[20px] md:text-2xl font-medium font-secondary">Services</p>
                    <h3 class="md:text-[48px] text-[35px] leading-[1.25] mb-[23px] mt-1.5">What I Do for Clients</h3>
                    <p class="text-muted dark:text-darkmuted text-lg leading-[30px]">Most common methods for designing
                        websites that work well on desktop is responsive and adaptive design</p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 pt-[86px] gap-[25px]">
                <div class="cursor-pointer wow fadeInLeft" data-wow-duration="1s">
                    <div onclick="toggleModal('modal-id')"
                        class="shadow-[18px_0px_87px_rgba(10,15,17,0.07)] bg-white dark:bg-semilight p-8 lg:p-[65px] rounded-xl space-y-6 lg:space-y-0 lg:flex items-start gap-12 tilt-effect">
                        <div class="shrink-0 relative inline-block">
                            <img class="top-1/2 -translate-y-1/2 absolute inset-x-0 w-[45px] h-[45px] mx-auto"
                                src="assets/img/svg/service/anchor.svg" alt />
                            <img src="assets/img/brushes/service/1.png" class="dark:hidden" alt />
                            <img src="assets/img/brushes/service/dark/1.png" class="dark:block hidden" alt />
                        </div>
                        <div>
                            <h3 class="text-[30px] mb-4">Creative Design</h3>
                            <p class="text-[21px] mb-5 font-medium font-secondary text-dark dark:text-white">
                                <span>Starts from <span class="text-2xl text-custom">$99</span></span>
                            </p>
                            <p class="text-muted dark:text-darkmuted text-lg leading-[30px]">
                                Web design refers to the design of websites that are displayed on the internet. It
                                usually refers to the user experience aspects of website development
                            </p>
                        </div>
                    </div>
                </div>
                <div class="cursor-pointer wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div onclick="toggleModaltwo('modal-id-two')"
                        class="shadow-[18px_0px_87px_rgba(10,15,17,0.07)] bg-white dark:bg-semilight p-8 lg:p-[65px] rounded-xl space-y-6 lg:space-y-0 lg:flex items-start gap-12 tilt-effect">
                        <div class="shrink-0 relative inline-block">
                            <img class="top-1/2 -translate-y-1/2 absolute inset-x-0 w-[45px] h-[45px] mx-auto"
                                src="assets/img/svg/service/physics.svg" alt />
                            <img src="assets/img/brushes/service/2.png" class="dark:hidden" alt />
                            <img src="assets/img/brushes/service/dark/2.png" class="dark:block hidden" alt />
                        </div>
                        <div>
                            <h3 class="text-[30px] mb-4">Graphic Design</h3>
                            <p class="text-[21px] mb-5 font-medium font-secondary text-dark dark:text-white">
                                <span>Starts from <span class="text-2xl text-custom">$199</span></span>
                            </p>
                            <p class="text-muted dark:text-darkmuted text-lg leading-[30px]">
                                Web design refers to the design of websites that are displayed on the internet. It
                                usually refers to the user experience aspects of website development
                            </p>
                        </div>
                    </div>
                </div>
                <div class="cursor-pointer wow fadeInLeft" data-wow-duration="1s">
                    <div onclick="toggleModalthree('modal-id-three')"
                        class="shadow-[18px_0px_87px_rgba(10,15,17,0.07)] bg-white dark:bg-semilight p-8 lg:p-[65px] rounded-xl space-y-6 lg:space-y-0 lg:flex items-start gap-12 tilt-effect">
                        <div class="shrink-0 relative inline-block">
                            <img class="top-1/2 -translate-y-1/2 absolute inset-x-0 w-[45px] h-[45px] mx-auto"
                                src="assets/img/svg/service/contact.svg" alt />
                            <img src="assets/img/brushes/service/3.png" class="dark:hidden" alt />
                            <img src="assets/img/brushes/service/dark/3.png" class="dark:block hidden" alt />
                        </div>
                        <div>
                            <h3 class="text-[30px] mb-4">UI/UX Design</h3>
                            <p class="text-[21px] mb-5 font-medium font-secondary text-dark dark:text-white">
                                <span>Starts from <span class="text-2xl text-custom">$299</span></span>
                            </p>
                            <p class="text-muted dark:text-darkmuted text-lg leading-[30px]">
                                Web design refers to the design of websites that are displayed on the internet. It
                                usually refers to the user experience aspects of website development
                            </p>
                        </div>
                    </div>
                </div>
                <div class="cursor-pointer wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div onclick="toggleModalfour('modal-id-four')"
                        class="shadow-[18px_0px_87px_rgba(10,15,17,0.07)] bg-white dark:bg-semilight p-8 lg:p-[65px] rounded-xl space-y-6 lg:space-y-0 lg:flex items-start gap-12 tilt-effect">
                        <div class="shrink-0 relative inline-block">
                            <img class="top-1/2 -translate-y-1/2 absolute inset-x-0 w-[45px] h-[45px] mx-auto"
                                src="assets/img/svg/service/web.svg" alt />
                            <img src="assets/img/brushes/service/4.png" class="dark:hidden" alt />
                            <img src="assets/img/brushes/service/dark/4.png" class="dark:block hidden" alt />
                        </div>
                        <div>
                            <h3 class="text-[30px] mb-4">Web Design</h3>
                            <p class="text-[21px] mb-5 font-medium font-secondary text-dark dark:text-white">
                                <span>Starts from <span class="text-2xl text-custom">$399</span></span>
                            </p>
                            <p class="text-muted dark:text-darkmuted text-lg leading-[30px]">
                                Web design refers to the design of websites that are displayed on the internet. It
                                usually refers to the user experience aspects of website development
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-[300px] left-0 absolute hidden lg:block wow fadeInLeft" data-wow-duration="1s"><img
                src="assets/img/brushes/service/5.png" alt /></div>
        <div class="top-0 right-0 absolute hidden lg:block wow zoomIn" data-wow-duration="1s"><img
                src="assets/img/brushes/service/6.png" alt /></div>
    </section> --}}


    {{-- <section>
        <div>
            <div class="hidden overflow-x-hidden fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                id="modal-id">
                <div class="relative w-full my-10 mx-auto max-w-[968px] h-[calc(100vh-80px)] py-20">
                    <div
                        class="rounded relative flex flex-col w-full pt-5 overflow-y-auto p-[50px] bg-white dark:bg-[#34353a] outline-none focus:outline-none h-full scrollbar-thumb-dark/25 scrollbar-track-dark/10 scrollbar-thin">
                        <div class="flex items-center justify-between pb-5">
                            <h3 class="text-2xl font-semibold">
                                Services Details
                            </h3>
                            <button class="ml-auto bg-transparent border-0 dark:text-white text-dark"
                                onclick="toggleModal('modal-id')">
                                <span class="bg-transparent stroke-dark block">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-7 h-7 dark:stroke-white stroke-dark">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <div>
                            <img src="assets/img/service/1.jpg" class="h-[350px] object-cover w-full rounded-xl" alt>
                            <h3 class="mt-[37px] text-[30px] font-medium ">Creative Design</h3>
                            <p class="text-[21px] font-secondary font-medium mt-1">Starts from <span
                                    class="text-custom text-2xl">$99</span></p>
                            <div class="mt-[23px] space-y-5">
                                <p class="text-muted dark:text-darkmuted">Dizme is a leading web design agency with an
                                    award-winning design team that creates innovative, effective websites that capture
                                    your brand, improve your conversion rates, and maximize your revenue to help grow
                                    your business and achieve your goals.</p>
                                <p class="text-muted dark:text-darkmuted">Dizme is a leading web design agency with an
                                    award-winning design team that creates innovative, effective websites that capture
                                    your brand, improve your conversion rates, and maximize your revenue to help grow
                                    your business and achieve your goals.</p>
                                <p class="text-muted dark:text-darkmuted">Dizme is a leading web design agency with an
                                    award-winning design team that creates innovative, effective websites that capture
                                    your brand, improve your conversion rates, and maximize your revenue to help grow
                                    your business and achieve your goals.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden fixed inset-0 z-40 bg-dark/90" id="modal-id-backdrop"></div>
        </div>
        <div>
            <div class="hidden overflow-x-hidden fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                id="modal-id-two">
                <div class="relative w-full my-10 mx-auto max-w-[968px] h-[calc(100vh-80px)] py-20">
                    <div
                        class="rounded relative flex flex-col w-full pt-5 overflow-y-auto p-[50px] bg-white dark:bg-[#34353a] outline-none focus:outline-none h-full scrollbar-thumb-dark/25 scrollbar-track-dark/10 scrollbar-thin">
                        <div class="flex items-center justify-between pb-5">
                            <h3 class="text-2xl font-semibold">
                                Services Details
                            </h3>
                            <button class="ml-auto bg-transparent border-0 text-dark"
                                onclick="toggleModal('modal-id-two')">
                                <span class="bg-transparent stroke-dark block">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-7 h-7 dark:stroke-white stroke-dark">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <div>
                            <img src="assets/img/service/2.jpg" class="h-[350px] object-cover w-full rounded-xl" alt>
                            <h3 class="mt-[37px] text-[30px] font-medium ">Graphic Design</h3>
                            <p class="text-[21px] font-secondary font-medium mt-1">Starts from <span
                                    class="text-custom text-2xl">$199</span></p>
                            <div class="mt-[23px] space-y-5">
                                <p class="text-muted dark:text-darkmuted">Dizme is a leading web design agency with an
                                    award-winning design team that creates innovative, effective websites that capture
                                    your brand, improve your conversion rates, and maximize your revenue to help grow
                                    your business and achieve your goals.</p>
                                <p class="text-muted dark:text-darkmuted">Dizme is a leading web design agency with an
                                    award-winning design team that creates innovative, effective websites that capture
                                    your brand, improve your conversion rates, and maximize your revenue to help grow
                                    your business and achieve your goals.</p>
                                <p class="text-muted dark:text-darkmuted">Dizme is a leading web design agency with an
                                    award-winning design team that creates innovative, effective websites that capture
                                    your brand, improve your conversion rates, and maximize your revenue to help grow
                                    your business and achieve your goals.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden fixed inset-0 z-40 bg-dark/90" id="modal-id-two-backdrop"></div>
        </div>
        <div>
            <div class="hidden overflow-x-hidden fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                id="modal-id-three">
                <div class="relative w-full my-10 mx-auto max-w-[968px] h-[calc(100vh-80px)] py-20">
                    <div
                        class="rounded relative flex flex-col w-full pt-5 overflow-y-auto p-[50px] bg-white dark:bg-[#34353a] outline-none focus:outline-none h-full scrollbar-thumb-dark/25 scrollbar-track-dark/10 scrollbar-thin">
                        <div class="flex items-center justify-between pb-5">
                            <h3 class="text-2xl font-semibold">
                                Services Details
                            </h3>
                            <button class="ml-auto bg-transparent border-0 text-dark"
                                onclick="toggleModal('modal-id-three')">
                                <span class="bg-transparent stroke-dark block">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-7 h-7 dark:stroke-white stroke-dark">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <div>
                            <img src="assets/img/service/3.jpg" class="h-[350px] object-cover w-full rounded-xl" alt>
                            <h3 class="mt-[37px] text-[30px] font-medium ">UI/UX Design</h3>
                            <p class="text-[21px] font-secondary font-medium mt-1">Starts from <span
                                    class="text-custom text-2xl">$299</span></p>
                            <div class="mt-[23px] space-y-5">
                                <p class="text-muted dark:text-darkmuted">Dizme is a leading web design agency with an
                                    award-winning design team that creates innovative, effective websites that capture
                                    your brand, improve your conversion rates, and maximize your revenue to help grow
                                    your business and achieve your goals.</p>
                                <p class="text-muted dark:text-darkmuted">Dizme is a leading web design agency with an
                                    award-winning design team that creates innovative, effective websites that capture
                                    your brand, improve your conversion rates, and maximize your revenue to help grow
                                    your business and achieve your goals.</p>
                                <p class="text-muted dark:text-darkmuted">Dizme is a leading web design agency with an
                                    award-winning design team that creates innovative, effective websites that capture
                                    your brand, improve your conversion rates, and maximize your revenue to help grow
                                    your business and achieve your goals.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden fixed inset-0 z-40 bg-dark/90" id="modal-id-three-backdrop"></div>
        </div>
        <div>
            <div class="hidden overflow-x-hidden fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                id="modal-id-four">
                <div class="relative w-full my-10 mx-auto max-w-[968px] h-[calc(100vh-80px)] py-20">
                    <div
                        class="rounded relative flex flex-col w-full pt-5 overflow-y-auto p-[50px] bg-white dark:bg-[#34353a] outline-none focus:outline-none h-full scrollbar-thumb-dark/25 scrollbar-track-dark/10 scrollbar-thin">
                        <div class="flex items-center justify-between pb-5">
                            <h3 class="text-2xl font-semibold">
                                Services Details
                            </h3>
                            <button class="ml-auto bg-transparent border-0 text-dark"
                                onclick="toggleModal('modal-id-four')">
                                <span class="bg-transparent stroke-dark block">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-7 h-7 dark:stroke-white stroke-dark">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <div>
                            <img src="assets/img/service/4.jpg" class="h-[350px] object-cover w-full rounded-xl" alt>
                            <h3 class="mt-[37px] text-[30px] font-medium ">Web Design</h3>
                            <p class="text-[21px] font-secondary font-medium mt-1">Starts from <span
                                    class="text-custom text-2xl">$399</span></p>
                            <div class="mt-[23px] space-y-5">
                                <p class="text-muted dark:text-darkmuted">Dizme is a leading web design agency with an
                                    award-winning design team that creates innovative, effective websites that capture
                                    your brand, improve your conversion rates, and maximize your revenue to help grow
                                    your business and achieve your goals.</p>
                                <p class="text-muted dark:text-darkmuted">Dizme is a leading web design agency with an
                                    award-winning design team that creates innovative, effective websites that capture
                                    your brand, improve your conversion rates, and maximize your revenue to help grow
                                    your business and achieve your goals.</p>
                                <p class="text-muted dark:text-darkmuted">Dizme is a leading web design agency with an
                                    award-winning design team that creates innovative, effective websites that capture
                                    your brand, improve your conversion rates, and maximize your revenue to help grow
                                    your business and achieve your goals.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden fixed inset-0 z-40 bg-dark/90" id="modal-id-four-backdrop"></div>
        </div>
    </section> --}}


    {{-- <section class="relative pb-[127px] md:pb-[187px]">
        <div class="px-4 lg:px-0 relative z-10">
            <div class="grid grid-cols-1">
                <div class="text-center max-w-[680px] mx-auto">
                    <p class="text-custom text-[20px] md:text-2xl font-medium font-secondary">Testimonials</p>
                    <h3 class="md:text-[48px] text-[35px] leading-[1.25] mb-[23px] mt-1.5">What My Clients Say</h3>
                    <p class="text-muted dark:text-darkmuted text-lg leading-[30px]">Most common methods for designing
                        websites that work well on desktop is responsive and adaptive design</p>
                </div>
            </div>
            <div
                class="grid grid-cols-1 mt-20 relative bg-cover bg-top dark:bg-[url('../img/testimonials/bg-client-dark.html')] bg-[url('../img/testimonials/bg-client.html')]">
                <div id="owl-demo" class="owl-carousel">
                    <div class="text-center max-w-[900px] mx-auto">
                        <div class="mb-[35px]">
                            <img class="!w-[65px] mx-auto" src="assets/img/svg/testimonials/quote.svg" alt />
                        </div>
                        <div>
                            <p class="md:text-[30px] text-xl text-muted dark:text-darkmuted italic leading-[1.6]">
                                I rarely like to write reviews, but the Marketify team truly deserve a standing ovation
                                for their customer support, customisation and most importantly, friendliness and
                                professionalism. Many thanks once
                                again for everything and hope that I get to deal with you again in the near future.
                            </p>
                        </div>
                        <div class="flex items-center gap-[25px] mt-[51px] justify-center">
                            <img src="assets/img/testimonials/4.jpg" class="!w-[60px] rounded-full" alt />
                            <div class="text-start">
                                <h5 class="font-secondary text-2xl font-medium">Mike Anderson</h5>
                                <p class="text-muted dark:text-darkmuted text-base leading-7">Vivaco Studio</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center max-w-[900px] mx-auto">
                        <div class="mb-[35px]">
                            <img class="!w-[65px] mx-auto" src="assets/img/svg/testimonials/quote.svg" alt />
                        </div>
                        <div>
                            <p class="md:text-[30px] text-xl text-muted dark:text-darkmuted italic leading-[1.6]">
                                I rarely like to write reviews, but the Marketify team truly deserve a standing ovation
                                for their customer support, customisation and most importantly, friendliness and
                                professionalism. Many thanks once
                                again for everything and hope that I get to deal with you again in the near future.
                            </p>
                        </div>
                        <div class="flex items-center gap-[25px] mt-[51px] justify-center">
                            <img src="assets/img/testimonials/4.jpg" class="!w-[60px] rounded-full" alt />
                            <div class="text-start">
                                <h5 class="font-secondary text-2xl font-medium">Mike Anderson</h5>
                                <p class="text-muted dark:text-darkmuted text-base leading-7">Vivaco Studio</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center max-w-[900px] mx-auto">
                        <div class="mb-[35px]">
                            <img class="!w-[65px] mx-auto" src="assets/img/svg/testimonials/quote.svg" alt />
                        </div>
                        <div>
                            <p class="md:text-[30px] text-xl text-muted dark:text-darkmuted italic leading-[1.6]">
                                I rarely like to write reviews, but the Marketify team truly deserve a standing ovation
                                for their customer support, customisation and most importantly, friendliness and
                                professionalism. Many thanks once
                                again for everything and hope that I get to deal with you again in the near future.
                            </p>
                        </div>
                        <div class="flex items-center gap-[25px] mt-[51px] justify-center">
                            <img src="assets/img/testimonials/4.jpg" class="!w-[60px] rounded-full" alt />
                            <div class="text-start">
                                <h5 class="font-secondary text-2xl font-medium">Mike Anderson</h5>
                                <p class="text-muted dark:text-darkmuted text-base leading-7">Vivaco Studio</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute right-5 -top-[120px] hidden lg:block wow fadeInRight" data-wow-duration="1s"><img
                src="assets/img/brushes/testimonials/1.png" alt /></div>
    </section> --}}


    {{-- <section class="relative pb-8">
        <div class="container relative z-10">
            <div class="grid grid-cols-2 md:grid-cols-4 border-2 border-[#eee] dark:border-[#555] rounded-[10px]">
                <div class="border-b-2 border-[#eee] dark:border-[#555] wow fadeIn" data-wow-duration="1s">
                    <a href="#"
                        class="opacity-50 hover:opacity-100 cursor-pointer duration-300 h-[180px] flex items-center">
                        <img src="assets/img/partners/dark/1.png" class="mx-auto max-w-[88%] dark:hidden" alt />
                        <img src="assets/img/partners/light/1.png" class="mx-auto max-w-[88%] hidden dark:block"
                            alt />
                    </a>
                </div>
                <div class="border-l-2 border-b-2 border-[#eee] dark:border-[#555] wow fadeIn" data-wow-duration="1s"
                    data-wow-delay="0.2s">
                    <a href="#"
                        class="opacity-50 hover:opacity-100 cursor-pointer duration-300 h-[180px] flex items-center">
                        <img src="assets/img/partners/dark/2.png" class="mx-auto max-w-[88%] dark:hidden" alt />
                        <img src="assets/img/partners/light/2.png" class="mx-auto max-w-[88%] hidden dark:block"
                            alt />
                    </a>
                </div>
                <div class="md:border-l-2 border-b-2 border-[#eee] dark:border-[#555] wow fadeIn"
                    data-wow-duration="1s" data-wow-delay="0.4s">
                    <a href="#"
                        class="opacity-50 hover:opacity-100 cursor-pointer duration-300 h-[180px] flex items-center">
                        <img src="assets/img/partners/dark/3.png" class="mx-auto max-w-[88%] dark:hidden" alt />
                        <img src="assets/img/partners/light/3.png" class="mx-auto max-w-[88%] hidden dark:block"
                            alt />
                    </a>
                </div>
                <div class="border-l-2 border-b-2 border-[#eee] dark:border-[#555] wow fadeIn" data-wow-duration="1s"
                    data-wow-delay="0.6s">
                    <a href="#"
                        class="opacity-50 hover:opacity-100 cursor-pointer duration-300 h-[180px] flex items-center">
                        <img src="assets/img/partners/dark/4.png" class="mx-auto max-w-[88%] dark:hidden" alt />
                        <img src="assets/img/partners/light/4.png" class="mx-auto max-w-[88%] hidden dark:block"
                            alt />
                    </a>
                </div>
                <div class="border-[#eee] dark:border-[#555] border-b-2 md:border-b-0 wow fadeIn"
                    data-wow-duration="1s">
                    <a href="#"
                        class="opacity-50 hover:opacity-100 cursor-pointer duration-300 h-[180px] flex items-center">
                        <img src="assets/img/partners/dark/5.png" class="mx-auto max-w-[88%] dark:hidden" alt />
                        <img src="assets/img/partners/light/5.png" class="mx-auto max-w-[88%] hidden dark:block"
                            alt />
                    </a>
                </div>
                <div class="border-l-2 border-[#eee] dark:border-[#555] border-b md:border-b-0 wow fadeIn"
                    data-wow-duration="1s" data-wow-delay="0.2s">
                    <a href="#"
                        class="opacity-50 hover:opacity-100 cursor-pointer duration-300 h-[180px] flex items-center">
                        <img src="assets/img/partners/dark/6.png" class="mx-auto max-w-[88%] dark:hidden" alt />
                        <img src="assets/img/partners/light/6.png" class="mx-auto max-w-[88%] hidden dark:block"
                            alt />
                    </a>
                </div>
                <div class="md:border-l-2 border-[#eee] dark:border-[#555] wow fadeIn" data-wow-duration="1s"
                    data-wow-delay="0.4s">
                    <a href="#"
                        class="opacity-50 hover:opacity-100 cursor-pointer duration-300 h-[180px] flex items-center">
                        <img src="assets/img/partners/dark/7.png" class="mx-auto max-w-[88%] dark:hidden" alt />
                        <img src="assets/img/partners/light/7.png" class="mx-auto max-w-[88%] hidden dark:block"
                            alt />
                    </a>
                </div>
                <div class="border-l-2 border-[#eee] dark:border-[#555] wow fadeIn" data-wow-duration="1s"
                    data-wow-delay="0.6s">
                    <a href="#"
                        class="opacity-50 hover:opacity-100 cursor-pointer duration-300 h-[180px] flex items-center">
                        <img src="assets/img/partners/dark/8.png" class="mx-auto max-w-[88%] dark:hidden" alt />
                        <img src="assets/img/partners/light/8.png" class="mx-auto max-w-[88%] hidden dark:block"
                            alt />
                    </a>
                </div>
            </div>
        </div>
        <div class="-top-[170px] left-0 absolute hidden lg:block" data-wow-duration="1s"><img
                src="assets/img/brushes/partners/1.png" alt /></div>
    </section> --}}


    {{-- <section class="md:pt-[185px] pt-[120px] pb-[100px] md:pb-[160px] relative" id="blog">
        <div class="container relative z-10">
            <div class="grid grid-cols-1">
                <div class="text-center max-w-[680px] mx-auto">
                    <p class="text-custom text-[20px] md:text-2xl font-medium font-secondary">From My Blog</p>
                    <h3 class="md:text-[48px] text-[35px] leading-[1.25] mb-[23px] mt-1.5">Our Recent Updates, Blog,
                        Tips, Tricks & More</h3>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 pt-[65px] gap-[25px]">
                <div class="wow fadeInUp cursor-pointer" data-wow-duration="1s">
                    <div onclick="toggleModal('modal-id-blog')">
                        <div class="overflow-hidden group rounded-xl relative">
                            <img src="assets/img/news/1.jpg"
                                class="scale-100 rounded-xl object-cover w-full h-full min-h-[303px] duration-300 group-hover:scale-110"
                                alt />
                            <div
                                class="bg-[#1cbe59] top-[18px] right-[18px] z-20 inline-block absolute rounded-xl text-center py-3 px-5">
                                <h3 class="text-2xl text-white leading-[1.2]">23</h3>
                                <span class="text-white text-sm">Dec</span>
                            </div>
                        </div>
                        <div class="mt-5">
                            <p class="text-custom font-medium font-secondary"><a href="#">Web Development</a>
                            </p>
                            <h4 class="mt-1 leading-[1.4] text-[21px]"><a href="#"
                                    class="hover:text-custom">Jim
                                    Morisson Says when the musics over turn off the light</a></h4>
                        </div>
                    </div>
                </div>
                <div class="wow fadeInUp cursor-pointer" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div onclick="toggleModal('modal-id-blog-two')">
                        <div class="overflow-hidden group rounded-xl relative">
                            <img src="assets/img/news/2.jpg"
                                class="scale-100 rounded-xl object-cover w-full h-full min-h-[303px] duration-300 group-hover:scale-110"
                                alt />
                            <div
                                class="bg-[#1cbe59] top-[18px] right-[18px] z-20 inline-block absolute rounded-xl text-center py-3 px-5">
                                <h3 class="text-2xl text-white leading-[1.2]">23</h3>
                                <span class="text-white text-sm">Dec</span>
                            </div>
                        </div>
                        <div class="mt-5">
                            <p class="text-custom font-medium font-secondary"><a href="#">Branding</a></p>
                            <h4 class="mt-1 leading-[1.4] text-[21px]"><a href="#"
                                    class="hover:text-custom">How to be
                                    appreciated for your hard work as a developer</a></h4>
                        </div>
                    </div>
                </div>
                <div class="wow fadeInUp cursor-pointer" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div onclick="toggleModal('modal-id-blog-three')">
                        <div class="overflow-hidden group rounded-xl relative">
                            <img src="assets/img/news/3.jpg"
                                class="scale-100 rounded-xl object-cover w-full h-full min-h-[303px] duration-300 group-hover:scale-110"
                                alt />
                            <div
                                class="bg-[#1cbe59] top-[18px] right-[18px] z-20 inline-block absolute rounded-xl text-center py-3 px-5">
                                <h3 class="text-2xl text-white leading-[1.2]">23</h3>
                                <span class="text-white text-sm">Dec</span>
                            </div>
                        </div>
                        <div class="mt-5">
                            <p class="text-custom font-medium font-secondary"><a href="#">Social Media</a></p>
                            <h4 class="mt-1 leading-[1.4] text-[21px]"><a href="#"
                                    class="hover:text-custom">How
                                    designers and developers can collaborate better</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-[250px] left-[115px] absolute hidden lg:block wow zoomIn" data-wow-duration="1s"><img
                src="assets/img/brushes/news/1.png" alt /></div>
        <div class="top-0 right-0 absolute hidden lg:block wow zoomIn" data-wow-duration="1s"><img
                src="assets/img/brushes/news/2.png" alt /></div>
    </section> --}}


    {{-- <section>
        <div>
            <div class="hidden overflow-x-hidden fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                id="modal-id-blog">
                <div class="relative w-full my-10 mx-auto max-w-[968px] h-[calc(100vh-80px)] py-20">
                    <div
                        class="rounded relative flex flex-col w-full pt-5 overflow-y-auto p-[50px] bg-white dark:bg-[#34353a] outline-none focus:outline-none h-full scrollbar-thumb-dark/25 scrollbar-track-dark/10 scrollbar-thin">
                        <div class="flex items-center justify-between pb-5">
                            <h3 class="text-2xl font-semibold">
                                Blog Details
                            </h3>
                            <button class="ml-auto bg-transparent border-0 text-dark"
                                onclick="toggleModal('modal-id-blog')">
                                <span class="bg-transparent stroke-dark block">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-7 h-7 dark:stroke-white stroke-dark">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <div>
                            <img src="assets/img/news/1.jpg" class="h-[350px] object-cover w-full rounded-xl" alt>
                            <h3 class="mt-[37px] text-[30px] font-medium ">Jim Morisson Says when the musics over turn
                                off the light</h3>
                            <p class="font-secondary text-muted dark:text-darkmuted mt-1">Social Media</p>
                            <div class="mt-[23px] space-y-5">
                                <p class="text-muted dark:text-darkmuted">Dizme is a leading web design agency with an
                                    award-winning design team that creates innovative, effective websites that capture
                                    your brand, improve your conversion rates, and maximize your revenue to help grow
                                    your business and achieve your goals.</p>
                                <p class="text-muted dark:text-darkmuted">Dizme is a leading web design agency with an
                                    award-winning design team that creates innovative, effective websites that capture
                                    your brand, improve your conversion rates, and maximize your revenue to help grow
                                    your business and achieve your goals.</p>
                                <p class="text-muted dark:text-darkmuted">Dizme is a leading web design agency with an
                                    award-winning design team that creates innovative, effective websites that capture
                                    your brand, improve your conversion rates, and maximize your revenue to help grow
                                    your business and achieve your goals.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden fixed inset-0 z-40 bg-dark/90" id="modal-id-blog-backdrop"></div>
        </div>
        <div>
            <div class="hidden overflow-x-hidden fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                id="modal-id-blog-two">
                <div class="relative w-full my-10 mx-auto max-w-[968px] h-[calc(100vh-80px)] py-20">
                    <div
                        class="rounded relative flex flex-col w-full pt-5 overflow-y-auto p-[50px] bg-white dark:bg-[#34353a] outline-none focus:outline-none h-full scrollbar-thumb-dark/25 scrollbar-track-dark/10 scrollbar-thin">
                        <div class="flex items-center justify-between pb-5">
                            <h3 class="text-2xl font-semibold">
                                Blog Details
                            </h3>
                            <button class="ml-auto bg-transparent border-0 text-dark"
                                onclick="toggleModal('modal-id-blog-two')">
                                <span class="bg-transparent stroke-dark block">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-7 h-7 dark:stroke-white stroke-dark">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <div>
                            <img src="assets/img/news/2.jpg" class="h-[350px] object-cover w-full rounded-xl" alt>
                            <h3 class="mt-[37px] text-[30px] font-medium ">How to be appreciated for your hard work as
                                a
                                developer</h3>
                            <p class="font-secondary text-muted dark:text-darkmuted mt-1">Branding</p>
                            <div class="mt-[23px] space-y-5">
                                <p class="text-muted dark:text-darkmuted">Dizme is a leading web design agency with an
                                    award-winning design team that creates innovative, effective websites that capture
                                    your brand, improve your conversion rates, and maximize your revenue to help grow
                                    your business and achieve your goals.</p>
                                <p class="text-muted dark:text-darkmuted">Dizme is a leading web design agency with an
                                    award-winning design team that creates innovative, effective websites that capture
                                    your brand, improve your conversion rates, and maximize your revenue to help grow
                                    your business and achieve your goals.</p>
                                <p class="text-muted dark:text-darkmuted">Dizme is a leading web design agency with an
                                    award-winning design team that creates innovative, effective websites that capture
                                    your brand, improve your conversion rates, and maximize your revenue to help grow
                                    your business and achieve your goals.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden fixed inset-0 z-40 bg-dark/90" id="modal-id-blog-two-backdrop"></div>
        </div>
        <div>
            <div class="hidden overflow-x-hidden fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                id="modal-id-blog-three">
                <div class="relative w-full my-10 mx-auto max-w-[968px] h-[calc(100vh-80px)] py-20">
                    <div
                        class="rounded relative flex flex-col w-full pt-5 overflow-y-auto p-[50px] bg-white dark:bg-[#34353a] outline-none focus:outline-none h-full scrollbar-thumb-dark/25 scrollbar-track-dark/10 scrollbar-thin">
                        <div class="flex items-center justify-between pb-5">
                            <h3 class="text-2xl font-semibold">
                                Blog Details
                            </h3>
                            <button class="ml-auto bg-transparent border-0 text-dark"
                                onclick="toggleModal('modal-id-blog-three')">
                                <span class="bg-transparent stroke-dark block">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-7 h-7 dark:stroke-white stroke-dark">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <div>
                            <img src="assets/img/news/3.jpg" class="h-[350px] object-cover w-full rounded-xl" alt>
                            <h3 class="mt-[37px] text-[30px] font-medium ">How designers and developers can collaborate
                                better</h3>
                            <p class="font-secondary text-muted dark:text-darkmuted mt-1">Social Media</p>
                            <div class="mt-[23px] space-y-5">
                                <p class="text-muted dark:text-darkmuted">Dizme is a leading web design agency with an
                                    award-winning design team that creates innovative, effective websites that capture
                                    your brand, improve your conversion rates, and maximize your revenue to help grow
                                    your business and achieve your goals.</p>
                                <p class="text-muted dark:text-darkmuted">Dizme is a leading web design agency with an
                                    award-winning design team that creates innovative, effective websites that capture
                                    your brand, improve your conversion rates, and maximize your revenue to help grow
                                    your business and achieve your goals.</p>
                                <p class="text-muted dark:text-darkmuted">Dizme is a leading web design agency with an
                                    award-winning design team that creates innovative, effective websites that capture
                                    your brand, improve your conversion rates, and maximize your revenue to help grow
                                    your business and achieve your goals.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden fixed inset-0 z-40 bg-dark/90" id="modal-id-blog-three-backdrop"></div>
        </div>
    </section> --}}


    {{-- <section>
        <div class="container">
            <div class="bg-[url('../img/subscribe/dots.jpg')] relative rounded-xl py-[90px] px-7 md:px-[86px]">
                <div class="bg-[#8067f0]/90 absolute inset-0 rounded-xl"></div>
                <div class="grid grid-cols-1 lg:grid-cols-2 relative gap-y-10 lg:gap-y-0 items-center gap-4">
                    <div class="text-white wow fadeInLeft" data-wow-duration="1s">
                        <p class="md:text-[21px] text-[19px] font-medium font-secondary">Subscribe Now</p>
                        <h4 class="mt-4 text-[35px] md:text-5xl">Get My Newsletter</h4>
                        <p class="mt-4 text-lg">Get latest news, updates, tips and trics in your inbox</p>
                    </div>
                    <div>
                        <div class="relative wow fadeInRight" data-wow-duration="1s">
                            <input type="email" class="form-input custom-mail" placeholder="Your email here" />
                            <input type="submit" value="Send Now" class="sub-btn" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    {{-- <section class="md:pt-[190px] pt-[123px] pb-[120px] md:pb-[200px] relative" id="contact">
        <div class="container">
            <div class="grid grid-cols-1">
                <div class="text-center max-w-[680px] mx-auto">
                    <p class="text-custom text-[20px] md:text-2xl font-medium font-secondary">Contact Me</p>
                    <h3 class="md:text-[48px] text-[35px] leading-[1.25] mb-[23px] mt-1.5">I Want To Hear From You</h3>
                    <p class="text-muted dark:text-darkmuted text-lg leading-[30px]">Please fill out the form on this
                        section to contact with me. Or call between 9:00 a.m. and 8:00 p.m. ET, Monday through Friday
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 mt-20 gap-[25px]">
                <div class="space-y-[15px] wow fadeInLeft" data-wow-duration="1s">
                    <div class="flex items-center gap-[25px]">
                        <div
                            class="shrink-0 h-[88px] w-[88px] leading-[88px] rounded-full bg-[#fedfd7] inline-block text-center text-2xl">
                            <i class="icon-location text-custom"></i>
                        </div>
                        <div>
                            <h5 class="md:text-[30px] text-[25px]">Address</h5>
                            <p class="text-lg mt-1.5 text-muted dark:text-darkmuted leading-8">20, Somewhere in world
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center gap-[25px]">
                        <div
                            class="shrink-0 h-[88px] w-[88px] leading-[88px] rounded-full bg-[#ddf5e6] inline-block text-center text-2xl">
                            <i class="icon-mail-1 text-[#1cbe59]"></i>
                        </div>
                        <div>
                            <h5 class="md:text-[30px] text-[25px]">Email</h5>
                            <p class="text-lg mt-1.5 text-muted dark:text-darkmuted leading-8"><a
                                    href="https://marketifythemes.net/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="acc4c9c0c0c3ecc8c5d6c1c982cfc3c1">[email&#160;protected]</a></p>
                        </div>
                    </div>
                    <div class="flex items-center gap-[25px]">
                        <div
                            class="shrink-0 h-[88px] w-[88px] leading-[88px] rounded-full bg-[#ece8fd] inline-block text-center text-2xl">
                            <i class="icon-phone text-[#8067f0]"></i>
                        </div>
                        <div>
                            <h5 class="md:text-[30px] text-[25px]">Phone</h5>
                            <p class="text-lg mt-1.5 text-muted dark:text-darkmuted leading-8">+123 456 7890</p>
                        </div>
                    </div>
                </div>
                <div class="right wow fadeInRight" data-wow-duration="1s">
                    <form>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <div>
                                <label class="block">
                                    <input type="text" class="form-input" placeholder="Your Name" required />
                                </label>
                            </div>
                            <div>
                                <label class="block">
                                    <input type="email" class="form-input" placeholder="Your Email" required />
                                </label>
                            </div>
                            <div>
                                <label class="block">
                                    <input type="text" class="form-input" placeholder="Your Phone" required />
                                </label>
                            </div>
                            <div>
                                <label class="block">
                                    <input type="text" class="form-input" placeholder="Subject" required />
                                </label>
                            </div>
                            <div class="md:col-span-2">
                                <label class="block">
                                    <textarea class="form-input h-auto" rows="7" placeholder="Write your message here" required></textarea>
                                </label>
                            </div>
                            <div class="md:col-span-2">
                                <label class="block">
                                    <a href="#" class="btn-custom"> Submit Now</a>
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="top-[100px] absolute left-0 hidden lg:block wow fadeInLeft" data-wow-duration="1s"><img
                src="assets/img/brushes/contact/1.png" alt /></div>
        <div class="absolute bottom-[100px] right-[150px] hidden lg:block wow fadeInRight" data-wow-duration="1s"><img
                src="assets/img/brushes/contact/2.png" alt /></div>
    </section> --}}


    {{-- <section class="relative pb-[120px] md:pb-[200px]">
        <div class="container">
            <div class="grid grid-cols-1">
                <div>
                    <div class="mapouter">
                        <div class="gmap_canvas rounded-xl">
                            <iframe width="100%" height="375" id="gmap_canvas"
                                src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <a
                                href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon"></a><br />
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 375px;
                                    width: 100%;
                                }
                            </style>
                            <a href="https://www.embedgooglemap.net/">how to add google map</a>
                            <style>
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 375px;
                                    width: 100%;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    {{-- <section class="py-[60px] relative bg-[#f2f5fb] dark:bg-[#3f4453]">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 items-center">
                <div>
                    <p class="text-muted dark:text-darkmuted text-base text-center md:text-left">Developed with love by
                        <a href="https://themeforest.net/user/marketify" class="font-bold">Marketify</a> © 2022
                    </p>
                </div>
                <div>
                    <ul class="flex items-center gap-10 justify-center md:justify-end text-base">
                        <li>
                            <a href="#"
                                class="text-muted dark:text-darkmuted hover:text-custom duration-300">Terms &
                                Condition </a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-muted dark:text-darkmuted hover:text-custom duration-300">Privacy
                                Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}


    {{-- <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>


    <div class="fixed h-[100px] w-px bottom-[25px] -right-[25px] bg-dark/10 z-10 duration-300 progressbar">
        <a href="#" class="no-underline text-dark"><span
                class="absolute bottom-[100px] left-0 text-[13px] text">To
                Top</span></a>
        <span class="line"></span>
    </div> --}}


    {{-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.6.2.min.js"></script>

    <script src="assets/js/isotope.js"></script>

    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script defer src="../../../unpkg.com/alpinejs%403.13.7/dist/cdn.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/tilt.jquery.js"></script>

    <script src="assets/js/wow.min.js"></script>

    <script src="assets/js/custom.js"></script> --}}
</body>
@endsection