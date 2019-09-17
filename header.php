

<body>

<!--  topo -->
<section>

        <div class="navbar  navbar-expand-lg menu ">
        <div class="container">
            
        
            <a class="navbar-brand" href="#">
            <img src="../img/menu-icone3.png" alt=""width="100" >
           
            </a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item"> <a class="nav-link" href="home.php"> Inicio </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="medidas.php"> Medidas </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#"> Pagamentos </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="aula.php"> Aulas </a> </li>
                   
                    <li class="nav-item"> <a class="nav-link" href="../controle/logout-controle.php">
                        <?php 
                            session_start();
                            echo $_SESSION['usuario'];?> (sair)</a> </li>
                </ul>
            </div>
        </div>
        </div>

</section>



