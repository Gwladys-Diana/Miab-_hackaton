<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Demande de Transport</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      padding: 20px;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }

    /* .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-group textarea {
      resize: vertical;
    }

    .form-group input[type="submit"] {
      padding: 8px 12px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .form-group input[type="submit"]:hover {
      background-color: #0056b3;
    } */
  </style>
</head>
<body>
  <div class="container">
    <!-- <h1>Demande de Transport</h1> -->

    <!-- <form>
      <div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
      </div>

      <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="adresse">Adresse :</label>
        <textarea id="adresse" name="adresse" required></textarea>
      </div>

      <div class="form-group">
        <label for="produits">Liste des Produits :</label>
        <textarea id="produits" name="produits" required></textarea>
      </div>

      <div class="form-group">
        <input type="submit" value="Envoyer">
      </div>
    </form> -->
  </div>
</body>
</html>




<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Demande de transport</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      padding: 20px;
    }

    .transport-request-container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }

    .transport-request-container h1 {
      text-align: center;
    }

    .transport-request-container table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    .transport-request-container th, .transport-request-container td {
      padding: 10px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }

    .transport-request-container th {
      background-color: #f2f2f2;
      font-weight: bold;
      color: #333;
    }

    .transport-request-container tr:hover {
      background-color: #f9f9f9;
    }

    .transport-request-container .clickable {
      cursor: pointer;
      text-decoration: underline;
      color: blue;
    }

    .transport-request-container .clickable:hover {
      text-decoration: none;
    }

    .transport-request-form {
      margin-top: 20px;
    }

    .transport-request-form label {
      display: block;
      margin-bottom: 5px;
    }

    .transport-request-form input[type="text"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .transport-request-form textarea {
      width: 100%;
      height: 100px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .transport-request-form button {
      margin-top: 10px;
      padding: 8px 12px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .transport-request-form button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="transport-request-container">
    <h1>Demande de transport des produits</h1>

    <table>
      <thead>
        <tr>
          <th>Identifiant du produit</th>
          <th>Identifiant du transporteur</th>
          <th>Prix de transport</th>
          <!-- Ajouter d'autres en-têtes si nécessaire -->
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="clickable">Produit 1</td>
          <td class="clickable">Transporteur 1</td>
          <td>50€</td>
          <!-- Ajouter d'autres colonnes si nécessaire -->
        </tr>
        <tr>
          <td class="clickable">Produit 2</td>
          <td class="clickable">Transporteur 2</td>
          <td>70€</td>
          <!-- Ajouter d'autres colonnes si nécessaire -->
        </tr>
        <!-- Ajouter d'autres lignes pour les produits -->
      </tbody>
    </table>

    <!-- <form class="transport-request-form">
      <label for="product-id">Identifiant du produit:</label>
      <input type="text" id="product-id" name="product-id">

      <label for="carrier-id">Identifiant du transporteur:</label>
      <input type="text" id="carrier-id" name="carrier-id">

      <label for="transport-price">Prix de transport:</label>
      <input type="text" id="transport-price" name="transport-price">

      Ajouter d'autres champs si nécessaire

      <button type="submit">Soumettre la demande</button>
    </form> -->
  </div>
</body>
</html>
