<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Serwis komputerowy - ComputerRescue</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
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
            <li><a href="pricelist.php">Cennik</a></li>
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

    </header>

    <main style="margin-top: -600px;">
        <div class="form" style="height: 500px;">

            <form action="service.html" method="post">
                <label for="fname">Imie:</label>
                <input type="text" id="fname" name="firstname" placeholder="Twoje imie.." required>
                <label for="fname">E-mail:</label>
                <input type="text" id="fname" name="e-mail" placeholder="Twój e-mail.." required>
                <label for="fname">W czym możemy pomóc?</label></br>
                <textarea name="comment" rows="5" cols="40" required></textarea><br>
                <input type="submit">
            </form>


        </div>


        <?php include 'partial/footer.php'; ?>

    </main>

</body>

</html>