import Vue from 'vue'
import Vuex from 'vuex';
Vue.use(Vuex);

export default new Vuex.Store({
  state: {
    mart: []
  },

  getters: {
    items: (state) => state.mart
  },
  mutations: {
      
    /**
     * Init the mart data
     * 
     * @param {any} state 
     */
    updateSavedData (state, data) {
        state.mart = data;
      }

  },
  actions:{
    fetchData({ commit }) {
            axios.get('/data')
            .then(function (response) {
                console.log(response);
                commit('updateSavedData', response.data);
            })
            .catch(function (error) {
                console.log(error);
                commit('updateSavedData', []);
            });
            
        },
  }
})
