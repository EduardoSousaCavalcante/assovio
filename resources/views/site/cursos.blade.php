<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos - Etec da Zona Leste</title>
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
        .curso {
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
        <p>Cursos oferecidos</p>
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
        <h2>Nossos Cursos Técnicos</h2>

        <div class="curso">
            <h3>Desenvolvimento de Sistemas</h3>
            <p>Curso técnico voltado para o aprendizado de programação, banco de dados, front-end e back-end. Ideal para quem deseja trabalhar na área de tecnologia.</p>
        </div>

        <div class="curso">
            <h3>Administração</h3>
            <p>Formação técnica para atuação em áreas administrativas de empresas públicas e privadas, com foco em gestão de pessoas, finanças e processos organizacionais.</p>
        </div>

        <div class="curso">
            <h3>Logística</h3>
            <p>Curso técnico que capacita profissionais para planejar e gerenciar cadeias de suprimento, controle de estoque e distribuição de mercadorias.</p>
        </div>

        <div class="curso">
            <h3>Informática para Internet</h3>
            <p>Voltado à criação de websites, aplicativos web, design digital e manutenção de sistemas online.</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 - Centro Paula Souza - Todos os direitos reservados.</p>
        <p><a href="https://eteczonaleste.cps.sp.gov.br/">Site Oficial</a></p>
    </footer>
</body>
</html>
