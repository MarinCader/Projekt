<?php $ulja = simplexml_load_file('Mirisna ulja.xml'); 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet"  href="Mirisna ulja.css" />
        <meta name="author" content="Marin Cader" />
        <meta name="keywords" content="mirisna ulja, ulja, mirisnaulja.hr, svijeće, mirisna ulja za svijeće" />
        <meta name="description" content="Otkrijte našu široku ponudu visokokvalitetnih mirisnih ulja za svijeće. Poboljšajte atmosferu svog doma s našim jedinstvenim i prirodnim aromama." />
        <link rel="icon" type="image/x-icon" href="fotografije/favicon-32x32.png" style="width: 32px;" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Philosopher|Mulish" />
        <script src="https://kit.fontawesome.com/b05e340512.js" crossorigin="anonymous"></script>

        <title>Mirisna ulja</title>
    </head>

    <body>
        <header>
            <a class="logo" href="#">
                <figure>
                    <img src="fotografije/figure.jpeg" />
                </figure>
            </a>
            <h1>&nbsp;Mirisna ulja</h1>
            <nav>
                <ul>
                    <li><a class="li_button" href="#">Početna</a></li>
                    <li style="display:none;"><a class="li_button" href="#">O nama</a></li>
                </ul>
            </nav>
        </header>

        <main id="trgovina_main">
            <h1 style="font-size:55px;">Trgovina</h1>
            <article><h2>Ljetni popusti do 30%!</h2></article>

            <section>
                <?php foreach ($ulja->MirisnoUlje as $MU): ?>
                    <article class="kupnja">
                        <figure><img src="<?php echo $MU->Slika; ?>" /></figure>
                        <a href="Detalji.php?id=<?php echo $MU->id ?>">
                            <h3><?php echo $MU->NazivProizvoda; ?></h3>
                        </a>
                        <p><?php echo $MU->Proizvodac; ?></p>
                        <p><?php echo $MU->Volumen; ?>mL</p>
                        <div>
                            <p class="stara_cijena"><?php echo $MU->Cijena; ?>€</p>
                            <p class="sniženje"><?php echo round($MU->Cijena*(1 - $MU->Snizenje/100),2); ?>€</p>
                            <button onclick="document.location='#'"><i class="fa-solid fa-basket-shopping"></i></button>
                        </div>
                    </article> 
                <?php endforeach; ?>
            </section>

        </main>

        <footer>
            <p>Marin Cader</p>
            <p>0246114218</p>
        </footer>
    </body>
</html>