<template>
    <div class="howContainer">
        <h2>Here's how it works</h2>
        <div id="exp2" class="d-flex justify-content-around align-items-center">
            <div>
                <i class="fas fa-sign-in-alt"></i>
                <h4>
                    <span style="color: #d6d6d6;font-size: 2rem;">1.</span>
                    Register
                </h4>
                <p>Easy registration, in just 2 minutes and no obligations</p>
            </div>
            <div>
                <i class="fas fa-plus-square"></i>
                <h4>
                    <span style="color: #d6d6d6;font-size: 2rem;">2.</span>
                    Add all your products
                </h4>
                <p>Through your admin panel you can add images of your product to be tested for free.</p>
            </div>
            <div>
                <i class="fas fa-check"></i>
                <h4>
                    <span style="color: #d6d6d6;font-size: 2rem;">3.</span>
                    Receiving feedback
                </h4>
                <p>Our testers will use AI to give you feedback on your product.</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "HowItWorks"
    }
</script>

<style scoped>
    div.howContainer{
        margin-top: 130px;
        margin-bottom: 70px;
        background: #f2f7fc;
        padding: 30px;
    }
    h2{
        padding: 61px;
        text-align: center;
        font-size: 2rem;
        font-weight: 700;
    }
    div#exp2{
        padding:20px;
        margin-bottom: 70px;
    }
    h4{
        text-align: center;
        width: 100%;
    }
    p{
        padding: 5px 85px;
        text-align:center;
    }
    i{
        color:#2a69dd;
        font-size: 48px;
        text-align: center;
        width: 100%;
    }
    @media only screen and (max-width: 994px) {
        .justify-content-around{
            flex-wrap: wrap;
        }
        div.howContainer{
            margin-top: 50px;
            margin-bottom: 30px;
            background: #f2f7fc;
            padding: 30px;
        }
        h2{
            padding: 61px;
            text-align: center;
            font-size: 2rem;
            font-weight: 700;
        }
        div#exp2{
            padding:3px;
            margin-bottom: 70px;
        }
        p{
            padding: 3px;
        }
    }
</style>
