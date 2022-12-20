<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MovieTube</title>
    <link rel="shortcut icon" href="LogoTrans.png">
    <link rel="stylesheet" type="text/css" href="index.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
    <div class="header">
        <header>
        <div class="head">
          <div class="logo">
            <img src="LogoTrans.png" alt="">
          </div>
        </div>
        </header>
      </div>
       
    <div class="main"  data-aos="fade-right">  	
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="signup" >
				<form  id="form1" action="signup.php"  method="post" onsubmit="return valid()">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" id='name1'name="txt1" placeholder="first name" >
          <input type="text"id='name2' name="txt2" placeholder="second name" >
					<input  type="email" id='ema'name="email" placeholder="Email" >
					<input type="password" id='pass' name="pswd" placeholder="Password" >
					<button >signup</button>
				</form>
			</div>
			<div class="login">
				<form id="form2" action="login.php" method="post" onsubmit="return valid2()">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" id='ema2'name="email" placeholder="Email" >
					<input type="password"  id='pass2'name="pswd" placeholder="Password" >
					<button>Login</button>
				</form>
			</div>
	</div>
  
   <script>
        function valid(){
            const name=document.getElementById("name1");
            const name2=document.getElementById("name2");
            const em=document.getElementById("ema");
            const pas=document.getElementById("pass");
            const form=document.getElementById("form1");
            
            if(name.value ===''||name.value ==='null'){
                alert("First Name Must be filled");
                return false;
            }
            if(name2.value ===''||name2.value ==='null'){
                alert("Last Name Must be filled");
                return false;
            }
            if(em.value ===''||em.value ==='null'){
                alert("Email Must be filled");
                return false;
            }
            
            if(pas.value ===''||pas.value ==='null' ){
                alert("Password Must be filled");
                return false;
            }
            if(pas.value.length <8 ){
                alert("Password Must be greater than 8 character");
                return false;
            }
            else{
              form.submit();
            }
            
           
        }
        function valid2(){
          const em2=document.getElementById("ema2");
            const pas2=document.getElementById("pass2");
            const form2=document.getElementById("form2");
            if(pas2.value ===''||pas2.value ==='null'){
                alert("Password Must be filled");
                return false;
            }
            if(em2.value ===''||em2.value ==='null'){
                alert("Email Must be filled");
                return false;
            }
            if(pas2.value.length <8 ){
                alert("Password Must be greater than 8 character");
                return false;
            }
            else{
              form2.submit();
            }
           
        }
    </script>
  
<footer id="footer">
  <div class="links">
    <div class="img1"> <a href="#"><img src="facebookicon.png"></a> </div>
    <div class="img2"> <a href="#"><img src="insta.png"></a></div>
    <div class="img3"> <a href="#"><img src="twitter.png"></a></div>
    </div>
    <p>&copy 2022 Copy Right</p>
   </footer>
    <script>
        AOS.init();
    </script>
</body>
</html>
</html>