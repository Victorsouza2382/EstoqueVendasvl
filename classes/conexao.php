<?php

class conectar
{
    private $servidor = "localhost";
    private $usuario = "estoquev_estoquevendas";
    private $senha = "pzrv8Ucr";
    private $bd = "estoquev_estoquevendas";

    public function conexao()
    {
        $conexao = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->bd);

        return $conexao;
    }
}

?>

 