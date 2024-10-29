<!-- header -->
<header class="bg-silver">
    <!-- seprate navbar for mobiles -->
    <div id="mob-nav" class="mobile-only-nav w-full mt-8 md:hidden hidden bg-silver transition-all duration-[1.2s]">
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
