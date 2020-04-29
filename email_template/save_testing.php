<?php
//include the email file
require 'mail/mailer.php';


$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['mobile'];
$country=$_POST['country'];
$modecontact=$_POST['modeofcontact'];
$modecontactdetails=$_POST['modeofcontactdetails'];
$areyoua=$_POST['areyoua'];
$products=$_POST['products'];
$qoute=$_POST['qoute'];
$message=$_POST['message'];


//client email template
$clientEmailBody ='<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Launchfxm Email Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body style="margin: 0; padding: 0;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td style="padding: 10px 0 30px 0;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="720"
                    style="border: 1px solid #cccccc; border-collapse: collapse;">
                    <tr>
                        <td align="center" style="padding: 20px 0;">
                       <img src="https://launchfxm.com/email_template/img/logo.png" alt="Launchfxm Logo" width="200" height="40" style="display: block;" />
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="color: #707070; font-size: 18px; padding-bottom: 10px;">

                                        Greetings <span style="color: #000000;"><span style="font-weight: 600;">Mr '.$name.',</span></span><br/>
                                        I hope this finds you well.
                                    </td>
                                </tr>

                                <tr>
                                    <td
                                        style="color: #707070; font-size: 12px; line-height: 20px;">
                                        <p>It was a pleasure speaking with you and thank you for your inquiry on how to set up your own Forex brokerage company.</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td
                                        style="color: #707070; font-size: 12px; line-height: 20px;">
                                        <p>Launch FXM is a group of Forex Expert and experienced Broker Consultants and we are here to guide you and help you set up and run your own profitable Forex Brokerage Company.</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td
                                        style="color: #707070; font-size: 12px; line-height: 20px;">
                                        <p>Please go through the below structure and let us know when we can schedule a follow up call  with our technical expert and he will be more than glad to explain everything in detail.</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td align="center"
                                        style="padding: 50px 0 30px 0; color: #707070; font-size: 18px; line-height: 20px;">
                                        <span style="border-bottom: 2px solid #707070;color: #000;padding: 6px 30px;text-transform: uppercase;font-weight: 600;">Our Services</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tbody>
                                                <tr>
                                                <td valign="top" style="border-right: 1px dashed #ccc;width: 33%;">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <img src="https://launchfxm.com/email_template/img/icon/1.png" alt="" width="100%" style="display: block;padding: 20px;box-sizing: border-box;">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="color: #000;font-size: 12px; line-height: 20px;text-align:center;padding: 0 8px;font-weight: 600;">
                                                                    Software Development
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 15px 10px 15px 10px; color: #707070; font-family: Arial, sans-serif; font-size: 12px; line-height: 20px;text-align:center;">
                                                                    <p>Allow broker to define and develop A high-grade turnkey solution, plugin, application, tool or system that’s right for your company.</p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td valign="top" style="border-right: 1px dashed #ccc;width: 33%;">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <img src="https://launchfxm.com/email_template/img/icon/2.png" alt="" width="100%" style="display: block;padding: 20px;box-sizing: border-box;">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="color: #000;font-size: 12px; line-height: 20px;text-align:center;padding: 0 8px;font-weight: 600;">
                                                                    New Broker Setup
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 15px 10px 15px 10px; color: #707070; font-family: Arial, sans-serif; font-size: 12px; line-height: 20px;text-align:center;">
                                                                    Get your brokerage off to a good start by allowing us to assist you with forex broker registration process.
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>

                                                <td valign="top" style="width: 33%;">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <img src="https://launchfxm.com/email_template/img/icon/3.png" alt="" width="100%" style="display: block;padding: 20px;box-sizing: border-box;">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="color: #000;font-size: 12px; line-height: 20px;text-align:center;padding: 0 8px;font-weight: 600;">
                                                                    Website Development
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 15px 10px 15px 10px; color: #707070; font-family: Arial, sans-serif; font-size: 12px; line-height: 20px;text-align:center;">
                                                                    Ensure that your business stands out by trusting us to create a website with fully functional user accounts, CRM and dashboard.
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                                <tr>
                                                <td valign="top" style="border-right: 1px dashed #ccc;border-top: 1px dashed #ccc;width: 33%;">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <img src="https://launchfxm.com/email_template/img/icon/4.png" alt="" width="100%" style="display: block;padding: 20px;box-sizing: border-box;">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="color: #000;font-size: 12px; line-height: 20px;text-align:center;padding: 0 8px;font-weight: 600;">
                                                                    Platform Setup
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 15px 10px 15px 10px; color: #707070; font-family: Arial, sans-serif; font-size: 12px; line-height: 20px;text-align:center;">
                                                                    Avoid complications by having our experts set up and configure your MT4/MT5 platform with any necessary plugins and tools.
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td valign="top" style="border-right: 1px dashed #ccc;border-top: 1px dashed #ccc;width: 33%;">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <img src="https://launchfxm.com/email_template/img/icon/5.png" alt="" width="100%" style="display: block;padding: 20px;box-sizing: border-box;">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="color: #000;font-size: 12px; line-height: 20px;text-align:center;padding: 0 8px;font-weight: 600;">
                                                                    Server Migration
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 15px 10px 15px 10px; color: #707070; font-family: Arial, sans-serif; font-size: 12px; line-height: 20px;text-align:center;">
                                                                    Save time by allowing us to transfer your MT4/MT5 accounts from one server to another.
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>

                                                <td valign="top" style="width: 33%;border-top: 1px dashed #ccc;">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <img src="https://launchfxm.com/email_template/img/icon/6.png" alt="" width="100%" style="display: block;padding: 20px;box-sizing: border-box;">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="color: #000;font-size: 12px; line-height: 20px;text-align:center;padding: 0 8px;font-weight: 600;">
                                                                    Consultancy
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 15px 10px 15px 10px; color: #707070; font-family: Arial, sans-serif; font-size: 12px; line-height: 20px;text-align:center;">
                                                                    Ask our industry experts any questions you may have about the MT4/MT5 platforms. Our consultants are ready to assist you with any problems you encounter.
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td align="center"
                                        style="padding: 50px 0 20px 0; color: #707070; font-size: 18px; line-height: 20px;">
                                        <span style="border-bottom: 2px solid #707070;color: #000;padding: 6px 30px;font-weight: 600;">Steps to becoming a FOREX BROKER</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td
                                        style="text-align:center;color: #707070; font-size: 12px; line-height: 20px;">
                                        The following are the major steps you need to take to becoming a Forex Broker.
                                    </td>
                                </tr>

                                <tr>
                                    <td style="line-height: 20px;padding: 50px 0 30px 0;">
                                        <img src="https://launchfxm.com/email_template/img/steps.png" width="100%;">
                                    </td>
                                </tr>

                                <tr>
                                    <td
                                        style="color: #707070; font-size: 12px; line-height: 20px;">
                                        <p>Click Here to have a detailed explanation on the steps you need to take to set up your own brokerage company forex company formation comes in the following form white label- Be the complete Authority.</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td
                                        style="color: #707070; font-size: 12px; line-height: 20px;">
                                        <p>Our white label package was designed to help start-ups business with a detailed plan and complete solution. As the White label broker, you will have complete access to the trillion-dollar market and transparency over the infrastructure of the market.</p>
                                    </td>
                                </tr>

                                  <tr>
                                    <td>
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tbody>
                                                <tr>
                                                <td valign="top" style="width: 50%;">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <td style="padding: 30px 0 10px 0; color: #707070; font-size: 12px; line-height:20px;">
                                                                    <span style="border-bottom: 2px solid #707070;color: #000;padding: 0px 80px 5px 0px;font-weight:600;">The Key Features Include</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <ol style="padding:10px;margin:0;font-size:12px;color: #707070;">
                                                                        <li style="padding-bottom: 10px;"> Can access the complete Market</li>
                                                                        <li style="padding-bottom: 10px;"> Access the Raw liquidity</li>
                                                                        <li style="padding-bottom: 10px;"> Leading spreads from 0.0 pips</li>
                                                                       <li style="padding-bottom: 10px;"> Integrate with leading MT4/MT5 Platforms</li>
                                                                        <li style="padding-bottom: 10px;"> A client area that can be customised to your specifications</li>
                                                                    </ol>
                                                                </td>
                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td valign="top" style="width: 50%;">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <td style="padding: 30px 0 10px 0; color: #707070; font-size: 12px; line-height:20px;">
                                                                    <span style="border-bottom: 2px solid #707070;color: #000;padding: 0px 120px 5px 0px;font-weight:600;">Requirements</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <ol style="padding:10px;margin:0;font-size:12px;color: #707070;">
                                                                        <li style="padding-bottom: 10px;"> Registered company</li>
                                                                        <li style="padding-bottom: 10px;"> Dedicated corporate bank account</li>
                                                                        <li style="padding-bottom: 10px;"> Approval from the related financial authority</li>
                                                                        <li style="padding-bottom: 10px;"> Software like MT4/MT5, TRADER </li>
                                                                        <li style="padding-bottom: 10px;"> Responsive Website</li>
                                                                        <li style="padding-bottom: 10px;"> Payment Gateways</li>
                                                                        <li style="padding-bottom: 10px;"> Trader Room &amp; Back office</li>
                                                                        <li style="padding-bottom: 10px;"> Broker Plugins</li>
                                                                    </ol>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                 <tr>
                                    <td
                                        style="color: #707070; font-size: 12px; line-height: 20px;">
                                        <p>* We will set everything for you. Our service charges are more affordable and flexible than other providers.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center"
                                        style="padding: 40px 0 20px 0; color: #707070; font-size: 18px; line-height: 20px;">
                                        <span style="border-bottom: 2px solid #707070;color: #000;padding: 6px 30px;text-transform: uppercase;font-weight:600;">FORMATION SET-UP</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="color: #707070; font-size: 12px; line-height: 20px;text-align: center;">
                                        Involves the following
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="padding: 20px 0 0 0; color: #707070; font-size: 12px; ">
                                        <ul style="padding-left: 15px;list-style-type: lower-roman;">
                                            <li style="padding-bottom: 10px;">Legal Formation: This will include the company formation, obtaining the necessary licenses and setting up a corporate bank account.</li>
                                            <li style="padding-bottom: 10px;">Technology Setup: This will includes the website, platforms, CRM, other plugins and tools required to run your brokerage.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="padding: 20px 0 0 0; color: #000000; font-size: 12px; line-height: 20px;">
                                        <ol style="padding-left: 15px;">
                                            <li>
                                                <span style="font-weight:600;">For Forex Company formation we recommend SAINT VINCENT for Legal Setup.</span>
                                                <p style="color: #707070; font-size: 12px; line-height: 20px;">
                                                        Our white label package was designed to help start-ups business with a detailed plan and complete solution. As the White label broker, you will have complete access to the trillion-dollar market and transparency over the infrastructure of the market.
                                                </p>
                                                <div style="padding:20px 30px;">
                                                    <p style="color:#333333">The Cost for a company formation is as follows;</p>
                                                        <table>
                                                            <tr>
                                                                <td style="width:50%;color: #333333;font-weight:600;">a) SVG is $3,000 (one time)</td>
                                                                <td style="width:50%;color: #333333;font-weight:600;">b) In the UK is 1800$ and with this you can get a bank account in Switzerland</td>
                                                            </tr>

                                                        </table>

                                                    <p style="color: #707070">If you need a bank account that comes with add-ons. We provide a variety of bank account options and we will get you an account with a reputed bank.</p>
                                                </div>

                                            </li>
                                            <li style="padding-bottom: 10px;font-weight:600;"> The Cost for website development and maintenance is $2000 one time (a 15 page site)</li>
                                            <li style="padding-bottom: 10px;font-weight:600;"> MT5 Grey Label Manager - A and B book $1899/ Monthly</li>
                                            <li style="padding-bottom: 10px;font-weight:600;"> MT5 White label package is $6000 for Meta quotes(one-time) and $3999/Monthly for Mobile and desktop terminal.</li>
                                            <li style="padding-bottom: 10px;font-weight:600;">We have the following CRM packages</li>

                                        </ol>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tbody>
                                                <tr>
                                                <td valign="top" style="border-right: 1px dashed #ccc;width: 33%;">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <td style="color: #000;font-size: 12px; line-height: 20px;padding: 0 10px 0 0;font-weight:600;">
                                                                    a) Basic CRM $800/Monthly
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="color: #707070; font-size: 12px; line-height: 20px;">
                                                                    <ul>
                                                                        <li>2000$ set up fee</li>
                                                                        <li>Automatic account creation</li>
                                                                        <li>Deposit and withdrawal</li>
                                                                        <li>Active Trades and Traders details</li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>

                                                <td valign="top" style="border-right: 1px dashed #ccc;width: 33%;">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <td style="color: #000;font-size: 12px; line-height: 20px;padding: 0 10px;font-weight:600;">
                                                                    b) Advanced CRM $1200/ Monthly
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="color: #707070; font-size: 12px; line-height: 20px;">
                                                                    <ul>
                                                                        <li>2000$ set up fee</li>
                                                                        <li>Automatic account creation</li>
                                                                        <li>Deposit and withdrawal</li>
                                                                        <li>Active Trades and Traders details</li>
                                                                        <li>Support ticket system</li>
                                                                        <li>IB Multilevel Access which goes upto 4 levels</li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>

                                                <td valign="top" style="width: 33%;">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <td style="color: #000;font-size: 12px; line-height: 20px;padding: 0 10px;font-weight:600;">
                                                                    c) Pro CRM $1500/Monthly
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="color: #707070; font-size: 12px; line-height: 20px;">
                                                                    <ul>
                                                                        <li>2000$ set up fee</li>
                                                                        <li>Automatic account creation</li>
                                                                        <li>Deposit and withdrawal</li>
                                                                        <li>Active Trades and Traders details</li>
                                                                        <li>Support ticket system</li>
                                                                        <li>IB Multilevel Access which goes upto 4 levels</li>
                                                                        <li>Demo contest plug- in; Brokers can run a demo contest to attract more clients</li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 20px 0 0 0; color: #707070; font-size: 12px; line-height: 20px;">It was a pleasure speaking with you and thank you for your inquiry on how to set up your own Forex brokerage company.
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
';

