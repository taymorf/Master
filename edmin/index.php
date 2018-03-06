<!DOCTYPE html>
<html lang="en">
    <?php
        include_once 'include/head.php';
    ?>
    <body>
        <div class="navbar navbar-fixed-top">
            <?php
                include_once 'include/nav.php';
            ?>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">

                <div class="row">
                    <div class="span3">
                        <?php
                            include_once 'include/sidemenu.php';
                        ?>
                        <!--/.sidebar-->
                    </div>
                    <?php
                        if (isset($_GET['page'])) {
                            include($_GET['page'] . '.php');
                        } else {
                            header("Location: index.php?page=include/frontpage");
                        }
                    ?>
                    <!--/.content-->
                </div>
                <!--/.span9-->
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <?php
            include_once 'include/footer.php';
        ?>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>

    </body>
