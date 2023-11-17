<!DOCTYPE html>
<html>
    <head>
        <title>Convertisseur vetement</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>Urban Threads</h2>
            </div>
            <form id="form" method="post" action="" role="form">
                <div class="row">
                <div class="col-lg-6">
                        <label for="minPrice" class="form-label">Prix minimum<span class="blue">*</span></label>
                        <input id="minPrice" type="number" name="minPrice" class="form-control" placeholder="Prix minimum">
                    </div>
                    <div class="col-lg-6">
                        <label for="maxPrice" class="form-label">Prix maximum<span class="blue">*</span></label>
                        <input id="maxPrice" type="number" name="maxPrice" class="form-control" placeholder="Prix maximum">
                    </div>
                    <div>
                        <p class="blue"><strong>* Ces informations sont requises.</strong></p>
                    </div>
                <div class="col-lg-6">
                    <input type="submit" class="button1" value="Trouver des nouveaux vêtements">
                </div>
                    <div class="col-lg-6">
                        
                    <?php 
                    $articles = array(
                            "Chemise" => 8.99,
                            "Pantalon" => 7.49,
                            "Robe" => 5.99,
                            "T-shirt" => 4.99,
                            "Jupe" => 6.49,
                            "Veste en cuir" => 9.99,
                            "Chaussures de sport" => 8.99,
                            "Costume élégant" => 10.99,
                            "Sweat à capuche" => 7.99,
                            "Shorts de plage" => 5.49,
                            "Pull léger" => 12.49,
                            "Écharpe légère" => 14.99,
                            "Chaussures de marche" => 16.49,
                            "Chandail à col en V" => 18.99,
                            "Tennis légères" => 17.49,
                            "Shorts de sport" => 15.99,
                            "Pantoufles en velours" => 13.99,
                            "Sweat à manches longues" => 19.99,
                            "Parapluie pliable" => 11.99,
                            "Chaussures de danse" => 10.49,
                            "Chapeau de paille" => 22.99,
                            "Écharpe en laine" => 24.99,
                            "Jeans déchirés" => 26.99,
                            "Sacoche en cuir" => 23.99,
                            "Chaussettes colorées (lot de 3)" => 20.99,
                            "Chemisier floral" => 25.99,
                            "Polo classique" => 27.99,
                            "Pantalon de jogging" => 22.99,
                            "Pyjama confortable" => 28.99,
                            "Manteau d'hiver" => 29.99,
                            "Bottes en cuir" => 38.99,
                            "Élégante cravate" => 31.99,
                            "Montre élégante" => 32.99,
                            "Chaussons douillets" => 30.99,
                            "Casquette de baseball" => 34.99,
                            "Sac à dos tendance" => 35.99,
                            "Bikini deux pièces" => 36.99,
                            "Pull en cachemire" => 39.99,
                            "Gants en laine" => 37.99,
                            "Sac fourre-tout" => 38.99,
                            "Pull à col roulé" => 41.99,
                            "Short de course" => 42.99,
                            "Casque de vélo" => 43.99,
                            "Trench-coat élégant" => 45.99,
                            "Étui pour téléphone" => 46.99,
                            "Leggings confortables" => 47.99,
                            "Chandail à capuche" => 48.99,
                            "Chaussures à talons hauts" => 49.99,
                            "Sweat zippé" => 44.99,
                            "Cravate en soie" => 47.99,
                            "Ceinture en cuir" => 51.99,
                            "Chaussettes hautes" => 52.99,
                            "Maillot de bain une pièce" => 53.99,
                            "Chandail en laine" => 54.99,
                            "Portefeuille en cuir" => 55.99,
                            "Robe de soirée" => 56.99,
                            "Sneakers" => 57.99,
                            "Écharpe" => 58.99,
                            "Chemisier en soie" => 59.99,
                            "Pantoufles moelleuses" => 50.99,
                            "Sweat à motifs" => 63.99,
                            "Lunettes de soleil élégantes" => 64.99,
                            "Bottines à lacets" => 65.99,
                            "Costume de bain pour hommes" => 66.99,
                            "Chemise à carreaux" => 67.99,
                            "Casquette de pêche" => 68.99,
                            "Chapeau de feutre" => 69.99,
                            "Chandail" => 60.99,
                            "Tennis " => 61.99,
                            "Shorts" => 62.99,
                            "Pantoufles" => 70.99,
                            "Sweat" => 71.99,
                            "Parapluie" => 72.99,
                            "Chaussures" => 73.99,
                            "Sac de plage" => 74.99,
                            "T-shirt à rayures" => 75.99,
                            "Collants de sport" => 76.99,
                            "Mocassins élégants" => 77.99,
                            "Chandail à motif géométrique" => 78.99,
                            "Gilet en laine" => 79.99,
                            "Sac bandoulière" => 80.99,
                            "Maillot de football" => 81.99,
                            "Gilet matelassé" => 82.99,
                            "Chaussures de randonnée" => 83.99,
                            "Blouson en jean" => 84.99,
                            "Sac à main chic" => 85.99,
                            "Pantalon cargo" => 86.99,
                            "Chaussons en mousse à mémoire de forme" => 87.99,
                            "Porte-monnaie mignon" => 88.99,
                            "Chemise à pois" => 89.99,
                            "Pantoufles à semelles antidérapantes" => 90.99,
                            "Sweat à capuche oversize" => 91.99,
                            "Chaussettes en laine mérinos" => 92.99,
                            "Étui à lunettes" => 93.99,
                            "Jupe plissée" => 94.99,
                            "T-shirt vintage" => 95.99,
                            "Blouse à épaules dénudées" => 96.99,
                            "Short en jean" => 97.99,
                            "Gants tactiles" => 98.99,
                            "Chemisette légère" => 99.99,
                            "Chaussons en forme d'animaux" => 100.99,
                            "Écharpe à franges" => 101.99,
                            "Maillot de cyclisme" => 102.99,
                            "Veste coupe-vent" => 103.99,
                            "Chaussures de soirée" => 104.99,
                            "Sweat à capuche sans manches" => 105.99
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $minPrice = floatval($_POST["minPrice"]);
    $maxPrice = floatval($_POST["maxPrice"]);

    if ($minPrice >= 0 && $maxPrice >= $minPrice) {
        $articles_fourchette = array();

        foreach ($articles as $article => $prix) {
            if ($prix >= $minPrice && $prix <= $maxPrice) {
                $articles_fourchette[$article] = $prix;
            }
        }

        echo "<h3>Articles entre $minPrice et $maxPrice € :</h3>";
        if (empty($articles_fourchette)) {
            echo "<p>Aucun article trouvé dans cette fourchette de prix.</p>";
        } else {
            echo "<ul>";
            foreach ($articles_fourchette as $achat => $prix) {
                echo "<li>$achat - $prix €</li>";
            }
            echo "</ul>";
        }
    } else {
        echo "<p>Les valeurs de prix saisies ne sont pas valides.</p>";
    }
}

?>

                    </div>    
                </div>
            </form>
        </div>
    </body>
</html>