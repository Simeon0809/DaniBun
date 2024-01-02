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
        <div class="py-2">
            <h2 class="text-white font-semibold text-base">Dashboard</h2>
        </div>
    </div>

    <div class="bg-dark-secondary mx-auto max-w-7xl my-5 rounded sm:px-6 lg:px-8">
        <div class="py-4">
            <h1 class="text-white font-semibold text-lg">Welcome, <?php echo $_SESSION["username"]; ?></h1>
        </div>
    </div>

<?php
    include './components/footer.php';
?>