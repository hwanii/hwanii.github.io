import { useParams, Link } from "react-router-dom";

const ProductDetail = () => {
  const { id } = useParams();

  const product = { id, name: `상품 ${id}`, price: id * 10000 };

  return (
    <div>
      <h1>상품 상세 페이지</h1>
      <h2>{product.name}</h2>
      <p>가격: {product.price}원</p>
      <Link to="/cart">장바구니 보기</Link>
    </div>
  );
};

export default ProductDetail;