<?php

// $html.='<!doctype html><html><head><meta charset="utf-8"><title>Pdf</title></head><body>';

// $html.='<table style="border: 1px solid;width: 700px"><tr></tr>';

// $html.='<tr><td><h2>Abhishek Roadlines</h2><h5>House No 10, Old kabadkhana, Jumerati, Bhopal, Madhya Pradesh </h5></td><td style="border-left: 1px solid;text-align: center"><h5>Bhopal:-56464646</h5><h5>Jumerati : 0755-4923994</h5><h5>Alpana : 0755-4939941</h5><h5>Mandideep: 07400 470915</h5><h5>Itarsi : 9753551586</h5><h5>Hoshangabad : 9827381021</h5><h5>Bhopal Nagar (Uhedullahganj): 8223850795</h5><h5>Bughni: 1999559154</h5></td></tr><tr></tr>';

// /////////////////////////////////////////////////////////////////////////////////////

// $html.='<tr><td><h5>Bilty No</h5><h5>Employee Name</h5><h5>From</h5><h5>Mobile No.</h5><h5>Address</h5></td><td><h5>Date</h5><h5>Place</h5><h5>To</h5><h5>Mobile No.</h5><h5>Address</h5></td></tr></table>';

// /////////////////////////////////////////////////////////////////////

// $html.='<table style="border: 1px solid;width: 700px;text-align: center">';

// $html.='<tr><th style="border-right: 1px solid;border-bottom: 1px solid">No.</th><th style="border-right: 1px solid;border-bottom: 1px solid">Description</th><th style="border-right: 1px solid;border-bottom: 1px solid">Qty</th><th style="border-right: 1px solid;border-bottom: 1px solid">Weight</th><th style="border-right: 1px solid;border-bottom: 1px solid">Tax %</th><th style="border-right: 1px solid;border-bottom: 1px solid">To Rate</th><th style="border-right: 1px solid;border-bottom: 1px solid">Amount</th></tr>';

// ///////////////////////////////////////////////////////////

// $html.='<tr><td style="border-right: 1px solid;">1</td><td style="border-right: 1px solid;">Heavy Load Material</td><td style="border-right: 1px solid;">120</td><td style="border-right: 1px solid;">10 Tonn</td><td style="border-right: 1px solid;">10</td><td style="border-right: 1px solid;">120/Kg</td><td style="border-right: 1px solid;">₹ 10,000</td></tr>';

// ////////////////////////////////////////////////

// $html.='<tr><th style="border: 1px solid;"  colspan="6">Total</th><th style="border: 1px solid;">₹ 10,000</th></tr>';

// ///////////////////////////////////////////////////////

// $html.='<tr><td><h5>Payment Mode</h5></td><td><h5><input type="checkbox" checked>Online</h5></td><td><h5><input type="checkbox">Offline</h5></td></tr>';

// $html.='<tr><td><h5>Payment Status</h5></td><td><h5><input type="checkbox" checked>Paid</h5></td><td><h5><input type="checkbox">Unpaid</h5></td></tr>';

// $html.='<tr><td style="text-align:right;padding-right: 30px" colspan="6"><h4>Signature</h4></td></tr>';

// $html.='<tr ><td style="border: 1px solid;text-align:left;padding-left: 10px" colspan="7"><h4>Terms & Condition</h4><p>Please review our Privacy Policy, which also governs your visit to this site,

// to understand our practices</p></td></tr>';

// $html.='</table></body></html>';

