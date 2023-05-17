document.addEventListener("DOMContentLoaded", () => {
  llenarSalon(); llenarComputador();
});

const salon = document.querySelector("#salon");
const numeroComputador = document.querySelector("#numero_computador");

function llenarSalon() {
  for (let i = 1; i <= 5; i++) {
    const option = document.createElement("OPTION");
    option.value = i;
    option.textContent = i;

    salon.appendChild(option);
  }
}

function llenarComputador() {
  for (let i = 1; i <= 30; i++) {
    const option = document.createElement("OPTION");
    option.value = i;
    option.textContent = i;

    numeroComputador.appendChild(option);
  }
}
