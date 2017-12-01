CREATE DEFINER=`root`@`localhost` PROCEDURE `list_proccess`()
	LANGUAGE SQL
	NOT DETERMINISTIC
	CONTAINS SQL
	SQL SECURITY DEFINER
	COMMENT ''
BEGIN
	select * from proccess;
END;
SELECT `DEFAULT_COLLATION_NAME` FROM `information_schema`.`SCHEMATA` WHERE `SCHEMA_NAME`='avaliacao';
SHOW TABLE STATUS FROM `avaliacao`;
SHOW FUNCTION STATUS WHERE `Db`='avaliacao';
SHOW PROCEDURE STATUS WHERE `Db`='avaliacao';
SHOW TRIGGERS FROM `avaliacao`;
SHOW EVENTS FROM `avaliacao`;
/* Entering session "Local" */