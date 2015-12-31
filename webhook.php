<?php
$ini_array = parse_ini_file("webhook.ini");

$hugo_command_line = sprintf("cd %s && %s --theme=mayan -s website -d %s", $ini_array["repository_path"], $ini_array["hugo_path"], $ini_array["destination"]);
$git_command_line = sprintf("cd %s && git pull", $ini_array["repository_path"]);

exec($git_command_line);
exec($hugo_command_line);
?>
