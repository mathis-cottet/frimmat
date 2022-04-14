<script src="https://kit.fontawesome.com/385c6d2e8a.js" crossorigin="anonymous"></script>
    <?php
        require_once('./api/function/sendmail.php');
        if(isset($_POST['button_sendmail'])){
            $sendmail = new Mail;
            $sendmail->sendMail($_POST['emailcontact'], $_POST['requetecontact']);
        }
    ?>


    <div class="signin" id="contact">
    <p class="exit" onclick="showContact()">X</p>
    <p class="title-contact">Contactez-nous</p>
    <p class="sous-titre-contact">Adressez-nous un petit mot ou une requête.</p>
    <br>
    <form method="post" class="form-contact">
        <div class="label-contact">
            <label for="email"><i class="fa-solid fa-at"></i> E-mail</label><br>
            <input type="text" name="emailcontact" id="email-contact" placeholder="john.doe@example.com">
        </div>
        <div class="label-contact2">
            <label for="password"> <i class="fa-solid fa-envelope"></i> Votre demande</label><br>
            <textarea id="textarea-contact" name="requetecontact" placeholder="exprimez-vous"></textarea>
        </div>
        <br>
        <button name="button_sendmail" class="bouton-contact">Envoyer</button>
    </form>
    <div class="coordonnées-contact">
        <p>service-commercial@frimmat.com</p>
        <p>+33 (0) 4 76 38 40 61</p>
    </div>
    </div>