<?php

function update_env($key, $value)
{
    $path = base_path('.env');

    if (file_exists($path)) {

        file_put_contents($path, str_replace(
            $key . '=' . env($key), $key . '=' . $value, file_get_contents($path)
        ));
    }
}
function update_smtp($key, $value)
{
    function update_env($key, $value)
{
    $path = base_path('.env');

    if (file_exists($path)) {

        file_put_contents($path, str_replace(
            $key . '=' . env($key), $key . '=' . $value, file_get_contents($path)
        ));
    }
}
}