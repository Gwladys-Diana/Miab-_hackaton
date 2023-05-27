<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Expédition</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('img/Agriculture-1080.jpg');
      padding: 20px;
    }
    

    .shipping-page-container {
      max-width: 800px;
      margin: 0 auto;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 20px;
        background: linear-gradient(to right, #ffcc00, #ff6699, #cc33ff, #3366ff, #00ccff, #00ff99, #99cc00);
        background-size: 1500% 1500%;
        animation: rainbow-background 10s ease infinite;
        }

        @keyframes rainbow-background {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }

            }

    .shipping-page-container h1 {
      text-align: center;
    }

    .shipping-details {
      margin-bottom: 20px;
    }

    .shipping-details p {
      margin: 5px 0;
    }

    .clickable {
      cursor: pointer;
      text-decoration: underline;
      color: blue;
    }

    .clickable:hover {
      text-decoration: none;
    }

    .map-container {
      height: 400px;
      margin-bottom: 20px;
    }

    .new-shipping-form {
      margin-top: 30px;
    }

    .new-shipping-form label {
      display: block;
      margin-bottom: 5px;
    }

    .new-shipping-form input[type="text"],
    .new-shipping-form input[type="date"],
    .new-shipping-form input[type="submit"] {
      margin-bottom: 10px;
    }
  </style>

