<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ZeWoke</title>
  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="floating-wpp.css">
  <script type="text/javascript" src="floating-wpp.js"></script>
  <link href="style.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <?php
  require('data base/conn.php');
  ini_set('display_errors', 0);

  if (isset($_POST['cname'])) {
    // general information start
    $company_name = stripcslashes($_REQUEST['cname']);
    $company_name = mysqli_real_escape_string($mysqli, $company_name);
    $website = stripcslashes($_REQUEST['website']);
    $website = mysqli_real_escape_string($mysqli, $website);
    $first_name = stripcslashes($_REQUEST['fname']);
    $first_name = mysqli_real_escape_string($mysqli, $first_name);
    $last_name = stripcslashes($_REQUEST['lname']);
    $last_name = mysqli_real_escape_string($mysqli, $last_name);
    date_default_timezone_set("Asia/kolkata");
    $trn_date = date("Y-m-d H:i:s");
    $business_register = stripcslashes($_REQUEST['business_register']);
    $business_register = mysqli_real_escape_string($mysqli, $business_register);
    $no_of_employee = stripcslashes($_REQUEST['no_of_employee']);
    $no_of_employee = mysqli_real_escape_string($mysqli, $no_of_employee);
    $user_email = stripcslashes($_REQUEST['uemail']);
    $user_email = mysqli_real_escape_string($mysqli, $user_email);
    $data_center = stripcslashes($_REQUEST['data_center']);
    $data_center = mysqli_real_escape_string($mysqli, $data_center);
    $country = stripcslashes($_REQUEST['country']);
    $country = mysqli_real_escape_string($mysqli, $country);
    $state = stripcslashes($_REQUEST['state']);
    $state = mysqli_real_escape_string($mysqli, $state);
    $city = stripcslashes($_REQUEST['city']);
    $city = mysqli_real_escape_string($mysqli, $city);
    $street_address = stripcslashes($_REQUEST['street_address']);
    $street_address = mysqli_real_escape_string($mysqli, $street_address);
    $zip_code = stripcslashes($_REQUEST['zip_code']);
    $zip_code = mysqli_real_escape_string($mysqli, $zip_code);
    $phone_number = stripcslashes($_REQUEST['phone_number']);
    $phone_number = mysqli_real_escape_string($mysqli, $phone_number);

    // general information end

    // site information start

    $primary_expertise = stripcslashes($_REQUEST['primary_expertise']);
    $primary_expertise = mysqli_real_escape_string($mysqli, $primary_expertise);
    $products_services = $_REQUEST['products_services'];
    if (!$products_services) {
      $products_services1 = 0;
    } else {
      $products_services1 = implode(',', $products_services);
      $products_services1 = mysqli_real_escape_string($mysqli, $products_services1);
    }
    $current_email_hosting = $_REQUEST['current_email_hosting'];
    if (!$current_email_hosting) {
      $current_email_hosting1 = 0;
    } else {
      $current_email_hosting1 = implode(',', $current_email_hosting);
      $current_email_hosting1 = mysqli_real_escape_string($mysqli, $current_email_hosting1);
    }
    $billing_management_platform = $_REQUEST['billing_management_platform'];
    if (!$billing_management_platform) {
      $billing_management_platform1 = 0;
    } else {
      $billing_management_platform1 = implode(',', $billing_management_platform);
      $billing_management_platform1 = mysqli_real_escape_string($mysqli, $billing_management_platform1);
    }
    $engagement_of_interest = $_REQUEST['engagement_of_interest'];
    if (!$engagement_of_interest) {
      $engagement_of_interest1 = 0;
    } else {
      $engagement_of_interest1 = implode(',', $engagement_of_interest);
      $engagement_of_interest1 = mysqli_real_escape_string($mysqli, $engagement_of_interest1);
    }
    $target_marget = $_REQUEST['target_marget'];
    if (!$target_marget) {
      $target_marget1 = 0;
    } else {
      $target_marget1 = implode(',', $target_marget);
      $target_marget1 = mysqli_real_escape_string($mysqli, $target_marget1);
    }
    $plan_to_succeed_zewoke_partner = stripcslashes($_REQUEST['plan_to_succeed_zewoke_partner']);
    $plan_to_succeed_zewoke_partner = mysqli_real_escape_string($mysqli, $plan_to_succeed_zewoke_partner);
    $how_hear_zewoke_partner_program = stripcslashes($_REQUEST['how_hear_zewoke_partner_program']);
    $how_hear_zewoke_partner_program = mysqli_real_escape_string($mysqli, $how_hear_zewoke_partner_program);
    $i_agree_terms_conditions = stripcslashes($_REQUEST['i_agree']);
    $i_agree_terms_conditions = mysqli_real_escape_string($mysqli, $i_agree_terms_conditions);
    // site information end


    $query = "INSERT into `partners_info`(company_name,website,first_name,last_name,trn_date,business_register,no_of_employee,user_email,data_center,country,state,city,street_address,zip_code,phone_number,primary_expertise,products_services,current_email_hosting,billing_management_platform,engagement_of_interest,target_marget,plan_to_succeed_zewoke_partner,how_hear_zewoke_partner_program,i_agree_terms_conditions) VALUES('$company_name','$website','$first_name','$last_name','$trn_date','$business_register','$no_of_employee','$user_email','$data_center','$country','$state','$city','$street_address','$zip_code','$phone_number','$primary_expertise','$products_services1','$current_email_hosting1','$billing_management_platform1','$engagement_of_interest1','$target_marget1','$plan_to_succeed_zewoke_partner','$how_hear_zewoke_partner_program','$i_agree_terms_conditions')";
    $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    if ($result) {
  ?><div class="d-flex justify-content-center mt-5">
        <div class='mt-5 px-5 text-center user-alert container-opacity py-5'>
          <h2 id="demo" class=''>Thanks for your ardent interest in partnering with us. Our team will shortly revert to you!</h2>
        </div>
      </div>

    <?php
    } else {
      echo "0";
    }
  } else {
    ?> <div class="left-side">
      <img src="img/zewoke partnership2.png" class="col-12">
      <!-- <div class="py-2">
                  <img src="img/logo-white.png" class="col-4"/>
      
               </div>
      
               <div class="bg-dark rounded-3 px-3 py-3 mt-4 mx-2 text-center">
                  <img class="col-4 ceo-img mt-3 mb-2" src="img/ceo.jpg"/>
                  <h4 class="m-0">Sujita G</h4>
                  <h5 class="pb-1 m-0">CEO, MDO ZeWoke</h5>
                  <p class="left-content py-2">
                      "Twenty-two years in the world of technology for business, my company has become an agent of change as a result of working with ZeWoke. A ZeWoke partnership is more than just an association; it's a way of understanding business in an organic, ethical way. A definite win-win from every perspective."
                  </p>
          
               </div> -->
    </div>
    <div class="right-side">
      <!-- Add more content here to enable scrolling -->
      <form class="form" action="" method="post" name="main-form">
        <div class="py-3">
          <!-- General questions start -->
          <section class="border-white border-bottom border-2 py-2">
            <div class="fs-2 fw-bold py-3">Apply to become a <span class="zewoke-color"> ZeWoke</span> Partner</div>
            <div class="hr-line my-3"></div>
            <p class="fs-5">
              ZeWoke is a global company with diverse partners from around the world. Our partners are committed to delivering innovative solutions and outstanding support in multiple languages.
            </p>
            <!--Form-group  start -->
            <!-- single question start -->
            <div class="fs-2 fw-bold py-3">COMPANY DETAILS</div>
            <div class="form-bdr"></div>
            <div class=" row fs-5">
              <div class="py-2  col-md-6">
                <div class=" fw-normal"> <label for="cname">Company Name:<span class="text-danger">*</span></label></div>
                <div class=" text-start"><input class="outline-custom" type="text" id="cname" name="cname" placeholder=""></div>
                <div class="pp-field-info">Please add your name, if you don't have a registered business entity</div>
              </div>
              <!-- single question end -->

              <!-- single question start -->
              <div class="py-2  col-md-6">
                <div class=" fw-normal "><label for="website">Website:</label></div>
                <div class=" text-start"><input class="outline-custom" type="text" id="website" name="website" placeholder=""></div>
              </div>
              <!-- single question end -->
            </div>
            <!--Form-group  end -->
            <!--Form-group  start -->
            <!-- single question start -->
            <div class=" row fs-5">
              <div class="py-2 col-md-6 ">
                <div class="fw-normal "><label for="fname">First Name:<span class="text-danger">*</span></label></div>
                <div class="text-start"><input class="outline-custom" type="text" id="fname" name="fname" placeholder=""></div>
              </div>
              <!-- single question end -->

              <!-- single question start -->
              <div class="py-2 col-md-6 ">
                <div class="fw-normal "><label for="lname">Last Name:<span class="text-danger">*</span></label></div>
                <div class="text-start"><input class="outline-custom" type="text" id="lname" name="lname" placeholder=""></div>
              </div>
            </div>
            <!-- single question end -->

            <!--  start -->
            <!-- single question start -->
            <div class=" row fs-5">
              <div class="py-2 col-md-6 ">
                <div class="fw-normal "><label for="business_register">Business Registration:</label></div>
                <div class="text-start"><input class="outline-custom" type="text" id="business_register" name="business_register" placeholder=""></div>
                <div class="pp-field-info">Chamber of Commerce</div>
              </div>
              <!-- single question end -->

              <!-- single question start -->
              <div class="py-2 col-md-6 ">
                <div class="fw-normal "><label for="no_of_employee">No. of Employees:</label></div>
                <div class="text-start"><input class="outline-custom" type="text" id="no_of_employee" name="no_of_employee" placeholder=""></div>
              </div>
            </div>
            <!-- single question end -->
            <!--Form-group  end -->
            <!--Form-group  start -->
            <!-- single question start -->
            <div class=" row fs-5">
              <div class="py-2 col-md-6 ">
                <div class="fw-normal "><label for="uemail">Email:<span class="text-danger">*</span></label></div>
                <div class="text-start"><input class="outline-custom" type="text" id="uemail" name="uemail" placeholder=""></div>

              </div>
              <!-- single question end -->

              <!-- single question start -->
              <div class="py-2  col-md-6">
                <div class="fw-normal "><label for="data_center">Datacenter:</label></div>
                <div class="text-start"><input class="outline-custom" type="text" id="data_center" name="data_center" placeholder=""></div>
              </div>
            </div>
            <!-- single question end -->
            <!--Form-group  end -->
            <!--Form-group  start -->
            <!-- single question start -->
            <div class=" row fs-5">
              <div class="py-2 col-md-6 ">
                <div class="fw-normal "><label for="country">Country:<span class="text-danger">*</span></label></div>
                <div class="text-start"><select class="outline-custom text-wrap" id="country" name="country" class="">
                    <option>Select country</option>
                    <option>Afghanistan<!--	option--></option>
                    <option>Albania<!--	option--></option>
                    <option>Algeria<!--	option--></option>
                    <option>American Samoa<!--	option--></option>
                    <option>Andorra<!--	option--></option>
                    <option>Angola<!--	option--></option>
                    <option>Anguilla<!--	option--></option>
                    <option>Antigua and Barbuda<!--	option--></option>
                    <option>Argentina<!--	option--></option>
                    <option>Armenia<!--	option--></option>
                    <option>Aruba<!--	option--></option>
                    <option>Ascension<!--	option--></option>
                    <option>Australia<!--	option--></option>
                    <option>Australian External Territories<!--	option--></option>
                    <option>Austria<!--	option--></option>
                    <option>Azerbaijan<!--	option--></option>
                    <option>Bahamas<!--	option--></option>
                    <option>Bahrain<!--	option--></option>
                    <option>Bangladesh<!--	option--></option>
                    <option>Barbados<!--	option--></option>
                    <option>Belarus<!--	option--></option>
                    <option>Belgium<!--	option--></option>
                    <option>Belize<!--	option--></option>
                    <option>Benin<!--	option--></option>
                    <option>Bermuda<!--	option--></option>
                    <option>Bhutan<!--	option--></option>
                    <option>Bolivia<!--	option--></option>
                    <option>Bosnia and Herzegovina<!--	option--></option>
                    <option>Botswana<!--	option--></option>
                    <option>Brazil<!--	option--></option>
                    <option>British Virgin Islands<!--	option--></option>
                    <option>Brunei Darussalam<!--	option--></option>
                    <option>Bulgaria<!--	option--></option>
                    <option>Burkina Faso<!--	option--></option>
                    <option>Burundi<!--	option--></option>
                    <option>Cambodia<!--	option--></option>
                    <option>Cameroon<!--	option--></option>
                    <option>Canada<!--	option--></option>
                    <option>Cape Verde<!--	option--></option>
                    <option>Cayman Islands<!--	option--></option>
                    <option>Central African Republic<!--	option--></option>
                    <option>Chad<!--	option--></option>
                    <option>Chile<!--	option--></option>
                    <option>China<!--	option--></option>
                    <option>Colombia<!--	option--></option>
                    <option>Comoros<!--	option--></option>
                    <option>Congo<!--	option--></option>
                    <option>Cook Islands<!--	option--></option>
                    <option>Costa Rica<!--	option--></option>
                    <option>Cote d'Ivoire<!--	option--></option>
                    <option>Croatia<!--	option--></option>
                    <option>Cuba<!--	option--></option>
                    <option>Curacao<!--	option--></option>
                    <option>Cyprus<!--	option--></option>
                    <option>Czech Republic<!--	option--></option>
                    <option>Democratic Republic of the Congo<!--	option--></option>
                    <option>Denmark<!--	option--></option>
                    <option>Diego Garcia<!--	option--></option>
                    <option>Djibouti<!--	option--></option>
                    <option>Dominica<!--	option--></option>
                    <option>Dominican Republic<!--	option--></option>
                    <option>East Timor<!--	option--></option>
                    <option>Ecuador<!--	option--></option>
                    <option>Egypt<!--	option--></option>
                    <option>El Salvador<!--	option--></option>
                    <option>Equatorial Guinea<!--	option--></option>
                    <option>Eritrea<!--	option--></option>
                    <option>Estonia<!--	option--></option>
                    <option>Ethiopia<!--	option--></option>
                    <option>Falkland Islands<!--	option--></option>
                    <option>Faroe Islands<!--	option--></option>
                    <option>Fiji<!--	option--></option>
                    <option>Finland<!--	option--></option>
                    <option>France<!--	option--></option>
                    <option>French Guiana<!--	option--></option>
                    <option>French Polynesia<!--	option--></option>
                    <option>Gabon<!--	option--></option>
                    <option>Gambia<!--	option--></option>
                    <option>Georgia<!--	option--></option>
                    <option>Germany<!--	option--></option>
                    <option>Ghana<!--	option--></option>
                    <option>Gibraltar<!--	option--></option>
                    <option>Greece<!--	option--></option>
                    <option>Greenland<!--	option--></option>
                    <option>Grenada<!--	option--></option>
                    <option>Guadeloupe<!--	option--></option>
                    <option>Guam<!--	option--></option>
                    <option>Guatemala<!--	option--></option>
                    <option>Guinea<!--	option--></option>
                    <option>Guinea-Bissau<!--	option--></option>
                    <option>Guyana<!--	option--></option>
                    <option>Haiti<!--	option--></option>
                    <option>Honduras<!--	option--></option>
                    <option>Hong Kong<!--	option--></option>
                    <option>Hungary<!--	option--></option>
                    <option>Iceland<!--	option--></option>
                    <option>India<!--	option--></option>
                    <option>Indonesia<!--	option--></option>
                    <option>Iran<!--	option--></option>
                    <option>Iraq<!--	option--></option>
                    <option>Ireland<!--	option--></option>
                    <option>Israel<!--	option--></option>
                    <option>Italy<!--	option--></option>
                    <option>Jamaica<!--	option--></option>
                    <option>Japan<!--	option--></option>
                    <option>Jordan<!--	option--></option>
                    <option>Kazakhstan<!--	option--></option>
                    <option>Kenya<!--	option--></option>
                    <option>Kiribati<!--	option--></option>
                    <option>Kosovo<!--	option--></option>
                    <option>Kuwait<!--	option--></option>
                    <option>Kyrgyzstan<!--	option--></option>
                    <option>Laos<!--	option--></option>
                    <option>Latvia<!--	option--></option>
                    <option>Lebanon<!--	option--></option>
                    <option>Lesotho<!--	option--></option>
                    <option>Liberia<!--	option--></option>
                    <option>Libya<!--	option--></option>
                    <option>Liechtenstein<!--	option--></option>
                    <option>Lithuania<!--	option--></option>
                    <option>Luxembourg<!--	option--></option>
                    <option>Macao<!--	option--></option>
                    <option>Macedonia<!--	option--></option>
                    <option>Madagascar<!--	option--></option>
                    <option>Malawi<!--	option--></option>
                    <option>Malaysia<!--	option--></option>
                    <option>Maldives<!--	option--></option>
                    <option>Mali<!--	option--></option>
                    <option>Malta<!--	option--></option>
                    <option>Marshall Islands<!--	option--></option>
                    <option>Martinique<!--	option--></option>
                    <option>Mauritania<!--	option--></option>
                    <option>Mauritius<!--	option--></option>
                    <option>Mexico<!--	option--></option>
                    <option>Micronesia<!--	option--></option>
                    <option>Moldova<!--	option--></option>
                    <option>Monaco<!--	option--></option>
                    <option>Mongolia<!--	option--></option>
                    <option>Montenegro<!--	option--></option>
                    <option>Montserrat<!--	option--></option>
                    <option>Morocco<!--	option--></option>
                    <option>Mozambique<!--	option--></option>
                    <option>Myanmar<!--	option--></option>
                    <option>Namibia<!--	option--></option>
                    <option>Nauru<!--	option--></option>
                    <option>Nepal<!--	option--></option>
                    <option>Netherlands<!--	option--></option>
                    <option>Netherlands Antilles<!--	option--></option>
                    <option>New Caledonia<!--	option--></option>
                    <option>New Zealand<!--	option--></option>
                    <option>Nicaragua<!--	option--></option>
                    <option>Niger<!--	option--></option>
                    <option>Nigeria<!--	option--></option>
                    <option>Niue<!--	option--></option>
                    <option>North Korea<!--	option--></option>
                    <option>Northern Mariana Islands<!--	option--></option>
                    <option>Norway<!--	option--></option>
                    <option>Oman<!--	option--></option>
                    <option>Pakistan<!--	option--></option>
                    <option>Palau<!--	option--></option>
                    <option>Palestine<!--	option--></option>
                    <option>Panama<!--	option--></option>
                    <option>Papua New Guinea<!--	option--></option>
                    <option>Paraguay<!--	option--></option>
                    <option>Peru<!--	option--></option>
                    <option>Philippines<!--	option--></option>
                    <option>Poland<!--	option--></option>
                    <option>Portugal<!--	option--></option>
                    <option>Puerto Rico<!--	option--></option>
                    <option>Qatar<!--	option--></option>
                    <option>Reunion<!--	option--></option>
                    <option>Romania<!--	option--></option>
                    <option>Russia<!--	option--></option>
                    <option>Rwanda<!--	option--></option>
                    <option>Saint Helena<!--	option--></option>
                    <option>Saint Kitts and Nevis<!--	option--></option>
                    <option>Saint Lucia<!--	option--></option>
                    <option>Saint Pierre and Miquelon<!--	option--></option>
                    <option>Saint Vincent and Grenadines<!--	option--></option>
                    <option>Samoa<!--	option--></option>
                    <option>San Marino<!--	option--></option>
                    <option>Sao Tome and Principe<!--	option--></option>
                    <option>Saudi Arabia<!--	option--></option>
                    <option>Senegal<!--	option--></option>
                    <option>Serbia<!--	option--></option>
                    <option>Seychelles<!--	option--></option>
                    <option>Sierra Leone<!--	option--></option>
                    <option>Singapore<!--	option--></option>
                    <option>Slovakia<!--	option--></option>
                    <option>Slovenia<!--	option--></option>
                    <option>Solomon Islands<!--	option--></option>
                    <option>Somalia<!--	option--></option>
                    <option>South Africa<!--	option--></option>
                    <option>South Korea<!--	option--></option>
                    <option>South Sudan<!--	option--></option>
                    <option>Spain<!--	option--></option>
                    <option>Sri Lanka<!--	option--></option>
                    <option>Sudan<!--	option--></option>
                    <option>Suriname<!--	option--></option>
                    <option>Swaziland<!--	option--></option>
                    <option>Sweden<!--	option--></option>
                    <option>Switzerland<!--	option--></option>
                    <option>Syria<!--	option--></option>
                    <option>Taiwan<!--	option--></option>
                    <option>Tajikistan<!--	option--></option>
                    <option>Tanzania<!--	option--></option>
                    <option>Thailand<!--	option--></option>
                    <option>Togo<!--	option--></option>
                    <option>Tokelau<!--	option--></option>
                    <option>Tonga<!--	option--></option>
                    <option>Trinidad and Tobago<!--	option--></option>
                    <option>Tunisia<!--	option--></option>
                    <option>Turkey<!--	option--></option>
                    <option>Turkmenistan<!--	option--></option>
                    <option>Turks and Caicos Islands<!--	option--></option>
                    <option>Tuvalu<!--	option--></option>
                    <option>Uganda<!--	option--></option>
                    <option>Ukraine<!--	option--></option>
                    <option>United Arab Emirates<!--	option--></option>
                    <option>United Kingdom<!--	option--></option>
                    <option>United States<!--	option--></option>
                    <option>Uruguay<!--	option--></option>
                    <option>US Virgin Islands<!--	option--></option>
                    <option>Uzbekistan<!--	option--></option>
                    <option>Vanuatu<!--	option--></option>
                    <option>Vatican City<!--	option--></option>
                    <option>Venezuela<!--	option--></option>
                    <option>Vietnam<!--	option--></option>
                    <option>Wallis and Futuna<!--	option--></option>
                    <option>Yemen<!--	option--></option>
                    <option>Zambia<!--	option--></option>
                    <option>Zimbabwe<!--	option--></option>
                  </select></div>

              </div>
              <!-- single question end -->

              <!-- single question start -->
              <div class="py-2  col-md-6">
                <div class="fw-normal "><label for="state">State:<span class="text-danger">*</span></label></div>
                <div class="text-start"><input class="outline-custom" type="text" id="state" name="state" placeholder=""></div>
              </div>
            </div>
            <!-- single question end -->
            <!--Form-group  end -->

            <!--Form-group  start -->
            <!-- single question start -->
            <div class=" row fs-5">
              <div class="py-2 col-md-6 ">
                <div class="fw-normal "><label for="city">City:<span class="text-danger">*</span></label></div>
                <div class="text-start"><input class="outline-custom" type="text" id="city" name="city" placeholder=""></div>

              </div>
              <!-- single question end -->

              <!-- single question start -->
              <div class="py-2  col-md-6">
                <div class="fw-normal "><label for="street_address">Street Address:<span class="text-danger">*</span></label></div>
                <div class="text-start"><input class="outline-custom" type="text" id="street_address" name="street_address" placeholder=""></div>
              </div>
            </div>
            <!-- single question end -->
            <!--Form-group  end -->
            <!--Form-group  start -->
            <!-- single question start -->
            <div class=" row fs-5">
              <div class="py-2 col-md-6 ">
                <div class="fw-normal "><label for="zip_code">Zip Code:<span class="text-danger">*</span></label></div>
                <div class="text-start"><input class="outline-custom" type="number" id="zip_code" name="zip_code" placeholder=""></div>

              </div>
              <!-- single question end -->

              <!-- single question start -->
              <div class="py-2  col-md-6">
                <div class="fw-normal "><label for="phone_number">Phone Number:<span class="text-danger">*</span></label></div>
                <div class="text-start"><input class="outline-custom" type="text" id="phone_number" name="phone_number" placeholder=""></div>
              </div>
            </div>
            <!-- single question end -->
            <!--Form-group  end -->
            <!-- General questions end -->
            <!-- Site questions start -->
            <section class="border-2 border-bottom border-white py-3 fs-5">
              <div class="fs-2 fw-bold py-3">EXPERTISE/INTEREST</div>
              <div class="form-bdr"></div>
              <!--Form-group  start -->
              <!-- single question start -->
              <div class=" row fs-5">
                <div class="py-2 col-md-6">
                  <div class="fw-normal "><label for="primary_expertise">Primary Expertise/Interest:</label></div>
                  <div class="text-start"><select class="outline-custom" name="primary_expertise" id="primary_expertise" data-old-key="primary_expertise">
                      <option value="-None-" data-value="none">-None-</option>
                      <option value="Business Intelligence &amp; Analytics" data-value="BusinessAnalytics">Business Intelligence &amp; Analytics
                      </option>
                      <option value="CRM &amp; Sales Management" data-value="CRMSalesManagement">CRM
                        &amp; Sales Management</option>
                      <option value="Email Marketing Automation" data-value="EmailMarketingAutomation">Email Marketing Automation</option>
                      <option value="Custom App Development (Creator)" data-value="CustomAppDevelopment">Custom App Development (Creator)</option>
                      <option value="Finance &amp; Accounting" data-value="FinanceAccounting">Finance
                        &amp; Accounting</option>
                      <option value="Helpdesk Software Consulting" data-value="HelpdeskSoftwareConsulting">Helpdesk Software Consulting
                      </option>
                      <option value="HR Management" data-value="HRManagement">HR Management</option>
                      <option value="Zewoke Marketplace Developer" data-value="ZewokeMarketplaceDeveloper">Zewoke Marketplace Developer</option>
                      <option value="Platform Development (Vertical CRM)" data-value="PlatformDevelopment">Platform Development (Vertical CRM)
                      </option><!-- <option value="Small Business CRM - Bigin" data-value="SmallBusinessCRMBigin">Small Business CRM - Bigin</option> -->
                      <option value="Small Business CRM - Bigin" data-value="SmallBusinessCRMBigin">Bigin - CRM for Small Business</option>
                      <option value="Project Management" data-value="ProjectManagement">Project
                        Management</option>
                      <option value="CRO and Personalization platform" data-value="CROStrategyPageSense">CRO and Personalization platform</option><!--<option value="Workplace (Email & Office Suite)" data-value="WorkplaceEmailOfficeSuite">Workplace (Email & Office Suite)</option>-->
                      <option value="Workplace (Email, File storage &amp; Office Suite)" data-value="WorkplaceEmailOfficeSuite">Workplace (Email, File storage &amp;
                        Office Suite)</option>
                      <option value="Website Live Chat - SalesIQ" data-value="WebsiteLiveChatSalesIQ">
                        Website Live Chat - SalesIQ</option>
                      <option value="Remote Access/Support" data-value="RemoteAccessSupport">Remote
                        Access/Support</option>
                      <option value="eCommerce/Web Development" data-value="eCommerceWebDevelopment">
                        eCommerce/Web Development</option>
                      <option value="IOT platform and solutions" data-value="iotPlatformAndSolutions">IOT platform and solutions</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- single question end -->
              <!--Form-group  end -->
              <!-- single question start -->
              <div class="fs-2 fw-bold py-3">Workplace- Email, File storage & Office Suite</div>
              <div class="form-bdr"></div>
              <!-- single question start -->
              <div class="py-2  col-md-6">
                <div class="fw-normal ">
                  <label for="products_services">Products/Services Offered by your company
                  </label>
                </div>
                <div class="checkbox-multiple" tabindex="1"><input name="products_services[]" class="outline-custom" type="checkbox" value="Web Development Agency" id="checkbox-productserviceoffer-web-development-agency-1-0"><label for="checkbox-productserviceoffer-web-development-agency-1-0">Web Development Agency</label><br><input name="products_services[]" class="outline-custom" type="checkbox" value="Digital Marketing Services" id="checkbox-productserviceoffer-digital-marketing-services-1-1"><label for="checkbox-productserviceoffer-digital-marketing-services-1-1">Digital Marketing Services</label><br><input name="products_services[]" class="outline-custom" type="checkbox" value="Shared Hosting" id="checkbox-productserviceoffer-shared-hosting-1-2"><label for="checkbox-productserviceoffer-shared-hosting-1-2">Shared Hosting</label><br><input name="products_services[]" class="outline-custom" type="checkbox" value="Domains Reseller" id="checkbox-productserviceoffer-domains-reseller-1-3"><label for="checkbox-productserviceoffer-domains-reseller-1-3">Domains Reseller</label><br><input name="products_services[]" class="outline-custom" type="checkbox" value="Email Hosting" id="checkbox-productserviceoffer-email-hosting-1-4"><label for="checkbox-productserviceoffer-email-hosting-1-4">Email Hosting</label><br><input name="products_services[]" class="outline-custom" type="checkbox" value="Managed Services" id="checkbox-productserviceoffer-managed-services-1-5"><label for="checkbox-productserviceoffer-managed-services-1-5">Managed Services</label><br><input name="products_services[]" class="outline-custom" type="checkbox" value="Other" id="checkbox-productserviceoffer-other-1-6"><label for="checkbox-productserviceoffer-other-1-6">Other</label><br>
                </div>
              </div>

              <!-- single question end -->


              <!-- single question start -->
              <div class="py-2  col-md-6">
                <div class="fw-normal ">
                  <label for="current_email_hosting">Current Email Hosting</label>
                </div>
                <div class="checkbox-multiple" tabindex="1"><input name="current_email_hosting[]" class="outline-custom" type="checkbox" value="Microsoft365" id="checkbox-emailhostingservices-microsoft365-1-0"><label for="checkbox-emailhostingservices-microsoft365-1-0">Microsoft365</label><br><input name="current_email_hosting[]" class="outline-custom" type="checkbox" value="Google Workspace" id="checkbox-emailhostingservices-google-workspace-1-1"><label for="checkbox-emailhostingservices-google-workspace-1-1">Google Workspace</label><br><input name="current_email_hosting[]" class="outline-custom" type="checkbox" value="Self hosted" id="checkbox-emailhostingservices-self-hosted-1-2"><label for="checkbox-emailhostingservices-self-hosted-1-2">Self hosted</label><br><input name="current_email_hosting[]" class="outline-custom" type="checkbox" value="Other" id="checkbox-emailhostingservices-other-1-3"><label for="checkbox-emailhostingservices-other-1-3">Other</label><br></div>
              </div>

              <!-- single question end -->
              <!-- single question start -->
              <div class="py-2  col-md-6">
                <div class="fw-normal ">
                  <label for="billing_management_platform">Billing Management Platform</label>
                </div>
                <div class="checkbox-multiple" tabindex="1"><input name="billing_management_platform[]" class="outline-custom" type="checkbox" value="WHMCS" id="checkbox-billingdistributionplatform-whmcs-1-0"><label for="checkbox-billingdistributionplatform-whmcs-1-0">WHMCS</label><br><input name="billing_management_platform[]" class="outline-custom" type="checkbox" value="In-House" id="checkbox-billingdistributionplatform-in-house-1-1"><label for="checkbox-billingdistributionplatform-in-house-1-1">In-House</label><br><input name="billing_management_platform[]" class="outline-custom" type="checkbox" value="Not Applicable" id="checkbox-billingdistributionplatform-not-applicable-1-2"><label for="checkbox-billingdistributionplatform-not-applicable-1-2">Not Applicable</label><br><input name="billing_management_platform[]" class="outline-custom" type="checkbox" value="Other" id="checkbox-billingdistributionplatform-other-1-3"><label for="checkbox-billingdistributionplatform-other-1-3">Other</label><br></div>
              </div>
              <!-- single question end -->
              <!-- single question start -->
              <div class="py-2  col-md-6">
                <div class="fw-normal ">
                  <label for="engagement_of_interest">Engagement of Interest</label>
                </div>
                <div class="checkbox-multiple" tabindex="1"><input name="engagement_of_interest[]" class="outline-custom" type="checkbox" value="Resell" id="checkbox-engagementofinterest-resell-1-0"><label for="checkbox-engagementofinterest-resell-1-0">Resell</label><br><input name="engagement_of_interest[]" class="outline-custom" type="checkbox" value="Marketplace Integrations" id="checkbox-engagementofinterest-marketplace-integrations-1-1"><label for="checkbox-engagementofinterest-marketplace-integrations-1-1">Marketplace Integrations</label><br><input name="engagement_of_interest[]" class="outline-custom" type="checkbox" value="White Labelling" id="checkbox-engagementofinterest-white-labelling-1-2"><label for="checkbox-engagementofinterest-white-labelling-1-2">White Labelling</label><br><input name="engagement_of_interest[]" class="outline-custom" type="checkbox" value="Services" id="checkbox-engagementofinterest-services-1-3"><label for="checkbox-engagementofinterest-services-1-3">Services</label><br></div>
              </div>
              <!-- single question end -->

              <!-- single question start -->
              <div class="py-2  col-md-6">
                <div class="fw-normal ">
                  <label for="target_marget">Target Market</label>
                </div>
                <div class="checkbox-multiple more-list custom-scroll" tabindex="1"><input
                    name="target_marget[]" class="outline-custom" type="checkbox" value="Retails" id="checkbox-zwc_targetmarket-retails-1-0"><label for="checkbox-zwc_targetmarket-retails-1-0">Retails</label><br><input name="target_marget[]" class="outline-custom" type="checkbox" value="Consumers" id="checkbox-zwc_targetmarket-consumers-1-1"><label for="checkbox-zwc_targetmarket-consumers-1-1">Consumers</label><br><input name="target_marget[]" class="outline-custom" type="checkbox" value="Education" id="checkbox-zwc_targetmarket-education-1-2"><label for="checkbox-zwc_targetmarket-education-1-2">Education</label><br><input name="target_marget[]" class="outline-custom" type="checkbox" value="Government" id="checkbox-zwc_targetmarket-government-1-3"><label for="checkbox-zwc_targetmarket-government-1-3">Government</label><br><input name="target_marget[]" class="outline-custom" type="checkbox" value="Large Enterprise" id="checkbox-zwc_targetmarket-large-enterprise-1-4"><label for="checkbox-zwc_targetmarket-large-enterprise-1-4">Large Enterprise</label><br><input name="target_marget[]" class="outline-custom" type="checkbox" value="Mid-Market" id="checkbox-zwc_targetmarket-mid-market-1-5"><label for="checkbox-zwc_targetmarket-mid-market-1-5">Mid-Market</label><br><input name="target_marget[]" class="outline-custom" type="checkbox" value="Small Business" id="checkbox-zwc_targetmarket-small-business-1-6"><label for="checkbox-zwc_targetmarket-small-business-1-6">Small Business</label><br><input name="target_marget[]" class="outline-custom" type="checkbox" value="Startup" id="checkbox-zwc_targetmarket-startup-1-7"><label for="checkbox-zwc_targetmarket-startup-1-7">Startup</label><br><input name="target_marget[]" class="outline-custom" type="checkbox" value="Other" id="checkbox-zwc_targetmarket-other-1-8"><label for="checkbox-zwc_targetmarket-other-1-8">Other</label><br></div>
              </div>

              <!-- single question end -->
              <!-- single question start -->
              <div class="py-2 row col-md-6">
                <div class="fw-normal "><label for="plan_to_succeed_zewoke_partner">How do you plan to succeed as a ZeWoke Partner?</label></div>
                <div class="text-start"><textarea class="outline-custom" name="plan_to_succeed_zewoke_partner" id="plan_to_succeed_zewoke_partner" rows="3" cols="28"></textarea> </div>
              </div>
              <div class="form-bdr"></div>
              <!-- single question end -->
              <div class="fieldL mand leadsourcefield">
                <div class="zwc-fTitle">How did you hear about ZeWoke Partner Program</div><select class="outline-custom" name="how_hear_zewoke_partner_program" id="leadsource">
                  <option value="-None-">-None-</option>
                  <option value="Advertisements">Advertisements</option>
                  <option value="Community/Forums">Community/Forums</option>
                  <option value="Events/Tradeshows">Events/Tradeshows</option>
                  <option value="Social Media">Social Media(Quora, Facebook, Twitter, LinkedIn etc.)</option>
                  <option value="Through a Friend">Through a Friend</option>
                  <option value="Zewoke Invite(E-mail / Call)">Zewoke Invite(E-mail / Call)</option>
                  <option value="Zewoke Customer">Zewoke Customer</option>
                  <option value="Zewoke Partner">Zewoke Partner</option>
                  <option value="Zewoke Product Websites">Zewoke Product Websites</option>
                  <option value="Zewoke Website">Zewoke Website</option>
                  <option value="Web Search">Web Search</option>
                  <option value="Other">Other</option>
                </select>
              </div>
            </section>
            <section class="py-3">
              <div class="tac" id="submit-section">
                <div class=""><label for="i_agree"><input id="i_agree" type="checkbox" name="i_agree" value="I agree to the Terms and Conditions">I agree to the <a href="/terms.html" class="nav-link m-0 p-0 d-inline">Terms of
                      Service</a> and <a class="nav-link m-0 p-0 d-inline" href="/privacy.html">Privacy Policy.</a> </div> </label>
                <div class="form-btn tac"><input type="submit" class="btn-default" value="Submit">
                  <input type="reset" class=" btn-outline" value="Reset">
                </div>
                <div class="zw-only-copyright">
                  <p> Copyright © 2016 - <span><?php
                    echo (date("Y"));
                     ?></span> , ZeWoke Corporation Pvt. Ltd. All Rights Reserved.</p>
                </div>
              </div>
            </section>
        </div>
      </form>
    </div>

    <div id="myButton"></div>
    <script type="text/javascript">
      $(function() {
        $('#myButton').floatingWhatsApp({
          phone: '+44 7881 088180',
          popupMessage: 'Hello, how can we help you?',
          message: "I'd like to know more about your partnership terms",
          showPopup: true,
          showOnIE: false,
          headerTitle: 'Welcome!',
          headerColor: 'crimson',
          backgroundColor: 'crimson',
          buttonImage: '<img src="whatsapp.svg" />'
        });
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <?php $mysqli->close();
  } ?>
</body>

</html>