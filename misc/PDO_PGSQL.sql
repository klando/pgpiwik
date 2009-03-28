-- createuser -S -D -R -P piwik_user # create postgresql user 
CREATE DATABASE piwik WITH TEMPLATE = template0 ENCODING = 'UTF8';
ALTER DATABASE piwik OWNER TO piwik_user;
\connect piwik_user

CREATE OR REPLACE FUNCTION hour(time with time zone) RETURNS integer AS '
 SELECT
 EXTRACT (HOUR FROM $1)::int4 AS result;
 ' LANGUAGE 'SQL';

CREATE OR REPLACE FUNCTION hour(timestamp with time zone) RETURNS integer AS '
 SELECT
 EXTRACT (HOUR FROM $1)::int4 AS result;
 ' LANGUAGE 'SQL';

CREATE OR REPLACE FUNCTION unix_timestamp(timestamp with time zone) RETURNS integer AS '
 SELECT
 ROUND(EXTRACT( EPOCH FROM ABSTIME($1) ))::int4 AS result;
 ' LANGUAGE 'SQL';

CREATE OR REPLACE FUNCTION "current_date"() RETURNS date AS '
 SELECT CURRENT_DATE AS result;
 ' LANGUAGE 'SQL';

CREATE OR REPLACE FUNCTION concat(text,text,text,text,text) RETURNS text AS '
SELECT $1 || $2 || $3 || $4 || $5 ;
 ' LANGUAGE 'SQL';

CREATE OR REPLACE FUNCTION concat(text,text,text,text) RETURNS text AS '
SELECT $1 || $2 || $3 || $4 ;
 ' LANGUAGE 'SQL';

CREATE OR REPLACE FUNCTION concat(text,text,text) RETURNS text AS '
SELECT $1 || $2 || $3 ;
 ' LANGUAGE 'SQL';

CREATE OR REPLACE FUNCTION concat(text,text) RETURNS text AS '
SELECT $1 || $2 ;
 ' LANGUAGE 'SQL';

CREATE SEQUENCE idarchive_seq;
