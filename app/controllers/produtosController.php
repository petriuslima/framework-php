<?php

class Produtos extends Controller
{
    public function index ()
    {
        $this->view('produtos/produtosIndex');
    }

    public function novos ()
    {
        $this->view('produtos/produtosNovos');
    }
}