// Función para calcular el consumo energético de un equipo
function calcularConsumo() {
    // Obtener los valores ingresados por el usuario
    let potencia = parseFloat(document.getElementById("potencia").value); // Potencia en BTU
    let horas = parseFloat(document.getElementById("horas").value); // Horas de uso diario
    let tarifa = parseFloat(document.getElementById("tarifa").value); // Tarifa eléctrica (RD/kWh)
    let eficiencia = parseFloat(document.getElementById("eficiencia").value); // Eficiencia energética (SEER o EER)
    
    // Validar que los valores sean válidos y mayores a 0
    if (!potencia || !horas || !tarifa || !eficiencia || potencia <= 0 || horas <= 0 || tarifa <= 0 || eficiencia <= 0) {
        alert("Por favor, ingresa valores válidos y mayores a 0.");
        return;
    }
    
    // Calcular el consumo diario, mensual, costo mensual y emisión de CO₂
    let consumoDiario = (potencia / eficiencia) * horas / 1000; // Consumo diario en kWh
    let consumoMensual = consumoDiario * 30; // Consumo mensual en kWh
    let costoMensual = consumoMensual * tarifa; // Costo mensual en RD$
    let emisionCO2 = consumoMensual * 0.42; // Emisión de CO₂ en kg (0.42 kg por kWh)

    // Mostrar los resultados en la interfaz
    document.getElementById("consumoDiario").innerText = consumoDiario.toFixed(2);
    document.getElementById("consumoMensual").innerText = consumoMensual.toFixed(2);
    document.getElementById("costoMensual").innerText = costoMensual.toFixed(2);
    document.getElementById("emisionCO2").innerText = emisionCO2.toFixed(2);

    // Generar sugerencias de ahorro basadas en el consumo mensual
    generarSugerencias(consumoMensual);
}

// Función para comparar el consumo energético entre dos equipos
function compararConsumo() {
    // Obtener los valores ingresados por el usuario para ambos equipos
    let potencia1 = parseFloat(document.getElementById("potencia1").value); // Potencia del equipo 1
    let eficiencia1 = parseFloat(document.getElementById("eficiencia1").value); // Eficiencia del equipo 1
    let potencia2 = parseFloat(document.getElementById("potencia2").value); // Potencia del equipo 2
    let eficiencia2 = parseFloat(document.getElementById("eficiencia2").value); // Eficiencia del equipo 2
    
    // Validar que los valores sean válidos y mayores a 0
    if (!potencia1 || !eficiencia1 || !potencia2 || !eficiencia2 || potencia1 <= 0 || eficiencia1 <= 0 || potencia2 <= 0 || eficiencia2 <= 0) {
        alert("Por favor, ingresa valores válidos y mayores a 0 para ambos equipos.");
        return;
    }
    
    // Calcular el consumo energético de ambos equipos
    let consumo1 = potencia1 / eficiencia1; // Consumo del equipo 1
    let consumo2 = potencia2 / eficiencia2; // Consumo del equipo 2

    // Determinar cuál equipo es más eficiente
    let resultado = consumo1 < consumo2 ? "El Equipo 1 es más eficiente" : "El Equipo 2 es más eficiente";

    // Calcular el ahorro estimado en kWh/mes
    let ahorro = Math.abs(consumo1 - consumo2) * 30 / 1000; // Ahorro mensual en kWh

    // Mostrar los resultados en la interfaz
    document.getElementById("resultadoComparacion").innerText = resultado;
    document.getElementById("ahorroEstimado").innerText = ahorro.toFixed(2);
}

// Función para generar sugerencias de ahorro basadas en el consumo mensual
function generarSugerencias(consumoMensual) {
    let sugerencia = ""; // Variable para almacenar la sugerencia

    // Generar sugerencias según el rango de consumo mensual
    if (consumoMensual > 300) {
        sugerencia = "Reduzca el uso del aire acondicionado en horas de menor necesidad y asegúrese de limpiar los filtros regularmente.";
    } else if (consumoMensual > 150) {
        sugerencia = "Considere aumentar la temperatura del termostato en 1-2°C y use ventiladores para mejorar la circulación del aire.";
    } else {
        sugerencia = "¡Perfecto! Su consumo es muy eficiente.";
    }

    // Mostrar la sugerencia en la interfaz
    document.getElementById("sugerenciaAhorro").innerText = sugerencia;
}