<?php

class CadastrarConvenioController extends Controller
{
    public function process($params)
    {
        // HTTP header
        header("Cadastrar convênio");
        // HTML title
        $this->head['title'] = 'Cadastrar convênio';

        if (isset($_POST["submit"])) {

            $CadastrarConvenio = new CadastrarConvenio();
            $CadastrarConvenio->cadastrar($_POST['cod'], $_POST['nome'], $_POST('banco'), $_POST('sequencial'), $_POST('agencia'), $_POST('conta'), $_POST('digito'));
        }

        // Sets the template
        $this->view = 'cadastrar-convenio';
    }
}
