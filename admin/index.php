<?php
/* Datenbankserver - In der Regel die IP */
$db_server = 'localhost';
/* Datenbankname */
$db_name = 'counter';
/* Datenbankuser */
$db_user = 'root';
/* Datenbankpasswort */
$db_passwort = '';
         
/* Erstellt Connect zu Datenbank her */
$db = @ mysql_connect ( $db_server, $db_user, $db_passwort );

$db_select = @ mysql_select_db( $db_name );

$ret=mysql_query("SELECT * FROM counter");
if($arr=mysql_fetch_array($ret))
$download=$arr["count"];
else
$download="--Error--";

echo '<center><a href="report.html" target="ifrm">Main Log</a> | <a href="lv-crew.html" target="ifrm">Log lv-crew.org</a> | <a href="hostsmanager.html" target="ifrm">Log Hostsmanager</a></center><br>
<center>LV-Crew HostsManager Download Counter: '.$download.'</center><br>';
echo '<iframe width="100%" height="100%" name="ifrm">Admin Area</iframe>';

