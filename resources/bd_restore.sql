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
);

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
);

INSERT INTO skillTab (id, name, tabIcon, logiciel) VALUES 
('art', 'Artistique', 'swatchbook', NULL),
('network', 'Infrastrucutre réseau & web', 'globe', NULL),
('prog', 'Programmation', 'computer', 'Vscode;Netbeans;Github'),
('other', 'Non classé', 'file-circle-question', NULL);

CREATE TABLE IF NOT EXISTS skill (
  id            int NOT NULL AUTO_INCREMENT,
  skillName     VARCHAR(50) NOT NULL,
  skillLevel    INT NOT NULL DEFAULT 0,
  skillType     ENUM('art', 'network', 'prog', 'other') NOT NULL,
  CONSTRAINT PK_SKILL PRIMARY KEY (id),
  CONSTRAINT FK_SKILL_SKILLTAB FOREIGN KEY (skillType) REFERENCES skillTab(id),
  CONSTRAINT CK_SKILL_SKILLLEVEL CHECK (skillLevel >= 0 AND skillLevel <= 10)
);

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
);

INSERT INTO langues (langueName, langueLevel) VALUES
('Français', 'C1'),
('Anglais', 'B1');
