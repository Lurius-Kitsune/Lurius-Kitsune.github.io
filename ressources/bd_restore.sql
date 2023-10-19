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
  isNew             BOOLEAN     NOT NULL DEFAULT TRUE,

  CONSTRAINT PK_COMPANYWORK PRIMARY KEY (id)
);

INSERT INTO companywork (companyName, lieu, duree, workType, imageLink, jobPost, mainTask, subTask, skill, hasManyReport, isNew) VALUES
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
'null',
false,
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
'null',
null,
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
true);