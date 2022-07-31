SELECT `cocktails`.`id`, `cocktails`.`name` , `description`, `image`, `price`, `year`, `families`.`name` AS `family_name`
FROM `cocktails` 
JOIN `families` ON `cocktails`.`id_family` = `families`.`id`;