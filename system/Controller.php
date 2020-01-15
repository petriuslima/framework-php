<?php

class Controller
{
    //metodo responsavel por retornar as views em formato .php
    protected function View($nome)
    {
        return require_once ('app/views/'.strtolower($nome).'.php');
        exit();
    }
}