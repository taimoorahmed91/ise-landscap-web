<?php
include('includes/database.php');

// Query for DACLs
$query_dacl = "SELECT * FROM dacl WHERE queue = 'yes'";
$result_dacl = $mysqli->query($query_dacl) or die($mysqli->error.__LINE__);

// Query for Authorization profiles
$query_authz = "SELECT * FROM authz WHERE queue = 'yes'";
$result_authz = $mysqli->query($query_authz) or die($mysqli->error.__LINE__);

// Query for Allowed Protocols
$query_ap = "SELECT * FROM ap WHERE queue = 'yes'";
$result_ap = $mysqli->query($query_ap) or die($mysqli->error.__LINE__);

// Query for SGTs
$query_sgt = "SELECT * FROM sgt WHERE queue = 'yes'";
$result_sgt = $mysqli->query($query_sgt) or die($mysqli->error.__LINE__);

// Query for NADs
$query_nad = "SELECT * FROM nad WHERE queue = 'yes'";
$result_nad = $mysqli->query($query_nad) or die($mysqli->error.__LINE__);


// Query for Uploadss
$query_uploads = "SELECT * FROM uploads WHERE queue = 'yes'";
$result_uploads = $mysqli->query($query_uploads) or die($mysqli->error.__LINE__);


// Query for policysets
$query_policyset = "SELECT * FROM policyset WHERE queue = 'yes'";
$result_policyset = $mysqli->query($query_policyset) or die($mysqli->error.__LINE__);

// Query for authentications
$query_authentication = "SELECT * FROM authentication WHERE queue = 'yes'";
$result_authentication = $mysqli->query($query_authentication) or die($mysqli->error.__LINE__);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MISE Dashboard</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        h1 {
            font-size: 150px;
        }
    </style>
</head>
<body bgcolor="#349" text="white" onload="startTime()">
<br>
<h1 align="right">
    <span id="txt"></span>
</h1>

