<?php

Piwik_Query('UPDATE '. Piwik::prefixTable('log_visit') .' SET location_ip=location_ip+2^32 WHERE location_ip < 0;');
Piwik_Query('ALTER TABLE '. Piwik::prefixTable('log_visit') .' ALTER COLUMN location_ip DROP NOT NULL;');

Piwik_Query('UPDATE '. Piwik::prefixTable('logger_api_call') .' SET caller_ip=caller_ip+2^32 WHERE caller_ip < 0;');
Piwik_Query('ALTER TABLE '. Piwik::prefixTable('logger_api_call') .' ALTER COLUMN caller_ip DROP NOT NULL;');

Piwik_Query( "ALTER TABLE ". Piwik::prefixTable('log_visit') . " DROP config_java" );
