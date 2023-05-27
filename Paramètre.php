<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Paramètres</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      text-align: center;
      padding: 40px;
    }

    h1 {
      color: #333;
    }

    .settings-form {
      max-width: 400px;
      margin: 0 auto;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <h1>Paramètres</h1>

  <form class="settings-form">
    <div class="form-group">
      <label for="username">Nom d'utilisateur</label>
      <input type="text" id="username" name="username" placeholder="Votre nom d'utilisateur">
    </div>

    <div class="form-group">
      <label for="email">Adresse e-mail</label>
      <input type="email" id="email" name="email" placeholder="Votre adresse e-mail">
    </div>

    <div class="form-group">
      <label for="timezone">Fuseau horaire</label>
      <select id="timezone" name="timezone">
        <option value="gmt-12">GMT-12:00</option>
        <option value="gmt-11">GMT-11:00</option>
        <option value="gmt-10">GMT-10:00</option>
        <!-- Ajoutez d'autres options de fuseau horaire ici -->
      </select>
    </div>

    <div class="form-group">
      <label for="notification">Notifications</label>
      <input type="checkbox" id="notification" name="notification">
      <label for="notification">Activer les notifications</label>
    </div>

    <div class="form-group">
      <label for="language">Langue</label>
      <select id="language" name="language">
        <option value="fr">Français</option>
        <option value="en">English</option>
        <option value="es">Español</option>
        <!-- Ajoutez d'autres options de langue ici -->
      </select>
    </div>

    <button class="button" type="submit">Enregistrer</button>
  </form>
</body>
</html>
