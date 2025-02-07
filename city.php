<?php
session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="pages_css/city.css" />
    <title>Tiger Trip Cities</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>

<body>

<header>
    <nav id="navbar" class="navbar fixed-top">
        <ul>
        <li><a class="nav-link scrollto active" href="home.php">Home</a></li>
        <li><a class="nav-link scrollto" href="island.php">Islands</a></li>
        <li><a class="nav-link scrollto" href="city.php">Cities</a></li>
        <li><a class="nav-link scrollto" href="kl.php">Kuala Lumpur</a></li>
        <li><a class="nav-link scrollto" href="pages_user/login.php">Login</a></li>
        <li><a class="nav-link scrollto" href="pages_user/logout.php">Logout</a></li>
        <?php
             include "connection.php";

             if(isset($_SESSION['type']) && $_SESSION['type'] == 'Admin')
              echo "<li><a class='nav-link scrollto' href='pages_user/homeadmin.php'>Admin</a></li>";
              ?>
        </ul>
        <h3>Welcome <?php echo $_SESSION['username']; ?>!</h3>
        <img id="logo" src="images_home/logoTiger.png" alt="Tiger Logo">
    </nav>
</header>

<div class="sky">
    <div id="title">
        <h1>Best Cities to visit in Malaysia</h1>
    </div>

    <div class="bird1">
        <img src="images_city/bird.gif" alt="Bird">
    </div>
</div>

<div class="box1">
    <h1 class="title2">
        Here are the 3 Cities that we recommend
    </h1>
    <p class="text">A city - the urban environment - is both a physical and a human environment where a population is concentrated and where it organizes its space according to the site and its environment, according to its own needs and activities and also according to contingencies, particularly socio-political contingencies. The city is a complex environment that cannot be reduced to a physical approach, because urban space is also the spatial translation of the organization in space and time of people and their activities in a given context. This context is as much physical, economic, political, social or cultural. The approach to the city can only be diachronic and the history of cities, of each city or agglomeration remains an essential element of analysis. The city can be compared with an ecosystem that interacts constantly like an environment with its hosts. The principles that govern the structure and organization of the city are studied by urban sociology, urban planning and urban economics.</p>
</div>

