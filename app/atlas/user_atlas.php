<?

namespace app\atlas;
class userATLAS{
    public function __construct(
        public ?int $id,
        public ?string $name = null,
        public ?string $email = null,
        public ?string $password = null,
        public ?string $usertype = null,
        public ?string $description = null,
        public ?string $token = null
    ){}

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $nickname): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getUserType(): string
    {
        return $this->usertype;
    }

    public function setUserType(string $usertype): void
    {
        $this->usertype = $usertype;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): void
    {
        $this->token = $token;
    }
}

?>
