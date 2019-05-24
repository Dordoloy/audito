<template>
    <div>
        <h3>Incription</h3>

       <input v-model="user.email"/>
       <input v-model="user.password"/>

       <button @click="register">Enregistrer</button>

    </div>
</template>

<script>

    export default {
        name: "SubscribePage"
    }
</script>

<style scoped>

</style>