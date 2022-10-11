<?php

function readXmlFile($archive_xml)
{

    $xml = simplexml_load_file($archive_xml);
    $json = json_encode($xml);
    return json_decode($json, true);
}

$xml_invoice = readXmlFile("nota_fiscal.xml");
$emit_provider =  $xml_invoice["NFe"]["infNFe"]["emit"];
$emit_dest = $xml_invoice["NFe"]["infNFe"]["dest"];
$product = $xml_invoice["NFe"]["infNFe"]["det"]["prod"];

echo "<pre>";
print_r(["Emit_fabricante" => $emit_provider]);
print_r(["Emit_Destinatario" => $emit_dest]);
print_r(["Produto" => $product]);
echo "</pre>";
