<?php

function decapitalize($string, $upperRest = false)
{
    return lcfirst($upperRest ? strtoupper($string) : $string);
}
print_r(decapitalize('Python'));
