<?php
/**
 * MyBB 1.8 Russian Language Pack
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 */

/* INSTALL LANGUAGE VARIABLES */
$l['none'] = 'None';
$l['not_installed'] = 'Не установлено';
$l['installed'] = 'Установлено';
$l['not_writable'] = 'недоступно для записи';
$l['writable'] = 'доступно для записи';
$l['done'] = 'успешно';
$l['next'] = 'Далее';
$l['error'] = 'Ошибка';
$l['multi_byte'] = 'Multi-Byte';
$l['recheck'] = 'Перепроверить';

$l['title'] = "Инсталлятор MyBB";
$l['welcome'] = 'Добро пожаловать';
$l['license_agreement'] = 'Согласие с лицензией';
$l['req_check'] = 'Проверка требований';
$l['db_config'] = 'Конфигурация БД';
$l['table_creation'] = 'Создание таблиц';
$l['data_insertion'] = 'Занесение данных';
$l['theme_install'] = 'Установка темы';
$l['board_config'] = 'Конфигурация доски';
$l['admin_user'] = 'Админ';
$l['finish_setup'] = 'Окончание установки';
$l['upgrade_complete'] = 'Обновление завершено';
$l['table_population'] = 'Наполнение таблиц';
$l['theme_installation'] = 'Прописывание темы';
$l['create_admin'] = 'Создание аккаунта Администратора';

$l['already_installed'] = "MyBB уже установлен";
$l['mybb_already_installed'] = "<p>Добро пожаловать в установщик MyBB {1}. MyBB был обнаружен и этот каталог уже настроен.</p>
<p>Пожалуйста, выберите подходящее действие ниже:</p>

<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>Обновить мою существующую копию MyBB до {1} <span style=\"font-size: 80%; color: maroon;\">(Рекомендуется)</span></h3>
	<p>Эта опция позволит обновить текущую версию MyBB до MyBB {1}.</p>
	<p>Вы должны выбрать эту опцию, если вы хотите сохранить ваши текущие темы на форуме, сообщения, пользователей и другую информацию.</p>
	<form method=\"post\" action=\"upgrade.php\">
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"Обновить до MyBB {1} &raquo;\" /></div>
	</form>
</div>

<div style=\"padding: 4px;\">
	<h3>Установить новую копию MyBB</h3>
	<p>Эта опция <span style=\"color: red;\">удалит все существующие настроенные форумы</span> и установит чистый MyBB.</p>
	<p>Вы должны выбрать эту опцию для удаления существующей копии MyBB, если вы хотите начать снова.</p>
	<form method=\"post\" action=\"index.php\" onsubmit=\"return confirm('Вы уверены, что хотите установить новую копию MyBB?\\n\\nЭто приведет к удалению существующих форумов. ЭТОТ ПРОЦЕСС НЕВОЗМОЖНО ВЕРНУТЬ.');\">
		<input type=\"hidden\" name=\"action\" value=\"intro\" />
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"Установить MyBB {1} &raquo;\" /></div>
	</form>
</div>";

$l['mybb_incorrect_folder'] = "<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>MyBB обнаружил, что он работает из \"Upload\" каталога.</h3>
	<p>Хотя нет ничего плохого в этом, рекомендуется, чтобы ваше содержимое загружалось в \"Upload\" каталог, а не сам каталог.<br /><br />Для дополнительной информации смотрите <a href=\"http://docs.mybb.com/Help-Upload_Directory.html\" target=\"_blank\">MyBB Docs</a>.</p>
</div>";

$l['welcome_step'] = '<p>Добро пожаловать в установщик форума MyBB {1}. Этот мастер будет установит и настроит копию MyBB на вашем сервере.</p>
<p>Теперь, когда вы загрузили файлы MyBB  , должны быть созданы и импортированы настройки. Ниже приведено краткое описание того, что произойдёт во время установки.</p>
<ul>
	<li>Проверка требований MyBB</li>
	<li>Конфигурирование базы данных</li>
	<li>Создание таблиц базы данных</li>
	<li>Занесений данных по умолчанию </li>
	<li>Импортирование тем и шаблонов по умолчанию</li>
	<li>Создание учетной записи администратора для управления вашим форумом</li>
	<li>Конфигурация базовых настроек форума</li>
