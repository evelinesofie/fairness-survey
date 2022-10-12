<?php
include "partials/header.php";
?>

<div id="progress">
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="30"
    aria-valuemin="0" aria-valuemax="100" style="width:30%">
    <span class="progress-bold">30%</span>
    </div>
  </div>
</div>


<div class="container col-sm-12" id="content">
    <div>
        <h1>Your relationship with music</h1>
        <p>Below are some music-related statements. Please select an option for each statement.</p>
    </div>
    <form method="post">
        <table class="table table-hover table-striped">
        <thead class="table-border musical-expertise">
            <tr>
                <th scope="col">Statement</th>
                <th class="centered px-0" scope="col">Completely Disagree</th>
                <th class="centered px-2" scope="col">Strongly Disagree</th>
                <th class="centered px-3" scope="col">Disagree</th>
                <th class="centered text-nowrap px-4" scope="col">Neither agree <br>nor disagree</th>
                <th class="centered px-4" scope="col">Agree</th>
                <th class="centered px-2" scope="col">Strongly Agree</th>
                <th class="centered px-1" scope="col">Completely Agree</th>
            </tr>
        </thead>
        <tbody class="musical-expertise">
            <tr>
            <td>I spend a lot of my free time doing music-related activities.</td>
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
                </td class="centered">
                <td class="centered">
                    <input type="radio" name="q1" value="6" required>
                </td>
                <td class="centered">
                    <input type="radio" name="q1" value="7" required>
                </td>
            </tr>
            <tr>
            <td>I enjoy writing about music, for example on blogs and forums.</td>
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
                <td class="centered">
                    <input type="radio" name="q2" value="6" required>
                </td>
                <td class="centered">
                    <input type="radio" name="q2" value="7" required>
                </td>
            </tr>
            <tr>
            <td>I often read or search the internet for things related to music.</td>
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
                <td class="centered">
                    <input type="radio" name="q3" value="6" required>
                </td>
                <td class="centered">
                    <input type="radio" name="q3" value="7" required>
                </td>
            </tr>
            <tr>
              <td>Answer with 'strongly agree' here.</td>
              <td class="centered">
                  <input type="radio" name="control_question_1" value="Fail" required>
              </td>
              <td class="centered">
                  <input type="radio" name="control_question_1" value="Fail" required>
              </td>
              <td class="centered">
                  <input type="radio" name="control_question_1" value="Fail" required>
              </td>
              <td class="centered">
                  <input type="radio" name="control_question_1" value="Fail" required>
              </td>
              <td class="centered">
                  <input type="radio" name="control_question_1" value="Fail" required>
              </td>
              <td class="centered">
                  <input type="radio" name="control_question_1" value="Pass" required>
              </td>
              <td class="centered">
                  <input type="radio" name="control_question_1" value="Fail" required>
              </td>
            </tr>
            <tr>
              <td>I don't spend much of my disposable income on music.</td>
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
              <td class="centered">
                  <input type="radio" name="q4" value="6" required>
              </td>
              <td class="centered">
                  <input type="radio" name="q4" value="7" required>
              </td>
          </tr>
          <tr>
              <td>Music is kind of an addiction for me - I couldn't live without it.</td>
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
              <td class="centered">
                  <input type="radio" name="q5" value="6" required>
              </td>
              <td class="centered">
                  <input type="radio" name="q5" value="7" required>
              </td>
          </tr>
          <tr>
              <td>I keep track of new music that I come across (e.g. new artists or recordings).</td>
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
              <td class="centered">
                  <input type="radio" name="q6" value="6" required>
              </td>
              <td class="centered">
                  <input type="radio" name="q6" value="7" required>
              </td>
            </tr>
          </tbody>
        </table>
        <input class="btn btn-primary cont" type="submit" name="continue" value="Continue"/>
    </form>
</div>

<?php 

if (isset($_POST["continue"])) {
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $q6 = $_POST['q6'];
    $control_question_1 = $_POST['control_question_1'];
    $username = $_SESSION['username'];

    $query = "UPDATE answers SET AE_01 = '$q1', AE_02 = '$q2', AE_05 = '$q3', AE_06 = '$q4', AE_07 = '$q5', AE_09 = '$q6', control_question_1 = '$control_question_1' WHERE participant = '$username'";
    $db->exec($query);
    header("Location: playlist-intro.php");
};

include "partials/footer.php";

?>