<template>
    <div class="doit-section">
        <div class="row">
            <div class="col-md-6 col-xs-12 col-sm-12">
                <img src="icons/startup.png" alt="Startup Icon Here">
            </div>
            <div class="col-md-6 col-xs-12 col-sm-12">
                <h2 class="wow slideInDown">Ready to Go ?</h2>
                <p class="wow slideInDown">With your creative visions and our artistic execution, your brand is bound to succeed!</p>
                <a class="wow zoomIn" v-smooth-scroll="{ duration: 1200, offset: -80 }" href="#contact"><i class="fas fa-rocket"></i> Get Started</a>
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
        border:2px solid #fff;
        transition: all ease 0.3s;
        &:hover{
            background-color: rgba(0,0,0,0);
            color:#fff;
            transition: all ease 0.3s;
        }
    }
}
@media screen and (max-width: 768px) {
.doit-section{
    padding: $section-padding;
    img{
        display: none;
    }
    h2{
        font-size: 1.6em;
        margin-bottom: 15px;
    }
    p{
        margin-bottom: 15px;
    }
    a{
        background-color: #fff;
        padding: 15px 25px;
        font-size: 1em;
        margin-top: 30px;
        width:80%;
    }
}
}
</style>
