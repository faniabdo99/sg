<template>
    <div class="contact-section">
        <div class="row">
            <h2>Contact Us</h2>
            <p>24/7 , Always at Your Service</p>
            <div class="col-md-4 col-xs-12 col-sm-12">
                <p class="section-description">We Provide our services all around the glob , yet we have 3 main offices based in this countries , You're always welcome to visit us at any time!</p>
                <ul>
                    <li><i class="fas fa-clock"></i> 24 Hours , 7 Days</li>
                    <li><i class="fas fa-map-marker"></i> 6 Of October City , Egypt</li>
                    <li><i class="fas fa-map-marker"></i> Birute , Lebanone</li>
                    <li><i class="fas fa-map-marker"></i> Basrah , Iraq</li>
                    <li><i class="fas fa-envelope"></i> sales@semicolongroup.com </li>
                    <li><i class="fas fa-phone"></i> +2200 115 1411 867</li>
                </ul>
            </div>
            <div class="col-md-8 col-xs-12 col-sm-12">
                <form action="#" method="post">
                    <div class="input-group"><i class="fas fa-user"></i><input type="text" name="name" placeholder="Enter Your Name"></div>
                     <div class="input-group"><i class="fas fa-phone"></i><input type="text" name="email" placeholder="Phone Number Or Email"></div>
                     <div class="input-group"><i class="fas fa-envelope"></i><textarea name="message" placeholder="Surprise us !" cols="30" rows="10"></textarea></div>
                    <input type="submit" value="Send" name="send">
                </form>
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
//Contact Section Styles Here
.contact-section{
    padding: $section-padding;
    h2 {
        font-size: 2em;
        margin-bottom: 25px;
        text-align: center;
    }
    p {
        text-align: center;
        color: $dark-gray;
        margin-bottom: 30px;
        &.section-description{
            text-align: left;
            line-height: 1.5;
        }
    }
    ul{
        li{
            margin-bottom: 40px;
            font-weight: bold;
            i{
                color:$brand;
                margin-right: 10px;
            }
        }
    }


    form{
        width:80%;
        margin: 0 auto;
        .input-group{
            position: relative;
            i{
                box-sizing: border-box;
                position: absolute;
                top:9px;
                left:10px;
                background-color: $brand;
                color:#fff;
                height: 30px;
                width:30px;
                border-radius: 50%;
                font-size: 12px;
                padding:10px 0 0 9px;
            }
        }
        input , textarea{
            width: 100%;
            padding:15px 15px 15px 50px;
            border-radius: 5px;
            background-color:$light-gray;
            border:none;
            margin-bottom:20px;
        }
        input[type="submit"]{
            background-color:$brand;
            color:#fff;
            font-weight: bold;
            font-size: 1.3em;
        }
    }
}
@media screen and (max-width: 768px) {

}
</style>
