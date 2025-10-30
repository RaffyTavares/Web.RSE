document.addEventListener('DOMContentLoaded', () => {
    const terminalBody = document.getElementById('terminal-body');
    const clockElement = document.getElementById('clock');




    // --- Base de datos de eventos históricos ---------------------------------------------------------
    const efemerides = {
  
'01-10': {
    fecha: '1 de octubre de 1911',
    texto: 'Willis Carrier presenta las "Rational Psychrometric Formulae", que establecen las bases técnico-científicas de la psicrometría usada en diseño de A/C.'
},
'07-10': {
    fecha: '7 de octubre de 1950',
    texto: 'Muere Willis Haviland Carrier, inventor del aire acondicionado moderno (nacido en 1876).'
},
'17-10': {
    fecha: '17 de octubre de 1980',
    texto: 'Hacia finales de 1980, Toshiba lanza su primer aire acondicionado tipo split con compresor inverter, marca un hito en la tecnología A/C.'
}

        // Agrega más fechas aquí en formato 'DD-MM'
    };




    // --- Funciones del Terminal -------------------------------------------------------

    // 1. Actualizar el reloj
    function actualizarReloj() {
        const now = new Date();
        clockElement.textContent = now.toLocaleTimeString();
    }
    
    // 2. Simular escritura
    function type(elemento, texto, callback) {
        let i = 0;
        elemento.textContent = '';
        const intervalo = setInterval(() => {
            if (i < texto.length) {
                elemento.textContent += texto.charAt(i);
                i++;
            } else {
                clearInterval(intervalo);
                if (callback) callback();
            }
        }, 30); // Velocidad de escritura
    }

    // 3. Crear una nueva línea
    function nuevaLinea(texto, clase = '') {
        const p = document.createElement('p');
        p.className = clase;
        p.innerHTML = texto;
        terminalBody.appendChild(p);
        return p;
    }
    
    // 4. Secuencia principal de la aplicación
    async function iniciarSecuencia() {
        // Simula el comando inicial
        const prompt = nuevaLinea(`<span class="user">user@Raffydev:~$</span> <span class="command">./code-history --day</span>`);
        await sleep(500);

        // Secuencia de arranque
        await mostrarLineaConRetraso('● Iniciando sistema de efemérides de refrigeracion y tecnologia inverter...', 'linea-ok');
        await mostrarLineaConRetraso('● Conectando con la base de datos... <span class="status-ok">[OK]</span>', 'linea-ok');
        await mostrarLineaConRetraso('● Cargando datos históricos... <span class="status-ok">[OK]</span>', 'linea-ok');
        await mostrarLineaConRetraso('● Sistema listo. Descubre la historia de la refrigeracion y tecnologia inverter día a día.', 'linea-ok');
        await sleep(500);

        // Mostrar fecha actual
        const hoy = new Date();
        const opcionesFecha = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        nuevaLinea(`<strong>Fecha actual:</strong> ${hoy.toLocaleDateString('es-ES', opcionesFecha)}`);
        
        // Obtener y mostrar la efeméride del día
        const dia = String(hoy.getDate()).padStart(2, '0');
        const mes = String(hoy.getMonth() + 1).padStart(2, '0');
        const evento = efemerides[`${dia}-${mes}`];

        const efemerideContainer = document.createElement('div');
        efemerideContainer.className = 'efemeride-box';
        
        if (evento) {
            efemerideContainer.innerHTML = `<h2>&lt; EFEMÉRIDE DEL DÍA &gt;</h2>
                                           <p><strong>${evento.fecha}:</strong></p>
                                           <p>${evento.texto}</p>`;
        } else {
            efemerideContainer.innerHTML = `<h2>&lt; EFEMÉRIDE DEL DÍA &gt;</h2>
                                           <p>No hay eventos registrados para hoy. ¡Es un buen día para crear historia!</p>`;
        }
        terminalBody.appendChild(efemerideContainer);

        // Mostrar el prompt final con cursor parpadeante
        nuevaLinea(`<span class="user">user@Raffydev:~$</span><span class="cursor"></span>`);
    }

    // Función de utilidad para pausas
    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }
    
    async function mostrarLineaConRetraso(texto, clase) {
        const p = nuevaLinea('', clase);
        p.innerHTML = texto;
        await sleep(300); // Pausa entre líneas
    }

    // --- Iniciar todo ---
    setInterval(actualizarReloj, 1000);
    actualizarReloj();
    iniciarSecuencia();
});