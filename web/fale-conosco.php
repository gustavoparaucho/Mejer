<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Fale Conosco</title>
    <?php include 'head.php';?>
    <link rel="stylesheet" href="css/contact-form.css">

    <script src="js/TMForm.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/bootstrap-filestyle.js"></script>
    <script src="js/jquery.ui.totop.js"></script>

  

</head>
<body>
<!--header-->
<header class="clearfix indent">
    <?php include 'topo.php';?>
</header>
<!--content-->
<div class="global indent">
    <div class="container">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.5428692799383!2d-48.49520200000002!3d-1.448786999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92a48e9475b636cf%3A0xf351359fa6903122!2sMejer+Agroflorestal!5e0!3m2!1spt-BR!2sbr!4v1416831744855" frameborder="0" style="border:0"></iframe>
            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7977.379029378368!2d-47.268069839290426!3d-1.3629530567187442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92af9d13f8851adf%3A0x9a70f80e7600707!2sMejer+Agroflorestal+Ltda!5e0!3m2!1spt-BR!2sbr!4v1411221727491" frameborder="0" style="border:0"></iframe>-->
        </div>
    </div>
    <div class="formBox">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h2 class="center indent">Nossos Endereços</h2>
                    <div class="info">
                        <h4>Escritório:</h4>
                        <p>Av. Assis de Vasconcelos, 289
                        <br/>Campina -  Belém/PA
                        <br/>CEP:66017-070
                        <br>+55 (91) 3230-3848
                        <!--<br>falta o fax</p>-->
                        <h4>Fábrica:</h4>
                        <p>Rodovia Magalhães Barata, PA 322 km 04  S/N..<br>CEP: 68645-000<br>Bonito/PA</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <h2 class="center indent">Formulário de Contato</h2>
                    <form id="contact-form">
                          <div class="contact-form-loader"></div>
                          <fieldset>
                            <label class="name form-div-1">
                              <input type="text" name="name" placeholder="Nome:" value="" data-constraints="@Required @JustLetters"  />
                              <span class="empty-message">*Campo obrigatório.</span>
                              <span class="error-message">*Nome inválido.</span>
                            </label>
                            <label class="email form-div-2">
                              <input type="text" name="email" placeholder="E-mail:" value="" data-constraints="@Required @Email" />
                              <span class="empty-message">*Campo obrigatório.</span>
                              <span class="error-message">*E-mail inválido.</span>
                            </label>
                            <label class="phone form-div-3">
                              <input type="text" name="phone" placeholder="Telefone:" value="" data-constraints="@JustNumbers" />
                              <span class="empty-message">*Campo obrigatório.</span>
                              <span class="error-message">*Número inválido.</span>
                            </label>
                            <label class="message form-div-4">
                              <textarea name="message" placeholder="Menssagem:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                              <span class="empty-message">*Campo obrigatório.</span>
                              <span class="error-message">*Mensagem muito curta.</span>
                            </label>
                            <!-- <label class="recaptcha"><span class="empty-message">*This field is required.</span></label> -->
                            <div>
                              <a href="#" data-type="submit" class="btn-default btn1">Enviar</a>
                            </div>
                          </fieldset> 
                          <div class="modal fade response-message">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title">Fale Conosco</h4>
                                </div>
                                <div class="modal-body">
                                  Sua mensagem foi enviada! Obrigado por entrar em contato.
                                </div>      
                              </div>
                            </div>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer-->
<?php include 'footer.php';?>
</body>
</html>