<template>
    <div id="place">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="breadcrumbs">
                        <ul class="list-group list-group-flush">
                            <li><router-link tag="a" :to="'/home'">Home</router-link></li>
                            <li>Categories</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table-helper :columns="columns" :data="categories" :table="'categories'" @removeRow="deleteCategory($event)"></table-helper>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <paginate-helper :paginate="paginate" @clickLink="clickToLink($event)"></paginate-helper>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import TableHelper from '../helper/TableHelper.vue';
    import PaginateHelper from '../helper/PaginateHelper.vue';
    import swal from 'sweetalert2';

    export default {
        data(){
            return {
                categories: {},
                columns: [],
                paginate: {}
            }
        },
        component: {
            'table-helper': TableHelper,
            'paginate-helper': PaginateHelper
        },
        created(){
            console.log('spisak kategorija');
            this.getCategories();
        },
        methods: {
            getCategories(){
                axios.get('api/categories')
                    .then(res => {
                        this.categories = res.data.categories.data;
                        this.columns = res.data.columns;
                        this.paginate = res.data.categories;
                        console.log(res.data.categories);
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
                        axios.delete('api/categories/' + id)
                            .then(res => {
                                this.$router.push('/categories');
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
            clickToLink(index){
                axios.get('api/categories?page=' + index)
                    .then(res => {
                        this.categories = res.data.categories.data;
                        this.columns = res.data.columns;
                        this.paginate = res.data.categories;
                        console.log(res.data.categories);
                    })
                    .catch(e => {
                        console.log(e);
                    });
            }
        }
    }
</script>