<?php
$connect = mysql_connect("localhost", "admin_name", "IdontknoW!1"); if (!connect) { die('Connection Failed: ' . mysql_error()); { mysql_select_db("herd", $connect);
$user_info = "INSERT INTO contact (email) VALUES ('$_POST[email]')"; if (!mysql_query($user_info, $connect)) { die('Error: ' . mysql_error()); }
echo "Your information was added to the database.";
mysql_close($connect); ?>