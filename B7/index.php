<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>B7 - Vojin Sundovic</title>
</head>

<body>
    <?php require './components/header.php'; ?>
    <section id="forma">
        <h2>Mozete se logovati sa sledecim nalozima</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p><b>Korisnicko ime: </b>Test</p>
                    <p><b>Lozinka: </b>test123</p>
                </div>
                <div class="col-md-6">
                    <p><b>Korisnicko ime: </b>Test2</p>
                    <p><b>Lozinka: </b>test2123</p>
                </div>
            </div>
        </div>
        <hr>
        <?php
        $ime1 = "Test";
        $ime2 = "Test2";
        $psw1 = "test123";
        $psw2 = "test2123";
        $poruka = "";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $username = $_POST['username'];
            $password = $_POST['lozinka'];
            if ($username == $ime1 && $password == $psw1) {
                $poruka = "Test, dobrodosao na stranicu!";
            } else if ($username == $ime2 && $password == $psw2) {
                $poruka = "Test2, dobrodosao na stranicu!";
            } else {
                $poruka = "Pogresni podaci!";
            }
        }
        ?>
        <p>Unesite parametre za logovanje. <a href="#">Registrujte se</a> ako nemate nalog!</p>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <fieldset>
                <legend>Forma za logovanje</legend>

                <div class="form-control">
                    <label for="username">Korisnicko ime: </label><br>
                    <input type="text" placeholder="Unesite korisnicko ime" name="username"><br>
                    <label for="lozinka">Lozinka: </label><br>
                    <input type="password" placeholder="Unesite lozinku" name="lozinka">
                </div>
            </fieldset>
            <button type="submit">Prijava</button>
        </form>
        <p><?php echo $poruka; ?></p>
    </section>
    <?php require './components/footer.php'; ?>
</body>

</html>