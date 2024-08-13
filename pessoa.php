<?php

class Pessoa{

    private $nome;
    private $sobrenome;
    private $idade;

    
    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of sobrenome
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * Set the value of sobrenome
     */
    public function setSobrenome($sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}

//Receber os parâmetros
$tipo = $_POST['tipo'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$idade = $_POST['idade'];


if($tipo == 'A'){
    $pessoa = array("nome" => $nome, "sobrenome" => $sobrenome, "idade" => $idade);
    echo "Nome completo: " . $pessoa["nome"] . " " . $pessoa["sobrenome"] . "<br>";
    echo "Idade: " . $pessoa["idade"];

} else if ($tipo == 'C'){

}else 
    echo "O tipo deve ser A ou C!";
    


?>
