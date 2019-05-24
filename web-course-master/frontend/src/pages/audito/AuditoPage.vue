<template>
	<div class="audito_info">

        <sub-menu :menus="menus"></sub-menu>
        <router-view> </router-view>
        

        
	</div>
</template>

<script>
	 import axios from "axios";
     import SubMenu from "../nav/SubMenu"

	  export default {
        name : "AuditoPage",
        components:{SubMenu},
        data(){
            return {
                menus:[
                    {
                        title:"Présentation générale",
                        path:"/audito/general"
                    },
                    {
                        title:"Contact",
                        path:"/audito/contact"
                    },
                ],
            }

        },
        computed : {

        },
        methods : {
            // selected(el){
            //     let test = document.querySelectorAll(".audito_one_button");
            //     for(let t of test){
            //         t.style.color = "blue";
            //     }
                
            //     el.target.style.color = "red";
            // }
        },  
        mounted(){
           
        }
    }




</script>

<style type="text/css" scoped lang="scss">
    

    .audito_one_button:hover{
        filter: none;
        box-shadow: none;
        transition: ease-out 0.35s;
    }

    .router-link-exact-active div{
        filter: none;
        box-shadow: none;
    }

    .audito_one_button{
        filter: brightness(50%);
        box-shadow: 0 -60px -20px 0 black inset;
        
    }
    

    a{
        text-decoration: none;
    }

    a:visited{
        text-decoration: none;
    }

    a:active{
        text-decoration: none;
    }

    .audito_info{
        padding: 0 2%;
    }
    .audito_info h1{
       text-align: center;
       font-size: 40pt;
    }
    .audito_info .intro{
        margin-top: 1vh;
        text-align: center;
    }
    .audito_info .bar{
        display: inline-block;
        width: 100%;
    }
    .info_menu{
        width: 90%;
        display: inline-flex;
        list-style-type: none;
    }
    .info_menu li{
        margin: 0 10px 0 10px;
        text-decoration: underline;
        cursor: pointer;
    }

    .audito_details h2{
        margin-top: 7vh;
        margin-bottom: 4vh;
        text-align: center;
    }

    .audito_details{
        overflow-wrap: break-word;
        flex-wrap: wrap;
    }

    #audito_details_cinema{
        background-color: $light_red;
        text-align: center;
        line-height: 25vh;
        color: white;
        height: 25vh;
        width: 100%;
      
    }

    #audito_details_theatre{
        background-color: $menu_color_selected;
        text-align: center;
        line-height: 25vh;
        color: white;
        height: 25vh;
        width: 100%;
    }

    #audito_details_seminaire{
        background-color: $light_red;
        text-align: center;
        line-height: 25vh;
        color: white;
        height: 25vh;
        width: 100%;
    }

    #audito_details_autres{
        background-color: $menu_color_selected;
        text-align: center;
        line-height: 25vh;
        color: white;
        height: 25vh;
        width: 100%;
    }

    #audito_buttons{
        width: 100%;
        display: inline-flex;
        flex-direction: row;
    }

    #audito_buttons a{
        width: 100%;
    }

</style>