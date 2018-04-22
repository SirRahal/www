<?php
/*
Credits: Bit Repository
URL: http://www.bitrepository.com/
*/

include 'config.php';

error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if($post)
{

    $name = stripslashes($_POST['ai_firstName'] . " ". $_POST['ai_lastName']);
    $email = trim($_POST['ai_email']);
    $subject = stripslashes("Job Application: ".$name);

    $message ="<div><h1>Job application below:</h1></div>";
    $message .= "<table>";
    $message .= getHTMLTitle("Application Information");
    foreach ($_POST as $key => $value) {

        if($key == "ehs_name"){
            $message .= getHTMLTitle("Education");
        }
        if($key == "refOne_name"){
            $message .= getHTMLTitle("References");
        }
        if($key == "peOne_company"){
            $message .= getHTMLTitle("Previous Employment");
        }
        if($key == "ms_branch"){
            $message .= getHTMLTitle("Military Service");
        }

        $message .= "<tr>";
        $message .= "<td style='width:200px; font-weight: Bold;'>";

        $cleanKey = getKeyCleanName($key);

        $message .= $cleanKey.":";
        $message .= "</td>";
        $message .= "<td>";
        $message .= $value;
        $message .= "</td>";
        $message .= "</tr>";
    }
    $message .= "</table>";

    $error = '';

    if(!$error)
    {
        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Create email headers
        $headers .= 'From: '.$name." <".$email.">\r\n".
            'Reply-To: '.$email."\r\n".
            'X-Mailer: PHP/' . phpversion();

        $mail = mail(WEBMASTER_EMAIL, $subject, $message,$headers);


        if($mail)
        {
            echo $mail;
        }

    }


}

function getHTMLTitle($title){
    $htmlTitle = "";

    $htmlTitle .= "<tr style='background: #494949; color:white; padding: 3px; width:100%; column-span:2'>";
    $htmlTitle .= "<td style='width:200px; font-weight: Bold;'>";
    $htmlTitle .= $title;
    $htmlTitle .= "</td>";
    $htmlTitle .= "<td >";
    $htmlTitle .= "</td>";
    $htmlTitle .= "</tr>";

    return $htmlTitle;
}

