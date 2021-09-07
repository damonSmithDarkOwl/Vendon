<?php
class user extends connection{ //Model
    //Username Setup
    public function setInput($newName,$testType){
        $stmt = $this->connect()->prepare('SELECT count(*) FROM `vendonusers` WHERE `name` = ?');
        $stmt->execute(array($newName));
        $res = $stmt->fetch(PDO::FETCH_NUM);
        $exists = array_pop($res);
        if ($exists > 0) {
            return null;
        } else {
            $sql = "INSERT INTO `vendonusers` (`name`,`test`) VALUES (?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$newName,$testType]);
            //var_dump($stmt->errorInfo()); //Error Message  
        }
    }
    //Get it, for echoing, when the test is finished
    public function getUsername(){
        $sql = "SELECT `name` FROM `vendonusers`";
        $stmt = $this->connect()->query($sql); 
        $results = $stmt->fetchAll();
        
        foreach($results as $name){
            foreach($name as $n){
                $test[] = $n;
            }
        }
        $lastCount = array_key_last($test);
        return $test[$lastCount];
    }
    //Questions
    //Get the Question without ordering
    public function getQuestions($testType){
        //Select
        $sql = "SELECT * FROM vendon WHERE test = '$testType'";
        $stmt = $this->connect()->query($sql); 
        $results = $stmt->fetchAll();

        return $results;
    }
    //Max question count
    public function getQuestionCount($testType){
        $sql = "SELECT COUNT(*) FROM vendon WHERE test = '$testType'";
        $stmt = $this->connect()->query($sql); 
        $results = $stmt->fetch();
        foreach($results as $name => $count){
            return $count;
        }
    }
    //Answers
    public function correctAnswer($answersArray){
        $counter = 0;
        //Select From Data Base
        $sql = "SELECT answer FROM vendon";
        $stmt = $this->connect()->query($sql); 
        $results = $stmt->fetchAll();
        //Array
        foreach($results as $name => $value) { // create a new array
            foreach($value as $x => $answers){
                $test[] = $answers;
            } 
        }   
        
        for($i = 0; $i < count($answersArray);$i++){
            //Compare
            if(in_array($answersArray[$i],$test)){
                //Counter goes up
                $counter++;
            }
        }
        //Insert
        $tester = new user();
        $testName = $tester->getUsername();
        $this->setScore($counter,$testName);
        //Return
        return "You got ".$counter." out of ".count($answersArray)." answers right";
    }
    public function setScore($newScore,$name){
        $sql = "UPDATE `vendonusers` SET `correct` = ?  WHERE  `name` = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$newScore,$name]);
    }
}
?>