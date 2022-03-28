<?php
    include("layout/head.inc.php");
?>

<div class="align-items-center ">
    <body class="sb-nav-fixed">
        
<?php
    include("layout/header.inc.php");
    include("layout/nav.inc.php");
?>
    <div class="d-flex justify-content-center ">
    <a href="blog_categories.php">
    <button type="button" class="btn btn-primary">Blog Catégories</button>
    </a>

    <a href="blog_comments.php">
    <button type="button" class="btn btn-secondary">Blog Comments</button>
    </a>

    <a href="blog_contacts.php">
    <button type="button" class="btn btn-success">Blog Contacts</button>
    </a>

    <a href="blog_posts.php">
    <button type="button" class="btn btn-danger">Blog Posts</button>
    </a>

    <a href="blog_users.php">
    <button type="button" class="btn btn-warning">Blog Users</button>
    </a>
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
