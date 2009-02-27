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

CREATE SEQUENCE idarchive_seq;
