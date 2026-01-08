<body>
<nav>
    <!--<div id="logo"><img src="/images/logo.svg" style="z-index: 150;   height: 60px; float: left" alt="RememberTheXith Logo"></div>-->
    <label for="drop" class="toggle">Menu</label>
    <input type="checkbox" id="drop"/>
    <ul class="menu">
        <li><a href="/" <? if ($_SERVER['REQUEST_URI'] === '/') echo "style='transform: scale(.75); margin: -2px; font-size:20px; border: 2px solid rgb(171, 201, 232); border-radius:10px;'";?> >Home</a></li>
        <li><a href="/gallery" <? if ($_SERVER['REQUEST_URI'] === '/gallery') echo "style='transform: scale(.75); margin: -2px; font-size:20px; border: 2px solid rgb(171, 201, 232); border-radius:10px;'";;?>>Gallery</a></li>
        <li></li>
        <li>
            <!-- First Tier Drop Down -->
            <label for="drop-1" class="toggle">About Us ></label>
            <a href="about" <? if ($_SERVER['REQUEST_URI'] === '/about') echo "style='transform: scale(.75); margin: -2px; font-size:20px; border: 2px solid rgb(171, 201, 232); border-radius:10px;'";;?>>About Us</a>
            <input type="checkbox" id="drop-1"/>
            <ul>
                <li><a href="our_mission" <? if ($_SERVER['REQUEST_URI'] === '/our_mission') echo "style='transform: scale(.75); margin: -2px; font-size:20px; border: 2px solid rgb(171, 201, 232); border-radius:10px;'";;?>>Our Mission</a></li>
                <li><a href="contact" <? if ($_SERVER['REQUEST_URI'] === '/contact') echo "style='transform: scale(.75); margin: -2px; font-size:20px; border: 2px solid rgb(171, 201, 232); border-radius:10px;'";;?>>Contact</a></li>
            </ul>
        </li>
        <li>

            <!-- First Tier Drop Down -->
            <label for="drop-2" class="toggle">The Battalion></label>
            <a href="history" <? if ($_SERVER['REQUEST_URI'] === '/history') echo "style='transform: scale(.75); margin: -2px; font-size:20px; border: 2px solid rgb(171, 201, 232); border-radius:10px;'";;?>>The Battalion</a>
            <input type="checkbox" id="drop-2"/>
            <ul>
                <li><a href="members" <? if ($_SERVER['REQUEST_URI'] === '/members') echo "style='transform: scale(.75); margin: -2px; font-size:20px; border: 2px solid rgb(171, 201, 232); border-radius:10px;'";;?>>The Battalion</a></li>
                <li><a href="history" <? if ($_SERVER['REQUEST_URI'] === '/history') echo "style='transform: scale(.75); margin: -2px; font-size:20px; border: 2px solid rgb(171, 201, 232); border-radius:10px;'";;?>>History</a></li>
                <li>

                    <!-- Second Tier Drop Down -->
                    <label for="drop-3" class="toggle">The Battle ></label>
                    <a href="#">The Battle</a>
                    <input type="checkbox" id="drop-3"/>
                    <ul>
                        <li><a href="kia" <? if ($_SERVER['REQUEST_URI'] === '/kia') echo "style='transform: scale(.75); margin: -2px; font-size:20px; border: 2px solid rgb(171, 201, 232); border-radius:10px;'";;?>>Killed</a></li>
                        <li><a href="casualties" <? if ($_SERVER['REQUEST_URI'] === '/battle_casualties') echo "style='transform: scale(.75); margin: -2px; font-size:20px; border: 2px solid rgb(171, 201, 232); border-radius:10px;'";;?>>Casualties</a></li>
                        <li><a href="pow" <? if ($_SERVER['REQUEST_URI'] === '/pow') echo "style='transform: scale(.75); margin: -2px; font-size:20px; border: 2px solid rgb(171, 201, 232); border-radius:10px;'";;?>>Prisoners</a></li>
                        <li><a href="officers" <? if ($_SERVER['REQUEST_URI'] === '/officers') echo "style='transform: scale(.75); margin: -2px; font-size:20px; border: 2px solid rgb(171, 201, 232); border-radius:10px;'";;?>>Officers</a></li>
                        <li><a href="men" <? if ($_SERVER['REQUEST_URI'] === '/men') echo "style='transform: scale(.75); margin: -2px; font-size:20px; border: 2px solid rgb(171, 201, 232); border-radius:10px;'";;?>>The Men</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="store" <? if ($_SERVER['REQUEST_URI'] === '/store') echo "style='transform: scale(.75); margin: -2px; font-size:20px; border: 2px solid rgb(171, 201, 232); border-radius:10px;'";;?>>Store</a></li>
        <li><a href="sitemembers" <? if ($_SERVER['REQUEST_URI'] === '/members') echo "style='transform: scale(.75); margin: -2px; font-size:20px; border: 2px solid rgb(171, 201, 232); border-radius:10px;'";;?>>Members' Area</a></li>
    </ul>
</nav>

