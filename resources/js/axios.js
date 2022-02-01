// axios
import axios from 'axios'
import router from './router'
const domain = ""
const token = window.localStorage.getItem("company_user_token");

const adapter = axios.create({
    domain,
})

if (token) {
    axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
    axios.defaults.headers.common['Accept'] = "application/json";
}

axios.interceptors.response.use(
    response => response,
    error => {
        // const { config, response: { status } } = error
        const {
            config,
            response
        } = error
        const originalRequest = config
        console.log(response);

        // if (status === 401) {
        if (response && response.status === 401) {

            const msg = response.data.message ?
                response.data.message :
                'Unauthorized'
            logOut(msg);
        } else if (response && response.status === 500) {
            // alert() 
            // console.log(response.data.message);
        }
        return Promise.reject(error)
    },
)

export const logOut = (msg) => {
    localStorage.removeItem("company_user_token");
    localStorage.removeItem("company_user");
    router.replace({
        name: "login"
    }).then(() => {
        VsToast.show({
            title: "Error!",
            message: msg,
            variant: "error"
        });
    }).catch(() =>{
    });
}

export default adapter
