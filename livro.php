<?php
//Defina uma classe chamada aluno
class Livro {
    //Criar uma propriedade privada (Encapsulamento) chamada de $alunos
    //essa propriedade é um array que será usado para armazenar dados e os alunos
    //Cada aluno será representado por um array associativo com nome e idade
    private $livros = [
        ['title' => 'A Volta dos Que Não Foram Vol.II', 'autor' => 'Machado de Assis', 'ano' => 1946],
        ['title' => '1984', 'autor' => 'George Orwell', 'ano' => 1949],
        ['title' => 'O Pequeno Príncipe', 'autor' => 'Antoine de Saint-Exupéry', 'ano' => 1943],
        ['title' => 'Cem Anos de Solidão', 'autor' => 'Gabriel García Márquez', 'ano' => 1967],
        ['title' => 'Harry Potter e a Pedra Filosofal', 'autor' => 'J.K. Rowling', 'ano' => 1997]
    ];

    // Define um método publico chamado listarAlunos.
    // Este método deverá "retornar" o conteudo do array $alunos
    public function listarLivros()
    {
        return $this->livros;
    }
}
