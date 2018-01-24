<template>
    <div id="place">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="breadcrumbs">
                        <ul class="list-group list-group-flush">
                            <li><router-link tag="a" :to="'/home'">Home</router-link></li>
                            <li><router-link tag="a" :to="'/menus'">Menus</router-link></li>
                            <li><router-link tag="a" :to="'/menus/' + this.$route.params.id + '/edit'">Selected menu</router-link></li>
                            <li>Menu links</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row bela">
                <div class="col-md-12">
                    <div class="card">
                        <h5>Menu links</h5>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card">

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <draggable v-model="links" :options="{draggable:'.list-group-item'}">
                                <li v-for="element in links" :key="element.id" class="list-group-item">
                                    {{element.name}}
                                </li>
                                <button slot="footer" class="btn btn-success" @click="addLink()" style="margin-top: 15px">Add link</button>
                            </draggable>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import FontAwesomeIcon from '@fortawesome/vue-fontawesome';
    import swal from 'sweetalert2';
    import Switches from 'vue-switches';
    import draggable from 'vuedraggable';

    export default {
        data(){
          return {
              menu: {},
              links: [],
              lastId: 1,
              error: null,
          }
        },
        components: {
            'font-awesome-icon': FontAwesomeIcon,
            'switches': Switches,
            'draggable': draggable
        },
        created(){
            this.getMenu();
        },
        methods: {
            submit(){
                axios.post('api/menus', this.menu)
                    .then(res => {
                        swal({
                            position: 'center',
                            type: 'success',
                            title: 'Success',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        this.$router.push('/menus');
                    }).catch(e => {
                        console.log(e.response);
                        this.error = e.response.data.errors;
                    });
            },
            getMenu(){
                console.log('get menu');
            },
            addLink(){
                console.log('add link');
                this.lastId = this.lastId + 1;
                let link = {
                    id: this.lastId,
                    name: 'Custom link' + this.lastId
                }
                this.links.push(link);
            },
        }
    }
</script>