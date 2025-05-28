<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vestibulinho - Etec da Zona Leste</title>
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
        .info {
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
        <p>Informações sobre o Vestibulinho</p>
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
        <h2>Vestibulinho Etec</h2>

        <div class="info">
            <h3>O que é o Vestibulinho?</h3>
            <p>É o processo seletivo para ingresso nos cursos técnicos das Etecs do Centro Paula Souza. O exame ocorre duas vezes ao ano (1º e 2º semestre).</p>
        </div>

        <div class="info">
            <h3>Como se inscrever?</h3>
            <p>As inscrições são feitas pelo site <a href="https://www.vestibulinhoetec.com.br" target="_blank">vestibulinhoetec.com.br</a>. É necessário preencher os dados e pagar a taxa de inscrição.</p>
        </div>

        <div class="info">
            <h3>Documentos necessários</h3>
            <ul>
                <li>RG e CPF</li>
                <li>Comprovante de escolaridade</li>
                <li>Comprovante de residência</li>
            </ul>
        </div>

        <div class="info">
            <h3>Dicas para o exame</h3>
            <p>Revise conteúdos do Ensino Fundamental, principalmente matemática, português, ciências e atualidades. Faça simulados para praticar a gestão do tempo.</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 - Centro Paula Souza - Todos os direitos reservados.</p>
        <p><a href="https://eteczonaleste.cps.sp.gov.br/">Site Oficial</a></p>
    </footer>
</body>
</html>
