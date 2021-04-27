
<?php

$email = "";

if(isset($_POST['mailform'])) {
   $email = verificationEmail($_POST["email"]);

   if(!empty($email)) {
      
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
               <u>Mail de l\'expéditeur :</u>'.$email.'</p><br />
               <h1>
               <!-- mettez des addresse d\'image sur internet -->
               
            </div>
         </body>
      </html>
      ';
      /*on fait appel à la fonction mail de php*/
      mail("contact@arb-performances.fr", "demande d'inscription à la newsletter", $message, $header);
      $msg="Votre message a bien été envoyé !";
      $email = "";
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