</ul>
<p>После того, как каждый шаг был успешно завершен, нажмите кнопку Далее, чтобы перейти к следующему шагу.</p>
<p>Нажмите "Далее" для просмотра лицензионного соглашения MyBB.</p>
<p><input type="checkbox" name="allow_anonymous_info" value="1" id="allow_anonymous" checked="checked" /> <label for="allow_anonymous"> Отправлять анонимную статистику о спецификации сервера в MyBB Group</label> (<a href="http://docs.mybb.com/Anonymous_Statistics.html" style="color: #555;" target="_blank"><small>какая информация отправляется?</small></a>)</p>';

$l['license_step'] = '<div class="license_agreement">
{1}
</div>
<p><strong>Нажав кноку "Далее", вы соглашаетесь с условиями, изложенными c лицензионным соглашением MyBB.</strong></p>';


$l['req_step_top'] = '<p>Перед тем, как можно установить MyBB, мы должны проверить, что есть соответствие минимальным требованиям для установки.</p>';
$l['req_step_reqtable'] = '<div class="border_wrapper">
			<div class="title">Проверка требований</div>
		<table class="general" cellspacing="0">
		<thead>
			<tr>
				<th colspan="2" class="first last">Требования</th>
			</tr>
		</thead>
		<tbody>
		<tr class="first">
			<td class="first">версия PHP:</td>
			<td class="last alt_col">{1}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Поддержка расширений базы данных:</td>
			<td class="last alt_col">{2}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Поддержка расширений переводов :</td>
			<td class="last alt_col">{3}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">расширение PHP XML:</td>
			<td class="last alt_col">{4}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Доступность для записи файла конфигурации:</td>
			<td class="last alt_col">{5}</td>
		</tr>
		<tr>
			<td class="first">Доступность для записи файла параметров:</td>
			<td class="last alt_col">{6}</td>
		</tr>
		<tr>
			<td class="first">Доступность для записи директории Cache:</td>
			<td class="last alt_col">{7}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Доступность для записи директории для загрузки файлов:</td>
			<td class="last alt_col">{8}</td>
		</tr>
		<tr class="last">
			<td class="first">Доступность для записи  директории Аватаров:</td>
			<td class="last alt_col">{9}</td>
		</tr>
		</tbody>
		</table>
		</div>';
$l['req_step_reqcomplete'] = '<p><strong>Поздравляем, есть соответствие требованиям для запуска MyBB.</strong></p>
<p>Нажмите кнопку "Далее", чтобы продолжить процесс установки.</p>';

$l['req_step_span_fail'] = '<span class="fail"><strong>{1}</strong></span>';
$l['req_step_span_pass'] = '<span class="pass">{1}</span>';

