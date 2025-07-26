document.addEventListener('DOMContentLoaded', () => {
    const terminalBody = document.getElementById('terminal-body');
    const clockElement = document.getElementById('clock');





    // --- Base de datos de eventos históricos ---------------------------------------------------------
    const efemerides = {
        '24-07': {
    fecha: '24 de julio de 2005',
    texto: 'Se lanza al mercado el videojuego "The Sims 2: Nightlife", una de las expansiones más populares que introdujo interacciones sociales más profundas en la simulación.'
},
'25-07': {
    fecha: '25 de julio de 1978',
    texto: 'Nace Louise Brown, la primera persona concebida mediante fertilización in vitro, marcando un hito en la biotecnología y la medicina reproductiva.'
},
'26-07': {
    fecha: '26 de julio de 2000',
    texto: 'Llega al mercado el primer teléfono móvil con cámara integrada en Europa, el Sharp J-SH04, abriendo el camino a la fotografía móvil.'
},
'27-07': {
    fecha: '27 de julio de 1993',
    texto: 'Microsoft lanza Windows NT 3.1, su primer sistema operativo de 32 bits diseñado para entornos empresariales y servidores.'
},
'28-07': {
    fecha: '28 de julio de 2005',
    texto: 'Se lanza Google Earth como aplicación independiente, permitiendo a millones de usuarios explorar el mundo a través de imágenes satelitales interactivas.'
},
'29-07': {
    fecha: '29 de julio de 2015',
    texto: 'Microsoft lanza oficialmente Windows 10, combinando características de Windows 7 y 8 y presentando a Cortana y el navegador Edge.'
},
'30-07': {
    fecha: '30 de julio de 2010',
    texto: 'Se estrena en cines "The Social Network", película que narra la creación de Facebook y genera debate sobre el impacto social de las redes.'
},
'31-07': {
    fecha: '31 de julio de 1991',
    texto: 'Se publica el primer archivo de código del kernel Linux por Linus Torvalds en un grupo de noticias, iniciando uno de los proyectos de código abierto más influyentes del mundo.'
},
'01-08': {
    fecha: '1 de agosto de 1902',
    texto: 'Willis Carrier patenta el primer sistema moderno de aire acondicionado, revolucionando la climatización y la industria moderna.'
},
'02-08': {
    fecha: '2 de agosto de 1985',
    texto: 'Se lanza el primer aire acondicionado doméstico con control remoto, facilitando la comodidad y el ahorro energético en el hogar.'
},
'03-08': {
    fecha: '3 de agosto de 2000',
    texto: 'Se presenta el primer aire acondicionado inverter en América Latina, marcando el inicio de la eficiencia energética en climatización residencial.'
},
'04-08': {
    fecha: '4 de agosto de 2010',
    texto: 'La tecnología inverter comienza a implementarse masivamente en sistemas de refrigeración comercial, mejorando el consumo energético global.'
},
'05-08': {
    fecha: '5 de agosto de 2015',
    texto: 'Se lanza el primer aire acondicionado inteligente con WiFi integrado, permitiendo el control remoto desde smartphones.'
},
'06-08': {
    fecha: '6 de agosto de 2012',
    texto: 'Se publica un estudio internacional que demuestra que los aires acondicionados inverter pueden ahorrar hasta un 40% de energía respecto a los convencionales.'
},
'07-08': {
    fecha: '7 de agosto de 1998',
    texto: 'Se lanza el primer compresor inverter para refrigeradores, extendiendo la eficiencia energética a la refrigeración doméstica.'
},
'08-08': {
    fecha: '8 de agosto de 2007',
    texto: 'Se presenta el primer aire acondicionado portátil con tecnología inverter, facilitando la climatización eficiente en espacios pequeños.'
},
'09-08': {
    fecha: '9 de agosto de 2018',
    texto: 'Se lanza un sistema de monitoreo inteligente para aires acondicionados inverter, permitiendo diagnósticos remotos y mantenimiento predictivo.'
},
'10-08': {
    fecha: '10 de agosto de 2005',
    texto: 'Se introduce el uso de refrigerantes ecológicos en equipos inverter, reduciendo el impacto ambiental de la climatización.'
},
'11-08': {
    fecha: '11 de agosto de 2011',
    texto: 'Se lanza el primer aire acondicionado inverter con panel solar integrado, combinando eficiencia energética y energías renovables.'
},
'12-08': {
    fecha: '12 de agosto de 2016',
    texto: 'Se publica la norma internacional ISO 16358 para medir la eficiencia energética estacional de aires acondicionados inverter.'
},
'13-08': {
    fecha: '13 de agosto de 2013',
    texto: 'Se lanza el primer sistema de climatización inverter para vehículos eléctricos, optimizando el consumo de batería.'
},
'14-08': {
    fecha: '14 de agosto de 2009',
    texto: 'Se presenta el primer aire acondicionado inverter con purificador de aire integrado, mejorando la calidad del ambiente interior.'
},
'15-08': {
    fecha: '15 de agosto de 2017',
    texto: 'Se lanza una campaña global para el reciclaje de equipos de aire acondicionado y la correcta gestión de refrigerantes.'
},
'16-08': {
    fecha: '16 de agosto de 2004',
    texto: 'Se publica el primer manual técnico de reparación de tarjetas electrónicas para aires acondicionados inverter en español.'
},
'17-08': {
    fecha: '17 de agosto de 2019',
    texto: 'Se lanza el primer aire acondicionado inverter compatible con asistentes de voz como Alexa y Google Home.'
},
'18-08': {
    fecha: '18 de agosto de 2012',
    texto: 'Se realiza el primer congreso latinoamericano sobre eficiencia energética en climatización, destacando la tecnología inverter.'
},
'19-08': {
    fecha: '19 de agosto de 2008',
    texto: 'Se lanza el primer sistema de aire acondicionado inverter multi-split para edificios residenciales.'
},
'20-08': {
    fecha: '20 de agosto de 2014',
    texto: 'Se publica un informe de la ONU sobre el impacto positivo de la tecnología inverter en la reducción de emisiones de CO₂.'
},
'21-08': {
    fecha: '21 de agosto de 2015',
    texto: 'Se lanza el primer aire acondicionado inverter con sensores de movimiento para optimizar el consumo energético.'
},
'22-08': {
    fecha: '22 de agosto de 2003',
    texto: 'Se introduce el uso de microcontroladores en tarjetas electrónicas de aires acondicionados inverter, mejorando el diagnóstico y la reparación.'
},
'23-08': {
    fecha: '23 de agosto de 2010',
    texto: 'Se lanza el primer aire acondicionado inverter con función de autolimpieza, facilitando el mantenimiento y prolongando la vida útil.'
},
'24-08': {
    fecha: '24 de agosto de 2006',
    texto: 'Se publica el primer software de simulación para el diseño y reparación de tarjetas electrónicas de aires acondicionados inverter.'
},
'25-08': {
    fecha: '25 de agosto de 2013',
    texto: 'Se lanza el primer aire acondicionado inverter con control por aplicación móvil en América Latina.'
},
'26-08': {
    fecha: '26 de agosto de 2011',
    texto: 'Se realiza el primer curso online de reparación de tarjetas inverter, facilitando la capacitación técnica a distancia.'
},
'27-08': {
    fecha: '27 de agosto de 2018',
    texto: 'Se lanza el primer aire acondicionado inverter con inteligencia artificial para autoajustar la temperatura y el consumo.'
},
'28-08': {
    fecha: '28 de agosto de 2002',
    texto: 'Se publica un estudio sobre la reducción de ruido en aires acondicionados inverter, mejorando el confort en el hogar.'
},
'29-08': {
    fecha: '29 de agosto de 2007',
    texto: 'Se lanza el primer aire acondicionado inverter con filtro HEPA, ideal para personas alérgicas.'
},
'30-08': {
    fecha: '30 de agosto de 2014',
    texto: 'Se presenta el primer aire acondicionado inverter con función de deshumidificación inteligente.'
},
'31-08': {
    fecha: '31 de agosto de 2020',
    texto: 'Se lanza una plataforma digital para el monitoreo y control remoto de sistemas de climatización inverter en edificios inteligentes.'
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
        await mostrarLineaConRetraso('● Iniciando sistema de efemérides de programación...', 'linea-ok');
        await mostrarLineaConRetraso('● Conectando con la base de datos... <span class="status-ok">[OK]</span>', 'linea-ok');
        await mostrarLineaConRetraso('● Cargando datos históricos... <span class="status-ok">[OK]</span>', 'linea-ok');
        await mostrarLineaConRetraso('● Sistema listo. Descubre la historia de la programación día a día.', 'linea-ok');
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