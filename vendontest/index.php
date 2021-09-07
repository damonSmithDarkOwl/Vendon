<html>
<head>
    <meta charset = "utf-8">
    <title>Vendoot</title>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <!-- Logo -->
    <div class = "logo"><img src = "images\vendoot_logo.png"></div>
    <!-- Input and Options+Error Messages -->
    <?php include('classes/usermain.class.php')?>
    <?php if(!isset($_POST['fname']) and !isset($_POST['testOptions'])){ ?>
    <div class = "containerIntro">
        <form action = "" method = "POST" class = "form" id="form">
                <div class="formControl">
                    <input type="text" id="fname" name = "fname" placeholder = "Ievadi savu vārdu..." required/><br>

                    <select id ="testOptions" name = "testOptions" required>
                        <option value="" disabled selected>Izvēlies testu</option>
                        <option value = "animation">Animation Trivia</option>
                        <option value = "maths">Maths</option>
                        <option value = "sports">Sports</option>
                    </select><br>
                    <input type="submit" value = "Sākt" name = "submit" id = "btn" class = "button"/><br>
                    
                </div>
        </form>
    </div>
    <? }else{ ?>
        <!-- Input and Options+Error Messages -->
    <div class = "containerTest">
        <form action = "answer.php" method = "POST">
            <? for($i = 0; $i < $testCount; $i++) {?>
                
                <?php $answerArray = array($test[$i]['choice1'],$test[$i]['choice2'],$test[$i]['choice3'],$test[$i]['answer']); 
                shuffle($answerArray);
                ?>
                <div class="test test_<?=$i?>">
                    <h2><?= $test[$i]['question']?></h2>
                    <?php if($answerArray[0] != null){?>
                        <input type="radio" name ="testId[<?=$i?>]" value="<?= $answerArray[0]?>" onchange="enableNext(<?=$i?>)"> <?= $answerArray[0]?><br>
                    <?php } ?>
                    <?php if($answerArray[1] != null){?>
                        <input type="radio" name ="testId[<?=$i?>]" value="<?= $answerArray[1]?>" onchange="enableNext(<?=$i?>)"> <?= $answerArray[1]?><br>
                    <?php } ?>
                    <?php if($answerArray[2] != null){?>
                        <input type="radio" name ="testId[<?=$i?>]" value="<?= $answerArray[2]?>" onchange="enableNext(<?=$i?>)"> <?= $answerArray[2]?><br>
                    <?php } ?>
                    <?php if($answerArray[3] != null){?>
                        <input type="radio" name ="testId[<?=$i?>]" value="<?= $answerArray[3]?>" onchange="enableNext(<?=$i?>)"> <?= $answerArray[3]?><br>
                    <?php } ?>
                    
                    <div class = "button">
                        <? if($i == $testCount-1) { ?>
                            <br><input type="submit" class="nextButton" disabled name = "finish" value="Finish!"/><br>
                        <? } else { ?>
                            <br><button type="button" class="nextButton" disabled onclick="showQuestion(<?=$i+1?>)">Next Question</button><br>
                        <? } ?>  
                    </div> 
                </div>
            <? } ?>
        </form>
    </div>
    <?  } ?>
    <script>
        showQuestion(0)

        function enableNext(nr) {
            $('.test_' + nr +' .nextButton').prop('disabled', false)
        }

        function showQuestion(nr) {
            $('.test').hide()
            $('.test_' + nr).show()
        }
    </script>
</body>    
</html>