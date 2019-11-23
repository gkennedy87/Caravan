<template>
    <div class="container text-center">
       
       
                <ul class="list-group mb-4">
                    <li v-for="task in tasks" :key="task.id" v-bind:class="{'is-complete':task.completed}" class="list-group-item d-flex justify-content-between align-items-center">
                        <input type="checkbox" v-on:change='completeTask(task)' v-bind:checked='task.completed'>
                            {{task.name}}
                        <button @click="deleteTask(task)" class="btn btn-sm btn-danger ml-3 float-right"><i class="fas fa-trash-alt"></i></button>
                    </li>
                </ul>
       
    </div>
</template>

<script>
    import { mapGetters, mapActions } from 'vuex'
    export default {
        name: 'TaskList',
    
        methods: {
            ...mapActions(['fetchTasks','deleteTask','updateTask']),
            completeTask(task) {
                const compTask = {
                    id: task.id,
                    name: task.name,
                    completed: !task.completed
                };
                this.updateTask(compTask);
            }

        },
        computed: mapGetters(['tasks']),
        created() {
            this.fetchTasks();
        },
        mounted() {
            console.log('TaskList mounted');
        }
    }
</script>

<style scoped>
    .container {
    
        /*background-color:#235789;
        color: #FDFFFC; */
        border-radius: 5px;

    }

    #checkbox {
        height: 31px;
        width: 31px;
    }

    .li-wide {
        width: 30rem;
    }

    .is-complete {
        text-decoration: line-through;
    }
</style>