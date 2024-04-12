<table class="table table-striped">
    <tr>
        <th>Code</th>
        <th>Referance</th>
        <th>Quantité</th>
    </tr>
    <?php
    include "connect.php";

    $requete = "SELECT code, ref, qte FROM piece";
    $resultat = $connexion->query($requete);

    // Vérification s'il y a des résultats
    if ($resultat->num_rows > 0) {
        // Parcourir les lignes de résultat
        while ($row = $resultat->fetch_assoc()) {
            // Affichage des données dans des balises HTML de tableau
            echo "<tr>";
            echo "<td>" . $row['code'] . "</td>";
            echo "<td>" . $row['ref'] . "</td>";
            echo "<td>" . $row['qte'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>Aucune donnée trouvée dans la table 'piece'.</td></tr>";
    }

    // Fermeture de la connexion à la base de données
    $connexion = null;
    ?>
</table>