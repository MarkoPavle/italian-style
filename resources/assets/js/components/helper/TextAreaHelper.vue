<template>
    <ckeditor
            v-model="content"
            :config="config"
            @blur="onBlur($event)">
    </ckeditor>
</template>

<script>
    import Ckeditor from 'vue-ckeditor2'

    export default {
        data () {
            return {
                content: '',
                config: {
                    toolbar: [
                        [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', 'Image' ]
                    ],
                    height: 300,
                    filebrowserBrowseUrl: 'media'
                }
            }
        },
        components: { Ckeditor },
        methods: {
            onBlur (editor) {
                this.$emit('getText', editor)
            },
        }
    }
</script>