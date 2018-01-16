<template>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col" v-for="column in columns">{{ column }}</th>
            <th>akcija</th>
        </tr>
        </thead>
        <tbody>
            <tr v-for="row in data">
                <td v-for="item in row">{{ item }}</td>
                <td>
                    <font-awesome-icon icon="chevron-circle-down" />
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script>
    import FontAwesomeIcon from '@fortawesome/vue-fontawesome';

    export default {
        props: ['columns', 'data'],
        components: {
            'font-awesome-icon': FontAwesomeIcon
        },
    }
</script>

<style>

</style>