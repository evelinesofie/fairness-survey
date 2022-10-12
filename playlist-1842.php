<?php
include "partials/header.php";

/* Set the first number in the randomized array as $num 
$num is the index where the new rec list starts in the array */
$num = $_SESSION['random_order'][0];

/* print_r($_SESSION['recommendations']);
echo "<br>";
print_r($_SESSION['random_order']); */

//Print name of algorithm
echo $_SESSION['recommendations'][$num];
?>

<div id="progress">
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="50"
    aria-valuemin="0" aria-valuemax="100" style="width:50%">
    <span class="progress-bold">50%</span>
    </div>
  </div>
</div>

<div class="container col-sm-12" id="content">
    <h1 class="playlist bold">Playlist 1</h1>
        <form method="post">
            <div class="col-lg-12">
                <table class="table table-hover playlist-table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="rounded-edges-left">Song title</th>
                            <th scope="col">Artist(s)</th>
                            <th scope="col">I know this song *</th>
                            <th scope="col">I listen to this song</th>
                            <th scope="col" class="rounded-edges-right">This song is popular</th>
                        </tr>
                    </thead>
                    <tbody style="background-color: rgba(33, 37, 41, 0.05)">
                            <!-- Display song & artist based on $num -->
                            <td><?php echo $_SESSION['recommendations'][$num+1][1]; ?></td>
                            <td><?php echo $_SESSION['recommendations'][$num+1][0]; ?></td>
                            <td>
                                <input type="radio" name="s1-know" value="1" onclick="enableRadio(1);" required><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s1-know" value="0" onclick="disableRadio(1);"><label class="label-yes-no">No</label>
                            </td>
                            <td>
                                <input type="radio" name="s1-listen" value="1"><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s1-listen" value="0"><label class="label-yes-no">No</label>
                                <input type="radio" name="s1-listen" value="99" hidden checked><label class="label-yes-no"></label>
                            </td>
                            <td>
                                <input type="radio" name="s1-popular" value="1"><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s1-popular" value="0"><label class="label-yes-no">No</label>
                                <input type="radio" name="s1-popular" value="99" hidden checked><label class="label-yes-no"></label>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $_SESSION['recommendations'][$num+2][1]; ?></td>
                            <td><?php echo $_SESSION['recommendations'][$num+2][0]; ?></td>
                            <td>
                                <input type="radio" name="s2-know" value="1" onclick="enableRadio(2);" required><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s2-know" value="0" onclick="disableRadio(2);"><label class="label-yes-no">No</label>
                            </td>
                            <td>
                                <input type="radio" name="s2-listen" value="1"><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s2-listen" value="0"><label class="label-yes-no">No</label>
                                <input type="radio" name="s2-listen" value="99" hidden checked><label class="label-yes-no"></label>
                            </td>
                            <td>
                                <input type="radio" name="s2-popular" value="1"><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s2-popular" value="0"><label class="label-yes-no">No</label>
                                <input type="radio" name="s2-popular" value="99" hidden checked><label class="label-yes-no"></label>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $_SESSION['recommendations'][$num+3][1]; ?></td>
                            <td><?php echo $_SESSION['recommendations'][$num+3][0]; ?></td>
                            <td>
                                <input type="radio" name="s3-know" value="1" onclick="enableRadio(3);" required><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s3-know" value="0" onclick="disableRadio(3);"><label class="label-yes-no">No</label>
                            </td>
                            <td>
                                <input type="radio" name="s3-listen" value="1"><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s3-listen" value="0"><label class="label-yes-no">No</label>
                                <input type="radio" name="s3-listen" value="99" hidden checked><label class="label-yes-no"></label>
                            </td>
                            <td>
                                <input type="radio" name="s3-popular" value="1"><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s3-popular" value="0"><label class="label-yes-no">No</label>
                                <input type="radio" name="s3-popular" value="99" hidden checked><label class="label-yes-no"></label>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $_SESSION['recommendations'][$num+4][1]; ?></td>
                            <td><?php echo $_SESSION['recommendations'][$num+4][0]; ?></td>
                            <td>
                                <input type="radio" name="s4-know" value="1" onclick="enableRadio(4);" required><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s4-know" value="0" onclick="disableRadio(4);"><label class="label-yes-no">No</label>
                            </td>
                            <td>
                                <input type="radio" name="s4-listen" value="1"><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s4-listen" value="0"><label class="label-yes-no">No</label>
                                <input type="radio" name="s4-listen" value="99" hidden checked><label class="label-yes-no"></label>
                            </td>
                            <td>
                                <input type="radio" name="s4-popular" value="1"><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s4-popular" value="0"><label class="label-yes-no">No</label>
                                <input type="radio" name="s4-popular" value="99" hidden checked><label class="label-yes-no"></label>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $_SESSION['recommendations'][$num+5][1]; ?></td>
                            <td><?php echo $_SESSION['recommendations'][$num+5][0]; ?></td>
                            <td>
                                <input type="radio" name="s5-know" value="1" onclick="enableRadio(5);" required><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s5-know" value="0" onclick="disableRadio(5);"><label class="label-yes-no">No</label>
                            </td>
                            <td>
                                <input type="radio" name="s5-listen" value="1"><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s5-listen" value="0"><label class="label-yes-no">No</label>
                                <input type="radio" name="s5-listen" value="99" hidden checked><label class="label-yes-no"></label>
                            </td>
                            <td>
                                <input type="radio" name="s5-popular" value="1"><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s5-popular" value="0"><label class="label-yes-no">No</label>
                                <input type="radio" name="s5-popular" value="99" hidden checked><label class="label-yes-no"></label>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $_SESSION['recommendations'][$num+6][1]; ?></td>
                            <td><?php echo $_SESSION['recommendations'][$num+6][0]; ?></td>
                            <td>
                                <input type="radio" name="s6-know" value="1" onclick="enableRadio(6);" required><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s6-know" value="0" onclick="disableRadio(6);"><label class="label-yes-no">No</label>
                            </td>
                            <td>
                                <input type="radio" name="s6-listen" value="1"><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s6-listen" value="0"><label class="label-yes-no">No</label>
                                <input type="radio" name="s6-listen" value="99" hidden checked><label class="label-yes-no"></label>
                            </td>
                            <td>
                                <input type="radio" name="s6-popular" value="1"><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s6-popular" value="0"><label class="label-yes-no">No</label>
                                <input type="radio" name="s6-popular" value="99" hidden checked><label class="label-yes-no"></label>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $_SESSION['recommendations'][$num+7][1]; ?></td>
                            <td><?php echo $_SESSION['recommendations'][$num+7][0]; ?></td>
                            <td>
                                <input type="radio" name="s7-know" value="1" onclick="enableRadio(7);" required><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s7-know" value="0" onclick="disableRadio(7);"><label class="label-yes-no">No</label>
                            </td>
                            <td>
                                <input type="radio" name="s7-listen" value="1"><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s7-listen" value="0"><label class="label-yes-no">No</label>
                                <input type="radio" name="s7-listen" value="99" hidden checked><label class="label-yes-no"></label>
                            </td>
                            <td>
                                <input type="radio" name="s7-popular" value="1"><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s7-popular" value="0"><label class="label-yes-no">No</label>
                                <input type="radio" name="s7-popular" value="99" hidden checked><label class="label-yes-no"></label>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $_SESSION['recommendations'][$num+8][1]; ?></td>
                            <td><?php echo $_SESSION['recommendations'][$num+8][0]; ?></td>
                            <td>
                                <input type="radio" name="s8-know" value="1" onclick="enableRadio(8);" required><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s8-know" value="0" onclick="disableRadio(8);"><label class="label-yes-no">No</label>
                            </td>
                            <td>
                                <input type="radio" name="s8-listen" value="1"><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s8-listen" value="0"><label class="label-yes-no">No</label>
                                <input type="radio" name="s8-listen" value="99" hidden checked><label class="label-yes-no"></label>
                            </td>
                            <td>
                                <input type="radio" name="s8-popular" value="1"><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s8-popular" value="0"><label class="label-yes-no">No</label>
                                <input type="radio" name="s8-popular" value="99" hidden checked><label class="label-yes-no"></label>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $_SESSION['recommendations'][$num+9][1]; ?></td>
                            <td><?php echo $_SESSION['recommendations'][$num+9][0]; ?></td>
                            <td>
                                <input type="radio" name="s9-know" value="1" onclick="enableRadio(9);" required><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s9-know" value="0" onclick="disableRadio(9);"><label class="label-yes-no">No</label>
                            </td>
                            <td>
                                <input type="radio" name="s9-listen" value="1"><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s9-listen" value="0"><label class="label-yes-no">No</label>
                                <input type="radio" name="s9-listen" value="99" hidden checked><label class="label-yes-no"></label>
                            </td>
                            <td>
                                <input type="radio" name="s9-popular" value="1"><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s9-popular" value="0"><label class="label-yes-no">No</label>
                                <input type="radio" name="s9-popular" value="99" hidden checked><label class="label-yes-no"></label>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $_SESSION['recommendations'][$num+10][1]; ?></td>
                            <td><?php echo $_SESSION['recommendations'][$num+10][0]; ?></td>
                            <td>
                                <input type="radio" name="s10-know" value="1" onclick="enableRadio(10);" required><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s10-know" value="0" onclick="disableRadio(10);"><label class="label-yes-no">No</label>
                            </td>
                            <td>
                                <input type="radio" name="s10-listen" value="1"><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s10-listen" value="0"><label class="label-yes-no">No</label>
                                <input type="radio" name="s10-listen" value="99" hidden checked><label class="label-yes-no"></label>
                            </td>
                            <td>
                                <input type="radio" name="s10-popular" value="1"><label class="label-yes-no">Yes</label>
                                <input type="radio" name="s10-popular" value="0"><label class="label-yes-no">No</label>
                                <input type="radio" name="s10-popular" value="99" hidden checked><label class="label-yes-no"></label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <hr>

            <div class="col-lg-12">
                <h2 class="bold">Questions</h2>
                <p>Please select an option for each statement.</p>
                <table class="table table-hover table-striped playlist-q-table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="rounded-edges-left align-middle">Statement</th>
                        <th scope="col" class="centered px-4">Disagree <br>strongly</th>
                        <th scope="col" class="centered px-4">Disagree <br>a little</th>
                        <th scope="col" class="centered px-4">Neither agree <br>nor disagree</th>
                        <th scope="col" class="centered px-4">Agree <br>a little</th>
                        <th scope="col" class="centered px-4 rounded-edges-right">Agree <br>strongly</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>I am satisfied with the list of recommended items.</td>
                        <td class="centered">
                            <input type="radio" name="q1" value="1" required>
                        </td>
                        <td class="centered">
                            <input type="radio" name="q1" value="2" required>
                        </td>
                        <td class="centered">
                            <input type="radio" name="q1" value="3" required>
                        </td>
                        <td class="centered">
                            <input type="radio" name="q1" value="4" required>
                        </td>
                        <td class="centered">
                            <input type="radio" name="q1" value="5" required>
                        </td>
                    </tr>
                    <tr>
                    <td>I would give the recommended items a high rating.</td>
                        <td class="centered">
                            <input type="radio" name="q2" value="1" required>
                        </td>
                        <td class="centered">
                            <input type="radio" name="q2" value="2" required>
                        </td>
                        <td class="centered">
                            <input type="radio" name="q2" value="3" required>
                        </td>
                        <td class="centered">
                            <input type="radio" name="q2" value="4" required>
                        </td>
                        <td class="centered">
                            <input type="radio" name="q2" value="5" required>
                        </td>
                    </tr>
                    <tr>
                    <td>The list of recommendations matches my preferences.</td>
                        <td class="centered">
                            <input type="radio" name="q3" value="1" required>
                        </td>
                        <td class="centered">
                            <input type="radio" name="q3" value="2" required>
                        </td>
                        <td class="centered">
                            <input type="radio" name="q3" value="3" required>
                        </td>
                        <td class="centered">
                            <input type="radio" name="q3" value="4" required>
                        </td>
                        <td class="centered">
                            <input type="radio" name="q3" value="5" required>
                        </td>
                    </tr>
                    <tr>
                    <td>This playlist has a fair balance between popular and less popular items.</td>
                        <td class="centered">
                            <input type="radio" name="q4" value="1" required>
                        </td>
                        <td class="centered">
                            <input type="radio" name="q4" value="2" required>
                        </td>
                        <td class="centered">
                            <input type="radio" name="q4" value="3" required>
                        </td>
                        <td class="centered">
                            <input type="radio" name="q4" value="4" required>
                        </td>
                        <td class="centered">
                            <input type="radio" name="q4" value="5" required>
                        </td>
                    </tr>
                    <tr>
                    <td>This playlist would be fairer if a higher number of popular items were included.</td>
                        <td class="centered">
                            <input type="radio" name="q5" value="1" required>
                        </td>
                        <td class="centered">
                            <input type="radio" name="q5" value="2" required>
                        </td>
                        <td class="centered">
                            <input type="radio" name="q5" value="3" required>
                        </td>
                        <td class="centered">
                            <input type="radio" name="q5" value="4" required>
                        </td>
                        <td class="centered">
                            <input type="radio" name="q5" value="5" required>
                        </td>
                    </tr>
                    <tr>
                    <td>This playlist would be fairer if a higher number of less popular items were included.</td>
                        <td class="centered">
                            <input type="radio" name="q6" value="1" required>
                        </td>
                        <td class="centered">
                            <input type="radio" name="q6" value="2" required>
                        </td>
                        <td class="centered">
                            <input type="radio" name="q6" value="3" required>
                        </td>
                        <td class="centered">
                            <input type="radio" name="q6" value="4" required>
                        </td>
                        <td class="centered">
                            <input type="radio" name="q6" value="5" required>
                        </td>
                    </tr>
                </tbody>
                </table>
                <p class="ratio-q">Is the ratio of popular items in this playlist the same as what you usually listen to?</p>
                <input type="radio" name="ratio" value="2" required><label class="ratio-label">Yes, it is the same</label><br>
                <input type="radio" name="ratio" value="1" required><label class="ratio-label">No, I usually listen to a lower ratio of popular items</label><br>
                <input type="radio" name="ratio" value="3" required><label class="ratio-label">No, I usually listen to a higher ratio of popular items</label><br><br>
                <input class="btn btn-primary cont" type="submit" name="continue" value="Continue"/>
            </div>
        </form>
    </div>
