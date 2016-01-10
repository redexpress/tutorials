$my_server = "127.0.0.1";
$my_username = "root";
$my_password = "root";
$connect = mysql_connect($my_server, $my_username, $my_password);
if ($connect == false){
echo "Error: Connect to the '$my_server' with username '$my_username' failed!\n";
}
else{
echo "Info: Connect to the '$my_server' with username '$my_username' successfully!\n";
}