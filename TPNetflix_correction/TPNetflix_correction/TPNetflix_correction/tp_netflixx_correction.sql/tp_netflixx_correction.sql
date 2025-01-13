-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 03 mai 2024 à 18:04
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tp_netflixx_correction`
--

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `urlphoto` varchar(255) NOT NULL,
  `urlvideo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`id`, `title`, `description`, `urlphoto`, `urlvideo`) VALUES
(1, 'The Woman King', 'The Woman King retrace l\'histoire extraordinaire des Agojié, une unité de guerrières qui protégèrent le royaume de Dahomey au XIXème siècle en Afrique de l\'Ouest. Leurs aptitudes et leur fureur n\'ont jamais trouvé d\'égal.', 'https://fr.web.img6.acsta.net/pictures/22/07/22/15/59/5308737.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/3RDaPV_rJ1Y?si=rTBS4L-kCn8JUkzB\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>'),
(2, 'Super Mario Bros, le film', 'Alors qu’ils tentent de réparer une canalisation souterraine, Mario et son frère Luigi, tous deux plombiers, se retrouvent plongés dans un nouvel univers féerique à travers un mystérieux conduit...', 'https://fr.web.img5.acsta.net/pictures/23/03/20/14/57/4979368.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/iwst-UZn3wM?si=DVXlBdxrqYU8CryJ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>'),
(3, 'Avatar 2 - La voie de l\'eau', 'Se déroulant plus d’une décennie après les événements relatés dans le premier film, AVATAR : LA VOIE DE L’EAU raconte l\'histoire des membres de la famille Sully (Jake, Neytiri et leurs enfants), les épreuves auxquelles ils sont confrontés...', 'https://fr.web.img4.acsta.net/pictures/22/11/02/14/49/4565071.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/598NnroP42s?si=ZKL5Z7ORPe4IR3vW\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>'),
(4, 'Le voyage de Chihiro', 'Chihiro, une fillette de 10 ans, est en route vers sa nouvelle demeure en compagnie de ses parents. Au cours du voyage, la famille fait une halte dans un parc à thème qui leur paraît délabré. Lors de la visite, les parents s’arrêtent dans...', 'https://fr.web.img6.acsta.net/medias/nmedia/00/02/36/71/chihiro.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/EhIZrZQoHuA?si=5-EF9UGR6GFhqqqT\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>'),
(5, 'Bob Marley: One Love', 'Bob Marley: One Love célèbre la vie et la musique d\'une icône qui a inspiré des générations à travers son message d\'amour et d\'unité.', 'https://fr.web.img2.acsta.net/pictures/24/01/18/11/59/2019347.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Spuae-d2K0g?si=DVwORs-oBmXCMLU1\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>'),
(6, 'Le royaume des abysses', 'Shenxiu, une fillette de 10 ans, est aspirée dans les profondeurs marines durant une croisière familiale. Elle découvre l’univers fantastique des abysses, un monde inconnu peuplé d’incroyables créatures...', 'https://fr.web.img6.acsta.net/pictures/23/12/01/14/15/3412210.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/erZ8bvVddOo?si=wq0nuhgBeKIvyfBe\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>'),
(7, 'Top Gun : Maverick', 'Après avoir été l’un des meilleurs pilotes de chasse de la Marine américaine pendant plus de trente ans, Pete “Maverick\" Mitchell continue à repousser ses limites en tant que pilote d\'essai...', 'https://fr.web.img3.acsta.net/pictures/22/03/29/15/12/0827894.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/55JwQINVIDA?si=ppFqlpod-JVeTC9O\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
