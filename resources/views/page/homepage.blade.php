<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    @include('layout.head')
</head>

<body class="overflow-x-hidden lg:px-36">
    {{-- Header --}}
    <section class="flex-wrap">
        @include('layout.header')
    </section>

    <!-- Home Carousel section -->
    <section class="home">
        <div id="default-carousel" class="relative w-full min-h-[75vh] pb-10" data-carousel="slide">
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
        <div class="mt-8">
            <div class="flex justify-center item-center">
                <h1 class="text-center text-xl lg:text-3xl mt-4 mb-4 font-semibold  transition-all duration-[1.3s]"
                    data-observerable_elem>About</h1>
            </div>
        </div>
        <div class=" md:grid md:grid-cols-2 mx-8 my-8">
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
                    class="md:w-70% shadow-xl opacity-0.transition-all duration-[0.3s] hover:scale-105"
                    style="border-radius: 10px;">
            </div>
        </div>
    </section>

    <!-- News -->
    <section class="news" id='news'>
        <!-- heading and subheading -->
        <h1 class="text-center text-xl lg:text-3xl font-semibold mt-16 opacity-0 transition-all duration-[1.3s]"
            data-observerable_elem>
            Latest News</h1>
        <p class="text-center opacity-0 transition-all duration-[1.3s]" data-observerable_elem>
            See what we've been up to
        </p>

        <div class="grid md:grid-cols-2 md:gap-4 lg:grid-cols-4 lg:gap-8 mb-12 mx-8">
            <div class="opacity-0.transition-all duration-[0.2s] hover:scale-105">
                <div class="mt-2 block max-w-sm md:max-w-md lg:max-w-lg p-6 bg-white border border-gray-200 rounded-lg shadow"
                    data-observerable_elem="">

                    <img class="mx-6" src="{{asset('assets/icons/community/Icon-1.png')}}" alt="Community Icon 1">
                    <h1 class="text-md lg:text-2xl font-semibold mb-4 ">
                        Membership Organisations
                    </h1>
                    <p class="text-sm md:text-md lg:text-lg">Our membership management software provides full
                        automation of membership renewals and
                        payments
                    </p>
                </div>
            </div>
            <div class="opacity-0.transition-all duration-[0.2s] hover:scale-105">
                <div class="mt-2 block max-w-sm md:max-w-md lg:max-w-lg p-6 bg-white border border-gray-200 rounded-lg shadow"
                    data-observerable_elem="">

                    <img class="mx-6" src="{{asset('assets/icons/community/Icon-2.png')}}" alt="Community Icon 2">
                    <h1 class="text-md lg:text-2xl font-semibold mb-4 ">National Associations</h1>
                    <p class="text-sm md:text-md lg:text-lg">Our membership management software provides full
                        automation of membership renewals and
                        payments
                    </p>
                </div>
            </div>
            <div class="opacity-0.transition-all duration-[0.2s] hover:scale-105">
                <div class="mt-2 block max-w-sm md:max-w-md lg:max-w-lg p-6 bg-white border border-gray-200 rounded-lg shadow"
                    data-observerable_elem="">

                    <img class="mx-6" src="{{asset('assets/icons/community/Icon-3.png')}}" alt="Community Icon 3">
                    <h1 class="text-md lg:text-2xl font-semibold mb-4 ">Clubs And Groups</h1>
                    <p class="text-sm md:text-md lg:text-lg">Our membership management software provides full
                        automation of membership renewals and
                        payments
                    </p>
                </div>
            </div>
            <div class="opacity-0.transition-all duration-[0.2s] hover:scale-105">
                <div class="mt-2 block max-w-sm md:max-w-md lg:max-w-lg p-6 bg-white border border-gray-200 rounded-lg shadow"
                    data-observerable_elem="">

                    <img class="mx-6" src="{{asset('assets/icons/community/Icon-3.png')}}" alt="Community Icon 3">
                    <h1 class="text-md lg:text-2xl font-semibold mb-4 ">Clubs And Groups</h1>
                    <p class="text-sm md:text-md lg:text-lg">Our membership management software provides full
                        automation of membership renewals and
                        payments
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Achivement -->
    <section class="achivement">
        <!-- heading and subheading -->
        <h1 class="text-center text-xl lg:text-3xl mt-4 mb-4 font-semibold opacity-0 transition-all duration-[1.3s]"
            data-observerable_elem>Achivements</h1>

        <div id="default-carousel" class="relative w-full " data-carousel="slide">
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
        <h1 class="text-center text-xl lg:text-3xl mt-4 mb-4 font-semibold opacity-0 transition-all duration-[1.3s]"
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
                        class="mb-2 text-md lg:text-2xl font-bold tracking-tight text-gray-900 dark:text-white opacity-0.transition-all duration-[0.2s] hover:text-brand_primary">
                        Quality Culture
                    </h5>
                    <p class="text-sm md:text-md lg:text-lg font-normal text-gray-700 dark:text-gray-400">
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
                        class="mb-2 text-md lg:text-2xl font-bold tracking-tight text-gray-900 dark:text-white opacity-0.transition-all duration-[0.2s] hover:text-brand_primary">
                        Ruang Belajar
                    </h5>
                    <p class="text-sm md:text-md lg:text-lg font-normal text-gray-700 dark:text-gray-400">
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
                        class="mb-2 text-md lg:text-2xl font-bold tracking-tight text-gray-900 dark:text-white opacity-0.transition-all duration-[0.2s] hover:text-brand_primary">
                        OPEX
                    </h5>
                    <p class="text-sm md:text-md lg:text-lg font-normal text-gray-700 dark:text-gray-400">
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
                        class="mb-2 text-md lg:text-2xl font-bold tracking-tight text-gray-900 dark:text-white opacity-0.transition-all duration-[0.2s] hover:text-brand_primary">
                        Dynamic Training
                    </h5>
                    <p class="text-sm md:text-md lg:text-lg font-normal text-gray-700 dark:text-gray-400">
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
        <h1 class="text-center text-xl lg:text-3xl mt-4 mb-4 font-semibold opacity-0 transition-all duration-[1.3s]"
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
    @include('layout.footer')

</body>

</html>
