<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="/styles/header-footer.css">
    <title>Organizae</title>
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
                    <li><a href="#sobreNos">Sobre nós</a></li>
                    <div class="line"></div>
                    <li><a href="#funcionalidades">Funcionalidades</a></li>
                    <div class="line"></div>
                    <li><a href="#contatos">Contatos</a></li>
                    <li><a href="/pages/login-cadastro.php#paralogin" class="buttonMenu">Login</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section class="inicio">
            <div class="first">
                <p class="title1">Assuma o <b class="negrito">controle</b> de suas finanças</p>
                <p class="text1">Planejamento e organização são a chave para realizar seus sonhos. <br> Aqui nós podemos te ajudar!</p>
                <button class="entrar"><a href="/pages/login-cadastro.html#paralogin" class="entrar-link">Entrar</a></button>
            </div>
            <div class="img-cartao">
                <img class="img-cartao" src="./images/img-singlepage-index/cartoes.png" alt="Cartões de crédito simbolizando o controle das finanças">
            </div>
        </section>
        <section class="missao-visao-valores" id="sobreNos">
            <div class="missao">
                <img class="img-missao" src="./images/img-singlepage-index/missao.png" alt="Foguete simbolizando a nossa missão">
                <h4 class="missao-title">Missão</h4>
                <p class="missao-p">Descomplicar o jeito de organizar as finanças</p>
            </div>
            <div class="visao">
                <img class="img-visao" src="./images/img-singlepage-index/visao.png" alt="Olho">
                <h4 class="visao-title">Visão</h4>
                <p class="visao-p">Trazer para todos um modelo simples de gestão financeira </p>
            </div>
            <div class="valores">
                <img class="img-valores" src="./images/img-singlepage-index/valores.png" alt="Mãos segurando um coração">
                <h4 class="valores-title">Valores</h4>
                <p class="valores-p">Transparência, segurança e preocupação com o cliente</p>
            </div>
        </section>
        <section class="sobrenos">
            <div class="textos-sobrenos">
                <h1 class="title2">Aprenda a cuidar do seu dinheiro <br> de forma fácil</h1>
                <p class="sobrenos-p1">Quer ter controle do seu dinheiro, alcançar independência financeira <br> ou realizar aquele sonho?</p>
                <p class="sobrenos-p2"><b class="negrito">A Organizae foi feita para te ajudar</b> a deixar sua vida mais descomplicada, <br> e a manusear seu saldo mais claramente!</p>
            </div>
            <div>
                <img class="img-money" src="./images/img-singlepage-index/money.png" alt="imagem de notas de dolar voando">
            </div>
        </section>
        <section class="funcionalidades1" id="funcionalidades">
            <div class="divisao1-funcio">
                <img class="abstrato1" src="./images/img-singlepage-index/abstrato-inicio.png" alt="Imagem abstrata">
                <h2 class="title3">Mas... Por que escolher a gente?</h2>
            </div>
            <div class="divisao2-funcio">
                <p class="funcio-p"><b>Acima de tudo</b>, porque a gente quer que você pense que mexer com dinheiro é simples e muito interessante.</p>
                <img class="abstrato2" src="./images/img-singlepage-index/abstrato-fim.png" alt="Imagem abstrata">
            </div>
        </section>
        <section class="funcionalidades2">
                <p class="categorias">Aqui você pode criar as categorias que vai usar, ficando mais fácil de entender para onde vai seu dinheiro.</p>
                <p class="graficos">Temos gáficos que te auxiliam a ver seus gastos, para você saber onde economizar ou investir.</p>
                <p class="objetivos">Além disso, temos uma sessão apenas para você idealizar seus gastos, e depois rever no fim do mês!</p>
            <div class="cadastrese-foto">
                <div class="cadastre-se">
                    <p class="venha-p-organizae">Venha para a <b class="negrito">Organizae</b>!</p>
                    <button class="button-cadastre-se"><a class="submit" href="/pages/login-cadastro.html#paracadastro">Cadastre-se</a></button>
                </div>
                <img class="abstrata-final" src="./images/img-singlepage-index/abstrato-final-singlepage.png" alt="imagem abstrata">
            </div>
        </section>
    </main>
    <footer id="contatos">
        <section id="footerContainer">
            <section id="footerSection">
                <div>
                    <a href="/index.html"><img src="./images/img-header-footer/logo-organizae.png" alt="Logo da Organizae"></a>
                </div>

                <div id="linksContainer">
                    <ul class="divContainer">
                        <li class="titleContainer">Institucional</li>
                        <li><a href="https://www.gov.br/cidadania/pt-br/acesso-a-informacao/lgpd" target="_blank">Lei LGPD</a></li>
                        <li><a href="./pages/termos.html">Termos e Condições</a></li>
                    </ul>
                    <ul class="divContainer">
                        <li class="titleContainer">Ajuda</li>
                        <li><a href="./pages/faleConosco.html">Fale Conosco</a></li>
                        <li><a href="./pages/trabalheConosco.html">Trabalhe Conosco</a></li>
                    </ul>
                    <ul class="divContainer">
                        <li class="titleContainer">Contatos</li>
                        <li>organizae@contato.com</li>
                        <section id="midiasSection">
                            <a href="https://pt-br.facebook.com/" target="_blank"><img src="./images/img-header-footer/icon-facebook.png"
                                    alt="Logo do Facebook"></a>
                            <a href="https://www.instagram.com/" target="_blank"><img src="./images/img-header-footer/icon-instagram.png" alt="Logo do Instagram"></a>
                            <a href="https://www.youtube.com/" target="_blank"><img src="./images/img-header-footer/icon-youtube.png" alt="Logo do Youtube"></a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="/scripts/header-footer.js"></script>
</body>
</html>