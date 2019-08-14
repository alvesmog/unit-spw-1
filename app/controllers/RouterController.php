<?php
class RouterController extends Controller
{
    protected $controller;

    //Recebe um array contendo o nome do controller
    public function process($params)
    {
        $parsedUrl = $this->parseUrl($params[0]);
        $controllerClass = $this->dashesToCamel(array_shift($parsedUrl)).'Controller';
        echo($controllerClass);
        echo('<br/>');
        print_r($parsedUrl);
    }
    
    //Explode a url para obter o controller os parâmetros
    private function parseUrl($url)
    {
        $parsedUrl = parse_url($url);
        $parsedUrl["path"] = ltrim($parsedUrl["path"], "/");
        $parsedUrl["path"] = trim($parsedUrl["path"]);

        $explodedUrl = explode("/", $parsedUrl["path"]);

        return $explodedUrl;

    }

    //Converte o controller para a conveção 'nomeController'
    private function dashesToCamel($text)
    {
        $text = str_replace('-', ' ', $text);
        $text = ucwords($text);
        $text = str_replace(' ','',$text);
        
        return $text;
    }
}
