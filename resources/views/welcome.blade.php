<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>For Us</title>

        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body class="antialiased">
    <div class="fullpage">
        <div class="background mandatorio">
            <div class="container">
                <aside class="aside-row">
                    <div class="aside-rows">
                        <span class="aside-rows-1"></span>
                        <span class="aside-rows-2"></span>
                        <span class="aside-rows-3"></span>
                    </div>
                </aside>
    
                <aside class="aside-vazio"></aside>
    
                <aside class="aside-midia">
                    <div class="midia">
                        <a href="#">Tw</a>
                        <a href="#">In</a>
                        <a href="#">Fb</a>
                    </div>
                </aside>
    
                <header class="header container-conteudo">
                    <div class="header-logo">
                        <a href="/"><img src="./img/logo_amarelo.svg" alt=""></a>
                    </div>
                    <div class="header-div">
                        <nav>
                            <ul class="header-links">
                                <li><a href="#">Início</a></li>
                                <li><a href="#contato">Contato</a></li>
                                <li class="header-login"><a href="/login">Entrar</a></li>
                            </ul>
                        </nav>
                    </div>
                </header>
        
                <main class="main container-conteudo">
                    <div class="conteudo">
                        <span class="conteudo-nome">/ For Us</span>
                        <span class="conteudo-line"></span>
                        <p class="conteudo-frase conteudo-frase-main">Coleção Clientes</p>
                        <p class="conteudo-frase">Conexâo Clientes</p>
                        <p class="conteudo-frase">Viagem Clientes</p>
                    </div>
                    <div class="conteudo conteudo-main">
                        <div class="text-rotation">
                            <h1>Nossa proposta é ideal para:<span class="rotationt"><span class="word p-1">Instituições.</span><span class="word p-2">Asilos.</span><span class="word p-3">Orfanatos.</span><span class="word p-4">Hospitais.</span><span class="word p-5">Escolas.</span><span class="word p-5">Doaçõoes.</span></span></h1>
                        </div>
                        <p data-maquina>Conectando <span>talentos</span> e <span>oportunidades</span> em uma única e exclusiva plataforma.</p>
                    </div>
                </main>
    
                <div class="seta-down">
                    <a href="#contato"><img src="./img/chevron-down.svg" alt=""></a>
                </div>
    
                <article class="desc">
                    <div class="desc-confianca desc-container">
                        <h1>Confiança</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, possimus!</p>
                    </div>
                    <div class="desc-agilidade desc-container">
                        <h1>Agilidade</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, possimus!</p>
                    </div>
                    <span></span>
                    <div class="desc-comunidade desc-container">
                        <h1>Comunidade</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, possimus!</p>
                        <div><a href="/cadastro">Cadastre-se</a></div>
                    </div>
                </article>
            </div>
        </div>  
        <div class="background-contato mandatorio" id="contato">
            <div class="contato container-contato">
                <aside class="menuLateral">
                    <p>For Us</p>
                </aside>
                <section class="container-main-contato">
                    <div class="contato-desc">
                        <div>
                            <h1>Entre em contato conosco</h1>
                            <p>Estamos aqui para te ajudar caso tenha alguma dúvida, feedback ou problema! Nossa equipe está pronta para te atender.</p>
                        </div>
                    </div>
                    <div class="contato-input">
                        <div>
                            <form action="">
                                <div class="input-checkbox">
                                    <div>
                                        <input type="checkbox">
                                        <p>Dúvida</p>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <p>Sugestão</p>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <p>FeedBack</p>
                                    </div>
                                </div>
                                <div class="input-info">
                                    <label for="name">Nome completo</label>
                                    <input type="name" id="name">
                                </div>
                                <div class="input-info">
                                    <label for="email">E-mail</label>
                                    <input type="email" id="email">
                                </div>
                                <div class="input-text">
                                    <p>Mensagem</p>
                                    <textarea rows="15" cols="50"></textarea>
                                    <div>
                                        <input class="enviar" type="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>   
    </div>
    <script type="module" src="./js/main.js"></script>
    </body>
</html>
