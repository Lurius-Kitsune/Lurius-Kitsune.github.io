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
        $result = $this->connexion->prepare("SELECT skillTab.tabIcon, skillTab.name, skilltab.logiciel, skill.skillName, skill.skillLevel FROM skill 
            INNER JOIN skillTab ON skill.skillType = skillTab.id WHERE skillTab.id = :skillType");
        $result->bindParam(':skillType', $skillType, PDO::PARAM_STR);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
