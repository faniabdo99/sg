<template>
 <footer>
     <div class="row">
        <div class="col-md-4 col-xs-12 col-sm-12">
            <h2>About Us</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas, repellat accusamus exercitationem, ipsa optio recusandae ipsam delectus, minus voluptates neque officia nesciunt consectetur. Impedit, voluptates!</p>
        </div>
        <div class="col-md-4 col-xs-12 col-sm-12">
            <ul>
                <li><a href="#">Contact US</a></li>
                <li><a href="#">Contact US</a></li>
                <li><a href="#">Contact US</a></li>
                <li><a href="#">Contact US</a></li>
            </ul>
        </div>
        <div class="col-md-4 col-xs-12 col-sm-12">
        <h2>Follow US</h2>
            <a href="#">facebook</a>
        </div>
     </div>
 </footer>
</template>

<script>
export default {
  name: 'FooterComp',
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
@import "../assets/sass/vars.scss";
//The Portfolio Container
footer{
    background-color:#1d1818;
    padding: $section-padding-sm;
}
@media screen and (max-width: 768px) {

}
</style>
