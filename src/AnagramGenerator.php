<?php

    class AnagramGenerator
    {

        function makeAnagramCase($input_title)

        {
            //$error_message = "Not in the list of words";
            $library_words = array("eat", "ate", "tea" );
            sort($library_words);

            foreach($library_words as $current_words)


            $input_array_of_words = explode(" ",$input_title);
            $output_anagramed = array();

            foreach ($input_array_of_words as $word) {
                array_push($output_anagramed, $word);

            }

            return implode(" ", $output_anagramed);
        }
    }

 ?>
