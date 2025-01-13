</head>
<body>
  <form action="films.php" method="POST" enctype="multipart/form-data">
    <div>
      <label for="Titre">Titre :</label>
      <input type="text" id="Titre" name="Titre" placeholder="Entrez le titre du film" required>
    </div>
    <div>
      <label for="description">Description :</label>
      <input type="textarea" id="description" name="description" placeholder="Entrez la description du film" required>
    </div>
    <div>
      <label for="image">Image :</label>
      <input type="file" id="image" name="image" required>
    </div>
    <div>
      <label for="urlvideo">URL de la vidéo :</label>
      <input type="text" id="urlvideo" name="urlvideo" placeholder="Entrez l'URL de la vidéo">
    </div>
    <button type="submit">Ajouter</button>
  </form>
</body>
</html>