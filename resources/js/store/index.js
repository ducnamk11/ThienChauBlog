export default {
    state: {
        //Admin
        categories: [],
        posts: [],
        countCategory: [],
        countPost: [],
        countComment: [],
        //PUBLIC
        blog:[],
        relatedBlog:[]
     },
    getters: {
        // PUBLIC
        getBlog(state){
            return state.blog
        },
        getRelatedBlog(state){
            return state.relatedBlog
        },
        //ADMIN
        getCategory(state) {
            return state.categories
        },
        getAllPost(state) {
            return state.posts
        },
        countCategory(state) {
            return state.countCategory
        },
        countPost(state) {
            return state.countPost
        },
        countComment(state) {
            return state.countComment
        },

    },
    actions: {
        //PUBLIC
        getBlogById(context, payload){
            axios.get('/blog/'+payload)
                .then((res)=>{
                     context.commit('singleBlog', res.data.blog)
                })
        },
        getRelatedBlog(context, payload){
            axios.get('/relate/'+payload)
                .then((res)=>{
                     context.commit('relatedBlog', res.data.relatedBlog)
                })
        },

        //ADNMIN
        allCategory(context) {
            axios.get('/category')
                .then((res) => {
                    context.commit('categories', res.data.categories)
                })
        },
        allPost(context) {
            axios.get('/post')
                .then((res) => {
                    context.commit('allpost', res.data.posts)
                })
        },
        countcategory(context) {
            axios.get('/category')
                .then((res) => {
                    context.commit('countCategory', res.data.countCategory)
                })
        },
        countpost(context) {
            axios.get('/post')
                .then((res) => {
                    context.commit('countPost', res.data.countPost)
                })
        },
        countcomment(context) {
            axios.get('/comment')
                .then((res) => {
                    context.commit('countComment', res.data.countComment)
                })
        },

    },
    mutations: {
        categories(state, data) {
            return state.categories = data
        },
        allpost(state, payload) {
            return state.posts = payload
        },
        countCategory(state, payload) {
            return state.countCategory = payload
        },
        countPost(state, payload) {
            return state.countPost = payload
        },
        countComment(state, payload) {
            return state.countComment = payload
        },
        singleBlog(state, payload) {
            return state.blog = payload
        },
        relatedBlog(state, payload) {
            return state.relatedBlog = payload
        }

    }
}
