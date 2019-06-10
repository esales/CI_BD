<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="curso")
 * */
class Curso {

    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** @Column(type="string") **/
    protected $nome;

    //** @OneToMany(targetEntity="Turma", mappedBy="curso") **/
    protected $turmas;

    function __construct($nome = null, $turmas = null, $id = null) {
        $this->id = $id;
        $this->nome = $nome;
        
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

    function getTurmas() {
        return $this->turmas;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTurmas($turmas) {
        $this->turmas = $turmas;
    }
}