<div class="city">
    <h1 class="city_name">Malacca</h1>
    <div>
        <img src="images_city/malacca1.jpg" alt="Malacca 1" class="main_image">
    </div>
    
    <div class="desc">
        <p class="text">
            Malacca (Malay: Melaka) is a state in Malaysia located in the southern region of the Malay Peninsula, next to the Strait of Malacca. Its capital is Malacca City, dubbed the Historic City, which has been listed as a UNESCO World Heritage Site since 7 July 2008.

            The state is bordered by Negeri Sembilan to the north and west and Johor to the south. The exclave of Tanjung Tuan also borders Negeri Sembilan to the north. Its capital Malacca City is 148 kilometres (92 miles) southeast of Malaysia's capital city Kuala Lumpur, 235 kilometres (146 miles) northwest of Johor's largest city Johor Bahru and 95 km (59 miles) northwest of Johor's second largest city, Batu Pahat. </p>
    </div>
    
    <div style="display:flex; flex-flow:column; justify-content:start">
        <div style="display:flex;flex-flow:row; justify-content:start">
            <img src="images_city/malacca2.jpg" alt="Malacca 2" class="sec_image" style="width:50%; padding:1em;">
            <img src="images_city/malacca3.jpg" alt="Malacca 3" class="sec_image" style="width:50%; padding:1em">
        </div>
        <p class="text">Although it was the location of one of the earliest Malay sultanates, namely the Malacca Sultanate, the local monarchy was abolished when the Portuguese conquered it in 1511. The head of state is the Yang di-Pertua Negeri or Governor, rather than a Sultan. Malacca is noted for its unique history and it is one of the major tourist destinations in Malaysia. With a highly strategic state position for international trade routes, Malacca was once a well-known international trade centre in the East. Many traders anchored in Malacca, especially traders from Arabia, China and India, traded at the port of Malacca and from there were born many of the descendants and tribes that exist in Malacca to this day. </p>
    </div>

    <div class="city">
        <h1 class="city_name">Putrajaya</h1>
        <div>
            <img src="images_city/putra1.jpg" alt="Putra 1" class="main_image">
        </div>
        
        <div class="desc">
            <p class="text">Putrajaya (Malaysian pronunciation: [putraˈdʒaja, putrəˈdʒajə]), officially the Federal Territory of Putrajaya (Malay: Wilayah Persekutuan Putrajaya), is a planned capital city which functions as the administrative capital and the judicial capital of Malaysia. The seat of the federal government of Malaysia was shifted in 1999 from Kuala Lumpur to Putrajaya because of overcrowding and congestion in the former, whilst the seat of the judiciary of Malaysia was later shifted to Putrajaya in 2003. Kuala Lumpur remains as Malaysia's national capital city per the constitution and is still the seat of the head of state (Yang di-Pertuan Agong) and the national legislature (Parliament of Malaysia), as well as being the country's commercial and financial centre. </p>
        </div>
        
        <div style="display:flex; flex-flow:column; justify-content:start">
                <div style="display:flex;flex-flow:row; justify-content:start">
                    <img src="images_city/putra2.jpg" alt="Putra 2" class="sec_image" style="width:50%; padding:1em;">
                    <img src="images_city/putra3.jpg" alt="Putra 3" class="sec_image" style="width:50%; padding:1em">
                </div>
            <p class="text"> The establishment of Putrajaya was the idea of the then-Prime Minister Mahathir Mohamad. The development of Putrajaya began in August 1995 and it was completed at an estimated cost of US$8.1 billion. On February 1, 2001, Putrajaya became Malaysia's third federal territory, after Kuala Lumpur in 1974 and Labuan in 1984. Putrajaya is also a part of MSC Malaysia, a special economic zone that covers Klang Valley. </p>
        </div>

        <div class="city">
            <h1 class="city_name">Cameron Highlands</h1>
            <div>
                <img src="images_city/cameron1.jpg" alt="Cameron 1" class="main_image">
            </div>
            
            <div class="desc">
                <p class="text">The Cameron Highlands (Malay: Tanah Tinggi Cameron, Chinese: 金馬崙高原, Tamil: கேமரன் மலை) is a district in Pahang, Malaysia, occupying an area of 712.18 square kilometres (274.97 sq mi). To the north, its boundary touches that of Kelantan; to the west, it shares part of its border with Perak. Situated at the northwestern tip of Pahang, Cameron Highlands is approximately 90 kilometres (56 mi) from Ipoh, roughly 200 kilometres (120 mi) from Kuala Lumpur or about 355 kilometres (221 mi) from Kuantan, the capital of Pahang. It is the smallest municipality in the state. </p>
            </div>
            
            <div style="display:flex; flex-flow:column; justify-content:start">
                <div style="display:flex;flex-flow:row; justify-content:start">
                    <img src="images_city/cameron2.jpg" alt="Cameron 2" class="sec_image" style="width:50%; padding:1em;">
                    <img src="images_city/cameron3.jpg" alt="Cameron 3" class="sec_image" style="width:50%; padding:1em">
                </div>
                <p class="text">Surveyed by the government geologist and explorer William Cameron in 1885, the outpost consists of three mukims (subdistricts), namely Ringlet, Tanah Rata and Ulu Telom. Its eight settlements are Ringlet, Tanah Rata (the administrative centre), Brinchang, the Bertam Valley, Kea Farm, Tringkap, Kampung Kuala Terla, Kampung Raja and Blue Valley. All are nestled at elevations ranging from 800 metres (2,600 ft) to 1,603 metres (5,259 ft) above sea level.

                    Developed in the 1930s, the tableland is one of the oldest tourist spots in Malaysia. Apart from its tea estates, the plateau is noted for its cool weather, orchards, nurseries, farmlands, waterfalls, rivers, lakes, wildlife, mossy forest, golf course, hotels, places of worship, bungalows, Land Rovers, museum and native inhabitants (Orang Asli). </p>
            </div>
        </div>
    </div>
</div>

