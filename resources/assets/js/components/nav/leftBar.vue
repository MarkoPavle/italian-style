<template>
    <div id="leftMenu" :class="{ 'hide': hideLeftBar }">
        <ul>
            <li>
                <font-awesome-icon icon="home" />
                <router-link tag="a" :to="'/home'">Početna</router-link>
            </li>
            <li :class="{ 'active': showSettingsItemActive }" :style="{ 'display': showSettingsItem ? 'block' : 'none' }">
                <font-awesome-icon icon="angle-right" />
                <a href="#" @click="changeShowSettingsItemActive()">Podešavanja</a>
                <font-awesome-icon icon="cogs"/>
                <ul>
                    <li><a href="#">SEO</a></li>
                    <li><a href="#">Theme</a></li>
                </ul>
            </li>
            <li :class="{ 'active': showUsersItemActive }" :style="{ 'display': showUsersItem ? 'block' : 'none' }">
                <font-awesome-icon icon="angle-right" />
                <a href="#" @click="changeShowUsersItemActive()">Korisnici</a>
                <font-awesome-icon icon="users" />
                <ul>
                    <li><router-link tag="a" :to="'/users'">Pregled korisnika</router-link></li>
                    <li><a href="#">Pravo pristupa</a></li>
                </ul>
            </li>
            <li :class="{ 'active': showPostsItemActive }" :style="{ 'display': showPostsItem ? 'block' : 'none' }">
                <font-awesome-icon icon="angle-right" />
                <a href="#" @click="changeShowPostsItemActive()">Članci</a>
                <font-awesome-icon icon="paste" />
                <ul>
                    <li><a href="#">Pregled članaka</a></li>
                    <li><a href="#">Pregled kategorija</a></li>
                </ul>
            </li>
            <li :class="{ 'active': showProductsItemActive }" :style="{ 'display': showProductsItem ? 'block' : 'none' }">
                <font-awesome-icon icon="angle-right" />
                <a href="#" @click="changeShowProductsItemActive()">Prodavnica</a>
                <font-awesome-icon icon="shopping-cart" />
                <ul>
                    <li><a href="#">Pregled proizvoda</a></li>
                    <li><a href="#">Pregled kategorija</a></li>
                </ul>
            </li>
            <li :class="{ 'active': showNewslettersItemActive }" :style="{ 'display': showNewslettersItem ? 'block' : 'none' }">
                <font-awesome-icon icon="angle-right" />
                <a href="#" @click="changeShowNewslettersItemActive()">Newsletter</a>
                <font-awesome-icon icon="envelope" />
                <ul>
                    <li><a href="#">Pregled Newslettera</a></li>
                    <li><a href="#">Pregled pretplatnika</a></li>
                    <li><a href="#">Pregled banera</a></li>
                </ul>
            </li>
        </ul>
    </div>
</template>

<script>
    import FontAwesomeIcon from '@fortawesome/vue-fontawesome';

    export default {
        components: {
            'font-awesome-icon': FontAwesomeIcon
        },
        computed: {
            /** nav **/
            hideLeftBar(){
                return this.$store.getters.getHideLeftBar;
            },

            /** settings **/
            showSettingsItem(){
                return this.$store.getters.getShowSettingsItem;
            },
            showSettingsItemActive(){
                return this.$store.getters.getSettingsItemActive;
            },

            /** users **/
            showUsersItem(){
                return this.$store.getters.getShowUsersItem;
            },
            showUsersItemActive(){
                return this.$store.getters.getUsersItemActive;
            },

            /** posts **/
            showPostsItem(){
                return this.$store.getters.getShowPostsItem;
            },
            showPostsItemActive(){
                return this.$store.getters.getPostsItemActive;
            },

            /** products **/
            showProductsItem(){
                return this.$store.getters.getShowProductsItem;
            },
            showProductsItemActive(){
                return this.$store.getters.getProductsItemActive;
            },

            /** newsletters **/
            showNewslettersItem(){
                return this.$store.getters.getShowNewslettersItem;
            },
            showNewslettersItemActive(){
                return this.$store.getters.getNewslettersItemActive;
            },
        },
        methods: {
            /** settings **/
            changeShowSettingsItemActive(){
                this.$store.dispatch('changeSettingsItemActive');
            },

            /** users **/
            changeShowUsersItemActive(){
                this.$store.dispatch('changeUsersItemActive');
            },

            /** posts **/
            changeShowPostsItemActive(){
                this.$store.dispatch('changePostsItemActive');
            },

            /** products **/
            changeShowProductsItemActive(){
                this.$store.dispatch('changeProductsItemActive');
            },

            /** products **/
            changeShowNewslettersItemActive(){
                this.$store.dispatch('changeNewslettersItemActive');
            },
        }
    }
</script>

<style>

</style>