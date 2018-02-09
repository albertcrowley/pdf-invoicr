<?php
require_once ("phpinvoice.php");

class phpinvoice_test extends phpinvoice {

  public function calculatePrecisionPub($num, $sig = 2, $min = 2) {
    return $this->calculatePrecision($num, $sig, $min);
  }
}



$invoice = new phpinvoice_test();

print ("should be 2: " . $invoice->calculatePrecisionPub("0.03") . PHP_EOL);
print ("should be 4: " . $invoice->calculatePrecisionPub("0.0003") . PHP_EOL);
print ("should be 5: " . $invoice->calculatePrecisionPub("0.000338736") . PHP_EOL);
print ("should be 2: " . $invoice->calculatePrecisionPub("0.3") . PHP_EOL);
print ("should be 2: " . $invoice->calculatePrecisionPub("2.3") . PHP_EOL);
print ("should be 2: " . $invoice->calculatePrecisionPub("3.0003") . PHP_EOL);
print ("should be 2: " . $invoice->calculatePrecisionPub("7") . PHP_EOL);

print ("should be 2: " . $invoice->calculatePrecisionPub("0.03", 4) . PHP_EOL);
print ("should be 4: " . $invoice->calculatePrecisionPub("0.0003", 4) . PHP_EOL);
print ("should be 7: " . $invoice->calculatePrecisionPub("0.000338736", 4) . PHP_EOL);
print ("should be 2: " . $invoice->calculatePrecisionPub("0.3", 4) . PHP_EOL);
print ("should be 4: " . $invoice->calculatePrecisionPub("2.3", 4) . PHP_EOL);
print ("should be 4: " . $invoice->calculatePrecisionPub("2.321", 4) . PHP_EOL);
print ("should be 4: " . $invoice->calculatePrecisionPub("2.3213232", 4) . PHP_EOL);
print ("should be 4: " . $invoice->calculatePrecisionPub("2.03213232", 4) . PHP_EOL);
print ("should be 7: " . $invoice->calculatePrecisionPub("2.0003213232", 7) . PHP_EOL);
print ("should be 4: " . $invoice->calculatePrecisionPub("3.0003", 4) . PHP_EOL);
print ("should be 4: " . $invoice->calculatePrecisionPub("7", 4) . PHP_EOL);

print ("should be 5: " . $invoice->calculatePrecisionPub("7", 2, 5) . PHP_EOL);
print ("should be 5: " . $invoice->calculatePrecisionPub("7.1", 2, 5) . PHP_EOL);
print ("should be 7: " . $invoice->calculatePrecisionPub("0.0000013", 2, 5) . PHP_EOL);

print PHP_EOL;
