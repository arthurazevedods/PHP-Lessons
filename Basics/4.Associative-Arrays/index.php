<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4. Associative Arrays</title>
</head>
<body>
<div class="arrays">
        <h2> Recommended Cities</h2>
        <?php 
            $cities = [
                [
                    "name"=> "Tokyo",
                    "country"=> "Japan",
                ],
                [
                    "name"=> "Kyoto",
                    "country"=> "Japan",
                ],
                [
                    "name"=> "Seoul",
                    "country"=> "South Korea",
                ],
                [
                    "name"=> "Rio de Janeiro",
                    "country"=> "Brazil",
                ]
            ];
            $books = [
                [
                    "name"=> "Lord Of The Rings",
                    "author"=> "J.R.R. Tolkien",
                    "amazonLink"=>"https://www.amazon.com.br/Lord-Rings-Deluxe-J-Tolkien/dp/0544273443/ref=sr_1_3?sr=8-3&ufe=app_do%3Aamzn1.fos.6d798eae-cadf-45de-946a-f477d47705b9"
                ],
                [
                    "name"=> "Dune",
                    "author"=> "Frank Herbert",
                    "amazonLink"=>"https://www.amazon.com.br/Dune-English-Frank-Herbert-ebook/dp/B00B7NPRY8/ref=sr_1_5?__mk_pt_BR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&sr=8-5"
                ],
                [
                    "name"=> "Foundation",
                    "author"=> "Isaac Asimov",
                    "amazonLink"=>"https://www.amazon.com.br/Foundation-3-Book-Boxed-Set-Empire/dp/0593499573/ref=sr_1_1?__mk_pt_BR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&sr=8-1&ufe=app_do%3Aamzn1.fos.6a09f7ec-d911-4889-ad70-de8dd83c8a74"
                ]
            ]
        ?>
        <ul>
            <?php foreach ($cities as $city): ?>
                <li>
                    <?php echo $city["name"]; ?>
                    (<?php echo $city["country"]; ?>)
                </li>
            <?php endforeach ?>
        </ul>
        <br>
        <h2>Recommended Books</h2>
        <ul>
        <?php foreach ($books as $book): ?>
                <li>
                    <a href="<?php $book['amazonLink'] ?>">
                        <?php echo $book["name"]; ?>
                        (<?php echo $book["author"]; ?>)
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</body>
</html>