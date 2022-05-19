<?php
$conn=mysqli_connect("localhost","root","");
if(!$conn)
	die("errore nella connessione");
echo "La connessione &egrave avvenuta regolarmente";
$query="CREATE DATABASE IF NOT EXISTS fornitori";
$result=mysqli_query($conn, $query);
if(!$result)
	die("Errore nella query $query".mysqli_error($conn));
echo "<br>Database creato correttamente";
$dbname="fornitori";
$db=mysqli_select_db($conn, $dbname);
if(!$db)
	die("database non selezionato correttamente");
echo "<br>Database selezionato correttamente";

$query2="CREATE TABLE IF NOT EXISTS aziende(partitaiva VARCHAR(11) PRIMARY KEY NOT NULL, ragionesociale VARCHAR(30), indirizzo VARCHAR(30), telefono VARCHAR(30), password VARCHAR(32))";
$result2=mysqli_query($conn, $query2);
if(!$result2)
	die("Errore nella query $query2".mysqli_error($conn));
echo "<br>Tabella creata correttamente";
