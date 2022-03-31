
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
                      <div class="form" >  
                        <?php
                        if (isset($_SESSION['status']) && $_SESSION['status']!="" ) {

                            ?>

                              <div><?php echo $_SESSION['status']  ?></div>  
                            <?php
   unset($_SESSION['status']);
}
                        ?>
                        <h2 class="form_header"> Sawyer Talks | Register </h2>
                           <form action="" method="POST">  
                                <div class="input__box">  
                                    <input type="text" id="full_name" name="fullname" placeholder="Full name"> 
                                </div>  
                                <div class="input__box">  
                                    <input type="email" id="email" name="email" placeholder="Email">
                                </div>  
                                <div class="input__box">  
                                    <input type="password" id="password" name="pass" placeholder="Password"> 
                               </div> 
                                <div class="input__box">  
                                    <input type="text" id="pnumber" name="mnum" placeholder="Phone Number"> 
                               </div> 
                               <div class="input__box">  
                                <input type="text" id="favourite_song" name="song" placeholder="The Best Song Ever">
                               </div>  
                               <div class="input__box">  
                                <input type="text" id="milk_before_cereal" name="opt" placeholder="Milk Before Cereal? ( Yes | No )">
                           </div>  

                                <div class="input__box">  

                                     <button type="button" onclick="login()">Login</button>
                        <button name="register" onclick="phoneAuth();" >Register</button>
                                </div>    
                                <p class="forget">Already have an account?<a href="#">Login</a></p>  
                           </form>  
                      </div>  
                 </div>  
            </div>  
       </section> 
       <section>
           <form>
               <input type="text" name="">
               <button type="button" onclick="codeverify();"> Verrify Code</button>
           </form>
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
     <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-app.js"></script>
    <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
    <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-analytics.js"></script>
    <!-- Add Firebase products that you want to use -->
    <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-firestore.js"></script>
    <script>
 import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js";
        // code for phone authentication
        function phoneAuth(){
    var number=document.getElementByID('pnumber').value;
    firebase.auth().SignInWithphonenumber(number).then(function(confirmationResult){
        window.confirmationResult =confirmationResult;
        codeResult=confirmationResult;
        console.log(CodeResult);
        alert("message Sent");

}).catch(function(error){
        alert(error.message);
},
    function codeverify(){
        var cod.document.getElementByID('verificationCode').value;
        coderesult.cofirm(code).then(function(result){
            alert("success");
            var user =result.user;
            console.log(user);
        }).catch(function(error){
            alert(error.message);
        });
    }

</script>
   
  
</html>