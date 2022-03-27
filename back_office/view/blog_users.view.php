<?php
    include("layout/head.inc.php");
?>

    <body class="sb-nav-fixed">
        
<?php
    include("layout/header.inc.php");
    include("layout/nav.inc.php");
?>




           <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Blog Users
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>user_login</th>
                                    <th>user_pass</th>
                                    <th>user_email</th>
                                    <th>user_photo</th>
                                    <th>user_admin</th>
                                    <th>user_token</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data as $onedata){ ?>
               
                                    <tr>
                                        <td><?= $onedata["ID"]  ?></td>
                                        <td><?= $onedata["user_login"]  ?></td>
                                        <td><?= $onedata["user_pass"]  ?></td>
                                        <td><?= $onedata["user_email"]  ?></td>
                                        <td><?= $onedata["user_photo"]  ?></td>
                                        <td><?= $onedata["user_admin"]  ?></td>
                                        <td><?= $onedata["user_token"]  ?></td>
                                    </tr>
                                    
                                    
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

<?php
    include("layout/footer.inc.php");
?>

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>