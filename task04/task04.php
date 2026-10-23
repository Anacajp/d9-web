<?php
function whoami(): void {
  $name = trim($_POST["name"] ?? "");
  $age = filter_var($_POST["age"] ?? null, FILTER_VALIDATE_INT, ["options" => ["min_range" => 0]]);
  if ($name !== "" && $age !== false) echo "Hi, my name is $name and I'm $age years old.";
  elseif ($name !== "") echo "Hi, my name is $name.";
  elseif ($age !== false) echo "Hi, I have no name and I'm $age years old.";
  else echo "Hi, I have no name.";
}
?>
