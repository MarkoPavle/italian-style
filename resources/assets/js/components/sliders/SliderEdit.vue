<template>
    <div id="place">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="breadcrumbs">
                        <ul class="list-group list-group-flush">
                            <li><router-link tag="a" :to="'/home'">Home</router-link></li>
                            <li>Slider</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row bela">

                <div class="col-md-12">
                    <div class="card">
                        <h5>Images</h5>
                        <hr>
                        <div id="gallery" v-if="images">
                            <div v-for="image in images" class="photo">
                                <font-awesome-icon icon="times" @click="deleteImage(image)" />
                                <img :src="image.file_path" class="img-thumbnail" alt="slider">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <h5>Upload images</h5>
                        <hr>
                        <vue-dropzone ref="myVueDropzone" id="dropzone" :options="dropzoneOptions" @vdropzone-success="showSuccess()"></vue-dropzone>
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
    import vue2Dropzone from 'vue2-dropzone';
    import 'vue2-dropzone/dist/vue2Dropzone.css';

    export default {
        data(){
          return {
              error: null,
              images: {},
              dropzoneOptions: {
                  url: 'api/sliders',
                  thumbnailWidth: 150,
                  maxFilesize: 0.5,
                  headers: { "Authorization": "Bearer " + this.$auth.getToken() }
              }
          }
        },
        computed: {
            user(){
                return this.$store.getters.getUser;
            }
        },
        components: {
            'font-awesome-icon': FontAwesomeIcon,
            'switches': Switches,
            'vue-dropzone': vue2Dropzone
        },
        created(){
            this.getImages();
        },
        methods: {
            getGallery(){
                axios.get('api/galleries/' + this.$route.params.id)
                    .then(res => {
                        if(res.data.gallery != null){
                            this.gallery = res.data.gallery;
                        }
                    })
                    .catch(e => {
                        console.log(e);
                        this.error = e.response.data.errors;
                    });
            },
            getImages(){
                axios.get('api/sliders')
                    .then(res => {
                        this.images = res.data.images;
                    }).catch(e => {
                        console.log(e.response);
                        this.error = e.response.data.errors;
                    });
            },
            deleteImage(image){
                axios.post('api/sliders/' + image.id + '/destroy')
                    .then(res => {
                        this.images = this.images.filter(function (item) {
                            return image.id != item.id;
                        });
                    }).catch(e => {
                        console.log(e.response);
                        this.error = e.response.data.errors;
                    });
            },
            showSuccess(){
                this.getImages();
            }
        }
    }
</script>