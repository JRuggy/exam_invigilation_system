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
                        Teacher's Account
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
            <a class="nav-link" href="settime.php">
                <i class="fa fa-clock menu-icon"></i>
                <span class="menu-title">Set Countdown</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="method.php">
                <i class="fa fa-laptop menu-icon"></i>
                <span class="menu-title">Choose Method</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="attendance.php">
                <i class="fa fa-user menu-icon"></i>
                <span class="menu-title">Attendance</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="results.php">
                <i class="fa fa-book menu-icon"></i>
                <span class="menu-title">See Exams Results</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="addsubject.php">
                <i class="fa fa-book menu-icon"></i>
                <span class="menu-title">Add Subject</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="viewsub.php">
                <i class="fa fa-book menu-icon"></i>
                <span class="menu-title">View Subjects</span>
            </a>
        </li>




    </ul>
</nav>