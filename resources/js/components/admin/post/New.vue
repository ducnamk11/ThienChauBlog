<template>
    <div class="container  mt-5">
        <div class="row">

                 <form role="form"  class="col-md-12"   enctype="multipart/form-data" @submit.prevent="addnewPost()">

                <div class="form-group">
                    <label>Title</label>
                    <input  type="text" v-model="form.title" name="title" class="form-control" placeholder="Enter Title"
                           :class="{ 'is-invalid': form.errors.has('title') }">
                    <has-error :form="form" field="title"></has-error>

                </div>
                <div class="form-group">
                    <label>Description</label>
                    <vue-editor v-model="form.description"></vue-editor>
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select class="custom-select  mb-3">
                        <option value="" selected>--category--</option>
                        <option :value="category.id" v-for="(category) in getcategory" value="1">{{category.cat_name}}
                        </option>
                    </select>

                </div>

                <div class="form-group">
                    <label for="photoId">Photo</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input @change="changePhoto($event)" type="file" class="custom-file-input"
                                   id="photoId">
                            <label class="custom-file-label" for="photoId">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                        </div>
                    </div>
                    <img class="mt-2" :src="form.photo" height="140px" alt="">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</template>

<script>
    import {VueEditor} from "vue2-editor";

    export default {
        name: "New",
        components: {VueEditor},
        data() {
            return {
                form: new Form({
                    title: '',
                    description: '',
                    cat_id: '',
                    photo: '',
                })
            }
        },
        mounted() {
            this.$store.dispatch('allCategory');
        },
        computed: {
            getcategory() {
                return this.$store.getters.getCategory
            }
        },
        methods: {
            addnewPost() {
                this.form.post('/savepost')
                    .then((res) => {
                        this.$router.push('/post-list');
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Add post successfully!',
                            timer: 1000
                        })
                    })
            },
            changePhoto(event) {
                let file = event.target.files[0];
                if (file.size > 4048576) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                        footer: '<a href>Why do I have this issue?</a>'
                    })
                } else {
                    let reader = new FileReader();
                    reader.onload = event => {
                        this.form.photo = event.target.result
                    };
                    reader.readAsDataURL(file);
                }
            }
        }
    }
</script>

<style scoped>

</style>
