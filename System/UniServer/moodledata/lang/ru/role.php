<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'role', language 'ru', branch 'MOODLE_22_STABLE'
 *
 * @package   role
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addinganewrole'] = 'Добавить новую роль';
$string['addingrolebycopying'] = 'Добавление новой роли, основанной на {$a}';
$string['addrole'] = 'Добавить новую роль';
$string['advancedoverride'] = 'Расширенное переопределение роли';
$string['allow'] = 'Дать право';
$string['allowassign'] = 'Разрешить назначение ролей';
$string['allowed'] = 'Разрешено';
$string['allowoverride'] = 'Разрешить переопределение ролей';
$string['allowroletoassign'] = 'Разрешить пользователям с ролью "{$a->fromrole}" назначать роль "{$a->targetrole}"';
$string['allowroletooverride'] = 'Разрешить пользователям с ролью "{$a->fromrole}" переопределять роль "{$a->targetrole}"';
$string['allowroletoswitch'] = 'Разрешить пользователям с ролью {$a->fromrole} переключаться на роль {$a->targetrole}';
$string['allowswitch'] = 'Разрешить переключение между ролями';
$string['allsiteusers'] = 'Все пользователи сайта';
$string['archetype'] = 'Прототип роли';
$string['archetypecoursecreator'] = 'ПРОТОТИП: Создатель курса';
$string['archetypeeditingteacher'] = 'ПРОТОТИП: Учитель (редактирующий)';
$string['archetypefrontpage'] = 'ПРОТОТИП: Аутентифицированный пользователь на главной странице';
$string['archetypeguest'] = 'ПРОТОТИП: Гость';
$string['archetype_help'] = 'Прототип роли определяет соответствующие права, если роль сбрасывается к настройкам по умолчанию. От этого параметра также зависят новые права для роли, появляющиеся при обновлении сайта.';
$string['archetypemanager'] = 'ПРОТОТИП: Управляющий';
$string['archetypestudent'] = 'ПРОТОТИП: Студент';
$string['archetypeteacher'] = 'ПРОТОТИП: Ассистент (нередактирующий преподаватель)';
$string['archetypeuser'] = 'ПРОТОТИП: Аутентифицированный пользователь';
$string['assignanotherrole'] = 'Назначить другую роль';
$string['assignedroles'] = 'Назначенные роли';
$string['assignerror'] = 'Ошибка при назначения пользователю "{$a->user}" роли "{$a->role}".';
$string['assignglobalroles'] = 'Назначить глобальные роли';
$string['assignmentcontext'] = 'Контекст назначения';
$string['assignmentoptions'] = 'Варианты назначения';
$string['assignrole'] = 'Назначить роль';
$string['assignrolenameincontext'] = 'Назначить роль "{$a->role}" в контексте "{$a->context}"';
$string['assignroles'] = 'Назначить роли';
$string['assignroles_help'] = 'Назначая роль пользователю, Вы предоставляете ему права, определённые в этой роли, для текущего уровня (контекста) и всех "более низких" уровней.
Например, если пользователю назначается роль студента в контексте курсе, то он также будет иметь роль студента во всех элементах и блоках курса.';
$string['assignrolesin'] = 'Назначить роли в {$a}';
$string['assignrolesrelativetothisuser'] = 'Назначить роли этому пользователю';
$string['backtoallroles'] = 'Вернуться к списку всех ролей';
$string['backup:anonymise'] = 'Делать данные пользователей анонимными при резервном копировании';
$string['backup:backupactivity'] = 'Осуществлять резервное копирование элементов курса';
$string['backup:backupcourse'] = 'Осуществлять резервное копирование курсов';
$string['backup:backupsection'] = 'Осуществлять резервное копирование разделов';
$string['backup:backuptargethub'] = 'Осуществлять резервное копирование для каталога';
$string['backup:backuptargetimport'] = 'Осуществлять резервное копирование для импорта';
$string['backup:configure'] = 'Настраивать параметры резервного копирования';
$string['backup:downloadfile'] = 'Скачать файлы из резервной области';
$string['backup:userinfo'] = 'Осуществлять резервное копирование данных пользователей';
$string['block:edit'] = 'Редактировать настройки блока';
$string['block:view'] = 'Видеть блок';
$string['blog:associatecourse'] = 'Связывать записи блога с курсами';
$string['blog:associatemodule'] = 'Связывать записи блога с элементами курса';
$string['blog:create'] = 'Создавать записи в блоге';
$string['blog:manageentries'] = 'Редактировать записи блога и управлять ими';
$string['blog:manageexternal'] = 'Редактировать записи во внешних блогах и управлять ими';
$string['blog:manageofficialtags'] = 'Управлять официальными тегами';
$string['blog:managepersonaltags'] = 'Управлять персональными тегами';
$string['blog:search'] = 'Осуществлять поиск по записям блогов';
$string['blog:view'] = 'Просматривать записи блогов';
$string['blog:viewdrafts'] = 'Просматривать черновики записей блогов';
$string['calendar:manageentries'] = 'Управлять записями любых календарей';
$string['calendar:managegroupentries'] = 'Управлять записями групп в календарях';
$string['calendar:manageownentries'] = 'Управлять записями в своём календаре';
$string['capabilities'] = 'Права';
$string['capability'] = 'Право';
$string['category:create'] = 'Создавать категории';
$string['category:delete'] = 'Удалять категории';
$string['category:manage'] = 'Управлять категориями';
$string['category:update'] = 'Редактировать категории';
$string['category:viewhiddencategories'] = 'Просматривать скрытые категории';
$string['category:visibility'] = 'Просматривать скрытые категории';
$string['checkglobalpermissions'] = 'Проверить права доступа';
$string['checkpermissions'] = 'Проверить права';
$string['checkpermissionsin'] = 'Проверить права в {$a}';
$string['checksystempermissionsfor'] = 'Проверить системные права для пользователя "{$a->fullname}"';
$string['checkuserspermissionshere'] = 'Проверить права пользователя "{$a->fullname}" в этом контексте уровня "{$a->contextlevel}"';
$string['chooseroletoassign'] = 'Выберите назначаемую роль';
$string['cohort:assign'] = 'Добавлять и удалять членов глобальной группы';
$string['cohort:manage'] = 'Создавать, удалять и перемещать глобальные группы';
$string['cohort:view'] = 'Просматривать глобальные группы сайта';
$string['comment:delete'] = 'Удалять комментарии';
$string['comment:post'] = 'Размещать комментарии';
$string['comment:view'] = 'Читать комментарии';
$string['community:add'] = 'Использовать блок сообщества для поиска каталогов и курсов';
$string['community:download'] = 'Скачать курс из блока сообщества';
$string['confirmaddadmin'] = 'Вы действительно хотите добавить пользователя <strong>{$a}</strong> в список администраторов сайта?';
$string['confirmdeladmin'] = 'Вы действительно хотите удалить пользователя <strong>{$a}</strong> из списка администраторов сайта?';
$string['confirmroleprevent'] = 'Вы действительно хотите удалить роль <strong>{$a->role}</strong> из списка ролей, которым дано право "{$a->cap}" в контексте "{$a->context}"?';
$string['confirmroleunprohibit'] = 'Вы действительно хотите удалить <strong>{$a->role}</strong> из списка ролей, которые лишены права "{$a->cap}" в контексте "{$a->context}"?';
$string['confirmunassign'] = 'Вы действительно хотите отозвать эту роль у этого пользователя?';
$string['confirmunassignno'] = 'Отменить';
$string['confirmunassigntitle'] = 'Подтвердите изменение роли';
$string['confirmunassignyes'] = 'Удалить';
$string['context'] = 'Контекст';
$string['course:activityvisibility'] = 'Скрывать/показывать элементы курса';
$string['course:bulkmessaging'] = 'Отправлять сообщения нескольким пользователям';
$string['course:changecategory'] = 'Изменять категорию курса';
$string['course:changefullname'] = 'Изменять полное название курса';
$string['course:changeidnumber'] = 'Изменять ID курса';
$string['course:changeshortname'] = 'Изменять краткое название курса';
$string['course:changesummary'] = 'Изменять описание курса';
$string['course:create'] = 'Создавать курсы';
$string['course:delete'] = 'Удалять курсы';
$string['course:enrolconfig'] = 'Настраивать способы записи на отдельные курсы';
$string['course:enrolreview'] = 'Просматривать участников курса';
$string['course:manageactivities'] = 'Управлять элементами курса';
$string['course:managefiles'] = 'Управлять файлами';
$string['course:managegrades'] = 'Управлять оценками';
$string['course:managegroups'] = 'Управлять группами';
$string['course:managescales'] = 'Управлять шкалами';
$string['course:markcomplete'] = 'Отмечать пользователей как завершивших курс';
$string['course:publish'] = 'Опубликовывать курс в каталоге';
$string['course:request'] = 'Запрашивать создание новых курсов';
$string['course:reset'] = 'Очищать курс';
$string['course:sectionvisibility'] = 'Управлять видимостью разделов';
$string['course:setcurrentsection'] = 'Устанавливать текущий раздел';
$string['course:update'] = 'Измнять установки курса';
$string['course:useremail'] = 'Включать/выключать адреса электронной почты';
$string['course:view'] = 'Просматривать курсы не являясь их участником';
$string['course:viewcoursegrades'] = 'Просматривать оценки курса';
$string['course:viewhiddenactivities'] = 'Просматривать скрытые элементы курсов';
$string['course:viewhiddencourses'] = 'Просматривать скрытые курсы';
$string['course:viewhiddensections'] = 'Просматривать скрытые разделы';
$string['course:viewhiddenuserfields'] = 'Просматривать скрытые поля данных пользователей';
$string['course:viewparticipants'] = 'Просматривать список участников';
$string['course:viewscales'] = 'Просматривать шкалы';
$string['course:visibility'] = 'Скрывать/отображать курсы';
$string['createrolebycopying'] = 'Создать новую роль, скопировав роль "{$a}"';
$string['createthisrole'] = 'Создать роль';
$string['currentcontext'] = 'Текущий контекст';
$string['currentrole'] = 'Текущая роль';
$string['defaultrole'] = 'Роль по умолчанию';
$string['defaultx'] = 'По умолчанию: {$a}';
$string['defineroles'] = 'Определить роли';
$string['deletecourseoverrides'] = 'Удалить все переопределения в курсе';
$string['deletelocalroles'] = 'Удалить все локальные назначения ролей';
$string['deleterolesure'] = 'Вы уверены, что хотите удалить роль "{$a->name} ({$a->shortname}")?</p><p> В настоящее время эта роль назначена {$a->count} пользователю(ям).';
$string['deletexrole'] = 'Удалить роль "{$a}"';
$string['duplicaterole'] = 'Создать копию роли';
$string['duplicaterolesure'] = 'Вы уверены, что хотите создать копию роли "{$a->name} ({$a->shortname})"?';
$string['editingrolex'] = 'Редактирование роли "{$a}"';
$string['editrole'] = 'Редактировать роль';
$string['editxrole'] = 'Редактировать роль "{$a}"';
$string['errorbadrolename'] = 'Некорректное название роли';
$string['errorbadroleshortname'] = 'Неправильное краткое название роли';
$string['errorexistsrolename'] = 'Роль с таким названием уже существует';
$string['errorexistsroleshortname'] = 'Роль с таким кратким названием уже существует';
$string['existingadmins'] = 'Администраторы сайта';
$string['existingusers'] = '{$a} пользователей с этой ролью';
$string['explanation'] = 'Пояснение';
$string['extusers'] = 'Существующие пользователи';
$string['extusersmatching'] = 'Существующие пользователи, соответствующие шаблону "{$a}"';
$string['filter:manage'] = 'Управлять настройками локального фильтра';
$string['frontpageuser'] = 'Аутентифицированный пользователь на главной странице';
$string['frontpageuserdescription'] = 'Все пользователи, вошедшие на главную страницу.';
$string['globalrole'] = 'Роль в системе';
$string['globalroleswarning'] = 'ВНИМАНИЕ! Любая роль, назначенная пользователю на этой странице, будет применяться к нему во всей системе, включая главную страницу и все курсы.';
$string['gotoassignroles'] = 'Перейти к назначению ролей на этом уровне типа "{$a->contextlevel}"';
$string['gotoassignsystemroles'] = 'Перейти к назначению глобальных ролей';
$string['grade:edit'] = 'Редактировать оценки';
$string['grade:export'] = 'Экспортировать оценки';
$string['grade:hide'] = 'Скрывать/отображать оценки или элементы';
$string['grade:import'] = 'Импортировать оценки';
$string['grade:lock'] = 'Блокировать оценки или элементы';
$string['grade:manage'] = 'Управлять элементами оценивания';
$string['grade:manageletters'] = 'Управлять буквенными оценками';
$string['grade:manageoutcomes'] = 'Управлять показателями';
$string['grade:override'] = 'Переопределять оценки';
$string['grade:unlock'] = 'Разблокировать оценки или элементы';
$string['grade:view'] = 'Просматривать свои оценки';
$string['grade:viewall'] = 'Просматривать оценки других пользователей';
$string['grade:viewhidden'] = 'Просматривать скрытые от владельца оценки';
$string['hidden'] = 'Скрыть';
$string['highlightedcellsshowdefault'] = 'Варианты, выделенные в таблице ниже - это значения по умолчанию для указанного выше прототипа роли.';
$string['highlightedcellsshowinherit'] = 'Выделенные ячейки в отображаемой ниже таблице показывают разрешения (если таковые имеются), которые будут унаследованы. Помимо тех прав, разрешение для которых Вы действительно хотите изменить, везде следует оставить значение "Наследовать".';
$string['inactiveformorethan'] = 'неактивные более чем {$a->timeperiod}';
$string['ingroup'] = 'в группе "{$a->group}"';
$string['inherit'] = 'Наследовать';
$string['legacy:admin'] = 'Устаревшая роль: Администратор';
$string['legacy:coursecreator'] = 'Устаревшая роль: Создатель курса';
$string['legacy:editingteacher'] = 'Устаревшая роль: Учитель (с правом редктирования)';
$string['legacy:guest'] = 'Устаревшая роль: Гость';
$string['legacy:student'] = 'Устаревшая роль: Студент';
$string['legacy:teacher'] = 'Устаревшая роль: Ассистент (без права редактирования)';
$string['legacytype'] = 'Соответствующая устаревшая роль (для совместимости)';
$string['legacy:user'] = 'Устаревшая роль: Аутентифицированный пользователь';
$string['listallroles'] = 'Список всех ролей';
$string['localroles'] = 'Локально назначенные роли';
$string['mainadmin'] = 'Главный администратор';
$string['mainadminset'] = 'Назначить главным администратором';
$string['manageadmins'] = 'Управление администраторами сайта';
$string['manager'] = 'Управляющий';
$string['managerdescription'] = 'Управляющие имеют доступ к курсу и могут изменять его. Они, как правило, не участвуют в курсах.';
$string['manageroles'] = 'Управление ролями';
$string['maybeassignedin'] = 'Типы контекста, где эта роль может быть назначена';
$string['morethan'] = 'Более {$a}';
$string['multipleroles'] = 'Несколько ролей';
$string['my:configsyspages'] = 'Настраивать системные шаблоны оформления для страницы "Мой Moodle"';
$string['my:manageblocks'] = 'Управлять блоками страницы "Мой Moodle"';
$string['neededroles'] = 'Роли, которым дано это право';
$string['nocapabilitiesincontext'] = 'Нет прав, доступных в этом контексте';
$string['noneinthisx'] = 'Никого в этом контексте типа "{$a}"';
$string['noneinthisxmatching'] = 'Нет пользователей, соответствующих шаблону "{$a->search}" в этом контексте типа "{$a->contexttype}"';
$string['noroleassignments'] = 'Этому пользователю не назначено ни одной роли нигде на сайте';
$string['noroles'] = 'Нет ролей';
$string['notabletoassignroleshere'] = 'Вы не можете назначить здесь никакую из ролей';
$string['notabletooverrideroleshere'] = 'Вы не можете переопределить права здесь ни для какой из ролей';
$string['notes:manage'] = 'Управлять заметками';
$string['notes:view'] = 'Просматривать заметки';
$string['notset'] = 'Не установлено';
$string['overrideanotherrole'] = 'Переопределить другую роль';
$string['overridecontext'] = 'Контекст переопределения';
$string['overridepermissions'] = 'Переопределение разрешений';
$string['overridepermissionsforrole'] = 'Переопределить разрешения для роли "{$a->role}" в контексте "{$a->context}"';
$string['overridepermissions_help'] = 'Переопределение разрешений позволяет давать и отзывать права в конкретных контекстах.';
$string['overridepermissionsin'] = 'Переопределить разрешения в контексте {$a}';
$string['overrideroles'] = 'Переопределить роли';
$string['overriderolesin'] = 'Переопределить роли в "{$a}"';
$string['overrides'] = 'Переопределения';
$string['overridesbycontext'] = 'Переопределения (в контексте)';
$string['permission'] = 'Разрешение';
$string['permission_help'] = 'Разрешение - это параметр, связанный с правами. Есть 4 варианта:

