<?php
include "partials/header.php";

?>

<div class="container" id="content">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1>Information about the study</h1>
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

    $all_tracks = [];

    for ($i = 1; $i <= 5; $i++) {
        // Fetch data from Last.fm
        $username = $_POST['username'];
        $user = $username; // Enter your username here
        $key = '4b59b95ea6d1f3be77ab73e5e3cdf01a'; // Enter your API Key
        $status = 'Last Played:'; // default to this, if 'Now Playing' is true, the json will reflect this.
        $endpoint = 'https://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=' . $user . '&&limit=200&api_key=' . $key . '&page=' . $i . '&format=json';
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

        $lastfm[] = json_decode($response, true);
        array_push($all_tracks, $lastfm[0]["recenttracks"]["track"]);
        curl_close($ch);

    }

    print_r($all_tracks);
    

    //print_r(count($all_tracks[0][0]["recenttracks"]["track"]));
    


    //var_dump($lastfm);


/*     for ($i = 0; $i < count($lastfm); $i++) {
        $trackInfo = [
            'name'       => $lastfm[0]['recenttracks']['track'][$i]['name'],
            'artist'     => $lastfm[0]['recenttracks']['track'][$i]['artist']['#text']
        ];
        echo $trackInfo['name'];
    } */
    
    /* print_r($lastfm[0]['recenttracks']['track'][0]); */

}


?>