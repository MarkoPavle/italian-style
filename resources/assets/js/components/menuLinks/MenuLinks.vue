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
                        <ul class="list-group list-group-flush sortable">
                            <draggable v-model="links" :options="{draggable:'.list-group-item'}">
                                <li v-for="element in links2" :key="element.id" class="list-group-item">
                                    {{element.title}}
                                </li>
                            </draggable>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <ul class="list-group list-group-flush sortable">
                            <draggable v-model="links" :options="{draggable:'.list-group-item', chosenClass: '.sort'}">
                                <li v-for="element in links" :key="element.id" class="list-group-item">
                                    {{element.title}}
                                    <font-awesome-icon icon="bars" class="sort float-right"/>
                                    <font-awesome-icon icon="pencil-alt" class="edit float-right" @click="edit(element)" v-if="element.type == 0" />
                                </li>
                                <button slot="footer" class="btn btn-danger" @click="addLink()" style="margin-top: 15px">Add link</button>
                                <button slot="footer" class="btn btn-success float-right" @click="addLink()" style="margin-top: 15px">Save</button>
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
              links2: [],
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
                axios.get('api/menu-links/' + this.$route.params.id + '/sort')
                    .then(res => {
                        console.log(res.data.links);
                        this.menu = res.data.menu;
                        this.links = res.data.links;
                        this.lastId = res.data.lastId;
                    }).catch(e => {
                        console.log(e.response);
                        this.error = e.response.data.errors;
                    });
            },
            addLink(){
                console.log('add link');
                this.lastId = this.lastId + 1;
                let link = {
                    id: this.lastId,
                    title: 'Custom link' + this.lastId,
                    type: 0
                };
                this.links.push(link);
            },
            edit(el){
                this.$router.push('/menu-links/' + el.id + '/edit');
            }
        }
    }
</script>