<?php 
$translations = array(
	'General_Locale' => 'pl_PL.UTF-8',
	'General_TranslatorName' => 'Piwik team',
	'General_TranslatorEmail' => 'hello@piwik.org',
	'General_EnglishLanguageName' => 'Polish',
	'General_OriginalLanguageName' => 'Polski',
	'General_Unknown' => 'Nieznany',
	'General_Required' => '%s wymagany',
	'General_Error' => 'Błąd',
	'General_Warning' => 'Ostrzeżenie',
	'General_BackToHomepage' => 'Porwót do Piwik homepage',
	'General_Yes' => 'Tak',
	'General_No' => 'Nie',
	'General_Delete' => 'Usuń',
	'General_Edit' => 'Edycja',
	'General_Ok' => 'Ok',
	'General_Close' => 'Zamknij',
	'General_Logout' => 'Wyloguj',
	'General_Done' => 'Gotowe',
	'General_LoadingData' => 'Wczytywanie danych...',
	'General_ErrorRequest' => 'Oops&hellip; problem podczas żądania, spróbuj ponownie.',
	'General_Next' => 'Następny',
	'General_Previous' => 'Poprzedni',
	'General_Search' => 'Szukaj',
	'General_Others' => 'Inne',
	'General_Table' => 'Tabela',
	'General_Piechart' => 'Wykres kołowy',
	'General_TagCloud' => 'Chmurka tagów',
	'General_VBarGraph' => 'Poziomy wykres słupkowy',
	'General_GraphData' => 'Wykres danych',
	'General_Refresh' => 'Odśwież stronę',
	'General_ColumnNbUniqVisitors' => 'Unikalni użytkownicy',
	'General_ColumnNbVisits' => 'Wizyty',
	'General_ColumnLabel' => 'Etykiety',
	'General_Save' => 'Zapisz',
	'General_NoDataForGraph' => 'Brak danych dla wykresu',
	'CorePluginsAdmin_Plugins' => 'Wtyczki',
	'CorePluginsAdmin_Activated' => 'Aktywny',
	'CorePluginsAdmin_ActivatedHelp' => 'Ta wtyczka nie może być zdeaktywowana',
	'CorePluginsAdmin_Deactivate' => 'Deaktywuj',
	'CorePluginsAdmin_Activate' => 'Aktywuj',
	'CorePluginsAdmin_MenuPlugins' => 'Wtyczka',
	'API_QuickDocumentation' => '<h2>API szybka dokumentacja</h2><p>Jeżeli wciąż nie masz dzisiejszych danych możesz <a href=\'misc/generateVisits.php\' target=_blank>wygenerować pierwsze dane</a> używając skryptu generatora wizyt.</p><p>Możesz wypróbować różne formaty dla dostępnych metod. Bardzo łatwo można pobrać dane które potrzebujesz!</p><p><b>Więcej informacji możesz znaleźć na <a href=\'http://dev.piwik.org/trac/wiki/API\'>Oficjalna dokumentacja API</a> albo <a href=\'http://dev.piwik.org/trac/wiki/API/Reference\'>API odnośniki</a>.</b></P><h2>Autentyfikacja użytkownika</h2><p>Jeżeli chcesz umieścić <b>żądania danych twoich skryptów w crontab, etc. </b> musisz dodać parametr<code><u>&token_auth=%s</u></code> do wywołań URLi w API URLs - wymagana autoryzacja.</p><p>Ten token_auth jest tajny tak jak twoje hasło i nazwa użytkownika <b>nie ujawniaj go!</p>',
	'API_LoadedAPIs' => 'Wczytywanie zakończone poprawnie %s APIs',
	'CoreHome_NoPrivileges' => 'You are logged in as \'%s\' but it seems you don\'t have any permission set in Piwik.<br />Ask your Piwik administrator to give you \'view\' access to a website.',
	'CoreHome_JavascriptDisabled' => 'JavaScript must be enabled in order for you to use Piwik in standard view.<br>However, it seems JavaScript is either disabled or not supported by your browser.<br>To use standard view, enable JavaScript by changing your browser options, then %1stry again%2s.<br>',
	'CoreHome_TableNoData' => 'Brak danych dla tabeli.',
	'CoreHome_CategoryNoData' => 'Brak danych w tej kategorii. Spróbuj użyć "Włącznie cała populacja".',
	'CoreHome_ShowJSCode' => 'Pokaż kod javascript do wklejenia',
	'CoreHome_IncludeAllPopulation_js' => 'Włącznie cała populacja',
	'CoreHome_ExcludeLowPopulation_js' => 'Wyłączając małą populację',
	'CoreHome_PageOf_js' => '%s z %s',
	'CoreHome_Loading_js' => 'Wczytywanie...',
	'CoreHome_LocalizedDateFormat' => '%A %e %B %Y',
	'CoreHome_PeriodDay' => 'Dzień',
	'CoreHome_PeriodWeek' => 'Tydzień',
	'CoreHome_PeriodMonth' => 'Miesiąc',
	'CoreHome_PeriodYear' => 'Rok',
	'CoreHome_DaySu_js' => 'Nie',
	'CoreHome_DayMo_js' => 'Pon',
	'CoreHome_DayTu_js' => 'Wto',
	'CoreHome_DayWe_js' => 'śro',
	'CoreHome_DayTh_js' => 'Czw',
	'CoreHome_DayFr_js' => 'Pią',
	'CoreHome_DaySa_js' => 'Sob',
	'CoreHome_MonthJanuary_js' => 'Styczeń',
	'CoreHome_MonthFebruary_js' => 'Luty',
	'CoreHome_MonthMarch_js' => 'Marzec',
	'CoreHome_MonthApril_js' => 'Kwiecień',
	'CoreHome_MonthMay_js' => 'Maj',
	'CoreHome_MonthJune_js' => 'Czerwiec',
	'CoreHome_MonthJuly_js' => 'Lipiec',
	'CoreHome_MonthAugust_js' => 'Sierpień',
	'CoreHome_MonthSeptember_js' => 'Wrzesień',
	'CoreHome_MonthOctober_js' => 'Październik',
	'CoreHome_MonthNovember_js' => 'Listopad',
	'CoreHome_MonthDecemeber_js' => 'Grudzień',
	'Actions_SubmenuPages' => 'Strony',
	'Actions_SubmenuOutlinks' => 'Zewnętrzne linki',
	'Actions_SubmenuDownloads' => 'Downloads',
	'Dashboard_AddWidget' => 'Dodaj jako widget...',
	'Dashboard_DeleteWidgetConfirm' => 'Czy napewno chcesz skasować widget z panelu',
	'Dashboard_SelectWidget' => 'Wybierz widget by dodać do panelu',
	'Dashboard_AddPreviewedWidget' => 'Dodaj przeglądnięte widget\'y do panelu',
	'Dashboard_WidgetPreview' => 'Widget podgląd',
	'Dashboard_TitleWidgetInDashboard_js' => 'Widget jest już dostępny na panelu',
	'Dashboard_TitleClickToAdd_js' => 'Kliknij by dodać do panelu',
	'Dashboard_LoadingPreview_js' => 'Wczytywanie podglądu, proszę czekać...',
	'Dashboard_LoadingWidget_js' => 'Wczytywanie widget\'u, proszę czekać...',
	'Dashboard_WidgetNotFound_js' => 'Widget nieznaleziony',
	'Referers_SearchEngines' => 'Wyszukiwarki',
	'Referers_Keywords' => 'Słowa kluczowe',
	'Referers_DirectEntry' => 'Bezpośrednie wywołania',
	'Referers_Websites' => 'Strony',
	'Referers_Partners' => 'Partnerzy',
	'Referers_Newsletters' => 'Newsletters',
	'Referers_Campaigns' => 'Kampanie',
	'Referers_Evolution' => 'Rozwój cyklu',
	'Referers_Type' => 'Rodzaj odnośnika',
	'Referers_TypeDirectEntries' => '%s bezpośrednich wejść',
	'Referers_TypeSearchEngines' => '%s z wyszukiwarek',
	'Referers_TypePartners' => '%s od partnerów',
	'Referers_TypeWebsites' => '%s ze stron',
	'Referers_TypeNewsletters' => '%s z newsletter\'ów',
	'Referers_TypeCampaigns' => '%s z kampanii',
	'Referers_Other' => 'Inne',
	'Referers_OtherDistinctSearchEngines' => '%s niepowtarzalne wyszukiwarki',
	'Referers_OtherDistinctKeywords' => '%s niepowtarzalne słowa kluczowe',
	'Referers_OtherDistinctWebsites' => '%1s niepowtarzalne strony (używające %2s niepowtarzalnych url\'i)',
	'Referers_OtherDistinctPartners' => '%1s niepowtarzalnych partnerów (używających  %2s niepowtarzalnych url\'i)',
	'Referers_OtherDistinctCampaigns' => '%s niepowtarzalne kampanie',
	'Referers_TagCloud' => 'Wynik chmurki tag\'ów',
	'Referers_SubmenuEvolution' => 'Rozwój',
	'Referers_SubmenuSearchEngines' => 'Wyszukiwarki i słowa kluczowe',
	'Referers_SubmenuWebsites' => 'Strony',
	'Referers_SubmenuCampaigns' => 'Kampanie',
	'Referers_SubmenuPartners' => 'Partnerzy',
	'Referers_WidgetKeywords' => 'Lista słów kluczowych',
	'Referers_WidgetPartners' => 'Lista partnerów',
	'Referers_WidgetCampaigns' => 'Lista kampanii',
	'Referers_WidgetExternalWebsites' => 'Lista zewnętrznych stron',
	'Referers_WidgetSearchEngines' => 'Najpopularniejsze wyszukiwarki',
	'Referers_WidgetOverview' => 'Przegląd',
	'UserSettings_BrowserFamilies' => 'Rodzina przeglądarek',
	'UserSettings_Browsers' => 'Przeglądarki',
	'UserSettings_Plugins' => 'Plugin\'y',
	'UserSettings_Configurations' => 'Konfiguracja',
	'UserSettings_OperatinsSystems' => 'Systemy operacyjne',
	'UserSettings_Resolutions' => 'Rozdzielczość',
	'UserSettings_WideScreen' => 'Ekran panoramiczny',
	'UserSettings_WidgetResolutions' => 'Rozdzielczość ekrany',
	'UserSettings_WidgetBrowsers' => 'Przeglądarki gości',
	'UserSettings_WidgetPlugins' => 'List of Plugins',
	'UserSettings_WidgetWidescreen' => 'Standartowe / Panoramiczne',
	'UserSettings_WidgetBrowserFamilies' => 'Przeglądarki na rodziny',
	'UserSettings_WidgetOperatingSystems' => 'Systemy operacyjne',
	'UserSettings_WidgetGlobalVisitors' => 'Konfiguracja główna wizyt',
	'UserSettings_SubmenuSettings' => 'Ustawienia',
	'UserCountry_Country' => 'Kraj',
	'UserCountry_Continent' => 'kontynent',
	'UserCountry_DistinctCountries' => '%s unikalnych krajów',
	'UserCountry_SubmenuLocations' => 'lokacje',
	'UserCountry_WidgetContinents' => 'Kontynenty gości',
	'UserCountry_WidgetCountries' => 'kraje gości',
	'UserCountry_country_ac' => 'Ascension Islands',
	'UserCountry_country_ad' => 'Andorra',
	'UserCountry_country_ae' => 'United Arab Emirates',
	'UserCountry_country_af' => 'Afghanistan',
	'UserCountry_country_ag' => 'Antigua and Barbuda',
	'UserCountry_country_ai' => 'Anguilla',
	'UserCountry_country_al' => 'Albania',
	'UserCountry_country_am' => 'Armenia',
	'UserCountry_country_an' => 'Netherlands Antilles',
	'UserCountry_country_ao' => 'Angola',
	'UserCountry_country_aq' => 'Antarctica',
	'UserCountry_country_ar' => 'Argentina',
	'UserCountry_country_as' => 'American Samoa',
	'UserCountry_country_at' => 'Austria',
	'UserCountry_country_au' => 'Australia',
	'UserCountry_country_aw' => 'Aruba',
	'UserCountry_country_az' => 'Azerbaijan',
	'UserCountry_country_ba' => 'Bosnia and Herzegovina',
	'UserCountry_country_bb' => 'Barbados',
	'UserCountry_country_bd' => 'Bangladesh',
	'UserCountry_country_be' => 'Belgium',
	'UserCountry_country_bf' => 'Burkina Faso',
	'UserCountry_country_bg' => 'Bulgaria',
	'UserCountry_country_bh' => 'Bahrain',
	'UserCountry_country_bi' => 'Burundi',
	'UserCountry_country_bj' => 'Benin',
	'UserCountry_country_bm' => 'Bermuda',
	'UserCountry_country_bn' => 'Bruneo',
	'UserCountry_country_bo' => 'Bolivia',
	'UserCountry_country_br' => 'Brazil',
	'UserCountry_country_bs' => 'Bahamas',
	'UserCountry_country_bt' => 'Bhutan',
	'UserCountry_country_bv' => 'Bouvet Island',
	'UserCountry_country_bw' => 'Botswana',
	'UserCountry_country_by' => 'Belarus',
	'UserCountry_country_bz' => 'Belize',
	'UserCountry_country_ca' => 'Canada',
	'UserCountry_country_cc' => 'Cocos (Keeling) Islands',
	'UserCountry_country_cd' => 'Congo, The Democratic Republic of the',
	'UserCountry_country_cf' => 'Central African Republic',
	'UserCountry_country_cg' => 'Congo',
	'UserCountry_country_ch' => 'Switzerland',
	'UserCountry_country_ci' => 'Cote D\'Ivoire',
	'UserCountry_country_ck' => 'Cook Islands',
	'UserCountry_country_cl' => 'Chile',
	'UserCountry_country_cm' => 'Cameroon',
	'UserCountry_country_cn' => 'China',
	'UserCountry_country_co' => 'Colombia',
	'UserCountry_country_cr' => 'Costa Rica',
	'UserCountry_country_cs' => 'Serbia Montenegro',
	'UserCountry_country_cu' => 'Cuba',
	'UserCountry_country_cv' => 'Cape Verde',
	'UserCountry_country_cx' => 'Christmas Island',
	'UserCountry_country_cy' => 'Cyprus',
	'UserCountry_country_cz' => 'Czech Republic',
	'UserCountry_country_de' => 'Germany',
	'UserCountry_country_dj' => 'Djibouti',
	'UserCountry_country_dk' => 'Denmark',
	'UserCountry_country_dm' => 'Dominica',
	'UserCountry_country_do' => 'Dominican Republic',
	'UserCountry_country_dz' => 'Algeria',
	'UserCountry_country_ec' => 'Ecuador',
	'UserCountry_country_ee' => 'Estonia',
	'UserCountry_country_eg' => 'Egypt',
	'UserCountry_country_eh' => 'Western Sahara',
	'UserCountry_country_er' => 'Eritrea',
	'UserCountry_country_es' => 'Spain',
	'UserCountry_country_et' => 'Ethiopia',
	'UserCountry_country_fi' => 'Finland',
	'UserCountry_country_fj' => 'Fiji',
	'UserCountry_country_fk' => 'Falkland Islands (Malvinas)',
	'UserCountry_country_fm' => 'Micronesia, Federated States of',
	'UserCountry_country_fo' => 'Faroe Islands',
	'UserCountry_country_fr' => 'France',
	'UserCountry_country_ga' => 'Gabon',
	'UserCountry_country_gd' => 'Grenada',
	'UserCountry_country_ge' => 'Georgia',
	'UserCountry_country_gf' => 'French Guyana',
	'UserCountry_country_gg' => 'Guernsey',
	'UserCountry_country_gh' => 'Ghana',
	'UserCountry_country_gi' => 'Gibraltar',
	'UserCountry_country_gl' => 'Greenland',
	'UserCountry_country_gm' => 'Gambia',
	'UserCountry_country_gn' => 'Guinea',
	'UserCountry_country_gp' => 'Guadeloupe',
	'UserCountry_country_gq' => 'Equatorial Guinea',
	'UserCountry_country_gr' => 'Greece',
	'UserCountry_country_gs' => 'South Georgia and the South Sandwich Islands',
	'UserCountry_country_gt' => 'Guatemala',
	'UserCountry_country_gu' => 'Guam',
	'UserCountry_country_gw' => 'Guinea-Bissau',
	'UserCountry_country_gy' => 'Guyana',
	'UserCountry_country_hk' => 'Hong Kong',
	'UserCountry_country_hm' => 'Heard Island and McDonald Islands',
	'UserCountry_country_hn' => 'Honduras',
	'UserCountry_country_hr' => 'Croatia',
	'UserCountry_country_ht' => 'Haiti',
	'UserCountry_country_hu' => 'Hungary',
	'UserCountry_country_id' => 'Indonesia',
	'UserCountry_country_ie' => 'Ireland',
	'UserCountry_country_il' => 'Israel',
	'UserCountry_country_im' => 'Man Island',
	'UserCountry_country_in' => 'India',
	'UserCountry_country_io' => 'British Indian Ocean Territory',
	'UserCountry_country_iq' => 'Iraq',
	'UserCountry_country_ir' => 'Iran, Islamic Republic of',
	'UserCountry_country_is' => 'Iceland',
	'UserCountry_country_it' => 'Italy',
	'UserCountry_country_je' => 'Jersey',
	'UserCountry_country_jm' => 'Jamaica',
	'UserCountry_country_jo' => 'Jordan',
	'UserCountry_country_jp' => 'Japan',
	'UserCountry_country_ke' => 'Kenya',
	'UserCountry_country_kg' => 'Kyrgyzstan',
	'UserCountry_country_kh' => 'Cambodia',
	'UserCountry_country_ki' => 'Kiribati',
	'UserCountry_country_km' => 'Comoros',
	'UserCountry_country_kn' => 'Saint Kitts and Nevis',
	'UserCountry_country_kp' => 'Korea, Democratic People\'s Republic of',
	'UserCountry_country_kr' => 'Korea, Republic of',
	'UserCountry_country_kw' => 'Kuwait',
	'UserCountry_country_ky' => 'Cayman Islands',
	'UserCountry_country_kz' => 'Kazakhstan',
	'UserCountry_country_la' => 'Laos',
	'UserCountry_country_lb' => 'Lebanon',
	'UserCountry_country_lc' => 'Saint Lucia',
	'UserCountry_country_li' => 'Liechtenstein',
	'UserCountry_country_lk' => 'Sri Lanka',
	'UserCountry_country_lr' => 'Liberia',
	'UserCountry_country_ls' => 'Lesotho',
	'UserCountry_country_lt' => 'Lithuania',
	'UserCountry_country_lu' => 'Luxembourg',
	'UserCountry_country_lv' => 'Latvia',
	'UserCountry_country_ly' => 'Libya',
	'UserCountry_country_ma' => 'Morocco',
	'UserCountry_country_mc' => 'Monaco',
	'UserCountry_country_md' => 'Moldova, Republic of',
	'UserCountry_country_mg' => 'Madagascar',
	'UserCountry_country_mh' => 'Marshall Islands',
	'UserCountry_country_mk' => 'Macedonia',
	'UserCountry_country_ml' => 'Mali',
	'UserCountry_country_mm' => 'Myanmar',
	'UserCountry_country_mn' => 'Mongolia',
	'UserCountry_country_mo' => 'Macau',
	'UserCountry_country_mp' => 'Northern Mariana Islands',
	'UserCountry_country_mq' => 'Martinique',
	'UserCountry_country_mr' => 'Mauritania',
	'UserCountry_country_ms' => 'Montserrat',
	'UserCountry_country_mt' => 'Malta',
	'UserCountry_country_mu' => 'Mauritius',
	'UserCountry_country_mv' => 'Maldives',
	'UserCountry_country_mw' => 'Malawi',
	'UserCountry_country_mx' => 'Mexico',
	'UserCountry_country_my' => 'Malaysia',
	'UserCountry_country_mz' => 'Mozambique',
	'UserCountry_country_na' => 'Namibia',
	'UserCountry_country_nc' => 'New Caledonia',
	'UserCountry_country_ne' => 'Niger',
	'UserCountry_country_nf' => 'Norfolk Island',
	'UserCountry_country_ng' => 'Nigeria',
	'UserCountry_country_ni' => 'Nicaragua',
	'UserCountry_country_nl' => 'Netherlands',
	'UserCountry_country_no' => 'Norway',
	'UserCountry_country_np' => 'Nepal',
	'UserCountry_country_nr' => 'Nauru',
	'UserCountry_country_nu' => 'Niue',
	'UserCountry_country_nz' => 'New Zealand',
	'UserCountry_country_om' => 'Oman',
	'UserCountry_country_pa' => 'Panama',
	'UserCountry_country_pe' => 'Peru',
	'UserCountry_country_pf' => 'French Polynesia',
	'UserCountry_country_pg' => 'Papua New Guinea',
	'UserCountry_country_ph' => 'Philippines',
	'UserCountry_country_pk' => 'Pakistan',
	'UserCountry_country_pl' => 'Poland',
	'UserCountry_country_pm' => 'Saint Pierre and Miquelon',
	'UserCountry_country_pn' => 'Pitcairn',
	'UserCountry_country_pr' => 'Puerto Rico',
	'UserCountry_country_ps' => 'Palestinian Territory',
	'UserCountry_country_pt' => 'Portugal',
	'UserCountry_country_pw' => 'Palau',
	'UserCountry_country_py' => 'Paraguay',
	'UserCountry_country_qa' => 'Qatar',
	'UserCountry_country_re' => 'Reunion Island',
	'UserCountry_country_ro' => 'Romania',
	'UserCountry_country_ru' => 'Russian Federation',
	'UserCountry_country_rs' => 'Russia',
	'UserCountry_country_rw' => 'Rwanda',
	'UserCountry_country_sa' => 'Saudi Arabia',
	'UserCountry_country_sb' => 'Solomon Islands',
	'UserCountry_country_sc' => 'Seychelles',
	'UserCountry_country_sd' => 'Sudan',
	'UserCountry_country_se' => 'Sweden',
	'UserCountry_country_sg' => 'Singapore',
	'UserCountry_country_sh' => 'Saint Helena',
	'UserCountry_country_si' => 'Slovenia',
	'UserCountry_country_sj' => 'Svalbard',
	'UserCountry_country_sk' => 'Slovakia',
	'UserCountry_country_sl' => 'Sierra Leone',
	'UserCountry_country_sm' => 'San Marino',
	'UserCountry_country_sn' => 'Senegal',
	'UserCountry_country_so' => 'Somalia',
	'UserCountry_country_sr' => 'Suriname',
	'UserCountry_country_st' => 'Sao Tome and Principe',
	'UserCountry_country_su' => 'Old U.S.S.R',
	'UserCountry_country_sv' => 'El Salvador',
	'UserCountry_country_sy' => 'Syrian Arab Republic',
	'UserCountry_country_sz' => 'Swaziland',
	'UserCountry_country_tc' => 'Turks and Caicos Islands',
	'UserCountry_country_td' => 'Chad',
	'UserCountry_country_tf' => 'French Southern Territories',
	'UserCountry_country_tg' => 'Togo',
	'UserCountry_country_th' => 'Thailand',
	'UserCountry_country_tj' => 'Tajikistan',
	'UserCountry_country_tk' => 'Tokelau',
	'UserCountry_country_tm' => 'Turkmenistan',
	'UserCountry_country_tn' => 'Tunisia',
	'UserCountry_country_to' => 'Tonga',
	'UserCountry_country_tp' => 'East Timor',
	'UserCountry_country_tr' => 'Turkey',
	'UserCountry_country_tt' => 'Trinidad and Tobago',
	'UserCountry_country_tv' => 'Tuvalu',
	'UserCountry_country_tw' => 'Taiwan',
	'UserCountry_country_tz' => 'Tanzania, United Republic of',
	'UserCountry_country_ua' => 'Ukraine',
	'UserCountry_country_ug' => 'Uganda',
	'UserCountry_country_uk' => 'United Kingdom',
	'UserCountry_country_gb' => 'Great Britain',
	'UserCountry_country_um' => 'United States Minor Outlying Islands',
	'UserCountry_country_us' => 'United States',
	'UserCountry_country_uy' => 'Uruguay',
	'UserCountry_country_uz' => 'Uzbekistan',
	'UserCountry_country_va' => 'Vatican City',
	'UserCountry_country_vc' => 'Saint Vincent and the Grenadines',
	'UserCountry_country_ve' => 'Venezuela',
	'UserCountry_country_vg' => 'Virgin Islands, British',
	'UserCountry_country_vi' => 'Virgin Islands, U.S.',
	'UserCountry_country_vn' => 'Vietnam',
	'UserCountry_country_vu' => 'Vanuatu',
	'UserCountry_country_wf' => 'Wallis and Futuna',
	'UserCountry_country_ws' => 'Samoa',
	'UserCountry_country_ye' => 'Yemen',
	'UserCountry_country_yt' => 'Mayotte',
	'UserCountry_country_yu' => 'Yugoslavia',
	'UserCountry_country_za' => 'South Africa',
	'UserCountry_country_zm' => 'Zambia',
	'UserCountry_country_zr' => 'Zaire',
	'UserCountry_country_zw' => 'Zimbabwe',
	'UserCountry_continent_eur' => 'Europa',
	'UserCountry_continent_afr' => 'Afryka',
	'UserCountry_continent_asi' => 'Azja',
	'UserCountry_continent_ams' => 'Południowa i środkowa Ameryka',
	'UserCountry_continent_amn' => 'Północna Ameryka',
	'UserCountry_continent_oce' => 'Oceania',
	'VisitsSummary_NbVisits' => '%s wizyt',
	'VisitsSummary_NbUniqueVisitors' => '%s unikalnych gości',
	'VisitsSummary_NbActions' => '%s akcje (odsłony strony)',
	'VisitsSummary_TotalTime' => '%s całkowity czas spędzony na stronie',
	'VisitsSummary_MaxNbActions' => '%s maksymalne akcje podczas jednej wizyty',
	'VisitsSummary_NbBounced' => '%s goście odrzucający (opuścili stronę po obejrzeniu jednej strony)',
	'VisitsSummary_Evolution' => 'Postęp ostatnich 30 %ss',
	'VisitsSummary_Report' => 'Raport',
	'VisitsSummary_GenerateTime' => '%s sekund wygenerowania strony',
	'VisitsSummary_GenerateQueries' => '%s wykonanych zapytań',
	'VisitsSummary_WidgetLastVisits' => 'Wykres ostatnich wizyty',
	'VisitsSummary_WidgetVisits' => 'przegląd wizyt',
	'VisitsSummary_WidgetLastVisitors' => 'Wykres ostatnich unikalnych gości',
	'VisitsSummary_WidgetOverviewGraph' => 'Wykres z przeglądem',
	'VisitsSummary_SubmenuOverview' => 'Przegląd',
	'VisitFrequency_Evolution' => 'Rozwój na cykl',
	'VisitFrequency_ReturnVisits' => '%s wizyt ponownych',
	'VisitFrequency_ReturnActions' => '%s akcji przy ponownych wizytach',
	'VisitFrequency_ReturnMaxActions' => '%s maksymalnych akcji przy ponownych wizytach',
	'VisitFrequency_ReturnTotalTime' => '%s całkowity czas spędzony przy ponownych wizytach',
	'VisitFrequency_ReturnBounces' => '%s czasy ponownych odrzuconych wizyt (wyjścia ze strony po obejrzeniu jednej strony)',
	'VisitFrequency_WidgetOverview' => 'Częstotliwość przeglądu',
	'VisitFrequency_WidgetGraphReturning' => 'Wykres ponownych wizyt',
	'VisitFrequency_SubmenuFrequency' => 'częstotliwość',
	'VisitTime_LocalTime' => 'Wizyt czasu lokalnego',
	'VisitTime_ServerTime' => 'Wizyt czasu serwera',
	'VisitTime_WidgetLocalTime' => 'Wizyty czasu lokalnego',
	'VisitTime_WidgetServerTime' => 'Wizyty czasu serwera',
	'VisitTime_SubmenuTimes' => 'Czasy',
	'VisitorInterest_VisitsPerDuration' => 'Wizyt na czas wizyty',
	'VisitorInterest_VisitsPerNbOfPages' => 'Wizyt na ilość stron',
	'VisitorInterest_WidgetLengths' => 'Długość wizyty',
	'VisitorInterest_WidgetPages' => 'Strion na wizytę',
	'VisitorInterest_SubmenuFrequencyLoyalty' => 'Częstotliwość i lojalność',
	'VisitorInterest_PlusXMin' => '%s min',
	'VisitorInterest_BetweenXYMinutes' => '%1s-%2s min',
	'VisitorInterest_OnePage' => '1 strona',
	'VisitorInterest_NPages' => '%s stron',
	'VisitorInterest_BetweenXYSeconds' => '%1s-%2ss',
	'Login_LoginPasswordNotCorrect' => 'Nazwa użytkownika i hasło niepoprawne',
	'Login_Login' => 'Nazwa użytkownika',
	'Login_Password' => 'Hasło',
	'Login_LoginOrEmail' => 'Nazwa użytkownika albo email',
	'Login_LogIn' => 'Zaloguj',
	'Login_Logout' => 'Wyloguj',
	'Login_LostYourPassword' => 'Zapomniałeś hasło?',
	'Login_RemindPassword' => 'Przypomnij hasło',
	'Login_PasswordReminder' => 'Wprowadź nazwę użytkownika albo adres email. Otrzymasz nowe email z nowym hasłem.',
	'Login_InvalidUsernameEmail' => 'Nieprawidłowa nazwa użytkownika i/lub adress e-mail',
	'Login_MailTopicPasswordRecovery' => 'Odzyskiwanie hasła',
	'Login_MailPasswordRecoveryBody' => 'Witka %1s, \n\n Twoje nowe hasło to: %2s \n\n Możesz się teraz zalogować: %3s',
	'Login_PasswordSent' => 'Hasło zostało wysłane - sprawdź email.',
	'Login_ContactAdmin' => 'Możliwości: Twój host może może mieć zablokowaną funkcję mail(). <br>Skontakuj się z administratorem Piwik\'a.',
	'UsersManager_ManageAccess' => 'Zarządzaj dostępem',
	'UsersManager_Sites' => 'Strony',
	'UsersManager_AllWebsites' => 'Wszystkie strony',
	'UsersManager_ApplyToAllWebsites' => 'Zastosuj do wszystkich stron',
	'UsersManager_User' => 'Użytkownik',
	'UsersManager_PrivNone' => 'Brak dostępu',
	'UsersManager_PrivView' => 'Widok',
	'UsersManager_PrivAdmin' => 'Admin',
	'UsersManager_ChangeAllConfirm' => 'Czy jesteś pewien że chcesz zmienić \'%s\' prawa na wszystkich stronach?',
	'UsersManager_Login' => 'Nazwa użytkownika',
	'UsersManager_Password' => 'Hasło',
	'UsersManager_Email' => 'Email',
	'UsersManager_Alias' => 'Alias',
	'UsersManager_Token' => 'token_auth',
	'UsersManager_Edit' => 'Edycja',
	'UsersManager_AddUser' => 'Dodaj nowego użytkownika',
	'UsersManager_MenuUsers' => 'Użytkownicy',
	'UsersManager_DeleteConfirm_js' => 'Czy jesteś pewien czy chcesz skasować użytkownika %s?',
	'UsersManager_ExceptionLoginExists' => 'Nazwa użytkownika \'%s\' już istnieje.',
	'UsersManager_ExceptionEmailExists' => 'Użytkownik z emailem  \'%s\' już istnieje.',
	'UsersManager_ExceptionInvalidLogin' => 'Nazwa użytkownika może zawierać tylko litery, cyfry i znaki \'_\' albo \'-\' albo \'.\'',
	'UsersManager_ExceptionInvalidPassword' => 'Długość hasła musi być pomiędzy 6 i 26 znaków.',
	'UsersManager_ExceptionInvalidEmail' => 'Email ma niepoprawny format.',
	'UsersManager_ExceptionDeleteDoesNotExist' => 'Użytkownik \'%s\' nie istnieje lub nie może być skasowany.',
	'UsersManager_ExceptionAdminAnonymous' => 'Nie możesz przydzielić statusu \'admin\' dla użytkownika \'anonymous\'.',
	'UsersManager_ExceptionEditAnonymous' => 'Użytkownik anonimowy nie może być zmieniony lub skasowany. Używany jest przez Piwik to do definicji użytkownika nie zalogowanego. Dla przykładu możesz ustawić swoje statystyki do wglądu dla wszystkich poprzez przyznanie prawa wglądu użytkownikowi anonimowemu \'anonymous\'.',
	'UsersManager_ExceptionUserDoesNotExist' => 'Użytkownik \'%s\' nie istnieje.',
	'UsersManager_ExceptionAccessValues' => 'Parametr dostępu musi zawierać jedna z następujących wartości : [ %s ]',
	'SitesManager_Sites' => 'Strony',
	'SitesManager_JsCode' => 'Kod Javascript',
	'SitesManager_JsCodeHelp' => 'Tutaj jest kod javascript, który należy umieścić na wszystkich twoich stronach',
	'SitesManager_ShowJsCode' => 'Pokaż kod',
	'SitesManager_NoWebsites' => 'Nie masz żadnej strony do zarządzania.',
	'SitesManager_AddSite' => 'Dodaj nową stronę',
	'SitesManager_Id' => 'Id',
	'SitesManager_Name' => 'nazwa',
	'SitesManager_Urls' => 'URL\'e',
	'SitesManager_MenuSites' => 'Strony',
	'SitesManager_DeleteConfirm_js' => 'Czy jesteś pewien że chcesz skasować stronę %s?',
	'SitesManager_ExceptionDeleteSite' => 'Nie jest możliwe skasowanie tej strony, ponieważ to jest jedyna zarejestrowana strona. Dodaj nową stronę i wtedy skasuj jedną.',
	'SitesManager_ExceptionNoUrl' => 'Musisz określić przynajmniej jeden URL do twojej strony.',
	'SitesManager_ExceptionEmptyName' => 'Nazwa strony nie może być pusta.',
	'SitesManager_ExceptionInvalidUrl' => 'URL \'%s\' nie jest poprawnym URL\'em.',
	'Installation_Installation' => 'Instalacja',
	'Installation_InstallationStatus' => 'Status instalacji',
	'Installation_PercentDone' => '%s %% Gotowe',
	'Installation_NoConfigFound' => 'Plik konfiguracji Piwik\'a nie został odnaleziony a ty próbujesz się dostać do Piwik\'a.<br><b>&nbsp;&nbsp;&raquo; Możesz <a href=\'index.php\'>zainstalować Piwik\'a teraz</a></b><br><small>Jeżeli instalowałeś Piwik\'a wcześniej i istnieją tabele w twojej bazie, nie martw się możesz użyć ponownie te same tabele i zachować istniejące dane!</small>',
	'Installation_MysqlSetup' => 'Setup bazy Mysql',
	'Installation_MysqlErrorConnect' => 'Błąd podczas próby połączenia z bazą Mysql',
	'Installation_JsTag' => 'Javascript tag',
	'Installation_JsTagHelp' => '<p>By zliczyć wszystich gości, musiż dołączyć kod javascript code na wszystkich stronach.</p><p>Twoje strony nie muszą być stworzone w PHP, Piwik współpracuje z wszystkimi rodzajami stron (HTML, ASP, Perl czy inny język).</p><p>Tutaj znajduje się kod który musisz wkleić: (kopij i wklej na wszystkich twoich stronach) </p>',
	'Installation_Congratulations' => 'Gratulacje',
	'Installation_ContratulationsHelp' => '<p>Gratulacje! Twója instalacja Piwik\'a została zakończona.</p><p>Upewnij się że kod javascript został wprowadzony do twoich stron i czekaj na pierwsza wizytę!</p>',
	'Installation_GoToPiwik' => 'Idź do Piwik\'a',
	'Installation_SetupWebsite' => 'Ustaw website',
	'Installation_SetupWebsiteError' => 'Wystąpił bład podczas dodawania strony',
	'Installation_GeneralSetup' => 'Ustawienia główne',
	'Installation_GeneralSetupSuccess' => 'Ustawienia główne skonfigurowano poprawnie',
	'Installation_SystemCheck' => 'Weryfikacja systemu',
	'Installation_SystemCheckPhp' => 'Wersja PHP',
	'Installation_SystemCheckPdo' => 'Rozszerzenie Pdo',
	'Installation_SystemCheckPdoMysql' => 'Rozszerzenie Pdo_Mysql',
	'Installation_SystemCheckPdoError' => 'Musisz włączyć PDO i PDO_MYSQL rozszerzenia w pliku php.ini.',
	'Installation_SystemCheckPdoHelp' => 'Na serwerach windows musisz dodać następującą linijkę w your php.ini %s <br><br>Na serwerach Linux musisz skompilować php z opcją %s W pliku php.ini, dodaj następujące linie %s<br><br>Więcej informacji znajdziesz na <a style="color:red" href="http://php.net/pdo">PHP.net</a>.',
	'Installation_SystemCheckWriteDirs' => 'Katalog z prawem do zapisu',
	'Installation_SystemCheckWriteDirsHelp' => 'By naprawić ten błąd na serwerach Linux spróbuj wykonać następujące polecenia',
	'Installation_SystemCheckMemoryLimit' => 'Limit pamięci',
	'Installation_SystemCheckMemoryLimitHelp' => 'Na stronach z dużym ruchem, proces archiwizacji może wymagać więcej pamięci niż jest aktualnie przydzielone.<br> Sprawdź dyrektywę memory_limit w pliku php.ini jeżeli to będzie konieczne.',
	'Installation_SystemCheckGD' => 'GD &gt; 2.x (grafika)',
	'Installation_SystemCheckGDHelp' => 'Sparklines (mały graf) nie pracuje.',
	'Installation_SystemCheckTimeLimit' => 'set_time_limit() dozwolone',
	'Installation_SystemCheckTimeLimitHelp' => 'Na stronach z dużym ruchem, proces archiwizacji może wymagać więcej czasu  niż jest aktualnie przydzielone.<br>Sprawdź dyrektywę  max_execution_time w pliku php.ini jeżeli to będzie konieczne.',
	'Installation_SystemCheckMail' => 'mail() dozwolone',
	'Installation_SystemCheckError' => 'Wystąpił błąd - zanim będziesz kontynuował zweryfikuj błąd',
	'Installation_SystemCheckWarning' => 'Piwik będzie pracował normalnie aczkolwiek pewne właściwości będą niedostępne ',
	'Installation_Tables' => 'Tworzenie tabel',
	'Installation_TablesWarning' => 'Pewne <span id="linkToggle">tabele Piwik\'a</span> istnieją w bazie',
	'Installation_TablesFound' => 'Następujące tabele zostały znalezione w bazie',
	'Installation_TablesWarningHelp' => 'Jakikolwiek wybór by użyć table w istniejącej bazie czy wybranie opcji czyszczenia instalacji wykazuje istniejące w bazie.',
	'Installation_TablesReuse' => 'Użyj istniejące tabele',
	'Installation_TablesDelete' => 'Skasuj wykryte tabele',
	'Installation_TablesDeletedSuccess' => 'Istniejące tabele Piwik\'a skasowano poprawnie',
	'Installation_TablesCreatedSuccess' => 'Tabele stworzone z powodzeniem!',
	'Installation_TablesDeleteConfirm' => 'Czy jesteś przekonany ze chcesz skasować wszystkie tabele Piwik\'az tej bazy?',
	'Installation_Welcome' => 'Witka!',
	'Installation_WelcomeHelp' => '<p>Piwik to wolne (open source) oprogramowanie do analizy ruchu na stronach internetowych, który w łatwy sposób pobierze informacje o wizytach na twojej stronie.</p><p>Proces jest podzielony na %s łatwe kroki i zajmie około 5 minut.</p>',
	'Provider_WidgetProviders' => 'Dostawca',
	'Provider_SubmenuLocationsProvider' => 'Lokalizacje i dostawca',
	'TranslationsAdmin_MenuTranslations' => 'Tłumaczenia',
	'TranslationsAdmin_MenuLanguages' => 'Języki',
	'TranslationsAdmin_Plugin' => 'Plugin\'y',
	'TranslationsAdmin_Definition' => 'Definicje',
	'TranslationsAdmin_DefaultString' => 'Domyślny tekst',
	'TranslationsAdmin_TranslationString' => 'Tekst tłumaczenia (aktualny język: %s)',
	'TranslationsAdmin_Translations' => 'Tłumaczenia',
	'TranslationsAdmin_FixPermissions' => 'Sprawdź prawa zapisu',
	'TranslationsAdmin_AvailableLanguages' => 'Dostępne języki',
	'TranslationsAdmin_AddLanguage' => 'Dodaj język',
	'TranslationsAdmin_LanguageCode' => 'Kod języka',
	'TranslationsAdmin_Export' => 'Eksportuj język',
	'TranslationsAdmin_Import' => 'Importuj język',
);