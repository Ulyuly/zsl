<?php
function add($x, $y)
    {
        return $x+$y;
    }
function sub($x, $y)
    {
        return $x-$y;
    }
function multi($x, $y)
    {
        return $x*$y;
    }
function divide($x, $y)
    {
        if($y == 0)
        {
            return "Can't perform divison if the second number is 0";
        }
        return $x/$y;
    }
?>