<div id="corpo">
    <!-- INÍCIO - DESTAQUE -->
    <section id="destaque_home">
        <ul>
            <?php
            foreach ($this->banners as $banner) {
            ?>
            <li style="background-image: url('<?= $banner->getImagem() ?>');">
                <div class="conteudo_padrao">
                <h2><?= $banner->getTitulo() ?></h2>
                <p><?= $banner->getDescricao() ?></p>
                </div>
            </li>
            <?php
            }
            ?>
        </ul>
    </section>
    <!-- FIM - DESTAQUE -->

    <!-- INÍCIO - VANTAGENS -->
    <section id="vantagens_home">
        <div class="conteudo_padrao">
            <h2 class="titulo_home">Vantagens</h2>
            <h3 class="subtitulo_home">
                Veja as vantagens de uma plataforma moderna e flexível para gerenciar a logística do seu negócio
            </h3>

            <ul>
                <?php
                foreach ($this->vantagens as $vantagem) {
                ?>
                <li>
                <img src="<?= $vantagem->getImagem() ?>" alt="" />
                <p><?= $vantagem->getTitulo() ?></p>
                <span><?= $vantagem->getDescricao() ?></span>
                </li>
                <?php
                }
                ?>
            </ul>

            <a href="?q=servicos.html" class="link_botao" title="Veja mais Vantagens">Veja mais Vantagens</a>
        </div>
    </section>
    <!-- FIM - VANTAGENS -->

    <!-- INÍCIO - FUNCIONALIDADES -->
    <section id="funcionalidades_home">
        <div class="conteudo_padrao">
            <h2 class="titulo_home">Funcionalidades</h2>
            <h3 class="subtitulo_home">
                As funcionalidades de uma plataforma moderna e flexível para gerenciar a logística do seu negócio
            </h3>

            <ul>
                <?php
                foreach ($this->funcionalidades as $funcionalidade) {
                ?>
                <li>
                <img src="<?= $funcionalidade->getImagem() ?>" alt="" />
                <p><?= $funcionalidade->getTitulo() ?></p>
                <span><?= $funcionalidade->getDescricao() ?></span>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </section>
    <!-- FIM - FUNCIONALIDADES -->

    <!-- INÍCIO - CADASTRE-SE -->
    <section id="cadastre_se_home">
        <div class="conteudo_padrao">
            <h2>Você cuida da sua empresa e nós da sua logística</h2>
            <h3>Cadastre-se agora e tenha 20% de desconto no primeiro ano.</h3>
            <a href="?q=cadastre_se.html" class="link_botao" title="Cadastre-se">Cadastre-se</a>
        </div>
    </section>
    <!-- FIM - CADASTRE-SE -->
</div>
