<script setup lang="ts">
import NavbarComponent from '@/components/NavbarComponent.vue';
import TableComponent from '@/components/TableComponent.vue';

</script>


<template>
<NavbarComponent/>
<TableComponent :title="name"/>

</template>

<style>

</style>

<script lang="ts">
export default {
        data() {
        return {
            name: "Veronica"
        }
    }
}
</script>
<!---->