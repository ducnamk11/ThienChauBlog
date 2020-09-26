<template>
    <div>
        <div class="col-md-8">
            <div v-for="post in blogpost" class="video-area-border-content section-padding">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="video-area-content-detail">
                            <div class="category-img">
                                <img style="height:245px;  width:338px" :src="ourImage(post.photo)" alt="">
                                <div class="category-overlay">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 fix col-sm-6">
                        <div class="video-content-text">
                            <a v-if="post.category" href="" class="art">{{post.category.cat_name}}</a>
                            <h4><router-link :to="`/blog/${post.id}`" href="">{{post.title}}</router-link></h4>
                            <span class="art">12 jan, 2016</span>
                            <p>{{post.description | strippedContent(150,'...')}}</p>
                            <div class="category-link"><router-link :to="`/blog/${post.id}`" href="">read more</router-link></div>
                            <div class="share-comment-section">
                                <div class="comment">
                                    <i class="fa fa-heart-o"><span>25</span></i>
                                    <i class="fa fa-comment-o"><span>19</span></i>
                                </div>
                                <div class="share">
                                    <span>share:</span>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-pinterest"></i></a>
                                    <a href=""><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Sidebar/>
    </div>
</template>

<script>
    import Sidebar from "./blog/Sidebar";

    export default {
        name: "PublicHome",
        components: {Sidebar},
        mounted() {
            this.$store.dispatch('allPost')
        },
        computed: {
            blogpost() {
                return this.$store.getters.getAllPost
            }
        },
        methods: {
            ourImage(img) {
                return "uploadimage/" + img;
            },
        }
    }
</script>

<style scoped>

</style>
