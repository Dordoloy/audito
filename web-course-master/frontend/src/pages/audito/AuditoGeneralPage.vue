<template>
	<div class="audito_info">

        <section class="audito_details">
            <div>
                <h2>L'audito est une salle de cinéma proposant plusieures prestations, telles que l'hebergement d'événements, de séminaires, de pièces de théatre, et bien d'autres encore !</h2>
            </div>
            <div @click="scrollDown()" id="audito_buttons">

                <router-link :to="{ path: '/audito/general/cinema'}" append>
                    <div @click="scrollDown()" class="audito_one_button" id="audito_details_cinema" >
                         <h1>Cinéma</h1>
                    </div>
                </router-link>

                <router-link :to="{ path: '/audito/general/theater'}" append>
                    <div @click="scrollDown()" class="audito_one_button" id="audito_details_theatre" >
                        <h1>Théatre</h1>
                    </div>
                </router-link>

                <router-link :to="{ path: '/audito/general/seminary'}" append>
                    <div @click="scrollDown()" class="audito_one_button" id="audito_details_seminaire">
                        <h1>Séminaires</h1>
                    </div>
                </router-link>

                <router-link :to="{ path: '/audito/general/others'}" append>
                    <div @click="scrollDown()" class="audito_one_button" id="audito_details_autres">
                        <h1>Autres</h1>
                    </div>
                </router-link>

            </div>

            <router-view></router-view>
            
        </section>
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
                        path:"/audito"
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
            scrollDown(){
                console.log("yolo");
                var container = document.querySelector("html");
                // container.scrollTop = container.scrollHeight;
                container.scroll({
                    top: container.scrollHeight,
                    left: 0,
                    behavior: 'smooth'
                })
            }
        },  
        mounted(){
           
        }
    }




</script>

<style type="text/css" scoped lang="scss">
    

   /* .audito_one_button:hover{
        filter: none;
        box-shadow: none;
        transition: ease-out 0.35s;
    }*/

    .router-link-exact-active div{
        filter: none;
        box-shadow: none;
    }


    .audito_one_button:hover{
        filter: brightness(100%);
        transition: ease-out 0.5s;
    }

    .audito_one_button{
        filter: brightness(70%);
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
        background-color: #e3831c;
        text-align: center;
        line-height: 25vh;
        color: white;
        height: 25vh;
        width: 100%;
      
    }

    #audito_details_theatre{
        background-color: #D43B3B;
        text-align: center;
        line-height: 25vh;
        color: white;
        height: 25vh;
        width: 100%;
    }

    #audito_details_seminaire{
        background-color: #e3831c;
        text-align: center;
        line-height: 25vh;
        color: white;
        height: 25vh;
        width: 100%;
    }

    #audito_details_autres{
        background-color: #D43B3B;
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