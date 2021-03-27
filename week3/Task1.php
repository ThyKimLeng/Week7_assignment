<?php
    $string = "emocleW ot PHP";
    echo "<br>".reverse($string);
    function reverse($string_data)
    {
        $temp = "";
        $split_str = explode(' ', $string_data);
        foreach($split_str as $ind =>$each_word)
        {
            for($i = strlen($each_word)-1; $i>=0; $i--)
            {
                $temp .= $each_word[$i];
            }
            if($ind<count($split_str)-1)
                $temp .= ' ';
        }
        return $temp;
    }
?>    