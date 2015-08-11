<?php

    class AnagramGenerator
    {

        function makeAnagramCase($input_word, $guess_array)

        {

            foreach($guess_array as $guess) {
                $anagram_words = str_split($guess);
                //$sorted_words = sort($input_word);
                $output_words =  array();

                foreach($anagram_words as $word) {
                    //$words_in_plode = implode($word);
                    array_push($output_words, $word);
                }

            }
            return $output_words;
            //this takes two inputs, one is the input word and
            // one is the array of guesses

            // return array of correct anagrams from guess list
        }


    }

 ?>
