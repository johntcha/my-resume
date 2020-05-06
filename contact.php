<?php 
   $emailSent=false;
   $spam = false;
   if(isset($_POST['submit'])) {
     $honeyPot = $_POST['phoneNumber6tY4bPYk'];
     if (trim($honeyPot) != '') {
         $spam = true;
     }
     else{
       
     if(trim($_POST['name']) === '') {
     } 
     else {
       $name = trim($_POST['name']);
     }
   
     if(trim($_POST['email']) === '')  {
     } 
     else if (!preg_match('/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+.[a-z]{2,4}$/i', trim($_POST['email']))) {
     } 
     else {
     $email = trim($_POST['email']);
     }
   
     if(isset($_POST['message']) && trim($_POST['message']) === '') {
     } 
     else {
       $message = trim($_POST['message']);
     }
   
     if ($spam == true) {
   
     }
     else{
      $subject = 'Vous avez un message de'.$name;
       $body = 'Name: $name nnEmail: $email nnComments: $message';
       $headers = 'From: '.$name.' <'.$email.'>' . 'rn' . 'Reply-To: ' . $email;
       mail('johntcha94@gmail.com', $subject, $body, $headers);
       $emailSent = true;
       $validation = "Merci, votre message a été envoyé!";
     }
     }
   } ?>
<section id="contact" style="padding-top: 95px; margin-top: -95px;">
   <h1><span class="span_title">Contact</span></h1>
   <div class="row row-form">
      <div class="col-lg">
         <h2>Me contacter</h2>
         <form id="form" class="form" action="#comeback" method="POST" >
            <div class="wrap-form">
               <div class="wrap-control">
                  <label for="username" id="comeback">Nom</label>
                  <div class="form-control short">
                     <input type="text" placeholder="Entrez votre nom et prénom" id="username" name="name" size="24"/>
                     <i class="fas fa-check-circle"></i>
                     <i class="fas fa-exclamation-circle"></i>
                     <small>Error message</small>
                  </div>
               </div>
               <div class="wrap-control">
                  <label for="username">Email</label>
                  <div class="form-control short">
                     <input type="email" placeholder="example@myemail.com" id="email" size="24" name="email" />
                     <label class="hide">Leave this field empty:</label>
                     <input class="hide" type="text" name="phoneNumber6tY4bPYk" autocomplete="off" />
                     <i class="fas fa-check-circle"></i>
                     <i class="fas fa-exclamation-circle"></i>
                     <small>Error message</small>
                  </div>
               </div>
               <div class="wrap-control msg">
                  <label for="username">Message</label>
                  <div class="form-control">
                     <textarea type="text" placeholder="Ecrivez votre message" id="message" style="resize: none;" name="message" /></textarea>
                     <div class="valid-message"><?php if ($emailSent != true){
                        }
                        else{
                          echo $validation;
                        }
                        ?></div>
                     <i class="fas fa-check-circle"></i>
                     <i class="fas fa-exclamation-circle"></i>
                     <small>Error message</small>
                  </div>
               </div>
            </div>
            <input type="submit" value="Envoyer" name="submit" class="button">
         </form>
      </div>
      <div class="col-lg">
         <div class="reach">
            <h2>Mes coordonnées</h2>
            <div class="coordonées">
               <div class="mail">
                  <p>Adresse mail: johntcha94@gmail.com</p>
               </div>
               <div class="Numéro de téléphone">
                  <p>Numéro de téléphone: +33 6 59 02 16 63 </p>
               </div>
               <div class="zone">
                  <p>Zone de travail: Paris et l'Île de France. Intéréssé par l'étranger, notamment le Japon.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>