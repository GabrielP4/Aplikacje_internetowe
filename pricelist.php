<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Serwis komputerowy - ComputerRescue</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/b692cf7cf5.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
    <script type="text/javascript" src="js/main.js"></script>
</head>

<body>
    <nav>
        <div class="logo_menu">

            <a href="#">
                <p><i class="fas fa-tools"></i> CompRes - Twój serwis!</p>
            </a>

        </div>
        <ul>
            <li><a href="index.php">Strona główna</a></li>
            <li><a href="service.php">Serwis</a></li>
            <li>
                <div class="dropdown">
                    <a href="#id_main_contact" class="dropbtn">Kontakt</a>
                    <div class="dropdown-content">
                        <a>tel. 123 456 789</a>
                        <a id="demo" style="padding: 10px"></a>
                        <a>email: biuro@compres.pl</a>
                    </div>
                </div>
            </li>
        </ul>

    </nav>

    <header>

        <div class="banner">

            <h1>
                serwis komputerowy

                <br><i>Computer Rescue</i>

            </h1>


        </div>


    </header>

    <main>
        <iframe src="data/price_list.pdf" width="100%" height="800px">

        </iframe>

        
        
		<?php include 'partial/footer.php';?>

    </main>

</body>

</html>