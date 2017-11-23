<form action="">
    <textarea name="lines" rows="10"><?php
        if (isset($_GET['lines'])){
            $lines = explode("\n", $_GET['lines']);
            $lines = array_map('trim',$lines);
            $lines = array_filter($lines);
            sort($lines, SORT_STRING);
            $sortedLines = implode("\n", $lines);
            echo $sortedLines;
        }
?></textarea><br>
    <input type="submit" value="Sort">
</form>