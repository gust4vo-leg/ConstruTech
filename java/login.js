const form = document.getElementById("formLogin");

if (form) {
    form.addEventListener("submit", function(e){
        e.preventDefault();

        fetch("login.php", {
            method: "POST"
        })
        .then(() => {
            location.reload(); 
        });
    });
}