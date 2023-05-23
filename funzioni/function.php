<?php
session_start();

$_SESSION['numeroCaratteri'] = $_GET['numeroCaratteri'];
$_SESSION['Ripetizioni'] = $_GET['Ripetizioni'];
$_SESSION['numeri'] = $_GET['numeri'];
$_SESSION['lettere'] = $_GET['lettere'];
$_SESSION['simboli'] = $_GET['simboli'];

function generaPassword($lunghezza, $consentiRipetizioni, $consentiNumeri, $consentiLettere, $consentiSimboli)
{
    $insiemeCaratteri = '';
    $password = '';

    // Costruzione dell'insieme di caratteri in base ai criteri
    if ($consentiNumeri) {
        $insiemeCaratteri .= '0123456789';
    }
    if ($consentiLettere) {
        $insiemeCaratteri .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    if ($consentiSimboli) {
        $insiemeCaratteri .= '!@#$%^&*()-_+=~`[]\{}|;:"<>,./?';
    }

    // Generazione della password
    $lunghezzaInsieme = strlen($insiemeCaratteri);

    if ($lunghezzaInsieme > $lunghezza) {
        for ($i = 0; $i < $lunghezza; $i++) {
            if (!$consentiRipetizioni && $i > 0) {
                // Rimuove il carattere precedentemente generato dall'insieme
                $insiemeCaratteri = str_replace($password[$i - 1], '', $insiemeCaratteri);
                $lunghezzaInsieme = strlen($insiemeCaratteri);
            }
            $chiaveCasuale = random_int(0, $lunghezzaInsieme - 1);
            $password .= $insiemeCaratteri[$chiaveCasuale];
        }
    } else {
        $password = 'la lunghezza selezionata è eccessiva o nessun opzione è stata scelta';
    }

    return $password;
}
;

$_SESSION['password'] = generaPassword($_SESSION['numeroCaratteri'], $_SESSION['Ripetizioni'], $_SESSION['numeri'], $_SESSION['lettere'], $_SESSION['simboli'])
    ?>