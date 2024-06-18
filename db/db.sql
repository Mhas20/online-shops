DROP DATABASE IF EXISTS online_shops;

CREATE DATABASE online_shops;

use online_shops;

CREATE TABLE User (
    u_id int auto_increment PRIMARY KEY,
    fname varchar(255),
    lname varchar(255),
    email varchar(255),
    password varchar(255),
    address varchar(255)
);

CREATE TABLE Products (
    p_id int auto_increment PRIMARY KEY,
    p_name varchar(255),
    details text,
    role varchar(10),
    price float,
    amount int
);

CREATE TABLE Bestellung (
    b_id int auto_increment PRIMARY KEY,
    date date,
    u_id int,
    p_id int,

    FOREIGN KEY (u_id) REFERENCES User(u_id),
    FOREIGN KEY (p_id) REFERENCES Products(p_id)
);
