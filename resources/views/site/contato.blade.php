<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Etec da Zona Leste</title>
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
        .contato-box {
            background: #f4f4f4;
            padding: 1.5rem;
            border-radius: 5px;
        }
        .contato-box p {
            margin-bottom: 1rem;
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
        <p>Entre em contato com a nossa unidade</p>
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
        <h2>Contato</h2>
        <div class="contato-box">
            <p><strong>Endereço:</strong> Avenida Águia de Haia, 2.633 - Cidade AE Carvalho - São Paulo/SP - CEP: 03694-000</p>
            <p><strong>Telefone:</strong> (11) 2045-4000 / 2045-4016</p>
            <p><strong>Email:</strong> eteczonaleste@etec.sp.gov.br</p>
            <p><strong>Horário de Atendimento:</strong> Segunda a Sexta das 09h às 21h</p>
            <p><strong>Site Oficial:</strong> <a href="https://eteczonaleste.cps.sp.gov.br/" target="_blank">eteczonaleste.cps.sp.gov.br</a></p>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 - Centro Paula Souza - Todos os direitos reservados.</p>
        <p><a href="https://eteczonaleste.cps.sp.gov.br/">Site Oficial</a></p>
    </footer>
</body>
</html>
