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
                transform: translate(-50%,-50%);
                width: 450px;
                height: 500px;
                padding: 30px 40px;
                box-sizing: border-box;
                background: rgba(55, 55, 55, .4);
            }
            
            
            .loginBox p{
                margin: 0;
                padding:0 0 5px ;
                font-weight: bold;
                color: black; 
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
            .loginBox input[type="text"]    {
                
                border: none;
                border-bottom: 1px solid #fff;
                background: transparent;
                outline: none;
                height: 40px;
                color: #fff;
                font-size: 16px;
                
            }
            .loginBox button[type="submit"]{
                
                border: none;
                
                outline: none;
                height: 40px;
                color: black;
                font-size: 20px;
                font-weight: bold;
                background:white;
                border-radius: 25px;
            }
            
       .button:hover {
    background: green;
}
            
        </style>
        
       
    </head>
    <body>
        
        <div class="loginBox">
            
            <form action="Queestion_db.php" method="post">
                
                <p>Question</p>
                <input type="text" name="Question" placeholder="Enter the Question">
                <p>Option 1</p>
                <input type="text" name="Option1" placeholder="Enter the Option">
                 <p>Option 2</p>
                <input type="text" name="Option2" placeholder="Enter the Option">
                 <p>Option 3</p>
                <input type="text" name="Option3" placeholder="Enter the Option">
                <p>Answers</p>
                <input type="text" name="answers" placeholder="Enter the Answer">
                
                
                <button class="button" type="submit">SUBMIT</button>
                
                
            
                       
            
            
            </form>
            
            
        
        </div>

        
    </body>
</html>