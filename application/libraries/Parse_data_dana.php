<?php

function excelDateToDate($readDate){
		$phpexcepDate = $readDate-25569; //to offset to Unix epoch
		return strtotime("+$phpexcepDate days", mktime(0,0,0,1,1,1970));
	}

function parse_fund_transaction($file = '') {
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
	$password = "mayucantik";//"mayucantik"; //andiganteng";
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

				//$pos['date_tx'] = array_search("DATE_TX", $header);
				$pos['kanwil'] = array_search("KANWIL", $header);
				$pos['kd_cab'] = array_search("BRANCH_ID", $header);
				$pos['cabang'] = array_search("BRANCH_NM", $header);
				$pos['propinsi'] = array_search("PROPINSI", $header);
                $pos['cif'] = array_search("CIFNO", $header);
				$pos['no_rek'] = array_search("ACC", $header);
				$pos['nasabah'] = array_search("NAMA NASABAH CB", $header);
				$pos['buc'] = array_search("BUC CB", $header);
				$pos['group_nasabah'] = array_search("GROUP NASABAH", $header);
				$pos['ownership'] = array_search("SEGMEN CB", $header);
				$pos['status_debitur'] = array_search("DEBITUR/NON DEBITUR", $header);
				
				$pos['status_cl'] = array_search("CL,NCL,NON DEB", $header);
				
				$pos['opendat'] = array_search("DATOP6", $header);
				$pos['matdat'] = array_search("MATDT6", $header);
				$pos['term'] = array_search("CDTERM", $header);
				$pos['renew'] = array_search("RENEW", $header);
				$pos['rate'] = array_search("RATE", $header);
				$pos['currency'] = array_search("DDCTYP", $header);
				$pos['kurs'] = array_search("JFXDCR", $header);
				$pos['nilai'] = array_search("CBALRP", $header);
				$pos['nilai_usd'] = array_search("NILAI (EQV.USD 000)", $header);
				$pos['product'] = array_search("PRODUK CB", $header);
                $pos['avgbal'] = array_search("AVGBALRP", $header);
                $pos['valuta'] = array_search("VALUTA", $header);

			}
			elseif (strlen(trim($row[$pos['no_rek']])) > 3) {
				if (trim(strtolower($row[$pos['no_rek']])) === 'batas') {
					break;
				}

				//DATA VALIDATION FLAGGING
				$valid = true;
				
				//DATA
				//danatrxdaily
				// $date = substr($row[$pos['date_tx']], 4, 2) . '/' . substr($row[$pos['date_tx']], 2, 2) . '/' . substr($row[$pos['date_tx']], 0, 2);
				$opendat = "";
				$matdat = "";
				if($row[$pos['opendat']]){
					$opendat = date("Y-m-d",excelDateToDate($row[$pos['opendat']]));//substr($row[$pos['date_open']], 4, 2) . '/' . substr($row[$pos['date_tx']], 2, 2) . '/' . substr($row[$pos['date_tx']], 0, 2);
				}
				if($row[$pos['matdat']]){
					$matdat = date("Y-m-d",excelDateToDate($row[$pos['matdat']]));//substr($row[$pos['date_matur']], 4, 2) . '/' . substr($row[$pos['date_tx']], 2, 2) . '/' . substr($row[$pos['date_tx']], 0, 2);
				}
				$kanwil = $row[$pos['kanwil']];
				$kd_cab = $row[$pos['kd_cab']];
				$cabang = $row[$pos['cabang']];
				$propinsi = $row[$pos['propinsi']];
				$cif = $row[$pos['cif']];
				$no_rek = $row[$pos['no_rek']];
				$nasabah = $row[$pos['nasabah']];
				$buc = $row[$pos['buc']];
				$group_nasabah = $row[$pos['group_nasabah']];
				$ownership = $row[$pos['ownership']];
				$status_debitur = $row[$pos['status_debitur']];
				$status_cl = $row[$pos['status_cl']];
				$term = $row[$pos['term']];
				$renew = $row[$pos['renew']];
				$rate = $row[$pos['rate']];
				$currency = $row[$pos['currency']];
				$kurs = $row[$pos['kurs']];
				$nilai = $row[$pos['nilai']];
                $nilai_usd = $row[$pos['nilai_usd']];
				$product = $row[$pos['product']];
                $avgbal = $row[$pos['avgbal']];
                $valuta = $row[$pos['valuta']];
				
				if ($valid==true) {
					$valid_row++;
					// echo ' = true'.'<br />';
				}
				else {
					$invalid_row++;
					// echo ' = false'.'<br />';
				}
				
				$arrdate = explode("-", $date);
				$db = "danatrxdaily";
	            if($arrdate[0] != date('Y')){
	                $db = $db."_".$arrdate[0];
	            }

				if ($valid==true) {
					$sql_insert_danatrxdaily = "INSERT INTO ".$db." ( date, kanwil, kd_cab, cabang, propinsi, cif, no_rek, nasabah, buc, group_nasabah, ownership, status_debitur, status_cl, opendat, matdat, term, renew, rate, currency, kurs, nilai,nilai_usd, product, avgbal, valuta)
						VALUES ('$date',
                                '$kanwil',
								'$kd_cab',
								'$cabang',
								'$propinsi',
								'$cif',
								'$no_rek',
								'$nasabah',
								'$buc',
								'$group_nasabah',
								'$ownership',
								'$status_debitur',
								'$status_cl',
								'$opendat',
								'$matdat',
								'$term',
								'$renew',
								'$rate',
								'$currency',
                                '$kurs',
                                '$nilai',
                                '$nilai_usd',
								'$product',
								'$avgbal',
                                '$valuta')";

					if ($conn->query($sql_insert_danatrxdaily) === TRUE) {
						$success_row++;
						// echo "New record created successfully!\n";
					} else {
						$error_row++;
						echo "Error Insert `danatrxdaily`: " . $sql_insert_danatrxdaily . "<br>" . $conn->error;
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
