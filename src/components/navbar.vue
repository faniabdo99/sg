<template>
      <nav :class="{ active: navActive }" :scroll="navBgOnScroll">
        <router-link to="/" class="brand-name">
                <div><img src="img/logo.png" alt="Logo" title="Semicolon Group" /></div>
                <div><b><span>S</span>emicolon Group</b></div>
        </router-link>
          <div class="navbar-mobile-toggle">
             <a @click.prevent="ToggleNavbar()"><i class="fas fa-bars"></i></a>
          </div>
          <transition name="fade">
            <ul class="links-list">
                <li><a href="/#about" v-smooth-scroll="{ duration: 1000, offset: -80 }">About</a></li>
                <li><a href="/#services" v-smooth-scroll="{ duration: 1200, offset: -85 }">Services</a></li>
                <li><a href="/#portfolio" v-smooth-scroll="{ duration: 1500, offset: -40 }">Portfolio</a></li>
                <li><a href="/#pricing" v-smooth-scroll="{ duration: 2400, offset: -80 }">Pricing</a></li>
                <li><a href="/#contact" v-smooth-scroll="{ duration: 2800, offset: -80 }">Contact Us</a></li>
                <li class="important-link"><router-link to="request">Free Consultation</router-link></li>
            </ul>
          </transition>
      </nav>
</template>

<script>
export default {
  name: 'Navbar',
  props: ['navActive'],
  data: function(){
    return {
    }
  },
  methods:{
      ToggleNavbar : function(){
          let navbarList = document.querySelector(".links-list");
          if(navbarList.classList.contains('active')){
              navbarList.classList.remove("active");
          }else{
              navbarList.classList.add("active");
          }
},
      //End Toggle Navbar Function Here .
 navBgOnScroll: function(){
        let nav = document.querySelector('nav');
        if(this.navActive == true){
          nav.classList.add('active');
        }else{
          if (window.scrollY <= 50) { // Just an example
              nav.classList.remove('active');
          } else {
              nav.classList.add('active');
          }
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
        text-decoration: none;
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
    }
    //Navigation Links
    ul.links-list{
        list-style: none;
        float:right;
        flex:5;
        text-align:right;
        transition:all ease 0.5s;

        li{
          display: inline-block;
          margin-left:5%;
          &.active{
            a{
              color:$brand;
            }
          }
          &.important-link{
              a{
                 border:2px solid #fff;
                 display: block;
                 border-radius:50px;
                 padding:14px 20px;
                 color:#fff;
                 &::after{
                     width:0;
                     height:0;
                     margin:0;
                 }

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
                &::after{
                    content: "";
                    display: block;
                    width:50%;
                    height:2px;
                    margin:4px auto 0 auto;
                    background-color: #fff;
                    border-radius:5px;
                    transform: translateY(15px);
                    opacity:0;
                    transition: all ease .3s;
                }
          }
          &:hover{
              a{
                  &::after{
                      transition: all ease .3s;
                      opacity: 1;
                      transform: translateY(0);
                  }
              }
          }
        }
        &.active{
            opacity:1;
            display: block;
            transition:all ease 0.5s;
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
        .navbar-mobile-toggle{
            i{
                color:$brand;
            }
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
        flex:3;
        display: block;
        margin-left: auto;
        text-align: right;
        padding-right: 25px;
        i{
            font-size:1.5em;
            cursor: pointer;
            z-index: 111111;
            color:#fff;
        }
    }
    //Navigation Links
    ul.links-list{
        position: absolute;
        display: none;
        opacity: 0;
        background-color: $brand;
        width: 100%;
        top: 62px;
        left:0;
        transition:all ease 0.5s;


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
