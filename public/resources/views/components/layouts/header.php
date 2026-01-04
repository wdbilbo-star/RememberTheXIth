<nav>

    <div class="flex flex-wrap justify-between items-center mx-auto  p-4">
        <img src="/resources/images/logo.svg" alt="The Officers and Men of the XIth Parachute Battalion February 1944"
             class="h-10 flex items-center space-x-3 rtl:space-x-reverse">

        <span class="self-center text-xl text-heading font-semibold whitespace-nowrap"><h1
                    class="text-2xl font-bold m-0"> Remember The XI<sup>th</sup></h1></span>

        <div class="flex items-center space-x-6 rtl:space-x-reverse">


            <a href="donate.php" class="donate">Donate</a>
            <a href="https://www.facebook.com/groups/606854730047375" target="_blank"> <img class="facebook-logo"
                                                                                            src="/resources/images/FB.svg"
                                                                                            alt="Facebook icon"></a>


            <!--
                            @if (Route::has('login'))


                                <nav class="flex  justify-end gap-4 z-999 relative">
                                    @auth
                                        <a class="securearea"
                                            href="{{ url('/dashboard') }}" {{--class="securearea" style="color: white; font-weight: .9rem"--}}>

                                            {{--class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#EDEDEC] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"--}}

                                            Dashboard
                                        </a>
                                    @else
                                        <a
                                            href="{{ route('login') }}" style="color: white"
                                            class="inline-block px-5 py-1.5  border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                                        >
                                            Log in
                                        </a>

                                        @if (Route::has('register'))
                                            <a
                                                href="{{ route('register') }}" style="color: white"
                                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#EDEDEC] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                                Register
                                            </a>
                            @endif
                            @endauth

                            @endif-->


        </div>


    </div>

    <div class="topnav" id="myTopnav">
        <a href="/resources/views/home.php">Home</a>
        <a href="/resources/views/contact-us.php">Contact Us</a>
        <a href="/resources/views/gallery.php">Gallery</a>
        <a href="/resources/views/store.php">Store</a>


        <div class="dropdown">
            <button class="dropbtn">About Us
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="/resources/views/about.php">About Us</a>
                <a href="/resources/views/our_mission.php">Our Mission</a>


            </div>

        </div>


        <div class="dropdown">
            <button class="dropbtn">XI<sup>th</sup> Battalion
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">

                <a href="/resources/views/history.php">History</a>
                <a href="/resources/views/battalion_members.php">Battalion Members</a>
                <a href="/resources/views/kia.php">Killed In Action</a>
                <a href="/resources/views/battle_casualities.php">Battle Casualties</a>
                <a href="/resources/views/pow.php">Prisoners of War</a>

            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Soldiers' Stories
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="/resources/views/officers.php">The Officers</a>
                <a href="/resources/views/men.php">The Men</a>

            </div>


        </div>

        <div class="dropdown">
            <button class="dropbtn">Members Area
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="/resources/views/members.php">Members Area</a>
            </div>


            </div>


        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
</nav>
<form method="get" action="/surname_search" class="search-bar">

    <input id="searchbutton" placeholder="Search For A Veteran" type="search" name="query" pattern=".*\S.*" required>
    <button type="submit"><i class="fa fa-search" style="color: white"></i>
        <span style="color:white">Search</span>
    </button>
</form>
