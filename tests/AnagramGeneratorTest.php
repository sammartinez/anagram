<?php

    require_once "src/AnagramGenerator.php";

    class AnagramGeneratorTest extends PHPUnit_Framework_TestCase
    {
            function test_makeAnagramTest_threeLetters()
            {
                //Arrange
                $test_AnagramGenerator = new AnagramGenerator;
                $input = "eat";

                //Act
                $result = $test_AnagramGenerator->makeAnagramCase($input);

                //Assert
                $this->assertEquals("ate", $result);
            }

    }


 ?>
