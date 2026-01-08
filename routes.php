<?php


    $routes =  [
        '/' => '../controllers/index.php',
        '/contact' => '../controllers/contact.php',
        '/gallery' => '../controllers/gallery.php',
        '/sitemembers' => '../controllers/sitemembers.php',
        '/store' => '../controllers/store.php',

        '/casualties' => '../controllers/arnhem/casualties.php',
        '/kia' => '../controllers/arnhem/kia.php',
        '/pow' => '../controllers/arnhem/pow.php',

        '/member' => '../controllers/battalion/member.php',
        '/members' => '../controllers/battalion/members.php',
        '/history' => '../controllers/battalion/history.php',
        '/men' => '../controllers/battalion/men.php',
        '/officers' => '../controllers/battalion/officers.php',

        '/about' => '../controllers/memorial/about.php',
        '/donate' => '../controllers/memorial/donate.php',
        '/our_mission' => '../controllers/memorial/our_mission.php',


    ];

    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    }