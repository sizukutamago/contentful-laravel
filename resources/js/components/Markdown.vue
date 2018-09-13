<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default" v-for="entry in entries">
                    <div class="card-header">{{ entry.fields.title }}</div>
                    {{ entry.fields.slug }}
                    <div class="card-body" v-html="parse(entry.fields.body)">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import marked from 'marked';
    export default {
        data() {
            return {
                entries: {}
            }
        },
        created() {
            this.fetchEntries();
        },
        methods: {
            fetchEntries: function () {
                axios.get('/api/contentful').then(response => {
                    this.entries = response.data.items;
                })
            },
            parse: function (str) {
                return marked(str, {sanitize: true});
            }
        }
    }
</script>
