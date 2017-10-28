<?php

function emptyString($arr)
{
    for ($i=0; $i < sizeof($arr); $i++) {
        if ($arr[$i] === "" || $arr[$i] === null) {
            return 1;
        }
    }

    return 0;
}
