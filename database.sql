
-- 31_database_kymanh
create table IF NOT EXISTS  users(
    user_name varchar(100)  primary key not null,
    email varchar(100) UNIQUE not null,
    phone varchar(100) ,
    address varchar(150),
    pass_word varchar(100),
   	created_day varchar(100)
);

insert into users values('kyky','ky.le@gmail.com','0374448052','đà nẵng','123',now());
insert into users values('kyle','kyle@gmail.com','037444','đà nẵng','123',now());
insert into users values('hungmanh','manh@gmail.com','123123123','đà nẵng','123',now());
insert into users values('hungmanh123','manh123@gmail.com','123123123','đà nẵng','123',now());



create table IF NOT EXISTS  category(
    id int AUTO_INCREMENT primary key,
    name_category varchar(200) UNIQUE
);

insert into category values('','trà sữa');
insert into category values('','cà phê');
insert into category values('','ăn vặt');
insert into category values('','giải khát');



create table IF NOT EXISTS products(
    id int primary key AUTO_INCREMENT,
    id_category int,
    name_product varchar(100) UNIQUE,
    price_products float not null,
    image_products varchar(100),
    detail varchar(100),
    FOREIGN key (id_category) REFERENCES category(id)  
);
insert into products values('','1','trà sữa sôcôla','15000','images/douong11','Trà sữa nhà làm');
insert into products values('','1','trà sữa camen','30000','images/douong6','Trà sữa nhà làm');
insert into products values('','1','trà sữa menken','20000','images/douong20','Trà sữa nhà làm');
insert into products values('','1','trà sữa dâu','25000','images/douong16','Trà sữa nhà làm');


create table IF NOT EXISTS orders(
    id int primary key AUTO_INCREMENT,
    user_name varchar(100),
    payment varchar(100),
    created_order varchar(100),
    messages varchar(100),
    status_order varchar(100),
    FOREIGN key (user_name) REFERENCES users(user_name)
);
insert into orders values('','kyky','thanh toán khi nhận hàng',now(),'Nhớ bỏ thêm muỗng nhé!','request');
insert into orders values('','kyky','thanh toán khi nhận hàng',now(),'Nhớ bỏ thêm muỗng nhé!','request');
insert into orders values('','kyky','thanh toán khi nhận hàng',now(),'Nhớ bỏ thêm muỗng nhé!','request');
insert into orders values('','kyky','thanh toán khi nhận hàng',now(),'Nhớ bỏ thêm muỗng nhé!','request');


create table  IF NOT EXISTS comment(
    user_name varchar(100),
    id_products int,
    content varchar(500),
    comment_day varchar(100),
FOREIGN key (user_name) REFERENCES users(user_name),
FOREIGN key (id_products) REFERENCES products(id)
);

insert into comment values('kyky','1','Khá ngon nha mọi người',now());