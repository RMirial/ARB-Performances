
<?php

$name = $lastname = $email = $phone = $datedeb = $datefin = $message = "";

if(isset($_POST['mailform'])) {
   $name = verificationInput($_POST["name"]);
   $lastname = verificationInput($_POST["lastname"]);
   $email = verificationEmail($_POST["email"]);
   $phone = verificationInput($_POST["phone"]);
   $datedeb = verificationInput($_POST["deb-even"]);
   $datefin = verificationInput($_POST["fin-even"]);
   $message = verificationInput($_POST["message"]);

   if(!empty($name) AND !empty($lastname) AND !empty($email) AND !empty($phone) AND !empty($datedeb) AND !empty($datefin) AND !empty($message)) {
      
      $header="MIME-Version: 1.0\r\n";
      $header.='From:"arb-performances.fr"<contact@arb-performances.fr>'."\n";
      $header.='Content-Type:text/html; charset="utf-8"'."\n";
      $header.='Content-Transfer-Encoding: 8bit';
      // Format dont le message va être reçu  
      $message='
      <html>
         <body>
            <div align="center">
               <br />
               <h1>
               <u>Nom de l\'expéditeur :</u>'.$name.'</h1><br />
               <h1>
               <u>prénom de l\'expéditeur :</u>'.$lastname.'</h1><br />
               <p><u>Mail de l\'expéditeur :</u>'.$email.'</p><br />
               <p><u>Tel de l\'expéditeur :</u>'.$phone.'</p><br />
               <p><u>Date de début de l\'évènement souhaité :</u>'.$datedeb.'</p><br />
               <p><u>Date de fin de l\'évènement souhaité :</u>'.$datefin.'</p><br />

               <br />
               '.nl2br($message).'
               <br />
               <!-- mettez des addresse d\'image sur internet -->
               
            </div>
         </body>
      </html>
      ';
      /*on fait appel à la fonction mail de php*/
      mail("contact@arb-performances.fr", "Message provenant d'ARB-Performances.fr", $message, $header);
      $msg="Votre message a bien été envoyé !";
      $name = $lastname = $email = $phone = $datedeb = $datefin = $message = "";
   } else { 
       // sinon on ecrit ce message si tous les champs ne sont pas complété
      $msg="Tous les champs doivent être complétés !";
   }

}

   /* Nous allons créer une fonction qui vérifie les inputs et les néttois pour éviter de se faire hacker */
   function verificationInput($var)
   {
    //Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
    $var = trim($var);
   
    //Supprime les antislashs d'une chaîne
   $var = stripslashes($var);
    
    //Convertit les caractères spéciaux en entités HTML
    $var = htmlspecialchars($var);
    return $var;
   
   }
   
   function verificationEmail($var)
   {
     return filter_var($var, FILTER_VALIDATE_EMAIL);
   }
   
?>

<script>
    function onClick(e) {
      e.preventDefault();
      grecaptcha.ready(function() {
        grecaptcha.execute('6LfjoLsaAAAAAJcAD31nGNWmA12B02Y84IftWlbS', {action: 'submit'}).then(function(token) {
            // Add your logic to submit to your backend server here.
        });
      });
    }
</script>

<script src='https://www.google.com/recaptcha/api.js'></script>
<script>

function get_action(form) 
{
    var v = grecaptcha.getResponse();
    if(v.length == 0)
    {
        document.getElementById('captcha').innerHTML="You can't leave Captcha Code empty";
        return false;
    }
    else
    {
         document.getElementById('captcha').innerHTML="Captcha completed";
        return true; 
    }
}
</script>
