<template>
	<div>
		<h1 class="wp-heading-inline">Leave Type</h1>
		<a @click.prevent="showHideNewLeaveTypeForm()" href="#" class="page-title-action hrm-btn">
			Add New
		</a>
	</div>

</template>

<script>
    import Mixin from './mixin'
	
	export default {
		mixins: [Mixin]
	};
</script>