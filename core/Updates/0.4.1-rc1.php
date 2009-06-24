<?php

Piwik_Query('ALTER TABLE '. Piwik::prefixTable('log_conversion') .' 
				ALTER COLUMN idlink_va DROP NOT NULL;');
Piwik_Query('ALTER TABLE '. Piwik::prefixTable('log_conversion') .' 
				ALTER COLUMN idaction DROP NOT NULL;');
