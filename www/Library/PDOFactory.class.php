<?php
namespace Library;
 
class PDOFactory
{
	public static function getMysqlConnexion()
	{
		$db = new \PDO('mysql:host=localhost;dbname=coaching', 'coaching', 'motdepasse');
		$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		//echo "COUCOU";
		return $db;
	}
}