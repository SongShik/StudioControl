<!DOCTYPE html>
<html lang="pt-br" style="scroll-behavior: smooth;">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.8, user-scalable=no ">
        <title> Studio Control</title>
        

        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>

        <link rel="stylesheet" href="css/style.css" type="text/css">
        <!--jquery -->
        <script src='js/jquery-3.4.1.min.js'></script>
        <script>
            function mostrarMais() {
                let mostrarMaisElement = document.querySelector('.mostrarMais');
                mostrarMaisElement.classList.toggle('show');
                console.log(mostrarMaisElement);
            }
        </script>

    </head>
    <body class="container-fluid bg-white" id='index'>
        <header class="row banner">
            <nav class="col-12 navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand logo" href="#"><img src='img/logo.png' /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#comofunciona">Como funciona? <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#planos">Escolha seu plano</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="view/login.php" tabindex="-1">Área do aluno</a>
                    </li>
                  </ul>
                </div>
            </nav>
            <section class="col-6 offset-3">
                <h1 class="text-white mx-auto">Planos que cabem no seu bolso!</h1>
                <h3 class="text-white">Aqui você monta seu plano do jeito que desejar e paga somente pelas aulas</h3>
            </section>
        </header>
        <main class="row" id='comofunciona'>
            <section class="col-12 py-5 my-5 ">
                <h1 class="text-center comoFuncionaTitulo">Como funciona?</h1>
                <div class="row justify-content-center py-5">
                    <div class="col-3 mx-5">
                        <h3 class="text-center tituloPasso pb-4">
                            1. Se matrícule
                        </h3>
                        <p class="text-center descricaoPasso">
                            Efetue a matrícula através de nosso site ou vá até nossa unidade.
                        </p>
                    </div>
                    <div class="col-3 mx-5">
                        <h3 class="text-center tituloPasso pb-4">
                            2. Monte seu plano
                        </h4>
                        <p class="text-center descricaoPasso">
                            Escolha o plano que melhor se adeque a você ou monte seu próprio plano de acordo com sua rotina. Escolha a quantidade de aulas por semana que você deseja frequentar.
                        </p>
                    </div>
                    <div class="col-3 mx-5">
                        <h3 class="text-center tituloPasso pb-4">
                            3. Pronto.
                        </h3>
                        <p class="text-center descricaoPasso">
                            Pronto, agora é só entrar em contato com a unidade e agendar suas aulas.
                        </p>
                    </div>
                </div>
            </section>
            <section class="col-12" id='planos'>
                <h1 class="text-center">
                    Conheça nossos planos
                </h1>
                <div class="row justify-content-center py-5">
                    <div class="col-3 col-sm-6 col-md-4 col-lg-3 bg-white shadow-lg p-5 shadow border mx-3 my-4 plano">
                        <h4 class="text-center tituloPlano">Plano Funcional</h4>
                        <p class="text-center">Descrição do plano tanann tanananna tanananan tanannana tananan</p>
                        <p class="text-center precoPlano">R$ 69,90</p>
                        <button class="btn btn-block btnAderir">Contratar</button>
                        <span class='divisorio border w-100 d-block my-4'></span>
                        <h6 class="font-weight-bold tituloAulas">Aulas:</h6>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                    </div> 
                    <div class="col-3 col-sm-6 col-md-4 col-lg-3 bg-white shadow-lg p-5 shadow border mx-3 my-4 plano">
                        <h4 class="text-center tituloPlano">Plano Funcional</h4>
                        <p class="text-center">Descrição do plano tanann tanananna tanananan tanannana tananan</p>
                        <p class="text-center precoPlano">R$ 69,90</p>
                        <button class="btn btn-block btnAderir">Contratar</button>
                        <span class='divisorio border w-100 d-block my-4'></span>
                        <h6 class="font-weight-bold tituloAulas">Aulas:</h6>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                    </div> 
                    <div class="col-3 col-sm-6 col-md-4 col-lg-3 bg-white shadow-lg p-5 shadow border mx-3 my-4 plano">
                        <h4 class="text-center tituloPlano">Plano Funcional</h4>
                        <p class="text-center">Descrição do plano tanann tanananna tanananan tanannana tananan</p>
                        <p class="text-center precoPlano">R$ 69,90</p>
                        <button class="btn btn-block btnAderir">Contratar</button>
                        <span class='divisorio border w-100 d-block my-4'></span>
                        <h6 class="font-weight-bold tituloAulas">Aulas:</h6>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                    </div> 
                    <div class="col-3 col-sm-6 col-md-4 col-lg-3 bg-white shadow-lg p-5 shadow border mx-3 my-4 plano">
                        <h4 class="text-center tituloPlano">Plano Funcional</h4>
                        <p class="text-center">Descrição do plano tanann tanananna tanananan tanannana tananan</p>
                        <p class="text-center precoPlano">R$ 69,90</p>
                        <button class="btn btn-block btnAderir">Contratar</button>
                        <span class='divisorio border w-100 d-block my-4'></span>
                        <h6 class="font-weight-bold tituloAulas">Aulas:</h6>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                    </div> 
                    <div class="col-3 col-sm-6 col-md-4 col-lg-3 bg-white shadow-lg p-5 shadow border mx-3 my-4 plano">
                        <h4 class="text-center tituloPlano">Plano Funcional</h4>
                        <p class="text-center">Descrição do plano tanann tanananna tanananan tanannana tananan</p>
                        <p class="text-center precoPlano">R$ 69,90</p>
                        <button class="btn btn-block btnAderir">Contratar</button>
                        <span class='divisorio border w-100 d-block my-4'></span>
                        <h6 class="font-weight-bold tituloAulas">Aulas:</h6>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                    </div> 
                    <div class="col-3 bg-white shadow-lg p-5 shadow border mx-3 my-4 plano">
                        <h4 class="text-center tituloPlano">Monte seu plano</h4>
                        <p class="text-center">Escolha a quantidade de aulas que melhor se encaixa para você</p>
                        <button class="btn btn-block btnAderir">Contratar</button>
                        <span class='divisorio border w-100 d-block my-4'></span>
                        <h6 class="font-weight-bold tituloAulas">Vantagens:</h6>
                        <p class="aulasPlano my-0">Escolha a quantidade de aulas que se encaixe na sua rotina</p>
                        <p class="aulasPlano my-0">Preços que se cabem no seu bolso</p>
                    </div> 
                </div>


            
                <div class="row justify-content-center py-5 mostrarMais">
                    <div class="col-3 col-sm-6 col-md-4 col-lg-3 bg-white shadow-lg p-5 shadow border mx-3 my-4 plano">
                        <h4 class="text-center tituloPlano">Plano Funcional</h4>
                        <p class="text-center">Descrição do plano tanann tanananna tanananan tanannana tananan</p>
                        <p class="text-center precoPlano">R$ 69,90</p>
                        <button class="btn btn-block btnAderir">Contratar</button>
                        <span class='divisorio border w-100 d-block my-4'></span>
                        <h6 class="font-weight-bold tituloAulas">Aulas:</h6>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                    </div> 
                    <div class="col-3 col-sm-6 col-md-4 col-lg-3 bg-white shadow-lg p-5 shadow border mx-3 my-4 plano">
                        <h4 class="text-center tituloPlano">Plano Funcional</h4>
                        <p class="text-center">Descrição do plano tanann tanananna tanananan tanannana tananan</p>
                        <p class="text-center precoPlano">R$ 69,90</p>
                        <button class="btn btn-block btnAderir">Contratar</button>
                        <span class='divisorio border w-100 d-block my-4'></span>
                        <h6 class="font-weight-bold tituloAulas">Aulas:</h6>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                    </div> 
                    <div class="col-3 col-sm-6 col-md-4 col-lg-3 bg-white shadow-lg p-5 shadow border mx-3 my-4 plano">
                        <h4 class="text-center tituloPlano">Plano Funcional</h4>
                        <p class="text-center">Descrição do plano tanann tanananna tanananan tanannana tananan</p>
                        <p class="text-center precoPlano">R$ 69,90</p>
                        <button class="btn btn-block btnAderir">Contratar</button>
                        <span class='divisorio border w-100 d-block my-4'></span>
                        <h6 class="font-weight-bold tituloAulas">Aulas:</h6>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                    </div> 
                    <div class="col-3 col-sm-6 col-md-4 col-lg-3 bg-white shadow-lg p-5 shadow border mx-3 my-4 plano">
                        <h4 class="text-center tituloPlano">Plano Funcional</h4>
                        <p class="text-center">Descrição do plano tanann tanananna tanananan tanannana tananan</p>
                        <p class="text-center precoPlano">R$ 69,90</p>
                        <button class="btn btn-block btnAderir">Contratar</button>
                        <span class='divisorio border w-100 d-block my-4'></span>
                        <h6 class="font-weight-bold tituloAulas">Aulas:</h6>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                        <p class="aulasPlano my-0">vnudsi sa dsa as  sa dsa  dsadsaj</p>
                    </div> 
                    <div class="col-3 bg-white shadow-lg p-5 shadow border mx-3 my-4 plano">
                        <h4 class="text-center tituloPlano">Monte seu plano</h4>
                        <p class="text-center">Escolha a quantidade de aulas que melhor se encaixa para você</p>
                        <button class="btn btn-block btnAderir">Contratar</button>
                        <span class='divisorio border w-100 d-block my-4'></span>
                        <h6 class="font-weight-bold tituloAulas">Vantagens:</h6>
                        <p class="aulasPlano my-0">Escolha a quantidade de aulas que se encaixe na sua rotina</p>
                        <p class="aulasPlano my-0">Preços que se cabem no seu bolso</p>
                    </div> 
                </div>

                <div class="col-12 py-3">
                    <button class="btn btn-large mx-auto d-block btnVerMais" onclick="mostrarMais()">Ver todos os planos</button>
                </div>
            </section>
        </main>
        <footer class='row rodape'>
            <section class='col-4 justify-content-center align-items-center'>
                <div class='logo my-4 mx-auto'>
                    <img src='img/logo.png' />
                </div>
                <nav class="text-center">
                    <a href='https://www.instagram.com/studioperformancetf' target="_blank" rel='nofollow noreferrer'>
                        <svg class="redesSociais">
                            <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 128 128" id="Social_Icons" version="1.1" viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="_x37__stroke"><g id="Instagram_1_"><rect clip-rule="evenodd" fill="none" fill-rule="evenodd" height="128" width="128"/><radialGradient cx="19.1111" cy="128.4444" gradientUnits="userSpaceOnUse" id="Instagram_2_" r="163.5519"><stop offset="0" style="stop-color:#FFB140"/><stop offset="0.2559" style="stop-color:#FF5445"/><stop offset="0.599" style="stop-color:#FC2B82"/><stop offset="1" style="stop-color:#8E40B7"/></radialGradient><path clip-rule="evenodd" d="M105.843,29.837    c0,4.242-3.439,7.68-7.68,7.68c-4.241,0-7.68-3.438-7.68-7.68c0-4.242,3.439-7.68,7.68-7.68    C102.405,22.157,105.843,25.595,105.843,29.837z M64,85.333c-11.782,0-21.333-9.551-21.333-21.333    c0-11.782,9.551-21.333,21.333-21.333c11.782,0,21.333,9.551,21.333,21.333C85.333,75.782,75.782,85.333,64,85.333z M64,31.135    c-18.151,0-32.865,14.714-32.865,32.865c0,18.151,14.714,32.865,32.865,32.865c18.151,0,32.865-14.714,32.865-32.865    C96.865,45.849,82.151,31.135,64,31.135z M64,11.532c17.089,0,19.113,0.065,25.861,0.373c6.24,0.285,9.629,1.327,11.884,2.204    c2.987,1.161,5.119,2.548,7.359,4.788c2.24,2.239,3.627,4.371,4.788,7.359c0.876,2.255,1.919,5.644,2.204,11.884    c0.308,6.749,0.373,8.773,0.373,25.862c0,17.089-0.065,19.113-0.373,25.861c-0.285,6.24-1.327,9.629-2.204,11.884    c-1.161,2.987-2.548,5.119-4.788,7.359c-2.239,2.24-4.371,3.627-7.359,4.788c-2.255,0.876-5.644,1.919-11.884,2.204    c-6.748,0.308-8.772,0.373-25.861,0.373c-17.09,0-19.114-0.065-25.862-0.373c-6.24-0.285-9.629-1.327-11.884-2.204    c-2.987-1.161-5.119-2.548-7.359-4.788c-2.239-2.239-3.627-4.371-4.788-7.359c-0.876-2.255-1.919-5.644-2.204-11.884    c-0.308-6.749-0.373-8.773-0.373-25.861c0-17.089,0.065-19.113,0.373-25.862c0.285-6.24,1.327-9.629,2.204-11.884    c1.161-2.987,2.548-5.119,4.788-7.359c2.239-2.24,4.371-3.627,7.359-4.788c2.255-0.876,5.644-1.919,11.884-2.204    C44.887,11.597,46.911,11.532,64,11.532z M64,0C46.619,0,44.439,0.074,37.613,0.385C30.801,0.696,26.148,1.778,22.078,3.36    c-4.209,1.635-7.778,3.824-11.336,7.382C7.184,14.3,4.995,17.869,3.36,22.078c-1.582,4.071-2.664,8.723-2.975,15.535    C0.074,44.439,0,46.619,0,64c0,17.381,0.074,19.561,0.385,26.387c0.311,6.812,1.393,11.464,2.975,15.535    c1.635,4.209,3.824,7.778,7.382,11.336c3.558,3.558,7.127,5.746,11.336,7.382c4.071,1.582,8.723,2.664,15.535,2.975    C44.439,127.926,46.619,128,64,128c17.381,0,19.561-0.074,26.387-0.385c6.812-0.311,11.464-1.393,15.535-2.975    c4.209-1.636,7.778-3.824,11.336-7.382c3.558-3.558,5.746-7.127,7.382-11.336c1.582-4.071,2.664-8.723,2.975-15.535    C127.926,83.561,128,81.381,128,64c0-17.381-0.074-19.561-0.385-26.387c-0.311-6.812-1.393-11.464-2.975-15.535    c-1.636-4.209-3.824-7.778-7.382-11.336c-3.558-3.558-7.127-5.746-11.336-7.382c-4.071-1.582-8.723-2.664-15.535-2.975    C83.561,0.074,81.381,0,64,0z" fill="url(#Instagram_2_)" fill-rule="evenodd" id="Instagram"/></g></g></svg>
                        </svg>
                    </a>
                    <a href='https://www.facebook.com/studioperformencefuncional/' target="_blank" rel='nofollow noreferrer'>
                        <svg class="redesSociais">
                            <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 550 550" id="Layer_1" version="1.1" viewBox="0 0 550 550" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g><circle cx="275" cy="275" fill="#3F65A6" r="256"/><path d="M236.1,190.8c0,7.4,0,40.4,0,40.4h-29.6v49.4h29.6V416h60.8V280.5h40.8     c0,0,3.8-23.7,5.7-49.6c-5.3,0-46.2,0-46.2,0s0-28.7,0-33.8c0-5,6.6-11.8,13.2-11.8c6.5,0,20.3,0,33.1,0c0-6.7,0-30,0-51.4     c-17.1,0-36.5,0-45,0C234.6,134,236.1,183.4,236.1,190.8z" fill="#FFFFFF" id="Facebook_4_"/></g></g></svg>
                        </svg>
                    </a>
                </nav>
                
            </section>
            <section class='col-4'>
                <div>
                    <svg class="contatoIcon">
                        <?xml version="1.0" encoding="iso-8859-1"?>
                        <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        style="fill: #de4343; max-width: 3rem;" viewBox="0 0 792 792" style="enable-background:new 0 0 792 792;" xml:space="preserve">
                        <g>
                            <path d="M396,0C215.316,0,126,125.928,126,281.268S396,792,396,792s270-355.392,270-510.732S576.684,0,396,0z M396,378
                                c-79.524,0-144-64.476-144-144S316.476,90,396,90c79.524,0,144,64.476,144,144S475.524,378,396,378z"/>
                        </g>
                        </svg>                        
                    </svg>
                    <p class="d-inline-block">R. Pitágoras, 458 - Jardim Coimbra, São Paulo - SP, 03693-010</p>
                </div>
                
            </section>
            <section class='col-4'>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.0312648448794!2d-46.48042708502269!3d-23.531377884697747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce60d55a956c0f%3A0x392e5297c4507388!2sR.%20Pit%C3%A1goras%2C%20458%20-%20Jardim%20Coimbra%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2003693-010!5e0!3m2!1spt-BR!2sbr!4v1573585425718!5m2!1spt-BR!2sbr" frameborder="0" style="border:0;" allowfullscreen="" class="mapa"></iframe>
            </section>
        </footer>
    </body>
<html>