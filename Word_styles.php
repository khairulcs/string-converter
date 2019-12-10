<?php
class Word_styles extends Words
{
    public function __construct($word_style)
    {
        parent::__construct($word_style);
        $this->word_style = $word_style;
    }

    public function get_capital_letter()
    {
        return strtoupper($this->word_style);
    }

    public function get_alternate_case()
    {
        $word_lengths = strlen($this->word_style);
        $theWords = $this->word_style;
        $alternateWords = "";
        for($i=0; $i < $word_lengths; $i++) {
            //set lower case for odd and upper case for even
            if($i%2 == 1) {
                $alternateWords .= ucfirst(substr($theWords, $i, 1));
            } else {
                $alternateWords .= lcfirst(substr($theWords, $i, 1));
            }
        }
        return $alternateWords;
    }

    public function export_csv() {
        $word_arrays = str_split($this->word_style);
        $fp = fopen('csv/exported_string.csv', 'w');
        fputcsv($fp, $word_arrays);
        fclose($fp);
        return "<a href='csv/exported_string.csv'>CSV created!</a> <small><em><-- Click to download</em></small>";
    }
}
?>
