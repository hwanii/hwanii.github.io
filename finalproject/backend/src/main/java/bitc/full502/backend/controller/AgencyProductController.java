package bitc.full502.backend.controller;

import bitc.full502.backend.dto.AgencyProductDTO;
import bitc.full502.backend.entity.AgencyProductEntity;
import bitc.full502.backend.repository.AgencyProductRepository;
import bitc.full502.backend.service.AgencyProductService;
import lombok.RequiredArgsConstructor;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;

/**
 * AgencyProductController
 * ----------------------
 * 대리점 취급 품목 관리용 API
 * - 특정 대리점 취급 품목 조회
 * - 주문 추가/삭제 시 바로 반영 가능
 */
@RestController
@RequestMapping("/api/agency") // 대리점 전용 경로
@RequiredArgsConstructor
@CrossOrigin(origins = "http://localhost:5173") // 프론트 포트 허용
public class AgencyProductController {

  private final AgencyProductRepository agencyProductRepository;
  private final AgencyProductService service;

  //============================================================
  // 대리점 선택 시 취급 품목 조회
  //============================================================
  /**
   * GET /api/agency/{agencyId}/products
   * -----------------------------
   * 선택한 대리점의 품목을 조회합니다.
   *
   * @param agencyId 대리점 고유 ID
   * @return List<AgencyProductEntity>
   */
  @GetMapping("/{agencyId}/products")
  public ResponseEntity<List<AgencyProductEntity>> getAgencyProducts(@PathVariable int agencyId) {
    // JPA Repository에서 agencyId로 연관된 제품 조회
    List<AgencyProductEntity> products = agencyProductRepository.findByAgency_AgKey(agencyId);
    return ResponseEntity.ok(products);
  }

  //============================================================
  // 대리점에 제품 등록 (1번 리스트 -> 2번 리스트)
  //============================================================
  /**
   * POST /api/agency/{agencyId}/register
   * -----------------------------
   * 선택된 품목들을 대리점에 등록합니다.
   *
   * @param agencyId 대리점 고유 ID
   * @param productIds 본사 제품 pdKey 배열
   * @return 등록 후 상태 (간단히 OK)
   */
  @PostMapping("/{agencyId}/register")
  public ResponseEntity<String> registerProducts(
      @PathVariable int agencyId,
      @RequestBody List<Integer> productIds
  ) {
    // TODO: 실제 DB insert 로직 구현
    // 예: agencyProductRepository.saveAll(...)
    return ResponseEntity.ok("등록 완료");
  }

  //============================================================
  // 대리점에서 제품 삭제 (2번 리스트 -> 1번 리스트)
  //============================================================
  /**
   * POST /api/agency/{agencyId}/delete
   * -----------------------------
   * 선택된 품목들을 대리점에서 제거합니다.
   *
   * @param agencyId 대리점 고유 ID
   * @param productIds 삭제할 제품 pdKey 배열
   * @return 삭제 후 상태 (간단히 OK)
   */
  @PostMapping("/{agencyId}/delete")
  public ResponseEntity<String> deleteProducts(
      @PathVariable int agencyId,
      @RequestBody List<Integer> productIds
  ) {
    // TODO: 실제 DB delete 로직 구현
    // 예: agencyProductRepository.deleteAll(...)
    return ResponseEntity.ok("삭제 완료");
  }

  @GetMapping("/agencyproducts")
  public List<AgencyProductDTO> getAgencyProduct(
      @RequestParam(defaultValue = "agName") String sortField,
      @RequestParam(defaultValue = "desc") String sortOrder
  ) {
    return service.getAllAgencyProducts(sortField, sortOrder);
  }

}
