<?php

class RemessaController extends Controller
{
    public function process($params)
    {
        // HTTP header
        header("Remessa bancária");
        // HTML header
        $this->head['title'] = 'Remessa bancária';
        // Sets the template
        $this->view = 'remessa-bancaria';
    }
}