create table product (
    num int not null auto_increment,
    name char(30) not null,
    category1 char(20),
    category2 char(20),
    regist_day char(20),
    price int,
    sale int,
    origin char(20),
    img char(80),
    primary key(num)
);
