<?php
class Word_styles extends Words
{
    private $word_style;
    public function __construct($word_style)
    {
        parent::__construct($word_style);
    }

    public function get_capital_letter($word_style)
    {
        return strtoupper($word_style);
    }

    public function get_alternate_case($word_style)
    {
        $word_lengths = strlen($word_style);
        for($i=0; $i < $word_lengths; $i++) {
            //set lower case for odd and upper case for even
            if($i%2 == 1) {
                echo ucfirst(substr($word_style, $i, 1));
            } else {
                echo lcfirst(substr($word_style, $i, 1));
            }
        }
    }

    public function export_csv($word_style) {
        $word_arrays = str_split($word_style);
        $fp = fopen('csv/exported_string.csv', 'w');
        fputcsv($fp, $word_arrays);
        fclose($fp);
        return "<a href='csv/exported_string.csv'>CSV created!</a> <small><em><-- Click to download</em></small>";
    }
}
?>
