<?php

/**
 * @author luohaisi <317877262@qq.com>
 */
use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Common\Type;

namespace ExcelEasy\Excel;

/**
 * The import excel class
* @author luohaisi
*/
class Reader
{
	
	function __construct()
	{
		# code...
	}


	public static function toArray($filePath){

		$reader = ReaderFactory::create(Type::XLSX); // for XLSX files
		//$reader = ReaderFactory::create(Type::CSV); // for CSV files
		//$reader = ReaderFactory::create(Type::ODS); // for ODS files

		$reader->open($filePath);

		foreach ($reader->getSheetIterator() as $sheet) {
		    foreach ($sheet->getRowIterator() as $row) {
		        // do stuff with the row
		    }
		}

		$reader->close();

		// //载入文件
		// $PHPExcel = PHPExcel_IOFactory::load($filePath);
		// // 获取表格数量
		// $sheetCount = $PHPExcel->getSheetCount();

		// $sheetNames = $PHPExcel->getSheetNames();
		// // p($sheetNames);

		// $currentSheet = array();

		// for ($i=0; $i < $sheetCount; $i++) { 
		// 	// 把当前表格转为数组
		// 	$title = $PHPExcel->getSheet($i)->getTitle();
		// 	$currentSheet[$title] = $PHPExcel->getSheet($i)->toArray(null, true, true, true);
		// }

		// return $currentSheet;
	}
}

