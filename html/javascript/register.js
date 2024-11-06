function toggleMenu() {
    const menu = document.getElementById('menu');
    const hamburger = document.getElementById('hamburger');
    menu.classList.toggle('open');
    hamburger.classList.toggle('active');
}

document.querySelector('.register-form').addEventListener('submit', function(e) {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var terms = document.getElementById('terms').checked;
    var emailRegex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;
    var passwordRegex = /^(?=.*[!@#$%^&*]).{8,}$/;
    var validEndings = ['.com', '.pl', '.org', '.net']; // Dodaj inne końcówki, które chcesz zaakceptować
    var hasValidEnding = validEndings.some(ending => email.endsWith(ending));
    
    if (!hasValidEnding) {
        e.preventDefault();
        alert('Proszę wpisać adres e-mail z poprawną końcówką (np. .com, .pl).');
    }
    
    if (!emailRegex.test(email)) {
        e.preventDefault();
        alert('Proszę podać prawidłowy adres e-mail.');
    }
    
    if (!passwordRegex.test(password)) {
        e.preventDefault();
        alert('Hasło musi zawierać co najmniej 8 znaków oraz przynajmniej jeden znak specjalny.');
    }

    if (!terms) {
        e.preventDefault();
        alert('Proszę zaakceptować warunki użytkowania.');
    }
});

// Pobierz elementy modalu
var modal = document.getElementById("termsModal");
var link = document.getElementById("termsLink");
var span = document.getElementsByClassName("close")[0];

// Gdy użytkownik kliknie link, otwórz modal
link.onclick = function(event) {
    event.preventDefault(); // Zapobiega przekierowaniu
    modal.style.display = "block";
}

// Gdy użytkownik kliknie (x), zamknij modal
span.onclick = function() {
    modal.style.display = "none";
}

// Gdy użytkownik kliknie gdziekolwiek poza modalem, zamknij go
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}