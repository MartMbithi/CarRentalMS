<?php
/*
 *   Crafted On Sat Mar 04 2023
 *   Author Martin (martin@devlan.co.ke)
 * 
 *   www.devlan.co.ke
 *   hello@devlan.co.ke
 *
 *
 *   The Devlan Solutions LTD End User License Agreement
 *   Copyright (c) 2022 Devlan Solutions LTD
 *
 *
 *   1. GRANT OF LICENSE 
 *   Devlan Solutions LTD hereby grants to you (an individual) the revocable, personal, non-exclusive, and nontransferable right to
 *   install and activate this system on two separated computers solely for your personal and non-commercial use,
 *   unless you have purchased a commercial license from Devlan Solutions LTD. Sharing this Software with other individuals, 
 *   or allowing other individuals to view the contents of this Software, is in violation of this license.
 *   You may not make the Software available on a network, or in any way provide the Software to multiple users
 *   unless you have first purchased at least a multi-user license from Devlan Solutions LTD.
 *
 *   2. COPYRIGHT 
 *   The Software is owned by Devlan Solutions LTD and protected by copyright law and international copyright treaties. 
 *   You may not remove or conceal any proprietary notices, labels or marks from the Software.
 *
 *
 *   3. RESTRICTIONS ON USE
 *   You may not, and you may not permit others to
 *   (a) reverse engineer, decompile, decode, decrypt, disassemble, or in any way derive source code from, the Software;
 *   (b) modify, distribute, or create derivative works of the Software;
 *   (c) copy (other than one back-up copy), distribute, publicly display, transmit, sell, rent, lease or 
 *   otherwise exploit the Software. 
 *
 *
 *   4. TERM
 *   This License is effective until terminated. 
 *   You may terminate it at any time by destroying the Software, together with all copies thereof.
 *   This License will also terminate if you fail to comply with any term or condition of this Agreement.
 *   Upon such termination, you agree to destroy the Software, together with all copies thereof.
 *
 *
 *   5. NO OTHER WARRANTIES. 
 *   DEVLAN SOLUTIONS LTD  DOES NOT WARRANT THAT THE SOFTWARE IS ERROR FREE. 
 *   DEVLAN SOLUTIONS LTD SOFTWARE DISCLAIMS ALL OTHER WARRANTIES WITH RESPECT TO THE SOFTWARE, 
 *   EITHER EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO IMPLIED WARRANTIES OF MERCHANTABILITY, 
 *   FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT OF THIRD PARTY RIGHTS. 
 *   SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OF IMPLIED WARRANTIES OR LIMITATIONS
 *   ON HOW LONG AN IMPLIED WARRANTY MAY LAST, OR THE EXCLUSION OR LIMITATION OF 
 *   INCIDENTAL OR CONSEQUENTIAL DAMAGES,
 *   SO THE ABOVE LIMITATIONS OR EXCLUSIONS MAY NOT APPLY TO YOU. 
 *   THIS WARRANTY GIVES YOU SPECIFIC LEGAL RIGHTS AND YOU MAY ALSO 
 *   HAVE OTHER RIGHTS WHICH VARY FROM JURISDICTION TO JURISDICTION.
 *
 *
 *   6. SEVERABILITY
 *   In the event of invalidity of any provision of this license, the parties agree that such invalidity shall not
 *   affect the validity of the remaining portions of this license.
 *
 *
 *   7. NO LIABILITY FOR CONSEQUENTIAL DAMAGES IN NO EVENT SHALL DEVLAN SOLUTIONS LTD OR ITS SUPPLIERS BE LIABLE TO YOU FOR ANY
 *   CONSEQUENTIAL, SPECIAL, INCIDENTAL OR INDIRECT DAMAGES OF ANY KIND ARISING OUT OF THE DELIVERY, PERFORMANCE OR 
 *   USE OF THE SOFTWARE, EVEN IF DEVLAN SOLUTIONS LTD HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES
 *   IN NO EVENT WILL DEVLAN SOLUTIONS LTD  LIABILITY FOR ANY CLAIM, WHETHER IN CONTRACT 
 *   TORT OR ANY OTHER THEORY OF LIABILITY, EXCEED THE LICENSE FEE PAID BY YOU, IF ANY.
 *
 */

require_once('../vendor/autoload.php');


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

/* Load XLS Template */

$report_template = '../storage/templates/reports.xlsx';
$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($report_template);
$sheet = $spreadsheet->getActiveSheet();
$sheet->setTitle('Rentals List On' . date('d M Y'), true);

/* Sheet columns head names */
$sheet->setCellValue('A5', 'S/N');
$sheet->setCellValue('B5', 'Ref Number');
$sheet->setCellValue('C5', 'Vehicle Reg Number');
$sheet->setCellValue('D5', 'Model Name');
$sheet->setCellValue('E5', 'Client Names');
$sheet->setCellValue('F5', 'Client Contacts');
$sheet->setCellValue('G5', 'Rented On');
$sheet->setCellValue('H5', 'Returned On');
$sheet->setCellValue('I5', 'Rental Amount');
$sheet->setCellValue('J5', 'Payment Status');


$query = $mysqli->query("SELECT * FROM car_rentals cr 
INNER JOIN cars c ON c.car_id = cr.rental_car_id
INNER JOIN clients cl ON cl.client_id = cr.rental_client_id");
if ($query->num_rows > 0) {
    $cnt = 1;
    $row = 6;/* Start filling data from row */
    while ($vehicles = $query->fetch_assoc()) {
        if ($vehicles['rental_payment_status'] == '0') {
            $payment = 'Pending';
        } else {
            $payment = 'Paid';
        }
        /* Populate cell data */
        $sheet->setCellValue('A' . $row, $cnt);
        $sheet->setCellValue('B' . $row, $vehicles['rental_ref_code']);
        $sheet->setCellValue('C' . $row, $vehicles['car_reg_number']);
        $sheet->setCellValue('D' . $row, $vehicles['car_model']);
        $sheet->setCellValue('E' . $row, $vehicles['client_names']);
        $sheet->setCellValue('F' . $row, $vehicles['client_phone_number']);
        $sheet->setCellValue('G' . $row, date('d M Y', strtotime($vehicles['rental_from_date'])));
        $sheet->setCellValue('H' . $row, date('d M Y', strtotime($vehicles['rental_to_date'])));
        $sheet->setCellValue('I' . $row, $vehicles['rental_cost']);
        $sheet->setCellValue('J' . $row, $payment);

        $row++;
        $cnt = $cnt + 1;
    }
}

$file_name = 'Rentals List On ' . date('d M Y') . '.xlsx';
ob_end_clean();
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename=' . $file_name . '');
header('Cache-Control: max-age=0');

$xlsxWriter = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
$xlsxWriter = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
exit($xlsxWriter->save('php://output'));
