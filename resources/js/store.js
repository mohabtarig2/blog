import { isLoggedIn, logOut } from "./shared/utils/auth";

export default {
    state: {


        lastSearch: {
            from: null,
            to: null,

        },

        basket: {
            items: []
        },

        isLoggedIn: false,
        user: null,
        notificationlist:[],
        userToken:null,
        EditPost:{}
    },
    mutations: {

        EditPost(state,post){
            state.EditPost = post;
        },

        setUser(state, user) {
            state.user = user;
            Echo.connector.pusher.config.auth.headers.Authorization = `Bearer ${state.userToken}`
            Echo.private('App.User.' + state.user.id)
    .notification((notification) => {
        console.log('notification ',notification);
        state.notificationlist.unshift(notification);

    });
        },
       setUserToken(state,userToken){
            state.userToken = userToken;
            localStorage.setItem('userToken',JSON.stringify(userToken));
            axios.defaults.headers.common.Authorization = `Bearer ${userToken}`
        },

        setLoggedIn(state, payload) {
            state.isLoggedIn = payload;
        },

    },

    getters:{

        PostToEdit(state){
            return state.EditPost;
        },
        IsUser(state){
            if(state.user){

                return state.user.role_id
                 }
                 return null;
            },
            userid(state){
                if(state.user){

                    return state.user.id
                     }
                     return null;
                },
    },
    actions: {
       LoginUser({commit},payload){
            axios.post('login',payload)
            .then(res =>{

                console.log(res.data.token);
                console.log('here is token');
                axios.get('user').then(res=>{
                    console.log(res.data);
                })
            }).catch(err => {
                    console.log(err);
                    console.log('here no token');
            })
        },

        setLastSearch(context, payload) {

            context.commit('setLastSearch', payload);
            localStorage.setItem('lastSearch', JSON.stringify(payload));
        },
        loadStoredState(context) {



            context.commit("setLoggedIn", isLoggedIn());
        },

        async loadUser({ commit, dispatch }) {
            if (isLoggedIn()) {
                try {

                    const user = (await axios.get('user')).data;
                    const sacntum = (await axios.get('/token')).data.plainTextToken;
                    console.log(sacntum);
                    //console.log(user);
                    commit('setUserToken',sacntum)
                    commit("setUser", user);

                    commit("setLoggedIn", true);

                } catch (error) {
                    dispatch("logout");
                }

            }
        },
        logout({ commit }) {

            commit("setUser", {});
            commit("setLoggedIn", false);
            logOut();

        }
    },


}
