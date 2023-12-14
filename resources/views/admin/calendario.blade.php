@extends('layouts.app')

@section('content')
    <h1 class="text-center">Panel de control del Administrador</h1>

    <div class="py-4 d-flex col-lg-9 gap-5 w-100">
        <div class="d-flex col-lg-2">
            @include('layouts._partials.nav')
        </div>
        <div class="col-lg-8" id="calendar" style="max-height: 30.5rem;"></div>
    </div>

    <!-- Modal para seleccionar fechas -->
    <div class="modal fade" id="dateModal" tabindex="-1" aria-labelledby="dateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="dateModalLabel">Seleccionar fechas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Selecciona las fechas deseadas:</p>
                    <div id="datePicker"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" id="saveDates">Guardar fechas</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var selectedDates = []; // Almacena las fechas seleccionadas

            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['dayGrid', 'interaction'],
                selectable: true, // Habilitar la selección de días
                dateClick: function(info) {
                    // Abre el modal cuando se hace clic en un día
                    $('#dateModal').modal('show');
                },
                events: [
                    // Aquí puedes agregar tus propios eventos
                    {
                        title: 'Evento 1',
                        start: '2023-12-01'
                    },
                    {
                        title: 'Evento 2',
                        start: '2023-12-10',
                        end: '2023-12-12'
                    }
                    // Puedes agregar más eventos según tus necesidades
                ]
            });

            calendar.render();

            // Configura el datepicker dentro del modal
            $('#datePicker').datepicker({
                multidate: true,
                format: 'yyyy-mm-dd'
            });

            // Configura el botón de guardar fechas
            $('#saveDates').on('click', function() {
                selectedDates = $('#datePicker').datepicker('getDates');
                console.log('Fechas seleccionadas:', selectedDates);

                // Aquí puedes enviar las fechas seleccionadas al servidor
                $.ajax({
                    url: '{{ route('guardar-fechas') }}', // Utiliza la ruta que acabamos de agregar
                    method: 'POST',
                    data: {
                        selectedDates: selectedDates
                    },
                    success: function(response) {
                        console.log('Datos guardados con éxito:', response);

                        // Cierra el modal después de guardar
                        $('#dateModal').modal('hide');
                    },
                    error: function(error) {
                        console.error('Error al guardar datos:', error);
                    }
                });
            });
        });
    </script>
@endsection
