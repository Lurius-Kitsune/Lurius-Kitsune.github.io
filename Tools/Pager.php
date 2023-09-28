<?php

namespace Tools;

class Pager
{
    // array of variables
    private array $vars = [];
    private string $page;

    /**
     * Constructeur de la classe
     *
     * @param string $page
     * @param array $vars
     */
    public function __construct($page, $vars)
    {
        if (!file_exists($page)) {
            throw new \Exception("La page n'existe pas" . $page);
        } else {
            $this->page = $page;
        }
        $this->vars = $vars;
    }

    // return the html page
    public function renderPage()
    {
        // start output buffering
        ob_start();
        // extract variables
        extract($this->vars);
        // include the page
        include $this->page;
        // return the page
        return ob_get_clean();
    }
}
