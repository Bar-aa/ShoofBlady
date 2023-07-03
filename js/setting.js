let setTheme = document.querySelector('.settings');
let themeButton = document.getElementById('theme');
let musicQuality = document.querySelector(".quality");


themeButton.addEventListener('click', function () {
    if (setTheme.classList.contains('dark')){
        setTheme.classList.remove('dark');
        setTheme.classList.add("light");
        themeButton.textContent = "LIGHT";
        console.log("YASS");
    }
    else if (setTheme.classList.contains("light")) {
        setTheme.classList.remove("light");
        setTheme.classList.add("dark");
        themeButton.textContent = "DARK";
    }
});

musicQuality.addEventListener('click', function (){
    if(musicQuality.textContent === "HIGH"){
        musicQuality.textContent = "LOW";
    } else {
        musicQuality.textContent = 'HIGH';
    }
});