* Не установлено
* Дать право - право будет дано
* Отозвать право - право будет отозвано, даже если оно было дано на более высоком уровне (контексте)
* Лишить права - право отзывается и не может быть дано на любом нижележащем уровне (контексте)';
$string['permissions'] = 'Права';
$string['permissionsforuser'] = 'Права пользователя "{$a}"';
$string['permissions_help'] = '<h2> Права </h2>

<p>
 Права - это разрешения, которые вы предоставляете для выполнения определенных действий.
</p>

<p>
Например, одно из действий - "Начать новую тему" (на форумах).
</p>

<p>
Для каждой роли вы можете установить разрешение для действия в одно из четырех значений:
<dl>
<dt> НАСЛЕДОВАТЬ </dt>
<dd> Это - установка по умолчанию. Это нейтральная установка -  "использовать любое разрешение, которое пользователь уже имел". Если роль,   назначенная на  уровень курса имеет какое-то разрешение , тогда фактическое разрешение, которое она будет иметь,  будет тем же самым, поскольку наследуется с более высокого уровня (категории или сайта). В конечном счете, если действие не позволяется ни на одном  уровне, тогда пользователь не будет иметь разрешения на это действие.
</dd>
<dt> РАЗРЕШИТЬ </dt>
<dd>Этим вы предоставляете разрешение на это действие  пользователям, которым назначена эта роль. Это разрешение применяется  для уровня, к которому эта роль относится, плюс ко всем "более низким" уровням. Например, если роль "Ученик" относится к курсу, тогда ученики будут в состоянии "начать новые темы"  на ВСЕХ форумах в этом курсе. Если для какого-то форума это не допустимо - выберите для этого действия значение "Предотвратить" или "Запретить". </dd>
<dt> ПРЕДОТВРАТИТЬ</dt>
<dd>Этим вы запрещаете действие, даже если пользователям с этой ролью оно разрешено на более высоком уровне.</dd>
<dt>ЗАПРЕТИТЬ</dt>
<dd> Это редко используется, но иногда вы можете полностью запретить действие для роли, которое не может быть в дальнейшем разрешено на любом более низком уровне. Хороший пример когда это необходимо: администратор хочет запретить одному человеку начинать новые темы на любом форуме на всем сайте. В этом случае он может создать роль с действием "начать новые темы" со значением "Запретить" и затем назначить ее этому пользователю на уровне сайта.
  </dd>
