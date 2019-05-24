<template>
    <div>
<!--         <h1>InfoPratique</h1>
        <nav>
        	<ul>
        		<li><a href="">Acces</a></li>
        		<li><a href="">Tarifs</a></li>
        		<li><a href="">Réglement interieur</a></li>
        	</ul>
        </nav> -->

        <tarifs/>
        <acces/>
        <reglementinterieur/>

    </div>
</template>

<script>
    import tarifs from "./Tarifs";
    import acces from "./Acces";
    import reglementinterieur from "./ReglementInterieur";
    import SubMenu from "../nav/SubMenu";


    export default {
        name : "InfoPage",
        components:{SubMenu, tarifs, acces, reglementinterieur},
    }
</script>

<style type="text/css" scoped lang="scss">
*{
    overflow-x: hidden;
}

</style>