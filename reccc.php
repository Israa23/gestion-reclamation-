<?php
include "recC.php";
include "rdvC.php";
$rc = new recC();
$tab = $rc->listerec();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin</title>
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="pdf.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class=" container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="bg-white text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo_star_black.png" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo_star_mini.jpg" alt=""></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline mt-2 mt-md-0 d-none d-lg-block">
          <input class="form-control mr-sm-2 search" type="text" placeholder="Search">
        </form>
        <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
          <li class="nav-item">
            <a class="nav-link profile-pic" href="addrdv.php"><img class="rounded-circle" src="images/face.jpg" alt=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addrdv.php"><i class="fa fa-th"></i></a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-dark navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <img src="images/face.jpg" alt="">
            <p class="name">Israa Boulaares</p>
            <p class="designation">Admin</p>
            <span class="online"></span>
          </div>
          <ul class="nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">
                <img src="images/icons/1.png" alt="">
                <span class="menu-title">Dashboard</span>
              </a>
            </li>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="Utilisateur.html">
                <img src="images/icons/04.png" alt="">
                <span class="menu-title">Utilisateur</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Produit.html">
                <img src="images/icons/06.png" alt="">
                <span class="menu-title">Produit</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Commande.html">
                <img src="images/icons/05.png" alt="">
                <span class="menu-title">Commande</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listerdv.php">
                <img src="images/icons/01.png" alt="">
                <span class="menu-title">RENDEZ-VOUZ</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listerec.php">
                <img src="images/icons/02.png" alt="">
                <span class="menu-title">RECLAMATION</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Evenement.html">
                <img src="images/icons/03.png" alt="">
                <span class="menu-title">Evenement</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/charts/index.html">
                <img src="images/icons/6.png" alt="">
                <span class="menu-title">Charts</span>
              </a>
            </li>
            
          </ul>
        </nav>

        <!-- partial -->
       
        <div class="content-wrapper">
          <h3 class="page-heading mb-4">Tables</h3>

          <div class="row mb-2">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Reclamation Table </h5>
                  <div class="table-responsive">
                    <table class="table center-aligned-table">
                      <thead>
                          <tr class="text-primary">
                             <th>ID</th>
                             <th>First Name</th>
                             <th>Last Name</th>
                             <th>Email</th>
                             <th>Car type </th>
                             <th>Message</th>
                             <th>ID to rec </th>
                             <th>rdv </th>
       
                             <th>Update</th>
                              <th>Delete</th>
                            </tr>
                       </thead>
                       <tbody>
                        <?php 
                        foreach($tab as $rec){
                        ?>
                          <tr>
                            <td><?php $rec['idd']; ?></td>
                           <td><?= $rec['firstname']; ?></td>
                           <td><?= $rec['lastname']; ?></td>
                           <td><?= $rec['email']; ?></td>
                           <td><?= $rec['typecar']; ?></td>
                           <td><?= $rec['messager']; ?></td>
                           
                           <td><?= $rec['idrec']; ?></td>
                           <td><?= $rec['rdv']; ?></td>
                         
                           <td align="center">
                           <div class="form-group">
                                <a href="contact.html?idd=<?PHP echo $rec['idd']; ?>">
                                    <input type="submit" value="Contact " class="btn btn-primary">
                                </a>
                            </div>
                           </td>
                           <td>
                               
                               <a href="deleterec.php?idd=<?php echo $rec['idd']; ?>">
                               <input type="submit" value="Delete" class="btn btn-primary"></a>
                              </a>
                           </td>
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
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="addrdv.php">Star Admin</a> &copy; 2017
            </span>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>

  </div>

  <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../../node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../../node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/misc.js"></script>
</body>

</html>
