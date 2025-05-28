<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oportunidades - Etec da Zona Leste</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background: #fff;
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
        .oportunidade {
            background: #f4f4f4;
            margin-bottom: 1.5rem;
            padding: 1rem;
            border-radius: 5px;
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
        <p>Oportunidades para nossos alunos</p>
    </header>

    <nav>
        <ul>
            <li><a href="{{ route('site.index') }}" class="menu-link">Home</a></li>
            <li><a href="{{ route('site.cursos') }}" class="menu-link">Cursos</a></li>
            <li><a href="{{ route('site.oportunidades') }}" class="menu-link">Oportunidades</a></li>
            <li><a href="{{ route('site.vestibulinho') }}" class="menu-link">Vestibulinho</a></li>
            <li><a href="{{ route('site.contato') }}" class="menu-link">Contato</a></li>
        </ul>
    </nav>

    <div class="container">
        <h2>Últimas Oportunidades</h2>

        <div class="oportunidade">
            <h3>Estágio em Desenvolvimento Web</h3>
            <p>Empresa de tecnologia localizada na Zona Leste está com vaga aberta para estagiário de Desenvolvimento Web. Requisitos: HTML, CSS, JavaScript básico.</p>
        </div>

        <div class="oportunidade">
            <h3>Processo Seletivo Jovem Aprendiz</h3>
            <p>Multinacional no ramo logístico busca jovens aprendizes para atuação em áreas administrativas e operacionais. Inscrições abertas até o fim do mês.</p>
        </div>

        <div class="oportunidade">
            <h3>Feira de Profissões e Estágios</h3>
            <p>Evento promovido pela Etec com empresas parceiras, oferecendo palestras, networking e inscrições para vagas reais. Data: 25 de Abril.</p>
        </div>

        <div class="oportunidade">
            <h3>Programa Primeiro Emprego - Governo de SP</h3>
            <p>Iniciativa do governo estadual que conecta estudantes técnicos a vagas de primeiro emprego em diversas áreas. Cadastre-se pelo site oficial.</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 - Centro Paula Souza - Todos os direitos reservados.</p>
        <p><a href="https://eteczonaleste.cps.sp.gov.br/">Site Oficial</a></p>
    </footer>
</body>
</html>
