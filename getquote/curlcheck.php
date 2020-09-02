<?php
// kvstore API url

// Collection object
$data = array(
  "intPolicyDataIO"=> array(
    "policy"=> array(
      "quotationPremium"=> "54,538",
      "baseAgentId"=> "20008325",
      "baseProductId"=> "10001101",
      "productName"=> "CARE",
      "productFamilyId"=> "HEALTH",
      "businessTypeCd"=> "NEWBUSINESS",
      "faveoOTC"=> "NO",
      "abacusId"=> "160",
      "sumInsuredValue"=> "25 Lakhs",
      "coverType"=> "INDIVIDUAL",
      "eldestMemberAge"=> "5 - 24 years",
      "policyAdditionalFieldsDOList"=> array(
        array(
          "fieldAgree"=> "YES",
          "fieldTc"=> "YES",
          "field1"=> "NEWFAVEO",
          "spCode"=> "12345721",
          "spName"=> "Ramesh"
        )
      ),
      "partyDOList"=> array(
        array(
          "guid"=> "1513063896827-713997405808",
          "firstName"=> "Test",
          "lastName"=> "Spouse",
          "roleCd"=> "PRIMARY",
          "birthDt"=> "10/10/1970",
          "genderCd"=> "FEMALE",
          "titleCd"=> "MS",
          "relationCd"=> "SPSE",
          "partyAddressDOList"=> array(
            array(
              "addressLine1Lang1"=> "Vaishali",
              "addressLine2Lang1"=> "Mahagun",
              "addressTypeCd"=> "PERMANENT",
              "areaCd"=> "Ghaziabad",
              "cityCd"=> "Ghaziabad",
              "stateCd"=> "UTTAR PRADESH",
              "pinCode"=> "201010",
              "countryCd"=> "IND"
            ),
            array(
              "addressLine1Lang1"=> "Vaishali",
              "addressLine2Lang1"=> "Mahagun",
              "addressTypeCd"=> "COMMUNICATION",
              "areaCd"=> "Ghaziabad",
              "cityCd"=> "Ghaziabad",
              "stateCd"=> "UTTAR PRADESH",
              "pinCode"=> "201010",
              "countryCd"=> "IND"
            )
          ),
          "partyContactDOList"=> array(
            array(
              "contactTypeCd"=> "MOBILE",
              "contactNum"=> "9888883838",
              "stdCode"=> "+91"
            )
          ),
          "partyEmailDOList"=> array(
            array(
              "emailTypeCd"=> "PERSONAL",
              "emailAddress"=> "ashi@monocept.com"
            )
          ),
          "partyIdentityDOList"=> array(
            array(
              "identityTypeCd"=> "PAN",
              "identityNum"=> "ASHIS3737H"
            )
          ),
          "partyQuestionDOList"=> array(
            array(
              "questionSetCd"=> "yesNoExist",
              "questionCd"=> "pedYesNo",
              "response"=> "YES"
            ),
            array(
              "questionSetCd"=> "PEDcancerDetails",
              "questionCd"=> "114",
              "response"=> "YES"
            ),
            array(
              "questionSetCd"=> "PEDcancerDetails",
              "questionCd"=> "cancerExistingSince",
              "response"=> "01/2017"
            ),
            array(
              "questionSetCd"=> "PEDRespiratoryDetails",
              "questionCd"=> "250",
              "response"=> "YES"
            ),
            array(
              "questionSetCd"=> "PEDRespiratoryDetails",
              "questionCd"=> "respiratoryExistingSince",
              "response"=> "10/2017"
            ),
            array(
              "questionSetCd"=> "HEDHealthClaim",
              "questionCd"=> "H002",
              "response"=> "YES"
            ),
            array(
              "questionSetCd"=> "HEDHealthDeclined",
              "questionCd"=> "H003",
              "response"=> "YES"
            ),
            array(
              "questionSetCd"=> "HEDHealthCovered",
              "questionCd"=> "H004",
              "response"=> "YES"
            ),
            array(
              "questionSetCd"=> "HEDCareleafPA",
              "questionCd"=> "P010",
              "response"=> "NO"
            )
          )
        ),
        array(
          "guid"=> "1513063896827-790948913709",
          "firstName"=> "Ashish",
          "lastName"=> "Singh",
          "roleCd"=> "PROPOSER",
          "birthDt"=> "01/01/1975",
          "partyAddressDOList"=> array(
            array(
              "addressLine1Lang1"=> "Vaishali",
              "addressLine2Lang1"=> "Mahagun",
              "addressTypeCd"=> "PERMANENT",
              "areaCd"=> "Ghaziabad",
              "cityCd"=> "Ghaziabad",
              "stateCd"=> "UTTAR PRADESH",
              "pinCode"=> "201010",
              "countryCd"=> "IND"
            ),
            array(
              "addressLine1Lang1"=> "Vaishali",
              "addressLine2Lang1"=> "Mahagun",
              "addressTypeCd"=> "COMMUNICATION",
              "areaCd"=> "Ghaziabad",
              "cityCd"=> "Ghaziabad",
              "stateCd"=> "UTTAR PRADESH",
              "pinCode"=> "201010",
              "countryCd"=> "IND"
            )
          ),
          "genderCd"=> "MALE",
          "titleCd"=> "MR",
          "relationCd"=> "SELF",
          "partyContactDOList"=> array(
            array(
              "contactTypeCd"=> "MOBILE",
              "contactNum"=> "9888883838",
              "stdCode"=> "+91"
            )
          ),
          "partyEmailDOList"=> array(
            array(
              "emailTypeCd"=> "PERSONAL",
              "emailAddress"=> "ashi@monocept.com"
            )
          ),
          "partyIdentityDOList"=> array(
            array(
              "identityTypeCd"=> "PAN",
              "identityNum"=> "ASHIS3737H"
            )
          ),
          "partyQuestionDOList"=> array(
           
           json_decode("{}")
              
            
          )
        )
      ),
      "addOns"=> "UAR,EVERYDAYCARE,CAREWITHNCB",
      "sumInsured"=> "093",
      "term"=> "3",
      "isPremiumCalculation"=> "YES"
    )
  )
);
echo json_encode($data);
$url="https://apiuat.religarehealthinsurance.com/relinterfacerestful/religare/restful/createPolicy";
// Create a new cURL resource

// Initializes a new cURL session
$curl = curl_init($url);
// Set the CURLOPT_RETURNTRANSFER option to true
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// Set the CURLOPT_POST option to true for POST request
curl_setopt($curl, CURLOPT_POST, true);
// Set the request data as JSON using json_encode function
curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));
// Set custom headers for RapidAPI Auth and Content-Type header
curl_setopt($curl, CURLOPT_HTTPHEADER, [
  
  'appid: 554940',
  'signature: VLwAATi/myXGqlG9C14DVIKsLgFjEUAZIizPSIbVdJw=',
  'timestamp: 1545391069685', 
  'Content-Type: application/json'
]);
// Execute cURL request with all previous settings
$response = curl_exec($curl);
// Close cURL session
if($response === false)
{
    echo 'Curl error: ' . curl_error($curl);
}
else
{
    echo $response . PHP_EOL;
}
curl_close($curl);


?>