<?php
//1
/*$arr = [3, 14, 55, 6, 0, 11, 1, 2, 5, 10];
echo "Max element: " . max($arr) . "<br/>";
for ($i=0; $i < count($arr); $i++) { 
    if ($arr[$i] % 2 == 0) {
        echo $arr[$i] . " ";
    }
}
echo "<br/><br/>";
sort($arr);
for ($i=0; $i < count($arr); $i++) { 
    echo $arr[$i] . " ";
}*/

//2
/*$arr = array(4, 1, 3, 2, 8, 5, 11, 13, 6, 7);
$arr2 = array(4, 17, 13, 16, 14, 33, 12, 9, 10, 0);
echo "<h3>Input 1 arr: </h3>";
for ($i=0; $i < count($arr); $i++) { 
    echo $arr[$i] . " ";
}
echo "<br/>";

echo "<h3>Input 2 arr: </h3>";
for ($i=0; $i < count($arr2); $i++) { 
    echo $arr2[$i] . " ";
}
echo "<br/>";

$arr3 = array_merge($arr, $arr2);

echo "<h3>Output arr: </h3>";
for ($i=0; $i < count($arr3); $i++) { 
    echo $arr3[$i] . " ";
}
echo "<br/>";*/

//3
/*$arr = array(3, 3, 1, 5, 6, 9, 7, 3, 1, 5);
echo "<h3>Input array: </h3>";
for ($i=0; $i < count($arr); $i++) { 
    echo $arr[$i] . " ";
}
echo "<br/>";

foreach (array_count_values($arr) as $k => $v) {
    if ($v > 1) {
        echo '<p style="color: green">' . $k . " - " . $v . '</p>';
    }
    else{
        echo '<p style="color: red">' . $k . " - " . $v . '</p>';
    }
}*/
//print_r(array_count_values($arr));

//4
// $fruits = ["apple" => ["fruit", 15, 3], "orange" => ["citrus", 20, 2], "banana" => ["fruit", 10, 6], "lemon" => ["citrus", 10, 7], 
// "kiwi" => ["fruit", 5, 1]];
/*$fruits =  [    0 => ["title" => "apple",   "type" => "fruit",  "price" => 15,  "amount" => 3], 
            1 => ["title" => "orange",  "type" => "citrus", "price" => 20,  "amount" => 2], 
        2 => ["title" => "banana",  "type" => "fruit",  "price" => 10,  "amount" => 6], 
    3 => ["title" => "lemon",   "type" => "citrus", "price" => 10,  "amount" => 7], 
4 => ["title" => "kiwi",    "type" => "fruit",  "price" => 5,   "amount" => 1]];
$sumAll = 0;
$sumCitruses = 0;

echo "<h3>Fruits:</h3><ul>";
for ($i=0; $i < count($fruits); $i++) { 
    echo "<li>" . $fruits[$i]["title"] . ": " . $fruits[$i]["type"] . ", " . $fruits[$i]["price"] . " USD" . "</li>";
    $sumAll += $fruits[$i]["price"];
}
echo "</ul>";

echo "<h3>Total sum: " . $sumAll . " USD</h3>";

echo "<br/><br/>";
echo "<h3>Citruses:</h3>";
echo "<ul>";
for ($i = 0; $i < count($fruits); $i++) { 
    if ($fruits[$i]["type"] == "citrus") {
        echo "<li>" . $fruits[$i]["title"] . ": " . $fruits[$i]["type"] . ", " . $fruits[$i]["price"] . " USD" . "</li>";
        $sumCitruses += $fruits[$i]["price"];
    }
}
echo "</ul>";

echo "<h3>Sum of citruses: " . $sumCitruses . " USD</h3>";*/

