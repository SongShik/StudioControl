<?php
include '../cabecalho.php';
include '../header.php';

include '../db.php';
$id_aluno =  $_SESSION['id_aluno'];
/*
$query = "
select
turma.nome,
perfil.nome_completo,
horario_turma.horario_inicio,
turma.descricao 
from turma 
inner join Professor on professor.id=turma.id_professor
inner join Perfil on professor.id_perfil=perfil.id
inner join Horario_Turma on Horario_Turma.id=turma.id
inner join Aluno_Turma on Aluno_Turma.id_turma=turma.id
where Aluno_Turma.id_aluno=$id_aluno;
";
*/
$query = "
select
	turma.id,
	turma.nome,
	perfil.nome_completo,
	turma.descricao,
	horario_turma.horario_inicio
from turma 
inner join Professor on professor.id=turma.id_professor
inner join Perfil on professor.id_perfil=perfil.id
inner join horario_turma on horario_turma.id_turma = turma.id
";
$consulta_turmas = mysqli_query($conexao,$query);


?>

<section>
<div class="container ">
<h1> Turmas disponiveis</h1>

<table class="table table-hover table-striped" id="turmas">
    <thead>
        <tr>
            <th>Turma</th>
            <th>Professor</th>
            <th>Horario</th>
            <th>descricao</th>
            <th>entrar</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            while ($linha = mysqli_fetch_array($consulta_turmas)) {
                echo '<tr> <td>'.$linha['nome'].'</td>';
                echo '<td>'.$linha['nome_completo'].'</td>';
                echo '<td>'.$linha['horario_inicio'].'</td>';
                echo "<td>horario turma</td>";
                echo '<td>'.$linha['descricao'].'</td>';
        ?>
                <td><a href="../controle/turma-controle.php?id_turma=<?php echo $linha['id'];?>">
                                        
                                        
                        <?xml version="1.0" encoding="iso-8859-1"?>
                        <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512; height:40px;" xml:space="preserve">
                        <path style="fill:#A9A8AE;" d="M321.629,446.371c-63.337,0-122.346-31.371-157.846-83.916c-7.196-10.651-4.395-25.117,6.254-32.313
                            c10.651-7.196,25.117-4.394,32.312,6.256c26.835,39.717,71.424,63.429,119.28,63.429c79.305,0,143.826-64.521,143.826-143.826
                            c0-79.307-64.521-143.826-143.826-143.826c-47.999,0-92.661,23.819-119.471,63.714c-7.168,10.668-21.628,13.506-32.296,6.335
                            c-10.668-7.17-13.504-21.628-6.336-32.296c35.472-52.785,94.575-84.298,158.103-84.298C426.599,65.629,512,151.028,512,256
                            C512,360.97,426.599,446.371,321.629,446.371z"/>
                        <path style="fill:#64C37D;" d="M368.428,268.94c0.092-0.133,0.164-0.278,0.251-0.414c0.324-0.504,0.639-1.013,0.925-1.542
                            c0.053-0.099,0.096-0.206,0.149-0.307c0.295-0.574,0.579-1.154,0.827-1.753c0.028-0.068,0.048-0.141,0.078-0.209
                            c0.256-0.631,0.49-1.272,0.69-1.93c0.023-0.076,0.037-0.157,0.059-0.233c0.191-0.647,0.362-1.3,0.495-1.969
                            c0.037-0.192,0.056-0.388,0.09-0.58c0.096-0.554,0.194-1.108,0.248-1.676c0.079-0.77,0.118-1.544,0.118-2.323
                            c0-0.78-0.039-1.556-0.118-2.324c-0.054-0.56-0.152-1.108-0.245-1.655c-0.036-0.2-0.053-0.403-0.093-0.602
                            c-0.132-0.659-0.301-1.305-0.489-1.942c-0.025-0.085-0.039-0.174-0.065-0.259c-0.199-0.647-0.43-1.278-0.681-1.902
                            c-0.033-0.078-0.056-0.16-0.088-0.237c-0.245-0.59-0.524-1.162-0.815-1.727c-0.057-0.11-0.102-0.225-0.161-0.334
                            c-0.278-0.518-0.588-1.016-0.903-1.51c-0.095-0.147-0.174-0.303-0.272-0.448c-0.313-0.467-0.658-0.911-1.002-1.353
                            c-0.121-0.157-0.23-0.323-0.355-0.478c-0.484-0.588-0.995-1.153-1.531-1.69l-69.813-69.815c-9.087-9.089-23.823-9.089-32.912,0
                            c-9.089,9.087-9.089,23.823,0,32.912l30.09,30.09H23.273C10.42,232.729,0,243.149,0,256.002s10.42,23.273,23.273,23.273h269.628
                            l-30.09,30.088c-9.089,9.089-9.089,23.823,0,32.912c4.544,4.544,10.501,6.817,16.457,6.817c5.955,0,11.912-2.273,16.455-6.817
                            l69.813-69.813c0.54-0.538,1.049-1.102,1.533-1.691c0.116-0.143,0.217-0.296,0.33-0.442
                            C367.755,269.875,368.107,269.419,368.428,268.94z"/>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        </svg>

                
                </a></td>
        <?php
            }
        ?>
    
    </tbody>


</table>


</div>
</section>

<?php
include '../footer.php';
?>