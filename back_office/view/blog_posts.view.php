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
                        Blog Posts
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>post_ID</th>
                                    <th>post_author</th>
                                    <th>post_category</th>
                                    <th>post_date</th>
                                    <th>post_content</th>
                                    <th>post_title</th>
                                    <th>post_img_url</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data as $onedata){ ?>
               
                                    <tr>
                                        <td><?= $onedata["post_ID"]  ?></td>
                                        <td><?= $onedata["post_author"]  ?></td>
                                        <td><?= $onedata["post_category"]  ?></td>
                                        <td><?= $onedata["post_date"]  ?></td>
                                        <td><?= $onedata["post_content"]  ?>...</td>
                                        <td><?= $onedata["post_title"]  ?></td>
                                        <td><?= $onedata["post_img_url"]  ?></td>
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