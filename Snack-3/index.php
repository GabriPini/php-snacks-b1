<!-- ## Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-3007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
 -->

<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1',
            'img' => '<img src="https://picsum.photos/400/200" alt="">'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2',
            'img' => '<img src="https://picsum.photos/400/200" alt="">'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3',
            'img' => '<img src="https://picsum.photos/400/200" alt="">'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4',
            'img' => '<img src="https://picsum.photos/400/200" alt="">'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5',
            'img' => '<img src="https://picsum.photos/400/200" alt="">'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6',
            'img' => '<img src="https://picsum.photos/400/200" alt="">'
        ]
    ],
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>



<div class="container mt-5">
    
    <?php foreach ($posts as $date => $posts) : ?>
        
        <h2 class="border-bottom  border-primary border-3" >  <?= $date ?> : </h2>
    <div class=" d-flex  w-50 text-center   my-2 border-4 border-primary ">
        
        <?php foreach ($posts as $post) : ?>
            <div class="col-6 card shadow-lg  my-2 mx-1 py-3">
                
                <?= $post['img']; ?>
                <h3> <?= $post['title']; ?></h3>
                <p> <?= $post['author']; ?></p>
                <em> <?= $post['text']; ?></em>
            </div>
          <?php endforeach; ?>
    </div>
    
    <?php endforeach; ?>
</div>
    
</body>
</html>