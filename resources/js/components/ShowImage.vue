<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" >
                <h3>Testing instructions:</h3>
                <div>
                    <span>
                        Stand straight for the duration of the test and look straight at the screen.
                        <br>
                        Press play, after countdown you will be shown a picture for a split second.
                        <br>
                        <h4>remaining tests: {{this.products.length}}</h4>
                    </span>
                </div>
                <div class="card dark mb-5" v-if="isVisible">
                    <div class="card-header d-flex justify-content-center">Product ID: {{products[0].id}}</div>
                    <div style="min-height: 380px">
                        <div class="d-flex justify-content-center align-items-center" v-if="imageId === products[0].id">
                    </div>
                    <div class="card-body" v-if="countDown == 0">
                        <div  id="productImage"  v-if="imageId === products[0].id" class="circular" v-bind:style="{ backgroundImage: 'http://142.93.168.134/storage/' + products[0].img_path + ')' }"></div>
                    </div>
                    </div>
                    <div class="card-footer d-flex justify-content-center ">
                        <i @click="showImage(products[0].id)" class="fas fa-play-circle"></i>
                    </div>
                </div>
                <h2 v-else>Test Finish </h2>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['productsDb'],
        name: "ShowImage",
        data: () => ({
            isVisible: true,
            products: [],
            imageId: 0,
            countDown : 5,
            testedID: 0,
        }),
        mounted() {
            this.products = JSON.parse(this.productsDb);
            console.log(this.products)
            console.log('http://142.93.168.134/storage/' + this.products[0].img_path)

        },
        methods: {
            showImage(id){
                this.imageId = id;
                this.testedID = id;
                this.countDownTimer();
            },
            countDownTimer() {
                if(this.countDown > -2) {
                    setTimeout(() => {
                        this.countDown -= 1;
                        this.countDownTimer()
                    }, 1000)
                }
                if (this.countDown == -2){
                    this.countDown = 5;
                    this.removeTestedProduct();
                }
            },
            removeTestedProduct(){
                if (this.products.length == 1){
                       this.isVisible = false;
                       this.products = '';
                }else {
                    console.log(this.products.length);
                    for(let i = 0; i < this.products.length; i++) {
                        if(this.products[i].id == this.testedID) {
                            this.products.splice(i, 1);
                            break;
                        }
                    }
                }
            }
        },
    }
</script>

<style scoped>
    .container{
        font-family: 'Inconsolata', monospace;
    }
    #productImage{
        height: 300px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .fa-play-circle{
        font-size: 40px;
    }
    .fa-play-circle:hover{
        cursor: pointer;
    }
</style>
