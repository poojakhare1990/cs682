-- Setup for development machine
-- Create pizzadb, or recreate it
-- Create a user for it
drop database if exists formdb; -- only for your server
create database formdb; -- only for your own server

GRANT SELECT, INSERT, DELETE, UPDATE
ON formdb.*
TO form_user@localhost
IDENTIFIED BY 'pa55word';

