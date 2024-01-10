import axios from 'axios';
const baseURL = 'api/';

const httpClient = axios.create({
    baseURL,
});

httpClient.interceptors.request.use(function (config) {
    let getAuthToken = () => localStorage.getItem('token');
    config.headers.Authorization = `Bearer ${getAuthToken()}`;

    return config;
});

export default httpClient;