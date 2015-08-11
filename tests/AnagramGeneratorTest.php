<?php

    require_once "src/AnagramGenerator.php";

    class AnagramGeneratorTest extends PHPUnit_Framework_TestCase
    {
             function test_makeAnagramTest_letter()
             {
                 //Arrange
                 $test_AnagramGenerator = new AnagramGenerator;
                 $input_word = "a";
                 $guess_array = ["a"];

                 //Act
                $result = $test_AnagramGenerator->makeAnagramCase($input_word, $guess_array);

                 //Assert
                 $this->assertEquals(["a"], $result);
             }


    }


 ?>
