<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <p>SUA RESERVA DE bem-estar.</p>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <p>UMA EXCLUSIVIDADE</p>
            <p>PARA 32 FAMÍLIAS EM ATIBAIA</p>
        </div>
    </div>
</div>

<div class="container-fluid padding-off home">
    <div class="galeria">
        <section class="glr-home slider">
            <div>
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/galeria/CARROSEL_LP_ELEMENTUM_05.jpg" alt="Reserva Elementum">
            </div>
            <div>
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/galeria/CARROSEL_LP_ELEMENTUM_01.jpg" alt="Reserva Elementum">
            </div>
            <div>
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/galeria/CARROSEL_LP_ELEMENTUM_02.jpg" alt="Reserva Elementum">
            </div>
            <div>
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/galeria/CARROSEL_LP_ELEMENTUM_03.jpg" alt="Reserva Elementum">
            </div>
            <div>
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/galeria/CARROSEL_LP_ELEMENTUM_04.jpg" alt="Reserva Elementum">
            </div>
        </section>
    </div>
</div>








<div id="fale-conosco" class="container-fluid padding-off contato">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center tt">
                <p>Fale com a gente e leve um dos melhores azeites do mundo para a sua mesa.</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2">
                <form method="post" role="form" action="<?php echo base_url("contato") ?>">
                    <div class="group-form">
                        <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                            <input id="nome" type="text" class="nome form-control" name="nome" required="required" placeholder="NOME*" />
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                            <input id="email" type="email" class="email form-control" name="email" required="required" placeholder="E-MAIL*" />
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                            <input id="telefone" type="text" class="telefone form-control" name="telefone" placeholder="TELEFONE" />
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                            <div class="custom_select">
                                <select id="assunto1" class="assunto1 form-control" name="assunto1" required="required">
                                    <option value="" disabled selected>ASSUNTO*</option>
                                    <option value="Dúvidas ou Sugestões">Dúvidas ou Sugestões</option>
                                    <option value="Revenda">Revenda</option>
                                    <option value="Representação Comercial">Representação Comercial</option>
                                    <option value="Outros assuntos">Outros assuntos</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                            <textarea id="form-mensagem" class="msg form-control" rows="4" name="mss" required="required" placeholder="MENSAGEM"></textarea>
                        </div>
                        <div class="col-xs-9 col-sm-8 col-md-8 form-group">
                            <small>* Os campos marcados com asterisco são de preenchimento obrigatório.</small>
                        </div>
                        <div class="col-xs-3 col-sm-4 col-md-4 form-group">
                            <button type="submit" class="btn_enviar btn" title="enviar" name="enviar_email" value="enviar">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- <div id="cookies" class="cookies">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2 box">
        <div class="col-xs-12 col-sm-9 col-md-9">
            <p>
                Este site utiliza cookies para melhorar sua experiência de navegação, permitir um início de sessão seguro, recolher estatísticas e oferecer conteúdo adequado aos seus interesses. Ao continuar sua navegação, considera-se aceito nossos
                <a href="<?php echo base_url(); ?>politicadecookies">Termos e Condições de Uso do Site</a> e a nossa <a href="<?php echo base_url(); ?>politicadeprivacidade">Política de Privacidade</a>.
            </p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <a href="#" class="btn_cookie btn center-block">Aceito</a>
        </div>
    </div>
</div> -->

<?php
if (isset($email_enviado))
    echo $email_enviado;
?>