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
            <li><a href="service.php">Serwis</a></li>
            <li><a href="pricelist.php">Cennik</a></li>
            <li>
                <div class="dropdown">
                    <a href="#id_main_contact" class="dropbtn">Kontakt</a>
                    <div class="dropdown-content">
                        <a>tel. 123 456 789 </a>
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

        <div class="start_about_us">
            <div class="container_1st">
                <p class="header_SAU">Lorem</p>
                <p class="main_SAU">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec ex eget sapien
                    suscipit bibendum nec iaculis justo. Aliquam erat volutpat. Vivamus blandit, dolor quis vulputate
                    vulputate, arcu nibh auctor est, id sodales mi dolor vel ipsum. Integer fringilla eget lacus a
                    tempus. Mauris eu posuere metus.
                </p>
            </div>
            <div class="container_2st">
                <p class="header_SAU">Aenean </p>
                <p class="main_SAU">nterdum tristique sapien ut dictum. Nulla tincidunt, tortor eget pulvinar facilisis,
                    elit purus porta elit, quis pharetra justo nibh a massa. Donec consectetur, ante id tincidunt
                    hendrerit, mauris purus hendrerit augue, ut condimentum lorem leo eget magna. Vivamus blandit ipsum
                    eu lectus venenatis, at faucibus quam finibus. Cras facilisis volutpat mauris, sed ultricies tellus
                    vestibulum nec.</p>
            </div>
            <div class="container_3st">
                <p class="header_SAU">Morbi </p>
                <p class="main_SAU">a ipsum et purus vestibulum molestie. Cras non massa cursus, dignissim arcu vel,
                    tempor lorem. Aliquam eget lectus rutrum, auctor augue blandit, imperdiet lacus. Mauris convallis
                    purus quam, vestibulum porttitor augue commodo non. Fusce fringilla libero nec lobortis tristique.
                    Aenean et dui bibendum, gravida augue id, viverra sem. Etiam viverra condimentum nisi dictum
                    lobortis.
                </p>
                <a href="service.html" class="about_us_BTN">Czytaj więcej!</a>
            </div>

        </div>
        <div class="start_work">
            <div class="work">
                <p class="header_work">Suspendisse potenti.</p>
                <p class="main_work">Quisque massa mauris, luctus ut dignissim viverra, maximus a elit. In hac habitasse
                    platea dictumst. Nulla sit amet cursus erat. Vestibulum ac consectetur libero,</p>
            </div>
            <div class="our_work">
                <img class="layout1" src="assetes/photo_our_work_1.jpeg" alt="photo_1">
                <img class="layout2" src="assetes/photo_our_work_2.jpg" alt="photo_2">
            </div>
        </div>
        <div class="news">
            <div class="header_news_main">
                <i class="fas fa-newspaper"></i>
                <p class="ogloszenia">ogłoszenia!</p>
            </div>
            <div class="container_news">
                <p class="header_news">promocja studencka!</p>
                <p class="main_news">Dla studentów udzielamy 10% rabatu. Oferta dotyczy usług serwisowych laptopów.
                </p>
            </div>
            <div class="container_news">
                <p class="header_news">Darmowa konserwacja!</p>
                <p class="main_news">Teraz przy każdej naprawie sprzętowej dodatkowo wykonujemy czyszczenie i
                    konserwację sprzętu.</p>

            </div>
            <div class="container_news">
                <p class="header_news">Darmowe czyszczenie!</p>
                <p class="main_news">Teraz do wykonanej usługi, drugi komputer bezpłatnie wyczyścimy ze zbędnego
                    oprogramowania, wirusów lub trojanów</p>

            </div>

        </div>
        <?php include 'partial/footer.php';?>

    </main>

</body>

</html>