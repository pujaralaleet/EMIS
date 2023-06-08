<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=50%-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
button {   
       background-color: #4CAF50;   
       width: 10%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 50%;   
        margin: 12px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid blue;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: 10%;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color:purple;  
    }   
</style>   
</head>    
<body>    
    <center> <h1>Admin Login Form </h1> </center>   
    
   
      <form>  
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <br>
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>
            <br>  
           
           <center> <button type="submit">Login</button>  
            <br> 
            <input type="checkbox" checked="checked"> Remember me  
            <br> 
            <button type="button" class="cancelbtn"> Cancel</button>   
            Forgot <a href="#"> password? </a>   
           </center>
        </div>   
    </form>  
   
</body>     
</html>     