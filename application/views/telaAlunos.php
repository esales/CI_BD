<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
            foreach($alunos as $aluno){
                echo 'Nome: ' . $aluno->getNome();
                echo ' - Matrícula: ' . $aluno->getMatricula() . '<br>';
            }
        ?>
    </body>
</html>
