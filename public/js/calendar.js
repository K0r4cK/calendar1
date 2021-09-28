const { error } = require("jquery");


document.addEventListener('DOMContentLoaded', function() {

    let form = document.querySelector("form");

    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',

        locale:"es",

        headerToolbar: {
            left: 'prev,next,today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,listWeek',
        },

        dateClick:function(info){
            $('#event').modal('show');
        }

    });
    calendar.render();

    document.getElementById("btnSave").addEventListener("click", function(){

        const data= new FormData(form);
        console.log(data);

        axios.post('http://localhost/calendar1/public/event/store', data).
        $then(
            (response)=>{
                $('#event').modal('hide');
            }
            ).catch(
                error=>{
                    if(error.response){
                        console.log(error.response.data)
                    }
                }
            )

    });

});
