<?php
    class Scrabble
    {
        function scrabbleScore($input)
        {
            $letters_points = array(
                1 => array('a','e','i','o','u','l','n','r','s','t'),
                2 => array('d','g'),
                3 => array('b', 'c', 'm', 'p'),
                4 => array('f','h','v','w','y'),
                5 => array('k'),
                8 => array('j','x'),
                10 => array('q','z')
            );

            $score = 0;
            $input_letters = str_split(strtolower($input));

            foreach ($input_letters as $input_letter) {
                foreach ($letters_points as $points => $point_characters) {
                    foreach ($point_characters as $point_character) {
                        if ($input_letter == $point_character) {
                            $score += $points;
                        }
                    }
                }
            }
            return $score;
        }

        function scrabbleScoreNotFactored($input)
        {
            $one_points = array('a','e','i','o','u','l','n','r','s','t');
            $two_points = array('d','g');
            $three_points = array('b', 'c', 'm', 'p');
            $four_points = array('f','h','v','w','y');
            $five_points = 'k';
            $eight_points = array('j','x');
            $ten_points = array('q','z');
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
                foreach ($ten_points as $ten_point) {
                    if($input_letter == $ten_point) {
                        $score += 10;
                    }
                }
            }
            return $score;
        }
    }
?>
