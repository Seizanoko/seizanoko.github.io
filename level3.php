<?php
// Définir un cookie côté serveur
setcookie("password", "tropfort", time() + 3600, "/"); // Cookie valide pendant 1 heure
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTF Niveau 3</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            text-align: center;
            padding: 50px;
        }
        h1 {
            color: #333;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .hint {
            margin-top: 20px;
            color: #888;
        }
    </style>
</head>
<body>
    <h1>Bienvenue au CTF - Niveau 3</h1>
    <p>Trouvez le mot de passe caché pour terminer le défi.</p>

    <!-- Formulaire pour soumettre le mot de passe -->
    <form method="POST" action="">
        <input type="text" name="motDePasse" placeholder="Entrez le mot de passe ici" required>
        <button type="submit">Valider</button>
    </form>

    <?php
    // Vérifier si le mot de passe soumis est correct
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_COOKIE["password"]) && $_POST["motDePasse"] === $_COOKIE["password"]) {
            echo "<script>alert('Félicitations ! Vous avez terminé le CTF !'); window.location.href = 'congrat456.html';</script>";
        } else {
            echo "<p style='color: red;'>Mot de passe incorrect. Essayez encore !</p>";
        }
    }
    ?>
</body>
</html>
