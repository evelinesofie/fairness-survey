<?php
include "partials/header.php";

//Check last visited page and redirect accordingly
/* $q1 = "SELECT page FROM last_visited_page WHERE participant = '$id'";
$result = $db->query($q1);
while($row = $result->fetchArray(SQLITE3_ASSOC)) {
    $page_name = $row['page'];
}

if ($page_name != 'terminate.php' && $page_name != 'completion.php' && $page_name != 'already-participated.php' && $page_name != 'listening-history.php') {
    header("Location: " . $page_name);
}*/

?>

<div class="container" id="content">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1>Information about the study</h1>
            <p>In this study, we want to understand people’s opinions on different playlists. The playlists will consist of songs that are recommended to you based on your taste in music. The study will take around <span class="bold">10 minutes</span> to complete.</p>
            <p>The study starts with a few questions about yourself and a short personality test, followed by some questions about your relationship with music. After that, you will be presented with three different playlists, and you will be asked to answer some questions about them.</p>
            <h2>Requirements</h2>
            <ul>
                <li>You must be at least 18 years of age.</li>
                <li>You need to have a <a href="https://www.last.fm/">Last.fm</a> account with a Spotify account connected to it.</li>
            </ul>
            <h2>Privacy policy</h2>
            <p>For us to be able to get information about your listening history, you need to provide us with your username on Last.fm. Your username will not be used for any other purposes other than fetching which songs you have listened to. The answers you provide will not be traced back to you, and they will not be used for any other purposes than research, neither will they be shared with anyone that is not involved in the study.</p>
            <p>We urge you to be completely honest in your replies in order for us to get research data that is accurate and valid. Please note that participation is voluntary and that you can withdraw and exit the questionnaire at any time.</p>
            <p>If you have read the above-mentioned information and want to take part in this study, please enter your username on Last.fm, and consent by clicking on the “Continue with the study” button.</p>
            <p><span class="bold">Note:</span> The survey includes mechanisms which detect fake contributions. Detection of such will result in exclusion and rejection of your MTurk Code.</p> 
            <form method="post">
                <label class="bold username-label" for="username">Your username on Last.fm:</label><br>
                <input id="username-input" class="username" type="text" name="username" required><br>
                <button class="btn btn-primary continue" type="submit" name="continue">Continue with the study <span class="load loading"></span></button>
                <p id="generating"></p>
            </form>
        </div>
        <div class="col-lg-6" >
            <img class="music-img" src="img/music-player-pink.svg"/>
        </div>
    </div>
</div>

<?php

if (isset($_POST["continue"])) {
    
    // Fetch data from Last.fm
    $username = $_POST['username'];
    $user = $username; // Enter your username here
    $key = '4b59b95ea6d1f3be77ab73e5e3cdf01a'; // Enter your API Key
    $status = 'Last Played:'; // default to this, if 'Now Playing' is true, the json will reflect this.
    $endpoint = 'https://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=' . $user . '&&limit=200&api_key=' . $key . '&format=json';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $endpoint);
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0); // 0 for indefinite
    curl_setopt($ch, CURLOPT_TIMEOUT, 10); // 10 second attempt before timing out
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
    $response = curl_exec($ch);
    
    // Check for API call errors
    if(curl_errno($ch)){
        ?>
        <div class="container">
            <p class="error bold">The username is incorrect. Please check the spelling and try again.</p>
        </div>
        <?php
    }

    // Store username in session to insert into db in completion.php
    $username = strtolower($username);
    $_SESSION['username'] = $username;

    // Check if user has already participated
    $q1 = "SELECT * FROM users WHERE username = '$username'";
    $result = $db->query($q1);

    if ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        header("Location: already-participated.php");

    } else {
        
        // Encode response from API request to be readable for Python
        $response_base64 = base64_encode($response);

        // Run Python file, send response, fetch result
        $command = "virtualenv/bin/python3 recommenders/recs.py $response_base64";
        $output = shell_exec($command);
        $result = json_decode($output, true);

        // Randomize order of algorithms and store in session
        $order = array(0, 11, 22);
        shuffle($order);
        $_SESSION['random_order'] = $order;

        // Save recommendations in session
        $_SESSION['recommendations'] = $result;

        // Save percentage of mapped tracks
        $all_mapped_tracks = $result[34];

        // Save percentage of unique mapped tracks
        $unique_mapped_tracks = $result[36];

        //Save responses in array to check later if the user has listened to at least 50 tracks
        $lastfm[] = json_decode($response, true);
        curl_close($ch);

        // Check that the user has listened to at least 50 tracks
        if (count($lastfm[0]['recenttracks']['track']) < 50) {
            header("Location: listening-history.php");
        } else {

            // Insert session id and percentage of mapped tracks into database
            $query = "INSERT INTO answers (participant, mapped_tracks_percentage, unique_mapped_tracks_percentage) VALUES ('$username', $all_mapped_tracks, $unique_mapped_tracks)";
            $db->exec($query);
            
            header("Location: demographics.php");
        }
    }
};

include "partials/footer.php";

?>