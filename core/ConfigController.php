<?php

namespace Core;

/**
 * Recebe e manipula a URL recebida do arquivo .htaccess
 * e chama o controller
 */
class ConfigController extends Config
{
    /** @var string $url recebe a URL do arquivo .htaccess */
    private string $url;
    /** @var array $urlArray recebe um array com as partes da URL */
    private array $urlArray;
    /** @var string $urlController recebe o nome do controller formatado */
    private string $urlController;
    /** @var string $urlParameter recebe os parâmetros da URL */
    private string $urlParameter;
    /** @var string $urlSlugController auxilia na formatação da URL */
    private string $urlSlugController;
    /** @var array $format recebe um array com os caracteres para formatação da URL */
    private array $format;

    /**
     * Formata o nome do Controller
     */
    public function __construct()
    {
        $this->config();
        if (!empty($this->url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL) ?? '')) {
            $this->clearUrl();
            $this->urlArray = explode("/", $this->url);
            if (isset($this->urlArray[0])) {
                $this->urlController = $this->slugController($this->urlArray[0]);
            } else {
                $this->urlController = $this->slugController(CONTROLLERERRO);
            }
        } else {
            $this->urlController = $this->slugController(CONTROLLER);
        }
    }

    /**
     * Limpa a URL com os caracteres permitidos
     *
     * @return void
     */
    private function clearUrl(): void
    {
        //Eliminar as tag
        $this->url = strip_tags($this->url);
        //Eliminar espaços em branco
        $this->url = trim($this->url);
        //Eliminar a barra no final da URL
        $this->url = rtrim($this->url, "/");
        //Eliminar caracteres
        $this->format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]?;:.,\\\'<>°ºª ';
        $this->format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr-------------------------------------------------------------------------------------------------';
        $this->url = strtr(iconv("UTF-8", "ISO-8859-1", $this->url), iconv("UTF-8", "ISO-8859-1", $this->format['a']), $this->format['b']);
    }

    /**
     * Formata o nome da controller no formato permitido
     *
     * @param string $slugController
     * @return string
     */
    private function slugController(string $slugController): string
    {
        //Converter para minusculo
        $this->urlSlugController = strtolower($slugController);
        //Converter o traco para espaco em braco
        $this->urlSlugController = str_replace("-", " ", $this->urlSlugController);
        //Converter a primeira letra de cada palavra para maiusculo
        $this->urlSlugController = ucwords($this->urlSlugController);
        //Retirar espaco em branco
        $this->urlSlugController = str_replace(" ", "", $this->urlSlugController);
        return $this->urlSlugController;
    }

    /**
     * Instancia a classe do controller
     *
     * @return void
     */
    public function loadPage(): void
    {
        $classLoad = "\\Sts\\Controllers\\" . $this->urlController;
        $classPage = new $classLoad();
        $classPage->index();
    }
}
