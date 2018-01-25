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

                <div class="col-sm-12">
                    <div class="card">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#list" role="tab" aria-controls="home" aria-selected="true">List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#sort" role="tab" aria-controls="contact" aria-selected="false">Sort</a>
                            </li>
                            <p><font-awesome-icon icon="plus" class="new-link-add" @click="addRow()" data-tooltip="tooltip" data-placement="left" title="Create new link" /></p>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="home-tab">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">title</th>
                                        <th scope="col">publish</th>
                                        <th scope="col">created at</th>
                                        <th>action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="row in menuLinks">
                                        <td>{{ row.id }}</td>
                                        <td>{{ row.title }}</td>
                                        <td>{{ row.publish }}</td>
                                        <td>{{ row.created_at }}</td>
                                        <td>
                                            <font-awesome-icon icon="pencil-alt" @click="editRow(row['id'])"/>
                                            <font-awesome-icon icon="times" @click="deleteRow(row)" />
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- #eng -->

                            <div class="tab-pane fade" id="sort" role="tabpanel" aria-labelledby="contact-tab">
                                <ul class="list-group list-group-flush sortable">
                                    <draggable v-model="links" :options="{draggable:'.list-group-item'}" @change="update()">
                                        <li v-for="element in links" :key="element.id" class="list-group-item">
                                            {{element.title}}
                                            <font-awesome-icon icon="bars" class="sort float-right"/>
                                        </li>
                                        <button slot="footer" class="btn btn-success float-right" @click="submit()" style="margin-top: 15px">Save</button>
                                    </draggable>
                                </ul>
                            </div><!-- #ita -->
                        </div>
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
              menuLinks: {},
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
            this.getMenuList();
            this.getMenuSort();
        },
        methods: {
            submit(){
                axios.post('api/menu-links/' + this.menu.id + '/order', {links: this.links})
                    .then(res => {
                        swal({
                            position: 'center',
                            type: 'success',
                            title: 'Success',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        this.menu = res.data.menu;
                        this.links = res.data.links;
                        this.lastId = res.data.lastId;
                    }).catch(e => {
                        console.log(e.response);
                        this.error = e.response.data.errors;
                    });
            },
            getMenuSort(){
                axios.get('api/menu-links/' + this.$route.params.id + '/sort')
                    .then(res => {
                        this.menu = res.data.menu;
                        this.links = res.data.links;
                        this.lastId = res.data.lastId;
                    }).catch(e => {
                        console.log(e.response);
                        this.error = e.response.data.errors;
                    });
            },
            getMenuList(){
                axios.get('api/menu-links?id=' + this.$route.params.id)
                    .then(res => {
                        this.menuLinks = res.data.menuLinks.data;
                        this.paginate = res.data.menuLinks;
                    }).catch(e => {
                        console.log(e.response);
                        this.error = e.response.data.errors;
                    });
            },
            addRow(){
                this.$router.push('/menu-links/' + this.$route.params.id + '/create');
            },
            editRow(id){
                this.$router.push('/menu-links/' + id + '/edit');
            },
            deleteRow(row){
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#51d2b7',
                    cancelButtonColor: '#fb9678',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        axios.delete('api/menu-links/' + row.id)
                            .then(res => {
                                this.menuLinks = this.menuLinks.filter(function (item) {
                                    return row.id != item.id;
                                });
                                swal(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                );
                            })
                            .catch(e => {
                                console.log(e);
                            });
                    }
                });
            },
            update(){
                this.links.map((link, index) => {
                    link.order = index + 1;
                });
            }
        }
    }
</script>