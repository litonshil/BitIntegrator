<?php
require_once 'config.php';

sheets('1EFHijMbV0iJ1RbhXXYaLAvMOzcdn1j9Sn69IiVU0nXE');
function sheets($spreadsheetID)
{
    $sheets = array();
    $client = new Google_Client();

    $db = new DB();

    $arr_token = (array) $db->get_access_token();
    $accessToken = array(
        'access_token' => $arr_token['access_token'],
        'expires_in' => $arr_token['expires_in'],
    );

    $client->setAccessToken($accessToken);
    //$service = new Google_Service_Sheets($client);
    $sheetService = new Google_Service_Sheets($client);
    $spreadSheet = $sheetService->spreadsheets->get($spreadsheetID);
    $sheets = $spreadSheet->getSheets();
    foreach ($sheets as $sheet) {
        $sheets[] = $sheet->properties->sheetId;
    }
    echo "<pre>";
    print_r($sheets);
    echo "</pre>";
    return $sheets;
}
