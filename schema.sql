CREATE DATABASE WebSite;

USE WebSite;

CREATE TABLE IF NOT EXISTS category (
  id int(11) NOT NULL auto_increment,     -- 流水號
  title varchar(100) NOT NULL,          -- 名稱
  subtitle varchar(200) default NULL,     -- 簡介
  img varchar(100) default NULL,      -- 圖片

  sort int(11) NOT NULL default '1',      -- 排序
  state varchar(1) NOT NULL default 'Y',   -- N-關閉,Y-開啟
  
  updt DATETIME NOT NULL,           -- 異動日期
  upur varchar(20) NOT NULL,          -- 異動user
  ctdt DATETIME NOT NULL,           -- 建立日期
  ctur varchar(20) NOT NULL,          -- 建立user
  PRIMARY KEY (id)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;




CREATE TABLE IF NOT EXISTS content (
  id int(11) NOT NULL auto_increment,     -- 流水號
  cat_id int(11) NOT NULL,            -- id(data_cat)
  
  title varchar(100) NOT NULL,        -- 網頁名稱
  subtitle varchar(200) NOT NULL,     -- 網頁簡介
  content text,               -- 網頁內容
  
  img varchar(100) default NULL,      -- web圖片
  
  sort int(11) NOT NULL default '1',      -- 排序
  state varchar(1) NOT NULL default 'Y',   -- N-關閉,Y-開啟
  
  updt DATETIME NOT NULL,           -- 異動日期
  upur varchar(20) NOT NULL,          -- 異動user
  ctdt DATETIME NOT NULL,           -- 建立日期
  ctur varchar(20) NOT NULL,          -- 建立user
  PRIMARY KEY (id)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE admin(
id int(11) not null   AUTO_INCREMENT,
name varchar(10),
account varchar(10),
password varchar(10),

PRIMARY KEY (account)
);