<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Document</title>
</head>
<body>
    <h1>
        <?php 
            echo "Fist lesson";
        ?>
    </h1>

    <div class="Variables">
        <?php
            $greetings="Hi";
            echo $greetings." "."World!";
        ?>
        <br>
        <br>
        <?php
            $greetings="Hi";
            echo "$greetings Universe!";
        ?>
    </div>
    <br>
    <div class="conditionals">
        
        <?php
            $country = "Brazil";
        ?>
        <span>
        You have to visit:
            <?php
                echo $country;
            ?>
        </span>
    </div>
    <br>
    <div class="conditionals">
        
        <?php
            $country = "Brazil";
            $visited = true;

            if($visited){
                $message = "You need return to $country";
            }else{
                $message = "You need to know $country";
            }
        ?>
        
        <span>
            <?php echo $message ?>
        </span>

    </div>
</body>
</html>