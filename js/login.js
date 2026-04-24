const form = document.getElementById("formLogin");
const toggleSenha = document.getElementById("toggleSenha");

// Login via fetch
if (form) {
    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const erroEl  = document.getElementById("erroLogin");
        const btnLogin = document.getElementById("btnLogin");

        erroEl.style.display = "none";
        btnLogin.disabled = true;

        const formData = new FormData(form);

        fetch("login.php", {
            method: "POST",
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if (data.ok) {
                location.reload();
            } else {
                erroEl.textContent = data.msg || "Erro ao fazer login.";
                erroEl.style.display = "block";
                btnLogin.disabled = false;
            }
        })
        .catch(() => {
            erroEl.textContent = "Erro de conexão. Tente novamente.";
            erroEl.style.display = "block";
            btnLogin.disabled = false;
        });
    });
}

// Mostrar/ocultar senha
if (toggleSenha) {
    toggleSenha.addEventListener("click", function () {
        const senhaInput = document.getElementById("senha");
        const icon = this.querySelector("i");

        if (senhaInput.type === "password") {
            senhaInput.type = "text";
            icon.classList.replace("bi-eye", "bi-eye-slash");
        } else {
            senhaInput.type = "password";
            icon.classList.replace("bi-eye-slash", "bi-eye");
        }
    });
}