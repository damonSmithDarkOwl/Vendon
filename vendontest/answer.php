<html>
<head>
    <meta charset = "utf-8">
    <title>Vendoot | Thank you!</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <!-- Input and Options+Error Messages -->
    <div class = "containerIntro">
        <?php include('useranswer.class.php')?>
        <h2 class = "answerHeader">Thanks <?= $tester->getUsername(); ?></h2>
        <p class = "answer"><?= $answer->correctAnswer($_POST['testId']);?></p>
    </div>
</body>    
</html>