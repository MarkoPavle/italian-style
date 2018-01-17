<template>
    <div id="place">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="breadcrumbs">
                        <ul class="list-group list-group-flush">
                            <li><router-link tag="a" :to="'/home'">Početna</router-link></li>
                            <li>Korisnici</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table-helper :columns="columns" :data="users" :table="'users'" @removeRow="deleteUser($event)"></table-helper>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import TableHelper from '../helper/TableHelper.vue';
    import swal from 'sweetalert2';

    export default {
        data(){
            return {
                users: {},
                columns: []
            }
        },
        component: {
            'table-helper': TableHelper
        },
        created(){
            console.log('spisak korisnika');
            this.getUsers();
        },
        methods: {
            getUsers(){
                axios.get('api/users')
                    .then(res => {
                        this.users = res.data.users.data;
                        this.columns = res.data.columns;
                        console.log(this.users);
                    })
                    .catch(e => {
                        console.log(e);
                    });
            },
            deleteUser(id){
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        axios.delete('api/users/' + id)
                            .then(res => {
                                setTimeout(function () {
                                    this.$router.push('/users');
                                }, 1000);
                            })
                            .catch(e => {
                                console.log(e);
                            });
                        swal(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            },
        }
    }
</script>