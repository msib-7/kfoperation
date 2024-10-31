<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    @include('layout.head')
</head>

<body class="overflow-x-hidden bg-silver"
    style="background-image: url('/assets/img/bglineB.svg'); background-repeat: repeat-y;">
    {{-- Header --}}
    <section>
        @include('layout.header')
    </section>

    <!-- Home Carousel section -->
    <section class="home" id="home">
        <div id="default-carousel" class="relative w-full h-[40vh] lg:h-[96vh] pt-[15vh] lg:pt-[1vh]"
            data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative min-h-full overflow-hidden">
                <!-- Item 1 -->
                {{-- <div class="hidden duration-700 ease-in-out object-cover grid items-center" data-carousel-item>
                    <div class="grid grid-cols-none md:grid-cols-2 md:mr-8 md:ml-8 justify-center items-center">
                        <div>
                            <!-- text content -->
                            <div class="transition-all duration-[0.2s] opacity-0 txt-content md:w-7/8 w-full"
                                data-observerable_elem>
                                <h1 class="text-3xl text-center md:text-6xl font-bold text-d_grey">
                                    To Improve Health <br>
                                    <span class="text-brand_primary"> For A Better Life</span></h1>

                                <div class="flex justify-center">
                                    <a class="text-white bg-brand_primary  pt-2 pb-2 rounded-lg mt-7 text w-[100%] flex justify-center items-center self-end md:w-[8rem] mb-5"
                                        href="#home"><small>Let's get started</small></a>
                                </div>
                            </div>
                        </div>
                        <div class="flex hidden md:inline-flex justify-center">
                            <!-- Elevate Your Business section -->
                            <img data-observerable_elem src="{{asset('assets/illustrations/carousel2.png')}}"
                alt="Person using smartphone" class="w-3/5 opacity-0 transition-all duration-[0.2s]">

            </div>
        </div>
        </div> --}}
        <!-- Item 2 -->
        @foreach ($dataCarousel as $data)
        <div class="hidden duration-700 ease-in-out object-cover grid items-center" data-carousel-item>
            <img src="{{asset('assets/img/carousel/'.$data->carousel_img)}}"
                class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2 object-contain h-full">
        </div>
        @endforeach
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor"
                    class="size-6 text-gray-200 hover:text-gray-700 transition-all duration-[0.3s]">
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
                    stroke="currentColor"
                    class="size-6 text-gray-200 hover:text-gray-700 transition-all duration-[0.3s]">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
        </div>
    </section>

    {{-- About --}}
    <section class="about" id="about">
        <div class="pt-[2px] lg:pt-[10vh]">
            <div class="pt-8 pb-[30px] mb-8">
                <div class="flex justify-center item-center">
                    <h1 class="text-center text-xl lg:text-5xl mt-4 lg:mb-4 font-semibold text-gray-700 txt-content transition-all duration-[0.3s] hover:text-gray-900"
                        data-observerable_elem>To Improve Health For A Better Life</h1>
                </div>
            </div>
            <div class="md:grid md:grid-cols-2 px-10 flex flex-wrap items-center">
                <style>
                    .image-about {
                        position: relative;
                        height: 60vh;
                        width: 100%;
                        background-image: url('/assets/img/about-img.png');
                        background-size: cover;
                        background-position: center;
                        -webkit-border-radius: 10px;
                        -moz-border-radius: 10px;
                        border-radius: 10px;
                        -moz-box-shadow: inset 250px -50px 100px -100px rgb(245 247 250 / var(--tw-bg-opacity));
                        -webkit-box-shadow: inset 250px -50px 100px -100px rgb(245 247 250 / var(--tw-bg-opacity));
                        -o-box-shadow: inset 250px -50px 100px -100px rgb(245 247 250 / var(--tw-bg-opacity));
                        box-shadow: inset 250px -50px 100px -100px rgb(245 247 250 / var(--tw-bg-opacity));
                    }

                    .image-about:before,
                    .image-about:after {
                        content: '';
                        position: absolute;
                        left: 50%;
                        opacity: 0.3;
                    }

                </style>
                <!-- text content -->
                <div>
                    <h1 class="text-sm text-gray-800 md:text-md lg:text-2xl md:px-8 justify-center item-center text-justify transition-all duration-[1s]"
                        style="background-image: url('/assets/img/bglineB.svg')" data-observerable_elem>
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
                <div class="image-about">
                </div>

                {{-- <div class="flex flex-wrap justify-end mb-10">
                    <div class=""></div>
                    <img data-observerable_elem src="{{asset('assets/img/img-about.webp')}}"
                alt="Person using smartphone" class="md:w-70% shadow-xl duration-[0.3s] hover:scale-105 "
                style="border-radius: 10px;">
            </div> --}}
        </div>
        </div>
    </section>

    <!-- News -->
    <section class="news" id='news'>
        <div class="pt-[8vh]">
            <!-- heading and subheading -->
            <h1 class="text-center text-xl text-gray-700 lg:text-5xl font-semibold mt-16 opacity-0 transition-all duration-[1.3s]"
                data-observerable_elem>
                Latest News</h1>
            <p class="text-center opacity-0 transition-all duration-[1.3s] mb-8" data-observerable_elem>
                See what we've been up to
            </p>

            <div id="default-carousel" class="relative w-full " data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative min-h-[25vh] md:min-h-[30vh] lg:min-h-[65vh] overflow-hidden rounded-lg mr-8 ml-8">
                    <!-- Item 1 -->
                    @foreach ($dataNews as $data)
                    <button id="news-detail" data-id="{{ $data->id }}" data-modal-target="modal-news"
                        data-modal-toggle="modal-news">
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{asset('assets/img/carousel/'.$data->news_img)}}" id="news-img"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 rounded-sm"
                                style="object-fit: scale-down; height: 100%;">
                        </div>
                    </button>
                    @endforeach
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
        </div>
    </section>

    <!-- Collaboration -->
    <section class="community grid justify-center " id="collaborations">
        <div class="lg:pt-[15vh]">
            <!-- heading and subheading -->
            <h1 class="text-center text-xl text-gray-700 lg:text-5xl mt-4 mb-4 lg:pb-10 font-semibold opacity-0 transition-all duration-[1.3s]"
                data-observerable_elem>Our Collaboration</h1>

            <!-- community cards container -->
            <div class="grid md:grid-cols-2 md:gap-4 lg:gap-8 mb-12 mx-8">
                <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                    <a href="https://planttechdev.wixstudio.io/qualityculture"
                        class="mt-2 block max-w-sm md:max-w-md lg:max-w-lg p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <svg class="w-7 h-7 text-brand_primary mb-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z" />
                        </svg>
                        <h5
                            class="text-gray-700 mb-2 text-md lg:text-2xl font-bold tracking-tight dark:text-white opacity-0.transition-all duration-[0.2s] hover:text-brand_primary">
                            Quality Culture
                        </h5>
                        <p class="text-sm md:text-md lg:text-lg font-normal text-gray-700 dark:text-gray-400">
                            Unlike other companies, we are a UX first development company. Projects are driven by
                            designers
                            and
                            they make sure design and experiences translate to code.
                        </p>
                    </a>
                </div>
                <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                    <a href="https://planttechdev.wixstudio.io/pembelajarankaryawan"
                        class="mt-2 block max-w-sm md:max-w-md lg:max-w-lg p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <svg class="w-7 h-7 text-brand_primary mb-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                            <path
                                d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                            <path
                                d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                        </svg>

                        <h5
                            class="text-gray-700 mb-2 text-md lg:text-2xl font-bold tracking-tight dark:text-white opacity-0.transition-all duration-[0.2s] hover:text-brand_primary">
                            Ruang Belajar
                        </h5>
                        <p class="text-sm md:text-md lg:text-lg font-normal text-gray-700 dark:text-gray-400">
                            Unlike other companies, we are a UX first development company. Projects are driven by
                            designers
                            and
                            they make sure design and experiences translate to code.
                        </p>
                    </a>
                </div>
                <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                    <a href="https://planttechdev.wixstudio.io/website-45"
                        class="mt-2 block max-w-sm md:max-w-md lg:max-w-lg p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <svg class="w-7 h-7 text-brand_primary mb-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
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
                            class="text-gray-700 mb-2 text-md lg:text-2xl font-bold tracking-tight dark:text-white opacity-0.transition-all duration-[0.2s] hover:text-brand_primary">
                            OPEX
                        </h5>
                        <p class="text-sm md:text-md lg:text-lg font-normal text-gray-700 dark:text-gray-400">
                            Unlike other companies, we are a UX first development company. Projects are driven by
                            designers
                            and
                            they make sure design and experiences translate to code.
                        </p>
                    </a>
                </div>
                <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                    <a href="https://planttechdev.wixstudio.io/pembelajarankaryawan/blank-1"
                        class="mt-2 block max-w-sm md:max-w-md lg:max-w-lg p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <svg class="w-7 h-7 text-brand_primary mb-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 .75a8.25 8.25 0 0 0-4.135 15.39c.686.398 1.115 1.008 1.134 1.623a.75.75 0 0 0 .577.706c.352.083.71.148 1.074.195.323.041.6-.218.6-.544v-4.661a6.714 6.714 0 0 1-.937-.171.75.75 0 1 1 .374-1.453 5.261 5.261 0 0 0 2.626 0 .75.75 0 1 1 .374 1.452 6.712 6.712 0 0 1-.937.172v4.66c0 .327.277.586.6.545.364-.047.722-.112 1.074-.195a.75.75 0 0 0 .577-.706c.02-.615.448-1.225 1.134-1.623A8.25 8.25 0 0 0 12 .75Z" />
                            <path fill-rule="evenodd"
                                d="M9.013 19.9a.75.75 0 0 1 .877-.597 11.319 11.319 0 0 0 4.22 0 .75.75 0 1 1 .28 1.473 12.819 12.819 0 0 1-4.78 0 .75.75 0 0 1-.597-.876ZM9.754 22.344a.75.75 0 0 1 .824-.668 13.682 13.682 0 0 0 2.844 0 .75.75 0 1 1 .156 1.492 15.156 15.156 0 0 1-3.156 0 .75.75 0 0 1-.668-.824Z"
                                clip-rule="evenodd" />
                        </svg>


                        <h5
                            class="text-gray-700 mb-2 text-md lg:text-2xl font-bold tracking-tight dark:text-white opacity-0.transition-all duration-[0.2s] hover:text-brand_primary">
                            Dynamic Training
                        </h5>
                        <p class="text-sm md:text-md lg:text-lg font-normal text-gray-700 dark:text-gray-400">
                            Unlike other companies, we are a UX first development company. Projects are driven by
                            designers
                            and
                            they make sure design and experiences translate to code.
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Departments -->
    <section class="community grid justify-center mt-10" id="departments">
        <div class="pt-[2vh] lg:pt-[12vh] pb-[1vh]">
            <!-- heading and subheading -->
            <h1 class="text-center text-xl text-gray-700 lg:text-5xl mt-4 mb-4 pb-8 font-semibold opacity-0 transition-all duration-[1.3s]"
                data-observerable_elem>Departments</h1>
            <!-- community cards container -->

            <div class="grid md:grid-cols-2 md:gap-4 lg:grid-cols-3 lg:gap-8 mx-8">
                <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                    <div
                        class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="https://planttechdev.wixstudio.io/production" target="blank">
                            <img class="rounded-t-lg min-h-[35vh] max-h-[35vh] min-w-full"
                                src="{{asset('assets/img/dept/production.webp')}}" alt="" />
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
                                data-observerable_elem target="blank" href="https://planttechdev.wixstudio.io/production">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                    <div
                        class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="https://paulinlinda14.wixstudio.io/hrbo" target="blank">
                            <img class="rounded-t-lg min-h-[35vh] max-h-[35vh] min-w-full"
                                src="{{asset('assets/img/dept/hco.webp')}}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5
                                    class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mb-10">
                                    Human Capital Operation
                                </h5>
                            </a>
                            <br>
                            <a target="blank" class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-md text min-w-[7rem] opacity-0 transition-all duration-[1.2s] flex justify-center"
                                data-observerable_elem href="https://paulinlinda14.wixstudio.io/hrbo">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                    <div
                        class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="https://planttechdev.wixstudio.io/homepagets" target="blank">
                            <img class="rounded-t-lg min-h-[35vh] max-h-[35vh] min-w-full"
                                src="{{asset('assets/img/dept/plant-tsup.webp')}}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5
                                    class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mb-10">
                                    Technical Support
                                </h5>
                            </a>
                            <br>
                            <a target="blank" class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-md text min-w-[7rem] opacity-0 transition-all duration-[1.2s] flex justify-center"
                                data-observerable_elem href="https://planttechdev.wixstudio.io/homepagets">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                    <div
                        class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="https://logisticcenterkf.wixsite.com/website" target="blank">
                            <img class="rounded-t-lg min-h-[35vh] max-h-[35vh] min-w-full"
                                src="{{asset('assets/img/dept/logistic.webp')}}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5
                                    class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mb-10">
                                    Logistics
                                </h5>
                            </a>
                            <br>
                            <a target="blank" class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-md text min-w-[7rem] opacity-0 transition-all duration-[1.2s] flex justify-center"
                                data-observerable_elem href="https://logisticcenterkf.wixsite.com/website">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                    <div
                        class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="https://yudityaartha.wixstudio.io/my-site-1" target="blank">
                            <img class="rounded-t-lg min-h-[35vh] max-h-[35vh] min-w-full"
                                src="{{asset('assets/img/dept/qs.webp')}}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5
                                    class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mb-10">
                                    Quality System
                                </h5>
                            </a>
                            <br>
                            <a target="blank" class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-md text min-w-[7rem] opacity-0 transition-all duration-[1.2s] flex justify-center"
                                data-observerable_elem href="https://yudityaartha.wixstudio.io/my-site-1">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                    <div
                        class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="https://sites.google.com/view/mstdkf/home?authuser=0" target="blank">
                            <img class="rounded-t-lg min-h-[35vh] max-h-[35vh] min-w-full"
                                src="{{asset('assets/img/dept/mstd.webp')}}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5
                                    class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mb-10">
                                    Manufacturing System Development
                                </h5>
                            </a>
                            <br>
                            <a target="blank" class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-md text min-w-[7rem] opacity-0 transition-all duration-[1.2s] flex justify-center"
                                data-observerable_elem href="https://sites.google.com/view/mstdkf/home?authuser=0">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                    <div
                        class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="https://sites.google.com/view/qakfcikarang/home" target="blank">
                            <img class="rounded-t-lg min-h-[35vh] max-h-[35vh] min-w-full"
                                src="{{asset('assets/img/dept/qa.webp')}}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5
                                    class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mb-10">
                                    Quality Assurance
                                </h5>
                            </a>
                            <br>
                            <a target="blank" class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-md text min-w-[7rem] opacity-0 transition-all duration-[1.2s] flex justify-center"
                                data-observerable_elem href="https://sites.google.com/view/qakfcikarang/home">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                    <div
                        class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="https://sites.google.com/view/documentcontrolqc/home?authuser=0" target="blank">
                            <img class="rounded-t-lg min-h-[35vh] max-h-[35vh] min-w-full"
                                src="{{asset('assets/img/dept/qc.webp')}}" alt="" />
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
                                data-observerable_elem href="https://sites.google.com/view/documentcontrolqc/home?authuser=0" target="blank">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                    <div
                        class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div>
                            <img class="rounded-t-lg min-h-[35vh] max-h-[35vh] min-w-full"
                                src="{{asset('assets/img/dept/ga.webp')}}" alt="" />
                        </div>
                        <div class="p-5">
                            <div>
                                <h5
                                    class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mb-10">
                                    General Affairs
                                </h5>
                            </div>
                            {{-- <br>
                            <a class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-md text min-w-[7rem] opacity-0 transition-all duration-[1.2s] flex justify-center"
                                data-observerable_elem href="">Read more</a> --}}
                        </div>
                    </div>
                </div>
                <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                    <div
                        class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div>
                            <img class="rounded-t-lg min-h-[35vh] max-h-[35vh] min-w-full"
                                src="{{asset('assets/img/dept/fa.webp')}}" alt="" />
                        </div>
                        <div class="p-5">
                            <div>
                                <h5
                                    class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mb-10">
                                    Finance
                                </h5>
                            </div>
                            {{-- <br>
                            <a class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-md text min-w-[7rem] opacity-0 transition-all duration-[1.2s] flex justify-center"
                                data-observerable_elem href="../contact">Read more</a> --}}
                        </div>
                    </div>
                </div>
                <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                    <div
                        class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div>
                            <img class="rounded-t-lg min-h-[35vh] max-h-[35vh] min-w-full"
                                src="{{asset('assets/img/dept/purchasing.webp')}}" alt="" />
                        </div>
                        <div class="p-5">
                            <div>
                                <h5
                                    class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mb-10">
                                    Purchasing
                                </h5>
                            </div>
                            {{-- <br>
                            <a class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-md text min-w-[7rem] opacity-0 transition-all duration-[1.2s] flex justify-center"
                                data-observerable_elem href="../contact">Read more</a> --}}
                        </div>
                    </div>
                </div>
                <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                    <div
                        class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="https://planttechdev.wixsite.com/website-14" target="blank">
                            <img class="rounded-t-lg min-h-[35vh] max-h-[35vh] min-w-full"
                                src="{{asset('assets/img/dept/engineering.webp')}}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5
                                    class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mb-10">
                                    Engineering
                                </h5>
                            </a>
                            <br>
                            <a target="blank" class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-md text min-w-[7rem] opacity-0 transition-all duration-[1.2s] flex justify-center"
                                data-observerable_elem href="https://planttechdev.wixsite.com/website-14">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                    <div
                        class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div>
                            <img class="rounded-t-lg min-h-[35vh] max-h-[35vh] min-w-full"
                                src="{{asset('assets/img/dept/rnd.webp')}}" alt="" />
                        </div>
                        <div class="p-5">
                            <div>
                                <h5
                                    class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mb-10">
                                    Research and Development
                                </h5>
                            </div>
                            {{-- <br>
                            <a class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-md text min-w-[7rem] opacity-0 transition-all duration-[1.2s] flex justify-center"
                                data-observerable_elem href="../contact">Read more</a> --}}
                        </div>
                    </div>
                </div>
                <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                    <div
                        class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="https://tskalbefarma.wixsite.com/tsklb/blank-1" target="blank">
                            <img class="rounded-t-lg min-h-[35vh] max-h-[35vh] min-w-full"
                                src="{{asset('assets/img/dept/ts.webp')}}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5
                                    class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mb-10">
                                    Technical Service
                                </h5>
                            </a>
                            <br>
                            <a target="blank" class="text-white bg-brand_primary pr-4 pl-4 pt-2 pb-2 rounded-md text min-w-[7rem] opacity-0 transition-all duration-[1.2s] flex justify-center"
                                data-observerable_elem href="https://tskalbefarma.wixsite.com/tsklb/blank-1">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="opacity-0.transition-all duration-[0.6s] hover:scale-105">
                    <div
                        class="mt-2 max-w-sm md:max-w-md lg:max-w-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="https://sites.google.com/view/ppicsitekalbe" target="blank">
                            <img class="rounded-t-lg min-h-[35vh] max-h-[35vh] min-w-full"
                                src="{{asset('assets/img/dept/ppic.webp')}}" alt="" />
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
                                data-observerable_elem href="https://sites.google.com/view/ppicsitekalbe" target="blank">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quote -->
    <section class=" h-[40vh] flex flex-col justify-center items-center p-4 gap-3">
        <h1
            class="text-3xl md:text-5xl font-bold text-center py-4 hover:decoration-dotted hover:decoration-brand_primary hover:underline underline-offset-4">
            To Improve Health <br><span class="text-brand_primary">For A Better Life</span>
        </h1>
    </section>

    <!-- footer-->
    @include('layout.footer')

    {{-- modal --}}
    <!-- Main modal -->
    <div id="modal-news" data-modal-placement="center-center" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-6xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between px-4 py-2 md:px-5 md:py-2 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Latest News
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="modal-news">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <img class="h-auto max-w-full" src="" id="modal-news-img" alt="image description">
                    <p id="news-caption" class="text-base leading-relaxed text-gray-500 dark:text-gray-400">

                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        //button create post event
        $('body').on('click', '#news-detail', function () {
            function removeHtmlTags(input) {
                return input.replace(/<[^>]*>/g, '');
            }

            let news_id = $(this).data('id');

            //fetch detail post with ajax
            $.ajax({
                url: `/detail-news/${news_id}`,
                type: "GET",
                cache: false,
                success: function (response) {
                    $('#modal-news-img').attr('src', '/assets/img/carousel/' + response.data
                        .news_img);

                    $('#news-caption').text("");
                    $('#news-caption').text(removeHtmlTags(response.data.caption));
                }
            });
        });
    </script>
</body>

</html>
