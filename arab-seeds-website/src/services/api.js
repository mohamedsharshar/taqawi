import axios from 'axios';

const API_BASE_URL = process.env.REACT_APP_API_URL || 'http://localhost:8000/api/v1';

const api = axios.create({
  baseURL: API_BASE_URL,
  headers: {
    'Content-Type': 'application/json',
    'Accept': 'application/json',
  },
});

// Financial Statements
export const getFinancialStatements = async () => {
  const response = await api.get('/financial-statements');
  return response.data;
};

export const getFinancialStatement = async (id) => {
  const response = await api.get(`/financial-statements/${id}`);
  return response.data;
};

// Meeting Minutes
export const getMeetingMinutes = async () => {
  const response = await api.get('/meeting-minutes');
  return response.data;
};

export const getMeetingMinute = async (id) => {
  const response = await api.get(`/meeting-minutes/${id}`);
  return response.data;
};

// IR Manager
export const getIrManager = async () => {
  const response = await api.get('/ir-manager');
  return response.data;
};

export default api;
