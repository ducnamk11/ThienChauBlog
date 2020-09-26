<template>
    <div class="container-fluid">
        <div class="row">
            <section class="content col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Post</h3>
                        <router-link to="/add-post" class="btn btn-primary float-right " href="">Add</router-link>
                    </div>
                    <div class="card-body">
                        <div id="jsGrid1" class="jsgrid" style="position: relative; height: 100%; width: 100%;">
                            <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th width="5%" scope="col">#</th>
                                        <th width="20%" scope="col">Title</th>
                                        <th width="40%" scope="col">Description</th>
                                        <th width="15%" scope="col">Photo</th>
                                        <th width="10%" scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="(post , index ) in allpost">
                                        <th scope="row">{{index+1}}</th>
                                        <td>{{post.title}}</td>
                                        <td>{{ post.description| strippedContent(150,'...') }}</td>
                                        <td><img style="height:80px" :src="ourImage(post.photo)" alt=""></td>
                                        <td>
                                            <router-link :to="`/edit-post/${post.id}`">Edit</router-link>
                                            <a @click.prevent="deletePost(post.id)" href="">Delete</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </section>
        </div>

    </div>
</template>

<script>
    export default {
        name: "List",
        mounted() {
            this.$store.dispatch('allPost')
        },
        computed: {
            allpost() {
                return this.$store.getters.getAllPost
            },
            strippedContent() {
                let regex = /(<([^>]+)>)/ig;
                return this.comment.content.rendered.replace(regex, "");
            }

        },
        methods: {
            ourImage(img) {
                return "uploadimage/" + img;
            },
            deletePost(id) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios.get('/postdelete/' + id)
                            .then((res) => {
                                this.$store.dispatch('allPost')
                            })
                        Swal.fire(
                            {
                                title: 'Delete Post successfully!',
                                icon: 'success',
                                timer: 1000
                            }
                        )
                    }
                })


            }
        }
    }
</script>

<style scoped>

</style>
