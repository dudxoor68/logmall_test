create table board (
     num     int          auto_increment primary key,
     writer  varchar(20),
     title   varchar(60),
     content text,
     regtime varchar(20),
     hits    int
   );
