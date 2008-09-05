<script type="text/javascript">
var period = "{$period}";
var currentDateStr = "{$date}";
var minDateYear = {$minDateYear};
var minDateMonth = {$minDateMonth};
var minDateDay = {$minDateDay};
</script>

{loadJavascriptTranslations plugins='CoreHome'}
<script type="text/javascript" src="libs/jquery/jquery-calendar.js"></script>
<script type="text/javascript" src="plugins/CoreHome/templates/calendar.js"></script>
<script type="text/javascript" src="plugins/CoreHome/templates/date.js"></script>
<link rel="stylesheet" type="text/css" href="libs/jquery/jquery-calendar.css" />

<span id="periodString">
	<span id="date"><img src='plugins/CoreHome/templates/images/more_date.gif' style="vertical-align:middle" alt="" /> {$prettyDate}</span> -&nbsp;
	<span id="periods"> 
		<span id="currentPeriod">{$periodsNames.$period}</span> 
		<span id="otherPeriods">
			{foreach from=$otherPeriods item=thisPeriod} | <a href='{url period=$thisPeriod}'>{$periodsNames.$thisPeriod}</a>{/foreach}
		</span>
	</span>
	<br/>
	<span id="calendar"></span>
</span>
<div style="clear:both"></div>
