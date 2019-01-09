<template>
    <div>
        <div style="display: flex;">
            <div style="width: 49%" class="vForm">
                <span><b>Checkout:</b>Shipping Address</span>
                <div>
                    <div>Country</div>
                    <div>
                        <select v-model="country" id="country">
                            <option v-for="country in countries" v-bind:value="country.Name" :id="country.id">{{country.Name}}</option>
                        </select>
                    </div>
                </div>
                <div>
                    <div style="display: inline-block">
                        <div>First Name</div>
                        <div><input name="firstName"/></div>
                    </div>
                    <div style="display: inline-block">
                        <div>Last Name</div>
                        <div><input name="lastName"/></div>
                    </div>
                </div>
                <div>
                    <div>Street Address</div>
                    <div><input name="street"/></div>
                </div>
                <div>
                    <div style="display: inline-block">
                        <div>City</div>
                        <div><input name="city"/></div>
                    </div>
                    <div style="display: inline-block">
                        <div>State</div>
                        <div><input name="state"/></div>
                    </div>
                </div>

                <div>
                    <div>Zip</div>
                    <div><input name="zip"/></div>
                </div>

                <div>
                    <div>Phone</div>
                    <div><input name="phone"/></div>
                </div>

                <div>
                    <div>Email Address</div>
                    <div><input name="email"/></div>
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
                        {"Name":"India","id":1},
                        {"Name":"China","id":2},
                        {"Name":"USA","id":3},
                        {"Name":"UK","id":4},
                        {"Name":"Germany","id":5},
                    ];
                return countries;

            }
        },
        props:['country'],
    }
</script>