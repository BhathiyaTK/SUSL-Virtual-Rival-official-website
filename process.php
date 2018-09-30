
<?php

include 'db.php';

session_start();

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
        $member1_food = $_POST["member1_food"];
        $member2_name = $_POST["member2_name"];
        $member2_email = $_POST["member2_email"];
        $member2_t_shirt = $_POST["member2_t_shirt"];
        $member2_food = $_POST["member2_food"];
        $member3_name = $_POST["member3_name"];
        $member3_email = $_POST["member3_email"];
        $member3_t_shirt = $_POST["member3_t_shirt"];
        $member3_food = $_POST["member3_food"];
        $member4_name = $_POST["member4_name"];
        $member4_email = $_POST["member4_email"];
        $member4_t_shirt = $_POST["member4_t_shirt"];
        $member4_food = $_POST["member4_food"];

        if (($team_name!="")&&($university_name!="")) {
            
            $query_teams = "INSERT INTO team_info(team_name,university_name,leader_name,leader_email,leader_phone,leader_t_shirt,leader_meal, member1_name,member1_email,member1_t_shirt,member1_meal,member2_name,member2_email,member2_t_shirt,member2_meal,member3_name,member3_email,member3_t_shirt,member3_meal,member4_name,member4_email,member4_t_shirt,member4_meal) VALUES('$team_name','$university_name','$leader_name','$leader_email','$leader_phone','$leader_t_shirt','$leader_food','$member1_name','$member1_email','$member1_t_shirt','$member1_food','$member2_name','$member2_email','$member2_t_shirt','$member2_food','$member3_name','$member3_email','$member3_t_shirt','$member3_food','$member4_name','$member4_email','$member4_t_shirt','$member4_food')";
            

            if ($conn->query($query_teams)) {

                $registration_message = "<h2>Hi, team <b><b>$team_name</b></b> !</h2><br> <h5>Your team had been successfully registered.</h5><br><h6>Thanks for registering</h6>";

                $headers = "From: bhathiyakariyawasam94@gmail.com \r\n";
                $headers .= "Reply-To: bhathiyakariyawasam94@gmail.com \r\n";
                $headers .= "To: $leader_email \r\n";
                $headers .= "X-Mailer: PHP/" . PHP_VERSION;

                $to = "$leader_email";
                $subject = "Successfully registered for Virtual Rival 2k18";
                $body =  "Hi, $leader_name!\n Your team, $team_name had been successfully registered for Virtual Rival 2k18.\n\n  Date : 27th October 2018\n Time : 1.00PM\n Venue : Sabagamuwa University Premises\n\n Get ready and warm up your team for rival. We'll hope to see you at there on the time with your team. Good luck and happy gaming!\n\n\n\n Thank you.\nOrganizing Team,\nVirtual Rival 2k18 - SUSL";

                mail($to, $subject, $body, $headers);

            }else{
                $registration_message = "<h5>Registration Failed!</h5><br><h6>Check your internet connection</h6>";
            }
        }else{
            $registration_message = "<h5>Registration Failed!</h5><br><h6>Please fill all the required fields.</h6>";
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
    <title>Registration succeed</title>
</head>

<style type="text/css">
    .process-sec{
        height: auto;
        position: relative;
    }
    #process-sec-background{
        padding: 50px 30px;
        height: 100%;
    }
    .registration-messege-content{
        padding: 30px 0;
        text-align: center;
        color: #fff;
        font-family: Nunito;
        background: rgba(0,0,0,0.5);
        border-radius: 40px;
    }
    #process-div-logos{
        text-align: center;
        font-family: Nunito;
        font-weight: bold;
        font-size: 18px;
    }
    #process-div-logos-title{
        margin-bottom: 30px;
    }
    #process-div-logos-title img{
        width: auto;
        height: 70px;
        padding-right: 20px;
    }
    #process-div-logos-img img{
        width: auto;
        height: 70px;
        margin: 10px 0px;
        padding-right: 30px;
    }
</style>

<body>
    <div id="particles-js"></div>
    <section class="process-sec">
        <div id="process-sec-background">
            <div class="registration-messege-content container">
                <?php echo $registration_message ?>
                <div class="go-back-button">
                    <a id="process_button" class="btn btn-primary" href="index.php" style="margin: 30px;">BACK TO HOME</a>
                </div>
            </div>
        </div>
        <div class="container" id="process-div-logos">
            <div id="process-div-logos-title">
                <img src="images/VR-logo-1.png">Organized by
            </div>
            <div id="process-div-logos-img">
                <img src="images/Logo-SUSL.png">
                <img src="images/cis.png">
                <img src="images/socs.png">
                <img src="images/ieee.png">
            </div>
        </div>
    </section>

    <script src="function.js"></script>
    <script src="particles.js"></script>
    <script src="app.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>
    <script src="BootstrapFormHelper/js/bootstrap-formhelpers-phone.js"></script>
</body>