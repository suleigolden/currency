<?php
if(isset($_POST['Amount']) && isset($_POST['From']) && isset($_POST['To'])){

if(isset($_POST['Amount']) < 1){
	echo "<label style='color:#F00;'>Please type in Amount</label>";
}else{
	echo convertCurrency($_POST['Amount'], $_POST['From'], $_POST['To']);
}

}
function convertCurrency($amount,$from_currency,$to_currency){
  $apikey = 'your-api-key-here';

  $from_Currency = urlencode($from_currency);
  $to_Currency = urlencode($to_currency);
  $query =  "{$from_Currency}_{$to_Currency}";

  $json = file_get_contents("https://free.currencyconverterapi.com/api/v5/convert?q={$query}&compact=ultra");
  $obj = json_decode($json, true);

  $val = floatval($obj["$query"]);


  $total = $val * $amount;
  return number_format($total, 2, '.', '');
}

?>