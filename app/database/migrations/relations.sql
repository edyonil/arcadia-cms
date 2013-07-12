/**
 * SQL DUMP FOR THE RELATIONS
 * There is a bug in Migration that doesn't allow me to create the Relations via migrate 
 * I Know that this is not the best way, I will fix the problem I swear
 **/

ALTER TABLE  `users` ADD CONSTRAINT  `Users_BelongsTo_Role` FOREIGN KEY (  `role_id` ) REFERENCES  `boilerplate`.`roles` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `posts` ADD CONSTRAINT  `Posts_BelongsTo_User` FOREIGN KEY (  `user_id` ) REFERENCES  `boilerplate`.`users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE ;

ALTER TABLE  `comments` ADD CONSTRAINT  `Comments_BelongsTo_Post` FOREIGN KEY (  `post_id` ) REFERENCES  `boilerplate`.`posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE ;

ALTER TABLE  `comments` ADD CONSTRAINT  `Comments_BelongsTo_User` FOREIGN KEY (  `user_id` ) REFERENCES  `boilerplate`.`users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE ;