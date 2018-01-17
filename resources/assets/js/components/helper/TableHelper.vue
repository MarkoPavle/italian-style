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
                    <font-awesome-icon icon="pencil-alt" @click="editRow(row['id'])"/>
                    <font-awesome-icon icon="times" @click="removeRow(row['id'])" />
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script>
    import FontAwesomeIcon from '@fortawesome/vue-fontawesome';

    export default {
        props: ['columns', 'data', 'table'],
        components: {
            'font-awesome-icon': FontAwesomeIcon
        },
        methods: {
            editRow(id){
                this.$router.push(this.table + '/' + id + '/edit');
            },
            removeRow(id){
                this.$emit('removeRow', [id]);
            }
        }
    }
</script>

<style>

</style>