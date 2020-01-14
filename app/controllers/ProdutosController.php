<?php

class ProdutosController extends Controller
{
    public function index ()
    {
        $this->view('produtos/index');
    }

    public function novos ()
    {
        $this->view('produtos/novos');
    }
}