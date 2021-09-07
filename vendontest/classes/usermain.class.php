<?php
include 'includes/autoloader.inc.php';
if(isset($_POST['submit'])){
    //Questions
    $testObject = new user();
    $test = $testObject->getQuestions($_POST['testOptions']);
    $testCount = new user();
    $testCount = $testCount->getQuestionCount($_POST['testOptions']);
    //User
    $tester = new user();
    $tester->setInput($_POST['fname'],$_POST['testOptions']);
}