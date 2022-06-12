const contenedor = document.getElementById("test");
const botonRes = document.getElementById("boton");
const resultadoTest = document.getElementById("resultado");

const preguntas = [
  {
    pregunta: "1. 234+222=?",
    respuestas: {
      A: "367  &nbsp",
      B: "456  &nbsp",
      C: "500  &nbsp",
    },
    respuestaCorrecta: "B",
  },
  {
    pregunta: "2. 552+447=?",
    respuestas: {
      A: "856 &nbsp",
      B: "980 &nbsp",
      C: "999 &nbsp",
    },
    respuestaCorrecta: "C",
  },
  {
    pregunta: "3. 157+068=?",
    respuestas: {
      A: "225 &nbsp",
      B: "190 &nbsp",
      C: "315 &nbsp",
      D: "220 &nbsp",
    },
    respuestaCorrecta: "A",
  },
  {
    pregunta: "4. 100-055=?",
    respuestas: {
      A: "45 &nbsp",
      B: "23 &nbsp",
      C: "55 &nbsp",
    },
    respuestaCorrecta: "A",
  },
  {
    pregunta: "540-240=?",
    respuestas: {
      A: "240 &nbsp",
      B: "400 &nbsp",
      C: "300 &nbsp",
    },
    respuestaCorrecta: "C",
  },
  {
    pregunta: "6. 352x961=?",
    respuestas: {
      A: "358555 &nbsp",
      B: "3382 &nbsp",
      C: "338272 &nbsp",
    },
    respuestaCorrecta: "C",
  },
  {
    pregunta: "7. 774x213=?",
    respuestas: {
      A: "164862 &nbsp",
      B: "16486 &nbsp",
      C: "366789 &nbsp",
    },
    respuestaCorrecta: "A",
  },
  {
    pregunta: "8. 147x857=?",
    respuestas: {
      A: "334554 &nbsp",
      B: "125979 &nbsp",
      C: "135374 &nbsp",
    },
    respuestaCorrecta: "B",
  },
  {
    pregunta: "9. 525÷5=?",
    respuestas: {
      A: "105 &nbsp",
      B: "306 &nbsp",
      C: "150 &nbsp",
    },
    respuestaCorrecta: "A",
  },
  {
    pregunta: "10. 478÷2=?",
    respuestas: {
      A: "364",
      B: "239",
      C: "567",
    },
    respuestaCorrecta: "B",
  },
   {
    pregunta: "11. 834÷39=?",
    respuestas: {
      A: "29 &nbsp",
      B: "30 &nbsp",
      C: "11 &nbsp",
    },
    respuestaCorrecta: "A",
  },
   {
    pregunta: "12. 993÷66=?",
    respuestas: {
      A: "44 &nbsp",
      B: "15 &nbsp",
      C: "10 &nbsp",
    },
    respuestaCorrecta: "B",
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
