create table cart (
    num int not null auto_increment,
    userid char(15) not null,
    img char(80),
    name char(30) not null,
    amount int,
    point int,
    price int,
    delivery int,
    primary key(num)
);
