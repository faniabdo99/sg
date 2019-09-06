<template>
    <section id="contact" class="contact-section">
        <div class="row">
            <h2>Contact Us</h2>
            <p>24/7 , Always at Your Service</p>
            <div class="col-md-4 col-xs-12 col-sm-12">
                <p class="section-description"><b>Semicolon Group</b> Provide Modern Soulotions All Around The World , But For Those Who Like The Face-to-Face Prespetive , You Can Find Us in The Adresses Below</p>
                <ul>
                    <li><i class="fas fa-clock"></i> 24 Hours , 7 Days</li>
                    <li><i class="fas fa-map-marker-alt"></i> 6 Of October City , Egypt</li>
                    <li><i class="fas fa-map-marker-alt"></i> Birute , Lebanone</li>
                    <li><i class="fas fa-map-marker-alt"></i> Basrah , Iraq</li>
                    <li><i class="fas fa-envelope"></i> sales@semicolongroup.com </li>
                    <li><i class="fas fa-phone"></i> +2200 115 1411 867</li>
                </ul>
            </div>
            <div class="col-md-8 col-xs-12 col-sm-12">
                <form action="javascript:;" method="post">
                    <div class="input-group"><i class="fas fa-user"></i><input v-model="SenderName" type="text" name="name" placeholder="Full Name"></div>
                    <div class="input-group"><i class="fas fa-phone"></i><input v-model="SenderContactMethod" type="text" name="email" placeholder="Contact Information (Phone Number Or Email)"></div>
                    <div class="input-group"><i class="fas fa-envelope"></i><textarea v-model="SenderMessage" name="message" placeholder="Message" cols="30" rows="10"></textarea></div>
                    <button @click="SendMessage" type="submit" name="send">Send</button>
                    <div id="response" v-html="ActionResponse"></div>
                </form>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    name: "Contact",
    data: function(){
        return {
            SenderName: "",
            SenderContactMethod: "",
            SenderMessage: "",
            ActionResponse: ""
        }
    },
    methods: {
        SendMessage : function(){
            var SendButton = document.querySelector('button[type="submit"]');
            //SendButton Minpulations
            var that = this;
            //Make XHR Request Here to contact API and recieve response
            let xhr = new XMLHttpRequest(); // the constructor has no arguments
            xhr.open('GET', '/apis/contact.php?ContactSection='+'contact'+'&SenderName='+that.SenderName+'&SenderContactMethod='+that.SenderContactMethod+'&SenderMessage='+that.SenderMessage);
            xhr.send();
            xhr.onreadystatechange = function() {
              if(xhr.readyState == 4){
                  SendButton.innerHTML = "Send";
                  SendButton.classList.remove('sending');
                  that.ActionResponse = xhr.response;
              }
            };


        }
    }
}
</script>

<style scoped lang="scss">
@import "../assets/sass/vars.scss";
//Contact Section Styles Here
#response{
    text-align:center;
    font-weight:bold;
}
.form-response{
    font-weight: bold;
    text-align: center;
    &.danger{
        color: #a51f1f;
    }
    &.success{
        color: #22c722;
    }
}

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
        input , textarea , button{
            width: 100%;
            padding:15px 15px 15px 50px;
            border-radius: 5px;
            background-color:$light-gray;
            border:none;
            margin-bottom:20px;
            box-sizing: border-box;
        }
        button[type="submit"]{
            width: 100%;
            background-color:$brand;
            color:#fff;
            font-weight: bold;
            font-size: 1.3em;
            text-align:center;
            padding: 15px;
            outline:none;
            &.sending{
                animation: SendingMessage 1s infinite;
            }
            &.failed{
                background-color:red;
            }
        }
    }
    @keyframes SendingMessage{
        0%{
            background-color: $brand;
        }
        50%{
            background-color: #137c13;
        }
        100%{
            background-color: $brand;
        }
    }
}
@media screen and (max-width: 768px) {
.contact-section{
    padding: $section-padding;
    h2 {
        font-size: 1.5em;
    }
    ul{
        li{
            margin-bottom: 25px;
        }
    }


    form{
        width:100%;
        .input-group{
            position: relative;
        }
        input , textarea{
            box-sizing: border-box;
        }
        input[type="submit"]{
         text-align: center;
        }
    }
}
}
</style>
