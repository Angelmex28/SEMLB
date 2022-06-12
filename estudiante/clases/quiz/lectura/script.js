const contenedor = document.getElementById("test");
const botonRes = document.getElementById("boton");
const resultadoTest = document.getElementById("resultado");

const preguntas = [
  {
    pregunta: "1. La lectura consiste en:",
    respuestas: {
      A: "Interpretar &nbsp",
      B: "Descifrar &nbsp",
      C: "Comprender &nbsp",
      D: "Los 3 anteriores &nbsp",
    },
    respuestaCorrecta: "D",
  },
  {
    pregunta: "2. En la lectura se toman en cuenta los signos de puntuación?",
    respuestas: {
      A: "Sí, son muy importantes &nbsp",
      B: "No &nbsp",
    },
    respuestaCorrecta: "A",
  },
  {
    pregunta: "3. Cuál es la manera correcta de escribir la siguiente palabra?",
    respuestas: {
      A: "Testamento &nbsp",
      B: "Textamento &nbsp",
      C: "Teztamento &nbsp",
    },
    respuestaCorrecta: "A",
  },
  {
    pregunta: "4. Cuál es la manera correcta en la que se debe leer:",
    respuestas: {
      A: "Escuchando música &nbsp",
      B: "En una fiesta &nbsp",
      C: "Sentado en buena posición y concentrado &nbsp",
    },
    respuestaCorrecta: "C",
  },
  {
    pregunta: "5. Cuál de los siguientes es un sujeto?",
    respuestas: {
      A: "Casa &nbsp",
      B: "Jesús &nbsp",
      C: "Pelota &nbsp",
    },
    respuestaCorrecta: "B",
  },
  {
    pregunta: "6. Cuál es la finalidad de la coma en una oración?",
    respuestas: {
      A: "Marcar Igualdad &nbsp",
      B: "Hacer un pequeño descanso y separar &nbsp",
      C: "Pasar a otro párrafo &nbsp",
    },
    respuestaCorrecta: "B",
  },
  {
    pregunta: "7. Cuál de los siguientes es un verbo?",
    respuestas: {
      A: "Caminar &nbsp",
      B: "Correr &nbsp",
      C: "Todas las anteriores &nbsp",
    },
    respuestaCorrecta: "C",
  },
  {
    pregunta: "8. Cuál es la manera correcta de escribir la siguiente palabra?",
    respuestas: {
      A: "Axfizia &nbsp",
      B: "Azfixia &nbsp",
      C: "Asficia &nbsp",
      D: "Asfixia &nbsp",
    },
    respuestaCorrecta: "D",
  },
  {
    pregunta: "9. Es importante prcticar la lectura en voz alta?",
    respuestas: {
      A: "Sí &nbsp",
      B: "No &nbsp",
      C: "Tal vez &nbsp",
    },
    respuestaCorrecta: "A",
  },
  {
    pregunta: "10. Los signos de puntuación son:",
    respuestas: {
      A: "Caracteres &nbsp",
      B: "Números &nbsp",
      C: "Figuras &nbsp",
    },
    respuestaCorrecta: "A",
  },
];

function mostrarTest() {
  const preguntasYrespuestas = [];

  preguntas.forEach((preguntaActual, numeroDePregunta) => {
    const respuestas = [];

    for (letraRespuesta in preguntaActual.respuestas) {
      respuestas.push(
        `<label>
                  <input type="radio" name="${numeroDePregunta}" value="${letraRespuesta}" />
                  ${letraRespuesta} : ${preguntaActual.respuestas[letraRespuesta]}
              </label>`
      );
    }

    preguntasYrespuestas.push(
      `<div class="cuestion">${preguntaActual.pregunta}</div> <br>
          <div class="respuestas"> ${respuestas.join("")} </div> <br><br>
          `
    );
  });

  contenedor.innerHTML = preguntasYrespuestas.join("");
}

mostrarTest();

function mostrarResultado() {
  const respuestas = contenedor.querySelectorAll(".respuestas");
  let respuestasCorrectas = 0;

  preguntas.forEach((preguntaActual, numeroDePregunta) => {
    const todasLasRespuestas = respuestas[numeroDePregunta];
    const checkboxRespuestas = `input[name='${numeroDePregunta}']:checked`;
    const respuestaElegida = (
      todasLasRespuestas.querySelector(checkboxRespuestas) || {}
    ).value;

    if (respuestaElegida === preguntaActual.respuestaCorrecta) {
      respuestasCorrectas++;

      respuestas[numeroDePregunta].style.color = "blue";
    } else {
      respuestas[numeroDePregunta].style.color = "red";
    }
  });

  resultadoTest.innerHTML =
    "Usted ha acertado " +
    respuestasCorrectas +
    " preguntas de un total de " +
    preguntas.length;
}

botonRes.addEventListener("click", mostrarResultado);
