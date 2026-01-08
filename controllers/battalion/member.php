

   <?php require base_path("Core/Database.php");


    $heading = 'The Members of The Battalion';
    $title = 'The Battalion';

    $config = require base_path("config.php");
    $db = new Database($config['database']);




    $battmember = $db->query("SELECT * FROM battalion_members where id = :id", ['id' => $_GET['id']])->fetch();



    view("battalion/member.view.php", [
        'heading' => 'The Members of The Battalion',
        'battmember' => $battmember,
        'title' => $title,
    ]);