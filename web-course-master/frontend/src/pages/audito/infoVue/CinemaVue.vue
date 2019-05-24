<template>
	<div id="cinemavue_content">
		<div id="cinemavue_content_text">
            <h1>Une salle de cinéma idédite pleine de surprises !</h1>
            <p>Venez regarder une multitude de films À l'Audito ! Nous vous proposons un vaste catalogue de films, ou figurent les dernières créations des plus grands cinéastes du monde.</p>
            <p>Profitez des dernières technologies visuelles et auditives et appréciez le vrai cinéma.</p>
            <p>Retrouvez notre catalogue de films <router-link :to="{path: '/events'}">ici</router-link> !</p>
        </div>
        <div id="cinemavue_content_pictures">
            <img src="https://media1.tenor.com/images/6aa0ec98e4b2f39c9b821aa919279d5b/tenor.gif?itemid=4981198">
        </div>
        
	</div>
</template>

<script>

	  export default {
        name : "CinemaVue",
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

    #cinemavue_content{
        display: flex;
        height: 44vh;
        margin-bottom: 5vh;
        background-color: #e3831c;
        color: white;
        font-size: 12pt;
        
    }

    #cinemavue_content_text{
        flex-direction:column;
        flex: 1 1 70%;
        padding: 5vh 10vw 5vh 5vw;
    }

    #cinemavue_content_text p{
        margin: 2vh 0vw 2vh 0vw;
    }

    #cinemavue_content_text p a{
        font-weight: bold;
    }

    #cinemavue_content_pictures{
        flex: 1 1 30%;
        padding: 5vh 5vw 5vh 10vw;
    }

    #cinemavue_content_pictures img{
        height: 100%;
        width: auto;
    }



</style>