<style>
    .container {
      background-image: url('img/Agriculture-1080.jpg');
      color: #fff;
      width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .form-row {
      margin-bottom: 16px;
    }

    .form-row label {
      display: inline-block;
      width: 120px;
      font-weight: bold;
    }

    .form-row input {
      width: 200px;
      padding: 6px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    .form-actions {
      text-align: right;
    }

    .form-actions button {
      padding: 8px 16px;
      background-color: #fa6304;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
<style>
  /* Styles pour le popup */
  .popup {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    z-index: 9999;
    display: none;
  }

  .overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 9998;
    display: none;
  }

  .popup-content {
    text-align: center;
  }

  .close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
  }
  .arr{
      border-radius: 50;
  }
  .coul{
    color: blue;
  }
</style>

<script>
    // Fonction pour afficher le popup
    function showPopup(productName) {
      var popup = document.getElementById("popup");
      var overlay = document.getElementById("overlay");
      var productNameElement = document.getElementById("product-name");

      productNameElement.innerHTML = productName;
      popup.style.display = "block";
      overlay.style.display = "block";
    }

    // Fonction pour fermer le popup
    function closePopup() {
      var popup = document.getElementById("popup");
      var overlay = document.getElementById("overlay");

      popup.style.display = "none";
      overlay.style.display = "none";
    }
  </script>
    <link href="https://fonts.googleapis.com/css2?family=Smokum&display=swap" rel="stylesheet">


</head>
<body>
  <div class="shipping-page-container">
    <h1 style="text-align: center; font-family: 'Smokum'; color: #f2f2f2;"><strong style="color: #0b150c;">Produits Expédiés</strong></h1>

    <div class="shipping-details">
      <h3>Expédition 1</h3>
      <p><strong>Identifiant de l'expédition:</strong> <span class="clickable"class="product-name; coul">
        <a href="#" onclick="showPopup('BLE'); return false;">Expédition 1</a></span></p>
      <p><strong>Identifiant du produit:</strong> <span class="clickable" class="product-name">
        <a href="#" onclick="showPopup('BLE'); return false;">Produit 1</a></span></p>
      <p><strong>Identifiant du transporteur:</strong> <span class="product-name">
        <a href="#" onclick="showPopup('BLE'); return false;">Transporteur 1</a></span></p>
      <p><strong>Date de début:</strong> 2023-05-20</p>
      <p><strong>Localisation actuelle:</strong> Paris</p>
      <p><strong>Date prévue d'arrivée:</strong> 2023-05-25</p>
      <div class="map-container" id="map1"></div>
    </div>


    <script>
      // Fonction d'initialisation de la carte Google Maps
      function initMap() {
        // Coordonnées pour la première expédition
        var expedition1LatLng = { lat: 48.8566, lng: 2.3522 };
        // Coordonnées pour la deuxième expédition
        var expedition2LatLng = { lat: 40.7128, lng: -74.0060 };

        // Création de la carte pour la première expédition
        var map1 = new google.maps.Map(document.getElementById('map1'), {
          zoom: 10,
          center: expedition1LatLng
        });

        // Création de la marqueur pour la première expédition
        var marker1 = new google.maps.Marker({
          position: expedition1LatLng,
          map: map1
        });

        // Création de la carte pour la deuxième expédition
        var map2 = new google.maps.Map(document.getElementById('map2'), {
          zoom: 10,
          center: expedition2LatLng
        });

        // Création de la marqueur pour la deuxième expédition
        var marker2 = new google.maps.Marker({
          position: expedition2LatLng,
          map: map2
        });
      }
    </script>
    <!-- Inclusion de l'API Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=VOTRE_CLE_API&callback=initMap" async defer></script>

     <!-- Popup -->
  <div id="popup" class="popup">
    <div class="popup-content">
      <h2 id="product-name"></h2>
      <p>Popup décrivant le produit</p>
      <button class="close-btn" onclick="closePopup()">Fermer</button>
    </div>
  </div>

  <!-- Overlay -->
  <div id="overlay" class="overlay"></div>
    </div>
  </div>
  </div>

</body>
</html>


<!-- <!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Page d'expédition</title>
  <style>
    /* Styles CSS */
  </style>
</head>
<body>
  <div class="shipping-page-container">
    <h1>Expédition des produits</h1>

    <div class="shipping-details">
      <h3>Expédition 1</h3>
      <p><strong>Identifiant de l'expédition:</strong> <span class="clickable" onclick="showDetails('expedition1')">Expédition 1</span></p>
      <p><strong>Identifiant du produit:</strong> <span class="clickable" onclick="showDetails('product1')">Produit 1</span></p>
      <p><strong>Identifiant du transporteur:</strong> <span class="clickable" onclick="showDetails('carrier1')">Transporteur 1</span></p>
      <p><strong>Date de début:</strong> 2023-05-20</p>
      <p><strong>Localisation actuelle:</strong> Paris</p>
      <p><strong>Date prévue d'arrivée:</strong> 2023-05-25</p>
      <div class="map-container" id="map1"></div>
    </div>

    <div class="shipping-details">
      <h3>Expédition 2</h3>
      <p><strong>Identifiant de l'expédition:</strong> <span class="clickable" onclick="showDetails('expedition2')">Expédition 2</span></p>
      <p><strong>Identifiant du produit:</strong> <span class="clickable" onclick="showDetails('product2')">Produit 2</span></p>
      <p><strong>Identifiant du transporteur:</strong> <span class="clickable" onclick="showDetails('carrier2')">Transporteur 2</span></p>
      <p><strong>Date de début:</strong> 2023-05-22</p>
      <p><strong>Localisation actuelle:</strong> New York</p>
      <p><strong>Date prévue d'arrivée:</strong> 2023-05-28</p>
      <div class="map-container" id="map2"></div>
    </div>

    <div id="details-modal" class="modal">
      <div class="modal-content">
        <span class="close" onclick="hideDetails()">&times;</span>
        <div id="details-content"></div>
      </div>
    </div>

    <script>
      // Fonction d'initialisation de la carte Google Maps
      function initMap() {
        // Coordonnées pour la première expédition
        var expedition1LatLng = { lat: 48.8566, lng: 2.3522 };
        // Coordonnées pour la deuxième expédition
        var expedition2LatLng = { lat: 40.7128, lng: -74.0060 };

        // Création de la carte pour la première expédition
        var map1 = new google.maps.Map(document.getElementById('map1'), {
          zoom: 10,
          center: expedition1LatLng
        });

        // Création de la marqueur pour la première expédition
        var marker1 = new google.maps.Marker({
          position: expedition1LatLng,
          map: map1
        });

        // Création de la carte pour la deuxième expédition
        var map2 = new google.maps.Map(document.getElementById('map2'), {
          zoom: 10,
          center: expedition2LatLng
        });

        // Création de la marqueur pour la deuxième expédition
        var marker2 = new google.maps.Marker({
          position: expedition2LatLng,
          map: map2
        });
      }

      // Affiche les détails correspondants à l'élément cliqué
      function showDetails(itemId) {
        var content = '';
        switch (itemId) {
          case 'expedition1':
            content = '<h2>Expédition 1</h2><p>Informations supplémentaires sur l\'expédition 1...</p>';
            break;
          case 'product1':
            content = '<h2>Produit 1</h2><p>Informations supplémentaires sur le produit 1...</p>';
            break;
          case 'carrier1':
            content = '<h2>Transporteur 1</h2><p>Informations supplémentaires sur le transporteur 1...</p>';
            break;
          case 'expedition2':
            content = '<h2>Expédition 2</h2><p>Informations supplémentaires sur l\'expédition 2...</p>';
            break;
          case 'product2':
            content = '<h2>Produit 2</h2><p>Informations supplémentaires sur le produit 2...</p>';
            break;
          case 'carrier2':
            content = '<h2>Transporteur 2</h2><p>Informations supplémentaires sur le transporteur 2...</p>';
            break;
        }

        var modal = document.getElementById('details-modal');
        var detailsContent = document.getElementById('details-content');
        detailsContent.innerHTML = content;
        modal.style.display = 'block';
      }

      // Masque la boîte de dialogue des détails
      function hideDetails() {
        var modal = document.getElementById('details-modal');
        modal.style.display = 'none';
      }
    </script>-->
    <!-- Inclusion de l'API Google Maps --
    <script src="https://maps.googleapis.com/maps/api/js?key=VOTRE_CLE_API&callback=initMap" async defer></script>
  </div>
</body>
</html> -->