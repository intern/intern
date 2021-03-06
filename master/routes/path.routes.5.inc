<?php

$routes = array(
    "{$a}/{$b}/{$c}/{$d}/{$e}",
    //v1
    "{$a}/{$b}/{$c}/{$d}/%",
    "{$a}/{$b}/{$c}/%/{$e}",
    "{$a}/{$b}/%/{$d}/{$e}",
    "{$a}/%/{$c}/{$d}/{$e}",
    //v2
    "{$a}/{$b}/{$c}/%/%",
    "{$a}/{$b}/%/{$d}/%",
    "{$a}/%/{$c}/{$d}/%",
    "{$a}/{$b}/%/%/{$e}",
    "{$a}/%/{$c}/%/{$e}",
    "{$a}/%/%/{$d}/{$e}",
    //v3
    "{$a}/{$b}/%/%/%",
    "{$a}/%/{$c}/%/%",
    "{$a}/%/%/{$d}/%",
    //v4
    "{$a}/%/%/%/{$e}",
    "{$a}/%/%/%/%"
);
