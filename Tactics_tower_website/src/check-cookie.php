<?php
function Vhash($value, $comparison): bool
{
    $value = hash('ripemd160', $value);
    if ($value == $comparison) {
        return true;
    }
    return false;
}
function informationAboutUser($id_user)
{
    $db = new PDO('sqlite:./db/Scriptio.db');
    $sql = "SELECT * FROM users WHERE id_user =" . $id_user;
    $stmt = $db->query($sql);
    $stmt->execute();
    return $stmt->fetch();
}
$cookie = htmlspecialchars($_COOKIE['session']);
$field = explode("-", $cookie);

$id_user = $field[0];
$id_user_hash = $field[1];
$last_connexion_hash = $field[2];
if (Vhash($id_user, $id_user_hash)) {
    // VERY Important to manage public interface
    $user = informationAboutUser($id_user);
} else {
    unset($_COOKIE['session']);
    setcookie('session', '', time() - 3600, '/');
}
?>