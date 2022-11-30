<!DOCTYPE html>
<html lang="da" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#</title>
    <link rel="stylesheet" href="style-login.css" />
  </head> 
<body>  
  <div class = "loginboks">  
    <img src="pic/jnf.png" alt= "logo" style="width:200px"> 
    <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
      <p>  
        </br>
        <input type = "text" placeholder="Medlemsnummer" id ="user" name  = "user" required />  
      </p>  
      <p>  
        <input type = "password" placeholder="Password" id ="pass" name  = "pass" required />  
        </br>
      </p>  
      <p>     
        <input type =  "submit" class = "btn" value = "LOGIN" />  
      </p>  
    </form>  
  </div>  

  <script>  
    function validation()  
    {  
      var id=document.f1.user.value;  
      var ps=document.f1.pass.value;  
        if(id.length=="" && ps.length=="") {  
          alert("User Name and Password fields are empty");  
            return false;  
    }  else  
    {  
      if(id.length=="") {  
        alert("User Name is empty");  
        return false;  
    }   
      if (ps.length=="") {  
        alert("Password field is empty");  
        return false;  
    }  
    }                             
    }  
  </script>  
</body>     
</html>  
