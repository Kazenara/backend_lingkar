
<?php
require ("config.php");
if (isset($_POST['add-user'])) {
  $userNama = $_POST['txt_nama'];
  $userNoHp = $_POST['txt_nohp'];
  $userMail = $_POST['txt_mail'];
  $userUser = $_POST['txt_user'];
  $userPw = $_POST['txt_pw'];

  $query    = "INSERT INTO `tb_user` (`id`, `avatar`, `nama`, `nohp`, `email`, `username`, `password`, `level`) VALUES (NULL, '', '$userNama', '$userNoHp', '$userMail', '$userUser', '$userPw', '1')";
  $result   = mysqli_query($koneksi, $query);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="assets/images/favicon.svg"
      type="image/x-icon"
    />
    <title>Tables | Lingkar Angkringan</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <link rel="stylesheet" href="assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="assets/css/style.css">
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

  </head>
  <body>
<!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
      <div class="navbar-logo">
        <a href="index.php">
          <h2>LINGKAR</h2>
          <h2>ANGKRINGAN</h2>
          <!-- <img src="assets/images/logo/logo.svg" alt="logo" /> -->
        </a>
      </div>
      <nav class="sidebar-nav">
        <ul>
          <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_1"
              aria-controls="ddmenu_1"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
                <svg width="22" height="22" viewBox="0 0 22 22">
                  <path
                    d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z"
                  />
                </svg>
              </span>
              <span class="text">Dashboard</span>
            </a>
            <ul id="ddmenu_1" class="collapse show dropdown-nav">
              <li>
                <a href="index.php" class="active"> Dashboard </a>
              </li>
            </ul>
          </li>
          <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              class="collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_2"
              aria-controls="ddmenu_2"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
                <svg
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M12.8334 1.83325H5.50008C5.01385 1.83325 4.54754 2.02641 4.20372 2.37022C3.8599 2.71404 3.66675 3.18036 3.66675 3.66659V18.3333C3.66675 18.8195 3.8599 19.2858 4.20372 19.6296C4.54754 19.9734 5.01385 20.1666 5.50008 20.1666H16.5001C16.9863 20.1666 17.4526 19.9734 17.7964 19.6296C18.1403 19.2858 18.3334 18.8195 18.3334 18.3333V7.33325L12.8334 1.83325ZM16.5001 18.3333H5.50008V3.66659H11.9167V8.24992H16.5001V18.3333Z"
                  />
                </svg>
              </span>
              <span class="text">Pages</span>
            </a>
            <ul id="ddmenu_2" class="collapse dropdown-nav">
              <li>
                <a href="settings.php"> Settings </a>
              </li>
              <li>
                <a href="blank-page.php"> Blank Page </a>
              </li>
            </ul>
          </li>
          <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              class="collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_3"
              aria-controls="ddmenu_3"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
                <svg
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M12.9067 14.2908L15.2808 11.9167H6.41667V10.0833H15.2808L12.9067 7.70917L14.2083 6.41667L18.7917 11L14.2083 15.5833L12.9067 14.2908ZM17.4167 2.75C17.9029 2.75 18.3692 2.94315 18.713 3.28697C19.0568 3.63079 19.25 4.0971 19.25 4.58333V8.86417L17.4167 7.03083V4.58333H4.58333V17.4167H17.4167V14.9692L19.25 13.1358V17.4167C19.25 17.9029 19.0568 18.3692 18.713 18.713C18.3692 19.0568 17.9029 19.25 17.4167 19.25H4.58333C3.56583 19.25 2.75 18.425 2.75 17.4167V4.58333C2.75 3.56583 3.56583 2.75 4.58333 2.75H17.4167Z"
                  />
                </svg>
              </span>
              <span class="text">Auth</span>
            </a>
            <ul id="ddmenu_3" class="collapse dropdown-nav">
              <li>
                <a href="signin.php"> Sign In </a>
              </li>
              <li>
                <a href="signup.php"> Sign Up </a>
              </li>
            </ul>
          </li>
          <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              class="collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_5"
              aria-controls="ddmenu_5"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
                <svg
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M13.75 4.58325H16.5L15.125 6.41659L13.75 4.58325ZM4.58333 1.83325H17.4167C18.4342 1.83325 19.25 2.65825 19.25 3.66659V18.3333C19.25 19.3508 18.4342 20.1666 17.4167 20.1666H4.58333C3.575 20.1666 2.75 19.3508 2.75 18.3333V3.66659C2.75 2.65825 3.575 1.83325 4.58333 1.83325ZM4.58333 3.66659V7.33325H17.4167V3.66659H4.58333ZM4.58333 18.3333H17.4167V9.16659H4.58333V18.3333ZM6.41667 10.9999H15.5833V12.8333H6.41667V10.9999ZM6.41667 14.6666H15.5833V16.4999H6.41667V14.6666Z"
                  />
                </svg>
              </span>
              <span class="text"> Tambah Data </span>
            </a>
            <ul id="ddmenu_5" class="collapse dropdown-nav">
              <li>
                <a href="datakaryawan.php"> Data Karyawan </a>
              </li>
              <li>
                <a href="datapemasukan.php"> Data Income </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="tables.php">
              <span class="icon">
                <svg
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M4.58333 3.66675H17.4167C17.9029 3.66675 18.3692 3.8599 18.713 4.20372C19.0568 4.54754 19.25 5.01385 19.25 5.50008V16.5001C19.25 16.9863 19.0568 17.4526 18.713 17.7964C18.3692 18.1403 17.9029 18.3334 17.4167 18.3334H4.58333C4.0971 18.3334 3.63079 18.1403 3.28697 17.7964C2.94315 17.4526 2.75 16.9863 2.75 16.5001V5.50008C2.75 5.01385 2.94315 4.54754 3.28697 4.20372C3.63079 3.8599 4.0971 3.66675 4.58333 3.66675ZM4.58333 7.33341V11.0001H10.0833V7.33341H4.58333ZM11.9167 7.33341V11.0001H17.4167V7.33341H11.9167ZM4.58333 12.8334V16.5001H10.0833V12.8334H4.58333ZM11.9167 12.8334V16.5001H17.4167V12.8334H11.9167Z"
                  />
                </svg>
              </span>
              <span class="text">Karyawan</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="invoice.php">
              <span class="icon">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M17.4166 7.33333C18.9383 7.33333 20.1666 8.56167 20.1666 10.0833V15.5833H16.4999V19.25H5.49992V15.5833H1.83325V10.0833C1.83325 8.56167 3.06159 7.33333 4.58325 7.33333H5.49992V2.75H16.4999V7.33333H17.4166ZM7.33325 4.58333V7.33333H14.6666V4.58333H7.33325ZM14.6666 17.4167V13.75H7.33325V17.4167H14.6666ZM16.4999 13.75H18.3333V10.0833C18.3333 9.57917 17.9208 9.16667 17.4166 9.16667H4.58325C4.07909 9.16667 3.66659 9.57917 3.66659 10.0833V13.75H5.49992V11.9167H16.4999V13.75ZM17.4166 10.5417C17.4166 11.0458 17.0041 11.4583 16.4999 11.4583C15.9958 11.4583 15.5833 11.0458 15.5833 10.5417C15.5833 10.0375 15.9958 9.625 16.4999 9.625C17.0041 9.625 17.4166 10.0375 17.4166 10.5417Z" />
                </svg>
              </span>
              <span class="text">Invoice</span>
            </a>
          </li>
                    <span class="divider">
                      <hr />
                    </span>
                    
</ul>
</nav>
</aside>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
      <!-- ========== header start ========== -->
      <header class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-6">
              <div class="header-left d-flex align-items-center">
                <div class="menu-toggle-btn mr-20">
                  <button
                    id="menu-toggle"
                    class="main-btn primary-btn btn-hover"
                  >
                    <i class="lni lni-chevron-left me-2"></i> Menu
                  </button>
                </div>
                <div class="header-search d-none d-md-flex">
                  <form action="#">
                    <input type="text" placeholder="Search..." />
                    <button><i class="lni lni-search-alt"></i></button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-7 col-6">
              <div class="header-right">
                <!-- notification start -->
                <div class="notification-box ml-15 d-none d-md-flex">
                  <button
                    class="dropdown-toggle"
                    type="button"
                    id="notification"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <i class="lni lni-alarm"></i>
                    <span>2</span>
                  </button>
                  <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="notification"
                  >
                    <li>
                      <a href="#0">
                        <div class="image">
                          <img src="assets/images/lead/lead-6.png" alt="" />
                        </div>
                        <div class="content">
                          <h6>
                            John Doe
                            <span class="text-regular">
                              comment on a product.
                            </span>
                          </h6>
                          <p>
                            Lorem ipsum dolor sit amet, consect etur adipiscing
                            elit Vivamus tortor.
                          </p>
                          <span>10 mins ago</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#0">
                        <div class="image">
                          <img src="assets/images/lead/lead-1.png" alt="" />
                        </div>
                        <div class="content">
                          <h6>
                            Jonathon
                            <span class="text-regular">
                              like on a product.
                            </span>
                          </h6>
                          <p>
                            Lorem ipsum dolor sit amet, consect etur adipiscing
                            elit Vivamus tortor.
                          </p>
                          <span>10 mins ago</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- notification end -->
                <!-- message start -->
                <div class="header-message-box ml-15 d-none d-md-flex">
                  <button
                    class="dropdown-toggle"
                    type="button"
                    id="message"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <i class="lni lni-envelope"></i>
                    <span>3</span>
                  </button>
                  <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="message"
                  >
                    <li>
                      <a href="#0">
                        <div class="image">
                          <img src="assets/images/lead/lead-5.png" alt="" />
                        </div>
                        <div class="content">
                          <h6>Jacob Jones</h6>
                          <p>Hey!I can across your profile and ...</p>
                          <span>10 mins ago</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#0">
                        <div class="image">
                          <img src="assets/images/lead/lead-3.png" alt="" />
                        </div>
                        <div class="content">
                          <h6>John Doe</h6>
                          <p>Would you mind please checking out</p>
                          <span>12 mins ago</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#0">
                        <div class="image">
                          <img src="assets/images/lead/lead-2.png" alt="" />
                        </div>
                        <div class="content">
                          <h6>Anee Lee</h6>
                          <p>Hey! are you available for freelance?</p>
                          <span>1h ago</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- message end -->
                <!-- filter start -->
                <div class="filter-box ml-15 d-none d-md-flex">
                  <button class="" type="button" id="filter">
                    <i class="lni lni-funnel"></i>
                  </button>
                </div>
                <!-- filter end -->
                <!-- profile start -->
                <div class="profile-box ml-15">
                  <button
                    class="dropdown-toggle bg-transparent border-0"
                    type="button"
                    id="profile"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <div class="profile-info">
                      <div class="info">
                        <h6>John Doe</h6>
                        <div class="image">
                          <img
                            src="assets/images/profile/profile-image.png"
                            alt=""
                          />
                          <span class="status"></span>
                        </div>
                      </div>
                    </div>
                    <i class="lni lni-chevron-down"></i>
                  </button>
                  <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="profile"
                  >
                    <li>
                      <a href="#0">
                        <i class="lni lni-user"></i> View Profile
                      </a>
                    </li>
                    <li>
                      <a href="#0">
                        <i class="lni lni-alarm"></i> Notifications
                      </a>
                    </li>
                    <li>
                      <a href="#0"> <i class="lni lni-inbox"></i> Messages </a>
                    </li>
                    <li>
                      <a href="#0"> <i class="lni lni-cog"></i> Settings </a>
                    </li>
                    <li>
                      <a href="#0"> <i class="lni lni-exit"></i> Sign Out </a>
                    </li>
                  </ul>
                </div>
                <!-- profile end -->
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ========== header end ========== -->

      <!-- ========== table components start ========== -->
      <section class="table-components">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title mb-30">
                  <h2>Karyawan</h2>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-6">
                <div class="breadcrumb-wrapper mb-30">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="#0">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Karyawan
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->

          <!-- ========== tables-wrapper start ========== -->
         
 <section>
  <!--for demo wrap-->
  <h1>Fixed Table header</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Email</th>
          <th>No HP</th>
          <th>Alamat</th>
          <th>Action</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
                                        <tr>
                                        <?php
                                        $query = "SELECT * FROM pegawai";
                                        $result = mysqli_query($koneksi, $query);
                                        while ($row = mysqli_fetch_array($result)){
                                        $id = $row['id'];
                                        $userName = $row['nama'];
                                        $userEmail = $row['email'];
                                        $nohp = $row['nohp'];
                                        $alamat = $row['alamat'];


                                        ?>
                                        </tr>
                                        <tr>
                                            <td><?php echo $id; ?></td>
                                            <td><?php echo $userName; ?></td>
                                            <td><?php echo $userEmail; ?></td>
                                            <td><?php echo $nohp; ?></td>
                                            <td><?php echo $alamat; ?></td>
                                            <td>
                           <button class=" btn btn-dark btn-sm ms-auto" data-modal-target="#modal-edit<?= $row['id'] ?>">Edit</button>
                            <button class="btn btn-danger btn-sm ms-auto"  data-modal-target="#modal-delete<?= $row['id'] ?>">Delete</button>
                            </td>
                                        </tr>

                                            
                        <!-- Pop up Edit -->

                        <div class="modal-edit" id="modal-edit<?= $row['id'] ?>">
                          <div class="modal-header-edit">
                            <h2 class="edit">Edit Form</h2>
                            <!-- <button data-close-button-edit type="submit" class="close-btn-edit">&times;</button> -->
                            <div class="modal-body-edit">
                              <form action="edit_karyawan.php?id=<?= $row['id'] ?>" method="post">
                                <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Name</label>
                                  <input class="form-control" name="nama" type="text" value="<?= $row['nama'] ?>" placeholder="Enter Name" required />
                                </div>

                                <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">No Hp</label>
                                  <input class="form-control" name="nohp" type="text" value="<?= $row['nohp'] ?>" placeholder="Enter No Hp" required />
                                </div>


                                <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Email</label>
                                  <input class="form-control" name="email" type="email" value="<?= $row['email'] ?>" placeholder="Enter Email" required />
                                </div>


                                <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">alamat</label>
                                  <input class="form-control" name="username" type="text" value="<?= $row['alamat'] ?>" placeholder="Enter alamat " required />
                                </div>
                                <br>
                                <br>
                                <div class="align-middle text-center">
                                  <button class="btn btn-success btn-sm ms-auto" name="submit">Edit</button>
                                  <button class="btn btn-danger btn-sm ms-auto" name="close" data-close-button-edit>Close</button>
                                  <!-- <a class="btn btn-danger btn-sm ms-auto" type="submit" data-close-button-edit>Close</a> -->
                                </div>
                              </form>

                            </div>
                          </div>
                        </div>

                        <style>
                          .modal-edit {
                            position: fixed;
                            left: 0;
                            top: 0;
                            background: rgb(0, 0, 0, 0.6);
                            height: 100%;
                            width: 100%;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            opacity: 0;
                            pointer-events: none;
                            transition: all 0.3s ease-in-out;
                            z-index: 10000;

                          }

                          .modal-body-edit {
                            padding: 10px;
                            bottom: 10px;
                          }

                          .modal-header-edit {
                            background: white;
                            width: 560px;
                            max-width: 90%;
                            padding: 20px;
                            border-radius: 4x;
                            position: relative;
                            transform: translateY(-100);
                            transition: all 0.3s ease-in-out;
                          }

                          .btn-open-edit {
                            background: black;
                            padding: 10px 40px;
                            color: white;
                            border-radius: 5px;
                            font-size: 15px;
                            cursor: pointer;
                          }

                          p.edit {
                            line-height: 1.6;
                            margin-bottom: 20px;
                          }

                          h2.edit {
                            text-align: center;
                            padding-bottom: 15px;
                            font-weight: 200;
                          }

                          .modal-header-edit button.close-btn-edit {
                            position: absolute;
                            right: 10px;
                            top: 10px;
                            font-size: 32px;
                            background: none;
                            outline: none;
                            border: none;
                            cursor: pointer;
                          }

                          .modal-header-edit button.close-btn-edit:hover {
                            color: #6b46c1;
                          }

                          .active-edit {
                            opacity: 1;
                            pointer-events: auto;
                          }

                          .modal-edit.active-edit .modal-header-edit {
                            transform: translateY(0px);
                          }
                        </style>
                        <script>
                          const openModalButtons = document.querySelectorAll("[data-modal-target]");
                          const closeModalButtons = document.querySelectorAll(
                            "[data-close-button-edit]"
                          );

                          openModalButtons.forEach((button) => {
                            button.addEventListener("click", () => {
                              const modal = document.querySelector(button.dataset.modalTarget);
                              openModal(modal);
                            });
                          });

                          closeModalButtons.forEach((button) => {
                            button.addEventListener("click", () => {
                              const modal = button.closest(".modal-edit");
                              closeModal(modal);
                            });
                          });

                          function openModal(modal) {
                            if (modal == null) return;
                            modal.classList.add("active-edit");
                          }

                          function closeModal(modal) {
                            if (modal == null) return;
                            modal.classList.remove("active-edit");
                          }
                        </script>
                        <!-- end Pop up Edit -->

                        <!-- Pop up Delete -->

                        <div class="modal-delete" id="modal-delete<?= $row['id'] ?>">
                          <div class="modal-header-delete">
                            <h2 class="delete">Warning</h2>
                            <!-- <button data-close-delete class="close-btn-delete">&times;</button> -->

                            <div class="modal-body-delete">
                              <div class="row">

                                <p class="delete">
                                  Yakin dek mau ngehapus data orang? dosah loh dek
                                </p>

                              </div>
                              <div></div>
                              <div></div>
                              <form class="yayyay" action="tables.php" method="post">
                                <div class="align-middle text-center">
                                  <a class="btn btn-danger btn-sm ms-auto" href="hapus_karyawan.php?id=<?php echo $row['id']; ?>">Delete</a>

                                  <button class="btn btn-success btn-sm ms-auto" name="submit" data-close-delete>Close</button>
                                  <!-- <button class="btn btn-danger btn-sm ms-auto" href="hapus_user.php?id=<?php echo $row['id']; ?>" data-close-delete>Close</button> -->
                              </form>
                            </div>


                          </div>
                        </div>
                </div>



                <style>
                  .modal-delete {
                    position: fixed;
                    left: 0;
                    top: 0;
                    background: rgb(0, 0, 0, 0.6);
                    height: 100%;
                    width: 100%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    opacity: 0;
                    pointer-events: none;
                    transition: all 0.3s ease-in-out;
                    z-index: 10000;

                  }

                  .modal-body-delete {
                    padding: 10px;
                    bottom: 10px;
                  }

                  .modal-header-delete {
                    background: white;
                    width: 560px;
                    max-width: 90%;
                    padding: 20px;
                    border-radius: 4x;
                    position: relative;
                    transform: translateY(-100);
                    transition: all 0.3s ease-in-out;
                  }

                  .btn-open {
                    background: black;
                    padding: 10px 40px;
                    color: white;
                    border-radius: 5px;
                    font-size: 15px;
                    cursor: pointer;
                  }

                  p.delete {
                    line-height: 1.6;
                    margin-bottom: 20px;
                    text-align: center;
                  }

                  h2.delete {
                    text-align: center;
                    padding-bottom: 15px;
                    font-weight: 200;
                  }

                  .modal-header-delete button.close-btn-delete {
                    position: absolute;
                    right: 10px;
                    top: 10px;
                    font-size: 32px;
                    background: none;
                    outline: none;
                    border: none;
                    cursor: pointer;
                  }

                  .modal-header-delete button.close-btn-delete:hover {
                    color: #6b46c1;
                  }

                  .active-delete {
                    opacity: 1;
                    pointer-events: auto;
                  }

                  .modal-delete.active-delete .modal-header-delete {
                    transform: translateY(0px);
                  }
                </style>
                <script>
                  const openModalDelete = document.querySelectorAll("[data-modal-target]");
                  const closeModalDelete = document.querySelectorAll(
                    "[data-close-delete]"
                  );

                  openModalDelete.forEach((button) => {
                    button.addEventListener("click", () => {
                      const modal = document.querySelector(button.dataset.modalTarget);
                      openModal(modal);
                    });
                  });

                  closeModalDelete.forEach((button) => {
                    button.addEventListener("click", () => {
                      const modal = button.closest(".modal-delete");
                      closeModal(modal);
                    });
                  });

                  function openModal(modal) {
                    if (modal == null) return;
                    modal.classList.add("active-delete");
                  }

                  function closeModal(modal) {
                    if (modal == null) return;
                    modal.classList.remove("active-delete");
                  }
                </script>
                <!-- end Pop up Delete -->




                                        <?php
                                        
                                        }
                                        ?>
                                    </tbody>
    </table>
  </div>
</section>
    


      
      <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/Chart.min.js"></script>
    <script src="assets/js/dynamic-pie-chart.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/fullcalendar.js"></script>
    <script src="assets/js/jvectormap.min.js"></script>
    <script src="assets/js/world-merc.js"></script>
    <script src="assets/js/polyfill.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
