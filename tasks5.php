<?php
include "header.html";
$_POST["password"]= md5($_POST["password"]);
$login=$_POST["login"];
echo $_POST["login"]."<br>";
print_r($_POST);
?>
<form action="" method="post"> 
    login<input type="text" name="login" value="login">
    password<input type="password" name="password" value="password">
   
    Отправить<input type="submit">;
    </form>

<?php
$lab=isset($_GET["name"]) ? $_GET["name"]:1;
?>
 
  <br>
    <form action="phpcourse.php" method="get">
        <label for="lab">Вабрыть лабу:</label>
        <select name="l" id="lab">
            <option value="1">Lab1</option>
            <option value="2">Lab2</option>
            <option value="3">Lab3</option>
            <option value="4">Lab4</option>
        </select>
        <button type="submit">Submit</button>
    </form>
<?php
include "footer.html";
?>