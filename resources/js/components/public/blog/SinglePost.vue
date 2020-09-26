<template>
    <div>
        <div class="col-md-8">
            <div class="category-border-content">
                <div class="category-detail category">
                    <div class="category-img">
                        <img width="720" height="521" :src="`/uploadimage/${BlogById.photo}`" alt="">
                        <div class="category-overlay">
                        </div>
                    </div>
                    <div class="category-text read-more clearfix">
                        <a href="" v-if="BlogById.category" class="art">{{BlogById.category.cate_name}}</a>
                        <h4><a href="">{{BlogById.title}}</a></h4>
                        <span class="art">{{BlogById.created_at}}</span>
                        <p>  <span v-html="BlogById.description"></span></p>
                        <div class="read-more-more clearfix">
                            <div class="share-comment-section floatright">
                                <div class="share single-page">
                                    <span>share:</span>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-pinterest"></i></a>
                                    <a href=""><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="recent-post-content clearfix">
                             <h4>Related Blog</h4>
                            <div v-for="blog in getRelatedBlog " class="recent-post-single single-page">
                                <div class="recent-post-img single-page">
                                    <a href=""><img src="img/recent-1.jpg" alt=""></a>
                                </div>
                                <div class="recent-post-text single-page">
                                    <span>{{blog.create_at | timeformat()}}</span>
                                    <router-link :to="`/blog/${blog.id}`" href=""><p>{{blog.title}}</p></router-link>
                                </div>
                            </div>

                        </div>
                        <div class="user-comments">
                            <p><i class="fa fa-comments-o"></i><span>comments</span></p>
                             <div class="single-user-comment clearfix">
                                <div class="single-user-img">
                                    <a href=""><img src="img/single-user-2.jpg" alt=""></a>
                                </div>
                                <div class="single-user-comment-text">
                                    <h4><a href="">Robert Smith</a><span>01 jan, 2016</span></h4>
                                    <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu
                                        vulputate
                                        magna eros eu erat. Aliquam erat volutpat.</p>
                                </div>
                            </div>

                        </div>
                        <div class="reply-section">
                            <h4>Leave a Reply</h4>
                            <form action="#" method="post">
                                <input type="text" placeholder="Name">
                                <input type="email" placeholder="Email">
                                <div class="web-address"><input type="text" class="web-address" placeholder="Website">
                                </div>
                                <textarea placeholder="Comment"></textarea>
                                <input type="submit" value="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Sidebar/>
    </div>
</template>

<script>
    import Sidebar from "./Sidebar";

    export default {
        name: "SinglePost",
        components: {Sidebar},
        mounted() {
            this.$store.dispatch('getBlogById', this.$route.params.id)
            this.$store.dispatch('getRelatedBlog', this.$route.params.id)
        },
        computed: {
            BlogById() {
                return this.$store.getters.getBlog
            },
            getRelatedBlog(){
                return this.$store.getters.getRelatedBlog
            }
        },
    }

</script>

<style scoped>

</style>