<form action="city.php" method="post">
    <div class="d-flex justify-content-center">
        <div class="information">
            <b class="titleInformation">Contact information<br><br></b>
            First name<br> <input type="text" name="firstName" required="required"><br>
            Last name<br> <input type="text" name="lastName" required="required"><br>
            Phone<br> <input type="tel" name="phone" required="required"><br>
            Email<br> <input type="email" name="email" required="required"><br>
            Address<br> <textarea name="address" required="required"></textarea><br>
            Country<br> <select id="country" name="country">
                <option value="">Select</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia">Macedonia</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and Sandwich Islands">South Georgia and Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>
        </div>
        <div class="information">
            <b class="titleInformation">Reservation information<br><br></b>
            Destination<br><select name="destination" required="required">
                <option value="">Destination</option>
                <option value="Melaka">Melaka</option>
                <option value="putrajaya">Putrajaya</option>
                <option value="Cameron">Cameron</option>
            </select><br>
            Hostel<br><select name="hostel" required="required">
                <option value="">Select</option>
                <option value="The Shore">The Shore</option>
                <option value="Imperial Heritage Hotel">Imperial Heritage Hotel</option>
                <option value="K8 Villa">K8 Villa</option>
            </select><br>
            Number of days<br> <input type="number" min="1" name="nbrDays" required="required"><br>
            Date of arrival<br> <input type="date" name="arrivalDate"><br>
            Activity to do<br><select name="activity" required="required" class="activity">
                <option value="">Select</option>
                <option value="Tea plantation">Tea plantation</option>
                <option value="Museum">Museum</option>
                <option value="Visit with bike">Visit with bike</option>
            </select>
            <br><select name="activity" required="required" class="activity">
                <option value="">Select</option>
                <option value="Tea plantation">Tea plantation</option>
                <option value="Museum">Museum</option>
                <option value="Visit with bike">Visit with bike</option>
            </select>
            <br><select name="activity" required="required" class="activity">
                <option value="">Select</option>
                <option value="Tea plantation">Tea plantation</option>
                <option value="Museum">Museum</option>
                <option value="Visit with bike">Visit with bike</option>
            </select>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </div>
    </form>

    <?php
    require('pages_user/connection.php');
    $firstName = $_POST['firstName']  ?? "";
    $lastName = $_POST['lastName']  ?? "";
    $phone = $_POST['phone']  ?? "";
    $email = $_POST['email']  ?? "";
    $address = $_POST['address']  ?? "";
    $country = $_POST['country']  ?? "";
    $hostel = $_POST['hostel']  ?? "";
    $nbrDays = $_POST['nbrDays']  ?? "";
    $arrivalDate = $_POST['arrivalDate']  ?? "";
    $activity1 = $_POST['activity1'] ?? "";
    $activity2 = $_POST['activity2'] ?? "";
    $activity3 = $_POST['activity3'] ?? "";
    $destination = $_POST['destination']  ?? "";

    // récupérer le nom d'utilisateur
    $firstName = stripslashes($_POST['firstName'] ?? "");
    $firstName = mysqli_real_escape_string($con, $firstName);
    // récupérer l'email
    $lastName = stripslashes($_POST['lastName'] ?? "");
    $lastName = mysqli_real_escape_string($con, $lastName);
    // récupérer le mot de passe
    $phone = stripslashes($_POST['phone'] ?? "");
    $phone = mysqli_real_escape_string($con, $phone);

    $email = stripslashes($_POST['email'] ?? "");
    $email = mysqli_real_escape_string($con, $email);

    $address = stripslashes($_POST['address'] ?? "");
    $address = mysqli_real_escape_string($con, $address);

    $country = stripslashes($_POST['country'] ?? "");
    $country = mysqli_real_escape_string($con, $country);

    $hostel = stripslashes($_POST['hostel'] ?? "");
    $hostel = mysqli_real_escape_string($con, $hostel);

    $nbrDays = stripslashes($_POST['nbrDays'] ?? "");
    $nbrDays = mysqli_real_escape_string($con, $nbrDays);

    $arrivalDate = stripslashes($_POST['arrivalDate'] ?? "");
    $arrivalDate = mysqli_real_escape_string($con, $arrivalDate);

    $activity1= stripslashes($_POST['activity1'] ?? "");
    $activity1 = mysqli_real_escape_string($con, $activity1);

    $activity2 = stripslashes($_POST['activity2'] ?? "");
    $activity2 = mysqli_real_escape_string($con, $activity2);

    $activity3 = stripslashes($_POST['activity3']  ?? "");
    $activity3 = mysqli_real_escape_string($con, $activity3);

    $destination = stripslashes($_POST['destination'] ?? "");
    $destination = mysqli_real_escape_string($con, $destination);

    $query = "INSERT into `trip` (destination, firstName, lastName, phone, email, address, country, hostel, nbrDays, arrivalDate,
  activity1, activity2, activity3)
        VALUES ('$destination', '$firstName', '$lastName', '$phone', '$email', '$address', '$country', '$hostel', '$nbrDays', 
        '$arrivalDate', '$activity1', '$activity2', '$activity3')";
    $res = mysqli_query($con, $query);
    if($res){
        echo "<div class='sucess'>
             <h3>Your trip is ready.</h3>
             <p>Cliquez ici pour vous <a href='pages_user/login.php'>connecter</a></p>
       </div>";
    }
?>

    

<footer style="height: 430px;">
    <div class="d-flex-center">
        <a href="https://www.linkedin.com/school/apumalaysia/?original_referer="><img class="footerImage" src="images_home/logoLinkedln.png" alt="Linkedln"></a>
        <img class="footerImage" src="images_home/logoDiscord.png" alt="Discord" onclick="alert('Our Discord pseudo is steroidi#9486')">
        <a href="https://github.com/steroidi884"><img class="footerImage" src="images_home/logoGithub.png" alt="Github"></a>
        <a href="https://www.instagram.com/explore/tags/malaisie/?hl=fr"><img class="footerImage" src="images_home/logoInsta.png" alt="Instagram"></a>
    </div><br>
    <img class="line" src="images_home/blueLine1.png" alt="line 1">
    <div class="divPartFooter">
      <h2 style="color:rgb(28, 141, 197)">Contact</h2>
      Fortune park, Persiaran Serdang Perdana, fortune park apartment, 43300 Seri Kembangan, Selangor
      <br><br>
      (+601) 7360 8582
      <br><br>
      Mon - Fri: 9:00 am - 6:00 pm
      <br>
      Closed on Saturdays, Sundays & Public Holidays
    </div><br>
    <img class="line" src="images_home/blueLine2.png" alt="line 2">
    <div class="divPartFooter">
      <br>NOAH GOULHIN, THEO LIM, JULIEN VIEILLEVIGNE <span style="color:rgb(28, 141, 197)">©2022</span>
    </div>
</footer>
</body>

</html>