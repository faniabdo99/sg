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
                <label for="brand-name">What is your company name ?</label>
                <input type="text" name="brand-name" placeholder="Please enter your company name here">
                <label for="bussnies-type">What your company do ?</label>
                <input type="text" name="bussnies-type" placeholder="Write the company type of bussnies eg. Resturant,Clothes Factory">
                <label for="username">Your Name</label>
                <input type="text" name="username" placeholder="Type your name here so we can contact you back!">
                <label for="contact">Contact Method</label>
                <input type="text" name="contact" placeholder="Your email or phone number so we can reply">
                <label for="message">Message</label>
                <textarea name="message" rows="10" placeholder="Any additional information about your request"></textarea>
                <input type="submit" value="Send">
                <p>Notice: One of <b>Semicolon Group</b> Represnters Will Contct You in Less That 24 Hours.</p>
            </form>
        </div>
    </section>

</div>
</template>

<script>
export default {
  name: 'RequestService'
}
</script>

<style lang="scss">
@import "../../assets/sass/vars";
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
        input , textarea{
            box-sizing: border-box;
            width: 100%;
            padding: 15px;
            border-radius: 4px;
            border:none;
            display: block;
            background-color:$light-gray;
            margin-bottom: 15px;
        }
        input[type="submit"]{
            background-color:$brand;
            color:#fff;
            font-weight: bold;
            font-size: 1.2em;
        }
    }
}
</style>
