<?php

class Executable {
	public static function EXECUTE_QUERY_GET_ID($classPDO, $query) {
		try {
			$classPDO->exec($query);
			return $classPDO->lastInsertId();
		} catch(PDOException $e) {
			print "Erro: ".$e->getMessage()."<br/>";
		}
	}
}
