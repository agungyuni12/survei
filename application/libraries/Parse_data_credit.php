<?php
	
function parse_loan_transaction($file = '') {
	if (isset($argv[1]))
	{
		$Filepath = $argv[1];
	}
	elseif (isset($_GET['File']))
	{
		$Filepath = $_GET['File'];
	}
	elseif ($file !== '') {
		$Filepath = $file;
	}
	else
	{
		echo 'Please specify filename to be parsed.';
		exit;
	}

	if (!file_exists($Filepath)) {
		echo "File $Filepath doesn't exists.";
		exit;
	}

	$filename = end(explode("/", $Filepath));
	$dirname = dirname($Filepath);
	$archivedir = "$dirname/archive";
	$archivepath = "$dirname/archive/$filename";
	$date = date('Y-m-d', strtotime(explode("_", $filename)[1]));
	$upload_timestamp = date('Y-m-d H:i:s', current(explode(".", explode("_", $filename)[2])));
	echo "Filepath: $Filepath<br />";
	echo "Filename: $filename<br />";
	echo "Dirname: $dirname<br />";
	echo "File Date: $date<br />";
	echo "Upload Time: $upload_timestamp<br /><br />";

	// Excel reader from http://code.google.com/p/php-excel-reader/
	require('spreadsheet-reader-master/php-excel-reader/excel_reader2.php');
	require('spreadsheet-reader-master/SpreadsheetReader.php');

	date_default_timezone_set('UTC');

	$StartMem = memory_get_usage();
	echo '---------------------------------'.'<br />';
	echo 'Starting memory: '.$StartMem.'<br />';
	echo '---------------------------------'.'<br />';

	$servername = "localhost";
	$username = "root";
	$password = ""; //andiganteng";
	$dbname = "dbcbic";
	
	try
	{
		$sheet = new SpreadsheetReader($Filepath);
		$BaseMem = memory_get_usage();

		//---------------------------------------------------------------
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		//----------------------------------------------------------------

		//PARSING PERFORMANCE AND RESULT
		$invalid_row = 0;
		$valid_row = 0;
		$error_row = 0;
		$success_row = 0;

		foreach ($sheet as $index => $row) {
			if (!isset($pos)) {
				$header = $row;

				foreach ($header as &$head) {
					$head = trim($head);
				}

				$pos = [];

				$pos['kd_cab'] = array_search("KD_CAB", $header);
				$pos['cif'] = array_search("NO_CUS", $header);
				$pos['no_rek'] = array_search("NO_REK", $header);
				$pos['debitur'] = array_search("NAMA DEBITUR", $header);
				$pos['id_dept'] = array_search("ID_DEPT", $header);
				$pos['nama_dept'] = array_search("NAMA DEPARTEMENT", $header);
				$pos['id_group'] = array_search("ID GROUP", $header);
				$pos['nama_group'] = array_search("NAMA GROUP", $header);
				$pos['group_debitur'] = array_search("GROUP DEBITUR", $header);
				$pos['nama_rm'] = array_search("NAMA RM", $header);
				$pos['product'] = array_search("JENIS FASILITAS", $header);
				$pos['customer_rating'] = array_search("CUSTOMER RATING", $header);
				$pos['buc'] = array_search("BUC", $header);
				$pos['jenis_kredit'] = array_search("JNS_KRD", $header);
				$pos['kode_dept'] = array_search("DEPTCD", $header);
				$pos['buc_reporting'] = array_search("BUC_REPORTING", $header);
				$pos['orga_mt'] = array_search("ORGAMT", $header);
				$pos['cbal'] = array_search("CBAL", $header);
				$pos['cbal_net_psak'] = array_search("CBALRP_NET_PSAK", $header);
				$pos['limits'] = array_search("LIMIT", $header);
				$pos['bakidebet'] = array_search("BAKIDEBET", $header);
				$pos['kurs'] = array_search("KURS", $header);
				$pos['curtype'] = array_search("CURTYP", $header);
				$pos['valuta'] = array_search("VALUTA", $header);
				$pos['bikole'] = array_search("BIKOLE", $header);
				$pos['bisek'] = array_search("BISEKT4", $header);
				$pos['revolve'] = array_search("REVOLV", $header);
				$pos['rate'] = array_search("RATE", $header);
				$pos['bilprn'] = array_search("BILPRN", $header);
				$pos['bilint'] = array_search("BILINT", $header);
				$pos['usd'] = array_search("USD JUTA", $header);
				$pos['matdat'] = array_search("MATDAT", $header);
				$pos['kode'] = array_search("KODE", $header);
				$pos['cbal_rp_net_psak55'] = array_search("CBALRP_NET_PSAK55", $header);
				$pos['cabang'] = array_search("NM_CAB", $header);
				$pos['buc_pengelola'] = array_search("BUC_PENGELOLA", $header);
				$pos['prndue'] = array_search("PRNDUE", $header);
				$pos['intdue'] = array_search("INTDUE", $header);
				$pos['pkdate'] = array_search("PKDATE", $header);
				$pos['wilayah'] = array_search("WILAYAH", $header);
				$pos['jenis_perusahaan'] = array_search("JENIS PERUSH2", $header);
				$pos['keterangan'] = array_search("KETERANGAN", $header);
				$pos['gabung'] = array_search("GABUNG", $header);
				$pos['ry'] = array_search("RY", $header);
				$pos['restru'] = array_search("RESTRU", $header);
				$pos['keterangan_counterrate'] = array_search("KETERANGAN COUNTER RATE", $header);
				$pos['status_ry'] = array_search("> RY <", $header);
				$pos['loan_at_risk'] = array_search("LOAN AT RISK", $header);
				$pos['ownership'] = array_search("JENIS PERUSH1", $header);
				$pos['area'] = array_search("AREA", $header);
				$pos['tenor'] = array_search("TENOR", $header);
				$pos['src'] = array_search("SRC", $header);
				$pos['bisekt8'] = array_search("BISEKT8", $header);
				
			}
			elseif (strlen(trim($row[$pos['no_rek']])) > 3) {
				//DATA VALIDATION FLAGGING
				$valid = true;
				
				$kd_cab = $row[$pos['kd_cab']];
				$cif = $row[$pos['cif']];
				$no_rek = $row[$pos['no_rek']];
				$debitur = $row[$pos['debitur']];
				$id_dept = $row[$pos['id_dept']];
				$nama_dept = $row[$pos['nama_dept']];
				$id_group = $row[$pos['id_group']];
				$nama_group = $row[$pos['nama_group']];
				$group_debitur = $row[$pos['group_debitur']];
				$nama_rm = $row[$pos['nama_rm']];
				$product = $row[$pos['product']];
				$customer_rating = $row[$pos['customer_rating']];
				$buc = $row[$pos['buc']];
				$jenis_kredit = $row[$pos['jenis_kredit']];
				$kode_dept = $row[$pos['kode_dept']];
				$buc_reporting = $row[$pos['buc_reporting']];
				$orga_mt = $row[$pos['orga_mt']];
				$cbal = $row[$pos['cbal']];
				$cbal_net_psak = $row[$pos['cbal_net_psak']];
				$limits = $row[$pos['limits']];
				$bakidebet = $row[$pos['bakidebet']];
				$kurs = $row[$pos['kurs']];
				$curtype = $row[$pos['curtype']];
				$valuta = $row[$pos['valuta']];
				$bikole = $row[$pos['bikole']];
				$bisek = $row[$pos['bisek']];
				$revolve = $row[$pos['revolve']];
				$rate = $row[$pos['rate']];
				$bilprn = $row[$pos['bilprn']];
				$bilint = $row[$pos['bilint']];
				$usd = $row[$pos['usd']];
				$matdat = $row[$pos['matdat']];
				$kode = $row[$pos['kode']];
				$cbal_rp_net_psak55 = $row[$pos['cbal_rp_net_psak55']];
				$cabang = $row[$pos['cabang']];
				$buc_pengelola = $row[$pos['buc_pengelola']];
				$prndue = $row[$pos['prndue']];
				$intdue = $row[$pos['intdue']];
				$pkdate = $row[$pos['pkdate']];
				$wilayah = $row[$pos['wilayah']];
				$jenis_perusahaan = $row[$pos['jenis_perusahaan']];
                $keterangan = $row[$pos['keterangan']];
                $gabung = $row[$pos['gabung']];
                $categ_ry = $jenis_perusahaan." ".$keterangan;
                $ry = $row[$pos['ry']];
				$restru = $row[$pos['restru']];
                $keterangan_counterrate = $row[$pos['keterangan_counterrate']];
                $status_ry = $row[$pos['status_ry']];
                $loan_at_risk = $row[$pos['loan_at_risk']];
                $ownership = $row[$pos['ownership']];
                $area = $row[$pos['area']];
                $tenor = $row[$pos['tenor']];
                $src = $row[$pos['src']];
                $bisekt8 = $row[$pos['bisekt8']];
				$matdat = "";
				$pkdate = "";
				if($row[$pos['matdat']]){
					$matdat = date("Y-m-d",excelDateToDate($row[$pos['matdat']]));
				}
				if($row[$pos['pkdate']]){
					$pkdate = date("Y-m-d",excelDateToDate($row[$pos['pkdate']]));
				}
				
				if ($valid==true) {
					$valid_row++;
					// echo ' = true'.'<br />';
				}
				else {
					$invalid_row++;
					// echo ' = false'.'<br />';
				}
				
				$arrdate = explode("-", $date);
				$db = "credittrxdaily";
	            if($arrdate[0] != date('Y')){
	                $db = $db."_".$arrdate[0];
	            }

				if ($valid==true) {
					$sql_insert_credittrxdaily = "INSERT INTO ".$db." ( date, kd_cab, cif, no_rek, debitur, id_dept, nama_dept, id_group, nama_group, group_debitur, nama_rm, product, customer_rating, buc, jenis_kredit, kode_dept, buc_reporting, orga_mt, cbal, cbal_net_psak, limits, bakidebet, kurs, curtype, valuta, bikole, bisek, revolve, rate, bilprn, bilint, usd, matdat, kode, cbal_rp_net_psak55, cabang, buc_pengelola, prndue, intdue, pkdate, wilayah, jenis_perusahaan, keterangan, gabung, categ_ry, ry, restru, keterangan_counterrate, status_ry, loan_at_risk, ownership, area, tenor, src, bisekt8 )
						VALUES (
                                '$date',
								'$kd_cab',
								'$cif',
								'$no_rek',
								'$debitur',
								'$id_dept',
								'$nama_dept',
								'$id_group',
								'$nama_group',
								'$group_debitur',
								'$nama_rm',
								'$product',
								'$customer_rating',
								'$buc',
								'$jenis_kredit',
								'$kode_dept',
								'$buc_reporting',
								'$orga_mt',
								'$cbal',
								'$cbal_net_psak',
								'$limits',
								'$bakidebet',
								'$kurs',
								'$curtype',
								'$valuta',
								'$bikole',
								'$bisek',
								'$revolve',
								'$rate',
								'$bilprn',
								'$bilint',
								'$usd',
								'$matdat',
								'$kode',
								'$cbal_rp_net_psak55',
								'$cabang',
								'$buc_pengelola',
								'$prndue',
								'$intdue',
								'$pkdate',
								'$wilayah',
								'$jenis_perusahaan',
								'$keterangan',
								'$gabung',
								'$categ_ry',
								'$ry',
								'$restru',
								'$keterangan_counterrate',
								'$status_ry',
								'$loan_at_risk',
								'$ownership',
								'$area',
                                '$tenor',
                                '$src',
                                '$bisekt8')";
								
					if ($conn->query($sql_insert_credittrxdaily) === TRUE) {
						$success_row++;
						// echo "New record created successfully!\n";
					} else {
						$error_row++;
						echo "Error Insert `credittrxdaily`: " . $sql_insert_credittrxdaily . "<br>" . $conn->error;
					}
				}
			}
		}

		echo "<h4>Parse Report</h4>";
		echo "Invalid: $invalid_row<br />";
		echo "Valid: $valid_row<br />";
		echo "Error: $error_row<br />";
		echo "Success: $success_row<br />";


		if ($success_row > 0) {
			// Check archive directory path and create if not apc_exists(keys)
			if (!is_dir($archivedir)) {
				mkdir($archivedir, 0700, true);
			}

			// Move file to archive directory
			rename($Filepath, $archivepath);
		}

		$conn->close();
	}
	
	catch (Exception $E) {
		echo $E -> getMessage();
	}
}

?>
