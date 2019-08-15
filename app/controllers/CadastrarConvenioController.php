<?php

class CadastrarConvenioController extends Controller
{
    public function process($params)
    {
        // HTTP header
        header("Cadastrar convênio");
        // HTML title
        $this->head['title'] = 'Cadastrar convênio';
        // Sets the template
        $this->view = 'cadastrar-convenio';
    }
}