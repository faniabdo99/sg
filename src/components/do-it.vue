<template>
    <div class="doit-section">
        <div class="row">
            <div class="col-md-6 col-xs-6 col-sm-6">
                <img src="/icons/startup.png" alt="Startup Icon Here">
            </div>
            <div class="col-md-6 col-xs-6 col-sm-6">
                <h2>Ready ? Go!</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, delectus!</p>
                <a href="#">Get Started</a>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "Doit"
}
</script>
<style scoped lang="scss">
@import "../assets/sass/vars.scss";
//Do it Section Styles Here
.doit-section{
    padding: $section-padding;
    background-color: $brand;
    position: relative;
    img{
        width: 200px;
        height: 200px;
        top: 0;
        left: 35%;
        display: block;
        margin: auto;
        position: absolute;
    }
    h2{
        color:#fff;
        font-size: 2em;
        margin-bottom: 25px;
    }
    p{
        color:#fff;
        margin-bottom: 25px;
    }
    a{
        background-color: #fff;
        padding: 15px 25px;
        border-radius: 5px;
        color: $brand;
        font-size: 1.2em;
        font-weight: bold;
        text-decoration: none;
        display: block;
        margin-top: 50px;
        width:30%;
        text-align: center;
    }
}
@media screen and (max-width: 768px) {

}
</style>
