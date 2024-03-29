<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <title>Login e Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles/login-cadastro.css" />
    <link rel="stylesheet" href="../styles/header-footer.css">
</head>

<body>
    <header>
        <nav id="navHeader">
            <a href="/index.html"><img src="/images/img-header-footer/logo-organizae.png" alt="Logo da Organizae"></a>

            <div class="menuSection">
                <div class="menuToggle">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                </div>

                <div id="overlay"></div>

                <ul id="menu">
                    <li><a href="/index.html#sobreNos">Sobre nós</a></li>
                    <div class="line"></div>
                    <li><a href="/index.html#funcionalidades">Funcionalidades</a></li>
                    <div class="line"></div>
                    <li><a href="/index.html#contatos">Contatos</a></li>
                    <li><a href="/pages/login-cadastro.html#paralogin" class="buttonMenu">Login</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!--FORMULÁRIO DE LOGIN-->    
    <div class="container">
        
        <a class="links" id="paracadastro"></a>
        <a class="links" id="paralogin"></a>

        <div class="content">

            <!--FORMULÁRIO DE CADASTRO-->
            <div id="cadastro">
                <form method="post" action="/php/functions/cadastro.php">
                    <h1>Cadastre-se</h1>

                    <p>
                        <label for="nome_cad">Seu nome</label>
                        <input id="nome_cad" name="nome_cad" type="text" required placeholder="nome" />
                    </p>

                    <p>
                        <label for="email_cad">Seu e-mail</label>
                        <input id="email_cad" name="email_cad" required type="email"
                            placeholder="Ex.organizae@contato.com" />
                    </p>

                    <p>
                        <label for="senha_cad">Sua senha</label>
                        <input id="senha_cad" name="senha_cad" required type="password"
                            placeholder="Ex.1234" />
                    </p>
                    <p>
                        <label for="senha_cad">Confirme sua senha</label>
                        <input id="senha_cad" name="cosenha_cad" required type="password"
                            placeholder="Ex.1234" />
                    </p>

                    <p>
                        <input type="submit" value="Cadastrar" />
                    </p>

                    <p class="link">
                        Já tem conta?
                        <a href="#paralogin"> Ir para Login </a>
                    </p>
                </form>
            </div>

            <!--FORMULÁRIO DE LOGIN-->
            <div id="login">
                <form method="post" action="/php/functions/login.php">
                    <h1>Conecte-se a sua conta</h1>
                    <p>
                        <label for="nome_login">Login</label>
                        <input id="nome_login" name="nome_login" required type="text"
                            placeholder="Ex.organizae@contato.com" />
                    </p>

                    <p>
                        <label for="senha_login">Senha</label>
                        <input id="senha_login" name="senha_login" required type="password"
                            placeholder="Ex.***** " />
                    </p>

                    <p>
                        <input type="checkbox" name="manterlogado" id="manterlogado" value="" />
                        <label for="manterlogado">Manter-me logado</label>
                    </p>

                    <p>
                        <input type="submit" value="Logar" />
                    </p>

                    <p class="link">
                        Ainda não tem conta?
                        <a href="#paracadastro">Cadastre-se</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <section id="footerContainer">
            <section id="footerSection">
                <div>
                    <a href="/index.html"><img src="/images/img-header-footer/logo-organizae.png" alt="Logo da Organizae"></a>
                </div>

                <div id="linksContainer">
                    <ul class="divContainer">
                        <li class="titleContainer">Institucional</li>
                        <li><a href="https://www.gov.br/cidadania/pt-br/acesso-a-informacao/lgpd" target="_blank">Lei LGPD</a></li>
                        <li><a href="/pages/termos.html">Termos e Condições</a></li>
                    </ul>
                    <ul class="divContainer">
                        <li class="titleContainer">Ajuda</li>
                        <li><a href="/pages/faleConosco.html">Fale Conosco</a></li>
                        <li><a href="/pages/trabalheConosco.html">Trabalhe Conosco</a></li>
                    </ul>
                    <ul class="divContainer">
                        <li class="titleContainer">Contatos</li>
                        <li>organizae@contato.com</li>
                        <section id="midiasSection">
                            <a href="https://pt-br.facebook.com/" target="_blank"><img src="/images/img-header-footer/icon-facebook.png"
                                    alt="Logo do Facebook"></a>
                            <a href="https://www.instagram.com/" target="_blank"><img src="/images/img-header-footer/icon-instagram.png" alt="Logo do Instagram"></a>
                            <a href="https://www.youtube.com/" target="_blank"><img src="/images/img-header-footer/icon-youtube.png" alt="Logo do Youtube"></a>
                        </section>
                    </ul>
                </div>
            </section>

            <hr>

            <p id="infoFooter">
                ©2022 Organizae Tecnologia Ltda. CNPJ 00.000.000/0000-00
            </p>
        </section>
    </footer>
    <script src="/scripts/header-footer.js"></script>
</body>

</html>