<?php
require __DIR__ . '/vendor/autoload.php';

putenv('GOOGLE_APPLICATION_CREDENTIALS=' . __DIR__ . '/path/to/your/key.json');

$client = new Google_Client();
$client->useApplicationDefaultCredentials();
$client->addScope(Google_Service_Sheets::SPREADSHEETS_READONLY);

$service = new Google_Service_Sheets($client);

$spreadsheetId = 'your_spreadsheet_id';
$range = 'Sheet1!A1:AA1000';

$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();

if (empty($values)) {
    $output = ['status' => 'error', 'message' => 'No data found.'];
} else {
    $output = ['status' => 'success', 'data' => $values];
}

// Thiết lập header để trả về JSON
header('Content-Type: application/json');
echo json_encode($output);
