<?php

class Words
{
    private $word;

    public function __construct($word) {
        $this->word = $word;
    }

    public function get_word() {
        return $this->word;
    }

}

?>
