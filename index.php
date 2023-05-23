<?php
include __DIR__ . '/funzioni/function.php'
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/style.css">
    <title>php-strong-password-generator</title>
</head>

<body>
    <section class="container-fluid">
        <div class="row justify-content-center mb-2">
            <h1 class="text-center">Strong Password Generator</h1>
            <h2 class="text-center">Genera una password sicura</h2>
        </div>
        <div class="row justify-content-center mb-1">
            <div class="alert alert-primary col-10 text-center" role="alert">
                <?php echo $_SESSION['password'] ?>
            </div>
        </div>
        <div class="row justify-content-center">
            <form class="col-10 mt-2 p-5" action="index.php" method="GET">
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-9 col-form-label">Lunghezza password</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" id="inputPassword3" name="numeroCaratteri">
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-9 pt-0">Consenti ripetizioni di uno o più caratteri</legend>
                    <div class="col-sm-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Ripetizioni" id="gridRadios1" value="si"
                                checked>
                            <label class="form-check-label" for="gridRadios1">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Ripetizioni" id="gridRadios2"
                                value="false">
                            <label class="form-check-label" for="gridRadios2">
                                No
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="row mb-2">
                    <div class="col-sm-3 offset-sm-9">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1" name="lettere" value="true">
                            <label class="form-check-label" for="gridCheck1">
                                Lettere
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-3 offset-sm-9">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1" name="numeri" value="true">
                            <label class="form-check-label" for="gridCheck1">
                                Numeri
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-3 offset-sm-9">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1" name="simboli" value="true">
                            <label class="form-check-label" for="gridCheck1">
                                Simboli
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="submit" class="btn btn-primary">Annulla</button>
            </form>
        </div>
    </section>
</body>

</html>