<div class="container">
    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills pull-right">
                <li role="presentation" class="active"><a href="index.php">Home</a></li>
            </ul>
        </nav>
        <h3 class="text-muted">Taiahmed ISE Landscape Testing</h3>
    </div>

    <div class="row marketing">

        <div class="col-lg-12">
            <h2> DACLs which were added to queue </h2>
            <table class="table table-striped">
                <tr>
                    <th> ID </th>
                    <th> DACL Name </th>
                    <th> SRC ISE FQDN </th>
                </tr>
                <?php
                if ($result_dacl->num_rows > 0) {
                    while ($row = $result_dacl->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>' . $row['id'] . '</td>';
                        echo '<td> <a href="./configs/dacl/' . $row['daclid'] . '">' . $row['dacl'] . '</a></td>';
                        echo '<td>' . $row['isename'] . '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="3">Sorry, no entries were found</td></tr>';
}
?>
</table>
</div>

    <div class="col-lg-12">
        <h2> Authorization profiles which were added to queue </h2>
        <table class="table table-striped">
            <tr>
                <th> ID </th>
                <th> AuthZ Name </th>
                <th> SRC ISE FQDN </th>
            </tr>
            <?php
            if ($result_authz->num_rows > 0) {
                while ($row = $result_authz->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td> <a href="./configs/authz/' . $row['authzid'] . '">' . $row['authz'] . '</a></td>';
                    echo '<td>' . $row['isename'] . '</td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="3">Sorry, no entries were found</td></tr>';
            }
            ?>
        </table>
    </div>

    <div class="col-lg-12">
        <h2> Allowed Protocol which were added to queue </h2>
        <table class="table table-striped">
            <tr>
                <th> ID </th>
                <th> AP Name </th>
                <th> SRC ISE FQDN </th>
            </tr>
            <?php
            if ($result_ap->num_rows > 0) {
                while ($row = $result_ap->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td> <a href="./configs/ap/' . $row['apid'] . '">' . $row['ap'] . '</a></td>';
                    echo '<td>' . $row['isename'] . '</td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="3">Sorry, no entries were found</td></tr>';
            }
            ?>
        </table>
    </div>

    <div class="col-lg-12">
        <h2> SGT which were added to queue </h2>
        <table class="table table-striped">
            <tr>
                <th> ID </th>
                <th> SGT Name </th>
                <th> SRC ISE FQDN </th>
            </tr>
            <?php
            if ($result_sgt->num_rows > 0) {
                while ($row = $result_sgt->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td> <a href="./configs/sgt/' . $row['sgtid'] . '">' . $row['sgt'] . '</a></td>';
                    echo '<td>' . $row['isename'] . '</td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="3">Sorry, no entries were found</td></tr>';
            }
            ?>
        </table>
    </div>

    <div class="col-lg-12">
        <h2> NAD which were added to queue </h2>
        <table class="table table-striped">
            <tr>
                <th> ID </th>
                <th> NAD Name </th>
                <th> SRC ISE FQDN </th>
            </tr>
            <?php
            if ($result_nad->num_rows > 0) {
            while ($row = $result_nad->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td> <a href="./configs/nad/' . $row['nadid'] . '">' . $row['nad'] . '</a></td>';
            echo '<td>' . $row['isename'] . '</td>';
            echo '</tr>';
        }
            } else {
echo '<tr><td colspan="3">Sorry, no entries were found</td></tr>';
}
?>
</table>
</div>

    <div class="col-lg-12">
        <h2> Uploaded files which were added to queue </h2>
        <table class="table table-striped">
            <tr>
                <th> ID </th>
                <th> NAD Name </th>
                <th> Description </th>
            </tr>
            <?php
            if ($result_uploads->num_rows > 0) {
            while ($row = $result_uploads->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td> <a href="'. $row['directory'] . '">' . $row['name'] . '</a></td>';
            echo '<td>' . $row['description'] . '</td>';
            echo '</tr>';
        }
            } else {
echo '<tr><td colspan="3">Sorry, no entries were found</td></tr>';
}
?>
</table>
</div>


    <div class="col-lg-12">
        <h2> Policysets which were added to queue </h2>
        <table class="table table-striped">
            <tr>
                <th> ID </th>
                <th> PolicySet Name </th>
                <th> SRC ISE FQDN </th>
            </tr>
            <?php
            if ($result_policyset->num_rows > 0) {
            while ($row = $result_policyset->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td> <a href="./configs/policyset/' . $row['policysetid'] . '">' . $row['policyset'] . '</a></td>';
            echo '<td>' . $row['isename'] . '</td>';
            echo '</tr>';
        }
            } else {
echo '<tr><td colspan="3">Sorry, no entries were found this</td></tr>';
}
?>
</table>
</div>



    <div class="col-lg-12">
        <h2> Authentications which were added to queue </h2>
        <table class="table table-striped">
            <tr>
                <th> ID </th>
                <th> Authentication Name </th>
                <th> SRC ISE FQDN </th>
            </tr>
            <?php
            if ($result_authentication->num_rows > 0) {
            while ($row = $result_authentication->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td> <a href="./configs/authentications/' . $row['authenticationid'] . '">' . $row['authentication'] . '</a></td>';
            echo '<td>' . $row['isename'] . '</td>';
            echo '</tr>';
        }
            } else {
echo '<tr><td colspan="3">Sorry, no entries were found</td></tr>';
}
?>
</table>
</div>
    <p> </p>
    <p> </p>
    <p> </p>
    <p> </p>
    <p> </p>
    <p> </p>



    <form  action="deployment_phase3.php">
        <input type="submit" value="Deployment Page" class="btn btn-success" />
    </form>




    <p> </p>
    <p> </p>
    <p> </p>

    <p> </p>
    <p> </p>
    <p> </p>
    <p> </p>
    <p> </p>
    <p> </p>

    <footer class="footer">
        <p>&copy; 2023 TaiAhmed Labwork</p>
    </footer>
</div> <!-- /container -->

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

