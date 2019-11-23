import Axios from "axios"

let actions = {
    async createTask({commit},task) {
       await axios.post('/api/tasks', task)
            .then(res => {
                commit('CREATE_TASK', res.data)})
            .catch(err => {console.log(err)})
    },
    async fetchTasks({commit}) {
        await axios.get('/api/tasks')
        .then(res => {
            commit('FETCH_TASK',res.data)
        })
        .catch(err => {console.log(err)})
    },
    async deleteTask({commit},task) {
        await axios.delete(`/api/tasks/${task.id}`)
        .then(res => {
            if (res.data === 'ok')
                commit('DELETE_TASK',task)
        })
        .catch(err => {console.log(err)})
    },
    async updateTask({commit}, task) {
       const response = await axios.put(`/api/tasks/${task.id}`, task)
        .then(res => {
            if (res.data === 'ok')
                console.log(response.data);
                commit('UPDATE_TASK',res.data);
        })
        .catch(err => {console.log(err)})
    }
}

export default actions