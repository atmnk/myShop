<template>
    <div>
        <h4>Products</h4>
        <div class="content">
            <div>

                <span>Category </span><select v-model="category" id="filter-category">
                    <option value="NONE">All</option>
                    <option v-for="cat in categories" v-bind:value="cat.id">{{cat.Name}}</option>
                </select>
                <span>Sub Category </span><select v-model="subCategory" id="filter-subCategory">
                    <option value="NONE">All</option>
                    <option v-for="scat in subCategories" v-bind:value="scat.id">{{scat.Name}}</option>
                </select>
                <span>Brand </span><select v-model="brand" id="filter-brand">
                    <option value="NONE">All</option>
                    <option v-for="brnd in brands" v-bind:value="brnd.id">{{brnd.Name}}</option>
                </select>
                <span>Search</span><input type="text" v-model="text" id="filter-text"/>
            </div>
            <Product v-for="product in items" v-bind="product" :key="product.id"></Product>
        </div>
    </div>
</template>
<script>
    import Product from '../cards/Product'
    export default {
        data(){
            return {items:[],categories:[],subCategories:[],brands:[]};
        },
        methods:{
            read(){
                var filter={}
                if(!(this.category=='NONE')) {
                    filter['category']=this.category;
                }
                if(!(this.subCategory=='NONE')) {
                    filter['sub_category']=this.subCategory;
                }
                if(!(this.brand=='NONE')) {
                    filter['brand']=this.brand;
                }
                filter['text']=this.text;
                window.axios.post('/api/product/search',filter).then(({data})=>{
                    this.items=data;
                });
            },
            readCat(){
                window.axios.get('/api/category').then(({data})=>{
                    this.categories=data;
                });
            },
            readBrand(){
                window.axios.get('/api/brand').then(({data})=>{
                    this.brands=data;
                });
            },
            readSubCat(){
                window.axios.get('/api/subcategory/for/'+this.category).then(({data})=>{
                    this.subCategories=data;
                });
            }
        },
        watch:{
            text:function(newVal,oldVal) {
                this.read();
            },
            category:function(newVal,oldVal) {
                this.read();
                if(!(this.category=='NONE')){
                    this.readSubCat();
                }
            },subCategory:function(newVal,oldVal) {
                this.read();
            },brand:function(newVal,oldVal) {
                this.read();
            }
        },
        created() {
            this.read();
            this.readCat();
            this.readBrand();
        },
        props:['text','category','subCategory','brand'],
        components:{
            Product
        }
    }
</script>