import Products from './components/pages/Products.vue';
import Page2 from './components/pages/SignIn.vue';
import Product from './components/pages/Product.vue';
import SignIn from "./components/pages/SignIn";
import Shipping from "./components/pages/Shipping"
import ReviewOrder from "./components/pages/ReviewOrder"
export const routes = [
    { path: '/static/products', component: Products, props:{text:'',category:'NONE',subCategory:'NONE',brand:'NONE'},name: 'Products' },
    { path: '/static/signin', component: SignIn, name: 'SignIn', },
    { path: '/static/shipping', component: Shipping, props:true, name: 'Shipping'},
    { path: '/static/review', component: ReviewOrder, props:true, name: 'Review'},
    { path: '/static/product/:id', component: Product, props:true, name: 'Product'},

];