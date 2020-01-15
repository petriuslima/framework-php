<?php

class Controller
{
    //metodo responsavel por retornar as views em formato .php
    protected function view($nome)
    {
        return require_once ('app/views/'.strtolower($nome).'.php');
        exit();
    }
}
