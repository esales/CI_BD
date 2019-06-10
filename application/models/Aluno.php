<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="aluno")
 */
class Aluno {
    
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
   
    /** @Column(type="string") **/
    protected $nome;
    
    /** @Column(type="string") **/
    protected $matricula;
    
    /** @ManyToMany(targetEntity="Turma", inversedBy="alunos") **/
    protected $turmas;
    
    function __construct($nome = null, $matricula = null, $turmas = null, $id = null) {
        
        $this->id = $id;
        $this->nome = $nome;
        $this->matricula = $matricula;
        
        if ($turmas == null){
            $this->turmas = new ArrayCollection();
        } else {
            $this->turmas = $turmas;
        }
    }
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getMatricula() {
        return $this->matricula;
    }

    function getTurmas() {
        return $this->turmas;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    function setTurmas($turmas) {
        $this->turmas = $turmas;
    }
}