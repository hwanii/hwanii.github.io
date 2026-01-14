# User Authentication Project

Spring Security와 JWT를 활용한 사용자 인증 중심의 풀스택 웹 애플리케이션입니다.  
회원가입, 로그인, 로그아웃, 토큰 발급 및 인증 흐름을 직접 설계하고 구현했습니다.

---

## Tech Stack

- Backend: Java 17, Spring Boot, Spring Security, JWT, JPA  
- Frontend: React, JavaScript, Axios  
- Database: MySQL  

---

## What I Implemented

- 회원가입 기능 구현  
- 로그인 / 로그아웃 처리  
- JWT Access Token 발급 및 검증  
- 인증 토큰 기반 로그인 상태 유지  
- 인증 사용자에 대한 API 접근 제어  

---

## Challenges & Solutions

- 로그인 상태 유지 문제  
  → JWT 토큰을 클라이언트에 저장하고 요청 시 자동 포함하도록 처리  

- 401 Unauthorized 오류  
  → Authorization 헤더를 공통 로직으로 관리하여 해결  

---

## What I Learned

- Spring Security 인증 흐름에 대한 이해  
- JWT 기반 인증 방식의 구조와 동작 원리  
- 프론트엔드와 백엔드 간 인증 책임 분리 경험  

---

## Links

- GitHub Repository: https://github.com/hwanii/finalproject  
- Portfolio: https://hwanii.github.io  
- Demo Video: https://youtu.be/5J00lI2RbYQ  

---

본 프로젝트는 사용자 인증 기능 구현을 중심으로,  
실무에 가까운 인증 흐름을 경험하기 위해 진행한 개인 프로젝트입니다.