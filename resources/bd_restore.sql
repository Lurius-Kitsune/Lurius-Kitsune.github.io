CREATE DATABASE portfolio;
USE portfolio;

DROP USER IF EXISTS 'portfolioPdo'@'localhost';
CREATE USER IF NOT EXISTS 'portfolioPdo'@'localhost' IDENTIFIED BY 'toModify';
GRANT SELECT ON portfolio.* TO 'portfolioPdo'@'localhost';

CREATE TABLE companywork (
  id            int NOT NULL AUTO_INCREMENT,
  companyName       VARCHAR(50) NOT NULL,
  workType          ENUM('Stage', 'Alternance', 'CDI', 'CDD') NOT NULL,
  lieu              VARCHAR(50) NOT NULL,
  duree             VARCHAR(50) NOT NULL,
  imageLink         VARCHAR(1000) NOT NULL,
  jobPost           VARCHAR(50) NOT NULL,
  mainTask          VARCHAR(300) NOT NULL,
  subTask           VARCHAR(300) NULL,
  skill             VARCHAR(300) NOT NULL,
  hasManyReport     BOOLEAN     NULL,
  nbReport          INT         NULL,
  isNew             BOOLEAN     NOT NULL DEFAULT TRUE,
  CONSTRAINT PK_COMPANYWORK PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO companywork (companyName, lieu, duree, workType, imageLink, jobPost, mainTask, subTask, skill, hasManyReport, nbReport, isNew) VALUES
('Progial', 
'Poitiers',
'2021 (6 sem.)',
'Stage',
'https://is1-ssl.mzstatic.com/image/thumb/Purple124/v4/7e/8d/47/7e8d4748-511c-fbbf-8984-d53c362c97b1/source/512x512bb.jpg', 
'Administrateur réseaux', 
'Supervision & Maintenance de serveur à distance.;
Installation d\'un cluster DHCP.;
Déploiment de suite informatique à travers l\'infratruture de l\'entreprise.', 
null,
'Bash;Linux',
false,
1,
false),
('Linexos',
'Chasseneuil-du-Poitou',
'2021 (6 sem.)',
'Stage',
'https://ccibusiness.fr/sites/default/files/styles/photo_company_220_220/public/2021-07/Stickers.png?itok=VL_KVMO6',
'Développeur Python',
'Développement d’une API ainsi qu’une REST API en Python.;
Travaille sur un début de projet d’un client de l’entreprise.;
Découverte de python en autodidacte.',
null,
'Python;Git',
null,
1,
false),
('Evoliz',
'La Garde',
'2023 (8 sem.)',
'Stage',
'https://lamacompta.co/wp-content/uploads/2021/12/Evoliz-logo.png',
'Développeur Web',
'Développement PHP-JS-HTML-CSS sur la solution.;
Intégration de fonctionnalité sur le panneaux administrative de la solution Evoliz.;
Travaille sur l\'intégration d\'une nouvelle fonctionalité sur la solution Evoliz.;
Maintenance et correction de bug sur la solution Evoliz.',
'Utilisation de Git Flow.;
Développement en Mob Programming.;
Veille Informatique avec l\'équipe de développeur.',
'PHP;JS;HTML;CSS;SQL;Git;Git Flow;Methodes SCRUM',
true,
8,
true);

CREATE TABLE IF NOT EXISTS skillTab (
    id      ENUM('art', 'network', 'prog', 'other') NOT NULL,
    name    VARCHAR(50) NOT NULL,
    tabIcon VARCHAR(50) NOT NULL,
    logiciel VARCHAR(200) NULL,
    CONSTRAINT PK_SKILLTAB PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO skillTab (id, name, tabIcon, logiciel) VALUES 
('prog', 'Programmation', 'computer', 'VScode;Netbeans;Github'),
('art', 'Artistique', 'swatchbook', 'Substance Painter;Blender;Photoshop'),
('network', 'Infrastrucutre réseau & web', 'globe', 'Putty;VScode'),
('other', 'Non classé', 'file-circle-question', NULL);

CREATE TABLE IF NOT EXISTS skill (
  id            int NOT NULL AUTO_INCREMENT,
  skillName     VARCHAR(50) NOT NULL,
  skillLevel    INT NOT NULL DEFAULT 0,
  skillType     ENUM('art', 'network', 'prog', 'other') NOT NULL,
  CONSTRAINT PK_SKILL PRIMARY KEY (id),
  CONSTRAINT FK_SKILL_SKILLTAB FOREIGN KEY (skillType) REFERENCES skillTab(id),
  CONSTRAINT CK_SKILL_SKILLLEVEL CHECK (skillLevel >= 0 AND skillLevel <= 10)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO skill (skillName, skillLevel, skillType) VALUES 
('Texturisation 3D', 6, 'art'),
('Edition 3D', 1, 'art'),
('POO', 7, 'prog'),
('C++', 1, 'prog'),
('C#', 6, 'prog'),
('Java', 4, 'prog'),
('JS', 5, 'prog'),
('SQL', 6, 'prog'),
('Bash', 3, 'prog'),
('Intégration web', 7, 'network'),
('Dév. web', 7, 'network'),
('Gestion de serveur', 5, 'network');

CREATE TABLE IF NOT EXISTS langues (
    id            int NOT NULL AUTO_INCREMENT,
    langueName    VARCHAR(50) NOT NULL,
    langueLevel   ENUM('A1', 'A2', 'B1', 'B2', 'C1', 'C2') NOT NULL,
    CONSTRAINT PK_LANGUES PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO langues (langueName, langueLevel) VALUES
('Français', 'C1'),
('Anglais', 'B1');

CREATE TABLE IF NOT EXISTS realisation (
    id            VARCHAR(15) NOT NULL,
    name    VARCHAR(50) NOT NULL,
    listBloc   VARCHAR(100) NOT NULL,
    duration VARCHAR(100) NOT NULL,
    description VARCHAR(1000) NOT NULL,
    repositoryLink VARCHAR(500) NULL,
    demoLink VARCHAR(500) NULL,
    CONSTRAINT PK_REALISATION PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE IF NOT EXISTS realisation_text (
    text_id       VARCHAR(15) NOT NULL,
    realisation_id VARCHAR(15) NOT NULL,
    text_content  TEXT NOT NULL,
    CONSTRAINT PK_REALISATION_TEXT PRIMARY KEY (text_id, realisation_id),
    CONSTRAINT FK_REALISATION_TEXT FOREIGN KEY (realisation_id) REFERENCES realisation(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE IF NOT EXISTS realisation_image (
    image_id       VARCHAR(15) NOT NULL,
    realisation_id VARCHAR(15) NOT NULL,
    image_url      VARCHAR(500) NOT NULL,
    alt_text       VARCHAR(255) NOT NULL,
    CONSTRAINT PK_REALISATION_IMAGE PRIMARY KEY (image_id, realisation_id),
    CONSTRAINT FK_REALISATION_IMAGE FOREIGN KEY (realisation_id) REFERENCES realisation(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE IF NOT EXISTS carousel_item (
    carousel_item_id VARCHAR(15) NOT NULL,
    realisation_id   VARCHAR(15) NOT NULL,
    text_id          VARCHAR(15) NULL,
    image_id         VARCHAR(15) NOT NULL,
    ressource_url VARCHAR(500) NOT NULL,
    CONSTRAINT PK_CAROUSEL_ITEM PRIMARY KEY (carousel_item_id, realisation_id),
    CONSTRAINT FK_CAROUSEL_REALISATION FOREIGN KEY (realisation_id) REFERENCES realisation(id) ON DELETE CASCADE,
    CONSTRAINT FK_CAROUSEL_TEXT FOREIGN KEY (text_id) REFERENCES realisation_text(text_id) ON DELETE SET NULL,
    CONSTRAINT FK_CAROUSEL_IMAGE FOREIGN KEY (image_id) REFERENCES realisation_image(image_id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO realisation (id, name, listBloc, duration, description, repositoryLink, demoLink) VALUES
('portfolio', 'Portfolio', '1.3;1.4', 'Début Janvier 2023 - Toujours en cours...', 
'Projet réalisé au cours de mes 2 années de BTS SIO. Celui-ci a été présenté lors de 
l\'épreuve E4 du BTS.',
'https://github.com/Lurius-Kitsune/Lurius-Kitsune.github.io',
null);

INSERT INTO realisation_text (text_id, realisation_id, text_content) VALUES 
('SubText1', 'portfolio', 'le but étant de m\'en servir afin de présenter mes réalisations 
aux entreprises et ainsi montrer ma détermination et ma volonté d\'apprendre. 
Grâce à ce projet, j\'ai pu mettre en pratique les compétences acquises tout au long de ma formation, 
démontrant ainsi ma capacité à appliquer les connaissances théoriques dans des situations concrètes.'),
('CarText1', 'portfolio', 'Organisation du projet "Portfolio".sur github.'),
('CarText2', 'portfolio', 'MDL de la base de donnée du projet "Portfolio".');

INSERT INTO realisation_image (image_id, realisation_id, image_url, alt_text) VALUES 
('screenGesProj1', 'portfolio', '/images/portfolio/gestionProjet.png', 'Organisation du projet "Portfolio".sur github.'),
('screenMDL1', 'portfolio', '/images/portfolio/databaseMDL.png', 'MDL de la base de donnée du projet "Portfolio".');

INSERT INTO carousel_item (carousel_item_id, realisation_id, text_id, image_id, ressource_url) VALUES 
('car1', 'portfolio', 'CarText1', 'screenGesProj1', '/images/portfolio/gestionProjet.png'),
('car2', 'portfolio', 'CarText2', 'screenMDL1', '/images/portfolio/databaseMDL.png');

INSERT INTO realisation (id, name, listBloc, duration, description, repositoryLink, demoLink) VALUES 
('nolark', 'Le site Nolark', '1.2', 'Septembre à fin Décembre 2022', 
'Ce site vise à avertir des dangers présents sur la route ainsi que l’importance du port du casque 
pour les conducteurs de deux-roues. On y trouve une section visant à sensibiliser les usagers de la route, 
une section d’achat en ligne avec une large gamme de produits disponible, mais aussi une page de contact.',
'https://github.com/Lurius-Kitsune/Tp-Nolark',
'https://lurius-kitsune.github.io/Tp-Nolark/');

INSERT INTO realisation_text (text_id, realisation_id, text_content) VALUES 
('SubText1', 'nolark', 'Le projet Nolark est un site fictif développé pendant le début de 
la 1 ére année de BTS SIO par une série de TP réalisé par les étudiants afin d\'apprendre les 
bases du développement en HTML, en CSS, en JS ainsi qu’une introduction sur le PHP.'),
('CarText1', 'nolark', 'La page d\'acceuil du site Nolark.'),
('CarText2', 'nolark', 'Le code HTML de la page d\'acceuil.'),
('CarText3', 'nolark', 'Exemple de code CSS fait pour la page.');

INSERT INTO realisation_image (image_id, realisation_id, image_url, alt_text) VALUES 
('screenHome1', 'nolark', '/images/Nolark/acceuil_nolark.png', 'La page d\'acceuil du site Nolark.'),
('screenHtml1', 'nolark', '/images/Nolark/nolark_html.png', 'Le code HTML de la page d\'acceuil.'),
('screenCss1', 'nolark', '/images/Nolark/nolark_css.png', 'Exemple de code CSS fait pour la page.');

INSERT INTO carousel_item (carousel_item_id, realisation_id, text_id, image_id, ressource_url) VALUES 
('car1', 'nolark', 'CarText1', 'screenHome1', '/images/Nolark/acceuil_nolark.png'),
('car2', 'nolark', 'CarText2', 'screenHtml1', '/resources/Nolark_css.txt'),
('car3', 'nolark', 'CarText3', 'screenCss1', '/resources/Nolark_index.txt');


-- ('nolark', 'img', '1', 'La page d\'acceuil du site Nolark.', '/images/Nolark/acceuil_nolark.png'),
-- ('nolark', 'img', '1', 'Le code HTML de la page d\'acceuil.', '/images/Nolark/acceuil_nolark.png')

