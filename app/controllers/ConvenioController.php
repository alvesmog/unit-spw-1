<?php

class CadastrarConvenioController extends Controller
{
    public function process($params)
    {
        // Instancia um modelo, o que permite a gente acessar os convênios
        $convenioManager = new ConvenioManager();

        //Caso haja algum id de convenio na URL, busca esse ID no BD

        if (!empty($params[0])) {
            $convenio = $convenioManager->getConvenios($params[0]);
            //Se não achar o convênio, redireciona para página de erro
            if (!$convenio)
                $this->redirect('error');
            $this->head = array(
                'title' => $convenio['cod'],
                'description' => $convenio['nome'],
            );
            $this->data['title'] = $convenio['id'];
            $this->data['content'] = $convenio['nome'];

            $this->view = 'convenio';
        }
        else
        {
            $convenio = $convenioManager->getConvenios()();
            $this->data['convenio'] = $convenio;
            $this->view = 'cadastrar-convenio';
        }
    }
}
