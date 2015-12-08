<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="contact.css">
        <title>Nous contacter</title>
    </head>

    <body>
        <?php include("../header.php"); 
        if (!empty($_POST)) {
        // Le message
        $message = $_POST['message'];

        // Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
        $message = wordwrap($message, 70, "\r\n");

        // Envoi du mail
        mail('boissi_h@etna-alternance.net', 'Message de la part de' . $_POST['mail'], $message);
       
        }
        ?>
            <div id="contact"><p>Pour nous contacter, veuillez remplir le formulaire ci-dessous :</p><br></div>

            <form method="post" class="formulaire">
            <p>
                <label for="nom" class="label">Votre nom<br></label><input type="text" name="nom" placeholder="Votre nom" id="nom" required/><br>
                <label for="mail" class="label">Votre mail<br></label><input type="mail" name="mail" placeholder="example@xyz.com" id="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" oninvalid="setCustomValidity('Veuillez entrer une adresse mail valide.')"
                onchange="try{setCustomValidity('')}catch(e){}" required/><br>
                <label for="message" class="label">Votre message<br></label><input type="text" name="message" placeholder="Message à envoyer" id="message" required/><br>
                <input type="submit" value="Envoyer un mail" />
            </p>
        </form>
        </div>
        <?php include("../footer.php"); ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript" src="../pagePresentation/./addpanier.js"></script>
    </body>
</hmtl>