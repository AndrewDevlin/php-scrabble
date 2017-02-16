<?php
    require_once 'src/Scrabble.php';

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_scrabbleScore_onePoints()
        {
            //Arrange
            $new_scrabble = new Scrabble;
            $input = 'no';
            //Act
            $result = $new_scrabble->scrabbleScore($input);
            //Assert
            $this->assertEquals(2, $result);
        }

        function test_scrabbleScore_upperCase()
        {
            //Arrange
            $new_scrabble = new Scrabble;
            $input = 'No';
            //Act
            $result = $new_scrabble->scrabbleScore($input);
            //Assert
            $this->assertEquals(2, $result);
        }
    }
?>
