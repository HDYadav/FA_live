<?php

$xml = '<?xml version="1.0" encoding="ISO-8859-1"?>
<Root>
  <Uid>47476951</Uid>
  <VendorCode>webagg</VendorCode>
  <VendorUserId>webagg</VendorUserId>
  <PolicyHeader>
    <PolicyStartDate>14/09/2016</PolicyStartDate>
    <PolicyEndDate>13/09/2019</PolicyEndDate>
    <AgentCode>60000272</AgentCode>
    <BranchCode>10</BranchCode>
    <MajorClass>HTO</MajorClass>
    <ContractType>HTO</ContractType>
    <METHOD>CRT</METHOD>
    <PolicyIssueType>I</PolicyIssueType>
    <PolicyNo>EW001588</PolicyNo>
    <ClientID />
    <ReceiptNo />
  </PolicyHeader>
  <POS_MISP>
    	<Type></Type>
	<PanNo>BJGPR360L</PanNo>
  </POS_MISP>
  <Client>
    <ClientType>I</ClientType>
    <CreationType>C</CreationType>
    <Salutation>MR</Salutation>
    <FirstName>Pranjal</FirstName>
    <LastName>Mishra</LastName>
    <DOB>13/11/1989</DOB>
    <Gender>M</Gender>
    <MaritalStatus>S</MaritalStatus>
    <Occupation>SVCM</Occupation>
     <PANNo>BGJPR3605L</PANNo>
     <GSTIN />
     <AadharNo />
     <CKYCNo />
     <EIANo />
    <Address1>
      <AddrLine1>Mumbai, Mumbai, 1119-A, ABC.</AddrLine1>
      <AddrLine2>Mumbai, Mumbai, 1119-A, ABC.</AddrLine2>
      <AddrLine3 />
      <Landmark />
      <Pincode>400705</Pincode>
      <City>Thane</City>
      <State>Maharashtra</State>
      <Country>IND</Country>
      <AddressType>R</AddressType>
      <HomeTelNo />
      <OfficeTelNo />
      <FAXNO />
      <MobileNo>Mumbai, Mumbai, 1119-A, ABC.</MobileNo>
      <EmailAddr>asdasd@asd.as</EmailAddr>
    </Address1>
    <Address2>
      <AddrLine1 />
      <AddrLine2 />
      <AddrLine3 />
      <Landmark />
      <Pincode>400705</Pincode>
      <City />
      <State />
      <Country />
      <AddressType />
      <HomeTelNo />
      <OfficeTelNo />
      <FAXNO />
      <MobileNo />
      <EmailAddr />
    </Address2>
  </Client>
  <Receipt>
    <UniqueTranKey>FGEWQ000000044720</UniqueTranKey>
    <CheckType />
    <BSBCode />
    <TransactionDate>13/09/2016 00:00:00</TransactionDate>
    <ReceiptType>IVR</ReceiptType>
    <Amount>4440.00</Amount>
    <TCSAmount />
    <TranRefNo>403993715514943166</TranRefNo>
    <TranRefNoDate>13/09/2016 00:00:00</TranRefNoDate>
  </Receipt>
  <Risk>
    <PolicyType>HTF</PolicyType>
    <Duration>3</Duration>
    <Installments>QUARTERLY</Installments>
    <IsFgEmployee>N</IsFgEmployee>
    <BeneficiaryDetails>
      <Member>
        <MemberId>1</MemberId>
        <InsuredName>Rohit Singh</InsuredName>
        <InsuredDob>12/09/1990</InsuredDob>
        <InsuredGender>M</InsuredGender>
        <InsuredOccpn>ARCH</InsuredOccpn>
        <CoverType>VITAL</CoverType>
        <SumInsured>1000000</SumInsured>
        <DeductibleDiscount>25000</DeductibleDiscount>
        <Relation>SELF</Relation>
        <NomineeName>Singh</NomineeName>
        <NomineeRelation>PARE</NomineeRelation>
        <MedicalLoading>0</MedicalLoading>
        <PreExstDisease>N</PreExstDisease>
        <DiseaseMedicalHistoryList>
          <DiseaseMedicalHistory>
            <PreExistingDiseaseCode />
            <MedicalHistoryDetail />
          </DiseaseMedicalHistory>
        </DiseaseMedicalHistoryList>
      </Member>
      <Member>
        <MemberId>2</MemberId>
        <InsuredName>Fname Lname</InsuredName>
        <InsuredDob>19/09/1984</InsuredDob>
        <InsuredGender>F</InsuredGender>
        <InsuredOccpn>ARMY</InsuredOccpn>
        <CoverType>VITAL</CoverType>
        <SumInsured>1000000</SumInsured>
        <DeductibleDiscount>25000</DeductibleDiscount>
        <Relation>PARE</Relation>
        <NomineeName>Singh</NomineeName>
        <NomineeRelation>CHLD</NomineeRelation>
        <MedicalLoading>0</MedicalLoading>
        <PreExstDisease>N</PreExstDisease>
        <DiseaseMedicalHistoryList>
          <DiseaseMedicalHistory>
            <PreExistingDiseaseCode />
            <MedicalHistoryDetail />
          </DiseaseMedicalHistory>
        </DiseaseMedicalHistoryList>
      </Member>
      <Member>
        <MemberId>3</MemberId>
        <InsuredName>Fname Lname</InsuredName>
        <InsuredDob>10/09/1986</InsuredDob>
        <InsuredGender>M</InsuredGender>
        <InsuredOccpn>ARCH</InsuredOccpn>
        <CoverType>VITAL</CoverType>
        <SumInsured>1000000</SumInsured>
        <DeductibleDiscount>25000</DeductibleDiscount>
        <Relation>PARE</Relation>
        <NomineeName>Singh</NomineeName>
        <NomineeRelation>CHLD</NomineeRelation>
        <MedicalLoading>0</MedicalLoading>
        <PreExstDisease>N</PreExstDisease>
        <DiseaseMedicalHistoryList>
          <DiseaseMedicalHistory>
            <PreExistingDiseaseCode />
            <MedicalHistoryDetail />
          </DiseaseMedicalHistory>
        </DiseaseMedicalHistoryList>
      </Member>
    </BeneficiaryDetails>
  </Risk>
</Root>';
 
 
//The URL that you want to send your XML to.
$url = 'http://fglpg001.futuregenerali.in/BO/Service.svc';
 
//Initiate cURL
$curl = curl_init($url);
 
//Set the Content-Type to text/xml.
curl_setopt ($curl, CURLOPT_HTTPHEADER, array("Content-Type: text/xml"));
 
//Set CURLOPT_POST to true to send a POST request.
curl_setopt($curl, CURLOPT_POST, true);
 
//Attach the XML string to the body of our request.
curl_setopt($curl, CURLOPT_POSTFIELDS, $xml);
 
//Tell cURL that we want the response to be returned as
//a string instead of being dumped to the output.
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 
//Execute the POST request and send our XML.
$result = curl_exec($curl);
 
//Do some basic error checking.
if(curl_errno($curl)){
    throw new Exception(curl_error($curl));
}
 
//Close the cURL handle.
curl_close($curl);
 
//Print out the response output.
print_r($result);
?>