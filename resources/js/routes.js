import AdminHome from './components/admin/AdminHome'
import CategoryList from "./components/admin/category/List";
import AddCategory from "./components/admin/category/New";
import EditCategory from "./components/admin/category/Edit";
import PostList from "./components/admin/post/List";
import AddPost from "./components/admin/post/New";
import EditPost from "./components/admin/post/Edit";

//FRONT END
import PublicHome from "./components/public/PublicHome";
// import BlogPost from "./components/public/blog/BlogPost";
// import SingleBlog from "./components/public/blog/SingleBlog";
// import ListPostbyCategorys from "./components/public/blog/ListPostbyCategory";

export const routes = [
    //BACKEND
    {path: '/', component: AdminHome},
    //FRONT ROUTER
    {path: '/', component: PublicHome},
    // {path: '/blog', component: BlogPost},
    // {path: '/blog/:id', component: SingleBlog},
    // {path: '/category/:id', component: ListPostbyCategorys},


    // CATEGORY
    {path: '/category-list', component: CategoryList},
    {path: '/add-category', component: AddCategory},
    {path: '/edit-category/:categoryid', component: EditCategory},
    //POST
    {path: '/post-list', component: PostList},
    {path: '/add-post', component: AddPost},
    {path: '/edit-post/:postid', component: EditPost},


]