</div>


<?php 

if (isset($_POST["continue"])) {
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $q6 = $_POST['q6'];
    $ratio = $_POST['ratio'];

    $s1_know = $_POST['s1-know'];
    $s2_know = $_POST['s2-know'];
    $s3_know = $_POST['s3-know'];
    $s4_know = $_POST['s4-know'];
    $s5_know = $_POST['s5-know'];
    $s6_know = $_POST['s6-know'];
    $s7_know = $_POST['s7-know'];
    $s8_know = $_POST['s8-know'];
    $s9_know = $_POST['s9-know'];
    $s10_know = $_POST['s10-know'];

    $s1_listen = $_POST['s1-listen'];
    $s2_listen = $_POST['s2-listen'];
    $s3_listen = $_POST['s3-listen'];
    $s4_listen = $_POST['s4-listen'];
    $s5_listen = $_POST['s5-listen'];
    $s6_listen = $_POST['s6-listen'];
    $s7_listen = $_POST['s7-listen'];
    $s8_listen = $_POST['s8-listen'];
    $s9_listen = $_POST['s9-listen'];
    $s10_listen = $_POST['s10-listen'];

    $s1_popular = $_POST['s1-popular'];
    $s2_popular = $_POST['s2-popular'];
    $s3_popular = $_POST['s3-popular'];
    $s4_popular = $_POST['s4-popular'];
    $s5_popular = $_POST['s5-popular'];
    $s6_popular = $_POST['s6-popular'];
    $s7_popular = $_POST['s7-popular'];
    $s8_popular = $_POST['s8-popular'];
    $s9_popular = $_POST['s9-popular'];
    $s10_popular = $_POST['s10-popular'];

    $username = $_SESSION['username'];

    // Save number of familiar songs
    $count = 0;

    for ($i = 1; $i <= 10; $i++) {
        $fam = $_POST['s' . $i . '-know'];
        if($fam == 1) {
            $count++;
        }
    }

    // Check which algorithm we are at in the list & update fields accordingly
    if ($_SESSION['recommendations'][$num] == "VAE:") {
        $query = "UPDATE answers SET vae_satisfaction_1 = $q1, vae_satisfaction_2 = $q2, vae_satisfaction_3 = $q3, vae_fairness_1 = $q4, vae_fairness_2 = $q5, vae_fairness_3 = $q6, vae_familiar_songs = $count, vae_ratio = $ratio, vae_s1_familiar = $s1_know, vae_s2_familiar = $s2_know, vae_s3_familiar = $s3_know, vae_s4_familiar = $s4_know, vae_s5_familiar = $s5_know, vae_s6_familiar = $s6_know, vae_s7_familiar = $s7_know, vae_s8_familiar = $s8_know, vae_s9_familiar = $s9_know, vae_s10_familiar = $s10_know, vae_s1_listen = $s1_listen, vae_s2_listen = $s2_listen, vae_s3_listen = $s3_listen, vae_s4_listen = $s4_listen, vae_s5_listen = $s5_listen, vae_s6_listen = $s6_listen, vae_s7_listen = $s7_listen, vae_s8_listen = $s8_listen, vae_s9_listen = $s9_listen, vae_s10_listen = $s10_listen, vae_s1_popular = $s1_popular, vae_s2_popular = $s2_popular, vae_s3_popular = $s3_popular, vae_s4_popular = $s4_popular, vae_s5_popular = $s5_popular, vae_s6_popular = $s6_popular, vae_s7_popular = $s7_popular, vae_s8_popular = $s8_popular, vae_s9_popular = $s9_popular, vae_s10_popular = $s10_popular, first_algorithm_displayed = 1 WHERE participant = '$username'";
        $db->exec($query);
    } else if ($_SESSION['recommendations'][$num] == "ALS:") {
        $query = "UPDATE answers SET als_satisfaction_1 = $q1, als_satisfaction_2 = $q2, als_satisfaction_3 = $q3, als_fairness_1 = $q4, als_fairness_2 = $q5, als_fairness_3 = $q6, als_familiar_songs = $count, als_ratio = $ratio, als_s1_familiar = $s1_know, als_s2_familiar = $s2_know, als_s3_familiar = $s3_know, als_s4_familiar = $s4_know, als_s5_familiar = $s5_know, als_s6_familiar = $s6_know, als_s7_familiar = $s7_know, als_s8_familiar = $s8_know, als_s9_familiar = $s9_know, als_s10_familiar = $s10_know, als_s1_listen = $s1_listen, als_s2_listen = $s2_listen, als_s3_listen = $s3_listen, als_s4_listen = $s4_listen, als_s5_listen = $s5_listen, als_s6_listen = $s6_listen, als_s7_listen = $s7_listen, als_s8_listen = $s8_listen, als_s9_listen = $s9_listen, als_s10_listen = $s10_listen, als_s1_popular = $s1_popular, als_s2_popular = $s2_popular, als_s3_popular = $s3_popular, als_s4_popular = $s4_popular, als_s5_popular = $s5_popular, als_s6_popular = $s6_popular, als_s7_popular = $s7_popular, als_s8_popular = $s8_popular, als_s9_popular = $s9_popular, als_s10_popular = $s10_popular, first_algorithm_displayed = 2 WHERE participant = '$username'";
        $db->exec($query);
    } else if ($_SESSION['recommendations'][$num] == "Slim:") {
        $query = "UPDATE answers SET slim_satisfaction_1 = $q1, slim_satisfaction_2 = $q2, slim_satisfaction_3 = $q3, slim_fairness_1 = $q4, slim_fairness_2 = $q5, slim_fairness_3 = $q6, slim_familiar_songs = $count, slim_ratio = $ratio, slim_s1_familiar = $s1_know, slim_s2_familiar = $s2_know, slim_s3_familiar = $s3_know, slim_s4_familiar = $s4_know, slim_s5_familiar = $s5_know, slim_s6_familiar = $s6_know, slim_s7_familiar = $s7_know, slim_s8_familiar = $s8_know, slim_s9_familiar = $s9_know, slim_s10_familiar = $s10_know, slim_s1_listen = $s1_listen, slim_s2_listen = $s2_listen, slim_s3_listen = $s3_listen, slim_s4_listen = $s4_listen, slim_s5_listen = $s5_listen, slim_s6_listen = $s6_listen, slim_s7_listen = $s7_listen, slim_s8_listen = $s8_listen, slim_s9_listen = $s9_listen, slim_s10_listen = $s10_listen, slim_s1_popular = $s1_popular, slim_s2_popular = $s2_popular, slim_s3_popular = $s3_popular, slim_s4_popular = $s4_popular, slim_s5_popular = $s5_popular, slim_s6_popular = $s6_popular, slim_s7_popular = $s7_popular, slim_s8_popular = $s8_popular, slim_s9_popular = $s9_popular, slim_s10_popular = $s10_popular, first_algorithm_displayed = 3 WHERE participant = '$username'";
        $db->exec($query);
    }

    header("Location: playlist-2563.php");
};

include "partials/footer.php";

?>