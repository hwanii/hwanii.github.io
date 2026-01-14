import React, { useState, useRef, useEffect } from 'react';
import { createPortal } from 'react-dom';
import headStyles from "./Head_jin.module.css";

function PdImgZoom({ imageUrl, altText, children }) {
  const [isHovered, setIsHovered] = useState(false);
  const [position, setPosition] = useState({ top: 0, left: 0 });
  const buttonRef = useRef(null);

  // 이미지 없을 때 기본이미지
  const placeholderImageUrl = "https://via.placeholder.com/200/cccccc/ffffff?text=No+Image";

  useEffect(() => {
    if (isHovered && buttonRef.current) {
      const rect = buttonRef.current.getBoundingClientRect();
      // 버튼 위치 기준으로 화면 좌표 계산
      setPosition({
        top: rect.top + window.scrollY,
        left: rect.right + 10 + window.scrollX,
      });
    }
  }, [isHovered]);

  const overlay = (
    <div className={headStyles.pd_zoom_img}
      style={{
        position: 'fixed',
        top: position.top,
        left: position.left,
      }}
      onMouseEnter={() => setIsHovered(true)}
      onMouseLeave={() => setIsHovered(false)}
    >
      <img
        src={
          imageUrl
            ? (imageUrl.startsWith('http')
              ? imageUrl
              : imageUrl.startsWith('/uploads/')
                ? `http://localhost:8080${imageUrl}`
                : `http://localhost:8080/uploads/product/${imageUrl}`)
            : placeholderImageUrl
        }
        alt={`${altText || "제품"} 이미지`}
      />
    </div>
  );

  return (
    <>
      <span
        ref={buttonRef}
        style={{ display: 'inline-block' }}
        onMouseEnter={() => setIsHovered(true)}
        onMouseLeave={() => setIsHovered(false)}
      >
        {children}
      </span>

      {/* Portal 사용 → body에 직접 렌더링 */}
      {isHovered && createPortal(overlay, document.body)}
    </>
  );
}

export default PdImgZoom;
