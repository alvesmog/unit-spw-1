<?php

class ConvenioManager
{
        // Retorna uma lista com todos os convênios cadastrados no BD
        public function getConvenios()
        {
                return Db::queryAll('
                        SELECT `cod`, `nome`, `banco`
                        FROM `tblconvenios`
                        ORDER BY `cod` DESC
                ');
        }

}