<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <script src="https://kit.fontawesome.com/a275da13b0.js"></script>
    <title id='title'>Connectez-vous !</title>
</head>
<body>
   <div class="container" id="container">
       <div class="form-container sign-up-container">
           <!-- sign-up form code goes here-->
        <form action="#">
            <h1>Compte clients</h1>
            <div class="social-container">
                <a href="#" class="social facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
           </div>
           <span>Entrer votre email</span>
           <input type="text" placeholder="Nom" />
           <input type="email" placeholder="Email" />
           <input type="password" placeholder="Mot de passe" />
           <a href="{{ route('index') }}"><button>Connecter-vous</button></a>
        </form>
        
       </div>
       <div class="form-container sign-in-container">
           <!-- sign-in form code goes here-->
             <form action="#">
              <h1>Compte Agriculteur</h1>
              <div class="social-container">
                  <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                  <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
              </div>
              <span>Entrer votre Email</span>
              <input type="email" placeholder="Entrer votre email"/>
              <input type="Mot de passe" placeholder="Entrer votre mot de passe"/>
              <a href="#">Mot de passe oublié ?</a>
              <button>Connection</button>               
           </form>
       </div>
        
       <div class="overlay-container">
           <!-- overlay code goes here-->
        
         <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Bienvenue !</h1>
                <p>
                    Entrer vos données personnelles pour commencer vos ventes
                </p>
                <button class="ghost" id="signIn">Connecter-vous</button>
           </div>
        
            <div class="overlay-panel overlay-right">
                <h1>Bienvenue !</h1>
                <p>Entrer vos données personnelles pour commencer vos achats </p>
                <button class="ghost" id="signUp">Connecter-vous</button>
            </div>
        </div>
     </div>
       
   </div>
         
  <script src="{{ asset('assets/js/index.js') }}"></script>
</body>
</html>

