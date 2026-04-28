import axios, {AxiosRequestConfig} from 'axios'
import store from "../store";

const apiUrl = import.meta.env.VITE_API_URL

function setDefaultConfig (config?: AxiosRequestConfig)  {
    const token = store.getters['getAccessToken']

    const headers = {
        Authorization: token ? 'Bearer ' + store.getters['getAccessToken'] : null
    }

    return {
        ...config,
        headers: {
            ...headers,
            ...(config?.headers || {})
        }
    }
}

const api = {
    get(uri: string, config?: AxiosRequestConfig) {
        return axios.get(apiUrl + uri, setDefaultConfig(config));
    },

    post(uri: string, data?: any, config?: AxiosRequestConfig) {
        return axios.post(apiUrl + uri, data, setDefaultConfig(config))
    },
}

export default api
