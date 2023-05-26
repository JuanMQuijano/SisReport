import { mostrarAlerta } from "./funciones.js";

(function () {
  const formulario = document.querySelector("#formulario-estados");

  if (formulario) {
    const cc_est = document.querySelector("#cc_est");

    formulario.addEventListener("submit", validar);

    function validar(e) {
      e.preventDefault();

      if (cc_est.value === "") {
        mostrarAlerta("Debes ingresar un número de identificación", "error");
        return;
      }

      solicitarEstado();
    }

    async function solicitarEstado() {
      const url = "http://localhost:3000/estados";

      try {
        const datos = new FormData();
        datos.append("cc_est", ` ${cc_est.value}`);

        const respuesta = await fetch(url, {
          method: "POST",
          body: datos,
        });

        const resultado = await respuesta.json();

        if (resultado === "0") {
          alert("Su reporte aún no ha sido gestionado");
          return;
        } else {
          alert("Su reporte ya fue solucionado");
          return;
        }
      } catch (error) {
        console.log(error);
      }
    }
  }
})();
