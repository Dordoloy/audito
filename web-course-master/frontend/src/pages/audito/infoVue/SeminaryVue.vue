<template>
	<div id="seminaryvue_content">
		<div id="seminaryvue_content_text">
            <h1>De nombreux séminaires à disposition !</h1>
            <p>Vous êtes assoiffés de connaissance ? Vous souhaitez enrichir votre culture générale ? L'Audito propose de nombreux séminaires, tous portants sur des sujets divers et variés. À petit ou grand comités, faites de nouvelles rencontres et partagez !</p>
            <p>Consultez les séminaires à venir <router-link :to="{path: '/events'}">ici</router-link> !</p>
        </div>
        <div id="seminaryvue_content_pictures">
            <img src="https://media.giphy.com/media/12XMGIWtrHBl5e/giphy.gif">
        </div>
	</div>
</template>

<script>

	  export default {
        name : "SeminaryVue",
        data(){
            return {

            }

        },
        computed : {

        },
        methods : {

        },  
        mounted(){
           
        }
    }




</script>

<style type="text/css" scoped lang="scss">
    
   h1{
        margin-bottom: 5vh;
        font-size: 22pt;
    }

    a:visited{
        text-decoration: underline;
        color: white;
    }

    a:active{
        text-decoration: underline;
        color: white;
    }

    #seminaryvue_content{
        display: flex;
        height: 44vh;
        margin-bottom: 5vh;
        background-color: #e3831c;
        color: white;
        font-size: 12pt;
        
    }

    #seminaryvue_content_text{
        flex-direction:column;
        flex: 1 1 70%;
        padding: 5vh 10vw 5vh 5vw;
    }

    #seminaryvue_content_text p{
        margin: 2vh 0vw 2vh 0vw;
    }

    #seminaryvue_content_text p a{
        font-weight: bold;
    }

    #seminaryvue_content_pictures{
        flex: 1 1 30%;
        padding: 5vh 5vw 5vh 10vw;
    }

    #seminaryvue_content_pictures img{
        height: 100%;
        width: auto;
    }


</style>