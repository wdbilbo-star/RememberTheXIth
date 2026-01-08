
<?php /*use Core\Database;*/
require base_path("views/partials/head.php"); ?>
<?php require base_path("views/partials/banner.php"); ?>
<?php require base_path("views/partials/nav.php"); ?>
<?php require base_path("core/Database.php");  ?>


<?php



?>


<main>

    <style>

        a:hover {
            color: white;
        }

        a {
            color: lightgray;

            text-decoration: none;
        }

        .soldiers {
            display: flex;
            border: 2px solid black;
            color: white;
            font-size: 1.5rem;
            padding: 20px;
            border-radius: 15px;
            background-color: #322b3f;
            max-width: 80%;
            margin: auto;
        }

        .soldiers h2 {
            color: #4e2e48
        }

        p {
            font-size: 1rem;
            color: lightgray;
        }

    </style>



    <h1>XI
        <sp>th</sp>
        Parachute Battalion Members
    </h1>
    <br>

<?php

   $config = require base_path("config.php");
   $db = new Database($config['database']);
    $battmembers = $db->query("select * FROM battalion_members where id = 3")->fetchALL();



 foreach ($battmembers as $battmember) :?>
        <div class="soldiers">


            <?php

                // Create DateTime objects from the date strings
                $datetime1 = new DateTime($battmember['birthdate']);
                $datetime2 = new DateTime($battmember['deathdate']);
                // Calculate the difference between the dates using the diff() method
                $ageatdeath = $datetime1->diff($datetime2);

                // Format and print the result
                $ageatdeath = $ageatdeath->format('%y years, %m months, and %d days');


                $birthdate = date_format(date_create_from_format("Y-m-j", $battmember['birthdate']), "d M Y");
                $deathdate = date_format(date_create_from_format("Y-m-j", $battmember['deathdate']), "d M Y");


            ?>
            <a href="/member?id=<?= $battmember['id'] ?>"><span><?= $battmember['rank']." ".$battmember['firstname']." ".$battmember['lastname']."</span><p><i class='fa fa-calendar'  style='font-size: .8rem'></i> Born: ".$birthdate."<br><i class='fa fa-calendar' style='font-size: .8rem'></i> Died: ".$deathdate."<br><i class='fa fa-plane''></i> Age at death: ".$ageatdeath ?></p></a>
          <!-- <?php /*= $battmember['firstname']." ".$birthdate." ".$deathdate;*/?>
            <a href="/member?id=   "/member?id=<?php /*=  $battmember['id'] */?>"><span><?php /*$battmember['rank']." ".$battmember['firstname']." ".$battmember['lastname']."</span><p><i class='fa fa-calendar'  style='font-size: .8rem'></i> Born: ".$birthdate."<br><i class='fa fa-calendar' style='font-size: .8rem'></i> Died: ".$deathdate."<br><i class='fa fa-plane''></i> Age at death: ".$ageatdeath */?></p></a>
-->

        </div><br>
<?php endforeach; ?>





    <!--   {{ $members->links() }}-->


</main>


<?php require base_path("views/partials/footer.php"); ?>





