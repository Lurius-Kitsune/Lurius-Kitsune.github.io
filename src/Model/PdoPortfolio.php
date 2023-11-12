<?php

/**
 * Classe d'accès aux données.
 *
 * Utilise les services de la classe PDO
 * pour l'application GSB
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $connexion de type PDO
 * $instance qui contiendra l'unique instance de la classe
 *
 * PHP Version 8
 *
 * @category  PPE
 * @author    Lucas Bruel <lucasfox@outlook.fr>
 * @copyright 2023 Lucas Bruel
 * @version   Release: 1.0
 * @link      http://www.php.net/manual/fr/book.pdo.php PHP Data Objects sur php.net
 */

namespace Luriusfox\MyPackage\Model;

use PDO;

require_once '../config/bdd.php';

class PdoPortfolio
{
    protected $connexion;
    private static $instance = null;

    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     */
    private function __construct()
    {
        $this->connexion = new PDO(DB_DSN, DB_USER, DB_PWD);
        $this->connexion->query('SET CHARACTER SET utf8');
    }

    /**
     * Méthode destructeur appelée dès qu'il n'y a plus de référence sur un
     * objet donné, ou dans n'importe quel ordre pendant la séquence d'arrêt.
     */
    public function __destruct()
    {
        $this->connexion = null;
    }

    /**
     * Fonction statique qui crée l'unique instance de la classe
     * Appel : $instancePdoPortfolio = PdoPortfolio::getPdoPortfolio();
     *
     * @return l'unique objet de la classe PdoPortfolio
     */
    public static function getPdoPortfolio(): PdoPortfolio
    {
        if (self::$instance == null) {
            self::$instance = new PdoPortfolio();
        }
        return self::$instance;
    }

    public function getAllCompanyInfo(): array
    {
        $result = $this->connexion->query("SELECT * FROM companywork order by id desc");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCompanyInfo(string $companyName): array|bool
    {
        $result = $this->connexion->prepare("SELECT * FROM companywork WHERE companyName = :companyName");
        $result->bindParam(':companyName', $companyName, PDO::PARAM_STR);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function getSkillsInfoFromTab(string $skillType): array|bool
    {
        $result = $this->connexion->prepare("SELECT skillTab.*, skill.skillName, skill.skillLevel FROM skill 
            RIGHT JOIN skillTab ON skill.skillType = skillTab.id WHERE skillTab.id = :skillType");
        $result->bindParam(':skillType', $skillType, PDO::PARAM_STR);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSkillsTabList(): array|bool
    {
        $result = $this->connexion->query("SELECT skillTab.id, skillTab.name FROM skillTab");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProjectInfo(string $projectId): array|bool
    {
        $result = $this->connexion->prepare("SELECT * FROM realisation WHERE id = :projectId");
        $result->bindParam(':projectId', $projectId, PDO::PARAM_STR);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function getCarousselProjectInfo(string $projectId): array|bool
    {
        $result = $this->connexion->prepare("SELECT realisation_image.image_url, realisation_image.alt_text, realisation_text.text_content, carousel_item.ressource_url, carousel_item.carousel_item_id
                                            FROM carousel_item 
                                            INNER JOIN realisation_text ON realisation_text.text_id = carousel_item.text_id
                                            INNER JOIN realisation_image ON realisation_image.image_id = carousel_item.image_id
                                            WHERE carousel_item.realisation_id = :projectId");
        $result->bindParam(':projectId', $projectId, PDO::PARAM_STR);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProjectSubDescription(string $projectId): array|bool
    {
        $result = $this->connexion->prepare("SELECT text_content FROM realisation_text WHERE realisation_id = :projectId and text_id LIKE 'SubText%'");
        $result->bindParam(':projectId', $projectId, PDO::PARAM_STR);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
