<?php

//------------------------------------------------------------------------------
//
//  eTraxis - Records tracking web-based system
//  Copyright (C) 2005-2010  Artem Rodygin
//
//  This program is free software: you can redistribute it and/or modify
//  it under the terms of the GNU General Public License as published by
//  the Free Software Foundation, either version 3 of the License, or
//  (at your option) any later version.
//
//  This program is distributed in the hope that it will be useful,
//  but WITHOUT ANY WARRANTY; without even the implied warranty of
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//  GNU General Public License for more details.
//
//  You should have received a copy of the GNU General Public License
//  along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
//------------------------------------------------------------------------------

/**
 * @package eTraxis
 * @ignore
 */

/**#@+
 * Dependency.
 */
require_once('../engine/engine.php');
require_once('../dbo/projects.php');
require_once('../dbo/templates.php');
/**#@-*/

init_page(LOAD_TAB);

if (get_user_level() != USER_LEVEL_ADMIN)
{
    debug_write_log(DEBUG_NOTICE, 'User must have admin rights to be allowed.');
    exit;
}

// check that requested project exists

$id      = ustr2int(try_request('id'));
$project = project_find($id);

if (!$project)
{
    debug_write_log(DEBUG_NOTICE, 'Project cannot be found.');
    exit;
}

// local JS functions

$resTitle  = get_js_resource(RES_NEW_TEMPLATE_ID);
$resOK     = get_js_resource(RES_OK_ID);
$resCancel = get_js_resource(RES_CANCEL_ID);

$xml = <<<JQUERY
<script>

function templateCreate ()
{
    jqModal("{$resTitle}", "tcreate.php?id={$id}", "{$resOK}", "{$resCancel}", "$('#createform').submit()");
}

</script>
JQUERY;

// get list of templates

$sort = $page = NULL;
$list = templates_list($id, $sort, $page);

$from = $to = 0;

// generate buttons

$xml .= (MAX_TEMPLATES_NUMBER == 0 || $list->rows < MAX_TEMPLATES_NUMBER
            ? '<button action="templateCreate()">'
            : '<button disabled="true">')
      . get_html_resource(RES_CREATE_ID)
      . '</button>';

// generate list of templates

if ($list->rows != 0)
{
    $columns = array
    (
        RES_TEMPLATE_NAME_ID,
        RES_TEMPLATE_PREFIX_ID,
        RES_CRITICAL_AGE_ID,
        RES_FROZEN_TIME_ID,
        RES_DESCRIPTION_ID,
    );

    $bookmarks = gen_xml_bookmarks($page, $list->rows, $from, $to, 'tindex.php?id=' . $id . '&amp;');

    $xml .= '<list>'
          . '<hrow>';

    for ($i = 1; $i <= count($columns); $i++)
    {
        $smode = ($sort == $i ? ($i + count($columns)) : $i);

        $xml .= "<hcell url=\"tindex.php?id={$id}&amp;sort={$smode}\">"
              . get_html_resource($columns[$i - 1])
              . '</hcell>';
    }

    $xml .= '</hrow>';

    $list->seek($from - 1);

    for ($i = $from; $i <= $to; $i++)
    {
        $row = $list->fetch();

        $color = $row['is_locked'] ? 'red' : NULL;

        $xml .= "<row url=\"tview.php?id={$row['template_id']}\" color=\"{$color}\">"
              . '<cell>' . ustr2html($row['template_name'])   . '</cell>'
              . '<cell>' . ustr2html($row['template_prefix']) . '</cell>'
              . '<cell>' . ustr2html($row['critical_age'])    . '</cell>'
              . '<cell>' . ustr2html($row['frozen_time'])     . '</cell>'
              . '<cell>' . ustr2html($row['description'])     . '</cell>'
              . '</row>';
    }

    $xml .= '</list>'
          . $bookmarks;
}

echo(xml2html($xml));

?>
