<?php
header("Content-Type: text/html; charset=UTF-8");

$gr_no = isset($_GET['gr_no']) ? $_GET['gr_no'] : '';

$lp_a = 'A';
$lp_b = 'B';
$file_name_a = 'index_a.html';
$file_name_b = 'index_b.html';
$hokan_file_name = 't.dat';

// lpファイルを読み込み専用でオープンする
$fp = fopen('./file/lp.txt', 'r');
$lp = fgets($fp);

// AB用のhtmlが１つの場合は固定とする
if (!file_exists($file_name_b)) {
	$lp = $lp_a;
}
if (!file_exists($file_name_a)) {
	$lp = $lp_b;
}

// AB用ファイル名の設定、ファイル書き込み
$file_name = $file_name_a;	// 初期化
if ($lp == $lp_a) {
	$file_name = $file_name_a;
	file_put_contents('./file/lp.txt', $lp_b);
} else {
	$file_name = $file_name_b;
	file_put_contents('./file/lp.txt', $lp_a);
}
// ファイルをクローズする
fclose($fp);

// html取得
$html = file_get_contents($file_name);

// LPの置換
$html = str_replace('{%LP%}', $lp, $html);

if (!empty($gr_no)) {
	// 補完テキストの置換
	if (file_exists($hokan_file_name)) {
		$hokanData = getHokanData($gr_no, $hokan_file_name);
		
		for($i = 1; $i < count($hokanData[0]); $i++) {
			$html = str_replace('{%' . $hokanData[0][$i] . '%}', $hokanData[1][$i], $html);
		}
	}
}

print $html;

// 補完テキストデータ取得
function getHokanData($grNo, $fileName) {
	$records = array();
	$file = new SplFileObject($fileName);
	$file->setFlags(SplFileObject::READ_CSV);

	foreach($file as $line) {
		if (empty($records)) {
			// ヘッダー設定
			$records[] = $line;
		}
		if ($line[0] == $grNo) {
			// 該当データ設定
			$records[] = $line;
			break;
		}
    }
	return $records;
}