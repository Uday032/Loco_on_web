<!DOCTYPE html>

<html>
    
    <head>
        
        
        <style type="text/css">
            
            body{
                background-image:url(ed.jpeg);
                background-repeat: no-repeat;
                background-size: cover;
                margin: 0;
                padding: 0;
                height: 100%;
                width: 100%;

            
            }
            
            
           .loginBox button
    {
                
                text-transform: uppercase;
                font-size: 30px;
                width: 380px;
                height: 60px;
                margin-bottom: 20px;
                padding-bottom: 10px;
                 border-radius: 30px;
                position: relative;
        
    }
            .loginBox
            {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-30%);
                width: 450px;
                height: 500px;
                padding: 30px 40px;
                box-sizing: border-box;
                background: rgba(55, 55, 55, .4);
            }
            
            h2 {
                
                margin:0 0  20px;
                padding-top:0 0 20px;
                color: darkred;
                text-align: center;
                font-size: 50px;
            }
            
            .loginBox p{
                margin: 0;
                padding:0 0 5px ;
                font-weight: bold;
                color: black; 
            }
            .loginBox a{
                margin: 0;
                padding:0;
                font-weight: lighter;
                font-size: 20px;
                color: #fff;
            }
            
            .loginBox input{
                
                width: 100%;
                
                margin-bottom: 20px;
            }
            
            .loginBox button[type= "submit"]{
                width: 100%;
                background-color:beige;
                border-radius: 8px;
                border: 1px solid black;
                padding: 10px;
                margin-top: 5px;
                margin-bottom: 20px;
                font-size: 15px;
            }
            .loginBox input[type="text"],
            .loginBox input[type="password"]{
                
                border: none;
                border-bottom: 1px solid #fff;
                background: transparent;
                outline: none;
                height: 40px;
                color: #fff;
                font-size: 16px;
                
            }
            .loginBox input[type="submit"]{
                
                border: none;
                
                outline: none;
                height: 40px;
                color: black;
                font-size: 15px;
                font-weight: bold;
                background:grey;
                border-radius: 25px;
            }
            .airpay p1{
                
                color: black;
                font-size:130px;
                font-family:cursive;
                position: fixed;
                top: 1%;
                left: 33%;
            }
            .airpay p{
                
                position: fixed;
                left:75%;
                color: black;
                font-size: 20px;
                
                
                
            }
            
       .button:hover {
    background: green;
}
            
    
            .airpay button{
                position: fixed;
                left:90%;
                top:3%;
                outline: none;
                height: px;
                color: black;
                padding: 5px;
                padding-right: 20px;
                padding-left: 20px;
                font-size  : 15px;
                font-weight: bold;
                background-color: darkgray;
                border-radius: 25px;
                border: none;
                
            }
            
        </style>
        
       
    </head>
    <body>
        
        <div class="loginBox">
            
            <h2>Log In Here</h2>
            <form>
                
                <p>Email</p>
                <input type="text" name="" placeholder="Enter User Id">
                <p>Password</p>
                <input type="password" name="" placeholder="******">
                
                
                <button class="button">SIGN IN</button>
                <!--<button type = "submit" onclick="alert("HEllo world")"><strong>SIGN IN</strong></button>-->
                
                
            
                       
            
            
            </form>
        
        </div>
        
        <div class="airpay">
            
            <p1>Addicto</p1>
        
            
            <p>don't have account yet?</p>
            
            <form action="Signup_Digi.php">
                
               <button class="butt">SIGN UP</button>
            
            </form>
        
        </div>
        
    </body>
</html>