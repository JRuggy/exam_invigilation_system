<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-name">
                    <p class="name">
                        <?php echo "Welcome " . $_SESSION['name'];
            $tonnie = $_SESSION['name'];
            ?>
                    </p>
                    <p class="designation">
                        Student's Account
                    </p>
                </div>
            </div>
        </li>

        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="index.php">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <!-- Set Time -->
        <li class="nav-item">
            <a class="nav-link" href="upexam.php">
                <i class="fa fa-pen menu-icon"></i>
                <span class="menu-title">Upload Exam</span>
            </a>
        </li>


    </ul>
</nav>