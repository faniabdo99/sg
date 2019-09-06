<template>
<div>

    <div class="navbar-bg"></div>
    <section class="free-consult">
        <div class="row">
            <h1>Let's Talk</h1>
            <p>in This page , we will ask you a series of questions to help us understand more about your bussnies , and within
                 24 hours we will send you an email to explain what you may need to get your job done along with our offers to solve uour problems.
            </p>
            <form  action="#" method="post">
                <label for="brand-name">What is your project kind ?</label>
                <input v-model="ProjectType" type="text" name="brand-name" placeholder="website , mobile application ... etc">
                <label for="username">Your Name</label>
                <input v-model="SenderName" type="text" name="username" placeholder="Type your name here so we can contact you back!">
                <label for="contact">Contact Method</label>
                <input v-model="SenderContactMethod" type="text" name="contact" placeholder="Your email or phone number so we can reply">
                <label for="message">Message</label>
                <textarea v-model="SenderMessage" name="message" rows="10" placeholder="Any additional information about your request"></textarea>
                <button type="submit" @click="SendMessage" >Send</button>
                <p>Notice: One of <b>Semicolon Group</b> Represents Will Contact You in Less Than 24 Hours.</p>
                <div id="response" v-html="ActionResponse"></div>
            </form>
        </div>
    </section>

</div>
</template>

<script>
export default {
  name: 'RequestService',
  data: function(){
      return {
          ProjectType: "",
          SenderName: "",
          SenderContactMethod: "",
          SenderMessage: "",
          ActionResponse: ""
      }
  },
  methods: {
      SendMessage : function(){
          var that = this;
          //Make XHR Request Here to contact API and recieve response
          let xhr = new XMLHttpRequest(); // the constructor has no arguments
          xhr.open('GET', '/apis/contact.php?ContactSection='+'request'+'&SenderName='+that.SenderName+'&SenderContactMethod='+that.SenderContactMethod+'&SenderMessage='+that.SenderMessage+'&ProjectType='+that.ProjectType);
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

<style lang="scss">
@import "../../assets/sass/vars";
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

.navbar-bg{
    height: 100px;
    background-color: $brand;
}
.free-consult{
    padding: $section-padding;
    h1{
        color:$brand;
        font-size: 2.5em;
        margin-bottom: 15px;
    }
    p{
        color:$dark-gray;
        font-size:1.1em;
        margin-bottom: 50px;
    }
    form{
        border-radius:4px;
        box-sizing: border-box;
        width:75%;
        margin-right: auto;
        label{
            display: block;
            font-weight: bold;
            font-size: 1.1em;
            margin-bottom: 5px;

        }
        input , textarea , button{
            box-sizing: border-box;
            width: 100%;
            padding: 15px;
            border-radius: 4px;
            border:none;
            display: block;
            background-color:$light-gray;
            margin-bottom: 15px;
        }
        button[type="submit"]{
            background-color:$brand;
            color:#fff;
            font-weight: bold;
            font-size: 1.2em;
        }
    }
}
</style>
