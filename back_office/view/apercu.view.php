<?php
    include("layout/head.inc.php");
?>

    <body class="sb-nav-fixed">
        
<?php
    include("layout/header.inc.php");
    include("layout/nav.inc.php");
?>

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
      Blog Catégories
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Blog Catégories
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>cat_id</th>
                                    <th>cat_descr</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data2 as $onedata){ ?>
               
                                    <tr>
                                        <td><?= $onedata["cat_id"]  ?></td>
                                        <td><?= $onedata["cat_descr"]  ?></td>
                                    </tr>
           
           
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      Blog Comments
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Blog Comments
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>comment_ID</th>
                                    <th>comment_post_ID</th>
                                    <th>comment_author</th>
                                    <th>comment_date</th>
                                    <th>comment_content</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data3 as $onedata){ ?>
               
                                    <tr>
                                        <td><?= $onedata["comment_ID"]  ?></td>
                                        <td><?= $onedata["comment_post_ID"]  ?></td>
                                        <td><?= $onedata["comment_author"]  ?></td>
                                        <td><?= $onedata["comment_date"]  ?></td>
                                        <td><?= $onedata["comment_content"]  ?></td>
                                    </tr>
                                    
                                    
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Blog Contacts
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
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
                            <?php foreach($data4 as $onedata){ ?>
               
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
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
      Blog Post
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="card mb-4">
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
                            <?php foreach($data5 as $onedata){ ?>
               
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
                </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
      Blog Post
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="card mb-4">
      <div class="card mb-4">
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
                </div>
                </div>
      </div>
    </div>
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