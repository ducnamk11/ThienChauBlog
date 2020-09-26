<template>
    <div class="container mt-5">
        <div class="row">
            <form @submit.prevent="addCategory" class="col-md-8">
                <div class="form-group">
                    <label class="mb-3" for="exampleInputEmail1">Category Name</label>
                    <input v-model="form.cat_name" name="cat_name" type="text"
                           class="form-control" id="exampleInputEmail1"
                           aria-describedby="emailHelp"
                           placeholder="Enter Category"
                           :class="{ 'is-invalid': form.errors.has('cat_name') }">
                    <has-error :form="form" field="cat_name"></has-error>
                </div>
                <button type="submit" class="btn btn-primary  ">Save</button>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        name: "New",
        data() {
            return {
                form: new Form({
                    cat_name: '',

                })
            }
        },
        methods: {
            addCategory() {
                this.form.post('/add-category')
                    .then((response) => {
                        this.$router.push('/category-list');
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Add category successfully!',
                             timer: 1000
                        })
                    })
            }
        }
    }
</script>

<style scoped>

</style>
