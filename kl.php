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
    <link rel="stylesheet" href="pages_css/kl.css" />
    <title>Tiger Trip Kuala Lumpur</title>
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
        <h1>Best place to visit in Kuala Lumpur</h1>
    </div>

    <div class="airplane">
        <img width="200px" height="150px" src="images_kl/airplane.jpg" alt="Airplane">
    </div>
</div>

<div class="box1">
    <h1 class="title2">
        Here are the best activities to do in the Capital
    </h1>
    <p class="text">Kuala Lumpur (Malaysian pronunciation: [ˈkualə, -a ˈlumpo(r), -ʊ(r)]), officially the Federal Territory of Kuala Lumpur (Malay: Wilayah Persekutuan Kuala Lumpur) and colloquially referred to as KL, is a federal territory and the capital city of Malaysia. It is the largest city in Malaysia, covering an area of 243 km2 (94 sq mi) with an estimated population of 1.73 million as of 2016. Greater Kuala Lumpur, also known as the Klang Valley, is an urban agglomeration of 7.564 million people as of 2018. It is among the fastest growing metropolitan regions in Southeast Asia, both in population and economic development.

        The city serves as the cultural, financial, and economic centre of Malaysia. It is also home to the Parliament of Malaysia, and the Istana Negara, the official residence of the Yang di-Pertuan Agong (monarch of Malaysia). Kuala Lumpur first developed around 1857 as a town serving the tin mines of the region and served as the capital of Selangor from 1880 until 1978. Kuala Lumpur was the founding capital of the Federation of Malaya and its successor Malaysia, and the city remained the seat of the executive and judicial branches of the Malaysian federal government until these were relocated to Putrajaya in early 1999. However, some sections of the political bodies still remain in Kuala Lumpur. </p>
</div>

