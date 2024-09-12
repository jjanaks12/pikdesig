import axios from "axios"

const axiosInstance = axios.create({
    baseURL: "/wp-json/pikdesign/v1/"
})

export { axiosInstance as axios }