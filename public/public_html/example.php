<?php 
    session_start();

    if (!isset($_SESSION['userId'])) {
        header("Location: ./auth/login.php");
        exit();
    }

    include './components/header.php';
    include './components/navigation.php';
?>

    <div class="bg-dark-secondary mx-auto max-w-7xl my-5 rounded sm:px-6 lg:px-8">
        <div class="py-4">
            
        </div>
    </div>

<?php
    include './components/footer.php';
?>

<!-- 
    The following code serves as a illustrative example for generating new files within the project.
    Simply incorporate the file path into the navigation section.
    (I opt for utilizing the file path to mitigate potential issues.) 
-->
