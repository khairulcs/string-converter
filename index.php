<html>
    <body>
        <form action="" method="get" >
            <label>Input</label>
            <input type="text" name="input" />
            <input type="submit" value="Check it out" />
        </form>
    </body>
</html>
<?php
    require 'Words.php';
    require 'Word_styles.php';
    if(isset($_GET['input']) && $_GET['input'] !== "") {
        
        $input = $_GET['input'];
        $cp = new Word_styles($input);
        echo $cp->get_capital_letter()."<br />";
        echo $cp->get_alternate_case()."<br />";
        echo $cp->export_csv();
    } else {
        echo "Please insert a string";
    }
?>
