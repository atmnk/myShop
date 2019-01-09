<template>
    <div>
        <h3>Review your order</h3>
        <div>
            <div style="width: 70%; display: inline-block;">
                <div id="shipping_address">
                    <div style="width: 49%">
                        Shipping Address
                    </div>
                    <div style="width: 49%">
                        Billing Address
                    </div>
                </div>

            </div>
            <div style="width: 29%; display: inline-block;">
                <div><button v-on:click="cont" id="place">Place Order</button></div>
                <div style="width: 100%;">Order Summary</div>
                <div style="width: 100%; display: flex;"><span>Items</span><span id="items" style="margin-left: auto;">{{format(items)}}</span></div>
                <div style="width: 100%; display: flex;"><span>Shipping & Handling</span><span id="shipping" style="margin-left: auto;">{{format(ship)}}</span></div>
                <div style="width: 100%; display: flex;"><span>Gift Packing</span><span id="gift" style="margin-left: auto;">{{format(gift)}}</span></div>
                <hr/>
                <div style="width: 100%; display: flex;"><span>Total Before Tax</span><span id="tbt" style="margin-left: auto;">{{format(tbtax)}}</span></div>
                <div style="width: 100%; display: flex;"><span>Estimated Tax to be collected</span><span id="tax" style="margin-left: auto;">{{format(tax)}}</span></div>
                <hr/>
                <div style="width: 100%; display: flex;"><span>Order Total</span><span id="total" style="margin-left: auto;">{{format(total)}}</span></div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        computed:{
            items(){
              return parseFloat(this.variant.price);
            },
            ship(){
                return 4.05;
            },
            gift(){
                return this.items*0.01;
            },
            tbtax(){
                return this.gift+this.items+this.ship;
            },
            tax(){
                if(this.country=='India'){
                    return this.tbtax*0.05;
                } else{
                    return this.tbtax*0.10;
                }

            },
            total(){
                return this.tbtax+this.tax;
            }
        },
        methods:{
            format(number){
                return number.toFixed(2);
            }
            ,cont(){
                localStorage.clear();
                this.$router.push({ name: 'Products' });
            }
        },
        data() {
            return {variant:{},country:1};
        },created() {
            this.variant=JSON.parse(localStorage.getItem('current'));
            this.country=localStorage.getItem('country');
        },
    }
</script>