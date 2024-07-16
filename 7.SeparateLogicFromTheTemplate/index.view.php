<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6. Lambda Functions</title>
</head>
<body>
<div class="arrays">
    <h1>Lambda Functions - Make Our Functions More Generic</h1>
        

        <h2>Recommended Books</h2>
        <ul>
            <?php foreach ($filtered($cities, 'country', 'Brazil') as $city): ?>
                <li>
                    <?php echo $city["name"]; ?> (<?php echo $city["country"]; ?>)                  
                </li>
            <?php endforeach ?>
        </ul>
        
        <h2>Recommended Books</h2>
        <ul>
            <?php foreach ($filteredBooks as $book): ?>
                <li>
                    <a href="<?php echo $book['amazonLink'] ?>">
                        <?php echo $book["name"]; ?> (<?php echo $book["author"]; ?>)
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</body>
</html>