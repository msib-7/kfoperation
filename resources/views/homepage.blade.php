<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title and description -->
    <title>Home | Homepage KalbeFarma</title>
    <!-- meta data -->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo_only.png') }}" type="image/x-icon">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('assets/css/output.css') }}">
    @vite(['resources/css/app.css','resources/js/app.js'])

    <!-- js -->
    <script defer src="{{ asset('assets/js/index.js') }}"></script>
    <script defer src="{{asset('assets/js/observer.js')}}"></script>
</head>

<body class="overflow-x-hidden lg:px-36">
    {{-- Header --}}
    <section class="flex-wrap">
        <!-- header -->
        <header class="bg-silver">
            <!-- seprate navbar for mobiles -->
            <div id="mob-nav"
                class="mobile-only-nav w-full mt-8 md:hidden hidden bg-silver transition-all duration-[1.2s]">
                <div class="nav-links  md:flex items-center ">
                    <ul class="w-full flex gap-9 font-normal flex-col items-center">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#Feature">News</a></li>
                        <li><a href="#testimonial">Departments</a></li>
                        <li><a href="#testimonial">Our Collaborations</a></li>
                    </ul>
                </div>
                <div class="nav-cta flex gap-4 w-full justify-center mt-4">
                    <a class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-sm text  md:block "
                        href="/Contact/">Contact us</a>
                </div>
            </div>
            <!-- navbar -->
            <nav class="flex lg:w-full justify-between p-7">
                <!-- logo for branding -->
                <div class="logo flex items-center">
                    <a href="">
                        <img src="{{asset('assets/img/kalbe_farma.png')}}" alt="nexcent-logo"
                            style="min-width: 50px; max-width: 100px; width: 100%;">
                    </a>
                </div>

                <!-- links for navigation -->
                <div class="nav-links hidden  md:flex items-center ">
                    <ul class=" flex gap-9 font-normal ">
                        <li><a href="">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#news">News</a></li>
                        <li><a href="#departments">Departments</a></li>
                        <li><a href="#collaborations">Our Collaborations</a></li>
                    </ul>
                </div>

                <!-- call to action button -->
                <div class="nav-cta flex gap-4 ">
                    <a class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-sm text hidden md:block"
                        href="/Contact/">Contact us</a>
                </div>


                <div class="reponsive-hamburger-toggler md:hidden ">
                    <button id="nav-toggle-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" height="2rem" fill="currentColor" class="bi bi-list"
                            viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                        </svg>
                    </button>
                </div>

            </nav>
        </header>
    </section>

    <!-- Home Carousel section -->
    <section class="home">
        <div id="default-carousel" class="relative w-full min-h-[75vh]" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative min-h-[75vh] overflow-hidden rounded-lg bg-silver">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out object-cover grid items-center" data-carousel-item>
                    <div class="grid grid-cols-none md:grid-cols-2 md:mr-8 md:ml-8 justify-center items-center">
                        <div>
                            <!-- text content -->
                            <div class="transition-all duration-[1.5s] opacity-0 txt-content md:w-7/8 w-full"
                                data-observerable_elem>
                                <h1 class="text-3xl text-center md:text-5xl font-bold text-d_grey">
                                    To Improve Health <br>
                                    <span class="text-brand_primary"> For A Better Life</span></h1>

                                <div class="flex justify-center">
                                    <a class="text-white bg-brand_primary  pt-2 pb-2 rounded-lg mt-7 text w-[100%] flex justify-center items-center self-end md:w-[8rem] mb-5"
                                        href="/Contact/"><small>Let's get started</small></a>
                                </div>
                            </div>
                        </div>
                        <div class="flex hidden md:inline-flex justify-center">
                            <!-- Elevate Your Business section -->
                            <img data-observerable_elem src="{{asset('assets/illustrations/user smart phone.png')}}"
                                alt="Person using smartphone" class="w-3/5 opacity-0 transition-all duration-[1s]">

                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out object-cover grid items-center" data-carousel-item>
                    <div class="grid grid-cols-none md:grid-cols-2 md:mr-8 md:ml-8 justify-center items-center">
                        <div>
                            <!-- text content -->
                            <div class="transition-all duration-[1.5s] opacity-0 txt-content md:w-7/8 w-full"
                                data-observerable_elem>
                                <h1 class="text-3xl text-center md:text-5xl font-bold text-d_grey">
                                    To Improve Health <br>
                                    <span class="text-brand_primary"> For A Better Life</span></h1>

                                <div class="flex justify-center">
                                    <a class="text-white bg-brand_primary  pt-2 pb-2 rounded-lg mt-7 text w-[100%] flex justify-center items-center self-end md:w-[8rem] mb-5"
                                        href="/Contact/"><small>Let's get started</small></a>
                                </div>
                            </div>
                        </div>
                        <div class="flex hidden md:inline-flex justify-center">
                            <!-- Elevate Your Business section -->
                            <img data-observerable_elem src="{{asset('assets/illustrations/user smart phone.png')}}"
                                alt="Person using smartphone" class="w-3/5 opacity-0 transition-all duration-[1s]">

                        </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('assets/img/format-size.png')}}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        style="object-fit: scale-down;">
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>

                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

    </section>

    {{-- About --}}
    <section class="clients" id="about">
        <div class="col-md-12">
            <div class="flex justify-center item-center">
                <h1 class="text-center text-3xl mt-4 mb-4 font-semibold  transition-all duration-[1.3s]"
                    data-observerable_elem>About</h1>
            </div>
        </div>
        <div class=" md:grid md:grid-cols-2 mr-8 ml-8">
            <!-- text content -->
            <div>
                <h1 class="text-sm md:text-md lg:text-2xl mb-6 md:px-8 justify-center item-center text-justify text-justify transition-all duration-[1s]"
                    data-observerable_elem>
                    Kalbe's Prescription Pharmaceuticals Division operates with a comprehensive approach,
                    spanning production, quality control, and quality assurance to ensure the delivery of
                    safe and effective medications. Production facilities are equipped to manufacture a
                    diverse range of pharmaceutical products, adhering to strict regulatory standards.
                    Rigorous quality control measures are implemented throughout the production process,
                    including testing of raw materials and final products, to maintain consistency and
                    safety. Quality assurance team overseed the implementation of quality systems and
                    processes, ensuring adherence to standard operating procedures and regulatory
                    requirements.

                    Some other Kalbe's top products are Promag, Bioplacenton, Entrostop, Procold, Woods,
                    Xonce, and Zegavit.
                </h1>
            </div>
            <div class="flex flex-wrap justify-end mb-10">
                <img data-observerable_elem src="{{asset('assets/img/img-about.webp')}}" alt="Person using smartphone"
                    class="md:w-70% opacity-0.transition-all duration-[0.3s] hover:scale-105"
                    style="border-radius: 10px;">
            </div>
        </div>
    </section>

    <!-- News -->
    <section class="news" id='news'>
        <!-- heading and subheading -->
        <h1 class="text-center text-3xl font-semibold opacity-0 transition-all duration-[1.3s]" data-observerable_elem>
            Latest News</h1>
        <p class="text-center opacity-0 transition-all duration-[1.3s]" data-observerable_elem>
            See what we've been up to
        </p>

        <div class="client-logos-con flex w-full justify-evenly mt-10 mb-16 flex-wrap">
            <div class="opacity-0.transition-all duration-[1.3s] w-[20%] min-w-[20rem]  grid justify-center ml-4"
                data-observerable_elem="">

                <img class="m-6" src="{{asset('assets/icons/community/Icon-1.png')}}" alt="Community Icon 1">
                <h1 class="text-2xl font-semibold mb-4 ">
                    Membership Organisations
                </h1>
                <p>Our membership management software provides full automation of membership renewals and
                    payments
                </p>
            </div>

            <div class="opacity-0.transition-all duration-[1.3s] w-[20%] min-w-[20rem]  grid justify-center ml-8"
                data-observerable_elem="">

                <img class="m-6" src="{{asset('assets/icons/community/Icon-2.png')}}" alt="Community Icon 2">
                <h1 class="text-2xl font-semibold mb-4 ">National Associations</h1>
                <p>Our membership management software provides full automation of membership renewals and
                    payments
                </p>
            </div>

            <div class="opacity-0.transition-all duration-[1.3s] w-[20%] min-w-[20rem]  grid justify-center ml-8"
                data-observerable_elem="">

                <img class="m-6" src="{{asset('assets/icons/community/Icon-3.png')}}" alt="Community Icon 3">
                <h1 class="text-2xl font-semibold mb-4 ">Clubs And Groups</h1>
                <p>Our membership management software provides full automation of membership renewals and
                    payments
                </p>
            </div>

            <div class="opacity-0.transition-all duration-[1.3s] w-[20%] min-w-[20rem]  grid justify-center ml-8"
                data-observerable_elem="">

                <img class="m-6" src="{{asset('assets/icons/community/Icon-3.png')}}" alt="Community Icon 3">
                <h1 class="text-2xl font-semibold mb-4 ">Clubs And Groups</h1>
                <p>Our membership management software provides full automation of membership renewals and
                    payments
                </p>
            </div>
        </div>
    </section>

    <!-- Achivement -->
    <section class="achivement">
        <!-- heading and subheading -->
        <h1 class="text-center text-3xl mt-4 mb-4 font-semibold opacity-0 transition-all duration-[1.3s]"
            data-observerable_elem>Achivements</h1>

        <div id="default-carousel" class="relative w-full " data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative min-h-[25vh] md:min-h-[30vh] lg:min-h-[65vh] overflow-hidden rounded-lg mr-8 ml-8">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('assets/img/achivement1.png')}}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        style="object-fit: scale-down;">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="{{asset('assets/img/format-size.png')}}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        style="object-fit: scale-down;">
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-800/30 dark:bg-gray-800/30 group-hover:bg-gray/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>

                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-800/30 dark:bg-gray-800/30 group-hover:bg-gray/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </section>

    <!-- Collaboration -->
    <section class="community grid justify-center mt-14 bg-silver" id="collaborations">
        <!-- heading and subheading -->
        <h1 class="text-center text-3xl mt-4 mb-4 font-semibold opacity-0 transition-all duration-[1.3s]"
            data-observerable_elem>Our Collaboration</h1>

        <!-- community cards container -->
        <div class="grid md:grid-cols-2 md:gap-4 lg:gap-8 mb-12 mx-8">
            <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                <a href="https://planttechdev.wixstudio.io/qualityculture"
                    class="mt-2 block max-w-sm md:max-w-md lg:max-w-lg p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <svg class="w-7 h-7 text-brand_primary mb-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z" />
                    </svg>
                    <h5
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white opacity-0.transition-all duration-[0.2s] hover:text-brand_primary">
                        Quality Culture
                    </h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">
                        Unlike other companies, we are a UX first development company. Projects are driven by designers
                        and
                        they make sure design and experiences translate to code.
                    </p>
                </a>
            </div>
            <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                <a href="https://planttechdev.wixstudio.io/pembelajarankaryawan"
                    class="mt-2 block max-w-sm md:max-w-md lg:max-w-lg p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <svg class="w-7 h-7 text-brand_primary mb-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                        <path
                            d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                        <path
                            d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                    </svg>

                    <h5
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white opacity-0.transition-all duration-[0.2s] hover:text-brand_primary">
                        Ruang Belajar
                    </h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">
                        Unlike other companies, we are a UX first development company. Projects are driven by designers
                        and
                        they make sure design and experiences translate to code.
                    </p>
                </a>
            </div>
            <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                <a href="https://planttechdev.wixstudio.io/website-45"
                    class="mt-2 block max-w-sm md:max-w-md lg:max-w-lg p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <svg class="w-7 h-7 text-brand_primary mb-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025.75.75 0 0 1 .313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 0 1 1.248.313 5.25 5.25 0 0 1-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 1 1 2.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0 1 12 6.75ZM4.117 19.125a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Z"
                            clip-rule="evenodd" />
                        <path
                            d="m10.076 8.64-2.201-2.2V4.874a.75.75 0 0 0-.364-.643l-3.75-2.25a.75.75 0 0 0-.916.113l-.75.75a.75.75 0 0 0-.113.916l2.25 3.75a.75.75 0 0 0 .643.364h1.564l2.062 2.062 1.575-1.297Z" />
                        <path fill-rule="evenodd"
                            d="m12.556 17.329 4.183 4.182a3.375 3.375 0 0 0 4.773-4.773l-3.306-3.305a6.803 6.803 0 0 1-1.53.043c-.394-.034-.682-.006-.867.042a.589.589 0 0 0-.167.063l-3.086 3.748Zm3.414-1.36a.75.75 0 0 1 1.06 0l1.875 1.876a.75.75 0 1 1-1.06 1.06L15.97 17.03a.75.75 0 0 1 0-1.06Z"
                            clip-rule="evenodd" />
                    </svg>

                    <h5
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white opacity-0.transition-all duration-[0.2s] hover:text-brand_primary">
                        OPEX
                    </h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">
                        Unlike other companies, we are a UX first development company. Projects are driven by designers
                        and
                        they make sure design and experiences translate to code.
                    </p>
                </a>
            </div>
            <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                <a href="https://planttechdev.wixstudio.io/pembelajarankaryawan/blank-1"
                    class="mt-2 block max-w-sm md:max-w-md lg:max-w-lg p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <svg class="w-7 h-7 text-brand_primary mb-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 .75a8.25 8.25 0 0 0-4.135 15.39c.686.398 1.115 1.008 1.134 1.623a.75.75 0 0 0 .577.706c.352.083.71.148 1.074.195.323.041.6-.218.6-.544v-4.661a6.714 6.714 0 0 1-.937-.171.75.75 0 1 1 .374-1.453 5.261 5.261 0 0 0 2.626 0 .75.75 0 1 1 .374 1.452 6.712 6.712 0 0 1-.937.172v4.66c0 .327.277.586.6.545.364-.047.722-.112 1.074-.195a.75.75 0 0 0 .577-.706c.02-.615.448-1.225 1.134-1.623A8.25 8.25 0 0 0 12 .75Z" />
                        <path fill-rule="evenodd"
                            d="M9.013 19.9a.75.75 0 0 1 .877-.597 11.319 11.319 0 0 0 4.22 0 .75.75 0 1 1 .28 1.473 12.819 12.819 0 0 1-4.78 0 .75.75 0 0 1-.597-.876ZM9.754 22.344a.75.75 0 0 1 .824-.668 13.682 13.682 0 0 0 2.844 0 .75.75 0 1 1 .156 1.492 15.156 15.156 0 0 1-3.156 0 .75.75 0 0 1-.668-.824Z"
                            clip-rule="evenodd" />
                    </svg>


                    <h5
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white opacity-0.transition-all duration-[0.2s] hover:text-brand_primary">
                        Dynamic Training
                    </h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">
                        Unlike other companies, we are a UX first development company. Projects are driven by designers
                        and
                        they make sure design and experiences translate to code.
                    </p>
                </a>
            </div>
        </div>
    </section>

    <!-- Departments -->
    <section class="community grid justify-center mt-14" id="departments">
        <!-- heading and subheading -->
        <h1 class="text-center text-3xl mt-4 mb-4 font-semibold opacity-0 transition-all duration-[1.3s]"
            data-observerable_elem>Departments</h1>
        <!-- community cards container -->

        <div class="grid md:grid-cols-2 md:gap-4 lg:grid-cols-3 lg:gap-8 mx-8">
            <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                <div
                    class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{asset('assets/img/departments1.jpeg')}}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5
                                class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mb-10 md:text-3xl">
                                Production
                            </h5>
                        </a>
                        <br>
                        <a class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-md text min-w-[7rem] opacity-0 transition-all duration-[1.2s] flex justify-center"
                            data-observerable_elem href="../contact">Read more</a>
                    </div>
                </div>
            </div>
            <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                <div
                    class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{asset('assets/img/departments1.jpeg')}}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5
                                class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mb-10">
                                Human Capital Operation
                            </h5>
                        </a>
                        <br>
                        <a class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-md text min-w-[7rem] opacity-0 transition-all duration-[1.2s] flex justify-center"
                            data-observerable_elem href="../contact">Read more</a>
                    </div>
                </div>
            </div>
            <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                <div
                    class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{asset('assets/img/departments1.jpeg')}}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5
                                class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mb-10">
                                Technical Support
                            </h5>
                        </a>
                        <br>
                        <a class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-md text min-w-[7rem] opacity-0 transition-all duration-[1.2s] flex justify-center"
                            data-observerable_elem href="../contact">Read more</a>
                    </div>
                </div>
            </div>
            <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                <div
                    class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{asset('assets/img/departments1.jpeg')}}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5
                                class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mb-10">
                                Logistics
                            </h5>
                        </a>
                        <br>
                        <a class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-md text min-w-[7rem] opacity-0 transition-all duration-[1.2s] flex justify-center"
                            data-observerable_elem href="../contact">Read more</a>
                    </div>
                </div>
            </div>
            <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                <div
                    class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{asset('assets/img/departments1.jpeg')}}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5
                                class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mb-10">
                                Quality System
                            </h5>
                        </a>
                        <br>
                        <a class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-md text min-w-[7rem] opacity-0 transition-all duration-[1.2s] flex justify-center"
                            data-observerable_elem href="../contact">Read more</a>
                    </div>
                </div>
            </div>
            <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                <div
                    class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{asset('assets/img/departments1.jpeg')}}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5
                                class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mb-10">
                                Manufacturing System Development
                            </h5>
                        </a>
                        <br>
                        <a class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-md text min-w-[7rem] opacity-0 transition-all duration-[1.2s] flex justify-center"
                            data-observerable_elem href="../contact">Read more</a>
                    </div>
                </div>
            </div>
            <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                <div
                    class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{asset('assets/img/departments1.jpeg')}}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5
                                class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mb-10">
                                Quality Assurance
                            </h5>
                        </a>
                        <br>
                        <a class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-md text min-w-[7rem] opacity-0 transition-all duration-[1.2s] flex justify-center"
                            data-observerable_elem href="../contact">Read more</a>
                    </div>
                </div>
            </div>
            <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                <div
                    class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{asset('assets/img/departments1.jpeg')}}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5
                                class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mb-10">
                                Quality Control
                            </h5>
                        </a>
                        <br>
                        <a class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-md text min-w-[7rem] opacity-0 transition-all duration-[1.2s] flex justify-center"
                            data-observerable_elem href="../contact">Read more</a>
                    </div>
                </div>
            </div>
            <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                <div
                    class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{asset('assets/img/departments1.jpeg')}}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5
                                class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mb-10">
                                General Affairs
                            </h5>
                        </a>
                        <br>
                        <a class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-md text min-w-[7rem] opacity-0 transition-all duration-[1.2s] flex justify-center"
                            data-observerable_elem href="../contact">Read more</a>
                    </div>
                </div>
            </div>
            <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                <div
                    class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{asset('assets/img/departments1.jpeg')}}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5
                                class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mb-10">
                                Finance
                            </h5>
                        </a>
                        <br>
                        <a class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-md text min-w-[7rem] opacity-0 transition-all duration-[1.2s] flex justify-center"
                            data-observerable_elem href="../contact">Read more</a>
                    </div>
                </div>
            </div>
            <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                <div
                    class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{asset('assets/img/departments1.jpeg')}}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5
                                class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mb-10">
                                Purchasing
                            </h5>
                        </a>
                        <br>
                        <a class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-md text min-w-[7rem] opacity-0 transition-all duration-[1.2s] flex justify-center"
                            data-observerable_elem href="../contact">Read more</a>
                    </div>
                </div>
            </div>
            <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                <div
                    class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{asset('assets/img/departments1.jpeg')}}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5
                                class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mb-10">
                                Engineering
                            </h5>
                        </a>
                        <br>
                        <a class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-md text min-w-[7rem] opacity-0 transition-all duration-[1.2s] flex justify-center"
                            data-observerable_elem href="../contact">Read more</a>
                    </div>
                </div>
            </div>
            <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                <div
                    class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{asset('assets/img/departments1.jpeg')}}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5
                                class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mb-10">
                                Research and Development
                            </h5>
                        </a>
                        <br>
                        <a class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-md text min-w-[7rem] opacity-0 transition-all duration-[1.2s] flex justify-center"
                            data-observerable_elem href="../contact">Read more</a>
                    </div>
                </div>
            </div>
            <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                <div
                    class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{asset('assets/img/departments1.jpeg')}}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5
                                class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mb-10">
                                Technical Service
                            </h5>
                        </a>
                        <br>
                        <a class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-md text min-w-[7rem] opacity-0 transition-all duration-[1.2s] flex justify-center"
                            data-observerable_elem href="../contact">Read more</a>
                    </div>
                </div>
            </div>
            <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                <div
                    class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{asset('assets/img/departments1.jpeg')}}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5
                                class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mb-10">
                                PPIC
                            </h5>
                        </a>
                        <br>
                        <a class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-md text min-w-[7rem] opacity-0 transition-all duration-[1.2s] flex justify-center"
                            data-observerable_elem href="../contact">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quote -->
    <section class=" h-[30vh] flex flex-col justify-center items-center p-4 gap-3 bg-silver">
        <h1
            class="text-3xl md:text-5xl font-bold text-center pt-4 hover:decoration-dotted hover:decoration-brand_primary hover:underline underline-offset-4">
            To Improve Health <br><span class="text-brand_primary">For A Better Life</span>
        </h1>
    </section>

    <!-- footer-->
    <footer class="min-h-96 flex bg-brand_black text-white items-center flex-col">
        <!-- brand and copyright -->
        <div class="flex flex-col w-[100%] md:w-[80%] md:justify-start">

            <!-- brand icon -->
            <img src="{{asset('assets/img/kalbe_farma_svg.svg')}}" alt="KalbeFarma" class="w-44 mt-10 mb-5">

            <p>
                Factory <br>
                Kawasan Industri Delta Silicon Lippo, Jl. MH. <br>
                Thamrin No.1, Sukaresmi, Cikarang Sel.,<br>
                Kabupaten Bekasi, Jawa Barat 17530
            </p>
            <p>
                <small>
                    Copyright &copy; <span id="footer_current_year"></span> Technical Support. <br> All rights reserved
                </small>
            </p>
            <br>
            <p>
                <svg width="176" height="32" viewBox="0 0 176 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_303_1429)">
                        <a href="">
                            <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd"
                                d="M0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16Z"
                                fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M16.0008 7.46655C13.6833 7.46655 13.3924 7.47669 12.4822 7.51811C11.5737 7.55971 10.9536 7.70353 10.4111 7.91456C9.84981 8.13252 9.37372 8.42407 8.8994 8.89857C8.42473 9.37288 8.13317 9.84898 7.9145 10.41C7.70294 10.9528 7.55894 11.5731 7.51805 12.4812C7.47734 13.3914 7.46667 13.6824 7.46667 16C7.46667 18.3175 7.47699 18.6075 7.51823 19.5177C7.56001 20.4262 7.70383 21.0462 7.91468 21.5888C8.13282 22.1501 8.42437 22.6262 8.89887 23.1005C9.37301 23.5752 9.8491 23.8674 10.41 24.0854C10.9529 24.2964 11.5732 24.4402 12.4815 24.4818C13.3917 24.5233 13.6824 24.5334 15.9997 24.5334C18.3175 24.5334 18.6074 24.5233 19.5176 24.4818C20.4261 24.4402 21.0469 24.2964 21.5898 24.0854C22.1509 23.8674 22.6263 23.5752 23.1004 23.1005C23.5751 22.6262 23.8667 22.1501 24.0853 21.589C24.2951 21.0462 24.4391 20.426 24.4818 19.5179C24.5227 18.6076 24.5333 18.3175 24.5333 16C24.5333 13.6824 24.5227 13.3916 24.4818 12.4814C24.4391 11.5729 24.2951 10.9528 24.0853 10.4102C23.8667 9.84898 23.5751 9.37288 23.1004 8.89857C22.6258 8.4239 22.1511 8.13234 21.5893 7.91456C21.0453 7.70353 20.4249 7.55971 19.5164 7.51811C18.6062 7.47669 18.3164 7.46655 15.9981 7.46655H16.0008ZM15.2353 9.00432C15.4625 9.00397 15.716 9.00432 16.0008 9.00432C18.2792 9.00432 18.5492 9.0125 19.449 9.05339C20.281 9.09143 20.7326 9.23046 21.0334 9.34726C21.4316 9.50193 21.7155 9.68682 22.014 9.98549C22.3127 10.2842 22.4976 10.5686 22.6526 10.9668C22.7694 11.2673 22.9086 11.7188 22.9464 12.5508C22.9873 13.4504 22.9962 13.7206 22.9962 15.998C22.9962 18.2754 22.9873 18.5456 22.9464 19.4451C22.9084 20.2772 22.7694 20.7287 22.6526 21.0292C22.4979 21.4274 22.3127 21.7109 22.014 22.0094C21.7153 22.3081 21.4318 22.493 21.0334 22.6477C20.7329 22.765 20.281 22.9037 19.449 22.9417C18.5494 22.9826 18.2792 22.9915 16.0008 22.9915C13.7222 22.9915 13.4521 22.9826 12.5526 22.9417C11.7205 22.9033 11.269 22.7643 10.968 22.6475C10.5698 22.4928 10.2853 22.3079 9.98666 22.0093C9.68799 21.7106 9.5031 21.4269 9.34808 21.0284C9.23128 20.728 9.09208 20.2764 9.05421 19.4444C9.01332 18.5449 9.00514 18.2746 9.00514 15.9959C9.00514 13.7171 9.01332 13.4483 9.05421 12.5487C9.09226 11.7167 9.23128 11.2651 9.34808 10.9643C9.50275 10.5661 9.68799 10.2817 9.98666 9.983C10.2853 9.68433 10.5698 9.49944 10.968 9.34441C11.2688 9.22708 11.7205 9.08841 12.5526 9.05019C13.3398 9.01463 13.6448 9.00397 15.2353 9.00219V9.00432ZM20.5558 10.4212C19.9905 10.4212 19.5318 10.8794 19.5318 11.4449C19.5318 12.0102 19.9905 12.4689 20.5558 12.4689C21.1212 12.4689 21.5799 12.0102 21.5799 11.4449C21.5799 10.8795 21.1212 10.4212 20.5558 10.4212ZM16.0008 11.6177C13.5807 11.6177 11.6186 13.5798 11.6186 16C11.6186 18.4201 13.5807 20.3813 16.0008 20.3813C18.4209 20.3813 20.3824 18.4201 20.3824 16C20.3824 13.5798 18.4209 11.6177 16.0008 11.6177ZM16.0008 13.1555C17.5717 13.1555 18.8453 14.4289 18.8453 16C18.8453 17.5708 17.5717 18.8444 16.0008 18.8444C14.4298 18.8444 13.1563 17.5708 13.1563 16C13.1563 14.4289 14.4298 13.1555 16.0008 13.1555Z"
                                fill="white" />
                        </a>
                        <a href="">
                            <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd"
                                d="M48 16C48 7.16344 55.1634 0 64 0C72.8366 0 80 7.16344 80 16C80 24.8366 72.8366 32 64 32C55.1634 32 48 24.8366 48 16Z"
                                fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M72.5333 15.9881C72.5333 16.5651 72.4746 17.1414 72.3592 17.7032C72.2467 18.2516 72.08 18.79 71.8617 19.3047C71.6483 19.8103 71.3837 20.2975 71.0745 20.7518C70.77 21.2033 70.4191 21.6269 70.0337 22.013C69.6474 22.3975 69.2224 22.7474 68.7711 23.0532C68.3152 23.3603 67.8273 23.6245 67.3215 23.8388C66.806 24.056 66.2664 24.2224 65.7184 24.3348C65.1559 24.4505 64.5776 24.5095 63.9996 24.5095C63.4213 24.5095 62.8429 24.4505 62.2812 24.3348C61.7324 24.2224 61.1928 24.056 60.6778 23.8388C60.1719 23.6245 59.6836 23.3603 59.2277 23.0532C58.7764 22.7474 58.3514 22.3975 57.966 22.013C57.5801 21.6269 57.2293 21.2033 56.9243 20.7518C56.6167 20.2975 56.3517 19.8102 56.1376 19.3047C55.9192 18.79 55.7521 18.2516 55.6392 17.7032C55.525 17.1414 55.4667 16.5651 55.4667 15.9881C55.4667 15.4105 55.525 14.833 55.6392 14.2725C55.7521 13.7241 55.9192 13.1848 56.1376 12.671C56.3518 12.165 56.6168 11.6774 56.9243 11.223C57.2293 10.7711 57.5802 10.3484 57.966 9.96183C58.3515 9.57734 58.7765 9.22828 59.2278 8.92287C59.6836 8.61453 60.172 8.35035 60.6778 8.13563C61.1929 7.91797 61.7324 7.75115 62.2812 7.63965C62.8429 7.52482 63.4213 7.46655 63.9997 7.46655C64.5776 7.46655 65.1559 7.52482 65.7185 7.63965C66.2664 7.75118 66.806 7.91801 67.3215 8.13563C67.8273 8.35032 68.3153 8.61453 68.7711 8.92287C69.2224 9.22828 69.6475 9.57734 70.0337 9.96183C70.4191 10.3484 70.77 10.7711 71.0746 11.223C71.3837 11.6774 71.6483 12.1651 71.8617 12.671C72.08 13.1848 72.2467 13.7241 72.3592 14.2725C72.4746 14.833 72.5333 15.4105 72.5333 15.9881ZM60.8903 9.40593C58.8581 10.3642 57.3413 12.2341 56.8684 14.4876C57.0605 14.4893 60.0973 14.5276 63.5962 13.5993C62.3349 11.3615 60.9874 9.53537 60.8903 9.40593ZM64.2 14.7198C60.4477 15.8416 56.8471 15.7609 56.718 15.7559C56.7159 15.8341 56.7121 15.9098 56.7121 15.988C56.7121 17.8575 57.4184 19.5618 58.5793 20.8505C58.5768 20.8467 60.5711 17.3137 64.5038 16.0438C64.5988 16.0122 64.6955 15.9839 64.7913 15.9564C64.6084 15.5429 64.4087 15.1284 64.2 14.7198ZM68.8124 10.5265C67.5293 9.39677 65.8447 8.71152 63.9996 8.71152C63.4075 8.71152 62.8329 8.78309 62.2824 8.9154C62.3916 9.06188 63.7604 10.8752 65.0067 13.1603C67.7565 12.1309 68.7944 10.5531 68.8124 10.5265ZM65.288 17.1622C65.2718 17.1676 65.2556 17.1723 65.2397 17.1781C60.94 18.6748 59.5358 21.6913 59.5206 21.7242C60.7578 22.685 62.3096 23.2646 63.9996 23.2646C65.0088 23.2646 65.9701 23.0594 66.8448 22.6879C66.7368 22.0521 66.3135 19.8235 65.288 17.1622ZM68.0719 22.023C69.7082 20.9204 70.8703 19.1695 71.1945 17.1414C71.0445 17.0931 69.0057 16.4486 66.6535 16.8252C67.6093 19.4482 67.9977 21.5844 68.0719 22.023ZM65.5676 14.2446C65.7368 14.5917 65.9006 14.9449 66.0518 15.2998C66.1056 15.4272 66.1581 15.552 66.2093 15.6768C68.7128 15.3622 71.1792 15.8915 71.2846 15.9131C71.2679 14.188 70.65 12.6048 69.6275 11.3653C69.6137 11.3848 68.4449 13.0712 65.5676 14.2446Z"
                                fill="white" />
                        </a>
                        <a href="">
                            <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd"
                                d="M96 16C96 7.16344 103.163 0 112 0C120.837 0 128 7.16344 128 16C128 24.8366 120.837 32 112 32C103.163 32 96 24.8366 96 16Z"
                                fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M111.521 13.0051L111.554 13.5587L110.995 13.4909C108.958 13.2311 107.178 12.3498 105.668 10.8696L104.929 10.1352L104.739 10.6776C104.336 11.8865 104.593 13.1633 105.433 14.022C105.88 14.4965 105.779 14.5643 105.007 14.2819C104.739 14.1915 104.504 14.1237 104.481 14.1576C104.403 14.2367 104.672 15.2648 104.884 15.6716C105.175 16.2365 105.768 16.7902 106.417 17.1178L106.966 17.3777L106.317 17.389C105.69 17.389 105.668 17.4003 105.735 17.6376C105.959 18.372 106.843 19.1516 107.828 19.4906L108.521 19.7278L107.917 20.0894C107.022 20.6091 105.97 20.9029 104.918 20.9255C104.414 20.9368 104 20.982 104 21.0159C104 21.1289 105.365 21.7616 106.16 22.0102C108.544 22.7446 111.375 22.4282 113.502 21.1741C115.013 20.2815 116.523 18.5076 117.229 16.7902C117.609 15.875 117.99 14.2028 117.99 13.4006C117.99 12.8808 118.023 12.813 118.65 12.1916C119.019 11.83 119.366 11.4346 119.433 11.3216C119.545 11.1069 119.534 11.1069 118.963 11.299C118.012 11.638 117.878 11.5928 118.348 11.0843C118.695 10.7228 119.109 10.0674 119.109 9.87536C119.109 9.84146 118.941 9.89796 118.751 9.99964C118.549 10.1126 118.102 10.2821 117.766 10.3838L117.161 10.5759L116.613 10.203C116.311 9.99964 115.886 9.77367 115.662 9.70588C115.091 9.5477 114.218 9.57029 113.703 9.75107C112.304 10.2595 111.42 11.5702 111.521 13.0051Z"
                                fill="white" />
                        </a>
                        <a href="">
                            <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd"
                                d="M144 16C144 7.16344 151.163 0 160 0C168.837 0 176 7.16344 176 16C176 24.8366 168.837 32 160 32C151.163 32 144 24.8366 144 16Z"
                                fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M166.668 10.4995C167.402 10.701 167.98 11.2948 168.177 12.0488C168.533 13.4153 168.533 16.2666 168.533 16.2666C168.533 16.2666 168.533 19.1178 168.177 20.4845C167.98 21.2385 167.402 21.8322 166.668 22.0338C165.337 22.4 160 22.4 160 22.4C160 22.4 154.663 22.4 153.332 22.0338C152.598 21.8322 152.019 21.2385 151.823 20.4845C151.467 19.1178 151.467 16.2666 151.467 16.2666C151.467 16.2666 151.467 13.4153 151.823 12.0488C152.019 11.2948 152.598 10.701 153.332 10.4995C154.663 10.1333 160 10.1333 160 10.1333C160 10.1333 165.337 10.1333 166.668 10.4995ZM158.4 13.8666V19.1999L162.667 16.5333L158.4 13.8666Z"
                                fill="white" />
                        </a>
                    </g>
                    <defs>
                        <clipPath id="clip0_303_1429">
                            <rect width="176" height="32" fill="white" />
                        </clipPath>
                    </defs>
                </svg>

            </p>
        </div>
    </footer>

</body>

</html>
