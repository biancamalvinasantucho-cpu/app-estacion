document.addEventListener('DOMContentLoaded', () => {
    obtenerEstaciones();
});

async function obtenerEstaciones() {
    const contenedor = document.getElementById('estaciones-list');
    const template = document.getElementById('template-estacion').content;

    try {
        const res = await fetch(`${API_URL}estaciones`);
        if (!res.ok) throw new Error('Error al consultar la API');

        const estaciones = await res.json();
        contenedor.innerHTML = '';

        estaciones.forEach(estacion => {
            const clone = document.importNode(template, true);
            const btn = clone.querySelector('.btn-estacion');

            clone.querySelector('.estacion-apodo').textContent = estacion.apodo || 'Sin apodo';
            clone.querySelector('.estacion-ubicacion').textContent = `📍 ${estacion.ubicacion || 'Sin ubicación'}`;
            clone.querySelector('.estacion-visitas').textContent = `👁️ Visitas: ${estacion.visitas ?? 0}`;

            // Al hacer clic, redirige a detalle/Z (donde Z es el chipid)
            btn.addEventListener('click', () => {
                window.location.href = `${BASE_URL}detalle/${estacion.chipid}`;
            });

            contenedor.appendChild(clone);
        });
    } catch (error) {
        console.error('Error al cargar estaciones:', error);
        contenedor.innerHTML = '<p class="error">Ocurrió un error al cargar las estaciones meteorológicas.</p>';
    }
}