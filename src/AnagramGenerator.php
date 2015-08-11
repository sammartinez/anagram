<?php

    class AnagramGenerator
    {

        function makeAnagramCase($input_title)

        {
            $library_words = array("ate");
            $input_array_of_words = explode(" ", $input_title);
            $output_anagramed = array();

            foreach ($input_array_of_words as $word) {

                if($input_array_of_words == $library_words) {
                    array_push($output_anagramed, $word);
                }
            }
            return implode(" ", $output_anagramed);
        }
    }

 ?>
