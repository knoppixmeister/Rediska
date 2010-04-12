<?php

/**
 * @see Rediska_Command_CompareSets
 */
require_once 'Rediska/Command/CompareSets.php';

/**
 * Return the intersection between the Sets stored at key1, key2, ..., keyN
 * 
 * @param array       $names     Array of key names
 * @param string|null $storeName Store intersection to set with key name
 * @return array|boolean
 * 
 * @author Ivan Shumkov
 * @package Rediska
 * @version @package_version@
 * @link http://rediska.geometria-lab.net
 * @licence http://www.opensource.org/licenses/bsd-license.php
 */
class Rediska_Command_IntersectSortedSets extends Rediska_Command_CompareSortedSets
{
	protected $_command = 'SINTER';
}