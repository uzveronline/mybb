<?php
/**
 * MyBB 1.8 English Language Pack
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 */

// Tabs
$l['attachments'] = "Вложения";
$l['stats'] = "Статистика";
$l['find_attachments'] = "Найти вложения";
$l['find_attachments_desc'] = "С помощью поисковой системы вложений вы можете осуществить поиск конкретных файлов пользователей, подключенных на вашей форумах. Начните вводить условия поиска ниже. Все поля являются необязательными и не будут включены в критерии, если они не содержат значение.";
$l['find_orphans'] = "Поиск осиротевших вложений";
$l['find_orphans_desc'] = "Потерянные вложения вложения, которые по каким-то причинам отсутствует в файловой системе базы данных . Эта утилита поможет вам в поиске и удалении их.";
$l['attachment_stats'] = "Статистика вложений ";
$l['attachment_stats_desc'] = "Ниже приведены некоторые общие статистические данные для вложений в настоящее время на вашем форуме.";

// Errors
$l['error_nothing_selected'] = "Пожалуйста, выберите один или несколько вложений, чтобы удалить.";
$l['error_no_attachments'] = "Нет никаких вложений на вашем форуме. После того, как вложение размещено .  вы сможете получить доступ в этот раздел.";
$l['error_not_all_removed'] = "Только некоторые осиротевшие вложения были успешно удалены,  другие не могут быть удалены из каталога загрузок.";
$l['error_count'] = "Невозможно удалить прикреплённый файл(ы).";
$l['error_invalid_username'] = "Имя пользователя недействительно.";
$l['error_invalid_forums'] = "Один или несколько выбранных форумов недействительны.";
$l['error_no_results'] = "Прикрепленные файлы не были найдены по заданным критериям поиска.";
$l['error_not_found'] = "Файл вложений не может быть найден в каталоге загрузок.";
$l['error_not_attached'] = "Вложение было загружено более 24 часов назад, но не привязан к сообщению.";
$l['error_does_not_exist'] = "Тема или пост для этого вложения больше не существует.";

// Success
$l['success_deleted'] = "Выбранные вложения были успешно удалены.";
$l['success_orphan_deleted'] = "Выбранные осиротевшие вложения были успешно удалены.";
$l['success_count'] = "{1} прикреплённый файл(ы) успешно удалены.";
$l['success_no_orphans'] = "Нет осиротевших вложений на вашем форуме.";

// Confirm
$l['confirm_delete'] = "Вы уверены, что хотите удалить выбранные вложения?";

// == Pages
// = Stats
$l['general_stats'] = "Общая статистика";
$l['stats_attachment_stats'] = "Вложения - Статистика вложений";
$l['num_uploaded'] = "<strong>Нет. Загрузить вложения</strong>";
$l['space_used'] = "<strong>Используемое пространство для вложений </strong>";
$l['bandwidth_used'] = "<strong>Расчетное использование полосы пропускания</strong>";
$l['average_size'] = "<strong>Средний размер вложений </strong>";
$l['size'] = "Размер";
$l['posted_by'] = "Сообщение от";
$l['thread'] = "Тема";
$l['downloads'] = "Скачали";
$l['date_uploaded'] = "Дата загрузки";
$l['popular_attachments'] = "Топ-5 самых популярных вложений";
$l['largest_attachments'] = "Топ-5 самых крупных вложений";
$l['users_diskspace'] = "Топ 5 пользователей, использующих наибольшее пространство диска";
$l['username'] = "Имя пользователя";
$l['total_size'] = "Общий размер";

// = Orphans
$l['orphan_results'] = "Поиск потерянных вложений - Результаты";
$l['orphan_attachments_search'] = "Поиск потерянных вложений";
$l['reason_orphaned'] = "Причина поиска";
$l['reason_not_in_table'] = "Не в таблице вложений";
$l['reason_file_missing'] = "Прикрепленный файл отсутствует";
$l['reason_thread_deleted'] = "Тема была удалена";
$l['reason_post_never_made'] = "Сообщение никогда не делали";
$l['unknown'] = "Неизвестно";
$l['results'] = "Результаты";
$l['step1'] = "Шаг 1";
$l['step2'] = "Шаг 2";
$l['step1of2'] = "Шаг 1 из 2 - Сканирование файловой системы";
$l['step2of2'] = "Шаг 2 из2 -Сканирование БД";
$l['step1of2_line1'] = "Пожалуйста, подождите, файловая система в настоящее время проверяется на наличие осиротевших вложений.";
$l['step2of2_line1'] = "Пожалуйста, подождите, база данных в настоящее время проверяется на наличие осиротевших вложений.";
$l['step_line2'] = "Вы будете автоматически перенаправлены к следующему шагу, как только этот процесс будет завершен.";
$l['scanning'] = "Сканирование ..";

// = Attachments / Index
$l['index_find_attachments'] = "Вложения - Найти вложения";
$l['find_where'] = "Найти вложения, где ...";
$l['name_contains'] = "Имя файла содержит";
$l['name_contains_desc'] = "Для поиска любого символа введите *.[расширение файла]. Например: *.zip.";
$l['type_contains'] = "Тип файла содержит";
$l['forum_is'] = "Forum is";
$l['username_is'] = "Имя публикующего пользователя ";
$l['poster_is'] = "Poster is";
$l['poster_is_either'] = "Пользователь или Гость";
$l['poster_is_user'] = "Только для пользователей";
$l['poster_is_guest'] = "Только для гостей";
$l['more_than'] = "Более чем";
$l['greater_than'] = "Больше, чем";
$l['is_exactly'] = "Если соответсвует";
$l['less_than'] = "Менее, чем";
$l['date_posted_is'] = "Дата публикации";
$l['days_ago'] = "дней назад";
$l['file_size_is'] = "Размер файла ";
$l['kb'] = "KB";
$l['download_count_is'] = "Счетчик загрузок равен";
$l['display_options'] = "Показать варианты";
$l['filename'] = "Имя файла";
$l['filesize'] = "Размер файла";
$l['download_count'] = "Количество скачиваний";
$l['post_username'] = "Имя пользователя автора";
$l['asc'] = "По возрастанию";
$l['desc'] = "По убыванию";
$l['sort_results_by'] = "Сортировать результаты по";
$l['results_per_page'] = "Результатов на странице:";
$l['in'] = "в";

// Buttons
$l['button_delete_orphans'] = "Удалить отмеченные сироты";
$l['button_delete_attachments'] = "Удалить выбранные вложения";
$l['button_find_attachments'] = "Найти вложения";
