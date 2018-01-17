<template>
    <div class="container-fluid">
        <div class="row" id="topMenu">
            <div class="col-sm-12">
                <div class="logo-holder">
                    <div class="logo">
                        <a :href="domain" target="_blank">
                            <img :src="domain + 'img/vue-logo.png'" alt="Vue Admin Panel">
                        </a>
                    </div>
                </div>
                <div class="center-holder">
                    <font-awesome-icon icon="align-justify" @click="changeHideLeftBar()"/>
                </div>
                <ul class="top-nav float-right">
                    <li>
                        <div class="dropdown show">
                            <a class="btn btn-danger dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-tooltip="tooltip" data-placement="bottom" title="Kreiraj novo">
                                <font-awesome-icon icon="plus"/>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                <a class="dropdown-item" href="#">Članak</a>
                                <a class="dropdown-item" href="#">Kategoriju članka</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" @click="newUser()">Korisnik</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Proizvod</a>
                                <a class="dropdown-item" href="#">Kategoriju proizvoda</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown show">
                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <font-awesome-icon icon="envelope" />
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown show">
                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <font-awesome-icon icon="bell" />
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="btn btn-primary" @click="changeShowRightBar()">
                            <font-awesome-icon icon="comment-alt" />
                        </a>
                    </li>
                    <li class="user">
                        <a class="btn btn-primary transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img :src="domain + 'img/user-image.png'" alt="User image">
                            <font-awesome-icon icon="chevron-circle-down" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink4">
                            <a class="dropdown-item" href="#" v-if="user">{{ user.name }}</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <router-link tag="a" :to="'/logout'" class="dropdown-item" href="#">Odjava</router-link>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    import { apiHost } from '../../config';
    import FontAwesomeIcon from '@fortawesome/vue-fontawesome';

    export default {
        data(){
            return {
                domain : apiHost
            }
        },
        components: {
            'font-awesome-icon': FontAwesomeIcon
        },
        computed: {
            showRightBar(){
                return this.$store.getters.getShowRightBar;
            },
            user(){
                return this.$store.getters.getUser;
            }
        },
        created(){
            this.storeUser();
        },
        methods: {
            /** auth **/
            storeUser(){
                if(this.$store.getters.getUser == null && this.$auth.isAuth()){
                    axios.get('api/user')
                        .then(res => {
                            this.$store.dispatch('changeUser', res.data);
                        })
                        .catch(e => {
                            console.log(e);
                        });
                }
            },

            changeShowRightBar(){
                this.$store.dispatch('changeShowRightBar');
            },
            changeHideLeftBar(){
                this.$store.dispatch('changeHideLeftBar');
            },
            newUser(){
                this.$router.push('/users/create');
            },
        }
    }
</script>

<style>
    
</style>