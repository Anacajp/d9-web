<?php
function form_is_submitted(): bool {
  return isset($_POST["submit"]);
}
function whoami(): void {
  $name = trim($_POST["name"] ?? "");
  $age = filter_var($_POST["age"] ?? null, FILTER_VALIDATE_INT, ["options" => ["min_range" => 0]]);
  if ($name !== "" && $age !== false) echo "Hi, my name is $name and I'm $age years old.";
  elseif ($name !== "") echo "Hi, my name is $name.";
  elseif ($age !== false) echo "Hi, I have no name and I'm $age years old.";
  else echo "Hi, I have no name.";
  $curriculum = $_POST["curriculum"] ?? "";
  $names = ["pge"=>"PGE", "bachelor"=>"Bachelor", "msc"=>"MSC Pro", "coding"=>"Coding Academy", "wac"=>"Web@cademie"];
  if (isset($names[$curriculum])) echo " I'm a student of " . $names[$curriculum] . ".";
}
?>
