<?php
session_start();
$nameForm=isset($_GET["name"])?$_GET["name"] : "";
$_SESSION["name"] = $nameForm;
include "header.html";
?>
<body>
    <form>
        <input type="text" name="name">
        <input type="submit">
    </form>
</body>
<?php
include "footer.htmtl";
?>