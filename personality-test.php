<?php
include "partials/header.php";
?>

<div id="progress">
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="20"
    aria-valuemin="0" aria-valuemax="100" style="width:20%">
    <span class="progress-bold">20%</span>
    </div>
  </div>
</div>

<div class="container col-sm-12" id="content">
    <div class="col-lg-6">
        <h1>Personality test</h1>
        <p>Below are a number of personality traits that may or may not apply to you. Please select an option to indicate the extent to which you agree or disagree with each statement. You should rate the extent to which the pair of traits applies to you, even if one characteristic applies more strongly than the other.</p>
    </div>
    <div class="col-sm-12">
        <form method="post">
            <table class="table table-hover table-striped">
            <thead class="table-border">
                <tr>
                    <th scope="col">I see myself as:</th>
                    <th class="centered" scope="col">Disagree <br>strongly</th>
                    <th class="centered" scope="col">Disagree <br>moderately</th>
                    <th class="centered" scope="col">Disagree <br>a little</th>
                    <th class="centered" scope="col">Neither agree <br>nor disagree</th>
                    <th class="centered" scope="col">Agree <br>a little</th>
                    <th class="centered" scope="col">Agree <br>moderately</th>
                    <th class="centered" scope="col">Agree <br>strongly</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>Extraverted, enthusiastic.</td>
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
                    <td class="centered">
                        <input type="radio" name="q1" value="6" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q1" value="7" required>
                    </td>
                </tr>
                <tr>
                    <td>Critical, quarrelsome.</td>
                    <td class="centered">
                        <input type="radio" name="q2" value="7" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q2" value="6" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q2" value="5" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q2" value="4" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q2" value="3" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q2" value="2" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q2" value="1" required>
                    </td>
                </tr>
                <tr>
                    <td>Dependable, self-disciplined.</td>
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
                    <td>Anxious, easily upset.</td>
                    <td class="centered">
                        <input type="radio" name="q4" value="7" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q4" value="6" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q4" value="5" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q4" value="4" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q4" value="3" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q4" value="2" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q4" value="1" required>
                    </td>
                </tr>
                <tr>
                    <td>Open to new experiences, complex.</td>
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
                    <td>Reserved, quiet.</td>
                    <td class="centered">
                        <input type="radio" name="q6" value="7" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q6" value="6" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q6" value="5" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q6" value="4" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q6" value="3" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q6" value="2" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q6" value="1" required>
                    </td>
                </tr>
                <tr>
                    <td>Sympathetic, warm.</td>
                    <td class="centered">
                        <input type="radio" name="q7" value="1" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q7" value="2" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q7" value="3" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q7" value="4" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q7" value="5" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q7" value="6" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q7" value="7" required>
                    </td>
                </tr>
                <tr>
                    <td>Disorganized, careless.</td>
                    <td class="centered">
                        <input type="radio" name="q8" value="7" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q8" value="6" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q8" value="5" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q8" value="4" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q8" value="3" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q8" value="2" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q8" value="1" required>
                    </td>
                </tr>
                <tr>
                    <td>Calm, emotionally stable.</td>
                    <td class="centered">
                        <input type="radio" name="q9" value="1" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q9" value="2" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q9" value="3" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q9" value="4" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q9" value="5" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q9" value="6" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q9" value="7" required>
                    </td>
                </tr>
                <tr>
                    <td>Conventional, uncreative.</td>
                    <td class="centered">
                        <input type="radio" name="q10" value="7" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q10" value="6" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q10" value="5" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q10" value="4" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q10" value="3" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q10" value="2" required>
                    </td>
                    <td class="centered">
                        <input type="radio" name="q10" value="1" required>
                    </td>
                </tr>
            </tbody>
            </table>
            <input class="btn btn-primary personality-cont cont" type="submit" name="continue" value="Continue"/>
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
    $q7 = $_POST['q7'];
    $q8 = $_POST['q8'];
    $q9 = $_POST['q9'];
    $q10 = $_POST['q10'];
    $username = $_SESSION['username'];

    $query = "UPDATE answers SET tipi_1 = '$q1', tipi_2 = '$q2', tipi_3 = '$q3', tipi_4 = '$q4', tipi_5 = '$q5', tipi_6 = '$q6', tipi_7 = '$q7', tipi_8 = '$q8', tipi_9 = '$q9', tipi_10 = '$q10' WHERE participant = '$username'";
    $db->exec($query);
    header("Location: musical-expertise.php");
};

include "partials/footer.php";

?>