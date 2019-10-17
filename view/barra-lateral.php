<?php
include '../db.php';

$id_aluno =  $_SESSION['id_aluno'];
$query= "select 
aula.nome,
perfil.nome_completo,
agendamento_aula.data_horario,
treino.nome from aula
inner join Agendamento_aula on Agendamento_aula.id_aula = aula.id
inner join Professor on professor.id=Agendamento_aula.id_professor
inner join Perfil on professor.id_perfil=perfil.id
inner join Treino on treino.id=Agendamento_aula.id_treino
where Agendamento_aula.id_aluno=$id_aluno;";
$consulta_turmas = mysqli_query($conexao,$query);

?>
    <p>Proximas aulas:<br>
    <?php
    
    while ($linha = mysqli_fetch_array($consulta_turmas)) {
        echo '<br>Aula de: '.$linha['nome'];
        echo '<br>Professor: '.$linha['nome_completo'];
        echo '<br>Data: '.$linha['data_horario'];
        echo '<br>Treino de: '.$linha['nome'];
        echo'<hr>';
    }

    ?>
    </p>
    
    </div>