<?php 
    $paragraph = $_GET['paragraph'];
    $word = $_GET['word'];

    var_dump($paragraph, $word);

    $censored_paragraph = str_replace($word, '***', $paragraph);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>   
<body>
    <div class="container">
        <div class="row gy-3">
            <div class="col-12">
                <h3>Paragrafo originario e la sua lunghezza</h3>
                <p><?php echo $paragraph; ?></p>
                <p>Lunghezza del paragrafo: <?php echo strlen($paragraph); ?></p>
            </div>
            <div class="col-12">
                <h3>Paragrafo censurato e sua lunghezza</h3>
                <p><?php echo $censored_paragraph; ?></p>
                <p>Lunghezza del paragrafo: <?php echo strlen($censored_paragraph); ?></p>
            </div>
        </div>
    </div>
</body>
</html>