//$stylesheet = file_get_contents('pdf.css'); // external css

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$html.='<html lang="en"><head><meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Document</title><link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet"></head>';
$html.='<body style="font-family:freesans; margin: 0; padding: 0;border:1px solid"><div style="width: 100%; height: 100vh;"><table style="margin: auto; padding: 20px 0; vertical-align: top; width: 650px;"><tbody><tr><td style="text-align: center;width: 60%;border-right: 3px solid black;"><div><h3 style="margin: 0 0 1px; font-size: 23px; margin-top: 0;"><span style=" width: 30px; height: 30px; background: black; border-radius: 100%; color: #fff; padding: 5px; font-weight: 200; font-size: 20px; display: inline-block;">AR</span> अभिषेक रोड लाइन्स </h3><p style="font-size: 12px;margin: 0;font-weight: 600;">दुकान नं. 10, पुराना कबाड़खाना , जुमेराती , भोपाल </p><p style="margin: 0;font-size: 12px;margin: 0;font-weight: 600;">दुकान नं. 3 , अल्पना टाकीज़ के पीछे , एस.के. टॉवर , भोपाल</p><p style="font-size: 12px;margin: 0;font-weight: 600;">सांवरिया फैक्टरी के पास ,सभी SBI बैंक रोड , मण्डीदीप</p><h4 style=" margin: 5px 0; font-size: 15px; ">डेली सर्विस : भोपाल,मण्डीदीप, औबेदुल्लागंज</h4><table style="width: 100%; margin: 10px 0 0;"><tbody>';
////////////////////////////////////////////////////////////////////////////////////////////////////////////
$html.='<tr><td style="width: 50%;text-align: left;text-transform: capitalize;font-size: 12px;margin: 0;font-weight: 600;">बिल्टी नं.</td><td style="text-transform: capitalize;font-size: 12px;margin: 0;font-weight: 600;">दिनांक.................</td></tr>';
/////////////////////////////////////////////////////////////////////////
$html.='</tbody></table></div></td><td style="width: 25%;padding-left: 15px;"><table><tbody><tr><td><div style="text-transform: capitalize;font-size: 12px;margin: 0;font-weight: 600;">जुमेराती: <span style="padding-left: 5px;">0755-4923994</span></div></td></tr><tr><td style="text-transform: capitalize;font-size: 12px;margin: 0;font-weight: 600;"><div>अल्पना : <span style="padding-left: 5px;">0755-4939941</span></div></td></tr><tr><td style="font-size: 12px;text-transform: capitalize;margin: 0;font-weight: 600;"><div>मण्डीदीप:<span style="padding-left: 5px;">9630020960</span></div></td></tr><tr><td style="text-transform: capitalize;font-size: 12px;margin: 0;font-weight: 600;"><div>औबेदुल्लागंज:<span style="padding-left: 5px;">9109602516</span></div></td></tr><tr><td style="text-transform: capitalize;font-size: 12px;margin: 0;font-weight: 600;"><div>सुरेन्द्र:<span style="padding-left: 5px;">9630020960</span></div></td></tr></tbody></table></td></tr>';
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
$html.='<tr><td colspan="2" style="text-transform: capitalize;font-size: 12px;margin: 0;font-weight: 600;"> पाने वाले का नाम.................................................................................................... </td></tr>';
/////////////////////
$html.='<tr><td colspan="2"><table style="width: 100%;border: 2px solid black;margin-top: 30px;border-radius: 15px !important;font-size: 14px;border-collapse: collapse;border-spacing: 0;"><tbody><tr><th style="padding: 3px 0; border: 2px solid black; font-size: 13px; border-left: 0; border-top: 0;">क.</th><th style="padding: 3px 0; border: 2px solid black; font-size: 13px; border-left: 0; border-top: 0;">विवरण</th><th style="padding: 3px 0; border: 2px solid black; font-size: 13px; border-left: 0; border-top: 0;">नग</th><th style="padding: 3px 0; border: 2px solid black; font-size: 13px; border-left: 0; border-top: 0;">वजन</th><th style="padding: 3px 0; border: 2px solid black; font-size: 13px; border-left: 0; border-top: 0;">दर</th><th style="padding: 3px 0; border: 2px solid black; font-size: 13px; border-left: 0; border-top: 0; border-right: 0;">रुपये</th></tr>';
//////////////////////////////////////////////////////////////////////
$html.='<tr><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; /* border-right: 2px solid black; */"></td></tr>';
///////////////////////////////////////////////////////////////////
$html.='<tr><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 0;"></td></tr><tr><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px;"></td></tr><tr><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px;"></td></tr><tr><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px;"></td></tr><tr><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px;"></td></tr><tr><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px;"></td></tr><tr><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px;"></td></tr><tr><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px;"></td></tr><tr><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px; border-right: 2px solid black;"></td><td style="height: 20px;"></td></tr>';
//////////////////////////////////////
$html.='<tr><td style="height: 20px; border: 2px solid black; border-left: 0;"></td><td style="height: 20px; border-right: 2px solid black; border: 2px solid black; border-left: 0;"></td><td style="height: 20px; border-right: 2px solid black; border: 2px solid black; border-left: 0;"></td><td style="height: 20px; border-right: 2px solid black; border: 2px solid black; border-left: 0;"></td><td style="height: 20px; border-right: 2px solid black; text-align: center; border: 2px solid black; border-left: 0;"><strong>योग</strong></td><td style="height: 20px; border: 2px solid black; border-left: 0; border-right: 0;"></td></tr>';
$html.='<tr><td colspan="4"><table><tbody style="border:1px;border:solid;"><tr><td><p style="padding-left: 10px;font-size: 12px;margin: 0;font-weight: 600;">सभी प्रसंगो का न्याय क्षेत्र भोपाल होगा।</p></td></tr><tr><td><p style="padding-left: 10px;font-size: 12px;margin: 0;font-weight: 600;">नोट :वजन एवं बौरों की कमी मान्य नहीं होगी।</p></td></tr><tr><td><p style="padding-left: 10px;font-size: 12px;margin: 0;font-weight: 600;">माल के साथ बिल अवश्य लाएँ।</p></td></tr><tr><td><p style="padding-left: 10px;font-size: 12px;margin: 0;font-weight: 600;">माल नहीं मिलने पर 7 दिनों में ही शिकायत मान्य नहीं होगी।</p></td></tr><tr><td><p style="padding-left: 10px;font-size: 12px;margin: 0;font-weight: 600;">माल की टूट-फूट की जवाबदारी हमारी नहीं होगी।</p></td></tr></tbody></table></td><td colspan="2" style="text-align: center;"> <strong>हस्ताक्षर</strong> </td></tr></tbody></table></td></tr></tbody></table></div></body></html>';
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$data=$mpdf->Output();
// ?>









								

