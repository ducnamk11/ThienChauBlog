<template>
    <div class="container">
        <!-- Main content -->
        <div class="row justify-content-center col-11 ">
            <div class="col-12 ">
                <div class="card">
                    <div class="card-header">
                        Edit post
                    </div>
                    <div class="card-body">
                        <form role="form" enctype="multipart/form-data" @submit.prevent="updatePost()">
                            <div class="form-group">
                                <label for="TitleId">Title </label>
                                <input required type="text" class="form-control" id="TitleId"
                                       placeholder="Enter Category" v-model="form.title" name="title">
                            </div>
                            <div class="form-group">
                                <label  >Description </label>
                                <vue-editor v-model="form.description"></vue-editor>
                            </div>
                            <div class="form-group">
                                <label for="selectId">Select</label>
                                <select id="selectId" class="form-control" v-model="form.cat_id">
                                    <option disabled value="">--Select--</option>
                                    <option :value="category.id" v-for="category in getallcategory">
                                        {{category.cat_name}}
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
                                <img class="mt-2" :src="updateImage()" height="140px" alt="">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {VueEditor} from "vue2-editor";
    export default {
        name: "Edit",
        components:{
            VueEditor
        },
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
        created() {
            axios.get(`post/${this.$route.params.postid}`)
                .then((response) => {
                    console.log(response.data);
                    this.form.fill(response.data.post)
                })
        }
        ,
        computed: {
            getallcategory() {
                return this.$store.getters.getCategory
            }
        },
        methods: {
            updateImage(){
                let img = this.form.photo;
                if(img.length>100){
                    return  this.form.photo;
                }else{
                    return "uploadimage/"+this.form.photo;
                }

            },
            updatePost() {
                this.form.post(`/update/${this.$route.params.postid}`)
                    .then((res) => {
                        this.$router.push('/post-list');
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Updated post successfully!',
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
                        text: 'Size image is wrong!',
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
