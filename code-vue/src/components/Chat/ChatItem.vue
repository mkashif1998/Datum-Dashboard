<template>
 <li class="simple-item hover" @click="clicked">
	<div class="img-container">
		<div class="avatar avatar-60"> <img :src="item.image" :alt="item.image" class="img-fluid avatar-borderd avatar-rounded "> <span class="avatar-status">
        <i class="ri-checkbox-blank-circle-fill" :class="`text-${item.status}`"/>
      </span> </div>
	</div>
	<div class="simple-item-body">
		<div class="simple-item-title">
			<h5 class="title-text">{{ item.name }}</h5>
			<div class="simple-item-time"> <span>{{item.dateTime}}</span> </div>
		</div>
		<div class="simple-item-content"> <span class="simple-item-text short">
        {{item.msg}}
      </span>
			<b-dropdown id="dropdownMenuButton1" no-caret right variant="none p-0 shadow-none">
				<template v-slot:button-content>
					<button class="btn btn-link " type="button" :id="'chat-dropdown-'+item.id"> 
						<svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
						</svg> 
					</button>
				</template>
				<b-dropdown-item>{{ ('Move Archive') }}</b-dropdown-item>
				<b-dropdown-item>{{ ('Favourite') }}</b-dropdown-item>
				<b-dropdown-item>{{ ('Delete') }}</b-dropdown-item>
			</b-dropdown>
		</div>
	</div>
</li>
</template>
<script>
export default {
  name: 'ChatItem',
  props: {
    item: { type: Object }
  },
  methods: {
    clicked (e) {
      this.$emit('click',e)
    }
  }
}
</script>