$l['req_step_error_box'] = '<p><strong>{1}</strong></p>';
$l['req_step_error_phpversion'] = 'MyBB требует PHP 5.2.0 или более поздней версии для запуска. У вас установлен {1}.';
$l['req_step_error_dboptions'] = 'MyBB требуется один или несколько подходящих расширений базы данных,которые следует установить. Ваш сервер сообщает, что ни один не был доступен.';
$l['req_step_error_xmlsupport'] = 'MyBB требует чтобы PHP был скомпилирован с поддержкой  XML Data Handling. Пожалуйста, смотрите <a href="http://www.php.net/xml" target="_blank">PHP.net</a> для дополнительной информации.';
$l['req_step_error_configdefaultfile'] = 'Файл конфигрурации (inc/config.default.php) не может быть переименован. Пожалуйста, переименуйте вручную файл <u>config.default.php</u> в <u>config.php</u> с правом записи в него или обратитесь в <a href="http://www.mybb.com/support" target="_blank">MyBB Поддержку.</a>';
$l['req_step_error_configfile'] = 'Файл конфигурации (inc/config.php) не имеет прав на запись. Пожалуйста, настройте <a href="http://docs.mybb.com/CHMOD_Files.html" target="_blank">chmod</a> разрешения для записи.';
$l['req_step_error_settingsfile'] = 'Файл параметров (inc/settings.php) не имеет прав на запись. Пожалуйста, настройте <a href="http://docs.mybb.com/CHMOD_Files.html" target="_blank">chmod</a> разрешения для записи.';
$l['req_step_error_cachedir'] = 'Директория кэша (cache/) не имеет прав на запись. Пожалуйста, настройте <a href="http://docs.mybb.com/CHMOD_Files.html" target="_blank">chmod</a> разрешения для записи.';
$l['req_step_error_uploaddir'] = 'Директория загрузок (uploads/) не имеет прав на запись. Пожалуйста, настройте <a href="http://docs.mybb.com/CHMOD_Files.html" target="_blank">chmod</a> разрешения для записи.';
$l['req_step_error_avatardir'] = 'Директория аватаров (uploads/avatars/) не имеет прав на запись. Пожалуйста, настройте <a href="http://docs.mybb.com/CHMOD_Files.html" target="_blank">chmod</a> разрешения для записи.';
$l['req_step_error_cssddir'] = 'Директория таблиц стилей (css/) не имеет прав на запись. Пожалуйста, настройте <a href="http://docs.mybb.com/CHMOD_Files.html" target="_blank">chmod</a> разрешения для записи.';
$l['req_step_error_tablelist'] = '<div class="error">
<h3>Ошибка</h3>
<p>При выполнении MyBB проверка требований не удалась  из-за следующих причин. Установка MyBB не может продолжаться, поскольку вы не отвечаете требованиям MyBB. Пожалуйста, исправьте ошибки ниже и попробуйте еще раз:</p>
{1}
</div>';


$l['db_step_config_db'] = '<p>Сейчас настало время для настройки базы данных, которую будет использовать MyBB, а также указать ваши данные аутентификации для базы данных. Если у вас нет этой информации, её, как правило,  можно получить у вашего веб-хостинга.</p>';
$l['db_step_config_table'] = '<div class="border_wrapper">
<div class="title">Конфигурация базы данных</div>
<table class="general" cellspacing="0">
<tr>
	<th colspan="2" class="first last">Параметры базы данных</th>
</tr>
<tr class="first">
	<td class="first"><label for="dbengine">Движок базы данных:</label></td>
	<td class="last alt_col"><select name="dbengine" id="dbengine" onchange="updateDBSettings();">{1}</select></td>
</tr>
{2}
</table>
</div>
<p>После проверки на корректность этих данных нажмите кнопку Далее для продолжения.</p>';

$l['database_settings'] = "Параметры базы данных";
$l['database_path'] = "Путь БД:";
$l['database_host'] = "Имя хоста БД:";
$l['database_user'] = "Пользователь БД:";
$l['database_pass'] = "Пароль БД:";
$l['database_name'] = "Имя БД:";
$l['table_settings'] = "Параметры таблиц";
$l['table_prefix'] = "Префикс таблиц:";
$l['table_encoding'] = "Кодировка таблиц:";

