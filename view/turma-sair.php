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
Aluno_Turma.id,
turma.nome,
perfil.nome_completo,
turma.descricao 
from turma 
inner join Professor on professor.id=turma.id_professor
inner join Perfil on professor.id_perfil=perfil.id
inner join Aluno_Turma on Aluno_Turma.id_turma=turma.id
where Aluno_Turma.id_aluno=$id_aluno;
";
$consulta_turmas = mysqli_query($conexao,$query);


?>

<section>
<div class="container ">
<h1> Turmas que você faz parte</h1>

<table class=" table-hover table-striped table-borderless" id="turmas">
    <thead >
        <tr>
            <th>Turma</th>
            <th>Professor</th>
            <th>Horario</th>
            <th>descricao</th>
            <th>sair</th>
        </tr>
    </thead>
    <tbody>
    <?php 
            while ($linha = mysqli_fetch_array($consulta_turmas)) {
                echo '<tr> <td>'.$linha['nome'].'</td>';
                echo '<td>'.$linha['nome_completo'].'</td>';
                /*echo '<td>'.$linha['horario_inicio'].'</td>';*/
                echo "<td>horario turma</td>";
                echo '<td>'.$linha['descricao'].'</td>';
                echo $linha['id'];
                       ?>
                <td><a href="../controle/turma-sair-controle.php?id=<?php echo $linha['id'];?>">
                                        
                <?xml version="1.0" encoding="iso-8859-1"?>
<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512; width:30px;" xml:space="preserve">
<g>
	<g>
		<g>
			<polygon points="353.574,176.526 313.496,175.056 304.807,412.34 344.885,413.804 			"/>
			<rect x="235.948" y="175.791" width="40.104" height="237.285"/>
			<polygon points="207.186,412.334 198.497,175.049 158.419,176.52 167.109,413.804 			"/>
			<path d="M17.379,76.867v40.104h41.789L92.32,493.706C93.229,504.059,101.899,512,112.292,512h286.74
				c10.394,0,19.07-7.947,19.972-18.301l33.153-376.728h42.464V76.867H17.379z M380.665,471.896H130.654L99.426,116.971h312.474
				L380.665,471.896z"/>
		</g>
	</g>
</g>
<g>
	<g>
		<path d="M321.504,0H190.496c-18.428,0-33.42,14.992-33.42,33.42v63.499h40.104V40.104h117.64v56.815h40.104V33.42
			C354.924,14.992,339.932,0,321.504,0z"/>
	</g>
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