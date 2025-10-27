package bitc.full502.backend.service;

import bitc.full502.backend.dto.AgencyProductDTO;
import bitc.full502.backend.entity.AgencyProductEntity;
import bitc.full502.backend.repository.AgencyProductRepository;
import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Service;

import java.util.List;
import java.util.stream.Collectors;

@Service
@RequiredArgsConstructor
public class AgencyProductService {

    private final AgencyProductRepository repository;

    public List<AgencyProductDTO> getAllAgencyProducts(String sortField, String sortOrder) {
        List<AgencyProductEntity> entities = repository.findAll();

        return entities.stream()
                .map(e -> {
                    AgencyProductDTO dto = new AgencyProductDTO();
                    dto.setPdKey(e.getProduct().getPdKey());
                    dto.setAgName(e.getAgency().getAgName());
                    dto.setPdNum(e.getProduct().getPdNum());
                    dto.setPdProducts(e.getProduct().getPdProducts());
                    dto.setPdPrice(e.getProduct().getPdPrice());
                    dto.setApStore(e.getApStore());
                    dto.setStock(e.getStock());
                    return dto;
                })
                .sorted((a, b) -> {

                    int result = b.getAgName().compareTo(a.getAgName());
                    if (result != 0) return result;
                    result = b.getPdNum().compareTo(a.getPdNum());
                    if (result != 0) return result;

                    return b.getApStore().compareTo(a.getApStore());
                })
                .collect(Collectors.toList());
    }
}
