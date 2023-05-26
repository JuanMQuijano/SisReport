export function mostrarAlerta(mensaje, tipo) {
  const formulario = document.querySelector(".formulario");
  const existeAlerta = document.querySelector(".alerta");

  if (!existeAlerta) {
    const divAlerta = document.createElement("DIV");
    divAlerta.classList.add("alerta");

    if (tipo === "error") {
      divAlerta.classList.add("error");
    } else {
      divAlerta.classList.add("exito");
    }

    divAlerta.textContent = mensaje;

    formulario.insertBefore(
      divAlerta,
      formulario.querySelector(".formulario__identificacion")
    );

    setTimeout(() => {
      divAlerta.remove();
    }, 5000);
  }
}
