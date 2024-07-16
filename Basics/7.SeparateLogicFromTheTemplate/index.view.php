<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7. Separate PHP and HTML</title>
</head>
<body>
    <span>
        <?php
            if($product['price']>900){
                echo "Don't buy, very expensive";
            }else{
                echo "Good price, you could buy it";
            }
        ?>
    </span>

    <h2>
        Travels to 
        <?php echo $country["name"].":" ?>
        <ul>
           <?php foreach($country['travels'] as $travel): ?> 
                <li>
                    <?php echo $travel ?>
                </li>
            <?php endforeach ?>
        </ul>
    </h2>
    
</body>
</html>