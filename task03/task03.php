<?php
require_once __DIR__ . "/../task02/task02.php";
function dynamic_body(): string {
  return render_body($_GET["page"] ?? "");
}
?>
