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
    <link rel="stylesheet" href="pages_css/island.css" />
    <title>Tiger Trip Islands</title>
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
    <div class="nuage2">
        <img src="images_island/nuage2.png" alt="Nuage 2">
    </div>

    <div id="title">
        <h1>Best Islands to visit in Malaysia</h1>
    </div>


    <div class="nuage1">
        <img src="images_island/nuage1.png.png" alt="Nuage 1">
    </div>
</div>

<div class="box1">
    <h1 class="title2">
        Here are the 3 Islands that we recommend
    </h1>
    <p class="text">Malaysia is well known for its islands, between the paradisiac beaches, the gorgeous tropical forests and the food heavens you will never
        run out of things to experience there.<br>
        You are probably asking yourself where to go among the countless islands Malaysia counts and we will answer it for you in this article.<br>
        <br><br>

        We have been living in Malaysia for over 3 months for our studies!<br>
        Through our personal experience, we are going to share with you Malaysian islands, with their pros and cons.<br>

</div>

<div class="island">
    <h1 class="island_name">Tioman Island</h1>
    <div>
        <img src="images_island/tioman1.jpg" alt="Tioman 1" class="main_image">
    </div>
    
    <div class="desc">
        <p class="text">Immortalised as the fictitious paradise Bali Hai in the 1960’s box-office hit musical ‘South Pacific’, many myths and legends surround the island. The most popular one holds that the island is a dragon and the two high peaks on the south of the island are the ‘Chula Naga’ or dragon’s horns. There are two versions of the legend. One says that the mighty dragon Sri Gumom was attempting to fly from Pahang to visit its sister but Sri Rama, the Dragon king, prohibited its trip and turned Sri Gumon into stone. The dragon fell into the sea and there remains. Another version goes that there was a beautiful dragon princess flying from Singapore to China to her wedding. She stopped for a rest in the South China Sea where the gentle water lapped at her sides and the sun warmed her back and she was so happy there, that she turned herself into an island to stay forever.

            Whether it is the sandy beaches, the coral reefs, the pristine rainforest or the myths and legends of its past that attracts visitors, there is no doubt that Tioman is a jewel in the South China Sea.</p>
    </div>
    
    <div style="display:flex; flex-flow:column; justify-content:start">
        <div style="display:flex;flex-flow:row; justify-content:start">
            <img src="images_island/tioman2.jpg" alt="Tioman 2" class="sec_image" style="width:50%; padding:1em;">
            <img src="images_island/tioman3.jpg" alt="Tioman 3" class="sec_image" style="width:50%; padding:1em">
        </div>
        <p class="text">
            The activities!<br>

            TIOMAN is a large island of volcanic origin.<br>
            You can find very nice spots, and others less nice.<br>
            You have many activities: diving, trekking, climbing, fishing, etc.<br>
            In addition to that, you will have a multitude of choices in terms of accommodation, from simple bungalows to 4 star hotels such as the Berjaya or the Tunamaya.
            <br><br>Access by plane.<br>

            Finally, the very good news is that from May 1, 2022, the airline SKS Airways will offer direct flights from Kuala Lumpur to Tioman Airport.<br>
            Since 2014, there was no connection by air.<br><br>
            The other islands around!<br>

            The beaches of Tioman are also less beautiful. Again, this is a subjective opinion.<br>
            However, you will have access to very beautiful islands, from the port of Mersing: Pulau Tinggi, Besar, Tengah, Hujung, etc.<br>
            So if you make a tour by car to Mersing, you can combine several islands at the same time.<br>
            <br>Disadvantages of TIOMAN!<br>

            Before 2022, the biggest disadvantage was clearly the access, because it was necessary to plan between 4h and 5h of road, to arrive at the port of MERSING (one of the ports of departure, with Endau - Jetty Tanjung Gemuk).
            <br>Then to that, it was necessary to add between 1h and 1h30 of boat, according to the weather.<br>
            Today, this is no longer the case, but the price of the round trip ticket between Kuala Lumpur and Tioman is 100 euros minimum.

        </p>
    </div>

    <div class="island">
        <h1 class="island_name">Penang</h1>
        <div>
            <img src="images_island/penang1.jpg" alt="Penang 1" class="main_image">
        </div>
        
        <div class="desc">
            <p class="text">Penang (Malay: Pulau Pinang) is a Malaysian state located on the northwest coast of Peninsular Malaysia, by the Malacca Strait. It has two parts: Penang Island, where the capital city, George Town, is located, and Seberang Perai on the Malay Peninsula. They are connected by Malaysia's two longest road bridges, the Penang Bridge and the Sultan Abdul Halim Muadzam Shah Bridge; the latter is also, as of May 2019, the longest oversea bridge in Southeast Asia. The second smallest Malaysian state by land mass, Penang is bordered by Kedah to the north and the east, and Perak to the south.</p>
        </div>
        
        <div style="display:flex; flex-flow:column; justify-content:start">
            <div style="display:flex;flex-flow:row; justify-content:start">
                <img src="images_island/penang2.jpg" alt="Penang 2" class="sec_image" style="width:50%; padding:1em;">
                <img src="images_island/penang3.jpg" alt="Penang 3" class="sec_image" style="width:50%; padding:1em">
            </div>
            <p class="text">
                Advantages Penang!<br>

                It is easily accessible, by plane, from Kuala Lumpur. The round trip ticket is not very expensive either.<br>
                But you can also reach the island by car. It will take about 4 to 5 hours drive from Kuala Lumpur, depending on the traffic.<br>
                Many people like Penang, especially for the local cuisine.<br>
                In terms of accommodation, you have a lot of choices, for all budgets.<br><br>
                Disadvantages Penang!<br>

                If you are looking for beautiful beaches, forget it.<br>
                It is not the ideal place to find the most beautiful beaches in Malaysia.<br>
                At worst, you can go to the south of Penang.<br>
                You will find some "drinkable" beaches.</p>
        </div>

        <div class="island">
            <h1 class="island_name">Langkawi</h1>
            <div>
                <img src="images_island/langkawi1.jpg" alt="Langkawi 1" class="main_image">
            </div>
            
            <div class="desc">
                <p class="text">Langkawi, officially known by its title Langkawi, the Jewel of Kedah (Malay: Langkawi Permata Kedah), is a duty-free island and an archipelago of 99 islands (plus five small islands visible only at low tide in the Strait of Malacca) located some 30 km off the coast of northwestern Malaysia and a few kilometres south of Ko Tarutao, adjacent to the Thai border. Politically, it is an administrative district of Kedah, with Kuah as its largest town. Pantai Cenang is the island's most popular beach and tourist area. </p>
            </div>

            <div style="display:flex; flex-flow:column; justify-content:start">
                <div style="display:flex;flex-flow:row; justify-content:start">
                    <img src="images_island/langkawi2.jpg" alt="Langkawi 2" class="sec_image" style="width:50%; padding:1em;">
                    <img src="images_island/langkawi3.jpg" alt="Langkawi 3" class="sec_image" style="width:50%; padding:1em">
                </div>
                <p class="text">The many activities!<br>

                    Whether you come with your family, as a couple, or solo, you will have plenty to do.<br>
                    Some people think that after 4 days on Langkawi, they will end up bored: unfortunately, they usually stay only on the beach of Pantai Cenang.
                    <br>An advice: it is absolutely necessary to rent a car and enjoy the whole island.<br>
                    The price of gasoline is moreover very accessible!<br>
                    You can go jet-skiing, go around all the beaches, go to the night market, go on excursions to the different small islands around Langkawi, visit the farms, do the Langkawi Sky Bridge, etc.
                    <br><br>Accommodation in Langkawi!<br>

                    This is one of the other advantages of Langkawi: you will find really all types of accommodation.<br>
                    From very rustic accommodation to luxurious hotels like The Datai, or The Danna that we were lucky enough to stay at.<br><br>
                    The easy and cheap accessibility!<br>

                    Finally, to reach Langkawi, it is very simple by plane, from Kuala Lumpur for example.<br>
                    The price of the ticket is accessible, if you book in advance.<br>
                    You can find round trip tickets, starting at RM 130 each way, or about 28 euros.<br>
                    The trip takes about an hour.<br>
                    flight kuala lumpur langkawi<br>
                    flight kuala lumpur langkawi<br><br>
                    A little extra for Muslims!<br>

                    For Muslims, Langkawi is mostly populated by Malaysian Muslims.<br>
                    You will find many mosques, and villages of local Malay.<br>
                    For non-Muslims, no worries, you will also find your happiness, no doubt.<br><br>
                    Perfect Thailand Malaysia tour!<br>

                    Last advantage: you can easily make a small circuit Thailand Malaysia.<br>
                    Indeed, you can reach the island of Langkawi from the Thai islands, including KOH LIPE.<br>
                    This allows us to make the transition with the disadvantages of Langkawi.<br><br>


                   </p>
            </div>
        </div>
    </div>

    <form action="island.php" method="post">
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
                    <option value="Tioman island">Tioman island</option>
                    <option value="Langkawi">Langkawi</option>
                    <option value="Penang island">Penang island</option>
                </select><br>
                Hostel<br><select name="hostel" required="required">
                    <option value="">Select</option>
                    <option value="Paradise hostel">Paradise hostel</option>
                    <option value="Beach apartment">Beach apartment</option>
                    <option value="Coconut village">Coconut village</option>
                </select><br>
                Number of days<br> <input type="number" min="1" name="nbrDays" required="required"><br>
                Date of arrival<br> <input type="date" name="arrivalDate"><br>
                Activity to do<br><select name="activity" required="required" class="activity">
                    <option value="">Select</option>
                    <option value="Fishing">Fishing</option>
                    <option value="Dive">Dive</option>
                    <option value="Swim">Swim</option>
                </select>
                <br><select name="activity" required="required" class="activity">
                    <option value="">Select</option>
                    <option value="Fishing">Fishing</option>
                    <option value="Dive">Dive</option>
                    <option value="Swim">Swim</option>
                </select>
                <br><select name="activity" required="required" class="activity">
                    <option value="">Select</option>
                    <option value="Fishing">Fishing</option>
                    <option value="Dive">Dive</option>
                    <option value="Swim">Swim</option>
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