/*
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

@Service
public class TransactionalService {
    @Autowired
    private UserRepository userRepository;

    @Transactional
    public void performTransactionalOperation() {
        User user = new User();
        user.setName("Transactional User");
        user.setEmail("transactional@example.com");
        userRepository.save(user);
        // Some other operation that might throw an exception
    }
}
*/