$l['db_step_error_config'] = '<div class="error">
<h3>Ошибка</h3>
<p>Здесь, кажется, одна или несколько ошибок с информацией о конфигурации базы данных, которую вы предоставили:</p>
{1}
<p>После исправления продолжите установку.</p>
</div>';
$l['db_step_error_invalidengine'] = 'Вы выбрали неверный движок базы данных. Пожалуйста, сделайте свой выбор из списка ниже.';
$l['db_step_error_noconnect'] = 'Не удалось подключиться к серверу базы данных в \'{1}\' с помощью данного имени пользователя и пароля. Вы уверены, что имя хоста и пользовательские данные верны?';
$l['db_step_error_nodbname'] = 'Невозможно выбрать базу данных \'{1}\'. Вы уверены, что она существует, и указанно правильное имя пользователя и пароль доступа к ней?';
$l['db_step_error_missingencoding'] = 'Вы еще не выбрали кодировку. Пожалуйста, убедитесь, что вы выбрали кодировку, прежде чем продолжить. (Выберите \'UTF-8 Unicode\' если вы не уверены)';
$l['db_step_error_sqlite_invalid_dbname'] = 'Вы не можете использовать относительные URL-адреса для SQLite баз данных. Пожалуйста, используйте путь файловой системы (например: /home/user/database.db) для базы данных SQLite.';
$l['db_step_error_invalid_tableprefix'] = 'Вы можете использовать только подчеркивание (_) и буквенно-цифровые символы в префиксе таблицы. Используйте правильный префикс перед продолжением.';
$l['db_step_error_tableprefix_too_long'] = 'Вы можете использовать только префикс таблицы длиной 40 символов или менее. Пожалуйста, используйте более короткий префикс перед продолжением.';
$l['db_step_error_utf8mb4_error'] = '\'4-Byte UTF-8 Unicode\' требует MySQL 5.5.3 или выше.Пожалуйста, выберите кодировку, совместимую с вашей MySQL версией.';

$l['tablecreate_step_connected'] = '<p>Подключение к серверу базы данных и к указанной базе данных было успешным.</p>
<p>Движок БД: {1} {2}</p>
<p>Теперь будут созданы таблицы базы данных MyBB.</p>';
$l['tablecreate_step_created'] = 'Создание таблицы {1}...';
$l['tablecreate_step_done'] = '<p>Все таблицы были созданы, нажмите кнопку Далее, чтобы заполнить их.</p>';

$l['populate_step_insert'] = '<p>Теперь, когда основные таблицы были созданы, пришло время, чтобы вставить данные по умолчанию.</p>';
$l['populate_step_inserted'] = '<p>Данные по умолчанию успешно были занесены в базу данных. Нажмите кнопку Далее для вставки  шаблона и темы MyBB по умолчанию.</p>';


$l['theme_step_importing'] = '<p>Загрузка и импортирование темы и файла шаблона...</p>';
$l['theme_step_imported'] = '<p>Тема и шаблон по умолчанию  были успешно вставлены. Нажмите Далее, чтобы настроить основные параметры для вашей доски форума.</p>';


