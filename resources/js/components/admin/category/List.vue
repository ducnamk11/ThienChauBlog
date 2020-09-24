<template>
    <div class="container-fluid">
        <div class="row">
            <section class="content col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Category</h3>
                        <router-link to="/add-category" class="btn btn-primary float-right " href="">Add</router-link>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="jsGrid1" class="jsgrid" style="position: relative; height: 100%; width: 100%;">
                            <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th width="5%" scope="col">#</th>
                                        <th width="30%" scope="col">Title</th>
                                        <th width="40%" scope="col">Description</th>
                                        <th width="15%" scope="col">Photo</th>
                                        <th width="10%" scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>
                                            <a href="">Edit</a>
                                            <a href="">Delete</a>
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

    }
</script>

<style scoped>

</style>
