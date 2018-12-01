<!DOCTYpe html>
<html>

<body>
    <?php
        include 'db_Digi.php';
    
        $sql = "SELECT * FROM question_info";
        $result = mysqli_query($conn, $sql);
        while($row= mysqli_fetch_array($result))
        {
            echo "".$row['question']."<br>";
            $option1 = "".$row['option1']."";
            $option2 = "".$row['option2']."";
            $option3 = "".$row['option3']."";
        }
   ?>
    <div id="answers_button">
        <input type="Submit" name= "option1" value="<?php echo $option1; ?>" id = bt1 >
        <input type="Submit" name= "option2" value="<?php echo $option2; ?>" >
        <input type="Submit" name= "option3" value="<?php echo $option3; ?>">
    </div>

</body>
    
    </html>