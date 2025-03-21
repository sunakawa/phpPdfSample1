<?php
require_once __DIR__ . '/vendor/autoload.php';

// 新しいTCPDFドキュメントを作成
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// ドキュメント情報を設定
$pdf->SetCreator('Your Name');
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('日本語PDFサンプル');
$pdf->SetSubject('TCPDFを使用した日本語PDFサンプル');
$pdf->SetKeywords('TCPDF, PDF, 日本語');

// ヘッダーとフッターを削除
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// デフォルトのモノスペースフォントを設定
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// マージンを設定
$pdf->SetMargins(10, 10, 10);

// 自動改ページを設定
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// 画像の縮尺を設定
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// 日本語フォントを設定
$pdf->SetFont('kozminproregular', '', 14);

// 新しいページを追加
$pdf->AddPage();

// 日本語テキストを追加
$text = "これは日本語のPDFサンプルです。\nTCPDFを使用して作成されました。";
$pdf->Write(0, $text, '', 0, 'L', true, 0, false, false, 0);

// PDFファイルを出力
$pdf->Output('japanese_pdf_sample.pdf', 'I');
