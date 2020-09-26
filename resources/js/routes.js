import CategoryList from "./components/admin/category/List";
import AddCategory from "./components/admin/category/New";
import EditCategory from "./components/admin/category/Edit";
import PostList from "./components/admin/post/List";
import AddPost from "./components/admin/post/New";
import EditPost from "./components/admin/post/Edit";
//FRONT END
import PublicHome from "./components/public/PublicHome";
import SinglePost from "./components/public/blog/SinglePost";
// import ListPostbyCategorys from "./components/public/blog/ListPostbyCategory";

export const routes = [

    //FRONT ROUTER
    {path: '/', component: PublicHome},
    {path: '/blog/:id', component: SinglePost},
    // {path: '/category/:id', component: ListPostbyCategorys},


    //BACKEND
    // {path: '/', component: AdminHome},
    // CATEGORY
    {path: '/category-list', component: CategoryList},
    {path: '/add-category', component: AddCategory},
    {path: '/edit-category/:id', component: EditCategory},
    //POST
    {path: '/post-list', component: PostList},
    {path: '/add-post', component: AddPost},
    {path: '/edit-post/:postid', component: EditPost},


]
