const form = document.getElementById("formLogin");

if (form) {
    form.addEventListener("submit", function(e){
        e.preventDefault();

        const formData = new FormData(form);

        fetch("login.php", {
            method: "POST",
            body: formData
        })
        .then(() => {
            location.reload();
        });
    });
}