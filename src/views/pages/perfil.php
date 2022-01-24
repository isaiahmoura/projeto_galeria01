<?=$render('header');?>
<div class="perfil_content">
    <div class="perfil_cover"></div>
    <div class="perfil_info">
        <div class="perfil_data">
            <img src="<?=$base;?>/assets/images/uploads/the_last_of_us.jpg" alt="">
            <div class="perfil_name">
                Isaias Moura
                <div class="perfil_local">
                    <img src="<?=$base;?>/assets/images/local.png" alt="">
                    Guamaré RN, Brasil
                </div>
            </div>
        </div>
        <div class="perfil_counts">
            <div class="qt_infos">
                100
                Seguidores
            </div>
            <div class="qt_infos">
                100<br>
                Seguindo
            </div>
            <div class="qt_infos">
                100<br>
                Fotos
            </div>
        </div>
    </div>
    <?=$render('fotos'); ?>
</div>
<?=$render('footer');?>