//5
/*$countryList = array(
    "AF" => "Afghanistan",
    "AL" => "Albania",
    "DZ" => "Algeria",
    "AS" => "American Samoa",
    "AD" => "Andorra",
    "AO" => "Angola",
    "AI" => "Anguilla",
    "AQ" => "Antarctica",
    "AG" => "Antigua and Barbuda",
    "AR" => "Argentina",
    "AM" => "Armenia",
    "AW" => "Aruba",
    "AU" => "Australia",
    "AT" => "Austria",
    "AZ" => "Azerbaijan",
    "BS" => "Bahamas",
    "BH" => "Bahrain",
    "BD" => "Bangladesh",
    "BB" => "Barbados",
    "BY" => "Belarus",
    "BE" => "Belgium",
    "BZ" => "Belize",
    "BJ" => "Benin",
    "BM" => "Bermuda",
    "BT" => "Bhutan",
    "BO" => "Bolivia",
    "BA" => "Bosnia and Herzegovina",
    "BW" => "Botswana",
    "BV" => "Bouvet Island",
    "BR" => "Brazil",
    "BQ" => "British Antarctic Territory",
    "IO" => "British Indian Ocean Territory",
    "VG" => "British Virgin Islands",
    "BN" => "Brunei",
    "BG" => "Bulgaria",
    "BF" => "Burkina Faso",
    "BI" => "Burundi",
    "KH" => "Cambodia",
    "CM" => "Cameroon",
    "CA" => "Canada",
    "CT" => "Canton and Enderbury Islands",
    "CV" => "Cape Verde",
    "KY" => "Cayman Islands",
    "CF" => "Central African Republic",
    "TD" => "Chad",
    "CL" => "Chile",
    "CN" => "China",
    "CX" => "Christmas Island",
    "CC" => "Cocos [Keeling] Islands",
    "CO" => "Colombia",
    "KM" => "Comoros",
    "CG" => "Congo - Brazzaville",
    "CD" => "Congo - Kinshasa",
    "CK" => "Cook Islands",
    "CR" => "Costa Rica",
    "HR" => "Croatia",
    "CU" => "Cuba",
    "CY" => "Cyprus",
    "CZ" => "Czech Republic",
    "CI" => "Côte d’Ivoire",
    "DK" => "Denmark",
    "DJ" => "Djibouti",
    "DM" => "Dominica",
    "DO" => "Dominican Republic",
    "NQ" => "Dronning Maud Land",
    "DD" => "East Germany",
    "EC" => "Ecuador",
    "EG" => "Egypt",
    "SV" => "El Salvador",
    "GQ" => "Equatorial Guinea",
    "ER" => "Eritrea",
    "EE" => "Estonia",
    "ET" => "Ethiopia",
    "FK" => "Falkland Islands",
    "FO" => "Faroe Islands",
    "FJ" => "Fiji",
    "FI" => "Finland",
    "FR" => "France",
    "GF" => "French Guiana",
    "PF" => "French Polynesia",
    "TF" => "French Southern Territories",
    "FQ" => "French Southern and Antarctic Territories",
    "GA" => "Gabon",
    "GM" => "Gambia",
    "GE" => "Georgia",
    "DE" => "Germany",
    "GH" => "Ghana",
    "GI" => "Gibraltar",
    "GR" => "Greece",
    "GL" => "Greenland",
    "GD" => "Grenada",
    "GP" => "Guadeloupe",
    "GU" => "Guam",
    "GT" => "Guatemala",
    "GG" => "Guernsey",
    "GN" => "Guinea",
    "GW" => "Guinea-Bissau",
    "GY" => "Guyana",
    "HT" => "Haiti",
    "HM" => "Heard Island and McDonald Islands",
    "HN" => "Honduras",
    "HK" => "Hong Kong SAR China",
    "HU" => "Hungary",
    "IS" => "Iceland",
    "IN" => "India",
    "ID" => "Indonesia",
    "IR" => "Iran",
    "IQ" => "Iraq",
    "IE" => "Ireland",
    "IM" => "Isle of Man",
    "IL" => "Israel",
    "IT" => "Italy",
    "JM" => "Jamaica",
    "JP" => "Japan",
    "JE" => "Jersey",
    "JT" => "Johnston Island",
    "JO" => "Jordan",
    "KZ" => "Kazakhstan",
    "KE" => "Kenya",
    "KI" => "Kiribati",
    "KW" => "Kuwait",
    "KG" => "Kyrgyzstan",
    "LA" => "Laos",
    "LV" => "Latvia",
    "LB" => "Lebanon",
    "LS" => "Lesotho",
    "LR" => "Liberia",
    "LY" => "Libya",
    "LI" => "Liechtenstein",
    "LT" => "Lithuania",
    "LU" => "Luxembourg",
    "MO" => "Macau SAR China",
    "MK" => "Macedonia",
    "MG" => "Madagascar",
    "MW" => "Malawi",
    "MY" => "Malaysia",
    "MV" => "Maldives",
    "ML" => "Mali",
    "MT" => "Malta",
    "MH" => "Marshall Islands",
    "MQ" => "Martinique",
    "MR" => "Mauritania",
    "MU" => "Mauritius",
    "YT" => "Mayotte",
    "FX" => "Metropolitan France",
    "MX" => "Mexico",
    "FM" => "Micronesia",
    "MI" => "Midway Islands",
    "MD" => "Moldova",
    "MC" => "Monaco",
    "MN" => "Mongolia",
    "ME" => "Montenegro",
    "MS" => "Montserrat",
    "MA" => "Morocco",
    "MZ" => "Mozambique",
    "MM" => "Myanmar [Burma]",
    "NA" => "Namibia",
    "NR" => "Nauru",
    "NP" => "Nepal",
    "NL" => "Netherlands",
    "AN" => "Netherlands Antilles",
    "NT" => "Neutral Zone",
    "NC" => "New Caledonia",
    "NZ" => "New Zealand",
    "NI" => "Nicaragua",
    "NE" => "Niger",
    "NG" => "Nigeria",
    "NU" => "Niue",
    "NF" => "Norfolk Island",
    "KP" => "North Korea",
    "VD" => "North Vietnam",
    "MP" => "Northern Mariana Islands",
    "NO" => "Norway",
    "OM" => "Oman",
    "PC" => "Pacific Islands Trust Territory",
    "PK" => "Pakistan",
    "PW" => "Palau",
    "PS" => "Palestinian Territories",
    "PA" => "Panama",
    "PZ" => "Panama Canal Zone",
    "PG" => "Papua New Guinea",
    "PY" => "Paraguay",
    "YD" => "People's Democratic Republic of Yemen",
    "PE" => "Peru",
    "PH" => "Philippines",
    "PN" => "Pitcairn Islands",
    "PL" => "Poland",
    "PT" => "Portugal",
    "PR" => "Puerto Rico",
    "QA" => "Qatar",
    "RO" => "Romania",
    //"RU" => "Russia", це обов'язково
    "RW" => "Rwanda",
    "RE" => "Réunion",
    "BL" => "Saint Barthélemy",
    "SH" => "Saint Helena",
    "KN" => "Saint Kitts and Nevis",
    "LC" => "Saint Lucia",
    "MF" => "Saint Martin",
    "PM" => "Saint Pierre and Miquelon",
    "VC" => "Saint Vincent and the Grenadines",
    "WS" => "Samoa",
    "SM" => "San Marino",
    "SA" => "Saudi Arabia",
    "SN" => "Senegal",
    "RS" => "Serbia",
    "CS" => "Serbia and Montenegro",
    "SC" => "Seychelles",
    "SL" => "Sierra Leone",
    "SG" => "Singapore",
    "SK" => "Slovakia",
    "SI" => "Slovenia",
    "SB" => "Solomon Islands",
    "SO" => "Somalia",
    "ZA" => "South Africa",
    "GS" => "South Georgia and the South Sandwich Islands",
    "KR" => "South Korea",
    "ES" => "Spain",
    "LK" => "Sri Lanka",
    "SD" => "Sudan",
    "SR" => "Suriname",
    "SJ" => "Svalbard and Jan Mayen",
    "SZ" => "Swaziland",
    "SE" => "Sweden",
    "CH" => "Switzerland",
    "SY" => "Syria",
    "ST" => "São Tomé and Príncipe",
    "TW" => "Taiwan",
    "TJ" => "Tajikistan",
    "TZ" => "Tanzania",
    "TH" => "Thailand",
    "TL" => "Timor-Leste",
    "TG" => "Togo",
    "TK" => "Tokelau",
    "TO" => "Tonga",
    "TT" => "Trinidad and Tobago",
    "TN" => "Tunisia",
    "TR" => "Turkey",
    "TM" => "Turkmenistan",
    "TC" => "Turks and Caicos Islands",
    "TV" => "Tuvalu",
    "UM" => "U.S. Minor Outlying Islands",
    "PU" => "U.S. Miscellaneous Pacific Islands",
    "VI" => "U.S. Virgin Islands",
    "UG" => "Uganda",
    "UA" => "Ukraine",
    "SU" => "Union of Soviet Socialist Republics",
    "AE" => "United Arab Emirates",
    "GB" => "United Kingdom",
    "US" => "United States",
    "ZZ" => "Unknown or Invalid Region",
    "UY" => "Uruguay",
    "UZ" => "Uzbekistan",
    "VU" => "Vanuatu",
    "VA" => "Vatican City",
    "VE" => "Venezuela",
    "VN" => "Vietnam",
    "WK" => "Wake Island",
    "WF" => "Wallis and Futuna",
    "EH" => "Western Sahara",
    "YE" => "Yemen",
    "ZM" => "Zambia",
    "ZW" => "Zimbabwe",
    "AX" => "Åland Islands",
);

echo "<select>Select country:";
foreach ($countryList as $code => $value) {
    echo '<option value = "' . $code . '">' . $value . '</option>';
}
echo "</select>";*/

