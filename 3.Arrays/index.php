<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <div class="arrays">
        <h2> Recommended Cities</h2>
        <?php 
            $cities = [
                "Tokyo",
                "Rio de Janeiro",
                "Seoul",
                "Kyoto"
            ];
            $books = [
                "Lord Of The Rings",
                "Dune",
                "Foundation"
            ]
        ?>
        <ul>
            <?php
                foreach ($cities as $city) {
                    echo "<li>$city</li>";   
                }
            ?>
        </ul>
        <br>
        <h2>Recommended Books</h2>
        <ul>
            <?php
                foreach ($books as $book) {
                    echo "<li>$book</li>";
                }
            ?>
        </ul>
    </div>
</body>
</html>