</dl>
</p>
<h3>Конфликты разрешений</h3>
<p> Разрешения "более низких" уровней имеют преимущество над разрешениями "более высоких" уровней (касается применения, исключения и назначения роли). Исключение - значение "ЗАПРЕТИТЬ", которое не может быть заменено на более низких уровнях.</p>
<p> Если две роли будут назначены пользователю на одном и том же уровне, одна со значением "РАЗРЕШИТЬ",а вторая - "ПРЕДОТВРАТИТЬ", какая побеждает? В этом случае берется во внимание более высокий уровень для "решения спора". </p>
<p> Например, ученик имеет две роли в курсе, одна разрешает начать новые темы , а вторая предотвращает их. В этом случае, мы проверяем уровни категории и сайта, определяя значение там. Если мы не находим и там, то используется значение - ПРЕДОТВРАТИТЬ (потому что значения двух ролей отменили (аннулировали) друг друга, и таким образом не имеется никакого значения).</p>
<h3> Специальные исключения </h3>
<p> Отметим, что учетной записи "гость" запрещены записи данных (в форумы, календари, блоги), даже если  на это дается разрешение.
</p>
<p>
Смотрите также:
<a href="help.php?file=roles.html">Роли</a>,
<a href="help.php?file=contexts.html">Уровни</a>,
<a href="help.php?file=assignroles.html">Назначение ролей</a> и
<a href="help.php?file=overrides.html">Исключения</a>.
</p>';
$string['permissionsincontext'] = 'Права в "{$a}"';
$string['portfolio:export'] = 'Экспортировать в портфолио';
$string['potentialusers'] = '{$a} потенциальных пользователей';
$string['potusers'] = 'Потенциальные пользователи';
$string['potusersmatching'] = 'Потенциальные пользователи, соответствующие шаблону "{$a}"';
$string['prevent'] = 'Отозвать право';
$string['prohibit'] = 'Лишить права';
$string['prohibitedroles'] = 'Лишены права';
$string['question:add'] = 'Добавлять новые вопросы';
$string['question:config'] = 'Настраивать типы вопросов';
$string['question:editall'] = 'Редактировать все вопросы';
$string['question:editmine'] = 'Редактировать свои вопросы';
$string['question:flag'] = 'Помечать вопросы при попытке ответа';
$string['question:managecategory'] = 'Редактировать категории вопросов';
$string['question:moveall'] = 'Перемещать все вопросы';
$string['question:movemine'] = 'Перемещать свои вопросы';
$string['question:useall'] = 'Использовать все вопросы';
$string['question:usemine'] = 'Использовать свои вопросы';
$string['question:viewall'] = 'Просматривать все вопросы';
$string['question:viewmine'] = 'Просматривать свои вопросы';
$string['rating:rate'] = 'Добавлять оценки к элементам';
$string['rating:view'] = 'Просматривать свою итоговую оценку';
$string['rating:viewall'] = 'Просматривать все черновые оценки';
$string['rating:viewany'] = 'Просматривать все итоговые оценки';
$string['resetrole'] = 'Установить настройки по умолчанию';
$string['resetrolenolegacy'] = 'Очистить разрешения';
$string['resetrolesure'] = 'Вы уверены, что хотите установить роль "{$a->name} ({$a->shortname})" в соответствии с настройками по умолчанию?<p></p>Значения по умолчанию берутся из выбранного прототипа роли ({$a->legacytype}).';
$string['resetrolesurenolegacy'] = 'Вы уверены, что хотите удалить все разрешения, установленные для роли "{$a->name} ({$a->shortname})"?';
$string['restore:configure'] = 'Настраивать параметры восстановления';
$string['restore:createuser'] = 'Создавать пользователей при восстановлении';
$string['restore:restoreactivity'] = 'Восстанавливать элементы курса';
$string['restore:restorecourse'] = 'Восстанавливать курсы';
$string['restore:restoresection'] = 'Восстанавливать разделы';
$string['restore:restoretargethub'] = 'Восстанавливать курсы из файлов, предназначенных для каталогов';
$string['restore:restoretargetimport'] = 'Восстанавливать курсы из файлов, предназначенных для импорта';
$string['restore:rolldates'] = 'При восстановлении переносить даты, установленные для элементов курса';
$string['restore:uploadfile'] = 'Загружать файлы в области для  резервных копий';
$string['restore:userinfo'] = 'Восстанавливать данные пользователей';
$string['restore:viewautomatedfilearea'] = 'Восстанавливать курсы из автоматически созданных резервных копий';
$string['risks'] = 'Риски';
$string['roleallowheader'] = 'Дать право следующей роли:';
$string['roleallowinfo'] = 'Выберите роль для добавления в список ролей, которым в контексте "{$a->context}" дано право "{$a->cap}":';
$string['role:assign'] = 'Назначать роли пользователям';
$string['roleassignments'] = 'Назначения ролей';
$string['roledefinitions'] = 'Определения ролей';
$string['rolefullname'] = 'Название роли';
$string['role:manage'] = 'Создавать роли и управлять ими';
$string['role:override'] = 'Переопределять разрешения для других пользователей';
$string['roleprohibitheader'] = 'Лишить права следующую роль:';
$string['roleprohibitinfo'] = 'Выберите роль для добавления в список ролей, которые в контексте "{$a->context}" лишены права "{$a->cap}":';
$string['role:review'] = 'Просматривать разрешения для других пользователей';
$string['roles'] = 'Роли';
$string['role:safeoverride'] = 'Переопределять безопасные разрешения для других пользователей';
$string['roleselect'] = 'Выбрать роль';
$string['roles_help'] = 'Роль - набор разрешений (прав), определенных в масштабах всей системы. Роли можно назначать конкретным пользователям на конкретных уровнях (в конкретных контекстах).';
$string['roleshortname'] = 'Краткое название';
$string['role:switchroles'] = 'Переключаться к другой роли';
$string['roletoassign'] = 'Назначить роль';
$string['roletooverride'] = 'Переопределить роль';
$string['safeoverridenotice'] = 'Примечание: Потенциально опасные права заблокированы, так как Вам разрешено переопределять только безопасные права.';
$string['selectanotheruser'] = 'Выберите другого пользователя';
$string['selectauser'] = 'Выберите пользователя';
$string['selectrole'] = 'Выберите роль';
$string['showallroles'] = 'Показать все роли';
$string['showthisuserspermissions'] = 'Показать права этого пользователя';
$string['site:accessallgroups'] = 'Доступ ко всем группам';
$string['siteadministrators'] = 'Администраторы сайта';
$string['site:approvecourse'] = 'Одобрять создание курса';
$string['site:backup'] = 'Выполнять резервное копирование курсов';
$string['site:config'] = 'Изменять конфигурацию сайта';
$string['site:doanything'] = 'Разрешено делать всё';
$string['site:doclinks'] = 'Отображать ссылку на оф. сайт документации';
$string['site:import'] = 'Импортировать другие курсы в курс';
$string['site:manageblocks'] = 'Управлять блоками на странице';
$string['site:mnetloginfromremote'] = 'Входить из внешнего приложения через MNet';
$string['site:mnetlogintoremote'] = 'Подключаться к внешнему приложению через MNet';
$string['site:readallmessages'] = 'Читать все сообщения на сайте';
$string['site:restore'] = 'Восстанавливать курсы';
$string['site:sendmessage'] = 'Отправлять сообщение любому пользователю';
$string['site:trustcontent'] = 'Доверять содержимому';
$string['site:uploadusers'] = 'Загружать новых пользователей из файла';
$string['site:viewfullnames'] = 'Всегда видеть полные имена пользователей';
$string['site:viewparticipants'] = 'Просматривать участников';
$string['site:viewreports'] = 'Просматривать отчёты';
$string['site:viewuseridentity'] = 'Видеть персональные данные в списках пользователей';
$string['tag:create'] = 'Создавать новые теги';
$string['tag:edit'] = 'Редактировать существующие теги';
$string['tag:editblocks'] = 'Редактировать блоки на странице тегов';
$string['tag:manage'] = 'Управлять всеми тегами';
$string['thisusersroles'] = 'Роли, назначенные этому пользователю';
$string['unassignarole'] = 'Отменить назначение роли "{$a}"';
$string['unassignconfirm'] = 'Вы действительно хотите отменить назначение пользователю "{$a->user}" роли "{$a->role}"?';
$string['unassignerror'] = 'Ошибка при отмене назначения пользователю "{$a->user}" роли "{$a->role}".';
$string['user:changeownpassword'] = 'Изменять собственный пароль';
$string['user:create'] = 'Создавать пользователей';
$string['user:delete'] = 'Удалять пользователей';
$string['user:editmessageprofile'] = 'Изменять профили обмена сообщениями других пользователей';
$string['user:editownmessageprofile'] = 'Изменять свой профиль обмена сообщениями';
$string['user:editownprofile'] = 'Изменять свой собственный профиль';
$string['user:editprofile'] = 'Изменять профили пользователей';
$string['user:loginas'] = 'Входить в систему под именем других пользователей';
$string['user:manageblocks'] = 'Управлять блоками в профилях других пользователей';
$string['user:manageownblocks'] = 'Управлять блоками в собственном публичном профиле';
$string['user:manageownfiles'] = 'Управлять файлами в области личных файлов';
$string['user:managesyspages'] = 'Настраивать вид страницы публичных профилей по умолчанию';
$string['user:readuserblogs'] = 'Видеть все блоги пользователей';
$string['user:readuserposts'] = 'Видеть все сообщения пользователя';
$string['usersfrom'] = 'Пользователи из контекста "{$a}"';
$string['usersfrommatching'] = 'Пользователи в контексте "{$a->contextname}", соответствующие шаблону "{$a->search}"';
$string['usersinthisx'] = 'Пользователи в этом контексте типа "{$a}"';
$string['usersinthisxmatching'] = 'Пользователи в этом контексте типа "{$a->contexttype}", соответствующие шаблону "{$a->search}"';
$string['userswithrole'] = 'Все пользователи с ролью';
$string['userswiththisrole'] = 'Пользователи с ролью';
$string['user:update'] = 'Обновлять профиль другого пользователя(ей)';
$string['user:viewalldetails'] = 'Просматривать всю информацию о пользователях';
$string['user:viewdetails'] = 'Просматривать профиль другого пользователя(ей)';
$string['user:viewhiddendetails'] = 'Просматривать скрытые поля профиля другого пользователя';
$string['user:viewuseractivitiesreport'] = 'Просматривать отчёты о деятельности пользователей';
$string['user:viewusergrades'] = 'Просматривать оценки другого пользователя';
$string['useshowadvancedtochange'] = 'Для изменения используйте кнопку "Показать дополнительные"';
$string['viewingdefinitionofrolex'] = 'Просмотр определения роли "{$a}"';
$string['viewrole'] = 'Просмотр параметров роли';
$string['webservice:createmobiletoken'] = 'Создавать ключ для доступа к веб-службе с мобильных устройств';
$string['webservice:createtoken'] = 'Создавать ключ для веб-службы';
$string['whydoesuserhavecap'] = 'Почему пользователь "{$a->fullname}" имеет право "{$a->capability}" в контексте "{$a->context}"?';
$string['whydoesusernothavecap'] = 'Почему пользователь "{$a->fullname}" не имеет права "{$a->capability}" в контексте "{$a->context}"?';
$string['xroleassignments'] = 'Роли, назначенные пользователю {$a}';
$string['xuserswiththerole'] = 'Пользователи с ролью "{$a->role}"';
