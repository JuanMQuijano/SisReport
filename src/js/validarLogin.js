import { mostrarAlerta } from "./funciones.js";

(function () {
  const formulario = document.querySelector("#formulario-login");

  if (formulario) {
    const identificacion = document.querySelector("#identificacion");
    const password = document.querySelector("#password");

    formulario.addEventListener("submit", validar);

    function validar(e) {
      e.preventDefault();

      if (identificacion.value === "" || password.value === "") {
        mostrarAlerta("Debes llenar el formulario", "error");
        return;
      }

      iniciarSesion();
    }

    async function iniciarSesion() {
      const url = "http://localhost:3000/login";

      try {
        const datos = new FormData();
        datos.append("identificacion", identificacion.value);
        datos.append("password", password.value);

        const respuesta = await fetch(url, {
          method: "POST",
          body: datos,
        });

        const resultado = await respuesta.json();

        if (resultado) {
          window.location.href = "/dashboard";
        } else {
          mostrarAlerta("Usuario no encontrado", "error");
          return;
        }
      } catch (error) {
        console.log(error);
      }
    }
  }
})();
