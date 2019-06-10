<?php
include 'application/models/Aluno.php';

class BD_Test_Controller extends CI_Controller {
    
    public function index(){
        $lista = $this->db->get('aluno')->result();

        $alunos = array();
        
        foreach($lista as $item){
            $aluno = new Aluno($item->nome, $item->matricula, $item->id);
            array_push($alunos, $aluno);
        }
        
        $data['alunos'] = $alunos;
        $this->load->view('telaAlunos',$data);
    }
    
    public function todos(){
        $lista = $this->db->get('aluno')->result();

        $alunos = array();
        
        foreach($lista as $item){
            $aluno = new Aluno($item->nome, $item->matricula, $item->id);
            array_push($alunos, $aluno);
        }
        
        $data['alunos'] = $alunos;
        $this->load->view('telaAlunos',$data);    
    }
    
    public function porId(){
        $lista = $this->db->get('aluno')->result();

        $alunos = array();
        
        foreach($lista('Aluno') as $item){
            $aluno = new Aluno($item->nome, $item->matricula, $item->id);
            array_push($alunos, $aluno);
        }
        
        $data['alunos'] = $alunos;
        $this->load->view('telaAlunos',$data);
    }
}