<?php

class ProdutosController extends Controller
{
    public function index()
    {
        // $db = new ProdutosModel();
        // print_r($db->insert('produtos', array(
        //     'id' => '1'
        // )));
    }

    public function novos()
    {
        $this->View('produtos/novos');
    }
}
