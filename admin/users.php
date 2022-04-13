<!DOCTYPE html>
<html lang="en">
    <head>
        <? include "../includes/head.php"; ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">

        <title>Admin - Home</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../externals/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../externals/plugins/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="../externals/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
        <link href="../externals/plugins/pace/pace.css" rel="stylesheet">



        <link href="../externals/css/main.min.css" rel="stylesheet">
        <link href="../externals/css/custom.css" rel="stylesheet">


        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">


        <div class="page-container">
          <div class="page-sidebar">
            <a class="logo" href="/index.php">Panel Admin</a>
            <ul class="list-unstyled accordion-menu">

              <li class="">
                <a href="#" ><i data-feather="aperture"></i>Medias<i class="fas fa-chevron-right dropdown-icon"></i></a>
                <ul class="">
                  <li class=""><a href="#"><i class="far fa-circle"></i>Videos</a></li>
                  <li><a href="#"><i class="far fa-circle"></i>Acteurs</a></li>
                  <li><a href="#"><i class="far fa-circle"></i>Categories</a></li>
                  <li><a href="#"><i class="far fa-circle"></i>Classement</a></li>
                </ul>
              </li>
              <li>
                <a href="#"><i data-feather="code"></i>Utilisateurs<i class="fas fa-chevron-right dropdown-icon"></i></a>
                <ul class="">
                  <li><a href="#"><i class="far fa-circle"></i>Utilisateurs</a></li>
                  <li><a href="#"><i class="far fa-circle"></i>Signalements</a></li>
                  <li><a href="#"><i class="far fa-circle"></i>Commentaires</a></li>
                  <li><a href="#"><i class="far fa-circle"></i>Contacts</a></li>
                </ul>
              </li>
              <li>
                <a href="#"><i data-feather="box"></i>Administration<i class="fas fa-chevron-right dropdown-icon"></i></a>
                <ul class="">
                  <li><a href="#"><i class="far fa-circle"></i>Administrateurs</a></li>

                </ul>
              </li>

            </ul>
            <a href="#" id="sidebar-collapsed-toggle"><i data-feather="arrow-right"></i></a>
        </div>
            <div class="page-content">
              <div class="page-header">
                <nav class="navbar navbar-expand-lg d-flex justify-content-between pr-0">
                  <div class="header-title flex-fill">
                    <a href="#" id="sidebar-toggle"><i data-feather="arrow-left"></i></a>
                    <h5>Utilisateurs</h5>
                  </div>
                    <div class="header-search">
                      <form>
                        <input class="form-control" type="text" placeholder="Type something.." aria-label="Search">
                        <a href="#" class="close-search"><i data-feather="x"></i></a>
                      </form>
                    </div>
                    <div class="flex-fill" id="headerNav">
                      <ul class="navbar-nav">
                        <li class="nav-item d-md-block d-lg-none">
                          <a class="nav-link" href="#" id="toggle-search"><i data-feather="search"></i></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link activity-trigger" href="#" id="activity-sidebar-toggle"><i data-feather="grid"></i></a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link notifications-dropdown" href="#" id="notificationsDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false">3<div class="spinner-grow text-danger" role="status"></div></a>
                          <div class="dropdown-menu dropdown-menu-end notif-drop-menu" aria-labelledby="notificationsDropDown">
                            <h6 class="dropdown-header">Notifications</h6>

                            <a href="#">
                              <div class="header-notif">
                                <div class="notif-image">
                                  <span class="notification-badge">
                                    <img src="../assets/images/placeholder/user.jpg" alt="">
                                  </span>
                                </div>
                                <div class="notif-text">
                                  <p>faucibus dolor in commodo lectus mattis</p>
                                  <small>yesterday</small>
                                </div>
                              </div>
                            </a>
                          </div>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/images/placeholder/user.jpg" alt=""></a>
                          <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
                            <a class="dropdown-item" href="#"><i data-feather="user"></i>Profile</a>
                            <a class="dropdown-item" href="#"><i data-feather="inbox"></i>Messages</a>
                            <a class="dropdown-item" href="#"><i data-feather="edit"></i>Activities<span class="badge rounded-pill bg-success">12</span></a>
                            <a class="dropdown-item" href="#"><i data-feather="check-circle"></i>Tasks</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i data-feather="settings"></i>Settings</a>
                            <a class="dropdown-item" href="#"><i data-feather="unlock"></i>Lock</a>
                            <a class="dropdown-item" href="#"><i data-feather="log-out"></i>Logout</a>
                          </div>
                        </li>
                      </ul>
                  </div>
                </nav>
            </div>

                <div class="p-10 w-full">
                    <table class="w-full">
                        <thead class="text-center text-2xl ">
                        <th >ID</th>
                        <th>Nom d'utilisateur</th>
                        <th>Email</th>
                        <th class="hidden sm:block">Date d'inscription</th>
                        <th class="hidden md:table-cell">Action</th>
                        <th class="hidden md:table-cell">Action 2</th>
                        </thead>
                        <tbody class="text-xl">
                            <tr class="text-center border-b-2 border-solid border-[#262635] " >
                                <td class="p-2 ">1</td>
                                <td class="p-2">Ducstream</td>
                                <td class="p-2">ducstream@gmail.com</td>
                                <td class="p-2 hidden sm:block">13 avr 2022</td>
                                <td class="p-2 hidden md:table-cell"><button class="p-2 rounded bg-red-400  text-white">Supprimer</button></td>
                                <td class="p-2  hidden md:table-cell"><button class="p-2 rounded bg-blue-400  text-white">Modifier</button></td>
                            </tr>
                            <tr class="text-center border-b-2 border-solid border-[#262635] " >
                                <td class="p-2 ">1</td>
                                <td class="p-2">Ducstream</td>
                                <td class="p-2">ducstream@gmail.com</td>
                                <td class="p-2 hidden sm:block">13 avr 2022</td>
                                <td class="p-2 hidden md:table-cell"><button class="p-2 rounded bg-red-400  text-white">Supprimer</button></td>
                                <td class="p-2  hidden md:table-cell"><button class="p-2 rounded bg-blue-400  text-white">Modifier</button></td>
                            </tr>
                            <tr class="text-center border-b-2 border-solid border-[#262635] " >
                                <td class="p-2 ">1</td>
                                <td class="p-2">Ducstream</td>
                                <td class="p-2">ducstream@gmail.com</td>
                                <td class="p-2 hidden sm:block">13 avr 2022</td>
                                <td class="p-2 hidden md:table-cell"><button class="p-2 rounded bg-red-400  text-white">Supprimer</button></td>
                                <td class="p-2  hidden md:table-cell"><button class="p-2 rounded bg-blue-400  text-white">Modifier</button></td>
                            </tr>
                            <tr class="text-center border-b-2 border-solid border-[#262635] " >
                                <td class="p-2 ">1</td>
                                <td class="p-2">Ducstream</td>
                                <td class="p-2">ducstream@gmail.com</td>
                                <td class="p-2 hidden sm:block">13 avr 2022</td>
                                <td class="p-2 hidden md:table-cell"><button class="p-2 rounded bg-red-400  text-white">Supprimer</button></td>
                                <td class="p-2  hidden md:table-cell"><button class="p-2 rounded bg-blue-400  text-white">Modifier</button></td>
                            </tr>
                            <tr class="text-center border-b-2 border-solid border-[#262635] " >
                                <td class="p-2 ">1</td>
                                <td class="p-2">Ducstream</td>
                                <td class="p-2">ducstream@gmail.com</td>
                                <td class="p-2 hidden sm:block">13 avr 2022</td>
                                <td class="p-2 hidden md:table-cell"><button class="p-2 rounded bg-red-400  text-white">Supprimer</button></td>
                                <td class="p-2  hidden md:table-cell"><button class="p-2 rounded bg-blue-400  text-white">Modifier</button></td>
                            </tr>
                            <tr class="text-center border-b-2 border-solid border-[#262635] " >
                                <td class="p-2 ">1</td>
                                <td class="p-2">Ducstream</td>
                                <td class="p-2">ducstream@gmail.com</td>
                                <td class="p-2 hidden sm:block">13 avr 2022</td>
                                <td class="p-2 hidden md:table-cell"><button class="p-2 rounded bg-red-400  text-white">Supprimer</button></td>
                                <td class="p-2  hidden md:table-cell"><button class="p-2 rounded bg-blue-400  text-white">Modifier</button></td>
                            </tr>
                            <tr class="text-center border-b-2 border-solid border-[#262635] " >
                                <td class="p-2 ">1</td>
                                <td class="p-2">Ducstream</td>
                                <td class="p-2">ducstream@gmail.com</td>
                                <td class="p-2 hidden sm:block">13 avr 2022</td>
                                <td class="p-2 hidden md:table-cell"><button class="p-2 rounded bg-red-400  text-white">Supprimer</button></td>
                                <td class="p-2  hidden md:table-cell"><button class="p-2 rounded bg-blue-400  text-white">Modifier</button></td>
                            </tr>

                        </tbody>

                    </table>

                </div>


                </div>

            </div>

            <div class="activity-sidebar-overlay"></div>
        <div class="activity-sidebar">
          <a href="#" id="activity-sidebar-close"><i class="material-icons">close</i></a>
          <div class="activity-header">
            <h5>Activity Logs</h5>
          </div>
          <div class="activity-body">
            <ul class="activity-list list-unstyled">
              <li class="activity-item">
                  <div class="activity-icon"><i class="material-icons">add</i></div>
                  <div class="activity-text">Ann Green uploaded new item
                      <span>This item has to be reviewed, moderators will check it soon.</span>
                  </div>
                  <div class="activity-helper">45min ago</div>
              </li>

          </ul>
          </div>
        </div>

        <div class="search-results">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <div class="search-results-header">
                          <h5>Search Results</h5>
                          <a href="#" id="closeSearch"><i class="material-icons">close</i></a>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-4">
                      <ul class="search-result-list user-search">
                          <li>
                              <img src="../../assets/images/avatars/profile-image.png" alt="">
                              <p>John Doe<br>(Works at <span class="search-input-value">hj</span>)</p>
                          </li>
                          <li>
                              <img src="../../assets/images/avatars/profile-image.png" alt="">
                              <p>Anna doe<br>(Lives in <span class="search-input-value">hj</span>)</p>
                          </li>
                          <li>
                              <img src="../../assets/images/avatars/profile-image.png" alt="">
                              <p>People near:<br><span class="search-input-value">hj</span></p>
                          </li>
                      </ul>
                  </div>
                  <div class="col-md-4">
                      <ul class="search-result-list social-search">
                          <li>
                              <div class="social-search-icon facebook-icon-bg">
                                  <i class="fab fa-facebook-f"></i>
                              </div>
                              <div class="social-search-text">
                                  <p><span class="search-input-value">hj</span> on Facebook</p>
                              </div>
                          </li>
                          <li>
                              <div class="social-search-icon twitter-icon-bg">
                                  <i class="fab fa-twitter"></i>
                              </div>
                              <div class="social-search-text">
                                  <p><span class="search-input-value">hj</span> on Twitter</p>
                              </div>
                          </li>
                          <li>
                              <div class="social-search-icon google-icon-bg">
                                  <i class="fab fa-google"></i>
                              </div>
                              <div class="social-search-text">
                                  <p><span class="search-input-value">hj</span> on Google</p>
                              </div>
                          </li>
                      </ul>
                  </div>
                  <div class="col-md-4">
                      <ul class="search-result-list article-search">
                          <li>
                              <p>Lorem ipsum dolor sit amet, consectetur <span class="search-input-value">hj</span> adipiscing elit, sunt in culpa quifdaasd quis.</p>
                              <span class="search-article-date">06 Jul, 2021</span>
                          </li>
                          <li>
                              <p>Duis non semper sapien. Morbi imperdiet velit in <span class="search-input-value">hj</span> bibendum lobortis. Integer arcu urna, elementum in pellentesque nec, finibus at nisi.</p>
                              <span class="search-article-date">19 Mar, 2017</span>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>

        <!-- Javascripts -->
        <script src="../externals/plugins/jquery/jquery-3.4.1.min.js"></script>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="../externals/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        <script src="../externals/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
        <script src="../externals/plugins/pace/pace.min.js"></script>
        <script src="../externals/js/main.min.js"></script>
    </body>
</html>
