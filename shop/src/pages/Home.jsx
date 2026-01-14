import { Link } from "react-router-dom";

const Home = () => {
  const products = [
    { id: 1, name: "상품 1", price: 10000 },
    { id: 2, name: "상품 2", price: 20000 },
    { id: 3, name: "상품 3", price: 30000 },
  ];

  return (
    <div>
      <h1>홈 페이지</h1>
      <div style={{ display: "flex", gap: "16px" }}>
        {products.map((product) => (
          <Link key={product.id} to={`/product/${product.id}`}>
            <div style={{ border: "1px solid #ddd", padding: "16px" }}>
              <h2>{product.name}</h2>
              <p>가격: {product.price}원</p>
            </div>
          </Link>
        ))}
      </div>
    </div>
  );
};

export default Home;