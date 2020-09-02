<?php
$ques="Insurance 
Loss prevention
enjoy peace of mind and plan one’s business more effectively
Lloyds
One decides to bear the risk and its effects 
Insurance pays when there is loss of asset 
Insurance is a method of sharing the losses of a ‘few’ by ‘many’ 
To assess the risk for rating purposes 
Sharing the losses of few by many 
Insurance 
Cleverness 
Motor third party liability 
Deductible 
IGMS 
Complaint against insurance companies, brand and shopkeepers 
District Forum 
By being on time, showing interest and being confident 
Ethical behaviour helps in developing trust between the agent and theinsurer 
Paying attention to the speaker, giving an occasional nod and smile and providing feedback
Integrated Grievance Management System 
State Commission
Shopkeeper not advising the customer on the best product in a category
Insurance Ombudsman
Insurance Ombudsman operates only within the specified territorial limits
The complaint is to be made in writing 
Within one year of rejection of the complaint by the insurer
Complainant has to approach a consumer forum prior to the Ombudsman 
No fee or charges need to be paid  
Yes, complaint can be launched against private insurers  
Consideration 
Misrepresentation 
Coercion 
They are contracts between two parties (insurer and insured) as perrequirements of Indian Contract Act, 1872 
Bribe 
Minor 
Disclosing known material facts on an insurance proposal form 
Friends taking out insurance on one another 
At the time of taking out insurance
Falling off a horse 
Subsidy 
Prof Hubener
Term insurance plan    
Air 
Natural wear and tear 
Human Life Value   
Mortality is related to age 
Lower yields
Secure investment 
Higher
Remain constant";
$lower=strtolower($ques);
/*echo $lower;*/
$res = str_replace(' ', '_', $lower);
$string = trim(preg_replace('/\s\s+/', '",', $lower));
$string2 = str_replace('",', '","', $string);
//echo $string2;


$final=str_replace(' ', '_', $string2);
echo $final;

 ?>