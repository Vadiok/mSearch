<?php

$_lang['mse.tpl'] = 'Чанк оформления результатов поиска.';
$_lang['mse.limit'] = 'Ограничение вывода количества результатов. Используется для постраничной навигации.';
$_lang['mse.offset'] = 'Пропуск результатов от начала. Используется для постраничной навигации.';
$_lang['mse.outputSeparator'] = 'Разделитель вывода результатов. Используется для постраничной навигации.';
$_lang['mse.totalVar'] = 'Имя плейсхолдера для выствления количества найденных результатов. Используется для постраничной навигации.';
$_lang['mse.queryVar'] = 'Имя перемнной, в которой содержится поисковый запрос. По умолчанию - query, то есть, сниппет будет работать с $_REQUEST[\'query\']';
$_lang['mse.parentsVar'] = 'Имя перемнной, в которая укзывает ограничение по родителям для поиска. По умолчанию - parents, то есть, сниппет будет работать с $_REQUEST[\'parents\']';
$_lang['mse.minQuery'] = 'Минимальное количество символов для начала поиска';
$_lang['mse.returnIds'] = 'Если включено - вместо оформленных результатов поиска сниппет вернет список id найденных ресурсов, через запятую. Можно использовать для вывода результатов другими сниппетами, типа getResources.';
$_lang['mse.plPrefix'] = 'Префикс для плейсхолдеров в чанках.';
$_lang['mse.tvPrefix'] = 'Префикс для ТВ параметров в чанках.';
$_lang['mse.includeTVs'] = 'Извлекать ТВ параметры ресурсов для обработки в чанке?';
$_lang['mse.includeTVList'] = 'Список ТВ параметров для извлечения.';
$_lang['mse.excludeTVList'] = 'Список ТВ параметров, которые не будут извлечены.';
$_lang['mse.includeMS'] = 'Извлекать параметры ресурсов-товаров из таблиц miniShop?';
$_lang['mse.includeMSList'] = 'Список параметров miniShop для извлечения.';
$_lang['mse.context'] = 'Контекст для работы. По умолчанию - текущий.';
$_lang['mse.indexFields'] = 'Поля ресурсов для индексации.';
$_lang['mse.showHidden'] = 'Показывать ресурсы, скрытые для отображения в меню';
$_lang['mse.showUnpublished'] = 'Показывать неопубликованные ресурсы.';
$_lang['mse.templates'] = 'Список шаблонов по которым фильтровать ресурсы при поиске, через запятую.';
$_lang['mse.resources'] = 'Список ресурсов, через запятую, в которых будет проводиться поиск.';
$_lang['mse.parents'] = 'Список родителей ресурсов, через запятую, в которых будет проводиться поиск, включая потомков.';
$_lang['mse.where'] = 'JSON выражение для дополнительной фильтрации ресурсов.';
$_lang['mse.disablePhpMorphy'] = 'Вы хотите отключить морфологический поиск с phpMorphy?';

$_lang['mse.tplParamOuter'] = 'Чанк для обертки одного параметра фильтра.';
$_lang['mse.tplParamCheckbox'] = 'Чанк для оформления "чекбоксовой" позиции в параметре фильтра.';
$_lang['mse.tplParamNumber'] = 'Чанк для оформления числового значения параметра фильтра. Например, цены: "От и до".';
$_lang['mse.tplOuter'] = 'Чанк для оформления всего блока фильтра, со всеми результатами.';
$_lang['mse.ids'] = 'Список ресурсов через запятую для формирования фильтров и вывода результатов. Если не указано  русурсы будут найдены с помощью сниппета mSearch.';


