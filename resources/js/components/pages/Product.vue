<template>
    <div style="width: 100%; box-sizing: border-box;">
        <div class="product">
            <h4>{{obj.Name}}</h4>
            <div class="product-gallery">
                <span>Size </span>
                <select v-model="sz" id="size">
                    <option v-for="size in obj.sizes" v-bind:value="size.id">{{size.Name}}</option>
                </select>
                <span>Color </span>
                <select v-model="cl" id="color">
                    <option v-for="color in obj.colors" v-bind:value="color.id">{{color.Name}}</option>
                </select>
                <span>Price </span><span id ="price">{{price}}</span>
                <button :style="buyAvailable" v-on:click="buy" id="buyButton">Buy Now</button>
                <div><img src="/img/1/1.jpeg" width="100%"></div>
            </div>

        </div>
    </div>
</template>
<script>
    export default {
        computed:{
          price(){
              return this.currentVariant.price;
          },
            buyAvailable(){
                if(this.currentVariant.id){
                    return "display:inline;";
                }
                return "display:none;"
            }
        },
        data(){
            return {obj:{},currentVariant:{}};
        },
        methods:{
            buy(){
                localStorage.setItem('current',JSON.stringify(this.currentVariant));
                this.$router.push({ name: 'Shipping' })

            },
            read(){
                window.axios.get('/api/product/'+this.id).then(({data})=>{
                    this.obj=data;
                });
            },
            readVariant() {
                if (this.sz && this.cl) {
                    window.axios.get('/api/variant/search/' + this.obj.id + '/' + this.sz + '/' + this.cl).then(({data}) => {
                        this.currentVariant = data;
                    });
                }
            }
        },
        watch:{
            id:function(){
                this.read();
            },
            sz:function(){
                this.readVariant();
            },
            cl:function(){
                this.readVariant();
            },
        },
        created() {
            this.read();
        },
        props:['id','sz','cl'],
        components:{

        }
    }
</script>