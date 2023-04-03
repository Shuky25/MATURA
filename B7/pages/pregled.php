<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>B7 - Vojin Sundovic</title>
</head>

<body>
    <?php require '../components/header.php'; ?>

    <main>
        <?php
        // Učitajte XML fajl
        $xml = new DOMDocument();
        $xml->load("../xml/biblioteka.xml");

        // Učitajte XSL fajl
        $xsl = new DOMDocument();
        $xsl->load("../xml/biblioteka.xsl");

        // Kreirajte procesor
        $procesor = new XSLTProcessor();

        // Učitajte stil u procesor
        $procesor->importStylesheet($xsl);

        // Transformišite XML fajl i prikažite ga
        echo $procesor->transformToXML($xml);
        ?>
    </main>


    <?php require '../components/footer.php'; ?>
</body>

</html>