<template>
    <div>
        <div style="display: flex;">
            <div style="width: 49%" class="vForm">
                <span><b>Checkout:&nbsp</b>Shipping Details</span>
                <div>
                    <div>Country</div>
                    <div>
                        <select v-model="country" id="country">
                            <option v-for="country in countries" v-bind:value="country.name" :id="country.id">{{country.name}}</option>
                        </select>
                    </div>
                </div>
                <div>
                    <div style="display: inline-block;width:49%;">
                        <div>First Name</div>
                        <div><input name="firstName"/></div>
                    </div>
                    <div style="display: inline-block;width:49%;">
                        <div>Last Name</div>
                        <div><input name="lastName"/></div>
                    </div>
                </div>
            </div>
            <div style="margin-left: auto;">
                <div>
                    <span>Subtotal: </span><span id="subtotal">{{price}}</span>
                </div>
                <div>
                    <div>Continue to review your order</div>
                    <div><button v-on:click="cont" id="continueButton">Continue</button></div>
                </div>

            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {variant:{}};
        },created() {
            this.variant=JSON.parse(localStorage.getItem('current'));
        },
        methods:{
            cont(){
                this.$router.push({ name: 'Review' });
            }

        },
        watch:{
            country:function(newVal,oldVal) {
                localStorage.setItem("country",country.value);
            }
        },
        computed:{
            price(){
                return parseFloat(this.variant.price);
            },
            countries(){
                var countries=
                    [
                        {"name":"India","id":1},
                        {"name":"China","id":2},
                        {"name":"USA","id":3},
                        {"name":"UK","id":4},
                        {"name":"Germany","id":5},
                    ];
                return countries;

            }
        },
        props:['country'],
    }
</script>