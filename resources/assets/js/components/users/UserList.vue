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
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                users: {}
            }
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
                        console.log(this.users);
                    })
                    .catch(e => {
                        console.log(e);
                    });
            }
        }
    }
</script>