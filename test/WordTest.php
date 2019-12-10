<?php
    use PHPUnit\Framework\TestCase;
    require 'Words.php';
    require 'Word_styles.php';

    class WordTest extends TestCase
    {
        public function testCapitalLetter()
        {
            $word_given = 'hello world';
            $cp = new Word_styles($word_given);
            $this->assertEquals('HELLO WORLD',$cp->get_capital_letter());
        }
        public function testAlternatingCase()
        {
            $word_given = 'hello world';
            $cp = new Word_styles($word_given);
            $this->assertEquals('hElLo wOrLd',$cp->get_alternate_case());
        }
    }
?>