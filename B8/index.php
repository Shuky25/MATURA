<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>B8 - Vojin Sundovic</title>
</head>

<body>
    <?php require './components/header.php'; ?>
    <main>
        <section id="forma">
            <div class="col-md-6">
                <p>Ime:</p>
                <p>Mejl:</p>
                <p>Komentar:</p>

            </div>
            <div class="col-md-6">
            <form action="php/komentar.php" method="post">
                <input type="text" name="ime" placeholder="Unesi ime"><br>
                <input type="text" name="email" placeholder="Unesi email"><br>
                <textarea type="text" name="komentar" placeholder="Unesi komentar" rows="10" cols="40"></textarea><br>
                <button type="submit">Dodaj komentar</button>
            </form>
            </div>
        </section>
    </main>
    <?php require './components/footer.php'; ?>
</body>

</html>