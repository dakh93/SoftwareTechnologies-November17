<?php
if (isset($_GET['text'])) {
    $input = explode("\r\n", $_GET['text']);
    $upperCaseOnly = array();

        $currString =
            preg_match_all('/\w+/', $input[$i]);
        $currString = array_filter($currString);

        foreach ($currString as $word) {
            if (ctype_upper($word)) {
                $upperCaseOnly[] = $word;
            }
        }
    
}
    echo join(", ",$upperCaseOnly);
?>

<form action="">
    <textarea name="text" rows="10"></textarea><br>
    <input type="submit" value="Extract">
</form>
