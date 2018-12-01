<!DOCTYPE html>
<html>
<head>
<style type="text/css">
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 25px;
    text-align: center;
    font-size: 16px;
    cursor: pointer;
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
            
    
body{
                background-image:url(chess1.png);
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
    .loginBox p
    {
                margin:0 0  20px;
                padding-top:0 0 70px;
                margin-bottom: 80px;
                color: white;
                text-align: center;
                font-size: 30px;
    }

.button:hover {
    background: green;
}

        h1 {
            position:absolute;
            top:10px;
            left:600px;
            color:red;
            font-size:30px;
        }
    

</style>

        <script type="text/javascript">
        function countdowntimer(){
                var timeleft = 10;
                var downloadTimer = setInterval(function(){
                timeleft--;
                document.getElementById("countdowntimer").textContent = timeleft;
                if(timeleft==0){
                //yha pr apni saari conditions daal de aur neeche wali line mein a.html ki jagah vhi page daal de jis pr ye code hai
                                window.location.href="Users_digi.php";
                }
                if(timeleft <= 0)
                                clearInterval(downloadTimer);
                                },1000);
            }

    </script>
</head>
<body>
   
    <?php
        include 'db_Digi.php';
        $a= 0;
    
        $sql = "SELECT * FROM question_info";
        $result = mysqli_query($conn, $sql);
        while($row= mysqli_fetch_array($result))
        {
            
            $ques = "".$row['question']."";
            $option1 = "".$row['option1']."";
            $option2 = "".$row['option2']."";
            $option3 = "".$row['option3']."";
            
        }
   ?>

<div class="loginBox">
    
    <p>W<?php echo $ques; ?></p>
            
            <form>
                

                <button class="button" value="<?php echo $option1; ?>"><?php echo $option1; ?></button>
                <button class="button" value="<?php echo $option2; ?>"><?php echo $option2; ?></button>
                <button class="button" value="<?php echo $option3; ?>"><?php echo $option3; ?></button>
            
            </form>
        
        </div>
<script type="text/javascript">
                countdowntimer();
</script>
<h1 id="countdowntimer" ></h1>

</body>
</html>