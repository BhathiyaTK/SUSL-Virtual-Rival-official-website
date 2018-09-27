
<?php

session_start();

include 'db.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST["submit"])) {
        $team_name = $_POST["team_name"];
        $university_name = $_POST["university_name"];

        $leader_name = $_POST["leader_name"];
        $leader_email = $_POST["leader_email"];
        $leader_phone = $_POST["leader_phone"];
        $leader_t_shirt = $_POST["leader_t_shirt"];
        $leader_food = $_POST["leader_food"];

        $member1_name = $_POST["member1_name"];
        $member1_email = $_POST["member1_email"];
        $member1_t_shirt = $_POST["member1_t_shirt"];
        $member1_food = $POST["member1_food"];

        $member2_name = $_POST["member2_name"];
        $member2_email = $_POST["member2_email"];
        $member2_t_shirt = $_POST["member2_t_shirt"];
        $member2_food = $POST["member2_food"];

        $member3_name = $_POST["member3_name"];
        $member3_email = $_POST["member3_email"];
        $member3_t_shirt = $_POST["member3_t_shirt"];
        $member3_food = $POST["member3_food"];

        $member4_name = $_POST["member4_name"];
        $member4_email = $_POST["member4_email"];
        $member4_t_shirt = $_POST["member4_t_shirt"];
        $member4_food = $POST["member4_food"];

        if (($team_name!="")&&($university_name!="")&&($leader_name!="")&&($leader_email!="")&&($leader_phone!="")&&($leader_t_shirt!="")&&($leader_food!="")&&($member1_name!="")&&($member1_email!="")&&($member1_t_shirt!="")&&($member1_food!="")&&($member2_name!="")&&($member2_email)&&($member2_t_shirt)&&($member2_food)&&($member3_name!="")&&($member3_email)&&($member3_t_shirt)&&($member3_food)&&($member4_name!="")&&($member4_email)&&($member4_t_shirt)&&($member4_food)) {
                
            $query_teams = "INSERT INTO teams(team_name,university_name) VALUES('$team_name','$university_name')";
            $query_leaders = "INSERT INTO leaders(name,email,phone,t_shirt,meal) VALUES('$leader_name','$leader_email','$leader_phone','$leader_t_shirt','$leader_food')";
            $query_member1 = "INSERT INTO member1(name,email,t_shirt,meal) VALUES('$member1_name','$member1_email','$member1_t_shirt','$member1_food')";
            $query_member2 = "INSERT INTO member2(name,email,t_shirt,meal) VALUES('$member2_name','$member2_email','$member2_t_shirt','$member2_food')";
            $query_member3 = "INSERT INTO member3(name,email,t_shirt,meal) VALUES('$member3_name','$member3_email','$member3_t_shirt','$member3_food')";
            $query_member4 = "INSERT INTO member4(name,email,t_shirt,meal) VALUES('$member4_name','$member4_email','$member4_t_shirt','$member4_food')";

            if (($conn->query($query_teams))&&($conn->query($query_leaders))&&($conn->query($query_member1))&&($conn->query($query_member2))&&($conn->query($query_member3))&&($conn->query($query_member4))) {
                # code...
            }
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script-->
    <script src="parallaxjs/parallax.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="icon" href="images/VR-logo-1.png">
    <title>Response submitted</title>
</head>



<body>
    <section class="process-sec">
        <div id="process-sec-background">
            <div>
                
            </div>
            <div>
                <a id="process_button" class="btn btn-primary" href="index.php">BACK TO HOME</a>
            </div>
        </div>
    </section>
</body>