$l['config_step_table'] = '<p>Сейчас настало время для вас, чтобы настроить основные параметры для ваших форумов, таких как название форума, URL, данные вашего вебсайта, вместе с "cookie" домена и пути. Эти параметры могут быть легко изменены в будущем с помощью панели управления администратора MyBB.</p>
		<div class="border_wrapper">
			<div class="title">Конфигурация форума</div>
			<table class="general" cellspacing="0">
				<tbody>
				<tr>
					<th colspan="2" class="first last">Информация о форуме</th>
				</tr>
				<tr class="first">
					<td class="first"><label for="bbname">Наименование форума:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bbname" id="bbname" value="{1}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="bburl">URL форума (без завершающего слэша):</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bburl" id="bburl" value="{2}" onkeyup="warnUser(this, \'Этот параметр был установлен автоматически. Не изменяйте его, если вы не уверены в правильном значении, в противном случае ссылки на ваш форум могут быть нарушены.\')" onchange="warnUser(this, \'Этот параметр был установлен автоматически. Не изменяйте его, если вы не уверены в правильном значении, в противном случае ссылки на ваш форум могут быть нарушены.\')" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Информация о сайте</th>
				</tr>
				<tr>
					<td class="first"><label for="websitename">Имя вебсайта:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="websitename" id="websitename" value="{3}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="websiteurl">URL вебсайта:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="websiteurl" id="websiteurl" value="{4}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Параметры Cookie <a title="What\'s this?" target="_blank" href="http://docs.mybb.com/Cookie_Settings.html">(?)</a></th>
				</tr>
				<tr>
					<td class="first"><label for="cookiedomain">Cookie домена:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiedomain" id="cookiedomain" value="{5}" onkeyup="warnUser(this, \'Этот параметр был установлен автоматически. Не изменяйте его, если вы не уверены в правильном значении, в противном случае вход в систему на вашем форуме может быть нарушен.\')" onchange="warnUser(this, \'Этот параметр был установлен автоматически. Не изменяйте его, если вы не уверены в правильном значении, в противном случае вход в систему на вашем форуме может быть нарушен.\')" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="cookiepath">Путь Cookie:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiepath" id="cookiepath" value="{6}" onkeyup="warnUser(this, \'Этот параметр был установлен автоматически. Не изменяйте его, если вы не уверены в правильном значении, в противном случае вход в систему на вашем форуме может быть нарушен.\')" onchange="warnUser(this, \'Этот параметр был установлен автоматически. Не изменяйте его, если вы не уверены в правильном значении, в противном случае вход в систему или на вашем форуме может быть нарушен.\')" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Контактная информация</th>
				</tr>
				<tr class="last">
					<td class="first"><label for="contactemail">Контактный Email:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="contactemail" id="contactemail" value="{7}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Установки безопасности:</th>
				</tr>
				<tr class="last">
					<td class="first"><label for="acppin">ACP PIN:</label><br />Оставьте пустым, если не знаете</td>
					<td class="last alt_col"><input type="password" class="text_input" name="pin" id="acppin" value="" /></td>
				</tr>
				</tbody>
			</table>
		</div>

	<p>После проверки на корректность этих данных нажмите кнопку Далее для продолжения.</p>';

$l['config_step_error_config'] = '<div class="error">
<h3>Ошибка</h3>
<p>Здесь, кажется, одна или несколько ошибок в конфигурации данных форумов, которые вы предоставили:</p>
{1}
<p>После исправления продолжите установку.</p>
</div>';
$l['config_step_error_url'] = 'Вы не ввели URL вашего форума.';
$l['config_step_error_name'] = 'Вы не ввели имя вашей копии MyBB.';
$l['config_step_revert'] = 'Нажмите для возврата этого параметра к исходному значению.';


$l['admin_step_setupsettings'] = '<p>Настройка основных параметров доски форумов...</p>';
$l['admin_step_insertesettings'] = '<p>Вставлено{1} параметров в {2} групп(ы).</p>
<p>Обновление значений настроек,определенных пользователем.</p>';
$l['admin_step_insertedtasks'] = '<p>Вставлено {1} задач по расписанию.</p>';
$l['admin_step_insertedviews'] = '<p>Вставлено {1} admin views.</p>';
$l['admin_step_createadmin'] ='<p>Вам нужно создать вашу начальную учетную запись администратора , чтобы войти в систему и управлять вашей копией MyBB. Пожалуйста, заполните необходимые поля ниже, чтобы создать эту учетную запись.</p>';
$l['admin_step_admintable'] = '<div class="border_wrapper">
			<div class="title">Параметры аккаунта Администратора</div>

		<table class="general" cellspacing="0">
		<thead>
		<tr>
			<th colspan="2" class="first last">Параметры аккаунта</th>
		</tr>
		</thead>
		<tr class="first">
			<td class="first"><label for="adminuser">Имя пользователя:</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminuser" id="adminuser" value="{1}" /></td>
		</tr>
		<tr class="alt_row">
			<td class="first"><label for="adminpass">Пароль:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass" id="adminpass" value="" autocomplete="off" onchange="comparePass()" /></td>
		</tr>
		<tr class="last">
			<td class="first"><label for="adminpass2">Повтор пароля:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass2" id="adminpass2" value="" autocomplete="off" onchange="comparePass()"  /></td>
		</tr>
		<tr>
			<th colspan="2" class="first last">Контактная информация:</th>
		</tr>
		<tr class="first last">
			<td class="first"><label for="adminemail">Адрес Email:</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminemail" id="adminemail" value="{2}" /></td>
		</tr>
	</table>
	</div>

	<p>После проверки на корректность этих данных нажмите кнопку Далее для продолжения.</p>';

$l['admin_step_error_config'] = '<div class="error">
<h3>Ошибка</h3>
<p>Здесь, кажется, одна или несколько ошибок с конфигурацией доски форумов, которую вы предоставили:</p>
{1}
<p>После исправления продолжите установку.</p>
</div>';
$l['admin_step_error_nouser'] = 'Вы не ввели имя пользователя для учетной записи администратора.';
$l['admin_step_error_nopassword'] = 'Вы не ввели пароль для учетной записи администратора.';
$l['admin_step_error_nomatch'] = 'Введенные пароли не совпадают.';
$l['admin_step_error_noemail'] = 'Вы не ввели свой адрес email для учетной записи администратора.';
$l['admin_step_nomatch'] = ' Повтор пароля не совпадает с паролем из первого поля. Пожалуйста, исправьте перед продолжением';

$l['done_step_usergroupsinserted'] = "<p>Импорт групп пользователей...";
$l['done_step_admincreated'] = '<p>Создание аккаунта Администратора...';
$l['done_step_adminoptions'] = '<p>Построение прав Администратора...';
$l['done_step_cachebuilding'] = '<p>Построение кэша данных...';
$l['done_step_success'] = '<p class="success">Ваша копия MyBB была успешно установлена и корректно сконфигурирована.</p>
<p> MyBB Group благодарит вас за вашу поддержку в установке нашего программного обеспечения, и мы надеемся увидеть вас на <a href="http://community.mybb.com/" target="_blank">Форуме сообщества</a> если вам нужна помощь или вы хотите стать частью MyBB сообщества.</p>';
$l['done_step_locked'] = '<p>Ваш инсталятор был заблокирован. Для разблокировки мастера установки , пожалуйста, удалите файл \'lock\'  в директории мастера установки.</p><p>Теперь вы можете перейти к вашей копии <a href="../index.php">MyBB</a> или зайти в <a href="../admin/index.php">Панель управления администратора</a>.</p>';
$l['done_step_dirdelete'] = '<p><strong><span style="color:red">Пожалуйста, удалите эту директорию перед тем как начать.</span></strong></p>';
$l['done_whats_next'] = '<div class="error"><p><strong>Перейти с другого скрипта форума?</strong></p><p>MyBB предлагает систему слияния для легкого слияния нескольких форумов из различного программного обеспечения популярных форумов, позволяя легкий процесс преобразования в MyBB. Если вы хотите переключиться на MyBB, вы движетесь в правильном направлении! Проверьте <a target="_blank" href="http://www.mybb.com/downloads/merge-system">Систему сляиния</a> для получения дополнительной информации.</p>';

/* UPGRADE LANGUAGE VARIABLES */
$l['upgrade'] = "Процесс обновления";
$l['upgrade_welcome'] = "<p>Добро пожаловать в мастер обновления MyBB {1}.</p><p>Прежде чем продолжить, убедитесь, что вы знаете, какую версию MyBB вы ранее устанавливали, т.к. как вам нужно будет выбрать её ниже.</p><p><strong>Мы настоятельно рекомендуем вам также сделать полную резервную копию вашей базы данных и файлов, прежде чем пытаться обновить</strong> , так как, если что-то пойдет не так, вы можете легко вернуться к предыдущей версии.  Кроме того, убедитесь, что ваши резервные копии будут сделаны полностью, прежде чем продолжить.</p><p>Убедитесь, что вы однократно нажимаете Далее на каждом шаге процесса обновления. Загрузка страницы может занять некоторое время, это зависит от размера вашего форума.</p><p>После того, как вы будете готовы, пожалуйста, выберите старую версию ниже, и нажмите кнопку Далее для продолжения.</p>";
$l['upgrade_templates_reverted'] = 'Возврат шаблонов';
$l['upgrade_templates_reverted_success'] = "<p>Все шаблоны были успешно возвращены к новым, которые содержатся в этом выпуске. Пожалуйста, нажмите Далее, чтобы продолжить процесс обновления.</p>";
$l['upgrade_settings_sync'] = 'Параметры синхронизации';
$l['upgrade_settings_sync_success'] = "<p>Параметры доски форумов были синхронизированы с последним в MyBB.</p><p>{1} новых настроек, вставлены вместе с {2} новыми параметрами групп.</p><p>Для завершения обновления, пожалуйста, нажмите кнопку Далее, чтобы продолжить.</p>";
$l['upgrade_datacache_building'] = 'Построение данных кэша';
$l['upgrade_building_datacache'] = '<p>Создание кэша...';
$l['upgrade_continue'] = 'Пожалуйста, нажмите Далее для продолжения';
$l['upgrade_locked'] = "<p>Этот инсталлятор был заблокирован. Чтобы разблокировать программу установки, пожалуйста, удалите файл \'lock\' в каталоге.</p><p>Теперь вы можете перейти на сайт <a href=\"../index.php\">MyBB</a> или в <a href=\"../{1}/index.php\">Панель управления Администратора</a>.</p>";
$l['upgrade_removedir'] = 'Пожалуйста, удалите эту директорию перед осмотром вашего обновления MyBB.';
$l['upgrade_congrats'] = "<p>Поздравляем, ваша копия MyBB была успешно обновлена до {1}.</p>{2}<p><strong>Что дальше?</strong></p><ul><li>Пожалуйста, используйте инструмент 'Найти обновления шаблонов'  в админпанели, чтобы найти настроенные шаблоны во время этого процесса обновления. Отредактируйте содержимое изменённых или восстановите их оригиналы.</li><li>Убедитесь, что ваша доска форумов по-прежнему полностью функциональна.</li></ul>";
$l['upgrade_template_reversion'] = "Предупреждение о резервировании шаблона";
$l['upgrade_template_reversion_success'] = "<p>Все необходимые изменения базы данных были успешно сделаны для обновления доски форумов.</p><p>Это обновление требует, чтобы все шаблоны,которые содержатся в пакете, будут перезаписаны,  поэтому, пожалуйста, сделайте резервную копию всех пользовательских шаблонов, которые вы сделали, прежде чем нажимать дальше.";
$l['upgrade_send_stats'] = "<p><input type=\"checkbox\" name=\"allow_anonymous_info\" value=\"1\" id=\"allow_anonymous\" checked=\"checked\" /> <label for=\"allow_anonymous\"> Отправить анонимную статистику об параметрах сервера в MyBB Group</label> (<a href=\"http://docs.mybb.com/Anonymous_Statistics.html\" style=\"color: #555;\" target=\"_blank\"><small>Какая информация отправляется?</small></a>)</p>";

$l['please_login'] = "Пожалуйста, войдите";
$l['login'] = "Вход";
$l['login_desc'] = "Пожалуйста, введите ваш логин и пароль, чтобы начать процесс обновления. Вы должны быть действительным администратором форума для выполнения обновления.";
$l['login_username'] = "Имя пользователя";
$l['login_password'] = "Пароль";
$l['login_password_desc'] = "Обратите внимание, что пароли чувствительны к регистру.";

/* Error messages */
$l['development_preview'] = "<div class=\"error\"><h2 class=\"fail\">Внимание</h2><p>Эта версия MyBB предназначена для разработки и должна использоваться только для целей тестирования.</p><p>Официальной поддержки нет, кроме как для плагинов и  темы, и не будет предоставляться для этой версии. Продолжая эту установку / обновление, вы делаете это на свой страх и риск.</p></div>";
$l['locked'] = 'Этот мастер установки был заблокирован,пожалуйста, удалите файл \'lock\' из категории инсталлятора для продолжения';
$l['no_permision'] = "У вас нет прав для запуска этого процесса. Вам нужны права администратора, чтобы иметь возможность запустить процедуру обновления.<br /><br />Если вам необходимо выйти из системы, пожалуйста, нажмите <a href=\"upgrade.php?action=logout&amp;logoutkey={1}\">здесь</a>. Оттуда вы сможете снова войти в систему под учетной записью администратора.";
$l['no_theme_functions_file'] = 'Файл функций темы не найден. Убедитесь, что все файлы загружены правильно.';
$l['task_versioncheck_ran'] = "Задача проверки версии выполнена успешно.";

