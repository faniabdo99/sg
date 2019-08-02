<template>
    <div class="hero-section">
        <div class="col-md-6 col-xs-12 col-sm-12">
            <h1>Get Your Brand Ready!</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto vitae repellat, aliquid ipsum at eaque vel inventore totam voluptatem! Quidem in est aut quisquam incidunt sapiente culpa magnam! Officia, architecto.</p>
            <a href="#">Contact Us</a>
        </div>
    </div>
</template>
<script>
export default {
    
}
</script>
<style scoped lang="scss">
@import "../assets/sass/vars.scss";
//Hero Section Styles Here
.hero-section{
    background-size: cover;
    height: 350px;
    padding: 100px 0 20px 5%;
    background: url('/icons/hero.png') center right no-repeat;
    background-size: contain;
    h1{
        font-size: 3.5em;
        color: $brand;
        margin-bottom: 25px;
    }
    p{
        color:$dark-gray;
        font-size:1.1em;
        line-height: 1.5em;
        margin-bottom: 25px;
    }
    a{
        background-color: $brand;
        padding:15px 20px;
        color:#fff;
        border-radius: 5px;
        display: block;
        width:30%;
        margin-right: auto;
        font-weight:bold;
        text-decoration: none;
        text-align: center;
    }
}
@media screen and (max-width: 768px) {
.hero-section{
    height: 280px;
    padding: 50px 5% 20px 5%;
    background: none;
    h1{
        font-size: 2em;
        text-align: center;
    }
    p{
        font-size:0.9em;
        line-height: 1.5em;
        margin-bottom: 25px;
        text-align: center;
    }
    a{
        padding:10px 15px;
        width:30%;
        margin-right: auto;
        margin-left: auto;
    }
}
}
</style>
