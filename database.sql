create table pr_brand(

	br_id int auto_increment primary key,
	br_name varchar(100)
);

create table pr_category(

	ca_id int auto_increment primary key,
	ca_name varchar(100)
);

--  999999.99
-- 2^32-1
create table pr_product(

	pro_id int auto_increment primary key,
	pro_name varchar(100),
	pro_price decimal(8,2),
	pro_discount tinyint,
	pro_cid int,
	pro_brid int,
	pro_desc longtext,
	pro_path text
);


insert into pr_product values ('','mens formal office wear',2000,30,1,2,'mens product from adidas','uploads/product1.jpg');
	
insert into pr_product values ('','mens formal tshirt',6500,50,1,1,'mens product from puma','uploads/product2.jpg');
insert into pr_product values ('','mens tshirt',1500,10,1,4,'mens product from nike','uploads/product3.jpg');
insert into pr_product values ('','womens kurta',8500,35,2,4,'womans traditional kurta','uploads/product5.jpg');
insert into pr_product values ('','womens casual wear',2500,15,2,1,'womans casual wear','uploads/product6.jpg');
insert into pr_product values ('','womens monsoon wear',4500,25,2,3,'womens monsoon wear from killer jeans','uploads/product7.jpg');
insert into pr_product values ('','kids shoes',1200,5,3,1,'kids formal shoes','uploads/product10.jpg');
insert into pr_product values ('','kids tshirt',7500,15,3,1,'kids tshirt','uploads/product11.jpg');

create table pr_login(

	user_id int auto_increment primary key,
	user_name varchar(100),
	user_mobile bigint,
	user_email varchar(100),
	user_password varchar(100)
);	