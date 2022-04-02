<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UFT-8">
        <title>Sawyer Talks Login</title>
        <meta name="viewport" content="width=device-width; initial-scale=1.0;">
         <!-- Cool Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <!-- Our stylesheet -->
        <link rel="stylesheet" href="../login/style.css">
    </head>
    <body>
        
        <section>  
            <div class="background">
                <div class="shape"></div>
                <div class="shape"></div>
            </div>
            <div class="box">  
                 
                 <div class="container">  
                      <div class="form">  
                        <h2 class="form_header"> Sawyer Talks | Login </h2>
                           <form action="code.php" method="POST">  
                                <div class="input__box">  
                                     <input type="text" placeholder="Username"  id="email">  
                                </div>  
                                <div class="input__box">  
                                     <input type="password" placeholder="Password" id="password">  
                                </div>  
                                <div class="input__box">  

                                <button type="button" onclick="login()">Login</button>
                                <a type="button" href="updated-register.html"  >Register</a>
                                </div>    
                                <p class="forget">Don't have an account? <a href="#">Register</a></p>  
                                <button type="button" id="google">Google</button>
                                <button type="button" id="google">fACEBOOK</button>
                           </form>  
                      </div>  
                 </div>  
            </div>  
       </section>  
        
    </body>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
         https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-database.js"></script>

    <!-- Our script must be loaded after firebase references -->
    <script src="../login/index.js"></script>
    <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.9/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.9/firebase-analytics.js";
  import { getAuth, GoogleAuthProvider,signInWithRedirect,getRedirectResult  } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js";

  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyBOpjHOtddt-PuEhxTp-62rxCajNZ_YL0c",
    authDomain: "sigup-e0dfb.firebaseapp.com",
    projectId: "sigup-e0dfb",
    storageBucket: "sigup-e0dfb.appspot.com",
    messagingSenderId: "272053969558",
    appId: "1:272053969558:web:54d062c6e46942a3f8d8b7",
    measurementId: "G-E1FRELWGZC"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
  const auth = getAuth(app);
  const provider = new GoogleAuthProvider(app);
  google.addEventListener('click',(e)=> {
    signInWithRedirect(auth, provider);


signInWithPopup(auth, provider)
  .then((result) => {
    // This gives you a Google Access Token. You can use it to access the Google API.
    const credential = GoogleAuthProvider.credentialFromResult(result);
    const token = credential.accessToken;
    // The signed-in user info.
    const user = result.user;
    // ...
  }).catch((error) => {
    // Handle Errors here.
    const errorCode = error.code;
    const errorMessage = error.message;
    // The email of the user's account used.
    const email = error.email;
    // The AuthCredential type that was used.
    const credential = GoogleAuthProvider.credentialFromError(error);
    // ...
  });
  });
</script>

</html>