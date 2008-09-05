<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd ">
<html>
<head>
<title>Piwik &rsaquo; Administration</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<script type="text/javascript" src="libs/jquery/jquery.js"></script>
<script type="text/javascript" src="libs/jquery/jquery.blockUI.js"></script>
<script type="text/javascript" src="themes/default/common.js"></script>
<script type="text/javascript" src="libs/jquery/thickbox.js"></script>
<script type="text/javascript" src="libs/javascript/sprintf.js"></script>
<link rel="stylesheet" type="text/css" href="libs/jquery/thickbox.css" />

<link rel="stylesheet" type="text/css" href="themes/default/common.css" />
<link rel="stylesheet" type="text/css" href="plugins/CoreAdminHome/templates/styles.css" />

{postEvent name="template_js_import"}
{postEvent name="template_css_import"}

{include file="CoreHome/templates/top_bar.tpl"}

<div id="header">
{include file="CoreHome/templates/header_message.tpl"}
{include file="CoreHome/templates/logo.tpl"}
{if $showPeriodSelection}{include file="CoreHome/templates/period_select.tpl"}{/if}
{include file="CoreHome/templates/js_disabled_notice.tpl"}
</div>

<br clear="all"/>

<script type="text/javascript">
var piwik_token_auth = "{$token_auth}";
</script>

<div id="content">