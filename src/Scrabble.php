<?php
    class Scrabble
    {
        function scrabbleScore($input)
        {
            $one_points = array('a','e','i','o','u','l','n','r','s','t');
            $two_points = array('d','g');
            $three_points = array('b', 'c', 'm', 'p');
            $four_points = array('f','h','v','w','y');
            $five_points = 'k';
            $eight_points = array('j','x');
            $input_letters = str_split(strtolower($input));
            $score = 0;
            foreach ($input_letters as $input_letter) {
                foreach ($one_points as $one_point) {
                    if($input_letter == $one_point) {
                        $score += 1;
                    }
                }
                foreach ($two_points as $two_point) {
                    if($input_letter == $two_point) {
                        $score += 2;
                    }
                }
                foreach ($three_points as $three_point) {
                    if($input_letter == $three_point) {
                        $score += 3;
                    }
                }
                foreach ($four_points as $four_point) {
                    if($input_letter == $four_point) {
                        $score += 4;
                    }
                }
                if($input_letter == $five_points) {
                    $score += 5;
                }
                foreach ($eight_points as $eight_point) {
                    if($input_letter == $eight_point) {
                        $score += 8;
                    }
                }
            }
            return $score;
        }
    }
?>
