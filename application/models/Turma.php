<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="turma")
 * */
class Turma {

    /** @Id @Column(type="integer") @GeneratedValue * */
    protected $id;

    /** @Column(type="string") * */
    protected $codigo;

    /**
     * @ManyToOne(targetEntity="Curso", inversedBy="turmas")
     * */
    protected $curso;
    
    /** @ManyToMany(targetEntity="Aluno", mappedBy="turmas") **/
    protected $alunos;

    function __construct($codigo = null, $curso = null, $alunos = null, $id = null) {
        $this->alunos = new ArrayCollection();        
        $this->id = $id;
        $this->codigo = $codigo;
        $this->curso = $curso;
        
        if ($alunos == null){
            $this->alunos = new ArrayCollection();
        } else {
            $this->alunos = $alunos;
        }
    }

    function getId() {
        return $this->id;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getCurso() {
        return $this->curso;
    }

    function getAlunos() {
        return $this->alunos;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }

    function setAlunos($alunos) {
        $this->alunos = $alunos;
    }
}