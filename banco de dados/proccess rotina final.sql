SELECT ROUTINE_NAME FROM `information_schema`.`ROUTINES` WHERE ROUTINE_SCHEMA = 'avaliacao' AND ROUTINE_TYPE = 'PROCEDURE';
CREATE DEFINER=`root`@`localhost` PROCEDURE `HeidiSQL_temproutine_1`()
	LANGUAGE SQL
	NOT DETERMINISTIC
	CONTAINS SQL
	SQL SECURITY DEFINER
	COMMENT ''
BEGIN
	DECLARE a INT Default 0;
      simple_loop: LOOP         
         insert into proccess(id,codflow,proccess,description) values(null,null,'newRegister','newRegister');
         SET a=a+1;
         IF a=14 THEN
            LEAVE simple_loop;
         END IF;
END LOOP simple_loop;
end;
DROP PROCEDURE IF EXISTS `HeidiSQL_temproutine_1`;
DROP PROCEDURE IF EXISTS `new_proccess`;
CREATE DEFINER=`root`@`localhost` PROCEDURE `new_proccess`()
	LANGUAGE SQL
	NOT DETERMINISTIC
	CONTAINS SQL
	SQL SECURITY DEFINER
	COMMENT ''
BEGIN
	DECLARE a INT Default 0;
      simple_loop: LOOP         
         insert into proccess(id,codflow,proccess,description) values(null,null,'newRegister','newRegister');
         SET a=a+1;
         IF a=14 THEN
            LEAVE simple_loop;
         END IF;
END LOOP simple_loop;
end;
SELECT `DEFAULT_COLLATION_NAME` FROM `information_schema`.`SCHEMATA` WHERE `SCHEMA_NAME`='avaliacao';
SHOW TABLE STATUS FROM `avaliacao`;
SHOW FUNCTION STATUS WHERE `Db`='avaliacao';
SHOW PROCEDURE STATUS WHERE `Db`='avaliacao';
SHOW TRIGGERS FROM `avaliacao`;
SHOW EVENTS FROM `avaliacao`;
/* Entering session "Local" */