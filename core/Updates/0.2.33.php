<?php
require_once "SitesManager/API.php";

// force regeneration of cache files as we add 'hosts' entry in it
Piwik::setUserIsSuperUser();
$allSiteIds = Piwik_SitesManager_API::getAllSitesId();
Piwik_Common::regenerateCacheWebsiteAttributes($allSiteIds);

