<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etec da Zona Leste</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        header {
            background: red;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }
        nav ul {
            background: #333;
            list-style: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        nav ul li {
            display: inline;
        }
        nav ul li a {
            color: #fff;
            display: inline-block;
            padding: 1rem;
            text-decoration: none;
        }
        nav ul li a:hover {
            background: #555;
        }
        .container {
            margin: 2rem auto;
            max-width: 1100px;
            padding: 0 2rem;
        }
        .highlight {
            background: #f4f4f4;
            margin: 2rem 0;
            padding: 1rem;
        }
        footer {
            background: #333;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }
        footer a {
            color: #fff;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Etec da Zona Leste</h1>
        <p>Escola Técnica Estadual localizada na Cidade A.E. Carvalho, São Paulo/SP</p>
    </header>
    <nav>
        <ul>
            <li><a href="{{ route('site.index') }}" class="menu-link">Home</a></li>
            <li class="menu-item"><a href="{{ route('site.cursos') }}" class="menu-link">Cursos</a></li>
            <li class="menu-item"><a href="{{ route('site.oportunidades') }}" class="menu-link">Oportunidades</a></li>
            <li class="menu-item"><a href="{{ route('site.vestibulinho') }}" class="menu-link">Vestibulinho</a></li>
            <li class="menu-item"><a href="{{ route('site.contato') }}" class="menu-link">Contato</a></li>
        </ul>
    </nav>
    
    <div class="container">
        <section id="destaques" class="highlight">
            <h2>Destaques</h2>
            <article>
                <h3>Desenvolvimento de Sistemas AMS</h3>
                <p>O candidato que ingressar no curso técnico de Desenvolvimento de Sistemas, na modalidade AMS, poderá prosseguir os estudos em uma Fatec no curso superior de tecnologia em Análise e Desenvolvimento de Sistemas.</p>
            </article>
            <article>
                <h3>Conheça a nossa infraestrutura</h3>
                <p>Contamos com uma infraestrutura moderna, laboratórios e salas equipadas com televisões, computadores, notebooks, impressoras 3D e muitos outros componentes propícios aos projetos que desenvolvemos durante a jornada dos estudantes.</p>
            </article>
        </section>
        <section id="contato">
            <h2>Contato</h2>
            <p><strong>Endereço:</strong> Avenida Águia de Haia, 2.633 - Cidade AE Carvalho - São Paulo/SP - CEP: 03694-000</p>
            <p><strong>Telefone:</strong> (11) 2045-4000 / 2045-4016</p>
            <p><strong>Horário de funcionamento:</strong> Seg. a Sex. das 09h às 21h</p>
        </section>
    </div>
    <footer>
        <p>&copy; 2025 - Centro Paula Souza - Todos os direitos reservados.</p>
        <p><a href="https://eteczonaleste.cps.sp.gov.br/">Site Oficial</a></p>
    </footer>
</body>
</html>


