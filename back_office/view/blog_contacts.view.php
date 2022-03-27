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
                        Blog Contacts
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>contact_ID</th>
                                    <th>contact_name</th>
                                    <th>contact_email</th>
                                    <th>contact_phone</th>
                                    <th>contact_message</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data as $onedata){ ?>
               
                                    <tr>
                                        <td><?= $onedata["contact_ID"]  ?></td>
                                        <td><?= $onedata["contact_name"]  ?></td>
                                        <td><?= $onedata["contact_email"]  ?></td>
                                        <td><?= $onedata["contact_phone"]  ?></td>
                                        <td><?= $onedata["contact_message"]  ?></td>
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