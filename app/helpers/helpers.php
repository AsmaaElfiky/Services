<?php
function is_active(string $routName){

    return null!==request()->segment(2)&& request()->segment(2) == $routName?'active':'';
}
