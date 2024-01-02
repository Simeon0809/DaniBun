<?php
    include '../components/header.php';
?>

    <div class="h-screen flex items-center justify-center">
        <form method="POST" action="../../../app/includes/register.inc.php" class="bg-dark-secondary shadow-md rounded px-8 pt-6 pb-8 mb-4 w-1/5">
            <div class="mb-4">
                <label class="block text-zinc-200 text-sm font-bold mb-2" for="username">
                    Username
                </label>
                <input class="bg-dark-primary shadow appearance-none border-gray-900 rounded w-full py-2 px-3 text-sky-50 leading-tight focus:outline-none focus:shadow-outline" id="registerUsername" name="username" type="text">
            </div>
            <div class="mb-4">
                <label class="block text-zinc-200 text-sm font-bold mb-2" for="username">
                    E-Mail
                </label>
                <input class="bg-dark-primary shadow appearance-none border-gray-900 rounded w-full py-2 px-3 text-sky-50 leading-tight focus:outline-none focus:shadow-outline" id="registerMail" name="userMail" type="mail">
            </div>
            <div class="mb-3">
                <label class="block text-zinc-200 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="bg-dark-primary shadow appearance-none border-gray-900 rounded w-full py-2 px-3 text-sky-50 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="registerPassword" name="userPassword" type="password">
            </div>
            <div class="mb-4">
                <label class="block text-zinc-200 text-sm font-bold mb-2" for="passwordRepeat">
                    Repeat Password
                </label>
                <input class="bg-dark-primary shadow appearance-none border-gray-900 rounded w-full py-2 px-3 text-sky-50 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="registerPasswordRepeat" name="userPasswordRepeat" type="password">
            </div>
            <div class="flex items-center justify-end">
                <a class="inline-block align-baseline underline font-bold text-sm text-gray-500 hover:text-white mr-5" href="./login.php">
                    Already registered?
                </a>
                <button class="bg-sky-50 hover:bg-slate-900 hover:text-white text-dark-primary font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" name="registerSubmit" type="submit">
                    Register
                </button>
            </div>
        </form>
    </div>

<?php
    include '../components/footer.php';
?>