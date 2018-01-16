<template>
    <div id="rightMenu" :class="{'active': showRightBar}">
        <h3>Chat</h3>
        <p class="title">online</p>
        <ul class="online">
            <li>
                <img :src="domain + 'img/user-image.png'" alt="Vue Admin Panel">
                <span class="active"></span>
                <div>
                    <p>Nebojša Marković</p>
                    <p>@admin</p>
                </div>
            </li>
            <li>
                <img :src="domain + 'img/user-image.png'" alt="Vue Admin Panel">
                <span class="active"></span>
                <div>
                    <p>Nebojša Marković</p>
                    <p>@admin</p>
                </div>
            </li>
            <li>
                <img :src="domain + 'img/user-image.png'" alt="Vue Admin Panel">
                <span class="active"></span>
                <div>
                    <p>Nebojša Marković</p>
                    <p>@admin</p>
                </div>
            </li>
        </ul>
        <p class="title">offline</p>
        <ul class="offline">
            <li>
                <img :src="domain + 'img/user-image.png'" alt="Vue Admin Panel">
                <span class="active"></span>
                <div>
                    <p>Nebojša Marković</p>
                    <p>@admin</p>
                </div>
            </li>
            <li>
                <img :src="domain + 'img/user-image.png'" alt="Vue Admin Panel">
                <span class="active"></span>
                <div>
                    <p>Nebojša Marković</p>
                    <p>@admin</p>
                </div>
            </li>
            <li>
                <img :src="domain + 'img/user-image.png'" alt="Vue Admin Panel">
                <span class="active"></span>
                <div>
                    <p>Nebojša Marković</p>
                    <p>@admin</p>
                </div>
            </li>
        </ul>
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
            }
        }
    }
</script>

<style>

</style>