<template>
    <data-table
    url="http://vue-datatable.test/ajax"
    :per-page="perPage"
    :columns="columns"
    :body="body">

</data-table>
</template>

<script>
export default {
    name: 'tabla',
    data() {
        return {
            users: [],
            perPage: ['10', '25', '50'],
            rows: this.users,
            columns: [
                {
                    label: 'ID',
                    name: 'id',
                    filterable: true,
                },
                {
                    label: 'Name',
                    name: 'name',
                    filterable: true,
                },
                {
                    label: 'Email',
                    name: 'email',
                    filterable: true,
                },
                {
                    label: '',
                    name: 'View',
                    filterable: false,
                },
            ],
            body:[
            {
    "table-container": {
        "table-responsive": true,
    },
    "table": {
        "table": true,
        "table-striped": true,
        "table-dark": true,
    },
    "t-head": {

    },
    "t-body": {
        
    },
    "t-head-tr": {

    },
    "t-body-tr": {
        
    },
    "td": {

    },
    "th": {
        
    },
}]   
        }
    },
    mounted() {
            this.getUsers();
        },
    methods: {
        dataTable(){
         $(document).ready( function () {
                $('#myTable').DataTable();
            } );
        },

        getUsers(){
            var urlUsers="users";
            axios.get(urlUsers).then(response => (this.users = response.data,
            this.dataTable()
                ));
        }
    },
}

</script>