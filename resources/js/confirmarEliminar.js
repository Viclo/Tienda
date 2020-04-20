const confirmarEliminar = new Vue({
    el: '#confirmarEliminar',
    data: {
        urlAEliminar: ''
    },
    methods: {
        deseasEliminar(id){
            //alert(id);
            this.urlAEliminar = document.getElementById('urlBase').innerHTML+'/'+id;
            $('#modalEliminar').modal('show');
        }
    },
});
