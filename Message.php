<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Chat</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      padding: 20px;
    }

    .chat-container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }

    .message-list {
      list-style-type: none;
      padding: 0;
      margin-bottom: 20px;
    }

    .message-item {
      margin-bottom: 10px;
    }

    .message-item .username {
      font-weight: bold;
      color: #007bff;
    }

    .message-item .timestamp {
      font-size: 12px;
      color: #888;
    }

    .message-item .content {
      margin-top: 5px;
    }

    .message-form {
      display: flex;
      margin-top: 20px;
    }

    .message-form textarea {
      flex-grow: 1;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .message-form button {
      margin-left: 10px;
      padding: 8px 12px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .message-form button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="chat-container">
    <h1>Chat</h1>

    <ul class="message-list">
      <li class="message-item">
        <span class="username">Utilisateur1:</span>
        <span class="timestamp">20/05/2023 10:30 AM</span>
        <p class="content">Bonjour, comment ça va ?</p>
      </li>
      <li class="message-item">
        <span class="username">Utilisateur2:</span>
        <span class="timestamp">20/05/2023 10:35 AM</span>
        <p class="content">Ça va bien, merci ! Et toi ?</p>
      </li>
      <!-- Ajoutez d'autres messages ici -->
    </ul>

    <form class="message-form">
      <textarea placeholder="Entrez votre message"></textarea>
      <button type="submit">Envoyer</button>
    </form>
  </div>
</body>
</html>
