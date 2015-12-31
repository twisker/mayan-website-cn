<?php
$ini_array = parse_ini_file("webhook.ini");

if ($ini_array["secret"] == $_POST["secret"]) {
    exec("git pull");
    $hugo_command_line = sprintf("hugo --theme=mayan -s website -d %s", $ini_array['destination']);
    exec($hugo_command_line);
}
?>
