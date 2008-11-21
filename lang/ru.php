<?php 
$translations = array(
	'General_Locale' => 'ru_RU.UTF-8',
	'General_TranslatorName' => 'Vadim Nekhai',
	'General_TranslatorEmail' => 'vadimnekhai@gmail.com',
	'General_EnglishLanguageName' => 'Russian',
	'General_OriginalLanguageName' => 'Русский',
	'General_Unknown' => 'Неизвестно',
	'General_Required' => '%s необходимо',
	'General_Error' => 'Ошибка',
	'General_Warning' => 'Внимание',
	'General_BackToHomepage' => 'На дом. страницу Piwik',
	'General_Yes' => 'Да',
	'General_No' => 'Нет',
	'General_Delete' => 'Удалить',
	'General_Edit' => 'Редактировать',
	'General_Ok' => 'ОК',
	'General_Close' => 'Закрыть',
	'General_Logout' => 'Выйти',
	'General_Done' => 'Завершено',
	'General_LoadingData' => 'Загрузка данных...',
	'General_ErrorRequest' => 'Oops&hellip; проблема запроса, пожалуйста попробуйте снова.',
	'General_Next' => 'Далее',
	'General_Previous' => 'Предыдущее',
	'General_Search' => 'Поиск',
	'General_Others' => 'Другие', 
	'General_Table' => 'Таблица',
	'General_Piechart' => 'Круговая диаграмма',
	'General_TagCloud' => 'Теги',
	'General_VBarGraph' => 'Столбчатая диаграмма',
	'General_Refresh' => 'Обновить страницу',
	'General_ColumnNbUniqVisitors' => 'Уникальных посетителей',
	'General_ColumnNbVisits' => 'Посещений',
	'General_ColumnLabel' => 'Обозначение',
	'General_Save' => 'Сохранить',
	'General_NoDataForGraph' => 'Нет данных для этого графика',
	'CorePluginsAdmin_Plugins' => 'Подключаемые модули',
	'CorePluginsAdmin_Activated' => 'Активировано',
	'CorePluginsAdmin_ActivatedHelp' => 'Этот плагин не может быть деактивирован',
	'CorePluginsAdmin_Deactivate' => 'Деактивировать',
	'CorePluginsAdmin_Activate' => 'Активировать',
	'CorePluginsAdmin_MenuPlugins' => 'Подключаемые модули',
	'API_QuickDocumentation' => '<h2>Краткая API документация</h2><p>Если вы не имеете данных на сегодня, вы можете сначала <a href=\'misc/generateVisits.php\' target=_blank>сгенерировать некоторые данные</a>, используя скрипт генерации посещений.</p><p>Вы можете использовать различные форматы для каждого метода. Вытянуть необходимую информацию из Piwik очень легко!</p><p><b>Для дальнейшей информации читайте <a href=\'http://dev.piwik.org/trac/wiki/API\'>официальную API Документацию</a>, или <a href=\'http://dev.piwik.org/trac/wiki/API/Reference\'>API Reference</a>.</b></P><h2>Аутентификация пользователей</h2><p>Если вам необходимо <b>запрашивать данные в ваших скриптах, cron-задачах и т.д.</b>, то вам необходимо добавить параметр <code><u>&token_auth=%s</u></code> к URL API-вызову, который требует аутентификацию. </p><p>Этот параметр token_auth такой же секретный, как и ваш пароль, <b>НЕ СООБЩАЙТЕ ЕГО!</p>',
	'API_LoadedAPIs' => '%s API успешно загружено',
	'CoreHome_NoPrivileges' => 'Вы зашли как \'%s\', но, похоже, вы не имеете разрешений просматривать статистику Piwik.<br />Сообщите администратору о предоставлении вам \'Просмотр\'-доступа к системе.',
	'CoreHome_JavascriptDisabled' => 'JavaScript должен быть разрешен для корректного стандартного отображения Piwik.<br />Если вы читаете это сообщение, значит JavaScript запрещен, либо не поддерживается вашим браузером.<br />Для использования стандартного вида, разрешите JavaScript в настройках вашего браузера, потом %1sпопробуйте обновить страницу%2s.<br />',
	'CoreHome_TableNoData' => 'Нет табличных данных.',
	'CoreHome_CategoryNoData' => 'Нет данных в этой категории. Попробуйте "Включить все показатели".',
	'CoreHome_ShowJSCode' => 'Показать ',
	'CoreHome_IncludeAllPopulation_js' => 'Включить все показатели в статистику',
	'CoreHome_ExcludeLowPopulation_js' => 'Исключить низкие показатели из статистики',
	'CoreHome_PageOf_js' => '%s из %s',
	'CoreHome_Loading_js' => 'Загрузка...',
	'CoreHome_LocalizedDateFormat' => '%A %d %B %Y',
	'CoreHome_PeriodDay' => 'День',
	'CoreHome_PeriodWeek' => 'Неделя',
	'CoreHome_PeriodMonth' => 'Месяц',
	'CoreHome_PeriodYear' => 'Год',
	'CoreHome_DaySu_js' => 'Воскресенье',
	'CoreHome_DayMo_js' => 'Понедельник',
	'CoreHome_DayTu_js' => 'Вторник',
	'CoreHome_DayWe_js' => 'Среда',
	'CoreHome_DayTh_js' => 'Четверг',
	'CoreHome_DayFr_js' => 'Пятница',
	'CoreHome_DaySa_js' => 'Суббота',
	'CoreHome_MonthJanuary_js' => 'Январь',
	'CoreHome_MonthFebruary_js' => 'Февраль',
	'CoreHome_MonthMarch_js' => 'Март',
	'CoreHome_MonthApril_js' => 'Апрель',
	'CoreHome_MonthMay_js' => 'Май',
	'CoreHome_MonthJune_js' => 'Июнь',
	'CoreHome_MonthJuly_js' => 'Июль',
	'CoreHome_MonthAugust_js' => 'Август',
	'CoreHome_MonthSeptember_js' => 'Сентябрь',
	'CoreHome_MonthOctober_js' => 'Октябрь',
	'CoreHome_MonthNovember_js' => 'Ноябрь',
	'CoreHome_MonthDecember_js' => 'Декабрь',
	'Actions_SubmenuPages' => 'Страницы',
	'Actions_SubmenuOutlinks' => 'Аутлинки',
	'Actions_SubmenuDownloads' => 'Загрузки',
	'Dashboard_AddWidget' => 'Добавить виджет...',
	'Dashboard_DeleteWidgetConfirm' => 'Вы уверены, что хотите удалить виджет с панели приборов?',
	'Dashboard_SelectWidget' => 'Выберите виджет для добавления на панель приборов',
	'Dashboard_AddPreviewedWidget' => 'Добавить предпросмотренный виджет на панель приборов',
	'Dashboard_WidgetPreview' => 'Предпросмотр виджета',
	'Dashboard_TitleWidgetInDashboard_js' => 'Виджет уже существует на панели приборов',
	'Dashboard_TitleClickToAdd_js' => 'Кликните для добавления на панель приборов',
	'Dashboard_LoadingPreview_js' => 'Загрузка предспросмотра, пожалуйста подождите...',
	'Dashboard_LoadingWidget_js' => 'Загрузка виджета, пожалуйста подождите...',
	'Dashboard_WidgetNotFound_js' => 'Виджет не найден',
	'Referers_SearchEngines' => 'Поисковые движки',
	'Referers_Keywords' => 'Ключевые слова',
	'Referers_DirectEntry' => 'Прямой вход',
	'Referers_Websites' => 'Вебсайты',
	'Referers_Newsletters' => 'Новостные ленты',
	'Referers_Campaigns' => 'Кампания',
	'Referers_Evolution' => 'Эволюция по периоду',
	'Referers_Type' => 'Тип рефера',
	'Referers_TypeDirectEntries' => '%s прямых входов',
	'Referers_TypeSearchEngines' => '%s входов из поисковых движков',
	'Referers_TypeWebsites' => '%s входов из вебсайтов',
	'Referers_TypeNewsletters' => '%s входов из новостных лент',
	'Referers_TypeCampaigns' => '%s входов с кампаний',
	'Referers_Other' => 'Другие',
	'Referers_OtherDistinctSearchEngines' => '%s уникальных поисковых движков',
	'Referers_OtherDistinctKeywords' => '%s уникальных ключевых слов',
	'Referers_OtherDistinctWebsites' => '%1s уникальных вебсайтов (используя %2s уникальных URL)',
	'Referers_OtherDistinctCampaigns' => '%s уникальных кампаний',
	'Referers_TagCloud' => 'Облако тегов',
	'Referers_SubmenuEvolution' => 'Эволюция',
	'Referers_SubmenuSearchEngines' => 'Поисковые движки и ключ. слова',
	'Referers_SubmenuWebsites' => 'Вебсайты',
	'Referers_SubmenuCampaigns' => 'Кампании',
	'Referers_WidgetKeywords' => 'Список ключевых слов',
	'Referers_WidgetCampaigns' => 'Список кампаний',
	'Referers_WidgetExternalWebsites' => 'Список внешних вебсайтов',
	'Referers_WidgetSearchEngines' => 'Лучшие поисковые движки',
	'Referers_WidgetOverview' => 'Обзор',
	'UserSettings_BrowserFamilies' => 'По семейству браузеров',
	'UserSettings_Browsers' => 'По браузерам',
	'UserSettings_Plugins' => 'Подключаемые модули',
	'UserSettings_Configurations' => 'По конфигурации',
	'UserSettings_OperatinsSystems' => 'По операционным системам',
	'UserSettings_Resolutions' => 'По разрешению мониторов',
	'UserSettings_WideScreen' => 'По ширине экрана',
	'UserSettings_WidgetResolutions' => 'По разрешению мониторов',
	'UserSettings_WidgetBrowsers' => 'Браузеры пользователей',
	'UserSettings_WidgetPlugins' => 'Список подключаемых модулей',
	'UserSettings_WidgetWidescreen' => 'Нормальный / Широкоэкранный',
	'UserSettings_WidgetBrowserFamilies' => 'Браузеры по семейству',
	'UserSettings_WidgetOperatingSystems' => 'Операционные системы',
	'UserSettings_WidgetGlobalVisitors' => 'Глобальная конфигурация',
	'UserSettings_SubmenuSettings' => 'Настройки пользователей',
	'UserCountry_Country' => 'Страна',
	'UserCountry_Continent' => 'Континент',
	'UserCountry_DistinctCountries' => '%s уникальных стран',
	'UserCountry_SubmenuLocations' => 'Локации',
	'UserCountry_WidgetContinents' => 'Континенты посетителей',
	'UserCountry_WidgetCountries' => 'Страны посетителей',
	'UserCountry_country_ac' => 'Острова Вознесения',
	'UserCountry_country_ad' => 'Андорра',
	'UserCountry_country_ae' => 'Объединённые Арабские Эмираты',
	'UserCountry_country_af' => 'Афганистан',
	'UserCountry_country_ag' => 'Антигуа и Барбуда',
	'UserCountry_country_ai' => 'Ангвила',
	'UserCountry_country_al' => 'Албания',
	'UserCountry_country_am' => 'Армения',
	'UserCountry_country_an' => 'Антильские острова',
	'UserCountry_country_ao' => 'Ангола',
	'UserCountry_country_aq' => 'Антарктика',
	'UserCountry_country_ar' => 'Аргентина',
	'UserCountry_country_as' => 'Американское Самоа',
	'UserCountry_country_at' => 'Австрия',
	'UserCountry_country_au' => 'Австралия',
	'UserCountry_country_aw' => 'Аруба',
	'UserCountry_country_az' => 'Азербайджан',
	'UserCountry_country_ba' => 'Босния и Герцеговина',
	'UserCountry_country_bb' => 'Барбадос',
	'UserCountry_country_bd' => 'Бангладеш',
	'UserCountry_country_be' => 'Бельгия',
	'UserCountry_country_bf' => 'Буркина-Фасо',
	'UserCountry_country_bg' => 'Болгария',
	'UserCountry_country_bh' => 'Бахрейн',
	'UserCountry_country_bi' => 'Бурунди',
	'UserCountry_country_bj' => 'Бенин',
	'UserCountry_country_bm' => 'Бермудские острова',
	'UserCountry_country_bn' => 'Бруней',
	'UserCountry_country_bo' => 'Боливия',
	'UserCountry_country_br' => 'Бразилия',
	'UserCountry_country_bs' => 'Багамские острова',
	'UserCountry_country_bt' => 'Бутан',
	'UserCountry_country_bv' => 'Остров Буве',
	'UserCountry_country_bw' => 'Ботсвана',
	'UserCountry_country_by' => 'Беларусь',
	'UserCountry_country_bz' => 'Белиз',
	'UserCountry_country_ca' => 'Канада',
	'UserCountry_country_cc' => 'Кокосовые острова',
	'UserCountry_country_cd' => 'Конго, демократическая республик',
	'UserCountry_country_cf' => 'Центральноафриканская Республика',
	'UserCountry_country_cg' => 'Конго',
	'UserCountry_country_ch' => 'Швейцария',
	'UserCountry_country_ci' => 'Кот Д\'ивуа',
	'UserCountry_country_ck' => 'Острова Кука',
	'UserCountry_country_cl' => 'Чили',
	'UserCountry_country_cm' => 'Камерун',
	'UserCountry_country_cn' => 'Китай',
	'UserCountry_country_co' => 'Колумбия',
	'UserCountry_country_cr' => 'Коста-Рика',
	'UserCountry_country_cs' => 'Сербия и Черногория',
	'UserCountry_country_cu' => 'Куба',
	'UserCountry_country_cv' => 'Кабо-Верде',
	'UserCountry_country_cx' => 'Остров Рождества',
	'UserCountry_country_cy' => 'Кипр',
	'UserCountry_country_cz' => 'Чешская Республика',
	'UserCountry_country_de' => 'Германия',
	'UserCountry_country_dj' => 'Джибути',
	'UserCountry_country_dk' => 'Дания',
	'UserCountry_country_dm' => 'Доминика',
	'UserCountry_country_do' => 'Доминиканская Республика',
	'UserCountry_country_dz' => 'Алжир',
	'UserCountry_country_ec' => 'Эквадор',
	'UserCountry_country_ee' => 'Эстония',
	'UserCountry_country_eg' => 'Египет',
	'UserCountry_country_eh' => 'Западная Сахара',
	'UserCountry_country_er' => 'Эритрея',
	'UserCountry_country_es' => 'Испания',
	'UserCountry_country_et' => 'Эфиопия',
	'UserCountry_country_fi' => 'Финляндия',
	'UserCountry_country_fj' => 'Фиджи',
	'UserCountry_country_fk' => 'Фолклендские острова (Мальвинские)',
	'UserCountry_country_fm' => 'Микронезия',
	'UserCountry_country_fo' => 'Фарерские острова',
	'UserCountry_country_fr' => 'Франция',
	'UserCountry_country_ga' => 'Габон',
	'UserCountry_country_gd' => 'Гренада',
	'UserCountry_country_ge' => 'Грузия',
	'UserCountry_country_gf' => 'Фр. Гайана',
	'UserCountry_country_gg' => 'Гернси',
	'UserCountry_country_gh' => 'Гана',
	'UserCountry_country_gi' => 'Гибралтар',
	'UserCountry_country_gl' => 'Гренландия',
	'UserCountry_country_gm' => 'Гамбия',
	'UserCountry_country_gn' => 'Гвинея',
	'UserCountry_country_gp' => 'Гваделупа',
	'UserCountry_country_gq' => 'Экваториальная Гвинея',
	'UserCountry_country_gr' => 'Греция',
	'UserCountry_country_gs' => 'Южная Джорджия и Южные Сандвичевы острова',
	'UserCountry_country_gt' => 'Гватемала',
	'UserCountry_country_gu' => 'Гуам',
	'UserCountry_country_gw' => 'Гвинея-Бисау',
	'UserCountry_country_gy' => 'Гайана',
	'UserCountry_country_hk' => 'Гонконг',
	'UserCountry_country_hm' => 'Острова Херда и Макдональда',
	'UserCountry_country_hn' => 'Гондурас',
	'UserCountry_country_hr' => 'Хорватия',
	'UserCountry_country_ht' => 'Гаити',
	'UserCountry_country_hu' => 'Венгрия',
	'UserCountry_country_id' => 'Индонезия',
	'UserCountry_country_ie' => 'Ирландия',
	'UserCountry_country_il' => 'Израиль',
	'UserCountry_country_im' => 'Остров Мэн',
	'UserCountry_country_in' => 'Индия',
	'UserCountry_country_io' => 'Британская территория Индийского океан',
	'UserCountry_country_iq' => 'Ирак',
	'UserCountry_country_ir' => 'Иран',
	'UserCountry_country_is' => 'Исландия',
	'UserCountry_country_it' => 'Италия',
	'UserCountry_country_je' => 'Джерси',
	'UserCountry_country_jm' => 'Ямайка',
	'UserCountry_country_jo' => 'Иордания',
	'UserCountry_country_jp' => 'Япония',
	'UserCountry_country_ke' => 'Кения',
	'UserCountry_country_kg' => 'Киргизстан',
	'UserCountry_country_kh' => 'Камбоджа',
	'UserCountry_country_ki' => 'Кирибати',
	'UserCountry_country_km' => 'Коморские острова',
	'UserCountry_country_kn' => 'Сент-Китс и Невис',
	'UserCountry_country_kp' => 'КНДР',
	'UserCountry_country_kr' => 'Корея',
	'UserCountry_country_kw' => 'Кувейт',
	'UserCountry_country_ky' => 'Каймановы острова',
	'UserCountry_country_kz' => 'Казахстан',
	'UserCountry_country_la' => 'Лаос',
	'UserCountry_country_lb' => 'Ливан',
	'UserCountry_country_lc' => 'Сент-Люсия',
	'UserCountry_country_li' => 'Лихтенштейн',
	'UserCountry_country_lk' => 'Шри-Ланка',
	'UserCountry_country_lr' => 'Либерия',
	'UserCountry_country_ls' => 'Лесото',
	'UserCountry_country_lt' => 'Литва',
	'UserCountry_country_lu' => 'Люксембург',
	'UserCountry_country_lv' => 'Латвия',
	'UserCountry_country_ly' => 'Ливия',
	'UserCountry_country_ma' => 'Марокко',
	'UserCountry_country_mc' => 'Монако',
	'UserCountry_country_md' => 'Молдова',
	'UserCountry_country_mg' => 'Мадагаскар',
	'UserCountry_country_mh' => 'Маршалловы острова',
	'UserCountry_country_mk' => 'Македония',
	'UserCountry_country_ml' => 'Мали',
	'UserCountry_country_mm' => 'Мьянма',
	'UserCountry_country_mn' => 'Монголия',
	'UserCountry_country_mo' => 'Макау',
	'UserCountry_country_mp' => 'Северные Марианские острова',
	'UserCountry_country_mq' => 'Мартиника',
	'UserCountry_country_mr' => 'Мавритания',
	'UserCountry_country_ms' => 'Монсеррат',
	'UserCountry_country_mt' => 'Мальта',
	'UserCountry_country_mu' => 'Маврикий',
	'UserCountry_country_mv' => 'Мальдивские острова',
	'UserCountry_country_mw' => 'Малави',
	'UserCountry_country_mx' => 'Мексика',
	'UserCountry_country_my' => 'Малайзия',
	'UserCountry_country_mz' => 'Мозамбик',
	'UserCountry_country_na' => 'Намибия',
	'UserCountry_country_nc' => 'Новая Каледония',
	'UserCountry_country_ne' => 'Нигер',
	'UserCountry_country_nf' => 'Норфолкские острова',
	'UserCountry_country_ng' => 'Нигерия',
	'UserCountry_country_ni' => 'Никарагуа',
	'UserCountry_country_nl' => 'Нидерланды',
	'UserCountry_country_no' => 'Норвегия',
	'UserCountry_country_np' => 'Непал',
	'UserCountry_country_nr' => 'Науру',
	'UserCountry_country_nu' => 'Ние',
	'UserCountry_country_nz' => 'Новая Зеландия',
	'UserCountry_country_om' => 'Оман',
	'UserCountry_country_pa' => 'Панама',
	'UserCountry_country_pe' => 'Перу',
	'UserCountry_country_pf' => 'Фр. Полинезия',
	'UserCountry_country_pg' => 'Папуа - Новая Гвинея',
	'UserCountry_country_ph' => 'Филиппины',
	'UserCountry_country_pk' => 'Пакистан',
	'UserCountry_country_pl' => 'Польша',
	'UserCountry_country_pm' => 'Сен-Пьер и Микелон',
	'UserCountry_country_pn' => 'Питкэрн',
	'UserCountry_country_pr' => 'Пуэрто-Рико',
	'UserCountry_country_ps' => 'Палестинская территория',
	'UserCountry_country_pt' => 'Португалия',
	'UserCountry_country_pw' => 'Палау',
	'UserCountry_country_py' => 'Парагвай',
	'UserCountry_country_qa' => 'Катар',
	'UserCountry_country_re' => 'Остров Реюньон',
	'UserCountry_country_ro' => 'Румыния',
	'UserCountry_country_rw' => 'Руанда',
	'UserCountry_country_sa' => 'Саудовская Аравия',
	'UserCountry_country_sb' => 'Соломоновы острова',
	'UserCountry_country_sc' => 'Сейшельские острова',
	'UserCountry_country_sd' => 'Судан',
	'UserCountry_country_se' => 'Швеция',
	'UserCountry_country_sg' => 'Сингапур',
	'UserCountry_country_sh' => 'Остров Святой Елены',
	'UserCountry_country_si' => 'Словения',
	'UserCountry_country_sj' => 'Свольбар',
	'UserCountry_country_sk' => 'Словакия',
	'UserCountry_country_sl' => 'Сьерра-Леоне',
	'UserCountry_country_sm' => 'Сан-Марино',
	'UserCountry_country_sn' => 'Сенегал',
	'UserCountry_country_so' => 'Сомали',
	'UserCountry_country_sr' => 'Суринам',
	'UserCountry_country_st' => 'Сан-Томе и Принсипи',
	'UserCountry_country_su' => 'СССР (бывший)',
	'UserCountry_country_sv' => 'Сальвадор',
	'UserCountry_country_sy' => 'Сирийская Арабская Республика',
	'UserCountry_country_sz' => 'Свазиленд',
	'UserCountry_country_tc' => 'Острова Турции и Каикоса',
	'UserCountry_country_td' => 'Чад',
	'UserCountry_country_tf' => 'Южные территории Франции',
	'UserCountry_country_tg' => 'Того',
	'UserCountry_country_th' => 'Таиланд',
	'UserCountry_country_tj' => 'Таджикистан',
	'UserCountry_country_tk' => 'Токело',
	'UserCountry_country_tm' => 'Туркменистан',
	'UserCountry_country_tn' => 'Тунис',
	'UserCountry_country_to' => 'Тонга',
	'UserCountry_country_tp' => 'Восточный Тимор',
	'UserCountry_country_tr' => 'Турция',
	'UserCountry_country_tt' => 'Тринидад и Тобаго',
	'UserCountry_country_tv' => 'Тувалу',
	'UserCountry_country_tw' => 'Тайвань',
	'UserCountry_country_tz' => 'Танзания',
	'UserCountry_country_ua' => 'Украина',
	'UserCountry_country_ug' => 'Уганда',
	'UserCountry_country_uk' => 'Соединённое Королевство',
	'UserCountry_country_gb' => 'Великобритания',
	'UserCountry_country_um' => 'Острова США',
	'UserCountry_country_us' => 'США',
	'UserCountry_country_uy' => 'Уругвай',
	'UserCountry_country_uz' => 'Узбекистан',
	'UserCountry_country_va' => 'Ватикан',
	'UserCountry_country_vc' => 'Сент-Винсент и Гренадины',
	'UserCountry_country_ve' => 'Венесуэла',
	'UserCountry_country_vg' => 'Виргинские острова Британии',
	'UserCountry_country_vi' => 'Виргинские острова США',
	'UserCountry_country_vn' => 'Вьетнам',
	'UserCountry_country_vu' => 'Вануату',
	'UserCountry_country_wf' => 'Уоллис и Футуна',
	'UserCountry_country_ws' => 'Самоа',
	'UserCountry_country_ye' => 'Йемен',
	'UserCountry_country_yt' => 'Майотта',
	'UserCountry_country_yu' => 'Югославия',
	'UserCountry_country_za' => 'Южно-Африканская Республика',
	'UserCountry_country_zm' => 'Замбия',
	'UserCountry_country_zr' => 'Заир',
	'UserCountry_country_zw' => 'Зимбабве',
	'UserCountry_continent_eur' => 'Европа',
	'UserCountry_continent_afr' => 'Африка',
	'UserCountry_continent_asi' => 'Азия',
	'UserCountry_continent_ams' => 'Южная и Центральная Америка',
	'UserCountry_continent_amn' => 'Северная Америка',
	'UserCountry_continent_oce' => 'Океания',
	'VisitsSummary_NbVisits' => '%s посещений',
	'VisitsSummary_NbUniqueVisitors' => '%s уникальных посетителей',
	'VisitsSummary_NbActions' => '%s действий (просмотров страниц)',
	'VisitsSummary_TotalTime' => '%s общее время посещений',
	'VisitsSummary_MaxNbActions' => '%s макс. действий за одно посещение',
	'VisitsSummary_NbBounced' => '%s посетителей ушло после посещения одной страницы',
	'VisitsSummary_Evolution' => 'Эволюция за 30 последних дней',
	'VisitsSummary_Report' => 'Отчет',
	'VisitsSummary_GenerateTime' => 'Страница сгенерирована за %s секунд',
	'VisitsSummary_GenerateQueries' => '%s запросов выполнено',
	'VisitsSummary_WidgetLastVisits' => 'График последних посещений',
	'VisitsSummary_WidgetVisits' => 'Обзор посещений',
	'VisitsSummary_WidgetLastVisitors' => 'График последних уникальных посещений',
	'VisitsSummary_WidgetOverviewGraph' => 'Обзор по всем графикам',
	'VisitsSummary_SubmenuOverview' => 'Обзор',
	'VisitFrequency_Evolution' => 'Эволюция за период',
	'VisitFrequency_ReturnVisits' => '%s повторных посещений',
	'VisitFrequency_ReturnActions' => '%s действий в повторные посещения',
	'VisitFrequency_ReturnMaxActions' => '%s максимальных действий на повторное посещение',
	'VisitFrequency_ReturnTotalTime' => '%s общего времени на повторных посещениях',
	'VisitFrequency_ReturnBounces' => '%s раз пользователи вышли после просмотра одной страницы',
	'VisitFrequency_WidgetOverview' => 'Обзор частоты посещений',
	'VisitFrequency_WidgetGraphReturning' => 'График повторных посещений',
	'VisitFrequency_SubmenuFrequency' => 'Частота',
	'VisitTime_LocalTime' => 'Посещений по местному времени',
	'VisitTime_ServerTime' => 'Посещений по серверному времени',
	'VisitTime_WidgetLocalTime' => 'Посещений по местному времени',
	'VisitTime_WidgetServerTime' => 'Посещений по серверному времени',
	'VisitTime_SubmenuTimes' => 'По времени',
	'VisitTime_NHour' => '%s ч.',
	'VisitorInterest_VisitsPerDuration' => 'Посещений по длине визита',
	'VisitorInterest_VisitsPerNbOfPages' => 'Посещений по количеству страниц',
	'VisitorInterest_WidgetLengths' => 'Длина посещений',
	'VisitorInterest_WidgetPages' => 'Старниц за посещение',
	'VisitorInterest_SubmenuFrequencyLoyalty' => 'Частота посещений',
	'VisitorInterest_PlusXMin' => '%s мин.',
	'VisitorInterest_BetweenXYMinutes' => '%1s-%2s мин.',
	'VisitorInterest_OnePage' => '1 страница',
	'VisitorInterest_NPages' => '%s страниц',
	'VisitorInterest_BetweenXYSeconds' => '%1s-%2s сек.', 
	'Provider_WidgetProviders' => 'Провайдеры',
	'Provider_SubmenuLocationsProvider' => 'Локации и провайдеры',
	'Login_PluginDescription' => 'Экран входа пользователей в систему.',
	'Login_LoginPasswordNotCorrect' => 'Логин и пароль неверны',
	'Login_Login' => 'Логин',
	'Login_Password' => 'Пароль',
	'Login_LoginOrEmail' => 'Логин или E-mail',
	'Login_LogIn' => 'Войти',
	'Login_Logout' => 'Выйти',
	'Login_LostYourPassword' => 'Потеряли пароль?',
	'Login_RemindPassword' => 'Вспомнить пароль',
	'Login_PasswordReminder' => 'Пожалуйста, введите свой логин или e-mail. Новый пароль прийдет вам по e-mail.',
	'Login_InvalidUsernameEmail' => 'Неверное имя пользователя и/или e-mail',
	'Login_MailTopicPasswordRecovery' => 'Восстановление пароля',
	'Login_MailPasswordRecoveryBody' => 'Здравствуйте, %1s, \n\n Ваш новый пароль: %2s \n\n Теперь вы можете войти: %3s',
	'Login_PasswordSent' => 'Пароль уже выслан, проверьте свою почту.',
	'Login_ContactAdmin' => 'Возможная причина: функция mail() отключена. <br />Пожалуйста, свяжитесь с администратором.',
	'UsersManager_ManageAccess' => 'Управление правами',
	'UsersManager_Sites' => 'Сайты',
	'UsersManager_AllWebsites' => 'Все сайты',
	'UsersManager_ApplyToAllWebsites' => 'Применить ко всем сайтам',
	'UsersManager_User' => 'Пользователь',
	'UsersManager_PrivNone' => 'Нет доступа',
	'UsersManager_PrivView' => 'Просмотр',
	'UsersManager_PrivAdmin' => 'Админ',
	'UsersManager_ChangeAllConfirm' => 'Вы действительно желаете изменить права \'%s\' на все вебсайты?',
	'UsersManager_Login' => 'Логин',
	'UsersManager_Password' => 'Пароль',
	'UsersManager_Email' => 'Email',
	'UsersManager_Alias' => 'Алиас',
	'UsersManager_Token' => 'token_auth-ключ',
	'UsersManager_Edit' => 'Редактировать',
	'UsersManager_AddUser' => 'Добавить нового пользователя',
	'UsersManager_MenuUsers' => 'Пользователи',
	'UsersManager_DeleteConfirm_js' => 'Вы действительно хотите удалить пользователя %s?',
	'UsersManager_ExceptionLoginExists' => 'Логин \'%s\' уже существует.',
	'UsersManager_ExceptionEmailExists' => 'Пользователь с Email \'%s\' уже существует.',
	'UsersManager_ExceptionInvalidLogin' => 'Логин может содержать только буквы, цифры, символы \'_\' или \'-\' или \'.\'.',
	'UsersManager_ExceptionInvalidPassword' => 'Длина пароля должно быть от 6 до 26 символов.',
	'UsersManager_ExceptionInvalidEmail' => 'Email неправильного формата',
	'UsersManager_ExceptionDeleteDoesNotExist' => 'Пользователя \'%s\' не существует, поэтому он не может быть удален.',
	'UsersManager_ExceptionAdminAnonymous' => 'Вы не можете давать права \'Админ\' анонимному пользователю.',
	'UsersManager_ExceptionEditAnonymous' => 'Анонимный пользователь не может быть удален. Он необходим Piwik для идентификации пользователей, которые не вошли в систему. Допустим, вы можете сделать статистику публичной, предоставляя право \'Просмотр\' анонимному пользователю.',
	'UsersManager_ExceptionUserDoesNotExist' => 'Пользователь \'%s\' не существует.',
	'UsersManager_ExceptionAccessValues' => 'Параметр доступа может иметь только одно из следующих значений: [ %s ]',
	'SitesManager_Sites' => 'Сайты',
	'SitesManager_JsCode' => 'Код JavaScript',
	'SitesManager_JsCodeHelp' => 'Код JavaScript, который необходимо вставить во все ваши страницы',
	'SitesManager_ShowJsCode' => 'Показать код',
	'SitesManager_NoWebsites' => 'Вы не имеете ни одного сайта на учете.',
	'SitesManager_AddSite' => 'Добавить новый сайт',
	'SitesManager_Id' => 'ID',
	'SitesManager_Name' => 'Название',
	'SitesManager_Urls' => 'URL-ы',
	'SitesManager_MenuSites' => 'Сайты',
	'SitesManager_DeleteConfirm_js' => 'Вы действительно желаете удалить этот сайт?',
	'SitesManager_ExceptionDeleteSite' => 'Невозможно удалить, так как это единственный сайт в вашем списке. Добавьте еще какой-нибудь сайт для удаления данного.',
	'SitesManager_ExceptionNoUrl' => 'Вы должны указать хотя бы один URL для этого сайта',
	'SitesManager_ExceptionEmptyName' => 'Название сайта не может быть пустое.',
	'SitesManager_ExceptionInvalidUrl' => 'URL \'%s\' не верен.',
	'Installation_Installation' => 'Установка',
	'Installation_InstallationStatus' => 'Статус установки',
	'Installation_PercentDone' => '%s %% Завершено',
	'Installation_NoConfigFound' => 'Конфигурационный файл Piwik не может быть найден, однако вы пытаетесь зайти в систему.<br /><b>&nbsp;&nbsp;&raquo; Вы можете <a href=\'index.php\'>установить Piwik сейчас</a></b><br /><small>. Если Piwik уже был установлен и вы имеете данные в БД, вы все еще можете использовать их.</small>',
	'Installation_MysqlSetup' => 'Настройки БД Mysql',
	'Installation_MysqlErrorConnect' => 'Ошибка соединения с базой данных.',
	'Installation_JsTag' => 'JavaScript тэг',
	'Installation_JsTagHelp' => '<p>Для подсчета посетителей вы должны вставить данный JavaScript-код на все страницы сайта.</p><p>Код не должен размещаться в PHP, Piwik будет только работать на всех типах страниц (включая HTML, ASP, Perl или любой другой язык).</p><p>Вот сам код, который необходимо вставить(скопируйте и вставьте на все свои страницы):</p>',
	'Installation_Congratulations' => 'Поздравляем',
	'Installation_CongratulationsHelp' => '<p>Поздравляем! Установка Piwik окончена.</p><p>Убедитесь, что код JavaScript размещен на всех страницах, и ожидайте первых посетителей!',
	'Installation_GoToPiwik' => 'Перейти к Piwik',
	'Installation_SetupWebsite' => 'Добавить сайт',
	'Installation_SetupWebsiteError' => 'Возникла ошибка при добавлении сайта',
	'Installation_GeneralSetup' => 'Общие настройки',
	'Installation_GeneralSetupSuccess' => 'Общее конфигурирование успешно завершено',
	'Installation_SystemCheck' => 'Проверка системы',
	'Installation_SystemCheckPhp' => 'PHP версия',
	'Installation_SystemCheckPdo' => 'Модуль Pdo',
	'Installation_SystemCheckPdoMysql' => 'Модуль Pdo_Mysql',
	'Installation_SystemCheckPdoError' => 'Вам необходимо активизировать модули PDO и PDO_MYSQL в настройках php.ini.',
	'Installation_SystemCheckPdoHelp' => 'На Windows-сервере вам необходимо добавить следующие линии в php.ini %s <br /><br />на Linux-сервере вы должны откомпилировать PHP со следующими значениями %s В php.ini добавьте следующее %s<br /><br />Больше информации вы найдете на <a style="color:red" href="http://php.net/pdo">ресурсе PHP.net</a>.',
	'Installation_SystemCheckWriteDirs' => 'Папки с правами записи',
	'Installation_SystemCheckWriteDirsHelp' => 'Для исправления этой ошибки в ОС Linux, попробуйте ввести следущие команды',
	'Installation_SystemCheckMemoryLimit' => 'Ограничение памяти',
	'Installation_SystemCheckMemoryLimitHelp' => 'На сайте с большим объемом трафика, процесс архивирования может занять больше памяти, чем разрешено.<br />Проверьте опцию memory_limit в вашем php.ini, если необходимо.',
	'Installation_SystemCheckGD' => 'GD &gt; 2.x (графика)',
	'Installation_SystemCheckGDHelp' => 'Отображение тонкого графика не будет работать.',
	'Installation_SystemCheckTimeLimit' => 'set_time_limit() разрешен',
	'Installation_SystemCheckTimeLimitHelp' => 'На сайте с большим объемом трафика, процесс выполнения архивирования может занять больше времени, чем разрешено.<br />Проверьте опцию max_execution_time в вашем php.ini, если необходимо.',
	'Installation_SystemCheckMail' => 'mail() разрешено',
	'Installation_SystemCheckError' => 'Возникла ошибка - должна быть исправлена перед продолжением',
	'Installation_SystemCheckWarning' => 'Piwik будет работать нормально, но некоторые функции не будут доступны',
	'Installation_Tables' => 'Создание таблиц',
	'Installation_TablesWarning' => 'Некоторые <span id="linkToggle">таблицы</span> уже установлены в БД',
	'Installation_TablesFound' => 'Следующие таблицы найдены в БД',
	'Installation_TablesWarningHelp' => 'Выберите одно из двух: использовать существующих таблиц БД, или чистую установку, которая удалит все существующие данные в базе данных.',
	'Installation_TablesReuse' => 'Использовать существующие таблицы',
	'Installation_TablesDelete' => 'Удалить найденные таблицы',
	'Installation_TablesDeletedSuccess' => 'Существующие таблицы Piwik успешно удалены',
	'Installation_TablesCreatedSuccess' => 'Таблицы успешно созданы!',
	'Installation_TablesDeleteConfirm' => 'Вы действительно хотите удалить таблицы Piwik с БД?',
	'Installation_Welcome' => 'Добро пожаловать!',
	'Installation_WelcomeHelp' => '<p>Piwik - это открытое программное обеспечение, позволяющее вам вести статистический учет посещений вашего сайта и проводить аналитические расчеты для получения информации необходимой вам информации о посетителях. Этот процесс состоит из 8 шагов и занимает около 5 минут времени.</p>',
	'TranslationsAdmin_MenuTranslations' => 'Переводы',
	'TranslationsAdmin_MenuLanguages' => 'Языки',
	'TranslationsAdmin_Plugin' => 'Подключаемый модуль',
	'TranslationsAdmin_Definition' => 'Описание',
	'TranslationsAdmin_DefaultString' => 'Строка по умолчанию (английский)',
	'TranslationsAdmin_TranslationString' => 'Переведенная строка (текущий язык: %s )',
	'TranslationsAdmin_Translations' => 'Переводы',
	'TranslationsAdmin_FixPermissions' => 'Пожалуйста, исправьте системные права',
	'TranslationsAdmin_AvailableLanguages' => 'Доступные языки',
	'TranslationsAdmin_AddLanguage' => 'Добавить язык',
	'TranslationsAdmin_LanguageCode' => 'Код языка',
	'TranslationsAdmin_Export' => 'Экспорт языкового файла',
	'TranslationsAdmin_Import' => 'Импорт языкового файла',
);