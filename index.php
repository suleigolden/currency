<!DOCTYPE html>
<html lang="en">

<head>

    <title>Currency</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

 
</head>

<body>

<div id="wrapper">
<div class="col-lg-12">
	<h1>Simple Currency Converter Usimg free.currencyconverterapi</h1>
<div class="col-lg-3">
	 <div class="form-group">
	 <label>Amount</label>
	 <input class="form-control" type="number" id="CURR_AMT" placeholder="Amount">
	 </div>
	 <div class="form-group">
	 <label>Currency</label>
	 <select id="CURR_FR" class="form-control">
        <option value="AED" >AED</option>
        
        <option value="AFN" >AFN</option>
        
        <option value="ALL" >ALL</option>
        
        <option value="AMD" >AMD</option>
        
        <option value="ANG" >ANG</option>
        
        <option value="AOA" >AOA</option>
        
        <option value="ARS" >ARS</option>
        
        <option value="AUD" >AUD</option>
        
        <option value="AWG" >AWG</option>
        
        <option value="AZN" >AZN</option>
        
        <option value="BAM" >BAM</option>
        
        <option value="BBD" >BBD</option>
        
        <option value="BDT" >BDT</option>
        
        <option value="BGN" >BGN</option>
        
        <option value="BHD" >BHD</option>
        
        <option value="BIF" >BIF</option>
        
        <option value="BND" >BND</option>
        
        <option value="BOB" >BOB</option>
        
        <option value="BRL" >BRL</option>
        
        <option value="BSD" >BSD</option>
        
        <option value="BTC" >BTC</option>
        
        <option value="BTN" >BTN</option>
        
        <option value="BWP" >BWP</option>
        
        <option value="BYN" >BYN</option>
        
        <option value="BYR" >BYR</option>
        
        <option value="BZD" >BZD</option>
        
        <option value="CAD" >CAD</option>
        
        <option value="CDF" >CDF</option>
        
        <option value="CHF" >CHF</option>
        
        <option value="CLP" >CLP</option>
        
        <option value="CNY" >CNY</option>
        
        <option value="COP" >COP</option>
        
        <option value="CRC" >CRC</option>
        
        <option value="CUP" >CUP</option>
        
        <option value="CVE" >CVE</option>
        
        <option value="CZK" >CZK</option>
        
        <option value="DJF" >DJF</option>
        
        <option value="DKK" >DKK</option>
        
        <option value="DOP" >DOP</option>
        
        <option value="DZD" >DZD</option>
        
        <option value="EGP" >EGP</option>
        
        <option value="ERN" >ERN</option>
        
        <option value="ETB" >ETB</option>
        
        <option value="EUR" >EUR</option>
        
        <option value="FJD" >FJD</option>
        
        <option value="FKP" >FKP</option>
        
        <option value="GBP" >GBP</option>
        
        <option value="GEL" >GEL</option>
        
        <option value="GHS" >GHS</option>
        
        <option value="GIP" >GIP</option>
        
        <option value="GMD" >GMD</option>
        
        <option value="GNF" >GNF</option>
        
        <option value="GTQ" >GTQ</option>
        
        <option value="GYD" >GYD</option>
        
        <option value="HKD" >HKD</option>
        
        <option value="HNL" >HNL</option>
        
        <option value="HRK" >HRK</option>
        
        <option value="HTG" >HTG</option>
        
        <option value="HUF" >HUF</option>
        
        <option value="IDR" >IDR</option>
        
        <option value="ILS" >ILS</option>
        
        <option value="INR" >INR</option>
        
        <option value="IQD" >IQD</option>
        
        <option value="IRR" >IRR</option>
        
        <option value="ISK" >ISK</option>
        
        <option value="JMD" >JMD</option>
        
        <option value="JOD" >JOD</option>
        
        <option value="JPY" >JPY</option>
        
        <option value="KES" >KES</option>
        
        <option value="KGS" >KGS</option>
        
        <option value="KHR" >KHR</option>
        
        <option value="KMF" >KMF</option>
        
        <option value="KPW" >KPW</option>
        
        <option value="KRW" >KRW</option>
        
        <option value="KWD" >KWD</option>
        
        <option value="KYD" >KYD</option>
        
        <option value="KZT" >KZT</option>
        
        <option value="LAK" >LAK</option>
        
        <option value="LBP" >LBP</option>
        
        <option value="LKR" >LKR</option>
        
        <option value="LRD" >LRD</option>
        
        <option value="LSL" >LSL</option>
        
        <option value="LVL" >LVL</option>
        
        <option value="LYD" >LYD</option>
        
        <option value="MAD" >MAD</option>
        
        <option value="MDL" >MDL</option>
        
        <option value="MGA" >MGA</option>
        
        <option value="MKD" >MKD</option>
        
        <option value="MMK" >MMK</option>
        
        <option value="MNT" >MNT</option>
        
        <option value="MOP" >MOP</option>
        
        <option value="MRO" >MRO</option>
        
        <option value="MUR" >MUR</option>
        
        <option value="MVR" >MVR</option>
        
        <option value="MWK" >MWK</option>
        
        <option value="MXN" >MXN</option>
        
        <option value="MYR" >MYR</option>
        
        <option value="MZN" >MZN</option>
        
        <option value="NAD" >NAD</option>
        
        <option value="NGN" >NGN</option>
        
        <option value="NIO" >NIO</option>
        
        <option value="NOK" >NOK</option>
        
        <option value="NPR" >NPR</option>
        
        <option value="NZD" >NZD</option>
        
        <option value="OMR" >OMR</option>
        
        <option value="PAB" >PAB</option>
        
        <option value="PEN" >PEN</option>
        
        <option value="PGK" >PGK</option>
        
        <option value="PHP" selected>PHP</option>
        
        <option value="PKR" >PKR</option>
        
        <option value="PLN" >PLN</option>
        
        <option value="PYG" >PYG</option>
        
        <option value="QAR" >QAR</option>
        
        <option value="RON" >RON</option>
        
        <option value="RSD" >RSD</option>
        
        <option value="RUB" >RUB</option>
        
        <option value="RWF" >RWF</option>
        
        <option value="SAR" >SAR</option>
        
        <option value="SBD" >SBD</option>
        
        <option value="SCR" >SCR</option>
        
        <option value="SDG" >SDG</option>
        
        <option value="SEK" >SEK</option>
        
        <option value="SGD" >SGD</option>
        
        <option value="SHP" >SHP</option>
        
        <option value="SLL" >SLL</option>
        
        <option value="SOS" >SOS</option>
        
        <option value="SRD" >SRD</option>
        
        <option value="STD" >STD</option>
        
        <option value="SYP" >SYP</option>
        
        <option value="SZL" >SZL</option>
        
        <option value="THB" >THB</option>
        
        <option value="TJS" >TJS</option>
        
        <option value="TMT" >TMT</option>
        
        <option value="TND" >TND</option>
        
        <option value="TOP" >TOP</option>
        
        <option value="TRY" >TRY</option>
        
        <option value="TTD" >TTD</option>
        
        <option value="TWD" >TWD</option>
        
        <option value="TZS" >TZS</option>
        
        <option value="UAH" >UAH</option>
        
        <option value="UGX" >UGX</option>
        
        <option value="USD" >USD</option>
        
        <option value="UYU" >UYU</option>
        
        <option value="UZS" >UZS</option>
        
        <option value="VEF" >VEF</option>
        
        <option value="VND" >VND</option>
        
        <option value="VUV" >VUV</option>
        
        <option value="WST" >WST</option>
        
        <option value="XAF" >XAF</option>
        
        <option value="XCD" >XCD</option>
        
        <option value="XDR" >XDR</option>
        
        <option value="XOF" >XOF</option>
        
        <option value="XPF" >XPF</option>
        
        <option value="YER" >YER</option>
        
        <option value="ZAR" >ZAR</option>
        
        <option value="ZMW" >ZMW</option>
	 </select>
	 </div>
	 
	 <div class="form-group">
	 <label>To</label>
	 <select id="CURR_TO" class="form-control">
        <option value="AED" >AED</option>
        
        <option value="AFN" >AFN</option>
        
        <option value="ALL" >ALL</option>
        
        <option value="AMD" >AMD</option>
        
        <option value="ANG" >ANG</option>
        
        <option value="AOA" >AOA</option>
        
        <option value="ARS" >ARS</option>
        
        <option value="AUD" >AUD</option>
        
        <option value="AWG" >AWG</option>
        
        <option value="AZN" >AZN</option>
        
        <option value="BAM" >BAM</option>
        
        <option value="BBD" >BBD</option>
        
        <option value="BDT" >BDT</option>
        
        <option value="BGN" >BGN</option>
        
        <option value="BHD" >BHD</option>
        
        <option value="BIF" >BIF</option>
        
        <option value="BND" >BND</option>
        
        <option value="BOB" >BOB</option>
        
        <option value="BRL" >BRL</option>
        
        <option value="BSD" >BSD</option>
        
        <option value="BTC" >BTC</option>
        
        <option value="BTN" >BTN</option>
        
        <option value="BWP" >BWP</option>
        
        <option value="BYN" >BYN</option>
        
        <option value="BYR" >BYR</option>
        
        <option value="BZD" >BZD</option>
        
        <option value="CAD" >CAD</option>
        
        <option value="CDF" >CDF</option>
        
        <option value="CHF" >CHF</option>
        
        <option value="CLP" >CLP</option>
        
        <option value="CNY" >CNY</option>
        
        <option value="COP" >COP</option>
        
        <option value="CRC" >CRC</option>
        
        <option value="CUP" >CUP</option>
        
        <option value="CVE" >CVE</option>
        
        <option value="CZK" >CZK</option>
        
        <option value="DJF" >DJF</option>
        
        <option value="DKK" >DKK</option>
        
        <option value="DOP" >DOP</option>
        
        <option value="DZD" >DZD</option>
        
        <option value="EGP" >EGP</option>
        
        <option value="ERN" >ERN</option>
        
        <option value="ETB" >ETB</option>
        
        <option value="EUR" >EUR</option>
        
        <option value="FJD" >FJD</option>
        
        <option value="FKP" >FKP</option>
        
        <option value="GBP" >GBP</option>
        
        <option value="GEL" >GEL</option>
        
        <option value="GHS" >GHS</option>
        
        <option value="GIP" >GIP</option>
        
        <option value="GMD" >GMD</option>
        
        <option value="GNF" >GNF</option>
        
        <option value="GTQ" >GTQ</option>
        
        <option value="GYD" >GYD</option>
        
        <option value="HKD" >HKD</option>
        
        <option value="HNL" >HNL</option>
        
        <option value="HRK" >HRK</option>
        
        <option value="HTG" >HTG</option>
        
        <option value="HUF" >HUF</option>
        
        <option value="IDR" >IDR</option>
        
        <option value="ILS" >ILS</option>
        
        <option value="INR" >INR</option>
        
        <option value="IQD" >IQD</option>
        
        <option value="IRR" >IRR</option>
        
        <option value="ISK" >ISK</option>
        
        <option value="JMD" >JMD</option>
        
        <option value="JOD" >JOD</option>
        
        <option value="JPY" >JPY</option>
        
        <option value="KES" >KES</option>
        
        <option value="KGS" >KGS</option>
        
        <option value="KHR" >KHR</option>
        
        <option value="KMF" >KMF</option>
        
        <option value="KPW" >KPW</option>
        
        <option value="KRW" >KRW</option>
        
        <option value="KWD" >KWD</option>
        
        <option value="KYD" >KYD</option>
        
        <option value="KZT" >KZT</option>
        
        <option value="LAK" >LAK</option>
        
        <option value="LBP" >LBP</option>
        
        <option value="LKR" >LKR</option>
        
        <option value="LRD" >LRD</option>
        
        <option value="LSL" >LSL</option>
        
        <option value="LVL" >LVL</option>
        
        <option value="LYD" >LYD</option>
        
        <option value="MAD" >MAD</option>
        
        <option value="MDL" >MDL</option>
        
        <option value="MGA" >MGA</option>
        
        <option value="MKD" >MKD</option>
        
        <option value="MMK" >MMK</option>
        
        <option value="MNT" >MNT</option>
        
        <option value="MOP" >MOP</option>
        
        <option value="MRO" >MRO</option>
        
        <option value="MUR" >MUR</option>
        
        <option value="MVR" >MVR</option>
        
        <option value="MWK" >MWK</option>
        
        <option value="MXN" >MXN</option>
        
        <option value="MYR" >MYR</option>
        
        <option value="MZN" >MZN</option>
        
        <option value="NAD" >NAD</option>
        
        <option value="NGN" >NGN</option>
        
        <option value="NIO" >NIO</option>
        
        <option value="NOK" >NOK</option>
        
        <option value="NPR" >NPR</option>
        
        <option value="NZD" >NZD</option>
        
        <option value="OMR" >OMR</option>
        
        <option value="PAB" >PAB</option>
        
        <option value="PEN" >PEN</option>
        
        <option value="PGK" >PGK</option>
        
        <option value="PHP" selected>PHP</option>
        
        <option value="PKR" >PKR</option>
        
        <option value="PLN" >PLN</option>
        
        <option value="PYG" >PYG</option>
        
        <option value="QAR" >QAR</option>
        
        <option value="RON" >RON</option>
        
        <option value="RSD" >RSD</option>
        
        <option value="RUB" >RUB</option>
        
        <option value="RWF" >RWF</option>
        
        <option value="SAR" >SAR</option>
        
        <option value="SBD" >SBD</option>
        
        <option value="SCR" >SCR</option>
        
        <option value="SDG" >SDG</option>
        
        <option value="SEK" >SEK</option>
        
        <option value="SGD" >SGD</option>
        
        <option value="SHP" >SHP</option>
        
        <option value="SLL" >SLL</option>
        
        <option value="SOS" >SOS</option>
        
        <option value="SRD" >SRD</option>
        
        <option value="STD" >STD</option>
        
        <option value="SYP" >SYP</option>
        
        <option value="SZL" >SZL</option>
        
        <option value="THB" >THB</option>
        
        <option value="TJS" >TJS</option>
        
        <option value="TMT" >TMT</option>
        
        <option value="TND" >TND</option>
        
        <option value="TOP" >TOP</option>
        
        <option value="TRY" >TRY</option>
        
        <option value="TTD" >TTD</option>
        
        <option value="TWD" >TWD</option>
        
        <option value="TZS" >TZS</option>
        
        <option value="UAH" >UAH</option>
        
        <option value="UGX" >UGX</option>
        
        <option value="USD" >USD</option>
        
        <option value="UYU" >UYU</option>
        
        <option value="UZS" >UZS</option>
        
        <option value="VEF" >VEF</option>
        
        <option value="VND" >VND</option>
        
        <option value="VUV" >VUV</option>
        
        <option value="WST" >WST</option>
        
        <option value="XAF" >XAF</option>
        
        <option value="XCD" >XCD</option>
        
        <option value="XDR" >XDR</option>
        
        <option value="XOF" >XOF</option>
        
        <option value="XPF" >XPF</option>
        
        <option value="YER" >YER</option>
        
        <option value="ZAR" >ZAR</option>
        
        <option value="ZMW" >ZMW</option>
	 </select>
	 </div>
	 <button onClick="convertCurrency();" class="btn btn-default">Convert</button>
	 <h3 id="convertmessage"></h3>
</div>
</div>
</div>


<script type="text/javascript">
 	function convertCurrency(){
  	  const amount = document.getElementById("CURR_AMT").value;
	  const from = document.getElementById("CURR_FR").value;
	  const to = document.getElementById("CURR_TO").value;
      const vars = "Amount="+amount+"&From="+from+"&To="+to;
      var hr = new XMLHttpRequest();
      const url = "currencyconverterapi.php";
      hr.open("POST", url, true);
      hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      hr.onreadystatechange = function() {
        if (hr.readyState == 4 && hr.status == 200) {
          let return_data = hr.responseText;
		document.getElementById('convertmessage').innerHTML = to+": "+number_format(return_data);
            //console.log(return_data);
            
    }
  }
  hr.send(vars);
  document.getElementById("convertmessage").innerHTML = "<i style='color:#8ab933;'>Converting.....</i>";
 }
 
 function number_format(n) {
        const parts=n.toString().split(".");
        return parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (parts[1] ? "." + parts[1] : "");
    }
	
	

if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('sw.js');
}
</script>
</body>

</html>
