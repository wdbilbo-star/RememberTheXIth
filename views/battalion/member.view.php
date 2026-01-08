<?php require base_path("views/partials/head.php"); ?>
<?php require base_path("views/partials/banner.php"); ?>

<?php require base_path("views/partials/nav.php"); ?>



<main>

    <style>


        /*Flipover Q and A on about page styles*/

        .batt-container {
            display: flex;
            flex-direction: row;
            align-content: center;
            justify-content: center;
        }

        .batt-flip-card {
            background-color: transparent;
            width: 80%;
            /*  height: 70vh;*/
            perspective: 1000px;
            font-family: Alkatra;

        }

        .batt-flip-card-inner {
            position: relative;
            height: 100%;
            padding-bottom: 75%;
            text-align: center;
            transition: transform 2.0s;
            transform-style: preserve-3d;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            border-radius: 20px;
        }

        .batt-flip-card:hover .batt-flip-card-inner {
            transform: rotateY(180deg);
        }

        .batt-flip-card-front, .batt-flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .batt-flip-card-front {
            background-color: gray;
            border-radius: 20px;
            color: black;
            font-size: 4vh;
            font-weight: bold;
            font-style: italic;
            padding-top: 10px;
        }

        .batt-flip-card-back {
            background-color: #FAF9F6;
            color: black;
            transform: rotateY(180deg);
            border-radius: 20px;
            font-size: 2vw;
            max-height: 100%;
        }

        p.batt {
            text-align: left;
            margin: 1vh;
            font-size: 2vw;

        }


        @media (max-width: 600px) {
            p.batt {
                text-align: left;
                margin: 1vh;
                font-size: 3vw;

            }

            h4 {
                font-size: 3vw;
            }

        }


        @media (min-width: 1500px) {
            p.batt {
                text-align: left;
                margin: 1vh;
                font-size: 1vw;

            }

            h4 {
                font-size: 1vw;
            }

        }


        img.batt {
            width: 97%;
        }

        .bottom-left {
            position: absolute;
            bottom: 14%;
            left: 26px;
            font-size: 3vw;
            color: white;
        }

        .batt_cards {
            background: #FAF9F6;
            padding: 20px;
            margin: 10px;
            border: 1px black;
            border-style: solid;
            border-radius: 10px;
            max-width: 20%;
        }


        .holder {
            width: 90%;
            display: flex;
            flex-wrap: wrap;
            height: 150px;
            margin: auto;
            color: white;
            padding: 30px;
            border-radius: 20px;
            background-color: #262135;
        }

        .member {
            max-width: 30%;
        }


        .circle {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 2px solid #874363;
            overflow: hidden;
        }
    </style>



    <div style="color:white; font-size: 30px">
<p >
<a href="/members" style="color: white">Go Back</a>
</p>
        <p> <?= $battmember['lastname']."'s story:<br><br> ".$battmember['lifestory'] ?> </p>

<form style="margin: 5px" method="POST">

    <button>Delete</button>

</form>

    </div>






</main>





<?php require base_path("views/partials/footer.php"); ?>





