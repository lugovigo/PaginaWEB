<?php
// Aqui você pode adicionar código PHP para interagir com o backend, caso necessário.
// Exemplo: Conectar com banco de dados, etc.
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultoria XYZ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Consultoria XYZ</h1>
            <p class="tagline">O que podemos fazer por sua empresa</p>
        </div>
    </header>
    
    <section id="services">
        <div class="container">
            <h2>Nossos Serviços</h2>
            <div class="service">
                <h3>Consultoria Empresarial</h3>
                <p>Oferecemos soluções inovadoras para aumentar a eficiência do seu negócio.</p>
            </div>
            <div class="service">
                <h3>Gestão de Projetos</h3>
                <p>Gerenciamos seus projetos do início ao fim com excelência e profissionalismo.</p>
            </div>
            <div class="service">
                <h3>Planejamento Estratégico</h3>
                <p>Elaboramos estratégias eficazes para o crescimento sustentável da sua empresa.</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Entre em Contato</h2>
            <form action="index.php" method="post">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Mensagem:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2025 Consultoria XYZ - Todos os direitos reservados</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
