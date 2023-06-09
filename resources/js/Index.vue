<template>
<div>
	<!-- CUT AND PASTE FROM welcome.blade.php -->
	<router-view></router-view>
</div>
</template>

<script>
export default {
  props: {restaurants: Object}
}
</script>