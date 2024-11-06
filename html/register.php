<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Śląsk - Register</title>
    <link rel="stylesheet" href="../style/register.css">
    <link rel="stylesheet" href="../style/responsive.css">
    <link rel="stylesheet" href="../style/hamburger.css">
</head>
<body>
    <!-- Nagłówek -->
    <div id="header">
        <div id="hamburger" class="hamburger-btn" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <div class="container">
            <div id="logo">
            </div>
        </div>
        <div class="menu-top">
            <a href="login.html" class="auth-btn">Login</a>
        </div>
    </div>

    <!-- Menu -->
    <nav id="menu" class="menu">
        <div class="close-btn" onclick="toggleMenu()">&times;</div>
        <ul>
            <li><a href="../index.php">Strona główna</a></li>
        </ul>
    </nav>

    <!-- Główna sekcja - formularz rejestracji -->
    <div id="main">
        <div class="container">
            <div class="register-container">
                <h1>Rejestracja</h1>
                <form action="register_process.php" method="post" class="register-form">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Proszę podać prawidłowy adres e-mail (np. example@domain.com)">
    
                    <label for="username">Nazwa użytkownika:</label>
                    <input type="text" id="username" name="username" required>
    
                    <label for="password">Hasło:</label>
                    <input type="password" id="password" name="password" required minlength="8" pattern="(?=.*[!@#$%^&*]).{8,}" title="Hasło musi zawierać co najmniej 8 znaków oraz przynajmniej jeden znak specjalny.">
    
                    <div class="terms-checkbox">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms">Akceptuję <a href="#" id="termsLink">warunki użytkowania</a></label>
                    </div>

                    <button type="submit" class="btn">Zarejestruj się</button>
                    <p>Masz już konto? <a href="login.html">Zaloguj się</a></p>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal z warunkami użytkowania -->
    <div id="termsModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Warunki Użytkowania</h2>
            <p>Witamy w serwisie Śląsk. Korzystając z naszej strony, zgadzasz się przestrzegać poniższych warunków:</p>
            <ol>
                <li>Akceptacja Warunków: Korzystając z naszej strony, akceptujesz niniejsze warunki w całości.</li>
                <li>Prywatność: Szanujemy Twoją prywatność. Szczegóły znajdziesz w naszej Polityce Prywatności.</li>
                <li>Konto Użytkownika: Jesteś odpowiedzialny za zachowanie poufności swojego konta i hasła.</li>
                <li>Treści Użytkownika: Nie wolno publikować treści nielegalnych, obraźliwych lub naruszających prawa innych.</li>
                <li>Prawa Autorskie: Szanuj prawa autorskie. Nie publikuj treści, do których nie masz praw.</li>
                <li>Zmiany w Serwisie: Zastrzegamy sobie prawo do modyfikacji lub zakończenia świadczenia usług w dowolnym momencie.</li>
                <li>Odpowiedzialność: Korzystasz z serwisu na własne ryzyko. Nie ponosimy odpowiedzialności za szkody wynikłe z korzystania z serwisu.</li>
                <li>Jurysdykcja: Niniejsze warunki podlegają prawu polskiemu.</li>
            </ol>
            <p>Korzystając z naszego serwisu, potwierdzasz, że przeczytałeś, zrozumiałeś i zgadzasz się przestrzegać tych warunków.</p>
        </div>
    </div>

    <!-- Stopka -->
    <div id="footer">
        <div class="container">
            <div class="footer-links">
                <a href="html/privacy.html">Privacy</a>
                <a href="html/security.html">Security</a>
                <a href="#">Contact</a>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="javascript/register.js"></script>
</body>
</html>