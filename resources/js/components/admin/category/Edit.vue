<template>
    <div class="container mt-5">
        <div class="row">
            <form @submit.prevent="updateCategory()" class="col-md-12">
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
        data() {
            return {
                form: new Form({
                    cat_name: '',
                })
            }
        },
        mounted() {
            axios.get('/editcategory/' + this.$route.params.id)
                .then((res) => {
                    this.form.fill(res.data.category)
                })
        },
        methods: {
            updateCategory() {
                this.form.post(`/update-category/${this.$route.params.id}`)
                    .then((response) => {
                        this.$router.push('/category-list');

                    })
            }
        }

    }
</script>

<style scoped>

</style>
