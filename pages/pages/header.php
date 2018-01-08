    <?php
    if (isset($_SESSION['uid'])) {
        $home="feed-page.php";
        }
        else{
        $home="landing-page.php";
        }
    ?>


    <nav class="navbar navbar-primary navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MainNav"> 
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                  
                </button>
                <a class= "navbar-brand" id="nav-logo" href= <?php echo"$home"; ?> >
                    <img src="../assets/img/logo.png" height="60px">
                </a>
                <a class="navbar-brand" id="nav-title" href= <?php echo"$home"; ?>> <b>The World Beyond<b></a>
            </div>

            <div class="collapse navbar-collapse" id="MainNav">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#explore">
                            <i class="material-icons">explore</i>
                            Explore
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">view_list</i>
                            Topics <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Inspirational</a></li>
                          <li><a href="#">Biography</a></li>        
                          <li class="divider"></li>
                          <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Historical</a>
                            <ul class="dropdown-menu">
                              <li><a tabindex="-1" href="#">Funny</a></li>          
                              <li><a href="#">Tragic</a></li>
                              <li><a href="#">Technology</a></li>
                              <li><a href="#">Social</a></li>
                            </ul>
                          </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#edtiorsPick">
                            <i class="material-icons">check</i>
                            Editor's Pick
                        </a>
                    </li>
                </ul>
                    
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">account_circle</i>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <?php
                            if (isset($_SESSION['uid'])) {
                                echo"<li>";
                            echo"<a href='session-expire.php'>";
                            echo"<i class='fa fa-sign-out fa-1.5x'></i>";
                            echo "    Sign Out ";
                            echo"</a>";
                            echo "</li>";
                            }
                            else{
                            echo"<li>";
                            echo"<a href='landing-page.php#signinform'>";
                            echo"<i class='fa fa-sign-in fa-1.5x'></i>";
                            echo "    Sign In ";
                            echo"</a>";
                            echo "</li>";

                            echo"<li>";
                            echo"<a href='signup-page.php'>";
                            echo"<i class='fa fa-address-book fa-1.5x'></i>";
                            echo "    Sign Up ";
                            echo"</a>";
                            echo "</li>";
                            }
                            ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>