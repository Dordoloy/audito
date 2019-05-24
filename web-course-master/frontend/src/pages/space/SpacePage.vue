<template>
	<div>

		<sub-menu :menus="menus"></sub-menu>
		<router-view></router-view>

	</div>

</template>

<script>
	 import axios from "axios";
	 import SubMenu from "../nav/SubMenu";

	 export default {
        name : "SpacePage",
		 components:{SubMenu},
        data(){
            return {
				menus:[
					{
						title:"Demande",
						path:"/space/newEvent"
					},
					{
						title:"Vos évènements",
						path:"/space/myEvents"
					},
					{
						title:"Reserver une salle",
						path:"/space/myBooking"
					},
				],
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

<style scoped lang="scss">


</style>