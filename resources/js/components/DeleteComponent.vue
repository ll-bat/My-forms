<template>
           <div> 
                <button class='bg-transparent' @click='emitDeleteEvent()' 
                        style='cursor:pointer;border:none;outline:0'
                        :disabled='disabled'
                        >



                    <!-- <i class="fa fa-trash text-danger h-hover-grey"></i> -->
                    <img src='/icons/trash.png' width='18' class='mt-1' />
                </button>
            </div>
</template>

<script>
    export default {

        data(){

            return {
                disabled: false
            }
        },
        methods: {
           emitDeleteEvent(){
                this.disabled=true
                setTimeout(()=>{
                    this.disabled = false
                },200)
                this.$emit('delete')
            }
       }
    }
</script>
<style>
 
</style>