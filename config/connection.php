<?php

class DB
{
    private $db;

    public function __construct()
    {
        if (file_exists( __DIR__ . '/db-local.php')) {
            $dbinfo = require_once __DIR__ . '/db-local.php';
        } else {
            $dbinfo = require_once __DIR__ . '/db.php';
        }
        $this->db = new PDO('mysql:host=' . $dbinfo['host'] . ';dbname=' . $dbinfo['dbname'], $dbinfo['login'], $dbinfo['password']);
    }

    public function query($sql, $params = [])
		{
			$stmt = $this->db->prepare($sql);
			
			if ( !empty($params) ) {
				foreach ($params as $key => $value) {
					$stmt->bindValue(":$key", $value);
				}
			}
			
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
}