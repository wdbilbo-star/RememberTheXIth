<?php require base_path("views/partials/head.php"); ?>



<?php require base_path("views/partials/banner.php"); ?>


<?php require base_path("views/partials/nav.php"); ?>

<br>

<main>




    <style>
        .officersbatthist{
            width: 100%;
            outline: 2px solid #874363;
            margin: 15px;
            padding: 10px;
            line-height: 200%;
            background-color: #56324B;
            color: #FFFFFF;
            border-radius: 15px;
        }
        img.officersbatt{
            width: 50%;
            border-radius: 15px;
            margin: 5% 1% 5% 1%;
        }


        @media screen and (max-width: 900px) {

            .brotherhood {
                font-size: 2vh;
                padding: 1%;

            }
        }

        @media screen and (min-width: 900px) {
            .brotherhood {
                font-size: 3vh;
                padding: 3%;
                margin: 1%;
            }


    </style>



            <div class="flex flex-col">

                <h1 class="text-center mb-2 text-3xl font-bold tracking-tight text-heading md:text-5xl lg:text-4xl">XI<sp>th</sp> Parachute Battalion History</h1>

                <div class="container">

                    <div class="enclosed"><i style="padding:10px; font-size: 2em" class='fa fa-calendar'></i>
                        <p style="color:#0F172A; font-weight:bold; font-size: 1.2em">March 1943</p>

                        <p>
                            The XIth Parachute Battalion was formed at Kabrit, Egypt, from volunteers, becoming part of the 4th Parachute Brigade.
                        </p>

                    </div>
                    <div class="enclosed"><i class="fa fa-home" style="padding:10px; font-size: 2em; color:white" ></i>
                        <p style="color:#0F172A; font-weight:bold; font-size: 1.2em">March 1944</p>
                        <p>After being billeted in various parts of Leicestershire, the XI<sup>th</sup> Battalion settled into its permanent home at Welby Camp, Melton Mowbray.</p>
                    </div>
                    <div class="enclosed"><img src="/images/parachute.svg" style="height:30px; margin: 10px" alt="Parachute Icon">
                        <p style="color:#0F172A; font-weight:bold; font-size: 1.2em">September 1944</p>
                        <p>After many months of extensive training and fully fit for what was to become the greatest battle of their lives,
                            the heroes of the XI<sup>th</sup> Battalion parachuted into the Battle of Arnhem. Facing overwhelming odds, they sustained heavy casualties, losing so many men that after returning to Melton Mowbray
                            , the battalion was disbanded, but bringing hope to the local people.</p>


                    </div>


                </div>

                <div class="container">
                    <div class="officersbatthist">
                        <img src="/images/OfficersofTheXIth.jpg" class="officersbatt" style="float:right">
                        <p class="brotherhood">A Brotherhood Forged in Battle</p>
                        <p>    The 11th Parachute Battalion was an elite airborne unit that exemplified the highest standards of military excellence. Formed during the darkest hours of World War II, these brave paratroopers were trained to drop behind enemy lines and execute critical missions that would shape the outcome of the war.<br>

                            Fighting against extreme odds at the Battle of Arnhem, the men of the 11th Battalion demonstrated extraordinary courage under fire. Their sacrifices remind us of the price of freedom and the valor of those who stand ready to defend it.</p>
                    </div>

                </div>




            </div>




</main>


<br><br><br><br>


<?php require base_path("views/partials/footer.php"); ?>




