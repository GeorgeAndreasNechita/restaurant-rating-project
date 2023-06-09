<template>
  <div class="container">
    <restaurant-component></restaurant-component>
  </div>
</template>

<script>
import RestaurantComponent from "./RestaurantComponent.vue";

export default {
  components: {
      'restaurant-component': RestaurantComponent
  },
  mounted() {},
};
</script>
