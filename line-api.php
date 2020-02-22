<?PHP


$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('hsf7S1fWtLhFqQesR+FoI+OhjweQTQgDe6uTaJj7FnNJSr8c+3GxScILCh2fs62vzv2knsd4eKp675qifYwOwzzVIfyg/7mRCTww6KTwNL4RfYdRMhY0b+gifAfsUhH2+ZUx+86uw77PEuA58ju8rwdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '56e34392076ea951e67b0101a6019c8f']);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->pushMessage('Ua9a5da92bb0d49662769a7a51c14a7b0', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();


?>