function getKeyCleanName($key){

    Switch($key){
        case "ai_lastName":
            $key = "Last Name";
            break;
        case "ai_firstName":
            $key ="First Name";
            break;
        case "ai_middleInitial":
            $key ="Middle Initial";
            break;
        case "ai_date":
            $key ="Date";
            break;
        case "ai_address":
            $key ="Address";
            break;
        case "ai_apt":
            $key ="Apartment";
            break;
        case "ai_city":
            $key ="City";
            break;
        case "ai_state":
            $key ="State";
            break;
        case "ai_zip":
            $key ="Zip";
            break;
        case "ai_phone":
            $key ="Phone";
            break;
        case "ai_email":
            $key ="Email";
            break;
        case "ai_dateAvailable":
            $key ="Date of Available";
            break;
        case "ai_ssn":
            $key ="SSN";
            break;
        case "ai_salary":
            $key ="Wanted Salary";
            break;
        case "ai_position":
            $key ="Desired Position";
            break;
        case "ai_partTime":
            $key ="Part Time Position";
            break;
        case "ai_seasonal":
            $key ="Seasonal Position";
            break;
        case "ai_temporary":
            $key ="Temporary Position";
            break;
        case "ai_fullTime":
            $key ="Full Time Position";
            break;
        case "ai_day":
            $key ="Available Date";
            break;

        case "ai_graveyard":
            $key = "Graveyard Shift";
            break;
        case "ai_swing":
            $key = "Swing Shift";
            break;
        case "ai_rotation":
            $key = "Rotation Shift";
            break;
        case "ai_CanPerform":
            $key = "Can Perform";
            break;
        case "ai_workedAtMidway":
            $key = "Has Worked for MMM";
            break;
        case "ai_haventWorkedAtMidway":
            $key = "Hasn't Worked for MMM";
            break;


        case "ai_USCitizen":
            $key ="US Citizen";
            break;
        case "ai_Eligible":
            $key ="Eligible to Work";
            break;
        case "ai_workedDateStart":
            $key ="Start Date";
            break;
        case "ai_workedDateEnd":
            $key ="End Date";
            break;
        case "ai_felonyExplain":
            $key ="Felony Explained";
            break;
        case "ai_felonyYes":
            $key ="Had a Felony";
            break;
        case "ai_felonyNo":
            $key ="Haven't had a Felony";
            break;
        case "ehs_name":
            $key ="High School Name";
            break;
        case "ehs_Address":
            $key ="High School Address";
            break;
        case "ehs_fromDate":
            $key ="Start Date";
            break;
        case "ehs_toDate":
            $key ="End Date";
            break;
        case "ehs_degree":
            $key ="Degree";
            break;
        case "ec_name":
            $key ="College Name";
            break;
        case "ec_Address":
            $key ="College Address";
            break;
        case "ec_fromDate":
            $key ="Start Date";
            break;
        case "ec_toDate":
            $key ="End Date";
            break;
        case "ec_degree":
            $key ="Degree";
            break;
        case "eo_name":
            $key ="Other Education Name";
            break;
        case "eo_Address":
            $key ="Address";
            break;
        case "eo_fromDate":
            $key ="Start Date";
            break;
        case "eo_toDate":
            $key ="End Date";
            break;
        case "eo_degree":
            $key ="Degree";
            break;
        case "refOne_name":
            $key = "First Reference Name";
            break;
        case "refOne_relationship":
            $key = "Relationship";
            break;
        case "refOne_company":
            $key = "Company";
            break;
        case "refOne_phone":
            $key = "Phone";
            break;
        case "refOne_address":
            $key = "Address";
            break;
        case "refTwo_name":
            $key = "Second Reference Name";
            break;
        case "refTwo_relationship":
            $key = "Relationship";
            break;
        case "refTwo_company":
            $key = "Company";
            break;
        case "refTwo_phone":
            $key = "Phone";
            break;
        case "refTwo_address":
            $key = "Address";
            break;
        case "refThree_name":
            $key = "Third Reference Name";
            break;
        case "refThree_relationship":
            $key = "Relationship";
            break;
        case "refThree_company":
            $key = "Company";
            break;
        case "refThree_phone":
            $key = "Phone";
            break;
        case "refThree_address":
            $key = "Address";
            break;
        case "peOne_company":
            $key = "First Company Name";
            break;
        case "peOne_phone":
            $key = "Phone";
            break;
        case "peOne_address":
            $key = "Address";
            break;
        case "peOne_supervisor":
            $key = "Supervisor";
            break;
        case "peOne_jobTitle":
            $key = "Job Title";
            break;
        case "peOne_startingSalary":
            $key = "Start Salary";
            break;
        case "peOne_endingSalary":
            $key = "Ending Salary";
            break;
        case "peOne_responsibilities":
            $key = "Responsibilities";
            break;
        case "peOne_from":
            $key = "Start Date";
            break;
        case "peOne_to":
            $key = "End Date";
            break;
        case "peOne_reasonForLeaving":
            $key = "Reason For Leaving";
            break;
        case "peOne_canContact":
            $key = "Can Contact";
            break;
        case "peOne_canNotContact":
            $key = "Can Not Contact";
            break;
        case "peTwo_company":
            $key = "Second Company Name";
            break;
        case "peTwo_phone":
            $key = "Phone";
            break;
        case "peTwo_address":
            $key = "Address";
            break;
        case "peTwo_supervisor":
            $key = "Supervisor";
            break;
        case "peTwo_jobTitle":
            $key = "Job Title";
            break;
        case "peTwo_startingSalary":
            $key = "Start Salary";
            break;
        case "peTwo_endingSalary":
            $key = "Ending Salary";
            break;
        case "peTwo_responsibilities":
            $key = "Responsibilities";
            break;
        case "peTwo_from":
            $key = "Start Date";
            break;
        case "peTwo_to":
            $key = "End Date";
            break;
        case "peTwo_reasonForLeaving":
            $key = "Reason For Leaving";
            break;
        case "peTwo_canContact":
            $key = "Can Contact";
            break;
        case "peTwo_canNotContact":
            $key = "Can Not Contact";
            break;
        case "peThree_company":
            $key = "Third Company Name";
            break;
        case "peThree_phone":
            $key = "Phone";
            break;
        case "peThree_address":
            $key = "Address";
            break;
        case "peThree_supervisor":
            $key = "Supervisor";
            break;
        case "peThree_jobTitle":
            $key = "Job Title";
            break;
        case "peThree_startingSalary":
            $key = "Start Salary";
            break;
        case "peThree_endingSalary":
            $key = "Ending Salary";
            break;
        case "peThree_responsibilities":
            $key = "Responsibilities";
            break;
        case "peThree_from":
            $key = "Start Date";
            break;
        case "peThree_to":
            $key = "End Date";
            break;
        case "peThree_reasonForLeaving":
            $key = "Reason For Leaving";
            break;
        case "peThree_canContact":
            $key = "Can Contact";
            break;
        case "peThree_canNotContact":
            $key = "Can Not Contact";
            break;
        case "ms_branch":
            $key = "Military Service Branch";
            break;
        case "ms_from":
            $key = "Start Date";
            break;
        case "ms_to":
            $key = "End Date";
            break;
        case "ms_rank":
            $key = "Ranking";
            break;
        case "ms_dischargeType":
            $key = "Discharge Type";
            break;
        case "ms_explain":
            $key = "Explain";
            break;
        case "form_Sign":
            $key = "Signature";
            break;
        case "form_date":
            $key = "Signed Date";
            break;
    }

    return $key;
}

?>