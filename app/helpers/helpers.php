<?php
function is_active(string $routName){

    return null!==request()->segment(3)&& request()->segment(3) == $routName?'active':'';
}
