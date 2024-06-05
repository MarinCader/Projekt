<?php $ulja = simplexml_load_file('Mirisna ulja.xml'); ?>
<?php
        $id = $_GET['id'];
        $ulje = null;
        foreach ($ulja->MirisnoUlje as $MU) {
            $currentId = (string)$MU->id;
            if($currentId == $id) {
                $ulje = $MU;
            }
        }
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
                    <li><a class="li_button" href="Mirisna ulja.php">Početna</a></li>
                    <li style="display:none;"><a class="li_button" href="#">O nama</a></li>
                </ul>
            </nav>
        </header>

        <main id="trgovina_main">
            <h1 style="font-size:55px;">Detalji</h1>
            <figure id="opis_i">
                <img src="<?php echo $ulje->Slika; ?>" />
            </figure>
            <div>
                <h1 class="opis_p" style="text-align:center;"><?php echo (string)$ulje->NazivProizvoda; ?></h1>
                <h1 class="opis_p" style="text-align:center;margin-bottom:30px;"><?php echo (string)$ulje->Proizvodac; ?></h1>
                <h1>Sastav</h1>
                <article id="sastav">
                    <ul>
                        <?php foreach ($ulje->Opis->Sastojci->Sastojak as $S): ?>
                            <li><?php echo (string)$S; ?></li>
                        <?php endforeach; ?> 
                    </ul> 
                </article>  
                <h1>Primjena</h1>
                <p class="opis_p"><?php echo (string)$ulje->Opis->Primjena; ?></p>
                <h1>Oprez!</h1>
                <p class="opis_p"><?php echo (string)$ulje->Opis->Upozorenja; ?></p>
            </div>
        </main>

        <footer>
            <p>Marin Cader</p>
            <p>0246114218</p>
        </footer>
    </body>
</html>