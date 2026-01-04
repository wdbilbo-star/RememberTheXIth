
<?php
    require_once('components/layouts/head.php');
?>

<title>Photo Gallery</title>




        <style>
            .gallery {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr 1fr;
                grid-gap: 20px;
                grid-column-start: 1;
                grid-row-start: 1;
                grid-row-end: 3;
                align-content: start;
                max-width: 700px;
                margin: 0 auto;
                transition: all 150ms linear;
            }

            .gallery input[type="radio"] {
                display: none;
            }

            .gallery label {
                position: relative;
                display: block;
                padding-bottom: 60%;
                margin: 5px;
                cursor: pointer;
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }

            .gallery label:before {
                border: 1px solid #e3e3e3;
                content: '';
                position: absolute;
                left: -5px;
                right: -5px;
                bottom: -5px;
                top: -5px;
            }

            .gallery img {
                display: none;
                grid-column-start: 1;
                grid-column-end: 5;
                grid-row-start: 1;
                grid-row-end: 2;
                width: 100%;
                transition: all 150ms linear;
            }

            .gallery input[name="select"]:checked + label + img {
                display: block;
            }

            .gallery input[name="select"]:checked + label:before {
                border: 1px solid #000;
            }
        </style>

</head>
<body>
<?php
    require_once('../../resources/views/components/layouts/header.php');
?>

<main>
    <div class="flex flex-col">

        <h1 class="text-center mb-2 text-3xl font-bold tracking-tight text-heading md:text-5xl lg:text-4xl">XI<sp>th</sp> Photo Gallery</h1>

        <h2>Preserving memories through photographs and memorabilia</h2>
    <div>


        <div class="gallery">
            <input type="radio" checked="checked" name="select" id="img-tab-1">
            <label for="img-tab-1" style="background-image: url('../images/gallery/ribbon_mon1.jpeg');"></label>
            <img src="../images/gallery/ribbon_mon1.jpeg" border="0">

            <input type="radio" name="select" id="img-tab-2">
            <label for="img-tab-2" style="background-image: url('../images/gallery/grave.jpeg');"></label>
            <img src="../images/gallery/grave.jpeg" border="0">

            <input type="radio" name="select" id="img-tab-3">
            <label for="img-tab-3" style="background-image: url('../images/gallery/edgerton.jpeg');"></label>
            <img src="../images/gallery/edgerton.jpeg"border="0">

            <input type="radio" name="select" id="img-tab-4">
            <label for="img-tab-4" style="background-image: url('../images/gallery/wargrave1.jpeg');"></label>
            <img src="../images/gallery/wargrave1.jpeg"border="0">

            <input type="radio" name="select" id="img-tab-5">
            <label for="img-tab-5" style="background-image: url('../images/gallery/rhine.jpeg');"></label>
            <img src="../images/gallery/rhine.jpeg"border="0">

            <input type="radio" name="select" id="img-tab-6">
            <label for="img-tab-6" style="background-image: url('../images/gallery/ximonument.jpeg');"></label>
            <img src="../mages/gallery/ximonument.jpeg"border="0">

            <input type="radio" name="select" id="img-tab-7">
            <label for="img-tab-7" style="background-image: url('../images/gallery/churchoosterbeek.jpeg');"></label>
            <img src="../images/gallery/churchoosterbeek.jpeg"border="0">

            <input type="radio" name="select" id="img-tab-8">
            <label for="img-tab-8" style="background-image: url('../images/gallery/sign_ribbon.jpeg');"></label>
            <img src="../images/gallery/sign_ribbon.jpeg"border="0">
        </div>





        </div></div>
    <br><br>












    </main>





    <?php
        require_once('./components/layouts/footer.php');


    ?>

