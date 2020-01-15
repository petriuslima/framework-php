<?php

class Model
{
    protected $db;

    public function __construct() 
    {
        $this->db = new PDO('mysql:host=localhost;dbname=framework', 'root', '');
    }

    public function Create($tabela, array $dados)
    {
        $sql = "INSERT INTO produtos (campo) VALUES ('valor1')";
        $array = array(
            'id' => '1'
        );
        foreach ($dados as $inds => $vals) {
            $campos[] = $inds;
            $valores[] = $vals;
        }
        return $campos;
    }

    public function Read()
    {
        
    }

    public function Update()
    {
        
    }

    public function Delete()
    {
        
    }
}
