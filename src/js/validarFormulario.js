import { mostrarAlerta } from "./funciones.js";

(function () {
  const formularioReporte = document.querySelector("#formulario-reporte");

  if (formularioReporte) {
    const reporteObj = {
      cc_est: "",
      descripcion: "",
    };

    const cc_est = document.querySelector("#cc_est");
    const descripcion = document.querySelector("#descripcion");

    cc_est.addEventListener("blur", llenarObjeto);
    descripcion.addEventListener("blur", llenarObjeto);

    formularioReporte.addEventListener("submit", validar);

    function llenarObjeto(e) {
      reporteObj[e.target.id] = e.target.value;
    }

    function validar(e) {
      e.preventDefault();

      const { cc_est, descripcion } = reporteObj;

      const esVacio = [cc_est, descripcion].some((elemento) => elemento === "");

      if (esVacio) {
        mostrarAlerta("Debes llenar todos los campos", "error");
        return;
      }

      enviarReporte();
    }

    async function enviarReporte() {
      const url = "http://localhost:3000/";

      try {
        const { cc_est, descripcion } = reporteObj;
        const sede = document.querySelector("#sede").value;
        const salon = document.querySelector("#salon").value;
        const numero_computador =
          document.querySelector("#numero_computador").value;

        const datos = new FormData();
        datos.append("cc_est", cc_est);
        datos.append("sede", sede);
        datos.append("salon", salon);
        datos.append("numero_computador", numero_computador);
        datos.append("descripcion", descripcion);

        const resultado = await fetch(url, {
          method: "POST",
          body: datos,
        });

        const respuesta = await resultado.json();

        if (respuesta) {
          mostrarAlerta("Reporte Enviado", "exito");
          formularioReporte.reset();
          reporteObj.cc_est = "";
          reporteObj.descripcion = "";
          return;
        }
      } catch (error) {
        console.log(error);
      }
    }
  }
})();
