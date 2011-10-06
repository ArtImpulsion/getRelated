<?php
/**
 * getRelated
 *
 * Copyright 2011 by Mark Hamstra <hello@markhamstra.com>
 *
 * This file is part of getRelated, a snippet that fetches related pages automatically.
 *
 * getRelated is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * getRelated is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * getRelated; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
*/
/* @var modX $modx
 * @var getRelated $getRelated
 * @var array $scriptProperties
 */

$p = include 'getrelated.properties.php';
$p = array_merge($p,$scriptProperties);

$getRelated = $modx->getService('getrelated','getRelated',$modx->getOption('getrelated.core_path',null,$modx->getOption('core_path').'components/getrelated/').'model/',$p);
if (!($getRelated instanceof getRelated)) return 'Error loading class.';
$modx->lexicon->load('getrelated:default');

$p['fields'] = explode(',',$p['fields']);
$p['parents'] = !empty($p['parents']) ? explode(',',$p['parents']) : array();
$p['contexts'] = !empty($p['contexts']) ? explode(',',$p['contexts']) : array();

$p['resource'] = (($p['resource'] == 'current') || empty($p['resource'])) ? $modx->resource->id : (int)$p['resource'];
if (empty($p['resource'])) return 'Invalid resource identifier.';

/* Get the data we want to match. These are defined based on the resource and the fields. */
$matchData = $getRelated->getMatchData($p['resource'],$p['fields']);
if (count($matchData) < 1) return 'Not enough data to find related resources :(';



var_dump($matchData);


return '-- end of processing --';
?>