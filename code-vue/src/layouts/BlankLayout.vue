<template>
  <div>
<!--    <Loader />-->
    <div class="wrapper">
      <router-view/>
    </div>
  </div>
</template>
<script>
import { mapGetters, mapActions } from 'vuex'
export default {
  name: 'BlankLayout',
 data(){
        return{
            dark:false
        }
    },
    computed : {
        ...mapGetters({
            stateDark: 'dark'
        })
    },
    mounted(){
        this.dark = this.stateDark
        this.changeMode(this.stateDark)
    },
    watch:{
     dark:function(){
        this.changeMode(this.dark)
     }
    },
    methods: {
        ...mapActions({
        modeChange: 'layoutModeAction'
        }),
        changeMode(value){
            this.modeChange({ dark: value })
            const body = document.querySelector('body')
            if (value) {
                body.classList.add('dark')
            } else {
                body.classList.remove('dark')
            }
        },
    }
}
</script>
<style>
  .modal-backdrop {
    opacity: .5;
  }
</style>
