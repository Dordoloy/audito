import axios from "axios";

const state = {
    status: null,
    token: null,
    user: null
};

const mutations = {
    setUser(state, user) {
        state.status = 'active';
        state.token = localStorage.getItem('jwtToken');
        state.user = user;
    },
    removeUser(state) {
        state.status = null;
        state.token = null;
        state.user = null;
    },
};

const actions = {
    async loadUser({commit}, params) {
        try {
            const res = await axios.post("/api/users/login_check", {
                email : "test@test.com",
                password : "password"
            });
            console.log(res);
        } catch (e) {
            console.log(e);
        }
    },
    setUser(context, user){
        context.commit("setUser", user)
    },
    removeUser(context){
        context.commit("removeUser")
    }
};

const getters = {
    getUser: state => state.user
};

export default {
    state,
    getters,
    actions,
    mutations,
};