$supportEmailBody ='
<html>
    <head>
        <style>
            table,td,th{
                border:2px solid #000;
                border-collapse: collapse;

            }
        </style>
    </head>
    <body>
    <p>Call from LaunchFXM popup</p>
    <table>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Country</th>
    <th>Phone Number</th>
    <th>mode</th>
    <th>modedetails</th>
    <th>Are You a?</th>
    <th>Products</th>
    <th>Quote</th>
    <th>Message</th>
    </tr>
    <tr>
    <td>'.$name.'</td>
    <td>'.$email.'</td>
    <td>'.$country.'</td>
    <td>'.$phone.'</td>
    <td>'.$modecontact.'</td>
    <td>'.$modecontactdetails.'</td>
    <td>'.$areyoua.'</td>
    <td>'.$products.'</td>
    <td>'.$qoute.'</td>
    <td>'.$message.'</td>
    </tr>
    </table>
    </body>
    </html>
';

//to avoid empty entries
if($name==""||$email==""||$phone==""||$country==""||$areyoua==""||$products==""||$qoute==""||$modecontact==""||$modecontactdetails==""){
 $dataSupport =  array(
	 'email' => 'drananthapriyan@gmail.com',
	 'body' => $supportEmailBody
	 );
	sendEmail($dataSupport);
}
//to avoid empty entries

else{
include('connect.php');
$sql = "INSERT INTO freedemo (fname,email,phonenumber,country,modeofcontact,modeofcontactdetails,areyoua,products,qoute,fmessage)
VALUES ('$name', '$email','$phone', '$country', '$modecontact','$modecontactdetails','$areyoua', '$products', '$qoute', '$message')";

if ($conn->query($sql) === TRUE) {
	 $dataClient =  array(
	 'email' => $_POST['email'],
	 'body' => $clientEmailBody
	 );
    sendEmail($dataClient);
	$dataSupport =  array(
	 'email' => 'sales@launchfxm.com',
	 'body' => $supportEmailBody
	 );
	sendEmail($dataSupport);


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>

