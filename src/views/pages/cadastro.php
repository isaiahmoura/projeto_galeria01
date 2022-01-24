<html>
    <head>
        <title>galeria01</title>
        <meta charset="UTF-8">
        <link rel="icon" href="assets/images/gallery.png">
        <link rel="stylesheet" href="<?=$base;?>/assets/css/login.css">
    </head>
    <body>
        <div class="header">
            Galeria 01
        </div>
        <div class="login">
            <div class="login_header">Novo usuário</div>
            <div class="login_form">
                <form method="POST" action="<?=$base;?>/login">
                    <input type="text" name="nome" placeholder="Nome">
                    <input type="email" name="email" placeholder="E-mail">
                    <input type="password" name="senha" placeholder="Senha">
                    <input type="password" name="confirmar_senha" placeholder="Confirmar Senha">
                    
                        <div class="flash">E=mail esta incorreto</div>
                    
                    <button type="submit" name="acessar">Cadastrar</button>
                    <div class="login_form_links"><a href="<?=$base;?>/login">Já êm uma conta? Clique aqui</a></div>
                </form>
            </div>
        </div>
        <div class="author">
            Criado por Isaias Moura - 
            <a href="https://www.github.com/isaiahmoura">Github</a>
            <a href="https://www.facebook.com/profile.php?id=100073491484813">Facebook</a>
        </div>
    </body>
</html>