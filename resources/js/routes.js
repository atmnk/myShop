import Products from './components/pages/Products.vue';
import Product from './components/pages/Product.vue';
import Shipping from "./components/pages/Shipping"
import ReviewOrder from "./components/pages/ReviewOrder"
export const routes = [
    { path: '/static/products', component: Products, props:{text:'',category:'NONE',subCategory:'NONE',brand:'NONE'},name: 'Products' },
    { path: '/static/shipping', component: Shipping, props:true, name: 'Shipping'},
    { path: '/static/review', component: ReviewOrder, props:true, name: 'Review'},
    { path: '/static/product/:id', component: Product, props:true, name: 'Product'},

];