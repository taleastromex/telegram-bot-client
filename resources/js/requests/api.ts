import axios, {AxiosRequestConfig} from 'axios'
import { useUserStore } from "../store/user";

const apiUrl = import.meta.env.VITE_API_URL

function setDefaultConfig (config?: AxiosRequestConfig)  {
    const token = useUserStore().getAccessToken

    const headers = {
        Authorization: token ? 'Bearer ' + token : null
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
