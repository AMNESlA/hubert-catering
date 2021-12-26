<?php
include 'inc/koneksi.php';
include 'inc/session.php';
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>

    <link rel="stylesheet" type="text/css" href="css/invoice.css">
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="img/er_logo.png" style="width:100%; max-width:300px;">
                            </td>

                            <td>
                                Invoice #: <?php echo "id invoice"; ?><br>
                                Created: <?php echo "tgl invoice"; ?><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                <?= $_SESSION['username']; ?>
                            </td>

                            <td><br>
                            <?= $_SESSION['username'] ?><br>
                            <?= $_SESSION['handphone'] ?><br>
                            <?= $_SESSION['email'] ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>



            <tr class="heading">
                <td>
                    Appointment Details
                </td>

                <td>
                    #
                </td>
            </tr>

            <tr class="item">
                <td>
                    Appointment ID
                </td>

                <td>
                    <?php echo "adress"; ?>
                </td>
            </tr>

            <tr class="item">
                <td>
                    Schedule ID
                </td>

                <td>
                    <?php echo "adress"; ?>
                </td>
            </tr>

            <tr class="item">
                <td>
                    Appointment Day
                </td>

                <td>
                    <?php echo "adress"; ?>
                </td>
            </tr>


            <tr class="item">
                <td>
                    Appointment Date
                </td>

                <td>
                    <?php echo "adress"; ?>
                </td>
            </tr>

            <tr class="item">
                <td>
                    Appointment Time
                </td>

                <td>
                    <?php echo "adress"; ?> untill <?php echo "adress"; ?>
                </td>
            </tr>

            <tr class="item">
                <td>
                    Patient Symptom
                </td>

                <td>
                    <?php echo "adress"; ?>
                </td>
            </tr>



        </table>
    </div>
    <div class="print">
        <button onclick="myFunction()">Print this page</button>
    </div>
    <script>
        function myFunction() {
            window.print();
        }
    </script>
</body>

</html>