<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP Docker PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 60px auto;
            padding: 20px;
            background-color: #662f2f;
        }
        h1 { color: #ffffff; }
        .info { 
            background: white;
            padding: 18px;
            margin: 10px 0;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1> TP Dockerisation PHP</h1>
    
    <div class="info">
        <h2>Informations</h2>
        <p><strong>Version PHP :</strong> <?php echo phpversion(); ?></p>
        <p><strong>Date :</strong> <?php echo date('d/m/Y H:i:s'); ?></p>
    </div>

    <div class="info">
        <h2>Test MySQL</h2>
        <?php
        try {
            $pdo = new PDO("mysql:host=mysql;dbname=app_database", "app_user", "app_password");
            echo '<p style="color: green;">✓ Connexion MySQL réussie !</p>';
        } catch(PDOException $e) {
            echo '<p style="color: red;">✗ Erreur : ' . $e->getMessage() . '</p>';
        }
        ?>
    </div>

    <div class="info">
        <p>phpMyAdmin : <a href="http://localhost:8081">http://localhost:8081</a></p>
    </div>
</body>
</html>