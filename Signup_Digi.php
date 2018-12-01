<!DOCTYPE html>
<html>
    <head>
        <title>Air pay</title>
        <link href="Project.css" type= "text/css" rel="stylesheet" />
    </head>

    <body>

        
        <div id = "Signup_page">
            <p id= "Title">Addicto</p>

            <p id="Welcome">Welcome,</p>


            <form action= "Sign_digi.php" method = "POST">
                
                <div>
                <input type="text" name= "first" value="" placeholder="First name" size= "30"/>
                </div>
                <div>
                <input type="text" name= "last" value="" placeholder="Last name" size= "30"/>
                </div>
                <div>
                <input type="integer" name= "mobile" value="" placeholder="Mobile number" size="30" maxlength="10"/>
                </div>
                <div>
                <input type="Password" name= "password" value="" placeholder="Password" size= "30"/>
                </div>

                <div>
                <input type="Password" name= "cfpassword" value="" placeholder="Confirm Password"  size= "30"/>
                </div>

                <div id="SignUp_button">
                <input type="Submit" name= "submit" value="Sign up" >
                </div>
            </form>

        </div>

    </body>
</html>