CREATE TABLE `sample`.`item` (
    `id` BIGINT NOT NULL AUTO_INCREMENT COMMENT '編號',
    `name` VARCHAR(50) NOT NULL COMMENT '名稱',
    `price` INT NOT NULL COMMENT '價格',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;