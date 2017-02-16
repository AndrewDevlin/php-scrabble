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

        function test_scrabbleScore_twoPoints()
        {
            //Arrange
            $new_scrabble = new Scrabble;
            $input = 'doll';
            //Act
            $result = $new_scrabble->scrabbleScore($input);
            //Assert
            $this->assertEquals(5, $result);
        }

        function test_scrabbleScore_threePoints()
        {
            //Arrange
            $new_scrabble = new Scrabble;
            $input = 'mange';
            //Act
            $result = $new_scrabble->scrabbleScore($input);
            //Assert
            $this->assertEquals(8, $result);
        }

        function test_scrabbleScore_fourPoints()
        {
            //Arrange
            $new_scrabble = new Scrabble;
            $input = 'ambiguously';
            //Act
            $result = $new_scrabble->scrabbleScore($input);
            //Assert
            $this->assertEquals(19, $result);
        }

        function test_scrabbleScore_fivePoints()
        {
            //Arrange
            $new_scrabble = new Scrabble;
            $input = 'kamagraphy';
            //Act
            $result = $new_scrabble->scrabbleScore($input);
            //Assert
            $this->assertEquals(25, $result);
        }
    }
?>
