<?


require 'vendor/autoload.php';
require 'fonksyonlar.php';
require 'trendyol.model.php';
use PhpOffice\PhpSpreadsheet\Helper\Sample;

error_reporting(E_ALL);
 

$helper = new Sample();
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

$inputFileName = 'AKBEL01.xlsx';

$helper->log('Loading file ' . /** @scrutinizer ignore-type */ pathinfo($inputFileName, PATHINFO_BASENAME) . ' using IOFactory to identify the format');
$spreadsheet = IOFactory::load($inputFileName);
$sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
/**  @var trendyolexcelmodel[] */
$data=[];
$i=0;
$k=0;
foreach ($sheetData as  $value) {
    $data[$i++][]=new trendyolexcelmodel($value) ; 
}
//$data[0]->boy //örnek autocomplete
 
print_r($data);

?>