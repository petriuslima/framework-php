<?php

class ProdutosController extends Controller
{
    public function Index ()
    {
        // $db = new ProdutosModel();
        // print_r($db->insert('produtos', array(
        //     'id' => '1'
        // )));
    }

    public function Novos ()
    {
        $this->View('produtos/novos');
    }
}