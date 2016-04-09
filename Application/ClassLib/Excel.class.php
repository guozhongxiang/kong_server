<?php
namespace ClassLib;

class Excel {
  
	public function __construct() {
		/*导入phpExcel核心类 */
		import('PHPExcel.PHPExcel'); 
		import('PHPExcel.PHPExcel.Writer.Excel5');     // 用于其他低版本xls 
		import('PHPExcel.PHPExcel.Writer.Excel2007'); // 用于 excel-2007 格式 
		import('PHPExcel.PHPExcel.Shared.Date');
	}



	public function read($filename,$encode='utf-8'){  
		
		/**默认用excel2007读取excel，若格式不对，则用之前的版本进行读取*/ 
		$objReader = new \PHPExcel_Reader_Excel2007(); 
		if(!$objReader->canRead($filename)){ 
			$objReader = new \PHPExcel_Reader_Excel5(); 
			if(!$objReader->canRead($filename)){ 
				echo 'no Excel'; 
				return; 
			} 
		} 
		
		$objReader->setReadDataOnly(true);
		$objPHPExcel = $objReader->load($filename);
		$objWorksheet = $objPHPExcel->getActiveSheet();
		$highestRow = $objWorksheet->getHighestRow(); 
		$highestColumn = $objWorksheet->getHighestColumn(); 
		$highestColumnIndex = \PHPExcel_Cell::columnIndexFromString($highestColumn); 
		$excelData = array(); 
		for ($row = 5; $row <= $highestRow; $row++) { 
			for ($col = 0; $col < $highestColumnIndex; $col++) { 
				$excelData[$row][] =(string)$objWorksheet->getCellByColumnAndRow($col, $row)->getValue();
			} 
		} 
		
		return $excelData;
    }    
	
}
?> 