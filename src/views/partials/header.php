<html>
    <head>
        <title>galeria01</title>
        <meta charset="UTF-8">
        <link rel="icon" href="assets/images/gallery.png">
        <link rel="stylesheet" href="<?=$base;?>/assets/css/header.css">
    </head>
    <body>
        <header>
            <div class="header">
                    <div class="header_logo"><a href="<?=$base;?>/">Galeria 01</a></div>
                    <div class="header_nav">
                        <ul>
                            <li><a href="<?=$base;?>/">Pagina Inicial</a></li>
                            <li><a href="#">Nova Foto</a></li>
                            <a href="<?=$base;?>/sair">
                                <li>Sair</li>
                            </a>
                        </ul>
                    </div>
            </div>
            <div class="header_menu">
                <div class="header_input">
                    <input 
                        type="text" 
                        name="pesquisar" 
                        placeholder="Pesquise por imagens na nossa galeria :)"
                    >
                    <button><img src="<?=$base;?>/assets/images/busca.png" width="18" height="18" alt=""></button>
                </div>
                <div class="user_info">
                    <div class="user_data">
                        <img src="<?=$base;?>/assets/images/uploads/the_last_of_us.jpg" alt="">
                        <a href="<?=$base;?>/perfil">Isaias Moura</a>
                        <a href="#">Minha Conta</a>
                    </div>
                </div>
            </div>
        </header>