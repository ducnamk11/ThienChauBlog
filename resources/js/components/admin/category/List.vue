<template>
    <div class="container">
        <div class="row">
            <section class="content col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Category</h3>
                        <router-link to="/add-category" class="btn btn-primary float-right " href="">Add</router-link>
                    </div>
                    <div class="card-body">
                        <div id="jsGrid1" class="jsgrid" style="position: relative; height: 100%; width: 100%;">
                            <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th width="5%" scope="col">#</th>
                                        <th width="30%" scope="col">Description</th>
                                        <th width="30%" scope="col">Date</th>
                                        <th width="10%" scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="(cat, index) in getallCategory">
                                        <th scope="row">{{index+1}}</th>
                                        <td>{{cat.cat_name}}</td>
                                        <td>{{cat.updated_at | timeformat}}</td>
                                        <td>
                                            <router-link :to="`/edit-category/${cat.id}`" href="">Edit</router-link>
                                            <a href="" @click.prevent="deleteCategory(cat.id)">Delete</a>
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
            this.$store.dispatch('allCategory')
        },
        computed: {
            getallCategory() {
                return this.$store.getters.getCategory;
            }
        },
        methods: {
            deleteCategory(id) {


                Swal.fire({
                    title: 'Are you sure delete this?',
                     icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios.get('/category/' + id)
                            .then((res) => {
                                this.$store.dispatch('allCategory')
                            })
                        Swal.fire(
                            {
                                title: 'Delete Category successfully!',
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
