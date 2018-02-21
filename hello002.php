<?php
/**
 * Created by PhpStorm.
 * User: funakimasanori
 * Date: 2018/02/22
 * Time: 5:17
 */

if ($_POST['user']) {
    print "Hello, ";
    print $_POST['user'];
    print "!";
} else {
    print <<<_HTML_
<form action="$_SERVER[PHP_SELF]" method="post">
Your Name: <input type="text" name="user">
<br>
<button type="submit">Say Hello</button>
</form>
_HTML_;
}
?>