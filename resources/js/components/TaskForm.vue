<template>
    <div class="container text-center">
       <form @submit="onSubmit" class="form-inline" type="post">
        <div class="form-group mb-1">
            <input type="text" class="form-control" v-model="task.name" placeholder="Add Task..." required>
            <button type="button" class="btn btn-success ml-1" @click.prevent="createTask(task)">Save</button>
        </div>
       <!--  <div class="form-group">
            <input type="textarea" class="form-control" v-model="task.description" placeholder="Ex. Japanese address order is zipcode, country, prefecture, city, street, #">
        </div> -->
        </form> 
    </div>
    
</template>

<script>
import { mapActions } from 'vuex';
export default {
    name: "TaskForm",
    data() {
        return {
            task: {
                name: '',
                completed:false
            }
        }
    },
    methods: {
        ...mapActions(['createTask']),
        onSubmit(e) {
            e.preventDefault();
            this.$store.dispatch('createTask',task);
            this.form.reset();
        }
    },
}
</script>

<style lang="sass" scoped>

</style>