<template>
      <nav :scroll="navBgOnScroll">
          <div class="brand-name">
                <div><img src="/icons/logo.png" alt="Logo" title="Semicolon Group" /></div>
                <div><b>Semicolon Group</b></div>
          </div>
          <div class="navbar-mobile-toggle">
             <a href=""><img @click.prevent="ToggleNavbar()" src="/icons/bars.png" alt="Toggle Menu List"></a>
          </div>
          <ul class="links-list">
              <li><a href="#">Home</a></li>
              <li><a href="#">Portfolio</a></li>
              <li><a href="#">Team</a></li>
              <li><a href="#">Contact Us</a></li>
              <li class="important-link"><a href="#">Request Someting</a></li>
          </ul>
      </nav>
</template>

<script>
export default {
  name: 'Navbar',
  methods:{
      ToggleNavbar : function(){
          let navbarList = document.querySelector(".links-list");
          if(navbarList.classList.contains('active')){
              navbarList.classList.remove("active");
              navbarList.style.display= "none";
          }else{
              navbarList.classList.add("active");
              navbarList.style.display= "block";

          }
},
      //End Toggle Navbar Function Here .
 navBgOnScroll: function(){
        let nav = document.querySelector('nav');
            if (window.scrollY <= 50) { // Just an example
                nav.classList.remove('active');
            } else {
                nav.classList.add('active');
            }
        
      },
      //End Navbar Scroll Here
  },
    
//Component Live Cycle Hooks    
created () {
    window.addEventListener('scroll', this.navBgOnScroll);
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
@import "../assets/sass/vars.scss";
//The nav Container
nav{
    transition: all ease-in-out 0.4s;
    display:flex;
    justify-content: space-between;
    flex-basis: 0;
    align-items: center;
    padding:25px 5%;
    z-index:999999;
    position: fixed;
    width: 90%;
  
    //The Logo and the brand name
    .brand-name{
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex:1;
        img{
            display: block;
            width:50px;
            height: 50px;
            border-radius:50%;
        }
        b{
            display: block;
            color:#fff;
            font-weight: bold;
        }
    }
    .navbar-mobile-toggle{
        display: none;
        cursor: pointer;
    }
    //Navigation Links
    ul.links-list{
        list-style: none;
        float:right;
        flex:5;
        text-align:right;
        li{
          display: inline-block;
          margin-left:5%;
          &.important-link{
              a{
                 border:2px solid #fff;
                 display: block;
                 border-radius:50px;
                 padding:14px 20px;
                  color:#fff;
                   &:hover{
                     background-color: #fff;
                     border-color: $brand;
                     transition: all ease .3s;
                     color:$brand;
                   }
              }
          }
          a{
              transition: all ease .3s; 
              color:#fff;
              font-weight: bold;
              text-decoration: none;
          }
          &:hover{
              a{
                  transition: all ease .3s;
                  color:$brand;
              }
          }
        }        
        &.active{
            animation: navbarAnimation 0.5s;
        }
    }

      &.active{
        padding:15px 7%;
        width: 86%;
        background-color:#fff;
        border-bottom: 4px solid $brand;
         ul.links-list a , .brand-name b {
            color:$black;
        }
         ul.links-list li.important-link a{
             color:#fff;
             background:$brand;
            &:hover{
                background: none;
                border-color: $brand;
                color:$brand;
            }           
        }
    }
}



/*KeyFrames Animation Fuckers :D */
@keyframes navbarAnimation {
    from{
        top: -100%;
    }
    to{
        top: 62px;
    }
}

@media screen and (max-width: 768px) {
nav{
    box-sizing: border-box;
    padding:10px;
    width: 100%;
    &.active{
        box-sizing: border-box;
        width:100%;
        padding:10px;
        background-color: #fff;
        border-bottom:2px solid $brand;
        ul.links-list li a{
            color:#fff;
        }
}
    //The Logo and the brand name
    .brand-name{
        flex:1;
        img{
            width:40px;
            height: 40px;
        }
        b{
            display: none;
        }
    }
    .navbar-mobile-toggle{
        display: block;
        flex:3;
        margin-left: auto;
        text-align: right;
        padding-right: 25px;
        img{
            width: 30px;
            height: 30px;
            cursor: pointer;
            z-index: 111111;
        }
    }
    //Navigation Links
    ul.links-list{
        position: absolute;
        display: none;
        background-color: $brand;
        width: 100%;
        top: 62px;
        left:0;
        
        li{
          padding:10px;
          display: block;
          margin-left:0%;
          margin-bottom:15px;
          text-align:center;
          &:first-child{
              margin-top: 10px;
          }
          &.important-link{
              a{
                 border:2px solid #fff;
                 display: block;
                 border-radius:50px;
                 background:$brand;
                 padding:14px 20px;
                  color:#fff;
                   &:hover{
                     background-color: #fff;
                     border-color: $brand;
                     transition: all ease .3s;
                     color:$brand;
                   }
              }
          }
          a{
              transition: all ease .3s; 
              color:#fff;
              font-weight: bold;
              text-decoration: none;
          }
          &:hover{
              a{
                  transition: all ease .3s;
                  color:$brand;
              }
          }
        }
    }
}
}
</style>