<div class="city">
    <h1 class="city_name">KLCC PARK</h1>
    <div>
        <video class="main_image" autoplay muted>
            <source src="images_kl/kuala1.mp4" type="video/mp4" alt="Kuala 1">
            Your browser does not support the video tag.
          </video>
    </div>
    
    <div class="desc">
        <p class="text">The park was designed by Roberto Burle Marx. It is said that it was the last work undertaken by the Brazilian architect. When the park was designed, the aim was to "leave the world a little more sensitive and a little more educated to the importance of nature".

            The park was designed to showcase a heritage of tropical greenery by integrating man's creation with nature. The park itself contrasts as a calm environment in the midst of the hustle and bustle of the city. The park features many combinations of man-made design such as cements, water features and also natural features such as trees, shrubs, stones and wood. Elements of shape and topography were created to give an illusion of space. The combination of trees, shrubs and sculptures were arranged to provide color and form to the park. </p>
    </div>
    
    <div style="display:flex; flex-flow:column; justify-content:start">
        <div style="display:flex;flex-flow:row; justify-content:start">
            <img src="images_kl/kuala2.jpg" alt="Kuala 2" class="sec_image" style="width:50%; padding:1em;">
            <img src="images_kl/kuala3.jpg" alt="Kuala 3" class="sec_image" style="width:50%; padding:1em">
        </div>
        <p class="text">Conservation and bio-diversity was a major influence in the creation of the park. 23 of the mature and rarer specimens were saved from the old Selangor Turf Club and transplanted into the park grounds. 1900 indigenous trees and 66 species of palms were planted in the park to promote bio-diversity. The trees were deliberately selected to attract local and migratory birds.

            A man made lake was built in the middle of the park with a 18 meter high water fountain, directly in front of Suria KLCC mall and Petronas Twin Towers towards the middle of the park. A 4.3 meter elevated bridge that cut across the lake provides a vantage view of the park and the twin towers. </p>
    </div>

    <div class="city">
        <h1 class="city_name">Batu Caves</h1>
        <div>
            <img src="images_kl/batu1.jpg" alt="Batu 1" class="main_image">
        </div>
        
        <div class="desc">
            <p class="text">Batu Caves (Tamil: பத்து மலை : Pathumalai) is a limestone hill that has a series of caves and cave temples in Gombak, Selangor, Malaysia. It takes its name from the Malay word batu, meaning 'rock'. The hill was originally known as Kapal Tanggang from the legend of Si Tanggang. The town nearby is named after the Batu Caves limestone formation.

                The cave is one of the most popular Hindu shrines outside India, and is dedicated to Lord Murugan. It is the focal point of the Tamil festival of Thaipusam in Malaysia.

                Batu Caves in short also referred as 10th Caves or Hill for Lord Murugan as there are six important holy shrines in India and four more in Malaysia. The three others in Malaysia are Kallumalai Temple in Ipoh, Tanneermalai Temple in Penang and Sannasimalai Temple in Malacca. </p>
        </div>
        
        <div style="display:flex; flex-flow:column; justify-content:start">
            <div style="display:flex;flex-flow:row; justify-content:start">
                <img src="images_kl/batu2.jpg" alt="Batu 2" class="sec_image" style="width:50%; padding:1em;">
                <img src="images_kl/batu3.jpg" alt="Batu 3" class="sec_image" style="width:50%; padding:1em">
            </div>
            <p class="text">The Batu Cave hill and its numerous caverns contain a wealth of plants and animals, many of which are specialised for limestone environments. A total of 269 species of vascular plants have been recorded from the site, including 56 species (21%) which are obligate calciphiles (found only on limestone).

                There are various undeveloped caves which contain a diverse range of cave fauna, including some unique species, such as trapdoor spiders (Liphistius batuensis). The caves have some 21 species of bats, including several species of fruit bats (Eonycteris). The site is also well known for its numerous long-tailed macaques, which visitors feed — sometimes involuntarily. These monkeys may also pose a biting hazard to tourists (especially small children) as they can be quite territorial.

                Below the Temple Cave is the Dark Cave, with rock formations and a number of animals found nowhere else. It is a two-kilometer network of relatively untouched caverns. Stalactites jutting from the cave's ceiling and stalagmites rising from the floor form intricate formations such as cave curtains, flowstones, cave pearls and scallops which took thousands of years to form.

                In order to maintain the cave's ecology, access is restricted. The Malaysian Nature Society organises regular educational and adventure trips to the Dark Wet Caves. </p>
        </div>

        <div class="city">
            <h1 class="city_name">Aquaria KLCC</h1>
            <div>
                <img src="images_kl/aqua1.jpg" alt="Aqua 1" class="main_image">
            </div>
            
            <div class="desc">
                <p class="text">Featuring 60,000 square feet (5,600 m2) in two levels with a 90-metre (300 ft) underwater tunnel, Aquaria KLCC houses over 250 different species and over 5,000 land and aquatic animals from Malaysia and around the world. Interactive information kiosks on fish and turtle conservation. It includes a themed retail area of about 5,000 square feet (460 m2). Aquaria KLCC is based on the journey of water from the land to the sea. The journey starts in the misty highlands, down through rivers, through the rainforest and mangroves to the coral reefs into the deep blue sea. There is a large food-court just outside the aquarium with many choices of food.

                    The Aquaria is located in the lower levels of the Kuala Lumpur Convention Centre. </p>
            </div>
            
            <div style="display:flex; flex-flow:column; justify-content:start">
                <div style="display:flex;flex-flow:row; justify-content:start">
                    <img src="images_kl/aqua2.jpg"
                         alt="Aqua 2" class="sec_image" style="width:50%; padding:1em;">
                    <img src="images_kl/aqua3.jpg" alt="Aqua 3" class="sec_image" style="width:50%; padding:1em">
                </div>
                <p class="text">Open from 10am to 8pm daily, tickets prices for Aquaria KLCC are reasonable, making it the perfect place for educational family outings and dates. Normal ticket prices start from RM69 for adults, RM59 for children aged 3 to 12 years-old, RM49 for senior citizens and RM16 for disabled visitors.</p>
            </div>
        </div>
    </div>
</div>

<form action="kl.php" method="post">
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
                <option value="Kuala Lumpur">Kuala Lumpur</option>
            </select><br>
            Hostel<br><select name="hostel" required="required">
                <option value="">Select</option>
                <option value="Royal hostel">Royal hostel</option>
                <option value="Intrigue apartment">Intrigue apartment</option>
                <option value="China village">China village</option>
            </select><br>
            Number of days<br> <input type="number" min="1" name="nbrDays" required="required"><br>
            Date of arrival<br> <input type="date" name="arrivalDate"><br>
            Activity to do<br><select name="activity" required="required" class="activity">
                <option value="">Select</option>
                <option value="Aquaria">Aquaria</option>
                <option value="KLCC Park">KLCC Park</option>
                <option value="Batu caves">Batu caves</option>
            </select>
            <br><select name="activity" required="required" class="activity">
                <option value="">Select</option>
                <option value="Aquaria">Aquaria</option>
                <option value="KLCC Park">KLCC Park</option>
                <option value="Batu caves">Batu caves</option>
            </select>
            <br><select name="activity" required="required" class="activity">
                <option value="">Select</option>
                <option value="Aquaria">Aquaria</option>
                <option value="KLCC Park">KLCC Park</option>
                <option value="Batu caves">Batu caves</option>
            </select>
        </div>
    </div><br><br>
    <div class="d-flex justify-content-center">
        <input class="button" type="submit" value="Submit">
        <input class="button" type="reset" value="Reset">
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


<script>
    $(window).scroll(function(){
    const x = -this.scrollX    
    $(".fixed").css({left: x}) 
    })
</script>
    
<footer>
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