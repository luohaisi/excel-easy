<?php

/**
 * @author luohaisi <317877262@qq.com>
 */

namespace ExcelEasy;

/**
 * The import excel class
* @author luohaisi
*/
class Import
{
	
	function __construct()
	{
		# code...
	}


	public static function toArray($filename){
		//载入文件
		$PHPExcel = PHPExcel_IOFactory::load($filename);
		// 获取表格数量
		$sheetCount = $PHPExcel->getSheetCount();

		$sheetNames = $PHPExcel->getSheetNames();
		// p($sheetNames);

		$currentSheet = array();

		for ($i=0; $i < $sheetCount; $i++) { 
			// 把当前表格转为数组
			$title = $PHPExcel->getSheet($i)->getTitle();
			$currentSheet[$title] = $PHPExcel->getSheet($i)->toArray(null, true, true, true);
		}

		return $currentSheet;
	}
}

