function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    var interval = setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            clearInterval(interval);
            window.location.href = '../';
        }

        // Simpan waktu tersisa di localStorage
        localStorage.setItem('remainingTime', timer);
    }, 1000);
}

window.onload = function () {
    var remainingTime = localStorage.getItem('remainingTime');
    var fivesc = remainingTime ? parseInt(remainingTime) : 5;
    var display = document.querySelector('#time');
    
    if (remainingTime === null) {
        localStorage.setItem('remainingTime', fivesc);
    }

    startTimer(fivesc, display);
};

window.onunload = function() {
    localStorage.removeItem('remainingTime');
};