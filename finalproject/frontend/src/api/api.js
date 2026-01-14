import axios from "axios";

// ================== Axios 인스턴스 생성 ==================
const api = axios.create({
  baseURL: "http://localhost:8080/api", // 기본 URL
  withCredentials: true, // 쿠키가 필요할 경우
});

// ================== 요청 인터셉터 ==================
// JWT가 있으면 Authorization 헤더에 자동 추가
api.interceptors.request.use(
  (config) => {
    // 로컬스토리지에서 토큰 가져오기
    const token = localStorage.getItem("token");
    if (token) {
      config.headers.Authorization = `Bearer ${token}`;
    }
    return config;
  },
  (error) => Promise.reject(error)
);

// ================== 로그아웃 함수 ==================
export const logout = () => {
  // 토큰 삭제
  localStorage.removeItem("token");
  
  // 로그인 페이지로 이동
  window.location.href = "/";
};

export default api;