//6
$socMedia = [   "github" =>     ["src" => "https://github.com/malomuzh-bo", "alt" => "github logo",  "imgSrc" => "https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png"], 
                "facebook" =>   ["src" => "https://www.facebook.com", "alt" => "facebook logo",  "imgSrc" => "https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.vhv.rs%2Ffile%2Fmax%2F19%2F199530_facebook-logo-png.png&f=1&nofb=1&ipt=c440183fc746f7ba66031686f2cf7614772e18bcb4071536e1081dbef46171d5&ipo=images"], 
                "instagram" =>  ["src" => "https://instagram.com/malomuzh_bo", "alt" => "instagram logo", "imgSrc" => "https://www.pngkey.com/png/full/448-4486200_instagram-circle-png.png"], 
                "youtube" =>    ["src" => "https://www.youtube.com/@malomuzh_bo", "alt" => "youtube logo",   "imgSrc" => "https://1.bp.blogspot.com/-qdRfUNOtjkM/XeI_00z9pzI/AAAAAAAAF4E/FeD2SvVFnKUjPAKQ_cNM6-D2ahjKb0HkQCLcBGAsYHQ/s320/Youtube-Icon-square-2340x2340-2.png"]
];
echo "<div>";
foreach ($socMedia as $title => $value) {
    echo '<a title = "' . $title . '", href=' . $value["src"] . '><img src="' . $value["imgSrc"] . '", width = 7% /></a>';
}
echo "</div>";
?>